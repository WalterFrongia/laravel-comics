@extends("layouts.main")

@section("content")
    <div id="card-wrapping">
        <div class="card-container">
            <img src="{{$card ['thumb']}}" alt="">
            <h1>{{$card['title']}}</h1>
            <p>U.S. Price:{{$card['price']}}</p>
            <p>{{$card['description']}}</p>
            <!-- importare come title ma fare il foreach -->
        </div>
        <div class="info-section">
            <p>Series: {{$card['type']}}</p>
            @foreach ($card ["writers"] as $writer )
                <p>Written by: {{$writer}} </p>
            @endforeach
        </div>
    </div>
@endsection