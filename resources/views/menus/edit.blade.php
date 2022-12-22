@extends('app')
@section('content')

<div class="container">
    <h1 class="text-danger text-center">【飲食店】メニュー更新</h1>
    <hr color="BLUE">
    <form method="POST" action="{{ route('menus.update', ['menu' => $menu]) }}" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="card-text">
            <label>[品名]</label>
            <p>{{ $menu->name }}</p>
        </div>
        <div class="form-group">
            <label>[価格]</label>
            <textarea name="price" required class="form-control" rows="1" placeholder="価格">{{ $menu->price ?? old('price') }}</textarea>
        </div>
        <div class="form-group">
            <label for="image"></label>
            <input id="image" type="file" name="image" accept="image/*" onchange="previewImage(this);">
        </div>
        <button type="submit" class="btn blue-gradient btn-block">更新する</button>
    </form>
    <form method="POST" action="{{ route('menus.destroy', ['menu' => $menu]) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-block mt-2">削除する</button>
    </form>
</div>

@endsection
