@extends('pets.layouts.principal')

@section('titulo', 'Home')

@section('conteudo')

<div class="max-w-sm rounded overflow-hidden shadow-lg">
@foreach ($pets as $pet)
    <img class="w-full" src="{{ url("storage/{$pet->fotos}") }}" alt="{{$pet->nome}}">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">{{ $pet->nome }}</div>
      <p class="text-gray-700 text-base">
         {{ $pet->descricao }}
      </p>
    </div>
@endforeach
  </div>


@endsection
