
@extends('principal')

@section('titulo', 'Cadastro')

@section('conteudo')

<h1 style="font-size: 30px; font-weight: bold;">Editar</h1>

<div class="w-full max-w-xs">
  <form action="{{ route('pets.update',$pet->id) }}" method="post" enctype="multipart/form-data"
  class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
  @method('PUT')
  @csrf
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2">
        Nome:
      </label>
      <input value="{{$pet->nome}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="nome" placeholder="Nome">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2">
        Idade:
      </label>
      <input value="{{$pet->idade}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="idade" placeholder="Idade">
    </div>
    <div name="especie"class="inline-block relative w-64">
    <label class="block text-gray-700 text-sm font-bold mb-2">
        Tipo:
      </label>
    <select name="especie" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
         <option disabled selected>Tipo</option>
         <option value="{{$pet->especie}}">{{$pet->especie}}</option>
        <option value="cachorro">Cachorro</option>
        <option value="gato">Gato</option>
    </select>
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2">
        Raça:
      </label>
      <input value="{{$pet->raca}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="raca" placeholder="Raça">
    </div>
    <div class="inline-block relative w-64" name="especie">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Porte:
      </label>
    <select name="porte" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
        <option disabled selected>Porte</option>
        <option value="Pequeno">Pequeno</option>
        <option value="Médio">Médio</option>
        <option value="Grande">Grande</option>
    </select>
    </div>
    <div class="inline-block relative w-64" name="especie">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Sexo:
      </label>
    <select name="sexo" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
    <option disabled selected>Sexo</option>
        <option value="Macho">Macho</option>
        <option value="Fêmea">Fêmea</option>
    </select>
    </div>
    <div class="form-group">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Descrição:
      </label>
        <textarea class="form-control" name="descricao" id="" cols="21"  rows="3">{{$pet->nome}}</textarea>
    </div>
    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Imagem:
      </label>
      <input name="fotos" type="file">
    <button class="bg-blue-400 border-none rounded text-center py-2 px-4" type="submit">Cadastrar</button>
  </form>
</div>

@endsection
