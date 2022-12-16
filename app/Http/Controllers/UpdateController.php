<?php

namespace App\Http\Controllers;

use App\models\BookInfo;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;

class UpdateController extends Controller {
    public function index(Request $request) {
        // バリデーションルール
        $rules = [
            'isbn' => 'exists:bookinfo,isbn',
        ];

        // エラーメッセージ
        $message = [
            'isbn.exists' => '変更対象の書籍が存在しない為、更新処理は行えません。',
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

        // エラー回避のため$newBookを空文字で初期化
        $newBook = "";

        // 引数のISBNを元にDBのbookinfoテーブルから該当書籍データの検索を行う
        $bookList = BookInfo::selectByIsbn($isbn);

        // 検索結果のTitleとPriceを取得
        $updateBook = BookInfo::selectByIsbn($isbn);

        // 取得した更新対象データを配列化
        $updateBook = $updateBook[0]->toArray();

        return view('update', [
            'updateBook' => $updateBook,
            'newBook' => $newBook
        ]);
    }

    public function update(Request $request) {
        // バリデーションルール
        $rules = [
            'isbn' => 'exists:bookinfo,isbn',
        ];

        // エラーメッセージ
        $message = [
            'isbn.exists' => '変更対象の書籍が存在しない為、更新処理は行えません。',
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
        $title = $request->title;
        $price = $request->price;

        // 引数のISBNを元にDBのbookinfoテーブルから該当書籍データの検索を行う
        $oldBook = BookInfo::selectByIsbn($isbn);

        // 取得した更新対象データを配列化
        $oldBook = $oldBook[0]->toArray();

        // 更新データを登録
        $newBook = [
            'title' => $title,
            'price' => $price
        ];

        // 引数の書籍データを元にDBのbookinfoテーブルから該当書籍データの更新処理を行う
        BookInfo::updateBook($isbn, $newBook);

        return view('update', [
            'updateBook' => $oldBook,
            'newBook' => $newBook
        ]);
    }
}
