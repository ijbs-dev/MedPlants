
@extends('principal')

@section('titulo', 'Editar')

@section('conteudo')


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

  <div class="min-h-screen bg-slate-200 p-0 sm:p-12">


    <div class="mx-auto max-w-md px-6 py-12 bg-white border-0 shadow-lg sm:rounded-3xl">
      <h1 class="text-2xl font-bold mb-8 text-center text-blue-400">Cadastrar Pets</h1>
      <form id="form" novalidate action="{{ route('pets.update',$pet->id) }}" method="post" enctype="multipart/form-data" novalidate>
          @csrf
          @method('PUT')
        <div class="relative z-0 w-full mb-5">
          <input
            type="text"
            name="nome"
            value="{{$pet->nome}}"
            placeholder=" "
            required
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          />
          <label for="nome" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Digite o nome do pet</label>
          <span class="text-sm text-red-600 hidden" id="error">Name é obrigatório</span>
        </div>

        <div class="relative z-0 w-full mb-5">
          <input
            type="text"
            name="idade"
            value="{{$pet->idade}}"
            placeholder=" "
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          />
          <label for="idade" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Digite a idade</label>
          <span class="text-sm text-red-600 hidden" id="error">Idade é obrigatório</span>
        </div>

         <div class="relative z-0 w-full mb-5">

        <select name="type_id" onclick="this.setAttribute('value', this.value);" class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200">
            <option disabled selected class="text-gray-400">Selecione o tipo</option>
            @foreach ($types as $type)
                <option class="text-gray-900" value="{{ $type->id }}" {{ $type->id == $pet->type_id ? 'selected' : '' }}>{{ $type->tipo }}</option>
            @endforeach
        </select>


           <span class="text-sm text-red-600 hidden" id="error">Tipo é obrigatório</span>
         </div>

          <div class="relative z-0 w-full mb-5">
          <input
            type="text"
            name="raca"
            value="{{$pet->raca}}"
            placeholder=" "
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          />
          <label for="raca" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Digite a raça</label>
          <span class="text-sm text-red-600 hidden" id="error">Raça é obrigatório</span>
         </div>

          <div class="relative z-0 w-full mb-5">
            <select name="port_id" onclick="this.setAttribute('value', this.value);" class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200">
                <option disabled selected class="text-gray-400">Selecione o Porte</option>
                @foreach ($ports as $port)
                    <option class="text-gray-900" value="{{ $port->id }}" {{ $port->id == $pet->port_id ? 'selected' : '' }}>{{ $port->porte }}</option>
                @endforeach
            </select>
           <span class="text-sm text-red-600 hidden" id="error">Tipo é obrigatório</span>
          </div>

           <div class="relative z-0 w-full mb-5">
            <select name="type_id" onclick="this.setAttribute('value', this.value);" class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200">
                <option disabled selected class="text-gray-400">Selecione o Sexo</option>
                @foreach ($sexes as $sex)
                    <option class="text-gray-900" value="{{ $sex->id }}" {{ $sex->id == $pet->sex_id ? 'selected' : '' }}>{{ $sex->sexo }}</option>
                @endforeach
            </select>
           <span class="text-sm text-red-600 hidden" id="error">Sexo do pet é obrigatório</span>
          </div>

           <div class="relative z-0 w-full mb-5">
          <input
            type="file"
            name="fotos"
            placeholder=" "
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          />
          <label for="fotos" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Escolha uma Imagem</label>
          <span class="text-sm text-red-600 hidden" id="error">Imagem é obrigatório</span>
         </div>

         <div class="relative z-0 w-full mb-5" style="margin-top: 20px;">
              <textarea class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" name="descricao" id="message" placeholder="Descrição *" data-sb-validations="required">
                {{ $pet->descricao }}
              </textarea>
              <span class="text-sm text-red-600 hidden" id="error">Descrição é obrigatório</span>
          </div>

        <button
          id="button"
          type="submit"
          class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-blue-500 hover:bg-blue-600 hover:shadow-lg focus:outline-none">
          Cadastrar
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
