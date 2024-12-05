<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Siswa;
use App\Models\Prestasi;
use Filament\Tables\Table;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Support\Facades\Notification;
use App\Filament\Resources\PrestasiResource\Pages;

class PrestasiResource extends Resource
{
    protected static ?string $model = Prestasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-trophy';

    protected static ?string $navigationLabel = 'Prestasi';
    protected static ?string $navigationGroup = 'Data Konseling';
    protected static ?string $pluralModelLabel = 'Prestasi';
    protected static ?string $slug = 'prestasis';

    public static function handleCetakPdf($id)
    {
        // Ambil data pelanggaran beserta siswa dan kelas terkait
        $prestasi = Prestasi::with('siswa.kelas')->find($id);

        if (!$prestasi) {
            Notification::make()
                ->title('Data pelanggaran tidak ditemukan.')
                ->danger()
                ->send();

            return back();
        }

        // Load view PDF dengan data spesifik pelanggaran
        $pdf = Pdf::loadView('filament.resource.prestasi.pdf', compact('prestasi'));

        return response()->streamDownload(
            fn () => print($pdf->output()),
            "laporan-prestasi-{$prestasi->siswa->nama}.pdf"
        );
    }

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Select::make('siswa_id')
                    ->options(function () {
                        return Siswa::whereNotNull('nama')
                                    ->where('nama', '!=', '')
                                    ->pluck('nama', 'id')
                                    ->toArray();
                    })
                    ->required()
                    ->searchable(),
                TextInput::make('prestasi')
                    ->label('Jenis Prestasi')
                    ->required(),
                DatePicker::make('tanggal')
                    ->label('Tanggal Prestasi')
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
                TextColumn::make('prestasi')
                    ->label('Jenis Prestasi')
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
                Action::make('cetakPdfPerSiswa')
                    ->label('Laporan konseling')
                    ->icon('heroicon-o-printer')
                    ->color('warning')
                    ->action(fn ($record) => self::handleCetakPdf($record->id))
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
            // ->headerActions([
            //     Action::make('cetakPdfPerSiswa')
            //         ->label('Cetak PDF per Siswa')
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

    public static function getRelations(): array
    {
        return [
            // Add relations if necessary
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPrestasis::route('/'),
            'create' => Pages\CreatePrestasi::route('/create'),
            'edit' => Pages\EditPrestasi::route('/{record}/edit'),
        ];
    }
}
