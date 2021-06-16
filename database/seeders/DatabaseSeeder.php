<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TypeKamarTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(KamarTableSeeder::class);
        $this->call(MakananTableSeeder::class);
        $this->call(CustomerTableSeeder::class);
    }
}
