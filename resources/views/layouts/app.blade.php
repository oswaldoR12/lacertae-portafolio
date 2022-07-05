<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title_page ?? '' }} {{ config('app.name') }}</title>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    @yield('styles')
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">


</head>

@auth
    <?php $usuario = Auth::user(); ?>
@else
    <?php $usuario = 0; ?>
@endauth

<body>
  


    <main>
        @yield('header')
        @yield('content')
        <!-- @include('layouts.footer') -->
    </main>

    <!-- Scripts -->
    <script>
        // Variables de entorno js
        var site = '{{ config('app.site') }}';
    </script>

    @yield('scripts')

  
</body>
</html>
