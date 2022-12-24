<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $menus = Menu::all();

        $data = [
            'menus' => $menus,
        ];

        return view('menus.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('menus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Menu $menu) {
        $menu->user_id = $request->user()->id;
        $all_request = $request->all();

        // 画像アップロード
        if (isset($all_request['image'])) {
            $image = $request->file('image');
            $path = Storage::disk('public')->putFile('image', $image, 'public');
            $all_request['image'] = Storage::disk('public')->url($path);
        }

        $menu->fill($all_request)->save();

        return redirect()->route('menus.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu) {
        $data = [
            'menu' => $menu,
        ];

        return view('menus.edit', $data);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu) {
        $menu->user_id = $request->user()->id;
        $all_request = $request->all();

        // 画像アップロード
        if (isset($all_request['image'])) {
            $image = $request->file('image');
            $path = Storage::disk('public')->putFile('image', $image, 'public');
            $all_request['image'] = Storage::disk('public')->url($path);
        }

        $menu->fill($all_request)->save();

        return redirect()->route('menus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu) {
        $menu->delete();
        return redirect()->route('menus.index');
    }
}
