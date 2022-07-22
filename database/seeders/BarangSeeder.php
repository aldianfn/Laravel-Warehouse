<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i < 21; $i++) {;
            DB::table('barang')->insert([
                'barang' => $faker->lexify('Barang ???'),
                'kode' => $faker->ean8(),
                'stok' => $faker->numberBetween($min = 0, $max = 100),
            ]);
        }
    }
}
