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

<div class="relativo mx-auto mt-8 mb-8 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
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
     <!--  <div class="flex items-center justify-between">
        <span class="text-3xl font-bold text-gray-900 dark:text-white">{{ $pet->nome }}</span>
        <button onclick="openModal()" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Agendar</button>
      </div> -->
    </div>
  </div>
<!-- </div> -->


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







<!-- Modal -->
<div id="myModal" class="modal">
  <div class="modal-content">
    <h2>Formulário</h2>
    <form id="myForm">
      <div class="form-group">
        <label for="date">Data:</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div class="form-group">
        <label for="time">Hora:</label>
        <input type="time" id="time" name="time" required>
      </div>
      <div class="form-group">
        <label for="observation">Observação:</label>
        <textarea id="observation" name="observation" required></textarea>
      </div>
      <div class="form-group">
        <button type="submit">Enviar</button>
      </div>
    </form>
  </div>
</div>

<style>
  /* Estilos para o modal */
  .modal {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5);
  }

  .modal-content {
    background-color: #fefefe;
    margin: 10% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 500px;
    border-radius: 5px;
  }

  /* Estilos para os campos do formulário */
  .form-group {
    margin-bottom: 15px;
  }

  .form-group label {
    display: block;
    font-weight: bold;
  }

  .form-group input,
  .form-group textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  .form-group textarea {
    height: 80px;
  }

  .form-group button {
    padding: 8px 16px;
    background-color: #3b82f6;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
</style>


<script>
window.onclick = function(event) {
  var modal = document.getElementById("myModal");
  if (event.target === modal) {
    closeModal();
  }
};

document.addEventListener('DOMContentLoaded', function() {
  document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault();

    var date = document.getElementById("date").value;
    var time = document.getElementById("time").value;
    var observation = document.getElementById("observation").value;

    var data = {
      date: date,
      time: time,
      observation: observation
    };

    console.log(data);

    fetch("{{ route('pets.agendamentos') }}", {
      method: "POST",
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
      },
      body: JSON.stringify(data)
    })
    .then(function(response) {
      if (response.ok) {
        // A solicitação foi bem-sucedida
        // Você pode adicionar aqui qualquer lógica adicional após o envio do formulário
        closeModal();
      } else {
        // A solicitação falhou
        throw new Error("Ocorreu um erro ao enviar o formulário.");
      }
    })
    .catch(function(error) {
      console.log("Ocorreu um erro ao enviar o formulário:", error);
    });
  });

  function closeModal() {
    modal.style.display = "none";
  }
});

</script>
@endsection
