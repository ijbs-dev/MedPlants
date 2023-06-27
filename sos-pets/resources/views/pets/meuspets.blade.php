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



     <title>@yield('titulo')</title>
</head>
<!--<body class="bg-color-primary text-color-white tracking-wider"> -->
<body id="page-top" style="background-color:#212529;">


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
                            <tr style="background-color:#7FFFD4;">
                                <th>&nbsp;</th>
                                <th style="font-size: 18px; font-weight:bold;">Nome</th>
                                <th style="font-size: 18px; font-weight:bold;">Idade</th>
                                <th style="font-size: 18px; font-weight:bold;">Raça</th>
                                <th style="font-size: 18px; font-weight:bold;">Tipo</th>
                                <th style="font-size: 18px; font-weight:bold;">Porte</th>
                                <th style="font-size: 18px; font-weight:bold;">Sexo</th>
                                <th style="font-size: 18px; font-weight:bold;">Descrição</th>
                                <th style="font-size: 18px; font-weight:bold;">Status</th>
                                <th style="font-size: 18px; font-weight:bold;">Ações</th>
                            </tr>
                        </thead>
                    <tbody>
                         @foreach ($meusPets as $pet)
                        <tr class="alert" role="alert">
                            <td>
                                <img class="img" src="{{ url("storage/{$pet->fotos}") }}"></img>
                            </td>
                            <td>
                                <div class="email">
                                    <span>{{$pet->nome}}</span>
                                    <span></span>
                                </div>
                            </td>
                            <td>{{ $pet->idade }}</td>
                            <td>{{ $pet->raca }}</td>
                            @if($pet->type_id == 1)
                            <td>Cachorro</td>
                            @else
                            <td>Gato</td>
                            @endif
                             @if($pet->port_id == 1)
                            <td>Pequeno</td>
                            @elseif($pet->port_id == 2)
                            <td>Médio</td>
                            @else
                            <td>Grande</td>
                            @endif
                            @if($pet->sex_id == 1)
                            <td>Macho</td>
                            @else
                            <td>Femêa</td>
                            @endif
                            <td>{{$pet->descricao}}</td>
                            <td>{{ $pet->status }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('pets.edit', $pet->id)}}" class="btn btn-primary btn-sm mr-2">Editar</a>
                                    <form action="{{ route('pets.destroy', $pet->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button> 
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>



<script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon="{&quot;rayId&quot;:&quot;7dd8411a7fb916e9&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2023.4.0&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>






</body>
 



