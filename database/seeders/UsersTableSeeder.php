<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert([
            'name' => 'user',
            'age' => '30',
            'gender' => '男',
            'avatar' => 'image/example.png',
            'introduction' => 'ユーザーの自己紹介',
            'authority' => 'ユーザー',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'shop',
            'age' => '30',
            'gender' => '男',
            'avatar' => 'image/example.png',
            'introduction' => '飲食店の自己紹介',
            'authority' => '飲食店',
            'email' => 'shop@example.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'age' => '30',
            'gender' => '男',
            'avatar' => 'image/example.png',
            'introduction' => '管理者の自己紹介',
            'authority' => '管理者',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
