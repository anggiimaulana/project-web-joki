<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Voucher extends Model
{
    use HasFactory;
    protected $table = 'vouchers';
    protected $fillable = ['code', 'persentase', 'status_voucher', 'tanggal_kadaluarsa', 'maksimal_person'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function getStatusVoucherAttribute($value)
    {
        $expired = Carbon::parse($this->tanggal_kadaluarsa)->isPast();

        if ($expired) {
            return 'Kadaluarsa';
        }

        return $value;
    }
}
