<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PelanggaranResource\Pages;
use App\Models\Pelanggaran;
use App\Models\Siswa;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use App\Models\Transaksi;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\Action;

class PelanggaranResource extends Resource
{
    protected static ?string $model = Pelanggaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-shield-exclamation';
    protected static ?string $navigationLabel = 'Pelanggaran';
    protected static ?string $navigationGroup = 'Data Konseling';
    protected static ?string $pluralModelLabel = 'Pelanggaran';
    protected static ?string $slug = 'pelanggarans';

    public static function cetakPdf()
    {
        // Ambil semua data pelanggaran
        $pelanggaran = Pelanggaran::all();

        // Load view untuk PDF dengan data pelanggaran
        $pdf = Pdf::loadView('filament.resource.transaksi.pdf', compact('pelanggaran'));

        // Stream file PDF
        return response()->streamDownload(
            fn () => print($pdf->output()),
            'laporan-pelanggaran.pdf'
        );
    }

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Select::make('siswa_id')
                    ->label('Nama Siswa')
                    ->options(function () {
                        return Siswa::whereNotNull('nama') // Ensure 'nama' is not null
                                    ->where('nama', '!=', '')  // Ensure 'nama' is not empty
                                    ->pluck('nama', 'id') // 'nama' is used as the label and 'id' as the value
                                    ->toArray();
                    })
                    ->required()
                    ->searchable(),
                Textarea::make('jenis_pelanggaran')
                    ->label('Jenis Pelanggaran')
                    ->required(),
                DatePicker::make('tanggal')
                    ->label('Tanggal Pelanggaran')
                    ->required(),
                Textarea::make('catatan')
                    ->label('Catatan')
                    ->nullable(),
                Textarea::make('keterangan')
                    ->label('Keterangan')
                    ->nullable(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('siswa.nama')
                    ->label('Nama Siswa')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('jenis_pelanggaran')
                    ->label('Jenis Pelanggaran')
                    ->searchable(),
                TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->date(),
                TextColumn::make('catatan')
                    ->label('Catatan')
                    ->limit(30),
                TextColumn::make('keterangan')
                    ->label('Keterangan')
                    ->limit(30),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Action::make('cetakPdf')
                    ->label('laporan konseling')
                    ->icon('heroicon-o-printer')
                    ->color('warning')
                    ->action(fn ($record) => self::handleCetakPdf($record->id))
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
            // ->headerActions([
            //     Action::make('cetakPdfPerSiswa')
            //         ->label('Laporan Konseling')
            //         ->icon('heroicon-o-printer')
            //         ->color('warning')
            //         ->form([
            //             Select::make('siswa_id')
            //                 ->label('Pilih Siswa')
            //                 ->options(Siswa::pluck('nama', 'id')->toArray())
            //                 ->required()
            //                 ->searchable(),
            //         ])
            //         ->action(fn (array $data) => self::handleCetakPdfPerSiswa($data['siswa_id'])),
            // ]);
    }

    public static function handleCetakPdf($id)
    {
        // Ambil data pelanggaran beserta siswa dan kelas terkait
        $pelanggaran = Pelanggaran::with('siswa.kelas')->find($id);

        if (!$pelanggaran) {
            Notification::make()
                ->title('Data pelanggaran tidak ditemukan.')
                ->danger()
                ->send();

            return back();
        }

        // Load view PDF dengan data spesifik pelanggaran
        $pdf = Pdf::loadView('filament.resource.transaksi.pdf', compact('pelanggaran'));

        return response()->streamDownload(
            fn () => print($pdf->output()),
            "laporan-pelanggaran-{$pelanggaran->siswa->nama}.pdf"
        );
    }

    public static function getRelations(): array
    {
        return [
            // Tambahkan relasi jika diperlukan
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPelanggarans::route('/'),
            'create' => Pages\CreatePelanggaran::route('/create'),
            'edit' => Pages\EditPelanggaran::route('/{record}/edit'),
        ];
    }
}
