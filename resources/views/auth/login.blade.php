@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-floating mb-3">
            <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com" required
                autofocus>
            <label for="email">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required
                autocomplete="current-password">
            <label for="password">Password</label>
        </div>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="remember_me" name="remember_me">
            <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('Remember me') }}</label>
        </div>
        <div class="form-floating mb-3">
            @if (Route::has('password.request'))
                <a class="" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
        <div class="form-floating mb-3">
            <a class="" href="{{ route('register') }}">{{ __('dont have an account register') }}</a>
        </div>
        <button type="submit" value="Submit" class="btn btn-dark">{{ __('Login') }}</button>
    </form>
@endsection
