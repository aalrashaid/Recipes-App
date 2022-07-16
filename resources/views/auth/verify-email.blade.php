@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <div>
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>
    <div>
        @if (session('status') == 'verification-link-sent')
        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        @endif
    </div>
    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit" value="Submit" class="btn btn-dark">{{ __('Resend Verification Email') }}</button>
    </form>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" value="Submit" class="btn btn-dark">{{ __('Log Out') }}</button>
    </form>
@endsection