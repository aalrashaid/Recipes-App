@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <div>

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

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Cuisines</th>
                    <th scope="col">category</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">

                @foreach ($Recipes as $recipe)
                    <tr>
                        <th scope="row">{{ $recipe->id }}</th>
                        <td>
                            {{ $recipe->title }}
                        </td>

                        <td>
                            {{ $recipe->dsescription }}
                        </td>

                        {{-- @foreach ($Cuisine as $key => $cuisine)
                            <td>
                                <label name="cuisines_id" id="cuisines_id" value="{{ $key }}"
                                    @if ($recipe->cuisines_id == $cuisine->id) selected @endif>
                                    {{ $cuisine->name }}
                                </label>
                            </td>
                        @endforeach --}}

                        {{-- @foreach ( $Category as $key => $category)
                            <td>
                                <label name="category_id" id="category_id" value="{{ $key }}"
                                    @if ($recipe->category_id == $category->id) selected @endif>
                                    {{ $category->name }}
                                </label>
                            </td>
                        @endforeach --}}

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div>
        {{-- <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav> --}}

        {{-- {{ $paginator->links('bootstrap-4', ['foo' => 'bar']) }} --}}
    </div>
@endsection
