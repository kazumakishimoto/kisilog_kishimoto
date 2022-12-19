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
        $this->call([
            UsersTableSeeder::class,
            ShopsTableSeeder::class,
            AdministratorTableSeeder::class,
            ArticlesTableSeeder::class,
            ReservationsTableSeeder::class,
            MenusTableSeeder::class,
            CouponsTableSeeder::class,
            BannersTableSeeder::class,
        ]);
    }
}
