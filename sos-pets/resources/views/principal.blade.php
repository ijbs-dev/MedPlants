<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- <title>@yield('titulo')</title> -->
</head>

<body class="bg-color-primary text-color-white tracking-wider">


    @include('pets.layouts._partials.header')

    <div class="container mx-auto">

        @yield('conteudo')

    </div>



    @include('pets.layouts._partials.footer')




</body>

</html>
