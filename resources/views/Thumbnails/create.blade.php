@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

<h1>Upload Thumbnails </h1>

@if(session('successful_message'))
	<div class="alert alert-success">
		{{ session('successful_message') }}
	</div>
@endif

@if(session('error_message'))
	<div class="alert alert-danger">
		{{ session('error_message') }}
	</div>
@endif

<form action="{{ route('Thumbnails.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="thumbnail" class="form-label">Uploads thumbnails</label>
        <input class="form-control" type="file" name="thumbnail" id="thumbnail">
        <button type="submit" value="Submit" class="btn btn-dark mb-3">Upload</button>
    </div>

</form>
@endsection
