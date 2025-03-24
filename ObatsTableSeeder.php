<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ObatsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('obats')->insert([
            [
                'nama_obat' => 'Paracetamol',
                'kemasan' => 'Strip 10 tablet',
                'harga' => 20000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_obat' => 'Amoxicillin',
                'kemasan' => 'Botol 60 ml',
                'harga' => 35000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
