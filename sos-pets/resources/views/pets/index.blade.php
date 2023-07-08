@extends('principal')

@section('titulo', 'Home')

@section('conteudo')

@php
    if(auth()->user()){
        $user = auth()->user();
        $id = $user->id;
    }
@endphp

  <div
    class="relative overflow-hidden bg-cover bg-no-repeat"
    style="
      background-position: 50%;
      background-image: url('{{ asset('images/cat-dog-4.jpg') }}');
      height: 100vh;
    ">
    <div
      class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed"
      style="background-color: rgba(0, 0, 0, 0.30)">
      <div class="flex h-full items-center justify-center">
        <div class="px-6 text-center text-white md:px-12">
          <h1 class="mb-6 text-5xl font-bold">Ao adotar um pet</h1>
          <h3 class="mb-8 text-3xl font-bold">você está salvando uma vida e ganhando um companheiro fiel</h3>
          <a
            id="cards" href="#cards"
            class="cursor-pointer inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase
             leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500
              hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none
              focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
            >
            Escolha Seu Pet
        </a>
        </div>
      </div>
    </div>
  </div>



<h2 class="text-4xl text-center  font-normal leading-normal mt-5 mb-2 text-sky-800">
  Pets Cadastrados
</h2>



 <div
    id="cads" class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5 mb-20">
        @foreach ($pets as $pet)
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg" src="{{ url("storage/{$pet->fotos}") }}" alt="Imagem" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $pet->nome }}</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Cidade: {{ $pet->user->adress->cidade }}</p>
        <a href="{{ route('pets.show',$pet->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Detalhes
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
    </div>
</div>
  @endforeach


</div>
@endsection
