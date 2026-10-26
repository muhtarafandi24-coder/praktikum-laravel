<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutgoingLetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('outgoing_letters')->insert(
            [
                [   
                    'nomor_surat' => '001/FT/X/2026',
                    'tanggal' => '2026-05-12',
                    'tujuan' => 'BAA',
                    'perihal' => 'Pemberitahuan Akademik',
                    "keterangan"    =>"Undangan Rapat Koordinasi",
                    "created_at"    => now(),
                    "updated_at"    => now(),
                ],
                [   
                    'nomor_surat' => '002/FT/X/2026',
                    'tanggal' => '2026-05-10',
                    'tujuan' => 'Dekanat',
                    'perihal' => 'Undangan Rapat',
                    "keterangan"    =>"Undangan Pemberitahuan Akademik",
                    "created_at"    => now(),
                    "updated_at"    => now(),
                ],
                [   
                    'nomor_surat' => '003/FT/X/2026',
                    'tanggal' => '2026-06-10',
                    'tujuan' => 'LPPM',
                    'perihal' => 'Undangan Sosialisasi',
                    "keterangan"    =>"Undangan Sosialisasi LPM",
                    "created_at"    => now(),
                    "updated_at"    => now(),
                ],
            ]
        );
    }
}
