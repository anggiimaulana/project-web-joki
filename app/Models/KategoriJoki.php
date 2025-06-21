<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriJoki extends Model
{
    use HasFactory;

    protected $table = 'kategori_jokis';

    protected $fillable = [
        'nama_kategori',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
