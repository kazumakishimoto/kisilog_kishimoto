@extends('app')
@section('content')

<div class="container">
    <h1 class="text-danger text-center">【飲食店】予約作成</h1>
    <hr color="BLUE">
    <form method="POST" action="{{ route('reservations.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-text">
            <label>[予約内容]</label>
            <textarea name="body" required class="form-control" rows="1" placeholder="">{{ $reservation->body ?? old('body') }}</textarea>
        </div>
        <div class="form-group">
            <label>[予約人数]</label>
            <textarea name="number" required class="form-control" rows="1" placeholder="">{{ $reservation->number ?? old('number') }}</textarea>
        </div>
        <div class="form-group">
            <label>[予約日時]</label>
            <input type="datetime" name="datetime" class="form-control">
        </div>
        <button type="submit" class="btn blue-gradient btn-block">作成する</button>
</div>

@endsection
