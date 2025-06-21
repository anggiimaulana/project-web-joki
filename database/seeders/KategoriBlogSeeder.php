<?php

namespace Database\Seeders;

use App\Models\KategoriBlog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriBlogSeeder extends Seeder
{
    public function run(): void
    {
        KategoriBlog::create(['nama_kategori' => 'Umum']);
        KategoriBlog::create(['nama_kategori' => 'Promo']);
        KategoriBlog::create(['nama_kategori' => 'Teknologi']);
        KategoriBlog::create(['nama_kategori' => 'Informasi']);
        KategoriBlog::create(['nama_kategori' => 'Umum']);
    }
}
