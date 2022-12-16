<?php

namespace App\Http\Controllers;

use App\models\BookInfo;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;

class InsertController extends Controller {
    public function insert(Request $request) {
        // バリデーションルール
        $rules = [
            'isbn' => ['required', 'unique:bookinfo,isbn'],
            'title' => 'required',
            'price' => ['required', 'numeric'],
        ];

        // エラーメッセージ
        $message = [
            'isbn.required' => 'ISBNが未入力の為、書籍登録処理は行えませんでした。',
            'isbn.unique' => '入力ISBNは既に登録済みの為、書籍登録処理は行えませんでした。',
            'title.required' => 'タイトルが未入力の為、書籍登録処理は行えませんでした。',
            'price.required' => '価格が未入力の為、書籍登録処理は行えませんでした。',
            'price.numeric' => '価格の値が不正の為、書籍登録処理は行えませんでした。',
        ];

        // バリデーション実行
        $validator  = Validator::make($request->all(), $rules, $message);

        // エラー画面へ遷移
        if ($validator->stopOnFirstFailure()->fails()) {
            return redirect('error')
                ->withErrors($validator)
                ->withInput();
        }

        // 全ての入力データを取得
        $param = [
            'isbn' => $request->isbn,
            'title' => $request->title,
            'price' => $request->price,
        ];

        // 引数の書籍データを元にDBのbookinfoテーブルに新規登録処理を行う
        BookInfo::insertBook($param);

        // 入力データを表示用に一時保存する
        return redirect()
            ->route("insert.insert")
            ->with($param);

        // $request->flash();
        // return view('insert');
    }
}
