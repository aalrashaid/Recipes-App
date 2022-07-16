@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

    <h1> Show Recipe</h1>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    {{-- <div>
        <label for="floatingInputInvalid">Name Recipe:</label>
        <label for="floatingInputInvalid">{{ $recipes->title }}</label>
    </div> --}}

    {{-- <div>
        <label for="floatingInputInvalid">Thumbnail Recipe:</label>
        <p></p>
    </div> --}}

    {{-- <div>
        <label for="floatingInputInvalid">Cuisine:</label>
        <label for="floatingInputInvalid">{{ $recipes->cuisines_id }}</label>
    </div> --}}

    {{-- <div>
        <label for="floatingInputInvalid">Category:</label>
        <label for="floatingInputInvalid">{{ $recipes->category_id }}</label>
    </div> --}}

    {{-- <div>
        <label for="floatingInputInvalid">Dsescription:</label>
        <p>{{ $recipes->dsescription }}</p>
    </div> --}}

    {{-- <div>
        {{-- <iframe width="560" height="315" src="{{ $recipes->youtubevideo }}" title="YouTube video player"
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe> --}}

            {{-- {{ $recipes->youtubevideo }}

    </div> --}}

    {{-- <div>
        <label for="floatingInputInvalid">Method:</label>
        <label for="floatingInputInvalid">{{ $recipes->method }}</label>
    </div> --}}

    {{-- <div>
        <label for="floatingInputInvalid">Difficlty:</label>
        <label for="floatingInputInvalid">{{ $recipes->difficlty }}</label>
    </div> --}}

    {{-- <div>
        <label for="floatingInputInvalid">Prep Time:</label>
        <label for="floatingInputInvalid">{{ $recipes->preptime }}</label>
    </div> --}}

    {{-- <div>
        <label for="floatingInputInvalid">Cook Time:</label>
        <label for="floatingInputInvalid">{{ $recipes->cooktime }}</label>
    </div> --}}

    {{-- <div>
        <label for="floatingInputInvalid">Total:</label>
        <label for="floatingInputInvalid">{{ $recipes->total }}</label>
    </div> --}}

    {{-- <div>
        <label for="floatingInputInvalid">Servings:</label>
        <label for="floatingInputInvalid">{{ $recipes->servings }}</label>
    </div> --}}

    {{-- <div>
        <label for="floatingInputInvalid">Yield:</label>
        <label for="floatingInputInvalid">{{ $recipes->yield }}</label>
    </div> --}}

    {{-- <div>
        <label for="floatingInputInvalid">Ingredients:</label>
        <p>{{ $recipes->ingredients }}</p>
    </div> --}}

    {{-- <div>
        <label for="floatingInputInvalid">directions:</label>
        <p>{{ $recipes->directions }}</p>
    </div> --}}

    {{-- <div>
        <label for="floatingInputInvalid">nutritionFacts:</label>
        <p>{{ $recipes->nutritionFacts }}</p>
    </div> --}}
@endsection
