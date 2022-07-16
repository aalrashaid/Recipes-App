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
{{-- <div>
    <img src="{{ asset('/storage/users/avatars/'. $Profiles->avatar) }}" name="avatar" id="avatar" class="img-thumbnail"
        alt="{{ $Profiles->avatar }}">
</div> --}}
<div>
    <label for="fullName" class="form-label">Full Name:</label>
    <label for="fullName" class="form-label">
        {{ $Profiles->fullName }}
    </label>
</div>
<div>
    <label for="bio" class="form-label">bio:</label>
    <label for="bio" class="form-label">
        {{ $Profiles->bio }}
    </label>
</div>
<div>
    <label for="quotes" class="form-label">quotes:</label>
    <label for="quotes" class="form-label">
        {{ $Profiles->quotes }}
    </label>
</div>
<div>
    <label for="birthday" class="form-label">birthday:</label>
    <label for="birthday" class="form-label">
        {{ $Profiles->birthday }}
    </label>
</div>
<div>
    <label for="country_id" class="form-label">country:</label>
    <label for="country_id" class="form-label">
        {{ $Profiles->country_id }}
    </label>
</div>
<div>
    <label for="language" class="form-label">Language:</label>
    <label for="language" class="form-label">
        {{ $Profiles->language_id }}
    </label>
</div>
<div>
    <label for="gender" class="form-label">gender:</label>
    <label for="gender" class="form-label">
        {{ $Profiles->gender }}
    </label>
</div>
<div>
    <label for="facebook" class="form-label">facebook:</label>
    <label for="facebook" class="form-label">
        {{ $Profiles->facebook }}
    </label>
</div>
<div>
    <label for="linkedIn" class="form-label">linkedIn:</label>
    <label for="linkedIn" class="form-label">
        {{ $Profiles->linkedIn }}
    </label>
</div>
<div>
    <label for="instagram" class="form-label">instagram:</label>
    <label for="instagram" class="form-label">
        {{ $Profiles->instagram }}
    </label>
</div>
<div>
    <label for="youtube" class="form-label">youtube:</label>
    <label for="youtube" class="form-label">
        {{ $Profiles->youtube }}
    </label>
</div>
<div>
    <label for="website" class="form-label">website:</label>
    <label for="website" class="form-label">
        {{ $Profiles->website }}
    </label>
</div>
<div>
    {{-- <a class="btn btn-outline-dark" href="{{ route('Profile.create') }}" role="button">Create</a> --}}
    {{-- <a class="btn btn-outline-dark" href="{{ route('Profile/{$id}/edit') }}" role="button">Edit</a> --}}
    {{-- <a class="btn btn-outline-dark" href="{{ route('Profile.show') }}" role="button">Show</a> --}}
    {{-- <a class="btn btn-outline-warning" href="{{ route('Profile.destroy') }}" role="button">Delet</a> --}}


</div>
@endsection
