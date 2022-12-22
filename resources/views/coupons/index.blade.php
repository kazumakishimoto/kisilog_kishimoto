@extends('app')
@section('content')
<div class="container text-center">
    <h1 class="text-primary">【ユーザー】クーポン一覧</h1>
    <hr color="BLUE">
    <table class="table table-striped mx-auto">
        <thead>
            <tr>
                <th>[クーポン]</th>
                <th>[使用期限]</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($coupons as $coupon)
            <tr>
                <th>{{ $coupon->body }}</th>
                <th>{{ $coupon->expiration }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
