<?php

namespace Database\Seeders;

use App\Models\MetodePembayaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetodePembayaranSeeder extends Seeder
{
    public function run(): void
    {
        MetodePembayaran::create(['nama_metode' => 'ShopeePay']);
        MetodePembayaran::create(['nama_metode' => 'SeaBank']);
        MetodePembayaran::create(['nama_metode' => 'Dana']);
        MetodePembayaran::create(['nama_metode' => 'GOPAY']);
        MetodePembayaran::create(['nama_metode' => 'QRISH']);
        MetodePembayaran::create(['nama_metode' => 'LinkAja!']);
    }
}
