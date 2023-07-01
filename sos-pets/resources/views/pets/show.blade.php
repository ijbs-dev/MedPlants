@extends('principal')

@section('titulo', 'Detalhes')

@section('conteudo')
<div style="
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
  function openModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "block";
  }

  function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
  }

  window.onclick = function(event) {
    var modal = document.getElementById("myModal");
    if (event.target === modal) {
      closeModal();
    }
  };

  var form = document.getElementById("myForm");
  form.addEventListener("submit", function(event) {
    event.preventDefault();
    // Aqui você pode adicionar o código para processar o formulário
    closeModal();
  });
</script>

@endsection
