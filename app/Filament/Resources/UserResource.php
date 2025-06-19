<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $label = 'Akun Admin';

    protected static ?string $pluralLabel = 'Daftar Admin';

    protected static ?string $navigationLabel = 'Akun Admin';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-group';

    protected static ?string $navigationGroup = 'Kelola Akun Admin';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama Lengkap')
                    ->required()
                    ->placeholder('Masukan nama lengkap'),
                TextInput::make('email')
                    ->label('Alamat Email')
                    ->required()
                    ->email()
                    ->placeholder('Masukan alamat email')
                    ->unique(ignoreRecord: true)
                    ->rule('regex:/^[a-zA-Z0-9._%+-]+@gmail\.com$/')
                    ->helperText('Gunakan email @gmail.com yang aktif dan belum pernah digunakan sebelumnya.')
                    ->validationMessages([
                        'unique' => 'Email ini sudah terdaftar, silakan gunakan email lain.',
                        'regex' => 'Format email tidak valid. Gunakan email dengan domain @gmail.com',
                    ]),
                TextInput::make('password')
                    ->label('Password')
                    ->required()
                    ->password()
                    ->placeholder('Masukan password'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no')
                    ->label('No')
                    ->rowIndex(),
                TextColumn::make('name')->label('Nama Lengkap'),
                TextColumn::make('email')->label('Email'),
                TextColumn::make('created_at')->label('Tanggal Dibuat')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make()->label('Edit')->color('warning'),
                    Tables\Actions\DeleteAction::make()->label('Hapus')->color('danger'),
                ])->label('Aksi'),
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
