@extends('app')
@section('content')

<div class="container">
    <h1 class="text-danger text-center">【飲食店】バナー作成</h1>
    <hr color="BLUE">
    <form method="POST" action="{{ route('banners.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-text">
            <label>[クーポン]</label>
            <textarea name="body" required class="form-control" rows="1" placeholder="">{{ $banner->body ?? old('body') }}</textarea>
        </div>
        <button type="submit" class="btn blue-gradient btn-block">作成する</button>
</div>

@endsection
