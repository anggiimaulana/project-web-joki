<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StatusOrderResource\Pages;
use App\Filament\Resources\StatusOrderResource\RelationManagers;
use App\Models\StatusOrder;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StatusOrderResource extends Resource
{
    protected static ?string $model = StatusOrder::class;

    protected static ?string $label = 'Status Pesanan';

    protected static ?string $pluralLabel = 'Daftar Status Pesanan';

    protected static ?string $navigationLabel = 'Status Pesanan';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-group';

    protected static ?string $navigationGroup = 'Kelola Informasi Umum';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('status')
                    ->label('Nama Status')
                    ->required()
                    ->placeholder('Masukan nama status'),
                TextInput::make('keterangan')
                    ->label('Deskripsi')
                    ->required()
                    ->placeholder('Masukan nama status'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no')
                    ->label('No')
                    ->rowIndex(),
                TextColumn::make('status')->label('Nama Status'),
                TextColumn::make('keterangan')->label('Deskripsi'),
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
            'index' => Pages\ListStatusOrders::route('/'),
            'create' => Pages\CreateStatusOrder::route('/create'),
            'edit' => Pages\EditStatusOrder::route('/{record}/edit'),
        ];
    }
}
