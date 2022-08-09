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


    <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="Profile-tab" data-bs-toggle="tab" data-bs-target="#Profile-tab-pane"
            type="button" role="tab" aria-controls="Profile-tab-pane" aria-selected="true">Profile</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings-tab-pane"
            type="button" role="tab" aria-controls="settings-tab-pane" aria-selected="false">Settings</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="notifications-tab" data-bs-toggle="tab" data-bs-target="#notifications-tab-pane"
            type="button" role="tab" aria-controls="notifications-tab-pane" aria-selected="false">Notifications</button>
    </li>
    <!-- <li class="nav-item" role="presentation">
    <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
  </li> -->
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="Profile-tab-pane" role="tabpanel" aria-labelledby="Profile-tab"
        tabindex="0">
        <form action="{{ route('Profile.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="fullName" id="fullName" value="{{old('fullName') }}"
                    placeholder="Full Name">
                <label for="fullName">Full Name:</label>
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a bio here" name="bio" id="bio"
                    style="height: 100px"></textarea>
                <label for="bio">Bio:</label>
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a quotes here" name="quotes" id="quotes"
                    style="height: 100px"></textarea>
                <label for="quotes">quotes:</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="birthday" id="birthday" value="{{old('birthday') }}"
                    placeholder="birthday">
                <label for="birthday">Birthday:</label>
            </div>

            <div class="mb-3">
                <label for="avatars" class="form-label">Uploads Avater</label>
                <input class="form-control" type="file" name="avatars" id="avatars">
            </div>

            <select class="form-select form-select-lg mb-3" name="genders_id" id="genders_id" value=""
                aria-label="Default select example">
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
                <input type="text" class="form-control" name="facebook" id="facebook" value="{{old('linkedIn') }}"
                    placeholder="facebook">
                <label for="facebook">facebook</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="linkedIn" id="linkedIn" value="{{old('linkedIn') }}"
                    placeholder="linkedIn">
                <label for="linkedIn">linkedIn</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="instagram" id="instagram" value="{{old('instagram') }}"
                    placeholder="instagram">
                <label for="instagram">instagram</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="youtube" id="youtube" value="{{ old('youtube') }}"
                    placeholder="youtube">
                <label for="youtube">youtube</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="website" id="website" value="{{ old('website') }}"
                    placeholder="website">
                <label for="website">website</label>
            </div>

            <button type="reset" value="reset" class="btn btn-danger">Reset</button>
            <button type="submit" value="Submit" class="btn btn-dark">Submit</button>
        </form>
    </div>

    <div class="tab-pane fade" id="settings-tab-pane" role="tabpanel" aria-labelledby="settings-tab" tabindex="0">...
    </div>
    <div class="tab-pane fade" id="notifications-tab-pane" role="tabpanel" aria-labelledby="notifications-tab"
        tabindex="0">...</div>
    <!-- <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div> -->
</div>
    {{-- /Users/aalrashaid/Documents/GitHub/recipes-App/public/storage/users/avatars/unnamed_9.jpeg --}}
    {{-- <div>
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
    </div> --}}
    {{-- <div> --}}
        {{-- <a class="btn btn-outline-dark" href="{{ route('profile.create') }}" role="button">Create</a> --}}
        {{-- <a class="btn btn-outline-dark" href="{{ route('profile/{$id}/edit') }}" role="button">Edit</a> --}}
        {{-- <a class="btn btn-outline-dark" href="{{ route('profile.show') }}" role="button">Show</a> --}}
        {{-- <a class="btn btn-outline-warning" href="{{ route('profile.destroy') }}" role="button">Delet</a> --}}


    {{-- </div> --}}
@endsection
