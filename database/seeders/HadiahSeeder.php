<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class HadiahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        // Daftar hadiah yang akan digunakan
        $hadiahList = ['motor', 'mobil', 'laptop', 'handphone', 'kamera', 'sepeda', 'jam tangan', 'kulkas'];
 
         // membuat data dummy sebanyak 20 record
         for($x = 1; $x <= 20; $x++){
  
          // insert data dummy dengan faker
          DB::table('hadiah')->insert([
          'nama_hadiah' => $faker->randomElement($hadiahList),
          ]);
     }
    }
}
