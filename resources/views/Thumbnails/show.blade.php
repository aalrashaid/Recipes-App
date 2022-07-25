@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

<h1>Show</h1>

<div>
    <figure class="figure">
        <img src="{{ url('storage/recipes/thumbnails/' . $thumbnails->thumbnail) }}" class="figure-img img-fluid rounded" alt="{{$thumbnails->thumbnail}}">
        <figcaption class="figure-caption">
            {{$thumbnails->path}}
            {{$thumbnails->size}}
        </figcaption>
      </figure>
</div>

@endsection
