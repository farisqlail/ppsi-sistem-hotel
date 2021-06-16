<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        // DB::table('users')->insert([
        //     [
        //         'role' => 'admin',
        //         'name' => 'admin',
        //         'email' => 'admin@gmail.com',
        //         'password' => Hash::make('admin123'),
        //     ], 
        //     [
        //         'role' => 'karyawan',
        //         'name' => 'karyawan',
        //         'email' => 'karyawan@gmail.com',
        //         'password' => Hash::make('karyawan123
        //         '),
        //     ],
        //     [
        //         'role' => 'hrd',
        //         'name' => 'hrd',
        //         'email' => 'hrd@gmail.com',
        //         'password' => Hash::make('hrd123
        //         '),
        //     ]
        // ]);

        $admin = User::create([
            'name' => 'admin',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
        ]);

        $admin->assignRole('admin');

        $karyawan = User::create([
            'name' => 'karyawan',
            'role' => 'karyawan',
            'email' => 'karyawan@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    
        $karyawan->assignRole('karyawan');

        $hrd = User::create([
            'name' => 'hrd',
            'role' => 'hrd',
            'email' => 'hrd@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    
        $hrd->assignRole('hrd');
    }
}
