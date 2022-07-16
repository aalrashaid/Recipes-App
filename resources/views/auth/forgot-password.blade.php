@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <div>
        <p>{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </p>
    </div>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-floating mb-3">
            <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com" required
                autofocus>
            <label for="email">Email address</label>
        </div>
        <button type="submit" value="Submit" class="btn btn-dark">{{ __('Email Password Reset Link') }}</button>
    </form>
@endsection
