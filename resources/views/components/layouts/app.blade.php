<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
    <link rel="stylesheet" href="{{asset('css/card.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        @livewireStyles
</head>
    <body>
        <section class="section section1">
            @include('partials.nav')
        </section>

        <section class="section section2">
            @livewire('city.list-city')
        </section>

        <section>
            @livewire('form.form-index')
        </section>


        <section>
            @livewire('city.create-city')
        </section>
        <footer class="footer">
            <p>hecho with peyton8888</p>
        </footer>


        {{-- {{ $slot }} --}}
    @livewireScripts
    </body>
</html>
