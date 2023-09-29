<div class="section-nav">
    <nav>
        <ul class="ul-list">
            <li class="list"> City Tours </li>
            <li class="list">
                @forelse (Config::get('lenguajes') as $lang => $lenguajes)
                    @if ($lang != App::getlocale())
                        <a class="lenguaje" href="{{route('lenguaje', $lang)}}">{{$lenguajes}}</a>
                    @endif
                @empty
                        <li>not data</li>
                @endforelse
            </li>
            <li class="list">{{__('nav.reservations')}}</li>
            <li class="list">{{__('nav.contact')}}</li>
            <li class="list">Git Hub</li>
        </ul>
    </nav>
</div>

























    </div>
