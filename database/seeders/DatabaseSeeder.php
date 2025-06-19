<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            KategoriBlogSeeder::class,
            KategoriJokiSeeder::class,
            MetodePembayaranSeeder::class,
            StatusOrderSeeder::class,
            UserSeeder::class,
            VoucherSeeder::class
        ]);
    }
}
