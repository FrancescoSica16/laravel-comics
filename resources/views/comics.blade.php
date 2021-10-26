@extends('layouts.main')


@section('title', "Comics") 

@section('contenuto')
    <div id="main-wrapper" class="container">

         @foreach ($comicitem as $comic)

            <div class="comic-item">

                <img src="{{$comic["thumb"]}}" alt="">
                <h3>{{$comic["title"]}}</h3>

            </div>
        @endforeach 
    </div>
@endsection
