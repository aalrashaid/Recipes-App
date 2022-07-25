@extends('layouts.dashboards')

@section('title', 'Page Title')

@section('content')
    <div class="list-group mb-3">

        <h1>Dashboard</h1>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <a href="{{ route('user.profile.index') }}" class="list-group-item list-group-item-action">Profile</a>
        <a href="{{ route('user.recipes.index') }}" class="list-group-item list-group-item-action">Recipes</a>
        {{-- <a href="#" class="list-group-item list-group-item-action">A third link item</a>
        <a href="#" class="list-group-item list-group-item-action">A fourth link item</a> --}}
    </div>
@endsection
