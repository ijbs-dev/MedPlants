
@extends('principal')

@section('titulo', 'Cadastro')

@section('conteudo')

{{-- <h1 style="font-size: 30px; font-weight: bold;">Cadastrar</h1>

<div class="w-full max-w-xs">
  <form action="{{ route('pets.store') }}" method="post" enctype="multipart/form-data"
  class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
  @csrf
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2">
        Nome:
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="nome" placeholder="Nome">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2">
        Idade:
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="idade" placeholder="Idade">
    </div>
    <div class="inline-block relative w-64">
    <label class="block text-gray-700 text-sm font-bold mb-2">
        Tipo:
      </label> --}}
    {{-- <select name="type" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
         <option disabled selected>Tipo</option>
        <option value="cachorro">Cachorro</option>
        <option value="gato">Gato</option>
    </select> --}}
    {{-- <select name="type" id="type">
        @foreach($types as $type)
            @php
                $selected = ($registro->categoria_id == $categoria->id) ? 'selected' : '';
            @endphp
            <option value="{{ $categoria->id }}" {{ $selected }}>
                {{ $categoria->nome }}
            </option>
        @endforeach
   </select> --}}
   {{-- <select name="type_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
    <option disabled selected>Selecione o tipo</option>
    @foreach ($types as $type)
        <option value="{{ $type->id }}">{{ $type->tipo }}</option>
    @endforeach
   </select>
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2">
        Raça:
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="raca" placeholder="Raça">
    </div>
    <div class="inline-block relative w-64" name="especie">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Porte:
      </label>
    <select name="port_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
        <option disabled selected>Selecione o porte</option>
        @foreach ($ports as $port)
            <option value="{{ $port->id }}">{{ $port->porte }}</option>
        @endforeach
    </select>
    </div>
    <div class="inline-block relative w-64" name="especie">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Sexo:
      </label>
    <select name="sex_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
    <option disabled selected>Selecione o sexo</option>
    @foreach ($sexes as $sex)
        <option value="{{ $sex->id }}">{{ $sex->sexo }}</option>
    @endforeach
    </select>
    </div>
    <div class="form-group">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Descrição:
      </label>
        <textarea class="form-control" name="descricao" id="" cols="21"  rows="3"></textarea>
    </div>
    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Imagem:
      </label>
      <input name="fotos" type="file">
    <button class="bg-blue-400 border-none rounded text-center py-2 px-4" type="submit">Cadastrar</button>
  </form>
</div> --}}



<style>
    .-z-1 {
      z-index: -1;
    }

    .origin-0 {
      transform-origin: 0%;
    }

    input:focus ~ label,
    input:not(:placeholder-shown) ~ label,
    textarea:focus ~ label,
    textarea:not(:placeholder-shown) ~ label,
    select:focus ~ label,
    select:not([value='']):valid ~ label {
      /* @apply transform; scale-75; -translate-y-6; */
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate))
        skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
      --tw-scale-x: 0.75;
      --tw-scale-y: 0.75;
      --tw-translate-y: -1.5rem;
    }

    input:focus ~ label,
    select:focus ~ label {
      /* @apply text-black; left-0; */
      --tw-text-opacity: 1;
      color: rgba(0, 0, 0, var(--tw-text-opacity));
      left: 0px;
    }
  </style>

  <div class="min-h-screen bg-gray-100 p-0 sm:p-12">
    <div class="mx-auto max-w-md px-6 py-12 bg-white border-0 shadow-lg sm:rounded-3xl">
      <h1 class="text-2xl font-bold mb-8">Cadastrar</h1>
      <form action="{{ route('pets.store') }}" method="post" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="relative z-0 w-full mb-5">
          <input
            type="text"
            name="nome"
            placeholder=" "
            required
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          />
          <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Nome</label>
          <span class="text-sm text-red-600 hidden" id="error">Nome</span>
        </div>

        <div class="relative z-0 w-full mb-5">
          <input
            type="text"
            name="idade"
            placeholder=" "
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          />
          <label for="email" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Idade</label>
          <span class="text-sm text-red-600 hidden" id="error">Idade</span>
        </div>
          <select
            name="type_id"
            value=""
            onclick="this.setAttribute('value', this.value);"
            class="pt-3 text-gray-500 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          >
          <option disabled selected class="text-gray-400">Selecione o tipo</option>
                @foreach ($types as $type)
                <option class="text-gray-900" value="{{ $type->id }}">{{ $type->tipo }}</option>
                @endforeach
          </select>
          <div class="relative z-0 w-full mb-5">
            <input
              type="text"
              name="raca"
              placeholder=" "
              class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
            />
            <label for="email" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Raça</label>
            <span class="text-sm text-red-600 hidden" id="error">Raça</span>
          </div>

          <select
            name="porte_id"
            value=""
            onclick="this.setAttribute('value', this.value);"
            class="pt-3 text-gray-500 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          >
          <option disabled selected class="text-gray-400">Selecione o Porte</option>
                @foreach ($ports as $port)
                <option class="text-gray-900" value="{{ $port->id }}">{{ $port->porte }}</option>
                @endforeach
          </select>

          <select
            name="sex_id"
            value=""
            onclick="this.setAttribute('value', this.value);"
            class="pt-3 text-gray-500 text-gray-500 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          >
          <option disabled selected class="text-gray-400">Selecione o Sexo</option>
                @foreach ($sexes as $sex)
                <option class="text-gray-900" value="{{ $sex->id }}">{{ $sex->sexo }}</option>
                @endforeach
          </select>

          <div class="relative z-0 w-full mb-5">
            <input
              type="text"
              name="date"
              placeholder=" "
              onclick="this.setAttribute('type', 'date');"
              class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
            />
            <label for="date" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Date</label>
            <span class="text-sm text-red-600 hidden" id="error">Date is required</span>
          </div>

          <div class="flex flex-col mb-3">
            <label class="text-gray-500"  for="message">Descrição</label>
            <textarea
                name="descricao"
                rows="4" id="message"
                class="px-3 py-2 focus:outline-none"
            ></textarea>
            </div>

            <div class="relative z-0 w-full mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-500" for="small_size">Imagem</label>
                 <input class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="fotos" type="file">
            </div>
        <button
          type="submit"
          class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-blue-400 hover:bg-blue-600 hover:shadow-lg focus:outline-none"
        >
          cadastrar
        </button>
      </form>
    </div>
  </div>

  <script>
    'use strict'

    document.getElementById('button').addEventListener('click', toggleError)
    const errMessages = document.querySelectorAll('#error')

    function toggleError() {
      // Show error message
      errMessages.forEach((el) => {
        el.classList.toggle('hidden')
      })

      // Highlight input and label with red
      const allBorders = document.querySelectorAll('.border-gray-200')
      const allTexts = document.querySelectorAll('.text-gray-500')
      allBorders.forEach((el) => {
        el.classList.toggle('border-red-600')
      })
      allTexts.forEach((el) => {
        el.classList.toggle('text-red-600')
      })
    }
  </script>
@endsection
