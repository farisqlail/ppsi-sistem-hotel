<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'nama' => 'Kadir',
                'noTelp' => '09787896873872',
                'idCard' => 'BCA',
            ],
            [
                'nama' => 'Suntoso',
                'noTelp' => '7967287931',
                'idCard' => 'BRI',
            ],
            [
                'nama' => 'Sumanto',
                'noTelp' => '070712873231',
                'idCard' => 'JENIUS',
            ],
            [
                'nama' => 'Eko',
                'noTelp' => '12983791233',
                'idCard' => 'BCA',
            ],
        ]);
    }
}
