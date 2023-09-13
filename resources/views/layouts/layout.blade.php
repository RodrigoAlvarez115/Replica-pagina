<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="shortcut icon" href="{{asset('icono.png')}}">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9fa7a60eda.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body>
    <section>
        <header>
            <a href="{{route('index')}}"><img id="portada" src="{{asset('portada.png')}}"alt="Portada"></a> 
        </header>
        @include('layouts._partials.nav')
        @yield('content')
    </section>
   <button class="boton_scroll" id="boton_scrolltop">
        <i class="fas fa-chevron-up"></i>
      </button>
</body>
</html>