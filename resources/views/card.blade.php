@extends('layouts.main')

@section('content')

    <div class="card-container">
        <img src="{{$card ['thumb']}}" alt="">
        <h1>{{$card['title']}}</h1>
        <p>U.S. Price:{{$card['price']}}</p>
        <p>{{$card['description']}}</p>
    </div>

    <div class="info-section">
        <p>Series: {{$card['type']}}</p>
    </div>

@endsection