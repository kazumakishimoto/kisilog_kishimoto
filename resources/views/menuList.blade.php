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
