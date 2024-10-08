<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        {{-- <link rel="dns-prefetch" href="//fonts.bunny.net"> --}}
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <!-- Bootstrap core CSS -->
        {{-- <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
        {{-- <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css"> --}}
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
    <div id="notifDiv"></div>
    @yield('content')
  
      <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
      <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
      @stack('javascript')
</body>
</html>