<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerResource\Pages;
use App\Filament\Resources\CustomerResource\RelationManagers\InstallmentsRelationManager;
use App\Filament\Resources\CustomerResource\RelationManagers\TransaksiRelationManager;
use App\Models\Customer;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Illuminate\Database\Eloquent\Relations\Relation;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Data Customer';

    protected static ?string $navigationLabel = 'Customer';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->label('Nama')
                    ->placeholder('Masukkan nama'),

                Forms\Components\TextInput::make('no_hp')
                    ->required()
                    ->label('No HP')
                    ->tel()
                    ->placeholder('Masukkan no HP'),

                Forms\Components\Textarea::make('alamat')
                    ->required()
                    ->label('Alamat')
                    ->placeholder('Masukkan alamat'),

                Forms\Components\TextInput::make('email')
                    ->required()
                    ->label('Email')
                    ->email()
                    ->placeholder('Masukkan email'),

                Forms\Components\TextInput::make('nomor_kontrak')
                    ->required()
                    ->label('Nomor Kontrak')
                    ->placeholder('Masukkan nomor kontrak'),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
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

                Tables\Columns\TextColumn::make('nomor_kontrak')
                    ->label('Nomor Kontrak')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('nama')
                    ->label('Filter by Nama')
                    ->options(
                        Customer::all()->pluck('nama', 'id')->toArray()
                    ),
            ])
            ->actions([
                // Tables\Actions\ViewAction::make(),
                // Tables\Actions\DeleteAction::make(),
                Tables\Actions\EditAction::make()
                ->label('View')
                ->icon('heroicon-s-eye'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
        //    InstallmentsRelationManager::class, // Pastikan ini mengarah ke namespace yang benar
                TransaksiRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }
}
