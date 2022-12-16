<?php

namespace App\Http\Controllers;

use App\models\BookInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller {
    public function index(Request $request) {
        // 書籍一覧機能からの入力データを取得する。
        $isbn = $request->isbn;
        $title = $request->title;
        $price = $request->price;

        // 検索用の書籍情報をDBから取得
        $bookList = DB::select("SELECT * FROM bookinfo WHERE isbn Like '%$isbn%' AND title Like '%$title%' AND price Like '%$price%' ORDER BY isbn");
        // $bookList = BookInfo::searchBook($isbn,$title,$price);

        // 送信されたデータをフラッシュデータに保存
        // $request->flash();

        // 検索画面へ書籍情報と一緒に遷移
        return view('search', [
            'bookList' => $bookList
        ]);
    }
}
