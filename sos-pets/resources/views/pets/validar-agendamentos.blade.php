@extends('principal')

@section('titulo', 'Agendamento')

@section('conteudo')


@if (session('sucesso'))
    <div class="alert alert-success">

    </div>
     <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
      <span class="font-medium"></span>{{ session('sucesso') }}
    </div>
@endif


<h3 style="margin-bottom:40px;" class="text-center text-3xl font-bold text-gray-700 mt-8">Confirmar Agendamentos</h3>

<!-- class="rounded rounded-lg w-full mb-8 sm:px-4 md:w-1/2 lg:w-1/3 lg:mb-0 border border-gray-200 bg-blue-600" -->

<div style="margin-bottom: 40px;" class="flex items-center justify-center container mx-auto" style="margin-top:80px;">
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">

        <!-- card1 -->

        @foreach($agendamentos as $agendamento)
        <div class="max-w-sm p-6 border bg-blue-600 rounded-lg shadow ">

            <p class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white"><span class="text-gray-800">Adotante: </span> {{ $agendamento->user->name }}</p>

            <p class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white"><span class="text-gray-800">Nome do Pet:</span> {{ $agendamento->pet_name }}</p>

                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white"><span class="text-gray-800">Data: </span> <span class="text-xl"> {{     date("d/m/Y", strtotime($agendamento->adoption_date))}}</span></h5>

            <p class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white"><span class="text-gray-800">Hora: </span>{{ date("H:i", strtotime($agendamento->hour)) }}</p>


             <p class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white"><span class="text-gray-800">Status: </span> {{ $agendamento->status }}</p>

            <p class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white"><span class="text-gray-800">Obeservação:</span> <span> {{ $agendamento->observation }}</span></p>
            <form action="{{ route('pets.confirmar-agendamentos') }}" method="POST">
                @csrf
                @method('PATCH')
            @if ($agendamento->status == 'Aguardando')
            <input type="hidden" name="status" value="Confirmado">
            <input type="hidden" name="user_id" value="{{$agendamento->user_id}}">
            <input type="hidden" name="pet_id" value="{{$agendamento->pet_id}}">
            <button type="submit" class="mt-4 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-500 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                Confirmar
            </button>
            @endif
        </form>
        </div>
        @endforeach
    </div>
</div>










@endsection
