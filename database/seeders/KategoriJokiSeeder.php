<?php

namespace Database\Seeders;

use App\Models\KategoriJoki;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriJokiSeeder extends Seeder
{
    public function run(): void
    {
        KategoriJoki::create(['nama_kategori' => 'Subscription']);
        KategoriJoki::create(['nama_kategori' => 'Express']);
        KategoriJoki::create(['nama_kategori' => 'Praktikum']);
        KategoriJoki::create(['nama_kategori' => 'Tubes & Proyek']);
        KategoriJoki::create(['nama_kategori' => 'Karya Ilmiah']);
        KategoriJoki::create(['nama_kategori' => 'Lainnya']);
    }
}
