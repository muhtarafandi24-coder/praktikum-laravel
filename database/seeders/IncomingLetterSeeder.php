<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IncomingLetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('incoming_letters')->insert(
            [
                [   
                    "nomor_surat"   => "001/FT/X/2026",
                    "tanggal"       =>"2026-01-01",
                    "pengirim"      =>"Fakultas teknik",
                    "perihal"       =>"Undangan Rapat",
                    "keterangan"    =>"Undangan Rapat Koordinasi",
                    "created_at"    => now(),
                    "updated_at"    => now(),
                ],
                [   
                    "nomor_surat"   => "001/BAA/X/2026",
                    "tanggal"       =>"2026-10-02",
                    "pengirim"      =>"BAA",
                    "perihal"       =>"Pemberitahuan Akademik",
                    "keterangan"    =>"Undangan Pemberitahuan Akademik",
                    "created_at"    => now(),
                    "updated_at"    => now(),
                ],
                [   
                    "nomor_surat"   => "001/FT/X/2026",
                    "tanggal"       =>"2026-10-03",
                    "pengirim"      =>"LPPM",
                    "perihal"       =>"Undangan Sosialisasi",
                    "keterangan"    =>"Undangan Sosialisasi LPM",
                    "created_at"    => now(),
                    "updated_at"    => now(),
                ],
            ]
        );
    }
}
