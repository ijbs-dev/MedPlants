@extends('principal')

@section('titulo', 'Meus Pets')

@section('conteudo')

    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('CADASTRO->Pets') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h1 class="text-center"> <strong><u>Lista Pets</u></strong> </h1>
                        <br>
                        <table class="border-collapse border-100 border-blue-200 bg-blue-100 w-full mt-4">
                            <thead>
                                <tr>
                                    <th class="border border-gray-400 bg-yellow-100 px-4 py-2">Nome</th>
                                    <th class="border border-gray-400 bg-yellow-100 px-4 py-2">Idade</th>
                                    <th class="border border-gray-400 bg-yellow-100 px-4 py-2">Especie</th>
                                    <th class="border border-gray-400 bg-yellow-100 px-4 py-2">Raça</th>
                                    <th class="border border-gray-400 bg-yellow-100 px-4 py-2">Porte</th>
                                    <th class="border border-gray-400 bg-yellow-100 px-4 py-2">Sexo</th>
                                    <th class="border border-gray-400 bg-yellow-100 px-4 py-2">Descrição</th>
                                    <th class="border border-gray-400 bg-yellow-100 px-4 py-2">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (Auth::user()->pets as $pet)
                                    <tr class="hover:bg-gray-300">
                                        <td class="border border-gray-400 px-4 py-2">{{ $pet->nome }}</td>
                                        <td class="border border-gray-400 px-4 py-2">{{ $pet->idade }}</td>
                                        <td class="border border-gray-400 px-4 py-2">{{ $pet->especie }}</td>
                                        <td class="border border-gray-400 px-4 py-2">{{ $pet->raca }}</td>
                                        <td class="border border-gray-400 px-4 py-2">{{ $pet->porte }}</td>
                                        <td class="border border-gray-400 px-4 py-2">{{ $pet->sexo }}</td>
                                        <td class="border border-gray-400 px-4 py-2">{{ $pet->descricao }}</td>
                                        <td class="border border-gray-400 px-4 py-2">
                                            <div x-data="{ showDelete: false, showEdit: false }">
                                                <div class="flex gap-2">
                                                    <div x-show="!showDelete">
                                                        <x-danger-button @click="showDelete = true">Apagar</x-danger-button>
                                                    </div>
                                                    <div x-show="!showEdit">
                                                        <x-primary-button @click="showEdit = true">Editar</x-primary-button>
                                                    </div>
                                                    <template x-if="showEdit">
                                                        <div
                                                            class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center bg-gray-900 bg-opacity-50">
                                                            <div class="bg-gray-400 p-6 rounded-lg">
                                                                <form action="{{ route('pets.userPets', $pet->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <x-text-input name="nome" placeholder="Nome"
                                                                        value="{{ $pet->nome }}" />
                                                                    <x-text-input name="porte" placeholder="porte"
                                                                        value="{{ $pet->porte }}" />
                                                                    <x-text-input name="idade" placeholder="idade"
                                                                        value="{{ $pet->idade }}" />
                                                                    <x-text-input name="especie" placeholder="especie"
                                                                        value="{{ $pet->especie }}" />
                                                                    <x-text-input name="raca" placeholder="raca"
                                                                        value="{{ $pet->raca }}" />
                                                                    <x-primary-button>Confirmar Edição</x-primary-button>
                                                                </form>
                                                                <x-primary-button @click="showEdit = false">Cancelar
                                                                </x-primary-button>
                                                            </div>
                                                        </div>
                                                    </template>
                                                    <template x-if="showDelete">
                                                        <div
                                                            class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center bg-gray-900 bg-opacity-50">
                                                            <div class="bg-gray-400 p-6 rounded-lg">
                                                                <form action="{{ route('pets.userPets', $pet->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <x-danger-button>Confirmar</x-danger-button>
                                                                </form>
                                                                <x-primary-button @click="showDelete = false">Cancelar
                                                                </x-primary-button>
                                                            </div>
                                                        </div>
                                                    </template>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                            <div x-data="{ showNew: false }">
                                <div x-show="!showNew">
                                    <x-primary-button @click="showNew = true">New</x-primary-button>
                                </div>

                                <template x-if="showNew">
                                    <div
                                        class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center bg-gray-900 bg-opacity-50">
                                        <div class="bg-gray-400 p-6 rounded-lg flex flex-col items-center">
                                            <form action="{{ route('pets.store') }}" method="post"
                                                enctype="multipart/form-data"
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
                                                <div name="especie"class="inline-block relative w-64">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2">
                                                        Especie:
                                                    </label>
                                                    <select name="especie"
                                                        class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                                        <!-- <option disabled selected>Tipo</option> -->
                                                        <option value="cachorro">Cachorro</option>
                                                        <option value="gato">Gato</option>
                                                    </select>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2">
                                                        Raça:
                                                    </label>
                                                    <input
                                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        type="text" name="raca" placeholder="Raça">
                                                </div>
                                                <div class="inline-block relative w-64" name="especie">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                                        for="username">
                                                        Porte:
                                                    </label>
                                                    <select name="porte"
                                                        class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                                        <!-- <option disabled selected>Porte</option> -->
                                                        <option value="Pequeno">Pequeno</option>
                                                        <option value="Médio">Médio</option>
                                                        <option value="Grande">Grande</option>
                                                    </select>
                                                </div>
                                                <div class="inline-block relative w-64" name="especie">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                                        for="username">
                                                        Sexo:
                                                    </label>
                                                    <select name="sexo"
                                                        class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                                        <option disabled selected>Sexo</option>
                                                        <option value="Macho">Macho</option>
                                                        <option value="Fêmea">Fêmea</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                                        for="username">
                                                        Descrição:
                                                    </label>
                                                    <textarea class="form-control" name="descricao" id="" cols="21" rows="3"></textarea>
                                                </div>
                                                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                                    Imagem:
                                                </label>
                                                <input name="fotos" type="file">
                                                {{-- <button class="bg-blue-400 border-none rounded text-center py-2 px-4"
                                                    type="submit">Cadastrar</button> --}}
                                                    <br>
                                                    <br>
                                                    <div class="mt-2">
                                                        <x-primary-button>Confirmar</x-primary-button>
                                                        <x-primary-button @click="showNew = false">Cancelar</x-primary-button>

                                                    </div>
                                            </form>
                                            {{-- <x-primary-button>Confirmar</x-primary-button>
                                        </div>
                                        </form>
                                        <div class="mt-2">
                                            <x-primary-button @click="showNew = false">Cancelar</x-primary-button>
                                        </div> --}}
                                    </div>
                            </div>
                            </template>
                    </div>
                    </table>
                    <br>
                    <br>


                    {{--  <div class="bg-purple-950 p-6 rounded-lg text-black">
                            <form action="{{ route('pets.userPets') }}" method="POST">
                                @csrf
                                <h2 class="text-center text-white"><strong><u>Formulário Cadastro</u></strong></h2>
                                <div class="mt-4 flex justify-center">
                                    <x-text-input name="nome" placeholder="Nome" class="w-60" />
                                </div>
                                <div class="mt-4 flex justify-center">
                                    <select name="porte" class="border border-gray-300 rounded-md w-60 h-10">
                                        <option value="Masculino">Masculino</option>
                                        <option value="Feminino">Feminino</option>
                                        <option value="Outro">Outro</option>
                                    </select>
                                </div>
                                <div class="mt-4 flex justify-center">
                                    <x-text-input name="idade" placeholder="idade" class="w-60" />
                                </div>
                                <div class="mt-4 flex justify-center">
                                    <x-text-input name="especie" placeholder="especie" class="w-60" />
                                </div>
                                <div class="mt-4 flex justify-center">
                                    <x-text-input name="raca" placeholder="raca" class="w-60" />
                                </div>
                                <div class="mt-4 flex justify-center">
                                    <x-primary-button class="bg-green-500">Save</x-primary-button>
                                </div>
                            </form>
                        </div> --}}
                </div>
            </div>
        </div>
        </div>
    </x-app-layout>

    <!--
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8">

                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>

                                        <th scope="col" class="px-6 py-3">
                                            Nome Do Pet
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Position
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Status
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- {{ foreach ($userPets as $pet) {
                # code...
            } }} --}}
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                        <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                            <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                            <div class="pl-3">
                                                <div class="text-base font-semibold">Neil Sims</div>
                                                <div class="font-normal text-gray-500">neil.sims@flowbite.com</div>
                                            </div>
                                        </th>
                                        <td class="px-6 py-4">
                                            React Developer
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div> Online
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        -->

@endsection
