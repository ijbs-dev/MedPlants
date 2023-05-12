@extends('pets.layouts.principal')

@section('titulo', 'Cadastro')

@section('conteudo')



<h1 style="font-size: 30px; font-weight: bold;">Cadastrar</h1> <br><br>

<form action="{{ route('pets.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    Nome:
    <input type="text" name="nome"> <br>
    Idade:
    <input type="text" name="idade"> <br>

    <select name="especie">
        <option disabled selected>Tipo</option>
        <option value="cachorro">Cachorro</option>
        <option value="gato">Gato</option>
    </select>
    <br>
    Raça:
    <input type="text" name="raca"><br>

    <select name="porte">
        <option disabled selected>Porte</option>
        <option value="Pequeno">Pequeno</option>
        <option value="Médio">Médio</option>
        <option value="Grande">Grande</option>
    </select>

    <br>


    <select name="sexo">
        <option disabled selected>Sexo</option>
        <option value="Macho">Macho</option>
        <option value="Fêmea">Fêmea</option>
    </select> <br>

    Descrição <br>
    <textarea name="descricao" id="" cols="40" rows="5"></textarea> <br>

Imagens
<input name="fotos" type="file"> <br>

<button class="bg-blue-400 border-none rounded text-center py-2 px-4" type="submit">Cadastrar</button>

</form>





@endsection

