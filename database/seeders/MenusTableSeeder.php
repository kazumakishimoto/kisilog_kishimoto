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
            'shop_id' => 1,
            'body' => 'sample',
            'price' => '1000',
            'image' => 'images/sample.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
