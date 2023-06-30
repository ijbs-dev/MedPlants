@extends('principal')

@section('titulo', 'Home')

@section('conteudo')

@php
    if(auth()->user()){
        $user = auth()->user();
        $id = $user->id;
    }
@endphp

  <div
    class="relative overflow-hidden bg-cover bg-no-repeat"
    style="
      background-position: 50%;
      background-image: url('{{ asset('images/cat-dog-4.jpg') }}');
      height: 100vh;
    ">
    <div
      class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed"
      style="background-color: rgba(0, 0, 0, 0.75)">
      <div class="flex h-full items-center justify-center">
        <div class="px-6 text-center text-white md:px-12">
          <h1 class="mb-6 text-5xl font-bold">Ao adotar um pet</h1>
          <h3 class="mb-8 text-3xl font-bold">você está salvando uma vida e ganhando um companheiro fiel</h3>
          <button
            type="button"
            class="inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
            data-te-ripple-init
            data-te-ripple-color="light">
            Escolha Seu Pet
          </button>
        </div>
      </div>
    </div>
  </div>



<h2 class="text-4xl text-center  font-normal leading-normal mt-5 mb-2 text-sky-800">
  Pets Cadastrados
</h2>



 <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
     @foreach ($pets as $pet)
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg" src="{{ url("storage/{$pet->fotos}") }}" alt="Imagem" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $pet->nome }}</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $pet->descricao }}</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Detalhes
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
    </div>
</div>
  @endforeach


</div>


        <!-- Portfolio Grid-->
       <!--   <section class="page-section bg-light" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Pets Cadastrados</h2>
                </div>
                <div class="row">
                   @foreach ($pets as $pet)
                    <div class="col-lg-4 col-sm-6 mb-4">
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
        </section>   -->

           <!-- Portfolio item 1 modal popup-->
     <!--   @foreach ($pets as $pet)
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
                                    <h2 class="text-uppercase">{{ $pet->nome }}</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> 
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

                                      <form onsubmit="return interromper()" action="{{ route('pets.agendar')}}" method="POST">
                                          @csrf
                                          @if (isset(Auth::user()->id))
                                              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                          @endif
                                              <input type="hidden" name="pet_id" value="{{$pet->id}}">
                                                  <input type="hidden" name="adoption_date" value="{{$pet->date_visit}}">
                                              <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Agendar</button>-

                                            <button type="submit" class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal">
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
        @endforeach -->
        <!-- <script>
            function interromper() {
              let userPetId = "{{ isset($userPetId) ? $userPetId : '' }}";
              let userIdLogado = "{{ isset($id) ? $id : '' }}";
              console.log(userPetId,userIdLogado);
              if (userPetId === userIdLogado) {
                alert("Voçê não pode agendar que foi cadastrado por voçê.");
                return false; 
              }
              return true;
            }
        </script>  -->


@endsection
