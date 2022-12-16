<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\SearchController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// 1.トップページ
Route::get('/', function () {
    return view('menu');
});

// 2.一覧表示
Route::get('/list', [ListController::class, 'index'])->name('list.index');

// 3.登録画面を表示
Route::get('/insert', function () {
    return view('insert');
})->name('insert.index');

// 4.登録処理
Route::post('/insert', [InsertController::class, 'insert'])->name('insert.insert');

// 5.登録画面へリダイレクト
Route::get('/insert_redirect', function () {
    return redirect('/insert');
})->name('insert.redirect');

// 6.詳細処理
Route::get('/detail', [DetailController::class, 'index'])->name('detail.index');

// 7.変更画面を表示
Route::get('/update', [UpdateController::class, 'index'])->name('update.index');

// 8.変更処理
Route::post('/update', [UpdateController::class, 'update'])->name('update.update');

// 9.削除処理
Route::get('/delete', [DeleteController::class, 'index'])->name('delete.index');

// 10.検索処理
Route::post('/search', [SearchController::class, 'index'])->name('search.index');

// 11.一覧機能へリダイレクト
Route::get('/list_redirect', function () {
    return redirect('/list');
})->name('list.redirect');

// 12.エラー処理
Route::get('/error', function () {
    return view('error');
})->name('error.index');
