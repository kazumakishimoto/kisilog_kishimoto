<?php

use Illuminate\Support\Facades\Route;

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

/*
|--------------------------------------------------------------------------
| 認証機能
|--------------------------------------------------------------------------
*/
# ユーザー新規登録、ログイン、ログアウト
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*
|--------------------------------------------------------------------------
| 一般ユーザー機能
|--------------------------------------------------------------------------
*/
# 一般ユーザー
Route::prefix('users')->name('users.')->group(function () {
    // ユーザー詳細
    Route::get('/{name}', 'UserController@show')->name('show');
});

# プロフィール機能
Route::middleware('auth')->group(function () {
    Route::prefix('users/{name}')->name('users.')->group(function () {
        // プロフィール編集
        Route::get('/edit', 'UserController@edit')->name('edit');
        // プロフィール更新
        Route::patch('/update', 'UserController@update')->name('update');
    });
});

# 口コミ機能(CRUD)
Route::resource('/articles', 'ArticleController')->except(['index'])->middleware('auth');
Route::resource('/articles', 'ArticleController', ['except' => ['show']]);

/*
|--------------------------------------------------------------------------
| 飲食店ユーザー
|--------------------------------------------------------------------------
*/
# 飲食店ユーザー
Route::prefix('shops')->name('shops.')->group(function () {
    // ユーザー詳細
    Route::get('/', 'ShopController@index')->name('index');
    // ユーザー詳細
    Route::get('/{name}', 'ShopController@show')->name('show');
});

# プロフィール機能
Route::middleware('auth')->group(function () {
    Route::prefix('shops/{name}')->name('shops.')->group(function () {
        // プロフィール編集
        Route::get('/edit', 'ShopController@edit')->name('edit');
        // プロフィール更新
        Route::patch('/update', 'ShopController@update')->name('update');
    });
});

# メニュー機能(CRUD)
Route::resource('/menus', 'MenuController')->except(['index'])->middleware('auth');
Route::resource('/menus', 'MenuController', ['except' => ['show']]);

/*
|--------------------------------------------------------------------------
| 共通ユーザー
|--------------------------------------------------------------------------
*/
# トップページ
Route::get('/', function () {
    return view('menuList');
});

# 管理者ユーザー機能
Route::prefix('administrator')->name('administrator.')->group(function () {
    // ユーザー詳細
    Route::get('/{name}', 'AdministratorController@show')->name('show');
});

# 予約機能(CRUD)
Route::resource('/reservations', 'ReservationController')->except(['index'])->middleware('auth');
Route::resource('/reservations', 'ReservationController', ['except' => ['show', 'update', 'destroy']]);

# クーポン機能(CRUD)
Route::resource('/coupons', 'CouponController')->except(['index'])->middleware('auth');
Route::resource('/coupons', 'CouponController', ['except' => ['show', 'update', 'destroy']]);

# バナー機能(CRUD)
Route::resource('/banners', 'BannerController')->except(['index'])->middleware('auth');
Route::resource('/banners', 'BannerController', ['except' => ['show', 'update', 'destroy']]);

# エラー処理
Route::get('/error', function () {
    return view('error');
})->name('error.index');
