<?php

namespace App\Filament\Resources;

use App\Models\User;
use App\Models\Customer; // Import model Customer
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use App\Filament\Resources\UserResource\Pages;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationGroup = 'Pengaturan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('hak_akses')
                    ->label('Hak Akses')
                    ->options([
                        'Customer' => 'Customer',
                    ])
                    ->reactive()
                    ->required(),

                // Select untuk Nama Customer
                Select::make('customer_id') // Menggunakan customer_id untuk memilih customer
                    ->label('Nama Customer')
                    ->options(function (callable $get) {
                        $hakAkses = $get('hak_akses');

                        if ($hakAkses === 'Customer') {
                            return Customer::pluck('nama', 'id');
                        }

                        return [];
                    })
                    ->afterStateUpdated(function ($state, callable $set, callable $get) {
                        $hakAkses = $get('hak_akses');

                        if ($hakAkses === 'Customer') {
                            $customer = Customer::find($state);
                            if ($customer) {
                                $set('name', $customer->nama);
                            }
                        }
                    })
                    ->searchable()
                    ->required(),

                Select::make('roles')
                    ->label('Role')
                    ->relationship('roles', 'name')
                    ->preload()
                    ->searchable()
                    ->reactive()
                    ->required(),

                // Menyimpan nama yang dipilih ke kolom name
                TextInput::make('name')
                    ->label('Nama')
                    ->disabled() // Field ini diisi otomatis dari Select
                    ->required() // Pastikan 'name' harus ada
                    ->dehydrated(true),

                TextInput::make('email')
                    ->required()
                    ->maxLength(255)
                    ->email(),

                TextInput::make('password')
                    ->password()
                    ->required()
                    ->maxLength(255)
                    ->dehydrateStateUsing(fn ($state) => Hash::make($state)), // Enkripsi password
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Nama'),
                Tables\Columns\TextColumn::make('email')->label('Email'),
                Tables\Columns\TextColumn::make('customer.nama')->label('Customer Name'), // Kolom untuk Customer Name
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
