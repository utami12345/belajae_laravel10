<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
 
         // membuat data dummy sebanyak 15 record
         for($x = 1; $x <= 15; $x++){
  
          // insert data dummy guru dengan faker
          DB::table('articles')->insert([
          'judul' => $faker->sentence,
          ]);
     }
    }
}
