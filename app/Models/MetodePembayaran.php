<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodePembayaran extends Model
{
    use HasFactory;
    protected $table = 'metode_pembayarans';
    protected $fillable = ['nama_metode', 'nomor_rekening', 'atas_nama', 'foto_qr'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function getFileQrAttribute($value)
    {
        return $value ? $value : null;
    }
}
