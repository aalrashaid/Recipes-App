@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<h1>Destory</h1>
<figure class="figure">
    <img src="" class="figure-img img-fluid rounded" alt="...">
    <figcaption class="figure-caption">A caption for the above image.</figcaption>
  </figure>
  <form action="{{ route('recipes.destroy') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="thumbnail" class="form-label">Uploads thumbnails</label>
        <input class="form-control" type="file" name="thumbnail" id="thumbnail">
        <button type="submit" value="Submit" class="btn btn-dark mb-3">Submit</button>
    </div>
</form>
@endsection
