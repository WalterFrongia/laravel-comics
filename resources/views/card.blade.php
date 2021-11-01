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
                    <div id="talent-container">
                        <h1>Talent</h1>
                        <div id="art-container">
                            <p>Art by:</p>
                            <div id="artist-container">
                                @foreach ($card ["artists"] as $artist )
                                    <span>{{$artist}},</span>
                                @endforeach
                            </div>
                        </div>
                        <div id="write-container">
                            <p>Written by:</p>
                            <div id="written-container">
                                @foreach ($card ["writers"] as $writer )
                                    <span>{{$writer}},</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div id="specs-container">
                        <h1>Specs</h1> 
                        <div class="series-container">
                            <p>Series:</p>
                            <div class="series-content">
                                <span id="title-blue">{{$card['title']}}</span>
                            </div>
                        </div>
                        <div class="series-container">
                            <p>U.S. Price:</p>
                            <div id="price-content">
                                <span>{{$card['price']}}</span>
                            </div>
                        </div>
                        <div class="series-container">
                            <p>On Sale Date:</p>
                            <div id="sale-date">
                                <span>{{$card['sale_date']}}</span>
                            </div>
                        </div>              
                    </div>
                </div>        
            </div>
        </div>
    </div>
@endsection