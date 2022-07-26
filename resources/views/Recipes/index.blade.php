@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <div>

        @if (session('message'))
            <div class="alert alert-{{ session('class') }}">
                {{ session('message') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Cuisines</th>
                    <th scope="col">Category</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">

                @foreach ($data['recipes'] as $recipe)
                    <tr>
                        <th scope="row">{{ $recipe->id }}</th>
                        <td>
                            {{ $recipe->title }}
                        </td>

                        <td>
                            {!! limited_text($recipe->description, 15) !!}
                        </td>

                        <td>
                            {{ $recipe->cuisine->name }}
                        </td>

                        <td>
                            {{ $recipe->category->name }}
                        </td>

                        <td>
                            <a class="btn btn-outline-dark" href="{{ route('user.recipes.show', $recipe->id) }}" role="button">Show</a>
                            <a class="btn btn-outline-warning" href="{{ route('user.recipes.edit', $recipe->id) }}" role="button">Edit</a>
                            <form action="{{ route('user.recipes.destroy', $recipe->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>

        <a class="btn btn-outline-dark" href="{{ route('user.recipes.create') }}" role="button">Create</a>

    </div>
@endsection
