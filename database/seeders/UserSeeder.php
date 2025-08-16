<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Anggi Maulana',
            'email' => 'anggabos120@gmail.com',
            'password' => Hash::make(value: 'anggii'),
        ]);
    }
}
