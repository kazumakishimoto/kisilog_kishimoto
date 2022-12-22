@extends('app')
@section('content')

<div class="container">
    <h1 class="text-danger text-center">【飲食店】クーポン作成</h1>
    <hr color="BLUE">
    <form method="POST" action="{{ route('coupons.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-text">
            <label>[クーポン]</label>
            <textarea name="body" required class="form-control" rows="1" placeholder="">{{ $coupon->body ?? old('body') }}</textarea>
        </div>
        <div class="form-group">
            <label>[使用期限]</label>
            <textarea name="expiration" required class="form-control" rows="1" placeholder="">{{ $coupon->expiration ?? old('expiration') }}</textarea>
        </div>
        <button type="submit" class="btn blue-gradient btn-block">作成する</button>
</div>

@endsection
