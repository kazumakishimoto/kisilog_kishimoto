@extends('app')
@section('content')
<div class="container text-center">
    <h1 class="text-primary">【ユーザー】食べログ</h1>
    <hr color="BLUE">
    <h2>MENU</h2>
    <hr color="BLACK">
    <table class="mx-auto">
        <tr>
            <td>
                <a href="{{ route('users.show', ['name' => $name]) }}">【共通】プロフィール詳細</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('shops.index') }}">【ユーザー】飲食店一覧</a>
            </td>
        </tr>
        {{-- <tr>
            <td>
                <a href="{{ route('menus.index') }}">【ユーザー】メニュー一覧</a>
            </td>
        </tr> --}}
        <tr>
            <td>
                <a href="{{ route('menus.create') }}">【飲食店】メニュー作成</a>
            </td>
        </tr>
         <tr>
            <td>
                <a href="{{ route('coupons.create') }}">【飲食店】クーポン作成</a>
        </tr>
        <tr>
            <td>
                <a href="{{ route('banners.create') }}">【飲食店】バナー作成</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('reservations.index') }}">【飲食店】予約一覧</a>
            </td>
        </tr>
    </table>
</div>

@endsection
