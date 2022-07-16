@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <div>
        <p>{{ __('This is a secure area of the application. Please confirm your password before continuing.') }}</p>
    </div>
    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf
        <div class="form-floating mb-3">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required autofocus
                autocomplete="new-password">
            <label for="password">Password</label>
        </div>
        <button type="submit" value="Submit" class="btn btn-dark">{{ __('Confirm') }}</button>
    </form>
@endsection
