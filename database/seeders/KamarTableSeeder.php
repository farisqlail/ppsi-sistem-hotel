<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KamarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kamars')->insert([
            [
                'noKamar' => '001',
                'type_id' => '1',
                'kapasitas' => '2',
                'jenisKasur' => 'King',
                'harga' => '500000',
                'includeBreakfast' => 'ya',
            ],
            [
                'noKamar' => '002',
                'type_id' => '2',
                'kapasitas' => '2',
                'jenisKasur' => 'Twin',
                'harga' => '350000',
                'includeBreakfast' => 'ya',
            ],
            [
                'noKamar' => '003',
                'type_id' => '3',
                'kapasitas' => '1',
                'jenisKasur' => 'Twin',
                'harga' => '350000',
                'includeBreakfast' => 'tidak',
            ],
            [
                'noKamar' => '004',
                'type_id' => '4',
                'kapasitas' => '1',
                'jenisKasur' => 'Tidak Ada',
                'harga' => '150000',
                'includeBreakfast' => 'tidak',
            ],
        ]);
    }
}
