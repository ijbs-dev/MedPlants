<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />


     <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />




    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">

     {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}



     <title>@yield('titulo')</title>
</head>
<!--<body class="bg-color-primary text-color-white tracking-wider"> -->
<body id="page-top">


    @include('pets.layouts._partials.header')

   <!-- <div class="container mx-auto"> -->

        @yield('conteudo')




   <!-- </div> -->



    @include('pets.layouts._partials.footer')







</body>
</html>
