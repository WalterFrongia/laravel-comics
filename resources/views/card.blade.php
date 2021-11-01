@extends("layouts.main")

@section("content")
    <div id="card-wrapping">

        <div id="bar-blue"></div>

        <div id="content-info-card">

            <div id="card-container">

                <img id="comic-img"src="{{$card ['thumb']}}" alt="">
                <h1>{{$card['title']}}</h1>
            
                <div id="container-banner-price-ceck">
                    <div id="price-container">
                        <p>U.S. Price: <span>{{$card['price']}}</span></p>
                        <p>AVALIABLE</p>
                    </div>
                    <div id="check-container">
                        <p>Check Availibility</p>
                    </div>
                </div>
                <div id="description-container">
                    <p>{{$card['description']}}</p>
                </div>
            </div>
            <div id="container-banner-img">
                <img id="img-banner" src="/images/adv.jpg" alt="">
            </div>
        </div>
        <div id="info-section">
                <div id="table-info-card">
                    <p>Series: {{$card['type']}}</p>
                    @foreach ($card ["writers"] as $writer )
                        <p>Written by: {{$writer}} </p>
                    @endforeach
                </div>        
            </div>
        </div>
    </div>
@endsection