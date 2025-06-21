<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'content',
        'kategori_blog_id',
        'slug',
        'image',
        'status',
        'user_id',
        'posisi_kerja',
    ];

    public function getGambarUrlAttribute()
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        }
        return asset('images/default-blog.jpg'); // gambar default jika tidak ada
    }

    public function kategoriBlog()
    {
        return $this->belongsTo(KategoriBlog::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted()
    {
        static::creating(function ($blog) {
            $blog->slug = Str::slug($blog->title);
        });

        static::updating(function ($blog) {
            // Optional: hanya update slug kalau title berubah
            if ($blog->isDirty('title')) {
                $blog->slug = Str::slug($blog->title);
            }
        });
    }
}
