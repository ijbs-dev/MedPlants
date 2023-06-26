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

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">




    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
     {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}



     <title>@yield('titulo')</title>
</head>
<!--<body class="bg-color-primary text-color-white tracking-wider"> -->
<body id="page-top" style="background-color:#212529;">

<style>

  #btn-entrar{
    background-color: #ffc800;
    color: #000000;
    border-radius: 15px;
  }

  #btn-entrar:hover{
    background-color: #FFA500;
  }

  #btn-cadastrar{
    color: #ffffff;
    font-family: sans-serif;
    font-size: 15.2px;
  }

  #btn-cadastrar:hover{
    color: #ffc800;
  }

  .sair{
    color:#ffffff;
    text-decoration: none;
    font-family: sans-serif;
    font-size: 15.2px;
    padding:8px 24px;
    margin-top: 50px;
  }

   .user{
    color:#696969;
    text-decoration: none;
    font-family: sans-serif;
    font-size: 15.2px;
    padding:8px 40px;
    background-color: #ffc800;
    border-radius: 10px
  }

  .user:hover{
    background-color: #ffc800;
  }

</style>



 <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{route('pets.index')}}">SosPets</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                      @auth
                        <li class="nav-item"><a class="nav-link" href="{{ route('pets.create') }}">Cadastrar Pets</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('pets.meusPets') }}">Meus Pets</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('pets.agendamentos') }}">Agendamentos</a></li>
                      @endauth
                        <li class="nav-item"><a class="nav-link" >Sobre</a></li>
                        <li class="nav-item"><a href="{{ route('pets.contatos') }}" class="nav-link" >Contato</a></li>

                      @auth
                      <x-dropdown-link :href="route('profile.edit')" class="user">
                          {{ __(Auth::user()->name) }}
                      </x-dropdown-link>
                      <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <x-dropdown-link class="sair" :href="route('logout')"
                          onclick="event.preventDefault();
                          this.closest('form').submit();">
                          {{ __('Sair') }}
                      </x-dropdown-link>
                      </form>
                      @else
                        <a href="{{ route('register') }}" class="nav-link" id="btn-cadastrar">Cadastrar</a>
                        <a href="{{ route('login') }}" id="btn-entrar" class="nav-link">Entrar</a>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>


<!--


<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <div>
            <a href="{{ route('pets.create') }}" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Cadastrar</a>
        </div>

        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Nome
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Tipo
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Raça
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Porte
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Idade
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Sexo
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Descrição
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Status
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Ação
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($meusPets as $pet)
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-14 h-14">
                                        <img class="w-full h-full rounded-full"
                                        src=""
                                            alt="{{ $pet->nome }}" />
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$pet->nome}}
                                        </p>
                                    </div>
                                </div>
                            </td>

                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                @if($pet->type_id == 1)
                                <p class="text-gray-900 whitespace-no-wrap">Cachorro</p>
                                @else
                                <p class="text-gray-900 whitespace-no-wrap">Gato</p>
                                @endif
                            </td>

                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{$pet->raca}}</p>
                            </td>

                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                @if($pet->port_id == 1)
                                <p class="text-gray-900 whitespace-no-wrap">Pequeno</p>
                                @elseif($pet->port_id == 2)
                                <p class="text-gray-900 whitespace-no-wrap">Médio</p>
                                @else
                                <p class="text-gray-900 whitespace-no-wrap">Grande</p>
                                @endif
                            </td>

                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{$pet->idade}}</p>
                            </td>

                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                @if($pet->sex_id == 1)
                                <p class="text-gray-900 whitespace-no-wrap">Macho</p>
                                @else
                                <p class="text-gray-900 whitespace-no-wrap">Femêa</p>
                                @endif
                            </td>

                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{$pet->descricao}}</p>
                            </td>

                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <span
                                    class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                    <span aria-hidden
                                        class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                    <span class="relative">{{ $pet->status }}</span>
                                </span>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex item-center justify-center">

                                     <div class="w-6 mr-8 transform hover:text-blue-500 hover:scale-110">
                                        <a href="{{ route('pets.edit', $pet->id)}}">Editar</a>
                                       {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg> --}}
                                    </div>
                                    <div class="w-6 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg> --}}
                                         <form action="{{ route('pets.destroy', $pet->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-sm">
                                                Excluir
                                                 {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg> --}}
                                            </button>
                                        </form>
                                        {{-- modal --}}

                                        {{-- fim do modal --}}
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div
                    class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                    <span class="text-xs xs:text-sm text-gray-900">
                        Showing 1 to 4 of 50 Entries
                    </span>
                    <div class="inline-flex mt-2 xs:mt-0">
                        <button
                            class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                            Prev
                        </button>
                        <button
                            class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                            Next
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


-->





<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-4">
                <h2 class="heading-section" style="color:#fff;">Meus Pets</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr>
                                <th>&nbsp;</th>
                                <th style="font-size: 18px;">Product</th>
                                <th style="font-size: 18px;">Price</th>
                                <th style="font-size: 18px;">Price</th>
                                <th style="font-size: 18px;">Price</th>
                                <th style="font-size: 18px;">Price</th>
                                <th style="font-size: 18px;">Price</th>
                                <th>Ações</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                    <tbody>
                        <tr class="alert" role="alert">
                            <td>
                                <div class="img" style="background-image: url(images/product-1.png);"></div>
                            </td>
                            <td>
                                <div class="email">
                                    <span>Sneakers Shoes 2020 For Men </span>
                                    <span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
                                </div>
                            </td>
                            <td>$44.99</td>
                            <td>$44.99</td>
                            <td>$44.99</td>
                            <td>$44.99</td>
                            <td>$44.99</td>
                            </td>
                            <td>$89.98</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm">Editar</button>
                                 <button type="button" class="btn btn-danger btn-sm">Excluir</button>
                            </button>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon="{&quot;rayId&quot;:&quot;7dd8411a7fb916e9&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2023.4.0&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>

</body>
 



