<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $shops = Shop::all();

        $data = [
            'shops' => $shops,
        ];

        return view('shops.index', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop) {
        $shop = Shop::find(1);
        $name = $shop->name;

        $data = [
            'shop' => $shop,
            'name' => $name,
        ];

        return view('shops.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop) {
        $shop = Shop::find(1);
        $name = $shop->name;

        $data = [
            'shop' => $shop,
            'name' => $name,
        ];

        return view('shops.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop) {
        $shop = Shop::find(1);
        $name = $shop->name;
        $all_request = $request->all();

        $shop->fill($all_request)->save();

        $data = [
            "name" => $name
        ];

        return redirect()->route('shops.show', $data);
    }
}
