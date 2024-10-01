<?php

namespace App\Filament\Resources\CustomerResource\RelationManagers;

use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\RelationManagers\RelationManager\Concerns\InteractsWithRelationship;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Transaksi;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Notifications\Notification;

class TransaksiRelationManager extends RelationManager
{
    protected static string $relationship = 'transaksi'; // Nama relasi yang didefinisikan di model Customer

    protected static ?string $recordTitleAttribute = 'no'; // Field untuk dijadikan judul transaksi

    public function cetakPdf()
    {
        // Ambil semua transaksi yang ada dalam relasi customer ini
        $transaksi = $this->ownerRecord->transaksi()->get();

        // Load view khusus PDF dan passing data transaksi
        $pdf = Pdf::loadView('filament.resource.transaksi.pdf', compact('transaksi'));

        // Download file PDF dengan nama file tertentu
        return response()->streamDownload(
            fn() => print($pdf->output()),
            'riwayat-transaksi.pdf'
        );
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('no')
                    ->required()
                    ->label('Nomor Kontrak'),

                Forms\Components\TextInput::make('bulan_angsuran')
                    ->required()
                    ->label('Bulan Angsuran'),

                Forms\Components\TextInput::make('angsuran_ke')
                    ->required()
                    ->numeric()
                    ->label('Angsuran ke'),

                Forms\Components\TextInput::make('nilai_angsuran')
                    ->required()
                    ->numeric()
                    ->label('Nilai Angsuran'),

                Forms\Components\DatePicker::make('tanggal_pembayaran')
                    ->required()
                    ->label('Tanggal Pembayaran'),

                Forms\Components\Toggle::make('verifikasi')
                    ->label('Verifikasi')
                    ->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('no')
                    ->label('Nomor Kontrak')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('bulan_angsuran')
                    ->label('Bulan Angsuran')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('angsuran_ke')
                    ->label('Angsuran ke')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('nilai_angsuran')
                    ->label('Nilai Angsuran')
                    ->sortable()
                    ->searchable()
                    ->money('idr', true),

                Tables\Columns\TextColumn::make('tanggal_pembayaran')
                    ->label('Tanggal Pembayaran')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\ToggleColumn::make('verifikasi')
                    ->label('Verifikasi')
                    ->sortable(),
            ])
            ->filters([
                // Kamu bisa menambahkan filter di sini jika diperlukan
            ])
            ->headerActions([
                Tables\Actions\Action::make('cetakPdf')
                    ->label('Cetak PDF')
                    ->color('warning')
                    ->icon('heroicon-o-printer')
                    ->action(fn () => $this->cetakPdf()),
                Tables\Actions\CreateAction::make(), // Panggil method cetakPdf saat tombol diklik
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
