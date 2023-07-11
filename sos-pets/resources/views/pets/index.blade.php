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



<h2 class="text-4xl text-center  font-normal leading-normal mt-5 mb-0 text-sky-800">
  Pets Cadastrados
</h2>




 <div
    id="cards" class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5 mb-20">
 @foreach ($pets as $pet)
<!-- <div class="flex min-h-screen items-center justify-center bg-slate-100"> -->
  <div class="mb-8">
  <div class="group h-96 w-80 [perspective:1000px]">
    <div class="relative h-full w-full rounded-xl shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
      <div class="absolute inset-0">
        <img class="h-full w-full rounded-xl object-cover shadow-xl shadow-black/40" src="{{ url("storage/{$pet->fotos}") }}" alt="" />
      </div>
      <div class="absolute inset-0 h-full w-full rounded-xl bg-black/80 px-12 text-center text-slate-200 [transform:rotateY(180deg)] [backface-visibility:hidden]">
        <div class="flex min-h-full flex-col items-center justify-center">
          <h1 class="text-3xl font-bold">{{ $pet->nome }}</h1>
          <p class="text-lg">{{ $pet->user->adress->cidade }}</p>
          <!-- <p class="text-base">{{ $pet->descricao }}</p> -->

          @if(auth()->user())
          <a href="{{ route('pets.show',$pet->id) }}" class="mt-2 rounded-md bg-blue-800 py-2 px-6 text-sm hover:bg-blue-900">Detalhes</a>
           @else
           <a href="{{ route('register') }}" class="mt-2 rounded-md bg-blue-800 py-2 px-6 text-sm hover:bg-blue-900">Detalhes</a>
           @endif

        </div>
      </div>
    </div>
  </div>
</div> 
 @endforeach 
</div> 






@endsection
