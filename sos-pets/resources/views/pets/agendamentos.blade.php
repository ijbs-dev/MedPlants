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





<!-- component -->
<!-- <div class="min-h-screen bg-gray-100 flex justify-center items-center">
  <div class="container flex justify-center"> -->
<div class="mb-16 flex items-center justify-center container mx-auto" style="margin-top:90px;">
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
    @foreach($schedules as $schedule)
    <div class="max-w-sm py-4">
      <div class="bg-white relative shadow-lg hover:shadow-xl transition duration-500 rounded-lg">
        <img style="width: 400px;height: 240px" class="rounded-t-lg" src="{{ url("storage/$schedule->pet_fotos") }}" alt="" />
        <div class="py-6 px-8 rounded-lg bg-gray-300">
          <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-gray-900 hover:cursor-pointer">{{ $schedule->pet_nome }}</h1>
          <p class="text-gray-700 tracking-wide">
              Data: {{     date("d/m/Y", strtotime($schedule->adoption_date))}} <br>
              Hora: {{ date("H:i", strtotime($schedule->hour)) }}<br>
              Agendamento: {{$schedule->status}} <br>
              Observação: {{$schedule->observation}}
          </p>
          <!-- <button class="mt-6 py-2 px-4 bg-yellow-400 text-gray-800 font-bold rounded-lg shadow-md hover:shadow-lg transition duration-300">Buy Now</button> -->
        </div>
       <!--  <div class="absolute top-2 right-2 py-2 px-4 bg-white rounded-lg">
          <span class="text-md">$150</span>
        </div> -->
      </div>
    </div>
   @endforeach
   </div>
</div>

























@endsection
