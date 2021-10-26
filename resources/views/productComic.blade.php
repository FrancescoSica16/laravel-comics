@extends('layouts.main')

@section("title" , "fetuccine") 

@section('contenuto')
    <div class="container">
        <h2>Action comics : deluxe</h2>

        <div class="shop-detail">
            <div>price: 19.99</div>
            <div>Avaiable</div>
            <div>check avaiability</div>
        </div>

        <p class="comics-description">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint, natus et! Aperiam excepturi aliquid quos deleniti iusto sint tenetur dolore velit exercitationem minus incidunt ab, possimus fugit ipsam eligendi officiis!
        </p>

        <div class="talent">
            <h3>Talent</h3>
            <div class="artist">
                <h4>Art by:</h4>
                <p>filippo, gianluca,olga{{-- foreach ??? --}}</p>
                
            </div>
            <div class="writer">
                <h4>writen by:</h4>
                <p> giulia, andrea{{-- foreach ??? --}}</p>
            </div>
            
        </div>
        <div class="specs">
            <h3>Specs</h3>
            <div class="series">Action Comics</div>
            <div class="price">19.99</div>
            <div class="sale">october 2018</div>
        </div>
    </div>

@endsection