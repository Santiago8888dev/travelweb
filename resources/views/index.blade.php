@extends('layouts.main')
@section('title', 'City Tours')
@section('content')
{{-- portada --}}
    <section class="section section1">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>


        <div class="welcome">
            <h2 class="welcome-text">{{__('index.title')}}</h2>
            <p class="eslogan">{{__('index.eslogan')}}</p>
        </div>
    </section>
    {{-- seccion de cartas --}}
    <section class="section section2">
            @livewire('city.list-city')
    </section>


@endsection


