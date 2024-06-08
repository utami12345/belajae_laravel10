<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class KaryawanSeeder extends Seeder
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
 
         // insert data dummy karyawan dengan faker
         DB::table('karyawan')->insert([
         'nama' => $faker->name,
         'jabatan' =>$faker->jobTitle,
         'umur' => $faker->numberBetween(25,40),
         'alamat' => $faker->address,
         ]);
    }
    }
}