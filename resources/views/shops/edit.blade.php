@extends('app')
@section('content')

<div class="container">
    <h1 class="text-primary text-center">【飲食店】飲食店編集</h1>
    <hr color="BLUE">
    <form method="POST" action="{{ route('shops.update', ['name' => $name]) }}" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="form-group">
            <label>[名前]</label>
            <p>{{ $shop->name }}</p>
        </div>
        <div class="form-group">
            <label>[電話番号]</label>
            <textarea name="tel" required class="form-control" rows="1" placeholder="本文">{{ $shop->tel ?? old('tel') }}</textarea>
        </div>
        <div class="form-group">
            <label>[住所]</label>
            <textarea name="address" required class="form-control" rows="1" placeholder="本文">{{ $shop->address ?? old('address') }}</textarea>
        </div>
        <div class="form-group">
            <label>[地図]</label>
            <textarea name="map" required class="form-control" rows="1" placeholder="本文">{{ $shop->map ?? old('map') }}</textarea>
        </div>
        <div class="form-group">
            <label>[Eメール]</label>
            <textarea name="email" required class="form-control" rows="1" placeholder="本文">{{ $shop->email ?? old('email') }}</textarea>
        </div>
        <button type="submit" class="btn blue-gradient btn-block">更新する</button>
    </form>
</div>

@endsection
