@extends('principal')

@section('titulo', 'Meus Pets')

@section('conteudo')




<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8">

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>

                <th scope="col" class="px-6 py-3">
                    Nome Do Pet
                </th>
                <th scope="col" class="px-6 py-3">
                    Descrição
                </th>
                <th scope="col" class="px-6 py-3">
                    Status da Adoção
                </th>
                <th scope="col" class="px-6 py-3">
                    Ações
                </th>
            </tr>
        </thead>
        <tbody>
             @foreach ($userPets as $pets)


            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <img class="rounded-full w-12 h-12 mr-3" src="{{ url("storage/{$pets->fotos}") }}" alt="{{$pets->nome}}">
                    <div>
                        <div class="text-base font-semibold">{{$pets->nome}}</div>
                    </div>
                </th>
                <td class="px-6 py-4">
                    {{ substr($pets->descricao,0,70) }}
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div> Disponível
                    </div>
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Excluir</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>






@endsection

