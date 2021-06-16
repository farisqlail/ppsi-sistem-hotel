<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeKamarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_kamars')->insert([
            ['typeKamar' => 'Deluxe'],
            ['typeKamar' => 'Premium'],
            ['typeKamar' => 'Ekonomi'],
            ['typeKamar' => 'Jelata']
        ]);
    }
}
