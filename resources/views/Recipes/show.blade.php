@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

    <h1>Show Recipe</h1>

    <div>
        <label>Name Recipe:</label>
        {{ $data['model']->title }}
    </div>

    <div>
        <label>Thumbnail Recipe:</label>
        <img src="{{ asset('uploads/thumbnail/'.$data['model']->thumbnail->name) }}" width="100" height="100" alt="Recipe Thumbnail">
    </div>

    <div>
        <label>Description:</label>
        {!! $data['model']->description !!}
    </div>

    <div>
        <label>Cuisine:</label>
        {{ $data['model']->cuisine->name }}
    </div>

    <div>
        <label>Category:</label>
        {{ $data['model']->category->name }}
    </div>

    <div>
        <iframe width="560" height="315" src="{{ $data['model']->youtube_video }}" title="YouTube video player"
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </div>

    <div>
        <label>Method:</label>
        {{ $data['model']->method }}
    </div>

    <div>
        <label for="floatingInputInvalid">Difficulty:</label>
        {{ $data['model']->difficulty }}
    </div>

    <div>
        <label>Prep Time:</label>
        {{ $data['model']->prep_time }}
    </div>

    <div>
        <label>Cook Time:</label>
        {{ $data['model']->cook_time }}
    </div>

    <div>
        <label>Total:</label>
        {{ $data['model']->total }}
    </div>

    <div>
        <label>Servings:</label>
        {{ $data['model']->servings }}
    </div>

    <div>
        <label>Yield:</label>
       {{ $data['model']->yield }}
    </div>

    <div>
        <label>Ingredients:</label>
        {!! $data['model']->ingredients !!}
    </div>

    <div>
        <label>Directions:</label>
        {!! $data['model']->directions !!}
    </div>

    <div>
        <label>NutritionFacts:</label>
        {!! $data['model']->nutrition_facts !!}
    </div>

    <hr>
    <div>
        <h1>Reviews</h1>
        <h3>Share your Comments</h3>
        <div>
            <form action="{{ route('user.Reviews.store') }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <textarea class="form-control mb-3  @error('Comments') is-invalid @enderror" name="Comments" id="Comments"  placeholder="Comments"
                        style="height: 100px">{!! old('Comments') !!}</textarea>
                    <label for="Comments">Comments:</label>
                    @error('Comments')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <button type="submit" value="Submit" class="btn btn-dark mb-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
