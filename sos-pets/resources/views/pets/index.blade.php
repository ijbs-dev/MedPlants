@extends('principal')

@section('titulo', 'Home')

@section('conteudo')


<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Não compre, adote!</div>
        <div class="masthead-heading text-uppercase">Laços eternos começam com uma adoção</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="#pets">Escolha seu Pet</a>
    </div>
</header>



<!--
 <div class="flex flex-wrap justify-center px-4 gap-4 mt-10">
    @foreach ($pets as $pet)
      <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 overflow-hidden rounded-xl bg-white shadow-md duration-200 hover:scale-105 hover:shadow-xl mb-4">
        <img src="{{ url("storage/{$pet->fotos}") }}" alt="plant" class="h-48 w-full object-cover" />
        <div class="p-5">
          <p class="text-medium mb-5 text-gray-700">{{ $pet->nome }}.</p>
          <a href="{{ route('pets.show',$pet->id)}}" class="w-full rounded-md bg-indigo-600 py-2 px-6 cursor-pointer text-indigo-100 hover:bg-indigo-500 hover:shadow-md duration-75">Detalhes</a>
        </div>
      </div>
    @endforeach
  </div> -->




<!-- novo -->


        <!-- Portfolio Grid-->
        <section class="page-section bg-light">
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
                                <div class="portfolio-caption-subheading text-muted">Detalhes</div>
                            </div>
                        </div>
                    </div>
                   @endforeach
                </div>
            </div>
        </section>

           <!-- Portfolio item 1 modal popup-->
       @foreach ($pets as $pet)
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
                                      @php
                                        $dataAtual = new DateTime();
                                          $dataFormatada = $dataAtual->format('Y-m-d');
                                      @endphp
                                      <form action="{{ route('pets.agendar')}}" method="POST">
                                          @csrf
                                          @if (isset(Auth::user()->id))
                                              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                          @endif
                                              <input type="hidden" name="pet_id" value="{{$pet->id}}">
                                                  <input type="hidden" name="adoption_date" value="{{$dataFormatada}}">
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





@endsection
