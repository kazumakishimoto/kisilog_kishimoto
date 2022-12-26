<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller {
    public function __construct() {
        $this->authorizeResource(Article::class, 'article');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $user = Auth::user();
        $articles = Article::all();

        $data = [
            'user' => $user,
            'articles' => $articles,
        ];

        return view('articles.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Article $article) {
        $user = Auth::user();

        $data = [
            'user' => $user,
            'article' => $article,
        ];

        return view('articles.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request, Article $article) {
        $article->user_id = $request->user()->id;
        $all_request = $request->all();

        // 画像アップロード
        if (isset($all_request['image'])) {
            $image = $request->file('image');
            $path = Storage::disk('public')->putFile('image', $image, 'public');
            $all_request['image'] = Storage::disk('public')->url($path);

            // ローカル環境の場合
            $all_request['image'] = substr($all_request['image'],17);
        }

        $article->fill($all_request)->save();

        return redirect()->route('articles.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article) {
        $user = Auth::user();

        $data = [
            'user' => $user,
            'article' => $article,
        ];

        return view('articles.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, Article $article) {
        $article->user_id = $request->user()->id;
        $all_request = $request->all();

        // 画像アップロード
        if (isset($all_request['image'])) {
            $image = $request->file('image');
            $path = Storage::disk('public')->putFile('image', $image, 'public');
            $all_request['image'] = Storage::disk('public')->url($path);

            // ローカル環境の場合
            $all_request['image'] = substr($all_request['image'], 17);
        }

        $article->fill($all_request)->save();

        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article) {
        $article->delete();
        return redirect()->route('articles.index');
    }
}
