@extends('principal')

@section('titulo', 'Cadastro')

@section('conteudo')

    <h1 style="font-size: 30px; font-weight: bold;">Cadastrar</h1>

    <div class="w-full max-w-xs">
        <form action="{{ route('pets.store') }}" method="post" enctype="multipart/form-data"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Nome:
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" name="nome" placeholder="Nome">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Idade:
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" name="idade" placeholder="Idade">
            </div>
            <div class="inline-block relative w-64">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Tipo:
                </label>
                <select name="type_id"
                    class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    <option disabled selected>Selecione o Tipo</option>
                    <option value="cachorro">Cachorro</option>
                    <option value="gato">Gato</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->tipo }}</option>
                    @endforeach
                </select>
            </div>
            {{-- <div class="inline-block relative w-64">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Raça:
                </label>
                <select name="type_id"
                    class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    <option disabled selected>Raça</option>
                    <option value="cachorro">Pitbull</option>
                    <option value="gato">Pastor Alemão</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->tipo }}</option>
                    @endforeach
                </select>
            </div> --}}
            <div class="inline-block relative w-64" name="especie">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Porte:
                </label>
                <select name="port_id"
                    class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    <option disabled selected>Selecione o porte</option>
                    <option value="cachorro">Pequeno</option>
                    <option value="cachorro">Medio</option>
                    <option value="cachorro">Grande</option>
                    @foreach ($ports as $port)
                        <option value="{{ $port->id }}">{{ $port->porte }}</option>
                    @endforeach
                </select>

            </div>
            <div class="inline-block relative w-64" name="especie">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Sexo:
                </label>
                <select name="sex_id"
                    class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    <option disabled selected>Selecione o sexo</option>
                    <option value="cachorro">Macho</option>
                    <option value="cachorro">Femea</option>
                    @foreach ($sexes as $sex)
                        <option value="{{ $sex->id }}">{{ $sex->sexo }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Descrição:
                </label>
                <textarea class="form-control" name="descricao" id="" cols="21" rows="3"></textarea>
            </div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Imagem:
            </label>
            <input name="fotos" type="file">
            <button class="bg-blue-400 border-none rounded text-center py-2 px-4" type="submit">Cadastrar</button>
        </form>
    </div>

@endsection
