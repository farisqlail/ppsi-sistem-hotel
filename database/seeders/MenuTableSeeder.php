<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_makanans')->insert([
            ['jenisMakanan' => 'Makanan'],
            ['jenisMakanan' => 'Minuman'],
            ['jenisMakanan' => 'Cemilan'],
            ['jenisMakanan' => 'Lainnya']
        ]);
    }
}
