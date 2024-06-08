<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TeleponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $penggunaIds = range(1, 15); // Ubah 15 sesuai dengan jumlah pengguna yang tersedia
        shuffle($penggunaIds); // Acak urutan pengguna IDs
 
        // membuat data dummy sebanyak 15 record
        for ($x = 0; $x < 15; $x++) {
            // insert data dummy dengan faker
            DB::table('telepon')->insert([
                'nomor_telepon' => $faker->phoneNumber,
                'pengguna_id' => $penggunaIds[$x], // Mengambil ID pengguna secara berurutan dari array
            ]);
        }
    }
}
