@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    {{-- <main class=""> --}}
        <form method="POST" action="{{ route('register') }}" autocomplete="on">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" name="username" id="username" class="form-control" placeholder="username" required autofocus>
                <label for="username">username:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com"
                    required autofocus>
                <label for="email">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required
                    autofocus autocomplete="new-password">
                <label for="password">Password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                    placeholder="Password Confirmation" required autofocus>
                <label for="password_confirmation">Password Confirmation</label>
            </div>
            <div class="mb-3">
                <a href="{{ route('login') }}">{{ __('Already registered?') }}</a>
            </div>
            <button type="submit" value="Submit" class="btn btn-dark">{{ __('Register') }}</button>
        </form>
    {{-- </main> --}}
@endsection
