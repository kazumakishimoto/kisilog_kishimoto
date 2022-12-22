@extends('app')
@section('content')
<div class="container text-center">
    <h1 class="text-primary">【ユーザー】飲食店一覧</h1>
    <hr color="BLUE">
    <table class="table table-striped mx-auto">
        <thead>
            <tr>
                <th>[名前]</th>
                <th>[住所]</th>
                <th>[地図]</th>
                <th>[メニュー]</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shops as $shop)
            <tr>
                <th>{{ $shop->name }}</th>
                <th>{{ $shop->address }}</th>
                <th>{{ $shop->map }}</th>
                <th><a href="{{ route("shops.show", ['name'=> $shop->name]) }}">詳細</a></th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
