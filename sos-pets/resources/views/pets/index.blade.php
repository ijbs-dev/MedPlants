@extends('principal')

@section('titulo', 'Home')

@section('conteudo')

{{-- <div class="max-w-sm rounded overflow-hidden shadow-lg">
@foreach ($pets as $pet)

    <img class="w-full" src="{{ url("storage/{$pet->fotos}") }}" alt="{{$pet->nome}}">

    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">{{ $pet->nome }}</div>
      <p class="text-gray-700 text-base">
         {{ $pet->descricao }}
      </p>
    </div>
@endforeach
  </div> --}}

  {{-- cards --}}
  <div class="grid grid-cols-3 gap-3">

  @foreach ($pets as $pet)
  <div class="min-h-screen  flex justify-center items-center">
    <div class="container flex justify-center">
      <div class="max-w-sm py-12">
        <div class="bg-white relative shadow-lg hover:shadow-xl transition duration-500 rounded-lg">
          <img class="rounded-t-lg" src="{{ url("storage/{$pet->fotos}") }}" alt="{{$pet->nome}}">

          <div class="py-6 px-8 rounded-lg bg-white">
            <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-gray-900 hover:cursor-pointer">{{ $pet->nome }}</h1>
            <p class="text-gray-700 tracking-wide">{{ $pet->descricao }}.</p>
            <a href="{{ route('pets.show',$pet->id)}}" class="mt-6 py-2 px-4 bg-yellow-400 text-gray-800 font-bold rounded-lg shadow-md hover:shadow-lg transition duration-300">Detalhes</a>
          </div>

        </div>
      </div>
    </div>
  </div>
  @endforeach




@endsection
