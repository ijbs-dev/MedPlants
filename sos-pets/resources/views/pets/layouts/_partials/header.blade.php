

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

  .sair{
    color:#ffffff;
    text-decoration: none;
    font-family: sans-serif;
    font-size: 15.2px;
    padding:8px 24px;
    margin-top: 50px;
  }

   .user{
    color:#696969;
    text-decoration: none;
    font-family: sans-serif;
    font-size: 15.2px;
    padding:8px 40px;
    background-color: #ffc800;
    border-radius: 10px
  }

  .user:hover{
    background-color: #ffc800;
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
                        <li class="nav-item"><a class="nav-link" href="{{ route('pets.meusPets') }}">Meus Pets</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('pets.agendamentos') }}">Agendamentos</a></li>
                      @endauth
                        <li class="nav-item"><a class="nav-link" >Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" >Contato</a></li>

                      @auth
                      <x-dropdown-link :href="route('profile.edit')" class="user">
                          {{ __(Auth::user()->name) }}
                      </x-dropdown-link>
                      <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <x-dropdown-link class="sair" :href="route('logout')"
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


