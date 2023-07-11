@extends('principal')

@section('titulo', 'Detalhes')

@section('conteudo')


<!-- <div style="
background-image: url('{{ asset('images/patas.webp') }}');
background-repeat:no-repeat;
position: relativo;
height: 100vh;
width: 100vw;
background-size: cover;
overflow: hidden;
">
<div class="relativo mx-auto mt-8 mb-8 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
      <img class="p-8 rounded-t-lg" src="{{ url("storage/{$pet->fotos}") }}" alt="product image" />
    </a>
    <div class="px-5 pb-5">
      <a href="#">
        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{$pet->descricao}}</h5>
      </a>
      <div class="flex items-center mt-2.5 mb-5">
        <ul>
          <li class="text-white">Idade: {{ $pet->idade}}</li>
          <li class="text-white">Raça: {{ $pet->raca}}</li>
          @if ($pet->port_id == 1)
          <li class="text-white">Porte: Pequeno</li>
          @elseif ($pet->port_id == 2)
          <li class="text-white">Porte: Médio</li>
          @elseif ($pet->port_id == 3)
          <li class="text-white">Porte: Grande</li>
          @endif
          @if ($pet->sex_id == 1)
          <li class="text-white">Sexo: Macho</li>
          @elseif ($pet->sex_id == 2)
          <li class="text-white">Sexo: Fêmea</li>
          @endif
        </ul>
      </div>
      <div class="flex items-center justify-between">
        <span class="text-3xl font-bold text-gray-900 dark:text-white">{{ $pet->nome }}</span>
        <button onclick="openModal()" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Agendar</button>
      </div>
    </div>
  </div>
</div> -->

@if(session('error'))
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800     dark:text-red-400" role="alert"> {{ session('error') }}
    </div>
@endif


<!-- component -->

    <!-- Container -->
    <div class="mx-auto"
    style="
    background-image: url('{{ asset('images/patas.webp') }}');
    background-repeat:no-repeat;
    position: relativo;
    margin-bottom: 60px;
    height: 100vh;
    width: 100vw;
    background-size: cover;
    overflow: hidden;"
    >
<div class="flex justify-center px-6 my-12">
        <!-- Row -->
  <div class="w-full xl:w-3/4 lg:w-11/12 flex">

<!-- <div class="relativo mx-auto mt-8 mb-8 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
      <img class="p-8 rounded-t-lg" src="{{ url("storage/{$pet->fotos}") }}" alt="product image" />
    </a>
    <div class="px-5 pb-5">
      <a href="#">
        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{$pet->nome}}</h5>
      </a>
      <div class=" mt-2.5 mb-5">
        <ul>
          <li class="text-white">Idade: {{ $pet->idade}}</li>
          <li class="text-white">Raça: {{ $pet->raca}}</li>
          @if ($pet->port_id == 1)
          <li class="text-white">Porte: Pequeno</li>
          @elseif ($pet->port_id == 2)
          <li class="text-white">Porte: Médio</li>
          @elseif ($pet->port_id == 3)
          <li class="text-white">Porte: Grande</li>
          @endif
          @if ($pet->sex_id == 1)
          <li class="text-white">Sexo: Macho</li>
          @elseif ($pet->sex_id == 2)
          <li class="text-white">Sexo: Fêmea</li>
          @endif
        </ul>
      </div>
      <div>
        <p class="text-white">{{ $pet->descricao }}</p>
      </div>
    </div>
  </div> -->
<!-- </div> -->

 <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none mb-8">
       <h3 class="mb-3 text-xl font-bold text-indigo-600"></h3> 
      <div class="relative">
        <img class="w-full rounded-xl" src="{{ url("storage/{$pet->fotos}") }}" alt="Colors" />
        <!-- <p class="absolute top-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">FREE</p> -->
      </div>
      <h1 class="mt-4 text-gray-800 text-2xl font-bold cursor-pointer">{{$pet->nome}}</h1>
      <div class="my-4">
        <div class="flex space-x-1 items-center">
         <!--  <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </span> -->
          <p>Raça: {{ $pet->raca }}</p>
        </div>
        <div class="flex space-x-1 items-center">
         <!--  <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
          </span> -->
          <p>Idade: {{$pet->idade}}</p>
        </div>
        <div class="flex space-x-1 items-center">
         <!--  <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
            </svg>
          </span> -->
          @if ($pet->port_id == 1)
            <p>Porte: Pequeno</p>
          @elseif($pet->port_id == 2)
             <p>Porte: Médio</p>
          @elseif($pet->port_id == 3)
            <p>Porte: Grande</p>
          @endif
        </div>
         <div class="flex space-x-1 items-center">
         <!--  <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
            </svg>
          </span> -->
          @if ($pet->sex_id == 1)
            <p>Sexo: Macho</p>
          @elseif($pet->sex_id == 2)
             <p>Sexo: Fêmea</p>
          @endif
        </div>
         <div class="flex space-x-1 items-center">
         <!--  <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
          </span> -->
          <p>Descrição: {{$pet->descricao}}</p>
        </div>
        <!-- <button class="mt-4 text-xl w-full text-white bg-indigo-600 py-2 rounded-xl shadow-lg">Buy Lesson</button> -->
      </div>
    </div>



          <!-- Col -->
          <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none mb-8">
            <h3 class="pt-4 text-2xl text-center">Agende uma visita para adotar o pet</h3>
            <form action="{{ route('pets.agendamentos') }}" class="px-8 pt-6 pb-8 mb-4 bg-white rounded" method="POST">
              @csrf
              <input type="hidden" name="user_id" value="{{ Auth::id() }}">
              <input type="hidden" name="pet_id" value="{{ $pet->id }}">
              <input type="hidden" name="status" value="Aguardando">
              <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="username">
                  Data
                </label>
                <input
                  class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  id="username"
                  type="date"
                  name="adoption_date"
                  placeholder="Data"
                  required
                />
              </div>
              <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                  Hora
                </label>
                <input
                  class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  name="hour"
                  type="time"
                  placeholder=""
                  required
                />
              </div>

               <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                  Observação
                </label>
                <textarea required
                  class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  name="observation"
                ></textarea>
              </div>

              <div class="mb-6 text-center">
                <button
                  class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                  type="submit"
                >
                  Agendar
                </button>
              </div>
              <hr class="pointer mb-6 border-t" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>





@endsection
