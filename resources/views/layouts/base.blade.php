<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name')}} | @yield('title')</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{ url('css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{ url('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('css/banco.css')}}">
    <link rel="stylesheet" href="{{ url('css/styles.css')}}">
    <link rel="stylesheet" href="{{ url('css/indexcards.css')}}">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    <link rel="stylesheet" href="{{ url('css/register.css')}}">
   
    @yield('estilos')

                                    {{-- CSS EN LINEA --}}
                                    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
                                    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />

    <title>Document</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    @include('layouts.footer')    

                                    {{-- ARCHIVOS SCRIPTS --}}
    <script type="text/javascript" src="{{ url('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/banca.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/scripts.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/bootstrap.bundle.min.js') }}"></script>

                                    {{-- SCRIPTS EN LINEA --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>