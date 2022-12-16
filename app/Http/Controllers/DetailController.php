<?php

namespace App\Http\Controllers;

use App\models\BookInfo;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;

class DetailController extends Controller {
    public function index(Request $request) {
        // バリデーションルール
        $rules = [
            'isbn' => 'exists:bookinfo,isbn',
        ];

        // エラーメッセージ
        $message = [
            'isbn.exists' => '詳細対象の書籍が存在しない為、詳細情報処理は行えません。',
        ];

        // バリデーション実行
        $validator  = Validator::make($request->all(), $rules, $message);

        // エラー画面へ遷移
        if ($validator->stopOnFirstFailure()->fails()) {
            return redirect('error')
                ->withErrors($validator)
                ->withInput();
        }

        // 入力データを取得
        $isbn = $request->isbn;

        // 引数のISBNを元にDBのbookinfoテーブルから該当書籍データの検索を行う
        $detailBook = BookInfo::selectByIsbn($isbn);

        return view('/detail', [
            'detailBook' => $detailBook
        ]);
    }
}
