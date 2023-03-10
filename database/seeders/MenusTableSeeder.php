<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'user_id' => 1,
            'name' => 'example',
            'price' => '1000',
            'image' => 'images/example.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
