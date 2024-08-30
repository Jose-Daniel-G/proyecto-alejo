<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"> --}}
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        #notifDiv {
         z-index:10000;
         display: none;
         background: green;
         font-weight: 450;
         width: 350px;
         position: fixed;
         top: 80%;
         left: 5%;
         color: white;
         padding: 5px 20px;
        } 
     </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        @include('layouts.inc.nav_auth')
                        <ul class="navbar-nav mr-auto">
                            @foreach(session('notifications') as $key)
                                <li class="nav-item dropdown mr-2" id="{{ $key->id }}">
                                    <a href="#" class="nav-link" data-toggle="dropdown">
                                        <i class="fa fa-bell text-white">
                                            @if ($key->unread)
                                                <span class="badge badge-danger pending">{{ $key->unread }}</span>
                                            @endif
                                        </i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        {{-- @include('layouts.inc.nav') --}}
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div id="notifDiv"></div>

        <main class="py-4">
            @yield('content')
            <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
            <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
            {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> --}}
            <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
            @stack('javascript')
        </main>
    </div>
</body>
</html>
