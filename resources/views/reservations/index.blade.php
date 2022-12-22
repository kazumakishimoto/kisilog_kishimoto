@extends('app')
@section('content')
<div class="container text-center">
    <h1 class="text-primary">【ユーザー】予約一覧</h1>
    <hr color="BLUE">
    <table class="table table-striped mx-auto">
        <thead>
            <tr>
                <th>[予約内容]</th>
                <th>[予約人数]</th>
                <th>[予約日時]</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
            <tr>
                <th>{{ $reservation->body }}</th>
                <th>{{ $reservation->number }}</th>
                <th>{{ $reservation->datetime }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
