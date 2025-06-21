<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $fillable = [
        'unique_id',
        'name',
        'nomor_wa',
        'kategori_joki_id',
        'metode_pembayaran_id',
        'voucher_id',
        'total_harga_awal',
        'total_harga_setelah_diskon',
        'perkiraan_selesai',
        'bukti_pembayaran',
        'status_order_id',
    ];

    protected static function booted()
    {
        static::created(function (Order $order) {
            // Format: JKIT0(ID_KATEGORI)-0(ID)
            $order->unique_id = 'JKIT0' . $order->kategori_joki_id . '-0' . $order->id;
            $order->saveQuietly(); // Hindari infinite loop saving
        });
    }

    public function kategori_joki()
    {
        return $this->belongsTo(KategoriJoki::class);
    }

    public function metode_pembayaran()
    {
        return $this->belongsTo(MetodePembayaran::class);
    }

    public function status_order()
    {
        return $this->belongsTo(StatusOrder::class);
    }

    public function voucher()
    {
        return $this->belongsTo(Voucher::class);
    }
}
