@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<h1>Profile</h1>

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

 <div>
    <img src="{{ asset('/uploads/user/avatar/'. $data['user']->profile->avatar) }}" id="avatar" class="img-thumbnail"
        alt="User Avatar">
</div>
<div>
    <label for="fullName" class="form-label">Full Name:</label>
    <label for="fullName" class="form-label">
        {{ $data['user']->profile->full_name ?? '---' }}
    </label>
</div>
<div>
    <label for="bio" class="form-label">bio:</label>
    <label for="bio" class="form-label">
        {{ $data['user']->profile->bio ?? '---' }}
    </label>
</div>
<div>
    <label for="quotes" class="form-label">quotes:</label>
    <label for="quotes" class="form-label">
        {{ $data['user']->profile->quotes ?? '---' }}
    </label>
</div>
<div>
    <label for="birthday" class="form-label">birthday:</label>
    <label for="birthday" class="form-label">
        {{ $data['user']->profile->birthday ?? '---' }}
    </label>
</div>
<div>
    <label for="country_id" class="form-label">country:</label>
    <label for="country_id" class="form-label">
        {{ $data['user']->profile->country ? $data['user']->profile->country->name : '---' }}
    </label>
</div>
<div>
    <label for="language" class="form-label">Language:</label>
    <label for="language" class="form-label">
        {{ $data['user']->profile->language ? $data['user']->profile->language->name : '---' }}
    </label>
</div>
<div>
    <label for="gender" class="form-label">gender:</label>
    <label for="gender" class="form-label">
        {{ $data['user']->profile->gender ? $data['user']->profile->gender->name : '---' }}
    </label>
</div>
<div>
    <label for="facebook" class="form-label">facebook:</label>
    <label for="facebook" class="form-label">
        {{ $data['user']->profile->facebook ?? '---' }}
    </label>
</div>
<div>
    <label for="linkedIn" class="form-label">linkedIn:</label>
    <label for="linkedIn" class="form-label">
        {{ $data['user']->profile->linkedin ?? '---' }}
    </label>
</div>
<div>
    <label for="instagram" class="form-label">instagram:</label>
    <label for="instagram" class="form-label">
        {{ $data['user']->profile->instagram ?? '---' }}
    </label>
</div>
<div>
    <label for="youtube" class="form-label">youtube:</label>
    <label for="youtube" class="form-label">
        {{ $data['user']->profile->youtube ?? '---' }}
    </label>
</div>
<div>
    <label for="website" class="form-label">website:</label>
    <label for="website" class="form-label">
        {{ $data['user']->profile->website ?? '---' }}
    </label>
</div>
<div>
    {{-- <a class="btn btn-outline-dark" href="{{ route('profile.create') }}" role="button">Create</a> --}}
     <a class="btn btn-outline-dark" href="{{ route('user.profile.edit') }}" role="button">Edit</a>
    {{-- <a class="btn btn-outline-dark" href="{{ route('profile.show') }}" role="button">Show</a> --}}
    {{-- <a class="btn btn-outline-warning" href="{{ route('profile.destroy') }}" role="button">Delet</a> --}}


</div>
@endsection
