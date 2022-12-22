@extends('app')
@section('content')

<div class="container">
    <h1 class="text-success text-center">【共通】プロフィール編集</h1>
    <hr color="BLUE">
    <form method="POST" action="{{ route('users.update', ['name' => $name]) }}" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="form-group">
            <label>[名前]</label>
            <p>{{ $user->name }}</p>
        </div>
        <div class="form-group">
            <label>[年齢]</label>
            <p>{{ $user->age }}</p>
        </div>
        <label>[性別]</label>
        <p>{{ $user->gender }}</p>
        <div class="form-group">
            <label>[自己紹介]</label>
            <textarea name="introduction" required class="form-control" rows="4" placeholder="本文">{{ $user->introduction ?? old('introduction') }}</textarea>
        </div>
        <div class="form-group">
            <label>[Eメール]</label>
            <textarea name="email" required class="form-control" rows="1" placeholder="本文">{{ $user->email ?? old('email') }}</textarea>
        </div>
        <div class="form-group">
            <label for="image"></label>
            <input id="image" type="file" name="image" accept="image/*" onchange="previewImage(this);">
        </div>
        <button type="submit" class="btn blue-gradient btn-block">更新する</button>
    </form>
</div>

@endsection
