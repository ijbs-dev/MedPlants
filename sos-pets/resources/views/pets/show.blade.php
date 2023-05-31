@extends('principal')

@section('titulo', 'Detalhes')

@section('conteudo')


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
