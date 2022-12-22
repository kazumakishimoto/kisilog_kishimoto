<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller {
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user) {
        $user = Auth::user();
        $name = $user->name;

        $data = [
            'user' => $user,
            'name' => $name,
        ];

        return view('users.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user) {
        $user = Auth::user();
        $name = $user->name;

        $data = [
            'user' => $user,
            'name' => $name,
        ];

        return view('users.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        $user = Auth::user();
        $name = $user->name;
        $all_request = $request->all();

        // 画像アップロード
        // if (isset($all_request['image'])) {
        //     $image = $request->file('image');
        //     $path = Storage::disk('s3')->putFile('image', $image, 'public');
        //     $all_request['image'] = Storage::disk('s3')->url($path);
        // }

        $user->fill($all_request)->save();

        $data = [
            "name" => $name
        ];

        return redirect()->route('users.show', $data);
    }
}
