@extends('app')
@section('content')
<div class="container text-center">
    <h1 class="text-primary">【ユーザー】口コミ一覧</h1>
    <hr color="BLUE">
    <button type="button" class="btn btn-primary"><a class="text-decoration-none text-reset" href="{{ route("articles.create") }}">口コミ投稿</a></button>
    <table class="table table-striped mx-auto">
        <thead>
            <tr>
                <th>[名前]</th>
                <th>[本文]</th>
                <th>[画像]</th>
                <th>[メニュー]</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
                <th>{{ $article->user->name }}</th>
                <th>{{ $article->body }}</th>
                <th>{{ $article->image }}</th>
                {{--  <th><img src="{{ asset($article->image) }}" width="200px" class="mt-3 mb-1"></th>  --}}
                <th><a href="{{ route("articles.edit", ['article'=> $article]) }}">編集</a></th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
