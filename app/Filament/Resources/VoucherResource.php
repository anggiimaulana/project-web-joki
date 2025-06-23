<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VoucherResource\Pages;
use App\Filament\Resources\VoucherResource\RelationManagers;
use App\Models\Voucher;
use DateTime;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Date;

class VoucherResource extends Resource
{
    protected static ?string $model = Voucher::class;

    protected static ?string $label = 'Voucher';

    protected static ?string $pluralLabel = 'Daftar Voucher';

    protected static ?string $navigationLabel = 'Voucher';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-group';

    protected static ?string $navigationGroup = 'Voucher & Metode Pembayaran';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('code')
                    ->label('Kode Voucher')
                    ->required()
                    ->placeholder('Masukan kode voucher'),
                TextInput::make('persentase')
                    ->label('Presentase Diskon')
                    ->required()
                    ->numeric()
                    ->placeholder('Masukan presentase diskon'),
                TextInput::make('maksimal_person')
                    ->label('Maksimal Penggunaan (Opsional)')
                    ->nullable()
                    ->numeric()
                    ->placeholder('Masukan maksimal penggunaan'),
                Select::make('status_voucher')
                    ->searchable()
                    ->label('Status Voucher')
                    ->options([
                        'Aktif' => 'Aktif',
                        'Kadaluarsa' => 'Kadaluarsa',
                    ])
                    ->required()
                    ->placeholder('Pilih status voucher'),
                DatePicker::make('tanggal_kadaluarsa')
                    ->placeholder('Pilih tanggal')
                    ->default(Date::now()->addDays(7))
                    ->label('Tanggal Kadaluarsa')
                    ->required()
                    ->native(false)
                    ->displayFormat('d/m/Y')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no')
                    ->label('No')
                    ->rowIndex(),
                TextColumn::make('code')->label('Kode Voucher'),
                TextColumn::make('persentase')->label('Presentase Diskon (%)')->alignCenter(),
                TextColumn::make('status_voucher')
                    ->badge()
                    ->label('Status Voucher')
                    ->alignCenter()
                    ->color(fn(string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Kadaluarsa' => 'warning',
                    }),
                TextColumn::make('created_at')->label('Tanggal Dibuat')->dateTime()->alignCenter(),
                TextColumn::make('tanggal_kadaluarsa')->label('Tanggal Kadaluarsa')->dateTime(),
            ])
            ->defaultSort('id', 'desc')
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
            'index' => Pages\ListVouchers::route('/'),
            'create' => Pages\CreateVoucher::route('/create'),
            'edit' => Pages\EditVoucher::route('/{record}/edit'),
        ];
    }
}
