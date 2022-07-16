@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<h1>Edit</h1>

<figure class="figure">
    <img src="{{ url('storage/Recipes/Thumbnails/' . $thumbnails->thumbnail) }}" class="figure-img img-fluid rounded" alt="{{ url('storage/Recipes/Thumbnails/' . $thumbnails->thumbnail) }}">
    <figcaption class="figure-caption">A caption for the above image.
        {{$thumbnails->path}}
            {{$thumbnails->size}}
    </figcaption>
  </figure>

</div>
<form action="{{ route('Thumbnails.store', $thumbnails->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="thumbnail" class="form-label">Uploads thumbnails</label>
        <input class="form-control" type="file" name="thumbnail" id="thumbnail">
        <button type="submit" value="Submit" class="btn btn-dark mb-3">Submit</button>
    </div>
</form>
@endsection