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


<h3 class="text-center text-3xl font-bold text-gray-700 mt-8">Meus Agendamentos</h3>



<div class="flex items-center justify-center container mx-auto" style="margin-top:90px;">
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">

        <!-- card1 -->

        @foreach($agendamentos as $agendamento)
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

            <p class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white"><span class="text-blue-500">Adotante:</span>{{ $agendamento->user->name }}</p>

                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white"><span class="text-blue-500">Data:</span> <span class="text-xl">{{ $agendamento->adoption_date }}</span></h5>

            <p class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white"><span class="text-blue-500">Hora:</span>{{ $agendamento->hour }}</p>

             <p class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white"><span class="text-blue-500">Status: </span>{{ $agendamento->status }}</p>

            <p class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white"><span class="text-blue-500">Obeservação:</span> <span>{{ $agendamento->observation }}</span></p>
            <form action="{{ route('pets.confirmar-agendamentos') }}" method="POST">
                @csrf
                @method('PATCH')
            @if ($agendamento->status == 'Aguardando')
            <input type="hidden" name="status" value="Confirmado">
            <input type="hidden" name="user_id" value="{{$agendamento->user_id}}">
            <button type="submit" class="mt-4 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Confirmar
            </button>
            @endif
        </form>
        </div>
        @endforeach
    </div>
</div>







@endsection
