@extends('app')
@section('content')
<div class="container text-center">
    <h1 class="text-primary">【ユーザー】メニュー一覧</h1>
    <hr color="BLUE">
    <table class="table table-striped mx-auto">
        <thead>
            <tr>
                <th>[品名]</th>
                <th>[価格]</th>
                <th>[画像]</th>
                <th>[メニュー]</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menus as $menu)
            <tr>
                <th>{{ $menu->name }}</th>
                <th>{{ $menu->price }}</th>
                <th>{{ $menu->image }}</th>
                {{--  <th><img src="{{ asset($menu->image) }}" width="200px" class="mt-3 mb-1"></th>  --}}
                <th><a href="{{ route("menus.edit", ['menu'=> $menu]) }}">編集</a></th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
