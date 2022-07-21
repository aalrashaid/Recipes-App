@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
 <!-- Page Header -->
 <header>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('temporary/imgs/octopus.jpeg') }}" alt="" width="50"
                            height="50">Brand
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">FAQ</a>
                            </li>
                        </ul>
                        <div>
                            <span class="navbar-text">
                                <a class="" href="{{route('login')}}">Login</a>
                            </span>
                            <span class="navbar-text">
                                <a class="" href="{{route('register')}}">Register</a>
                            </span>
                        </div>

                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="0" class="active" aria-current="true"
                                aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('temporary/imgs/1.jpeg') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('temporary/imgs/2.jpeg') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('temporary/imgs/4.jpeg') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        {{-- <p>This is my body content.</p> --}}
    @foreach ( $recipes as $recipe )
    <div class="card mb-3 col-8" style="max-width: 540px;">
        <div class="row g-0">

            <div class="col-md-4">
                <img src="{{ $recipe->thumbnail_id }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{$recipe->title}}</h5>
                  <p class="card-text">
                    {{$recipe->dsescription}}
                  </p>
                  <p class="card-text">
                    <small class="text-muted">{{$recipe->created_at}}</small>
                  </p>
                </div>

          </div>
        </div>
      </div>
    </div>
    @endforeach
    </div>
</div>


    <footer>
        <div class="container">

            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Homee</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About us</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Terms and Conditions</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Privacy Policy</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Cookies Policy</a></li>
            </ul>
            <p class="text-center text-muted">
                &copy;
                @php
                    echo date('Y');
                @endphp
                {{ config('app.name', 'Recipes') }}
            </p>

        </div>
    </footer>
@endsection
