<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AngsuranResource\Pages;
use App\Models\Transaksi;
use App\Models\Customer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class AngsuranResource extends Resource
{
    protected static ?string $model = Transaksi::class;

    protected static ?string $navigationIcon = 'heroicon-o-ticket';

    protected static ?string $navigationGroup = 'Data Angsuran';

    protected static ?string $navigationLabel = 'Angsuran Customer';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('no')
                    ->required()
                    ->label('No')
                    ->placeholder('Masukkan nomor'),

                Forms\Components\TextInput::make('bulan_angsuran')
                    ->required()
                    ->label('Bulan Angsuran')
                    ->placeholder('Masukkan bulan angsuran'),

                Forms\Components\TextInput::make('angsuran_ke')
                    ->required()
                    ->numeric()
                    ->label('Angsuran ke')
                    ->placeholder('Masukkan angsuran ke-'),

                Forms\Components\TextInput::make('nilai_angsuran')
                    ->required()
                    ->numeric()
                    ->label('Jumlah/Nilai Angsuran')
                    ->placeholder('Masukkan jumlah angsuran'),

                Forms\Components\DatePicker::make('tanggal_pembayaran')
                    ->required()
                    ->label('Tanggal Pembayaran')
                    ->placeholder('Pilih tanggal pembayaran'),

                Forms\Components\Select::make('customer_id')
                    ->label('Customer')
                    ->options(function () {
                        return Customer::pluck('nama', 'id');
                    })
                    ->required(),

                Forms\Components\Toggle::make('verifikasi')
                    ->label('Verifikasi')
                    ->onColor('success')
                    ->offColor('danger')
                    ->inline(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('customer.nama')
                    ->label('Customer Name')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('no')
                    ->label('Nomor Kontrak')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('tanggal_pembayaran')
                    ->label('Tanggal Pembayaran')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('customer_id')
                    ->label('Customer')
                    ->options(Customer::all()->pluck('nama', 'id')),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }


    public static function getRelations(): array
    {
        return [
            // Definisikan relasi jika diperlukan
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAngsurans::route('/'),
            'create' => Pages\CreateAngsuran::route('/create'),
            'edit' => Pages\EditAngsuran::route('/{record}/edit'),
            // 'view' => Pages\ViewAngsuran::route('/{record}'),
        ];
    }
}
