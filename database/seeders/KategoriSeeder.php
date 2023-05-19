<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategoris')->insert([
            'kategori_name' => 'Elektronik'
        ]);

        DB::table('kategoris')->insert([
            'kategori_name' => 'Game'
        ]);

        DB::table('kategoris')->insert([
            'kategori_name' => 'Kitchen'
        ]);
    }
}
