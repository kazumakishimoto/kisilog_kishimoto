<?php

namespace Database\Seeders;

use App\models\BookInfo;
use Illuminate\Database\Seeder;

class BookinfoSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        BookInfo::create([
            'isbn'    => '0001',
            'title'       => 'java',
            'price'       => '1001',
        ]);

        BookInfo::create([
            'isbn'    => '0002',
            'title'       => 'c++',
            'price'       => '1002',
        ]);

        BookInfo::create([
            'isbn'    => '0003',
            'title'       => 'ruby',
            'price'       => '1003',
        ]);

        BookInfo::create([
            'isbn'    => '0004',
            'title'       => 'perl',
            'price'       => '1004',
        ]);

        BookInfo::create([
            'isbn'    => '0005',
            'title'       => 'database',
            'price'       => '1005',
        ]);
    }
}
