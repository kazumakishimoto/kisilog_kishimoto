@extends('app')
@section('content')

<div class="container">
    <h1 class="text-primary text-center">【ユーザー】口コミ更新</h1>
    <hr color="BLUE">
    <form method="POST" action="{{ route('articles.update', ['article' => $article]) }}" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="card-text">
            <label>[名前]</label>
            <p>{{ $article->user->name }}</p>
        </div>
        <div class="form-group">
            <label>[本文]</label>
            <textarea name="body" required class="form-control" rows="16" placeholder="本文">{{ $article->body ?? old('body') }}</textarea>
        </div>
        <div class="form-group">
            <label for="image"></label>
            <input id="image" type="file" name="image" accept="image/*" onchange="previewImage(this);">
        </div>
        <button type="submit" class="btn blue-gradient btn-block">更新する</button>
    </form>
    <form method="POST" action="{{ route('articles.destroy', ['article' => $article]) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-block mt-2">削除する</button>
    </form>
</div>

@endsection
