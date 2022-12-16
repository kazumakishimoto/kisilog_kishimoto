<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BookInfo extends Model {
    use HasFactory;

    // protected $fillable = [
    //     'isbn',
    //     'title',
    //     'price'
    // ];

    // このモデルの対象のテーブル
    protected $table = 'bookinfo';

    // プライマリキーを指定
    protected $primaryKey = 'isbn';

    // プライマリーキーがオートインクリメントではないため設定をオフ
    public $incrementing = false;

    // データの作成日時、更新日時がデフォルトで自動更新されるので、オフ
    public $timestamps = false;

    // Laravel 6.0+以降なら指定
    // protected $keyType = 'string';

    // 引数のISBNを元にDBのbookinfoテーブルから該当書籍データの検索を行う
    public static function selectByIsbn($isbn) {
        return BookInfo::where('isbn', $isbn)->get();
    }

    // 引数の書籍データを元にDBのbookinfoテーブルに新規登録処理を行う
    public static function insertBook($insertBook) {
        BookInfo::insert($insertBook);
    }

    // 引数の書籍データを元にDBのbookinfoテーブルから該当書籍データの更新処理を行う
    public static function updateBook($isbn, $newBook) {
        BookInfo::where('isbn', $isbn)->update($newBook);
    }

    // 引数の書籍データ(ISBN)を元にDBのbookinfoテーブルから該当書籍データの削除処理を行う
    public static function deleteBook($isbn) {
        BookInfo::where('isbn', $isbn)->delete();
    }

    // 引数の各データを元にDBのbookinfoテーブルから該当書籍データの絞込み検索処理を行う
    public static function searchBook($isbn, $title, $price) {
        $searchBook = DB::table('bookinfo');

        // $searchBook->where('isbn', 'like', '%' . $isbn . '%');
        if ($isbn != "") {
            $searchBook->where('isbn', 'like', '%' . $isbn . '%');
        }

        // $searchBook->where('isbn', 'like', '%' . $title . '%');
        if ($title != "") {
            $searchBook->where('isbn', 'like', '%' . $title . '%');
        }

        // $searchBook->where('isbn', 'like', '%' . $price . '%');
        if ($price != "") {
            $searchBook->where('isbn', 'like', '%' . $price . '%');
        }

        return $searchBook->get();
    }
}
