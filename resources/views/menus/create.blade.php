@extends('app')
@section('content')

<div class="container">
    <h1 class="text-danger text-center">【飲食店】メニュー作成</h1>
    <hr color="BLUE">
    <form method="POST" action="{{ route('menus.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-text">
            <label>[品名]</label>
            <textarea name="name" required class="form-control" rows="1" placeholder="本文">{{ $menu->name ?? old('name') }}</textarea>
        </div>
        <div class="form-group">
            <label>[価格]</label>
            <textarea name="price" required class="form-control" rows="1" placeholder="本文">{{ $menu->price ?? old('price') }}</textarea>
        </div>
        <div class="form-group">
            <label for="image"></label>
            <input id="image" type="file" name="image" accept="image/*" onchange="previewImage(this);">
        </div>
        <button type="submit" class="btn blue-gradient btn-block">投稿する</button>
</div>

@endsection
