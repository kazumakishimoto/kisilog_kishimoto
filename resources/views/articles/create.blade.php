@extends('app')
@section('content')

<div class="container text-center">
    <h1 class="text-primary">【ユーザー】口コミ作成</h1>
    <hr color="BLUE">
    <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
        @csrf
        {{-- <div class="md-form">
            <label>タイトル</label>
            <input type="text" name="title" class="form-control" required value="{{ $article->title ?? old('title') }}">
        </div> --}}

        <div class="form-group">
            <textarea name="body" required class="form-control" rows="16" placeholder="本文">{{ $article->body ?? old('body') }}</textarea>
        </div>
        <div class="form-group">
            <label for="image"></label>
            <input id="image" type="file" name="image" accept="image/*" onchange="previewImage(this);">
        </div>
        <button type="submit" class="btn blue-gradient btn-block">投稿する</button>
</div>

@endsection
