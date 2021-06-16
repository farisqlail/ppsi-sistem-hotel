<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MakananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_makanans')->insert([
            [
                'jenis_id' => '1',
                'namaMenu' => 'Kentang',
                'jumlah' => '10',
                'harga' => '17000'
            ],
            [
                'jenis_id' => '3',
                'namaMenu' => 'Nasi Goreng',
                'jumlah' => '10',
                'harga' => '30000'
            ],
            [
                'jenis_id' => '4',
                'namaMenu' => 'Susu',
                'jumlah' => '10',
                'harga' => '10000'
            ],
            [
                'jenis_id' => '2',
                'namaMenu' => 'Onion Ring',
                'jumlah' => '10',
                'harga' => '20000'
            ],
        ]);
    }
}
