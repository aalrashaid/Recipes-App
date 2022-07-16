@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <div class="form-floating mb-3">
            <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com" required
                autofocus>
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
        <button type="submit" value="Submit" class="btn btn-dark">{{ __('Reset Password') }}</button>
    @endsection
