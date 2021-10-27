@extends('layouts.main')

@section("title" , "fetuccine") 

@section('contenuto')

    <nav class="product-prev">
        <a href="">
            <i class="fas fa-chevron-left"></i>
        </a>

    </nav>

    <nav class="product-next">
        <a href="">           
            <i class="fas fa-chevron-right"></i>
        </a>
    </nav>

    <div class="container">
        <img src="{{$comic["thumb"]}}" alt="">
        <h2>{{$comic["title"]}}</h2>

        <div class="shop-detail">
            <div>{{$comic["price"]}}</div>
            <div>Avaiable</div>
            <div>check avaiability</div>
        </div>

        <p class="comics-description">
            {{$comic["description"]}}
        </p>

        <div class="talent">
            <h3>Talent</h3>
            <div class="artist">
                <h4>Art by:</h4>
                <p>
                    @foreach ($comic["artists"] as $artist)
                        {{$artist}} 
                    @endforeach
                </p>
                
            </div>
            <div class="writer">
                <h4>writen by:</h4>
                <p>
                    @foreach ($comic["writers"] as $writers)
                    {{$writers}} 
                    @endforeach
                </p>
            </div>
            
        </div>
        <div class="specs">
            <h3>Specs</h3>
            <div class="series">{{$comic["series"]}}</div>
            <div class="price">{{$comic["price"]}} €</div>
            <div class="sale">{{$comic["sale_date"]}}</div>
        </div>
        {{-- @dump($prodotto) --}}
    </div>

    

@endsection

@section("cdn-import")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
@endsection
