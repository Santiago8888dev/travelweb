@extends('layouts.app')

@section('content')
    <div class="card-header">{{ __('Login') }}</div>
    <section class="form-register">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <input id="email" type="email" class="controls @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <p class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </p>
            @enderror

            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

            <input id="password" type="password" class="controls @error('password') is-invalid @enderror"
                name="password" required autocomplete="current-password">

            @error('password')
                <p class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </p>
            @enderror

            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>


            <button type="submit" class="botons">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        @endsection
</section>
