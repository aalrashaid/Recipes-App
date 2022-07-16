@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <h1>Proflie user</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    {{-- /Users/aalrashaid/Documents/GitHub/Recipes-App/public/storage/users/avatars/unnamed_9.jpeg --}}
    <div>
        <img src="{{ asset('/storage/users/avatars/' . $profiles->avatar) }}" name="avatar" id="avatar"
            class="img-thumbnail" alt="{{ $profiles->avatar }}">
    </div>
    <div>
        <label for="fullName" class="form-label">Full Name:</label>
        <label for="fullName" class="form-label">
            {{ $profiles->fullName }}
        </label>
    </div>
    <div>
        <label for="bio" class="form-label">bio:</label>
        <label for="bio" class="form-label">
            {{ $profiles->bio }}
        </label>
    </div>
    <div>
        <label for="quotes" class="form-label">quotes:</label>
        <label for="quotes" class="form-label">
            {{ $profiles->quotes }}
        </label>
    </div>
    <div>
        <label for="birthday" class="form-label">birthday:</label>
        <label for="birthday" class="form-label">
            {{ $profiles->birthday }}
        </label>
    </div>
    <div>
        <label for="country_id" class="form-label">country:</label>
        @foreach ($countries as $key => $country)
            <label for="country_id"  value="{{ $key }}" @if ($profiles->country_id == $country->id) selected @endif
                class="form-label">
                {{ $country->name }}
            </label>
        @endforeach


    </div>
    <div>
        <label for="language_id" class="form-label">Language:</label>
        @foreach ($languages as $key => $language)
            <label for="language" name="language_id" id="language_id" value="{{ $key }}" @if ($profiles->language_id == $language->id) @endif
                class="form-label">
                {{ $language->name }}
            </label>
        @endforeach

    </div>
    <div>
        <label for="genders_id" class="form-label">gender:</label>
        @foreach ($genders as $key => $gender)
            <label for="genders_id" name="genders_id" id="genders_id" class="form-label" value="{{ $key }}"
                @if ($profiles->genders_id == $gender->id) selected @endif>
                {{ $gender->name }}
            </label>
        @endforeach
    </div>
    <div>
        <label for="facebook" class="form-label">facebook:</label>
        <label for="facebook" class="form-label">
            {{ $profiles->facebook }}
        </label>
    </div>
    <div>
        <label for="linkedIn" class="form-label">linkedIn:</label>
        <label for="linkedIn" class="form-label">
            {{ $profiles->linkedIn }}
        </label>
    </div>
    <div>
        <label for="instagram" class="form-label">instagram:</label>
        <label for="instagram" class="form-label">
            {{ $profiles->instagram }}
        </label>
    </div>
    <div>
        <label for="youtube" class="form-label">youtube:</label>
        <label for="youtube" class="form-label">
            {{ $profiles->youtube }}
        </label>
    </div>
    <div>
        <label for="website" class="form-label">website:</label>
        <label for="website" class="form-label">
            {{ $profiles->website }}
        </label>
    </div>
    <div>
        {{-- <a class="btn btn-outline-dark" href="{{ route('Profile.create') }}" role="button">Create</a> --}}
        {{-- <a class="btn btn-outline-dark" href="{{ route('Profile/{$id}/edit') }}" role="button">Edit</a> --}}
        {{-- <a class="btn btn-outline-dark" href="{{ route('Profile.show') }}" role="button">Show</a> --}}
        {{-- <a class="btn btn-outline-warning" href="{{ route('Profile.destroy') }}" role="button">Delet</a> --}}


    </div>
@endsection
