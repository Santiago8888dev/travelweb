@extends('layouts.app')

@section('content')
        <section class="form-register">
        <div class="pr">{{ __('Register') }}</div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
            <input id="name" type="text" class="controls" @error('name') is-invalid @enderror name="name"
                value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <input id="email" type="email" class="controls @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

            <input id="password" type="password" class="controls @error('password') is-invalid @enderror"
                name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="controls"name="password_confirmation" required
                autocomplete="new-password">

            <button type="submit" class="botons">
                {{ __('Register') }}
            </button>
        </section>
        @endsection
