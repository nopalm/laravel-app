<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            'kategoris_id' => 1,
            'name' => 'Samsung S20 Pro Ultra Max',
            'sku' => 5
        ]);

        DB::table('barangs')->insert([
            'kategoris_id' => 2,
            'name' => 'CD GTA SAN ANDREAS',
            'sku' => 2
        ]);
    }
}
