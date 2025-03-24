<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PeriksasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('periksas')->insert([
            [
                'id_pasien' => 1, // Sesuaikan dengan ID pasien di tabel users
                'id_dokter' => 2, // Sesuaikan dengan ID dokter di tabel users
                'tgl_periksa' => Carbon::now(),
                'catatan' => 'Pasien mengalami demam ringan.',
                'biaya_periksa' => 100000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_pasien' => 3,
                'id_dokter' => 2,
                'tgl_periksa' => Carbon::now(),
                'catatan' => 'Pasien mengalami batuk dan pilek.',
                'biaya_periksa' => 150000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
