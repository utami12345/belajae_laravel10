<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // data faker indonesia
         $faker = Faker::create('id_ID');
 
         // membuat data dummy sebanyak 10 record
         for($x = 1; $x <= 25; $x++){
  
          // insert data dummy guru dengan faker
          DB::table('guru')->insert([
          'nama' => $faker->name,
          'umur' => $faker->numberBetween(25,40),
          ]);
     }
    
    }
}
