<?php

namespace Database\Seeders;

use App\Models\StatusOrder;
use Illuminate\Database\Seeder;

class StatusOrderSeeder extends Seeder
{
    public function run(): void
    {
        $statuses = [
            [
                'status' => 'Menunggu Konfirmasi',
                'keterangan' => 'Order udah masuk tapi belum diproses/joki belum ambil.',
            ],
            [
                'status' => 'Dijadwalkan',
                'keterangan' => 'Joki udah ambil job dan jadwal udah ditetapkan.',
            ],
            [
                'status' => 'Sedang Dikerjakan (0–25%)',
                'keterangan' => 'Progres awal, baru login/setting.',
            ],
            [
                'status' => 'Dalam Proses (25–75%)',
                'keterangan' => 'Joki aktif ngerjain, udah masuk ke inti.',
            ],
            [
                'status' => 'Mendekati Selesai (76–99%)',
                'keterangan' => 'Udah tahap finishing atau final push.',
            ],
            [
                'status' => 'Menunggu Validasi',
                'keterangan' => 'Udah selesai, tapi belum dikonfirmasi user/admin.',
            ],
            [
                'status' => 'Selesai',
                'keterangan' => 'Joki selesai, validasi oke, job closed.',
            ],
            [
                'status' => 'Dibatalkan',
                'keterangan' => 'Pesanan dibatalkan oleh pengguna atau oleh pihak JokiinIT',
            ],
        ];

        foreach ($statuses as $data) {
            StatusOrder::create($data);
        }
    }
}
