@extends('app')
@section('content')
<div class="container text-center">
    <h1 class="text-danger">【飲食店】食べログ</h1>
    <hr size="01" color="BLUE">
    <p>
            <font size="5">MENU</font>
        </p>
    <hr size="2" color="BLACK">
    <table class="mx-auto">
        <tr>
            <td>
                <a href="">【プロフィール】</a>
                {{-- <a href="{{ route('users.show', ['name' => $person->name]) }}">【プロフィール】</a> --}}
            </td>
        </tr>
        <tr>
            <td>
                <a href="">【予約一覧】</a>
                {{-- <a href="{{ route('reservations.index') }}">【飲食店一覧】</a> --}}
            </td>
        </tr>
        <tr>
            <td>
                <a href="">【クーポン作成】</a>
                {{-- <a href="{{ route('coupons.create') }}">【飲食店一覧】</a> --}}
            </td>
        </tr>
        <tr>
            <td>
                <a href="">【メニュー一覧】</a>
                {{-- <a href="{{ route('menus.index') }}">【飲食店一覧】</a> --}}
            </td>
        </tr>
        <tr>
            <td>
                <a href="">【メニュー作成】</a>
                {{-- <a href="{{ route('menus.create') }}">【飲食店一覧】</a> --}}
            </td>
        </tr>
        <tr>
            <td>
                <a href="">【バナー作成】</a>
                {{-- <a href="{{ route('banners.create') }}">【飲食店一覧】</a> --}}
            </td>
        </tr>
    </table>
</div>

@endsection
