<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="The website for flamingo fans all over the world.">
    <meta name="keywords" content="flamingos, birds, american flamingo, beta carotene, pink plumage">
    <meta name="author" content="Claire Broadley">



    <title>{{ config('app.name', 'recipes') }}</title>

    <!-- generics -->
{{--    <link rel="icon" href="/path/to/favicon-32.png" sizes="32x32">--}}
{{--    <link rel="icon" href="/path/to/favicon-57.png" sizes="57x57">--}}
{{--    <link rel="icon" href="/path/to/favicon-76.png" sizes="76x76">--}}
{{--    <link rel="icon" href="/path/to/favicon-96.png" sizes="96x96">--}}
{{--    <link rel="icon" href="/path/to/favicon-128.png" sizes="128x128">--}}
{{--    <link rel="icon" href="/path/to/favicon-192.png" sizes="192x192">--}}
{{--    <link rel="icon" href="/path/to/favicon-228.png" sizes="228x228">--}}

    <!-- Android -->
{{--    <link rel="shortcut icon" sizes="196x196" href="/path/to/favicon-196.png">--}}

    <!-- iOS -->
{{--    <link rel="apple-touch-icon" href="/path/to/favicon-120.png" sizes="120x120">--}}
{{--    <link rel="apple-touch-icon" href="path/to/favicon-152.png" sizes="152x152">--}}
{{--    <link rel="apple-touch-icon" href="path/to/favicon-180.png" sizes="180x180">--}}

    <!-- Windows 8 IE 10-->
{{--    <meta name="msapplication-TileColor" content="#FFFFFF">--}}
{{--    <meta name="msapplication-TileImage" content="/path/to/favicon-144.png">--}}

    <!— Windows 8.1 + IE11 and above —>
        <meta name="msapplication-config" content="/path/to/browserconfig.xml" />
        {{-- Apple Smart App Banner --}}
        <meta name="apple-itunes-app" content="app-id=myAppStoreID, app-argument=myURL">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        {{-- Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        
</head>

<body>


    <!-- Page Content -->
    <main>
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </main>
    </div>




    <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>

</html>
