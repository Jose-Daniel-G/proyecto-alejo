<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'JD twins')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

    @vite(['resources/js/app.js'])
    @yield('head')
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/') }}">JD twins</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.create') }}">Ingresar Usuarios</a>
                    </li>
                    <!-- Agrega más enlaces de navegación aquí -->
                </ul>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <h4 class="text-center">Dashboard</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-users"></i> Empleados
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-cogs"></i> Configuración
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
                @yield('content')
            </main>
        </div>
    </div>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">© {{ date('Y') }} JD TWIN. All rights reserved.</span>
        </div>
    </footer>
</body>
</html>
