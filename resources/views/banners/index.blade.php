@extends('app')
@section('content')
<div class="container text-center">
    <h1 class="text-primary">【ユーザー】バナー一覧</h1>
    <hr color="BLUE">
    <table class="table table-striped mx-auto">
        <thead>
            <tr>
                <th>[バナー]</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banners as $banner)
            <tr>
                <th>{{ $banner->body }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
