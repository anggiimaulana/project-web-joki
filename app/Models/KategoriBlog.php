<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBlog extends Model
{
    use HasFactory;
    protected $table = 'kategori_blogs';
    protected $fillable = ['nama_kategori'];

    public function blog()
    {
        return $this->hasMany(Blog::class);
    }
}
