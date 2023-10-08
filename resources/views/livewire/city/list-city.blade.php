<div>
    <div class="bd">
        <div class="container">
            @forelse ($city as $item)
            <div class="card">
                {{-- imagen --}}
                <div class="img">
                    <img src="{{asset('images/city/'.$item->image)}}" alt="">
                </div>

                <div class="content">
                    <div class="text">
                        <h3>{{$item->name}}</h3>
                        <p>{{$item->description}}</p>
                        <p>{{$item->location}}</p>
                    </div>
                </div>

            </div>
            @empty
            <h2 >not data</h2>
            @endforelse
        </div>
    </div>
</div>
