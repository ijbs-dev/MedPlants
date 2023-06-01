@extends('principal')

@section('titulo', 'Detalhes')

@section('conteudo')

@if (isset($mensagem))
<div class="flex p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd"
    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
    <span class="sr-only">Info</span>
    <div>
      <span class="font-medium"></span>{{$mensagem}}
    </div>
  </div>
@endif
<section class=" py-12">
    <div class="container mx-auto flex items-center">
      <!-- Imagem do produto -->
      <div class="w-1/2">
        <img src="{{ url("storage/{$pet->fotos}") }}" alt="Imagem" class="w-full h-auto">
      </div>

      <!-- Conteúdo do produto -->
      <div class="w-1/2 pl-12">
        <h2 class="text-3xl font-bold mb-4">{{ $pet->nome }}</h2>

        <!-- Outros itens -->
        <ul class="mb-4">
          <li class="text-gray-700"><span class="text-base font-bold">Idade:</span> {{ $pet->idade }}</li>
          <li class="text-gray-700"><span class="text-base font-bold">Raça:</span> {{ $pet->raca }}</li>
          <li class="text-gray-700"><span class="text-base font-bold">Porte:</span> {{ $pet->porte }}</li>
          <li class="text-gray-700"><span class="text-base font-bold">Sexo:</span> {{ $pet->sexo }}</li>
          <li class="text-gray-700"><span class="text-base font-bold">Descrição:</span> {{ $pet->descricao }}</li>

        </ul>

        <!-- Botão -->
        @php
          $dataAtual = new DateTime();
            $dataFormatada = $dataAtual->format('Y-m-d');
        @endphp
        <form action="{{route('pets.adotar')}}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="hidden" name="pet_id" value="{{$pet->id}}">
                    <input type="hidden" name="adoption_date" value="{{$dataFormatada}}">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Agendar</button>
            </form>
        </div>
    </div>
  </section>

@endsection
