@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

    <h1> Show Recipe</h1>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div>
        <label for="floatingInputInvalid">Name Recipe:</label>
        <label for="floatingInputInvalid">{{ $Recipes->title }}</label>
    </div>

    <div>
        <label for="floatingInputInvalid">Thumbnail Recipe:</label>
        <p></p>
    </div>

    <div>
        <label for="floatingInputInvalid">Cuisine:</label>
        <label for="floatingInputInvalid">{{ $Recipes->cuisines_id }}</label>
    </div>

    <div>
        <label for="floatingInputInvalid">Category:</label>
        <label for="floatingInputInvalid">{{ $Recipes->category_id }}</label>
    </div>

    <div>
        <label for="floatingInputInvalid">Dsescription:</label>
        <p>{{ $Recipes->dsescription }}</p>
    </div>

    <div>
        <iframe width="560" height="315" src="{{ $Recipes->youtubevideo }}" title="YouTube video player"
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

            {{ $Recipes->youtubevideo }}

    </div>

    <div>
        <label for="floatingInputInvalid">Method:</label>
        <label for="floatingInputInvalid">{{ $Recipes->method }}</label>
    </div>

    <div>
        <label for="floatingInputInvalid">Difficlty:</label>
        <label for="floatingInputInvalid">{{ $Recipes->difficlty }}</label>
    </div>

    <div>
        <label for="floatingInputInvalid">Prep Time:</label>
        <label for="floatingInputInvalid">{{ $Recipes->preptime }}</label>
    </div>

    <div>
        <label for="floatingInputInvalid">Cook Time:</label>
        <label for="floatingInputInvalid">{{ $Recipes->cooktime }}</label>
    </div>

    <div>
        <label for="floatingInputInvalid">Total:</label>
        <label for="floatingInputInvalid">{{ $Recipes->total }}</label>
    </div>

    <div>
        <label for="floatingInputInvalid">Servings:</label>
        <label for="floatingInputInvalid">{{ $Recipes->servings }}</label>
    </div>

    <div>
        <label for="floatingInputInvalid">Yield:</label>
        <label for="floatingInputInvalid">{{ $Recipes->yield }}</label>
    </div>

    <div>
        <label for="floatingInputInvalid">Ingredients:</label>
        <p>{{ $Recipes->ingredients }}</p>
    </div>

    <div>
        <label for="floatingInputInvalid">directions:</label>
        <p>{{ $Recipes->directions }}</p>
    </div>

    <div>
        <label for="floatingInputInvalid">nutritionFacts:</label>
        <p>{{ $Recipes->nutritionFacts }}</p>
    </div>
@endsection
