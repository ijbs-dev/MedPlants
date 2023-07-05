<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        html,body{
            overflow-x: hidden;
        }
    </style>

      @vite(['resources/css/app.css', 'resources/js/app.js'])

     <title>@yield('titulo')</title>
</head>
<body id="page-top">

    @include('pets.layouts._partials.header')

    <div class="mx-auto">
        @yield('conteudo')
    </div>

    @include('pets.layouts._partials.footer')

</body>
</html>
