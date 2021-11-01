<header class="container"> 
    <a href="#" class="header-logo">
        <img src="{{asset('images/dc-logo.png')}}" alt="">
    </a>
    <nav>
        <ul>
            @foreach ($header_links as $link )
                <li >
                    <a href="{{route($link['url'])}}" 
                        class='{{request()->routeIs($link['url'])? "active" : "" }}' >
                        {{$link['text']}}
                    </a>
                </li>
            @endforeach        
        </ul>
    </nav>
    
</header>
<div id="jumbotron">
    
</div>