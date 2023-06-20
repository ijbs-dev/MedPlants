@extends('principal')

@section('titulo', 'Home')

@section('conteudo')



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
        <section class="page-section bg-light" id="portfolio">
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
                                <div class="portfolio-caption-subheading text-muted">Illustration</div>
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
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
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
                                            <strong>Porte:</strong>
                                            {{ $pet->porte }}
                                        </li>
                                        <li>
                                            <strong>Sexo:</strong>
                                            {{ $pet->sexo }}
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

      



@endsection
