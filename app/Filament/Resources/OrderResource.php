<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\KategoriJoki;
use App\Models\MetodePembayaran;
use App\Models\Order;
use App\Models\StatusOrder;
use App\Models\Voucher;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Date;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $label = 'Orderan Joki';

    protected static ?string $pluralLabel = 'Daftar Joki';

    protected static ?string $navigationLabel = 'Orderan Joki';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-group';

    protected static ?string $navigationGroup = 'Kelola Pesanan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('unique_id')
                    ->label('Kode Unik Pemesanan')
                    ->disabled()
                    ->dehydrated(false)
                    ->visibleOn('edit')
                    ->columnSpanFull(),
                TextInput::make('name')
                    ->label('Nama Pelanggan')
                    ->placeholder('Masukan nama pelanggan')
                    ->required(),
                TextInput::make('nomor_wa')
                    ->label('Nomor Whatsapp Pelanggan')
                    ->placeholder('Masukan nomor whatsapp pelanggan')
                    ->required(),
                Select::make('kategori_joki_id')
                    ->label('Kategori Joki')
                    ->options(KategoriJoki::whereNotNull('nama_kategori')->pluck('nama_kategori', 'id'))
                    ->searchable()
                    ->placeholder("Pilih kategori joki")
                    ->required(),
                Select::make('metode_pembayaran_id')
                    ->label('Metode Pembayaran')
                    ->options(MetodePembayaran::whereNotNull('nama_metode')->pluck('nama_metode', 'id'))
                    ->searchable()
                    ->placeholder("Pilih metode pembayaran")
                    ->required(),
                TextInput::make('total_harga_awal')
                    ->label('Total Harga Awal')
                    ->numeric()
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(fn(Set $set, Get $get, $state) => static::hitungDiskon($set, $get)),

                Select::make('voucher_id')
                    ->label('Diskon Voucher (%)')
                    ->options(Voucher::pluck('persentase', 'id'))
                    ->searchable()
                    ->nullable()
                    ->reactive()
                    ->afterStateUpdated(fn(Set $set, Get $get, $state) => static::hitungDiskon($set, $get)),
                TextInput::make('total_harga_setelah_diskon')
                    ->label('Total Harga Setelah Diskon')
                    ->numeric()
                    ->disabled()
                    ->dehydrated()
                    ->required(),
                FileUpload::make('bukti_pembayaran')
                    ->label('Bukti Pembayaran')
                    ->image()
                    ->disk('public')
                    ->directory('pembayaran')
                    ->visibility('public')
                    ->previewable(true)
                    ->downloadable()
                    ->openable()
                    ->preserveFilenames()
                    ->required(),
                DatePicker::make('perkiraan_selesai')
                    ->placeholder('Pilih tanggal')
                    ->label('Perkiraan Selesai')
                    ->required()
                    ->native(false)
                    ->displayFormat('d/m/Y'),
                Select::make('status_order_id')
                    ->label('Status Pesanan')
                    ->options(StatusOrder::whereNotNull('status')->pluck('status', 'id'))
                    ->searchable()
                    ->placeholder("Pilih status pesanan")
                    ->required(),
            ]);
    }

    protected static function hitungDiskon(Set $set, Get $get)
    {
        $harga = (int) $get('total_harga_awal');
        $voucherId = $get('voucher_id');

        if ($voucherId) {
            $persentase = \App\Models\Voucher::find($voucherId)?->persentase ?? 0;
            $hasil = (int) ($harga - ($harga * $persentase / 100));
        } else {
            $hasil = $harga;
        }

        $set('total_harga_setelah_diskon', $hasil);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no')->label('No')->rowIndex(),
                TextColumn::make('unique_id')->label('UID')->searchable(),
                TextColumn::make('name')->label('Nama')->searchable(),
                TextColumn::make('nomor_wa')->label('No. Whatsapp'),
                TextColumn::make('kategori_joki.nama_kategori')->label('Kategori'),
                TextColumn::make('metode_pembayaran.nama_metode')->label('Metode Pembayaran'),
                TextColumn::make('total_harga_setelah_diskon')->label('Total'),
                TextColumn::make('status_order.status')
                    ->label('Status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Menunggu Konfirmasi' => 'warning',
                        'Dijadwalkan' => 'warning',
                        'Sedang Dikerjakan (0–25%)' => 'info',
                        'Dalam Proses (25–75%)' => 'info',
                        'Mendekati Selesai (76–99%)' => 'info',
                        'Menunggu Validasi' => 'success',
                        'Selesai' => 'success',
                        'Dibatalkan' => 'danger',
                    }),
                TextColumn::make('created_at')->label('Tanggal Dibuat')->dateTime(),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make()->label('Tinjau')->color('warning'),
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
