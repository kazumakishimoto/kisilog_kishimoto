@extends('app')
@section('content')
<div class="container text-center">
    <h1 class="text-primary">【ユーザー】食べログ</h1>
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
                <a href="">【飲食店一覧】</a>
                {{-- <a href="{{ route('shops.index') }}">【飲食店一覧】</a> --}}
            </td>
        </tr>
    </table>
</div>

@endsection
