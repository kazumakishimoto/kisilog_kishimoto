@extends('app')
@section('content')

<div class="container">
    <h1 class="text-primary text-center">【ユーザー】飲食店一覧</h1>
    <hr color="BLUE">
    <form method="GET" action="{{ route('shops.edit', ['name' => $name]) }}" enctype="multipart/form-data">
        @csrf
        <div class="card-text">
            <label>[名前]</label>
            <p>{{ $shop->name }}</p>
        </div>
        <div class="card-text">
            <label>[電話番号]</label>
            <p>{{ $shop->tel }}</p>
        </div>
        <div class="card-text">
            <label>[住所]</label>
            <p>{{ $shop->address }}</p>
        </div>
        <div class="card-text">
            <label>[地図]</label>
            <p>{{ $shop->map }}</p>
        </div>
        <div class="card-text">
            <label>[Eメール]</label>
            <p>{{ $shop->email }}</p>
        </div>
        <button type="submit" class="btn blue-gradient btn-block">編集する</button>
    </form>
</div>

@endsection
