<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {
    public function run() {
        $faker = Faker::create(); // Tambahkan ini untuk menginisialisasi Faker

        DB::table('users')->insert([
            [
                'nama' => 'Johan',
                'alamat' => 'Jakarta',
                'no_hp' => $faker->unique()->phoneNumber(), // Tidak akan error lagi
                'email' => 'johan@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'role' => 'dokter',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Budi',
                'alamat' => 'Bandung',
                'no_hp' => $faker->unique()->phoneNumber(), // Tidak akan error lagi
                'email' => 'budi@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'role' => 'pasien',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
