<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use App\Models\Customer;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Gate;
use Filament\Widgets\TableWidget as BaseWidget;

class UserChart extends BaseWidget
{
    protected static ?string $heading = 'Custumer terbaru';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Customer::orderBy('created_at', 'desc') // Mengurutkan pelanggan berdasarkan tanggal pembuatan terbaru
                    ->limit(10) // Menampilkan 10 pelanggan terbaru
            )
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('no_hp')
                    ->label('No HP')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('alamat')
                    ->label('Alamat')
                    ->limit(50),

                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Dibuat')
                    ->dateTime('d M Y H:i:s') // Format tanggal
                    ->sortable(),
            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ])
            ->actions([
                // Tambahkan aksi jika diperlukan
            ]);
    }

    // public static function canView(): bool
    // {
    //     return Gate::allows('view', self::class);
    // }

    // public static function canAccess(): bool
    // {
    //     return auth()->user()->hasRole('super_admin');
    // }

}
