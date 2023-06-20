<!-- navbar goes here -->
<!--
<nav class="bg-purple-500">
    <div class="max-w-6xl mx-auto px-4">
      <div class="flex justify-between">

        <div class="flex space-x-4">
          <div>
            <a href="{{route('pets.index')}}" class="flex items-center py-5 px-2 text-gray-700 hover:text-gray-900">
              <img class="w-10" src="{{ asset('images/pata.png')}}" alt="">
              <span class="font-bold">SosPets</span>
            </a>
          </div>

          <div class="hidden md:flex items-center space-x-1">
            @auth
            <a href="{{ route('pets.create') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900">Cadastrar Pets</a>
            <a href="{{ route('pets.userPets') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900">Meus Pets</a>
            <a href="{{ route('pets.agendamentos') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900">Meus Agendamentos</a>
            @endauth
            <a href="#" class="py-5 px-3 text-gray-700 hover:text-gray-900">Sobre</a>
            <a href="#" class="py-5 px-3 text-gray-700 hover:text-gray-900">Contato</a>
          </div>
        </div>

        <div class="hidden md:flex items-center space-x-1">
          @auth
          <x-dropdown-link :href="route('profile.edit')" class="py-2 px-3 bg-yellow-400 hover:bg-yellow-300 text-yellow-900 hover:text-yellow-800 rounded transition duration-300">
            {{ __(Auth::user()->name) }}
          </x-dropdown-link>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Sair') }}
            </x-dropdown-link>
        </form>
          @else
          <a href="{{ route('register') }}" class="py-5 px-3">Cadastrar</a>
          <a href="{{ route('login') }}" class="py-2 px-3 bg-yellow-400 hover:bg-yellow-300 text-yellow-900 hover:text-yellow-800 rounded transition duration-300">Entrar</a>
          @endauth
        </div>

        <div class="md:hidden flex items-center">
          <button class="mobile-menu-button">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>

      </div>
    </div>

    <div class="mobile-menu hidden md:hidden">
        @auth
        <x-dropdown-link :href="route('profile.edit')" class="py-2 px-3 bg-yellow-400 hover:bg-yellow-300 text-yellow-900 hover:text-yellow-800 rounded transition duration-300">
          {{ __(Auth::user()->name) }}
        </x-dropdown-link>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <x-dropdown-link :href="route('logout')"
                  onclick="event.preventDefault();
                              this.closest('form').submit();">
              {{ __('Sair') }}
          </x-dropdown-link>
        </form>
        @else
        <a href="{{ route('register') }}" class="py-5 px-3">Cadastrar</a>
        <a href="{{ route('login') }}" class="py-2 px-3 bg-yellow-400 hover:bg-yellow-300 text-yellow-900 hover:text-yellow-800 rounded transition duration-300">Entrar</a>
        @endauth
    </div>
  </nav>

  
  {{-- <div class="py-32 text-center">
    <h2 class="font-extrabold text-4xl">Pets Cadastrados</h2>
  </div> --}}


<script>
    const btn = document.querySelector("button.mobile-menu-button");
   const menu = document.querySelector(".mobile-menu");

// add event listeners
    btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
});

</script>

-->

<!-- novo =============-->

<style>

  #btn-entrar{
    background-color: #ffc800;
    color: #000000;
    border-radius: 15px;
  }

  #btn-entrar:hover{
    background-color: #FFA500;
  }

  #btn-cadastrar{
    color: #ffffff;
    font-family: sans-serif;
    font-size: 15.2px;
  }

  #btn-cadastrar:hover{
    color: #ffc800;
  }

</style>



 <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{route('pets.index')}}">SosPets</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                      @auth
                        <li class="nav-item"><a class="nav-link" href="{{ route('pets.create') }}">Cadastrar Pets</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('pets.userPets') }}">Meus Pets</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('pets.agendamentos') }}">Agendamentos</a></li>
                      @endauth
                        <li class="nav-item"><a class="nav-link" href="#contact">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contato</a></li>

                      @auth
                       <x-dropdown-link :href="route('profile.edit')" class="nav-link">
                          {{ __(Auth::user()->name) }}
                       </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <x-dropdown-link :href="route('logout')"
                                  onclick="event.preventDefault();
                                              this.closest('form').submit();">
                              {{ __('Sair') }}
                          </x-dropdown-link>
                        </form>
                         @else
                        <a href="{{ route('register') }}" class="nav-link" id="btn-cadastrar">Cadastrar</a>
                        <a href="{{ route('login') }}" id="btn-entrar" class="nav-link">Entrar</a>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Não compre, adote!</div>
                <div class="masthead-heading text-uppercase">Laços eternos começam com uma adoção</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Escolha seu Pet</a>
            </div>
        </header>
