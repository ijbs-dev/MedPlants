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
  {{-- <div class="grid grid-cols-3 gap-3">

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
  </div> --}}

  {{-- <div class="flex flex-wrap justify-center px-4 gap-4 mt-10">
    @foreach ($pets as $pet)
    <div class="w-full sm:w-auto max-w-sm overflow-hidden rounded-xl bg-white shadow-md duration-200 hover:scale-105 hover:shadow-xl mb-4">
      <img src="{{ url("storage/{$pet->fotos}") }}" alt="plant" class="h-auto w-full" />
      <div class="p-5">
        <p class="text-medium mb-5 text-gray-700">{{ $pet->descricao }}.</p>
        <a class="w-full rounded-md bg-indigo-600 py-2 text-indigo-100 hover:bg-indigo-500 hover:shadow-md duration-75">Detalhes</a>
      </div>
    </div>
    @endforeach
  </div> --}}


  <div class="flex flex-wrap justify-center px-4 gap-4 mt-10">
    @foreach ($pets as $pet)
      <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 overflow-hidden rounded-xl bg-white shadow-md duration-200 hover:scale-105 hover:shadow-xl mb-4">
        <img src="{{ url("storage/{$pet->fotos}") }}" alt="plant" class="h-48 w-full object-cover" />
        <div class="p-5">
          <p class="text-medium mb-5 text-gray-700">{{ $pet->nome }}.</p>
          <a href="{{ route('pets.show',$pet->id)}}" class="w-full rounded-md bg-indigo-600 py-2 px-6 cursor-pointer text-indigo-100 hover:bg-indigo-500 hover:shadow-md duration-75">Detalhes</a>
        </div>
      </div>
    @endforeach
  </div>












@endsection
