@extends('app')
@section('content')
<div class="container text-center">
    <h1 class="text-primary">【ユーザー】口コミ一覧</h1>
    <hr color="BLUE">
    <table class="table table-striped mx-auto">
        <thead>
            <tr>
                <th>あ</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1</th>
                <td>Hanako</td>
                <td>Qiita</td>
                <td>@Hanaq</td>
            </tr>
            <tr>
                <th>2</th>
                <td>Taro</td>
                <td>Qiita</td>
                <td>@TaroQ</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
