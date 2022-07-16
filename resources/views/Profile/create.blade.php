@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

    <h1>Create profile</h1>

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

    <form action="{{ route('Profiles.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="fullName" id="fullName" value="{{old('fullName') }}" placeholder="Full Name">
            <label for="fullName">Full Name:</label>
        </div>

        {{-- <div class="form-floating mb-3">
            <input type="text" class="form-control" name="slug" id="slug" placeholder="slug">
            <label for="slug">Slug Name:</label>
        </div> --}}

        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a bio here" name="bio" id="bio" style="height: 100px"></textarea>
            <label for="bio">Bio:</label>
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a quotes here" name="quotes" id="quotes" style="height: 100px"></textarea>
            <label for="quotes">quotes:</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="birthday" id="birthday" value="{{old('birthday') }}" placeholder="birthday">
            <label for="birthday">Birthday:</label>
        </div>

        <div class="mb-3">
            <label for="avatars" class="form-label">Uploads Avater</label>
            <input class="form-control" type="file" name="avatars" id="avatars">
        </div>

        <select class="form-select form-select-lg mb-3" name="genders_id" id="genders_id" value="" aria-label="Default select example">
            <option selected>Open this select menu</option>
            @foreach ($genders as $gender)
                <option value="{{ $gender->id }}">
                    {{ $gender->name }}
                </option>
            @endforeach
        </select>

        <select class="form-select form-select-lg mb-3" name="country_id" id="country_id"
            aria-label="Default select example">
            <option selected>Open this select menu</option>
            @foreach ($countries as $country)
                <option value="{{ $country->id }}">
                    {{ $country->name }}
                </option>
            @endforeach
        </select>

        <select class="form-select form-select-lg mb-3" name="language_id" id="language_id"
            aria-label="Default select example">
            <option selected>Open this select menu</option>
            @foreach ($languages as $language)
                <option value="{{ $language->id }}">{{ $language->name }}</option>
            @endforeach
        </select>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="facebook" id="facebook" value="{{old('linkedIn') }}" placeholder="facebook">
            <label for="facebook">facebook</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="linkedIn" id="linkedIn" value="{{old('linkedIn') }}" placeholder="linkedIn">
            <label for="linkedIn">linkedIn</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="instagram" id="instagram" value="{{old('instagram') }}" placeholder="instagram">
            <label for="instagram">instagram</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="youtube" id="youtube" value="{{ old('youtube') }}"  placeholder="youtube">
            <label for="youtube">youtube</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="website" id="website" value="{{ old('website') }}" placeholder="website">
            <label for="website">website</label>
        </div>

        <button type="reset" value="reset" class="btn btn-danger">Reset</button>
        <button type="submit" value="Submit" class="btn btn-dark">Submit</button>
    </form>
@endsection
