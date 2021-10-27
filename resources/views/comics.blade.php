@extends('layouts.main')


@section('title', "Comics") 

@section('contenuto')
    <div id="main-wrapper" class="container">

         @foreach ($comicitem as $comic)

            <div class="comic-item">
                <a href='{{route("comics.show" , ["id" => $loop->index])}}'>
                {{-- <a href="{{url("/comics/$loop->index")}}">   --}}
                    <img src="{{$comic["thumb"]}}" alt="">
                    <h3>{{$comic["title"]}}</h3>
                </a>
            </div>
        @endforeach 
    </div>
@endsection

