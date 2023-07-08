


<!-- novo começo -->


<nav class="p-5 bg-gray-900 text-white shadow md:flex md:items-center md:justify-between">
    <div class="flex justify-between items-center ">
      <span style="font-family: sans-serif;" class="text-2xl font-[Poppins] cursor-pointer hover:text-cyan-500 duration-500">
        <img class="h-10 inline"
          src="{{ asset('images/pata.png')}}">
        <a href="{{route('pets.index')}}">SosPets</a>
      </span>

      <span class="text-3xl cursor-pointer mx-2 md:hidden block">
        <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
      </span>
    </div>

    <ul class="text-white md:text-white md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-gray-900 w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
      @auth
      <li class="mx-4 my-6 md:my-0">
        <a href="{{ route('pets.create') }}" class="text-md hover:text-cyan-500 duration-500">Cadastrar Pet</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="{{ route('pets.meusPets') }}" class="text-md hover:text-cyan-500 duration-500">Meus Pets</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="{{ route('pets.agendamentos') }}" class="text-md hover:text-cyan-500 duration-500">Meus Agendamentos</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="{{ route('pets.validar-agendamentos') }}" class="text-md hover:text-cyan-500 duration-500">Validar Agendamentos</a>
      </li>
      @endauth
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-md hover:text-cyan-500 duration-500">Sobre</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="{{ route('pets.contatos') }}" class="text-md hover:text-cyan-500 duration-500">Contato</a>
      </li>

      @auth
        <x-dropdown-link :href="route('profile.edit')" class="text-sm bg-cyan-400 text-white font-[Poppins] duration-500 px-6 py-2 mx-4 hover:bg-cyan-500 rounded">
        {{ __(Auth::user()->name) }}
        </x-dropdown-link>
        <form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-dropdown-link class="text-sm text-xl hover:text-white duration-500" :href="route('logout')"
          onclick="event.preventDefault();
        this.closest('form').submit();">
        {{ __('Sair') }}
        </x-dropdown-link>
        </form>
        @else
        <a href="{{ route('register') }}" class="text-xl hover:text-cyan-500 duration-500" id="btn-cadastrar">Cadastrar</a>
        <a href="{{ route('login') }}" id="btn-entrar" class="bg-cyan-400 text-white font-[Poppins] duration-500 px-6 py-2 mx-4 hover:bg-cyan-500 rounded">Entrar</a>
      @endauth

    </ul>
  </nav>


  <script>
    function Menu(e){
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    }
  </script>






