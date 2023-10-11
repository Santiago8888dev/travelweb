<div class="section-nav">
    <nav>
        {{-- <li class="list"> City Tours </li> --}}
        <div class="content2">
            <ul class="ul-list">
                <li class="list" style="color:azure;  font-size: 20px;"> City Tours</li>
                <li class="list">
                @forelse (Config::get('lenguajes') as $lang => $lenguajes)
                @if ($lang != App::getlocale())
                <a class="lenguaje" href="{{route('lenguaje', $lang)}}">{{$lenguajes}}</a>
                @endif
                @empty
                <li>not data</li>
                @endforelse
            </li>
            <li class="list"><a href="">{{__('nav.reservations')}}</a></li>
            <li class="list"><a href="{{route('formulario')}}">{{__('nav.contact')}}</a></li>
            {{-- <li class="list">Git Hub <img src="{{asset('img/github-icon.svg')}}" alt=""></li> --}}

        </ul>
    </div>
    </nav>
</div>
