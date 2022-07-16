@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <h1>Edit profile</h1>
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

    <form action="{{ route('Profiles.update', $profiles->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        @method('PATCH')

        <div class="mb-3">
            <img src="{{ asset('/storage/users/avatars/' . $profiles->avatar) }}" class="img-thumbnail"
                alt="{{ $profiles->avatar }}">
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="fullName" id="fullName"
                value="{{ old('fullName', $profiles->fullName) }}">
            <label for="fullName">Full Name:</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="slug" id="slug"
                value="{{ old('slug', $profiles->slug) }}">
            <label for="slug">Slug Name:</label>
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control" name="bio" id="bio" style="height: 100px">{{ old('bio', $profiles->bio) }}</textarea>
            <label for="bio">Bio:</label>
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control" name="quotes" id="quotes" style="height: 100px">{{ old('quotes', $profiles->quotes) }}</textarea>
            <label for="quotes">quotes:</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="birthday" id="birthday"
                value="{{ old('birthday', $profiles->birthday) }}">
            <label for="birthday">Birthday:</label>
        </div>

        <div class="mb-3">
            <label for="avatar" class="form-label">Uploads Avater</label>
            <input class="form-control" type="file" name="avatar" id="avatar">
        </div>

        <select class="form-select form-select-lg mb-3" name="genders_id" id="genders_id"
            aria-label="Default select example">
            <option selected>Open this select menu</option>
            @foreach ($genders as $key => $gender)
                <option value="{{ $key }}" @if ($profiles->genders_id == $gender->id) selected @endif> {{ $gender->name }}
                </option>
            @endforeach
        </select>

        <select class="form-select form-select-lg mb-3" name="country_id" id="country_id"
            aria-label="Default select example">
            <option selected>Open this select menu</option>
            @foreach ($countries as $key => $country)
                <option value="{{ $key }}" @if ($profiles->country_id == $country->id) selected @endif>
                    {{ $country->name }}
                </option>
            @endforeach
        </select>

        <select class="form-select form-select-lg mb-3" name="language_id" id="language_id"
            aria-label="Default select example">
            <option selected>Open this select menu</option>
            @foreach ($languages as $key => $language)
                <option value="{{ $key }}" @if ($profiles->language_id == $language->id) selected @endif>
                    {{ $language->name }}
                </option>
            @endforeach
        </select>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="facebook" id="facebook"
                value="{{ old('facebook', $profiles->facebook) }}">
            <label for="facebook">facebook</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="linkedIn" id="linkedIn"
                value="{{ old('linkedIn', $profiles->linkedIn) }}">
            <label for="linkedIn">linkedIn</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="instagram" id="instagram"
                value="{{ old('instagram', $profiles->instagram) }}">
            <label for="instagram">instagram</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="youtube" id="youtube"
                value="{{ old('youtube', $profiles->youtube) }}">
            <label for="youtube">youtube</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="website" id="website"
                value="{{ old('website', $profiles->website) }}">
            <label for="website">website</label>
        </div>

        <button type="reset" value="reset" class="btn btn-danger">Reset</button>
        <button type="submit" value="Submit" class="btn btn-dark">Submit</button>
    </form>
@endsection
