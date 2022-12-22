@extends('app')
@section('content')

<div class="container">
    <h1 class="text-primary text-center">【共通】プロフィール詳細</h1>
    <hr color="BLUE">
    <form method="GET" action="{{ route('users.edit', ['name' => $name]) }}" enctype="multipart/form-data">
        @csrf
        <div class="card-text">
            <label>[名前]</label>
            <p>{{ $user->name }}</p>
        </div>
        <div class="card-text">
            <label>[年齢]</label>
            <p>{{ $user->age }}</p>
        </div>
        <div class="card-text">
            <label>[性別]</label>
            <p>{{ $user->gender }}</p>
        </div>
        <div class="card-text">
            <label>[自己紹介]</label>
            <p>{{ $user->introduction }}</p>
        </div>
        <div class="card-text">
            <label>[Eメール]</label>
            <p>{{ $user->email }}</p>
        </div>
        <div class="card-text">
            <label>[画像]</label>
            <p>{{ $user->image }}</p>
        </div>
        <button type="submit" class="btn blue-gradient btn-block">編集する</button>
    </form>
</div>

@endsection
