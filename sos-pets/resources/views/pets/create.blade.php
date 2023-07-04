
@extends('principal')

@section('titulo', 'Cadastro')

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
    <form id="form" novalidate action="{{ route('pets.store') }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="relative z-0 w-full mb-5">
        <input
          type="text"
          name="nome"
          placeholder=" "
          value="{{ old('nome') }}"
          class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
        />
        <label for="nome" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Digite o  nome do pet</label>
        @error('nome')
         <span class="text-sm text-red-600" id="error">{{ $message }}</span>
        @enderror
      </div>

      <div class="relative z-0 w-full mb-5">
        <input
          type="text"
          name="idade"
          placeholder=" "
          value="{{old('idade')}}"
          class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
        />
        <label for="idade" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Digite a idade em meses</label>
         @error('idade')
         <span class="text-sm text-red-600" id="error">{{ $message }}</span>
        @enderror
      </div>

       <div class="relative z-0 w-full mb-5">
         <select
            name="type_id"
            value="{{old('type_id')}}"
            onclick="this.setAttribute('value', this.value);"
            class="pt-3 text-gray-500 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200">
         <option disabled selected class="text-gray-400">Selecione o tipo</option>
                @foreach ($types as $type)
                <option class="text-gray-900" value="{{ $type->id }}">{{ $type->tipo }}</option>
                @endforeach
         </select>
          @error('type_id')
           <span class="text-sm text-red-600" id="error">{{ $message }}</span>
          @enderror
       </div>

        <div class="relative z-0 w-full mb-5">
        <input
          type="text"
          name="raca"
          value="{{old('raca')}}"
          placeholder=" "
          class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
        />
        <label for="raca" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Digite a raça</label>
         @error('raca')
           <span class="text-sm text-red-600" id="error">{{ $message }}</span>
         @enderror
        </div>

        <div class="relative z-0 w-full mb-5">
         <select
            name="port_id"
            value="{{old('port_id')}}"
            onclick="this.setAttribute('value', this.value);"
            class="pt-3 text-gray-500 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200">
         <option disabled selected class="text-gray-400">Selecione o porte</option>
                @foreach ($ports as $port)
                <option class="text-gray-900" value="{{ $port->id }}">{{ $port->porte }}</option>
                @endforeach
         </select>
          @error('port_id')
            <span class="text-sm text-red-600" id="error">{{ $message }}</span>
          @enderror
         </div>

         <div class="relative z-0 w-full mb-5">
         <select
            name="sex_id"
            value="{{old('sex_id')}}"
            onclick="this.setAttribute('value', this.value);"
            class="pt-3 text-gray-500 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200">
         <option disabled selected class="text-gray-400">Selecione do sexo</option>
                @foreach ($sexes as $sex)
                <option class="text-gray-900" value="{{ $sex->id }}">{{ $sex->sexo }}</option>
                @endforeach
         </select>
          @error('sex_id')
           <span class="text-sm text-red-600" id="error">{{ $message }}</span>
          @enderror
         </div>

  
        <div class="relative z-0 w-full mb-5">
        <input
          type="file"
          name="fotos"
          placeholder=" "
          class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
        />
        <label for="fotos" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Escolha uma Imagem</label>
         @error('fotos')
         <span class="text-sm text-red-600" id="error">{{ $message }}</span>
         @enderror
        </div>

       <div class="relative z-0 w-full mb-5" style="margin-top: 20px;">
            <textarea value="{{old('descricao')}}" class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" name="descricao" id="message" placeholder="Descrição *" data-sb-validations="required"></textarea>
             @error('descricao')
              <span class="text-sm text-red-600" id="error">{{ $message }}</span>
             @enderror
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
