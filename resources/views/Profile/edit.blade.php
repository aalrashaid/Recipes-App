@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <h1>Edit profile</h1>

    @if (session('message'))
        <div class="alert alert-{{ session('class') }}">
            {{ session('message') }}
        </div>
    @endif

    <form action="{{ route('user.profile.update', ['profile' => $data['user']->profile->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <img src="{{ asset('/uploads/user/avatar/' . $data['user']->profile->avatar) }}" class="img-thumbnail"
                alt="User Avatar">
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" id="full_name"
                value="{{ old('full_name', $data['user']->profile->full_name) }}">
            <label for="full_name">Full Name:</label>
            @error('full_name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control @error('bio') is-invalid @enderror" name="bio" id="bio" style="height: 100px">{{ old('bio', $data['user']->profile->bio) }}</textarea>
            <label for="bio">Bio:</label>
            @error('bio')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control @error('quotes') is-invalid @enderror" name="quotes" id="quotes" style="height: 100px">{{ old('quotes', $data['user']->profile->quotes) }}</textarea>
            <label for="quotes">quotes:</label>
            @error('quotes')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('birthday') is-invalid @enderror" name="birthday" id="birthday"
                value="{{ old('birthday', $data['user']->profile->birthday) }}">
            <label for="birthday">Birthday:</label>
            @error('birthday')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="avatar" class="form-label">Uploads Avatar</label>
            <input class="form-control @error('avatar') is-invalid @enderror" type="file" name="avatar" id="avatar">
            @error('avatar')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <select class="form-select form-select-lg mb-3 @error('gender_id') is-invalid @enderror" name="gender_id" id="gender_id"
                aria-label="Default select example">
                <option value="" selected>Open this select menu</option>
                @foreach ($data['genders'] as $gender)
                    <option value="{{ $gender->id }}" @if ($data['user']->profile->gender_id == $gender->id) selected @endif>
                        {{ $gender->name }}
                    </option>
                @endforeach
            </select>
            @error('gender_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <select class="form-select form-select-lg mb-3 @error('country_id') is-invalid @enderror" name="country_id" id="country_id"
                aria-label="Default select example">
                <option value="" selected>Open this select menu</option>
                @foreach ($data['countries'] as $country)
                    <option value="{{ $country->id }}" @if ($data['user']->profile->country_id == $country->id) selected @endif>
                        {{ $country->name }}
                    </option>
                @endforeach
            </select>
            @error('country_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <select class="form-select form-select-lg mb-3 @error('language_id') is-invalid @enderror" name="language_id" id="language_id"
                aria-label="Default select example">
                <option value="" selected>Open this select menu</option>
                @foreach ($data['languages'] as $language)
                    <option value="{{ $language->id }}" @if ($data['user']->profile->language_id == $language->id) selected @endif>
                        {{ $language->name }}
                    </option>
                @endforeach
            </select>
            @error('language_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" id="facebook"
                value="{{ old('facebook', $data['user']->profile->facebook) }}">
            <label for="facebook">facebook</label>
            @error('facebook')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin" id="linkedin"
                value="{{ old('linkedin', $data['user']->profile->linkedin) }}">
            <label for="linkedin">linkedIn</label>
            @error('linkedin')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" id="instagram"
                value="{{ old('instagram', $data['user']->profile->instagram) }}">
            <label for="instagram">instagram</label>
            @error('instagram')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('youtube') is-invalid @enderror" name="youtube" id="youtube"
                value="{{ old('youtube', $data['user']->profile->youtube) }}">
            <label for="youtube">youtube</label>
            @error('youtube')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('website') is-invalid @enderror" name="website" id="website"
                value="{{ old('website', $data['user']->profile->website) }}">
            <label for="website">website</label>
            @error('website')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <button type="reset" value="Reset" class="btn btn-danger">Reset</button>
        <button type="submit" value="Submit" class="btn btn-dark">Submit</button>
    </form>
@endsection
