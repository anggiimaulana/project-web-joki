<?php

namespace Database\Seeders;

use App\Models\Voucher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoucherSeeder extends Seeder
{
    public function run(): void
    {
        Voucher::make(['code' => 'TEST', 'persentase' => 10, 'status_voucher' => 'Aktif', 'tanggal_kadaluarsa' => '2025-07-18']);
        Voucher::make(['code' => 'TEST', 'persentase' => 10, 'status_voucher' => 'Aktif', 'tanggal_kadaluarsa' => '2025-07-19']);
        Voucher::make(['code' => 'TEST', 'persentase' => 10, 'status_voucher' => 'Aktif', 'tanggal_kadaluarsa' => '2025-07-20']);
        Voucher::make(['code' => 'TEST', 'persentase' => 10, 'status_voucher' => 'Aktif', 'tanggal_kadaluarsa' => '2025-07-20']);
    }
}
