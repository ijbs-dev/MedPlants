@extends('principal')

@section('titulo', 'Home')

@section('conteudo')

@php
    if(auth()->user()){
        $user = auth()->user();
        $id = $user->id;
    }
@endphp

<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Não compre, adote!</div>
        <div class="masthead-heading text-uppercase">Laços eternos começam com uma adoção</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="#services">Escolha seu Pet</a>
    </div>
</header>


        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Pets Cadastrados</h2>
                   <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
                </div>
                <div class="row">
                   @foreach ($pets as $pet)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ url("storage/{$pet->fotos}") }}" alt="Imagem" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{ $pet->nome }}</div>
                                {{-- <div class="portfolio-caption-subheading text-muted">Detalhes</div> --}}
                            </div>
                        </div>
                    </div>
                   @endforeach
                </div>
            </div>
        </section>

           <!-- Portfolio item 1 modal popup-->
       @foreach ($pets as $pet)
       @php
        $userPetId = $pet->user_id;
        @endphp
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('images/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">{{ $pet->nome }}</h2>
                                   <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> -->
                                    <img class="img-fluid d-block mx-auto" src="{{ url("storage/{$pet->fotos}") }}" alt="Imagem" />
                                    <p>{{ $pet->descricao }}</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Idade:</strong>
                                            {{ $pet->idade }}
                                        </li>
                                        <li>
                                            <strong>Raça:</strong>
                                            {{ $pet->raca }}
                                        </li>
                                        <li>
                                           @php
                                           $porte = "";
                                           if($pet->port_id == 1){
                                             $porte = "Pequeno";
                                           }elseif($pet->port_id == 2){
                                              $porte = "Médio";
                                           }else{
                                              $porte = "Grande";
                                           }
                                           @endphp
                                            <strong>Porte:</strong>
                                              {{ $porte }}
                                        </li>
                                        <li>
                                           @php
                                           $sexo = "";
                                           if($pet->sex_id == 1){
                                             $sexo = "Macho";
                                           }elseif($pet->sex_id == 2){
                                              $sexo = "Femêa";
                                           }
                                           @endphp
                                            <strong>Sexo:</strong>
                                            {{ $sexo }}
                                        </li>
                                    </ul>


                                     <!-- Botão -->

                                      <form onsubmit="return interromper()" action="{{ route('pets.agendar')}}" method="POST">
                                          @csrf
                                          @if (isset(Auth::user()->id))
                                              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                          @endif
                                              <input type="hidden" name="pet_id" value="{{$pet->id}}">
                                                  <input type="hidden" name="adoption_date" value="{{$pet->date_visit}}">
                                              <!--<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Agendar</button>-->

                                            <button type="submit" class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal">
                                                <!--<i class="fas fa-xmark me-1"></i> -->
                                                Agendar
                                          </button>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <script>
            function interromper() {
              // Obtém os valores dos campos do formulário
              let userPetId = "{{ $userPetId }}";
              let userIdLogado = "{{ isset($id) ? $id : '' }}";
              console.log(userPetId,userIdLogado);
              // Compara os valores
              if (userPetId === userIdLogado) {
                alert("Voçê não pode agendar que foi cadastrado por voçê.");
                return false; // Retorna falso para interromper o envio do formulário
              }
              // Caso contrário, o envio do formulário prossegue
              return true;
            }
        </script>


@endsection
