@extends('layouts.main')

@section('content')
    <div class="content-section">
        @foreach ($cards as $card)
            <div id="card">
                <ul>
                    <li>
                        <img src="{{$card ['thumb']}}" alt="">
                        <a href="{{route('card',$loop -> index)}}">{{$card ["title"]}}</a>
                    </li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection
