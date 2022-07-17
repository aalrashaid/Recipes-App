@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <h1> Create Recipe</h1>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('Recipes.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="form-floating mb-3">
            <input type="text" name="title" id="title" class="form-control" placeholder="title Recipe" value="{{ old('title') }}">
            <label for="name">Name Recipe:</label>
        </div>
        {{-- <div class="form-floating mb-3">
            <input type="text" name="slug" id="slug" class="form-control" placeholder="Slug Name">
            <label for="slug">Slug Name:</label>
        </div> --}}
        <div class="form-floating mb-3">
            <textarea class="form-control" name="dsescription" id="dsescription"  placeholder="Leave a dsescription here"
                style="height: 100px"></textarea>
            <label for="dsescription">Dsescription:</label>
        </div>
        <div class="mb-3">
            <label for="thumbnails" class="form-label">Thumbnail Recipe</label>
            <input class="form-control" type="file" name="thumbnail_id" id="thumbnail_id" value="{{ old('thumbnail_id') }}" >
        </div>
        <select class="form-select form-select-lg mb-3" name="cuisines_id" id="cuisines_id"
            aria-label=".form-select-lg example">
            <option selected>Open this select menu</option>
            @foreach ($Cuisines as $cuisine)
                <option value="{{ $cuisine->id }}">{{ $cuisine->name }}</option>
            @endforeach
        </select>
        <select class="form-select form-select-lg mb-3" name="category_id" id="category_id"
            aria-label=".form-select-lg example">
            <option selected>Open this select menu</option>
            @foreach ($Categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach

        </select>
        {{-- <div class="form-floating mb-3">
            <input type="text" name="youtubevideo" id="youtubevideo" class="form-control"
                placeholder="youtube video links" value="{{ old('youtubevideo') }}">
            <label for="youtubevideo">Youtube Video Links:</label>
        </div> --}}

        <div class="form-floating mb-3">
            <textarea class="form-control" name="youtubevideo" id="youtubevideo" placeholder="Leave a youtube embed share here"
                style="height: 100px"></textarea>
            <label for="nutritionFacts">youtube:</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="method" id="method" class="form-control" value="{{ old('method') }}" placeholder="method">
            <label for="method">Method:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="difficlty" id="difficlty" class="form-control"  value="{{ old('difficlty') }}" placeholder="difficlty">
            <label for="difficlty">Difficlty:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="preptime" id="preptime" class="form-control" value="{{ old('preptime') }}" placeholder="prep time">
            <label for="preptime">Prep Time:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="cooktime" id="cooktime" class="form-control" value="{{ old('cooktime') }}" placeholder="cook time">
            <label for="cooktime">Cook Time:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="total" id="total" class="form-control" value="{{ old('total') }}" placeholder="total">
            <label for="total">Total:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="servings" id="servings" class="form-control" value="{{ old('servings') }}" placeholder="servings">
            <label for="servings">Servings:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="yield" id="yield" class="form-control" value="{{ old('yield') }}"placeholder="yield">
            <label for="yield">Yield:</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" name="ingredients" id="ingredients"  placeholder="Leave a ingredients here"
                style="height: 100px"></textarea>
            <label for="ingredients">Ingredients:</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" name="directions" id="directions"  placeholder="Leave a dsescription here"
                style="height: 100px"></textarea>
            <label for="directions">Directions:</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" name="nutritionFacts" id="nutritionFacts" placeholder="Leave a nutritionFacts here"
                style="height: 100px"></textarea>
            <label for="nutritionFacts">NutritionFacts:</label>
        </div>
        <button type="reset" value="reset" class="btn btn-danger">Reset</button>
        <button type="submit" value="Submit" class="btn btn-dark">Submit</button>
    </form>
@endsection
