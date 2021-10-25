<header>
    {{-- <ul>
        <li>
            <a href="{{ route('comics')}}">Home</a>
        </li>
        <li>
            <a href="{{ route('comics')}}">Comics</a> 
        </li>
        <li>
            <a href="{{ route('characters')}}">Characters</a>
        </li>        
    </ul> --}}   
    <ul>
        @foreach ($header_links as $link )
            <li class='{{request()->routeIs($link['url'])? "active" : "" }}'>
                <a href="{{route($link['url'])}}">{{$link['text']}}</a>
            </li>
        @endforeach        
    </ul>
</header>