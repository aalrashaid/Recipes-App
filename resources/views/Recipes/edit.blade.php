@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <h1> Edit Recipe</h1>

    @if (session('message'))
        <div class="alert alert-{{ session('class') }}">
            {{ session('message') }}
        </div>
    @endif

    <form action="{{ route('user.Recipes.update', $data['model']->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-floating mb-3">
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="title Recipe" value="{{ $data['model']->title }}">
            <label for="title">Name Recipe:</label>
            @error('title')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"  placeholder="Leave a description here"
                      style="height: 100px">{!! $data['model']->description !!}</textarea>
            <label for="description">Description:</label>
            @error('description')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="thumbnail" class="form-label @error('thumbnail_id') is-invalid @enderror">Thumbnail Recipe</label>
            <input class="form-control" type="file" name="thumbnail_id" id="thumbnail">
            @error('thumbnail_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <select class="form-select form-select-lg @error('cuisine_id') is-invalid @enderror" name="cuisine_id" id="cuisine_id"
                    aria-label=".form-select-lg example">
                <option selected>Open this select menu</option>
                @foreach($data['cuisines'] as $cuisine)
                    <option value="{{ $cuisine->id }}" @if($data['model']->cuisine_id == $cuisine->id) selected @endif>{{ $cuisine->name }}</option>
                @endforeach
            </select>
            @error('cuisine_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <select class="form-select form-select-lg @error('category_id') is-invalid @enderror" name="category_id" id="category_id"
                    aria-label=".form-select-lg example">
                <option selected>Open this select menu</option>
                @foreach($data['categories'] as $category)
                    <option value="{{ $category->id }}" @if($data['model']->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control @error('youtube_video') is-invalid @enderror" name="youtube_video" id="youtube-video" placeholder="Leave a youtube embed share here"
                      style="height: 100px">{!! $data['model']->youtube_video !!}</textarea>
            <label for="youtube-video">youtube:</label>
            @error('youtube_video')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="recipe_method" id="method" class="form-control @error('recipe_method') is-invalid @enderror" value="{{ $data['model']->recipe_method }}" placeholder="method">
            <label for="method">Method:</label>
            @error('recipe_method')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="difficulty" id="difficulty" class="form-control @error('difficulty') is-invalid @enderror"  value="{{ $data['model']->difficulty }}" placeholder="difficulty">
            <label for="difficulty">Difficulty:</label>
            @error('difficulty')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="prep_time" id="prep-time" class="form-control @error('prep_time') is-invalid @enderror" value="{{ $data['model']->prep_time }}" placeholder="prep time">
            <label for="prep-time">Prep Time:</label>
            @error('prep_time')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="cook_time" id="cook-time" class="form-control @error('cook_time') is-invalid @enderror" value="{{ $data['model']->cook_time }}" placeholder="cook time">
            <label for="cook-time">Cook Time:</label>
            @error('cook_time')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="total" id="total" class="form-control @error('total') is-invalid @enderror" value="{{ $data['model']->total }}" placeholder="total">
            <label for="total">Total:</label>
            @error('total')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="servings" id="servings" class="form-control @error('servings') is-invalid @enderror" value="{{ $data['model']->servings }}" placeholder="servings">
            <label for="servings">Servings:</label>
            @error('servings')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="yield" id="yield" class="form-control @error('yield') is-invalid @enderror" value="{{ $data['model']->yield }}" placeholder="yield">
            <label for="yield">Yield:</label>
            @error('yield')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control @error('ingredients') is-invalid @enderror" name="ingredients" id="ingredients" placeholder="Leave a ingredients here"
                      style="height: 100px">{!! $data['model']->ingredients !!}</textarea>
            <label for="ingredients">Ingredients:</label>
            @error('ingredients')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control @error('directions') is-invalid @enderror" name="directions" id="directions" placeholder="directions"
                      style="height: 100px">{!! $data['model']->directions !!}</textarea>
            <label for="directions">Directions:</label>
            @error('directions')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control @error('nutrition_facts') is-invalid @enderror" name="nutrition_facts" id="nutrition-facts" placeholder="Leave a nutritionFacts here"
                      style="height: 100px">{!! $data['model']->nutrition_facts !!}</textarea>
            <label for="nutrition-facts">NutritionFacts:</label>
            @error('nutrition_facts')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <button type="reset" value="reset" class="btn btn-danger">Reset</button>

        <button type="submit" value="Submit" class="btn btn-dark">Submit</button>
    </form>
@endsection
