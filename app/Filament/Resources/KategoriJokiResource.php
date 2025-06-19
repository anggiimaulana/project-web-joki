<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KategoriJokiResource\Pages;
use App\Filament\Resources\KategoriJokiResource\RelationManagers;
use App\Models\KategoriJoki;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KategoriJokiResource extends Resource
{
    protected static ?string $model = KategoriJoki::class;

    protected static ?string $label = 'Kategori Joki';

    protected static ?string $pluralLabel = 'Daftar Kategori Joki';

    protected static ?string $navigationLabel = 'Kategori Joki';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-group';

    protected static ?string $navigationGroup = 'Kelola Informasi Umum';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_kategori')
                    ->label('Nama Kategori Joki')
                    ->required()
                    ->placeholder('Masukan nama kategori joki'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no')
                    ->label('No')
                    ->rowIndex(),
                TextColumn::make('nama_kategori')->label('Nama Kategori'),
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
            'index' => Pages\ListKategoriJokis::route('/'),
            'create' => Pages\CreateKategoriJoki::route('/create'),
            'edit' => Pages\EditKategoriJoki::route('/{record}/edit'),
        ];
    }
}
