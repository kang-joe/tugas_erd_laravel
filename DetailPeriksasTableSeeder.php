<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DetailPeriksasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('detail_periksas')->insert([
            [
                'id_periksa' => 1, // Pemeriksaan pertama
                'id_obat' => 1, // Paracetamol
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_periksa' => 2, // Pemeriksaan kedua
                'id_obat' => 2, // Amoxicillin
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
