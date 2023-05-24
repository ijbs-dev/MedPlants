<!-- navbar goes here -->
<nav class="bg-gray-100">
    <div class="max-w-6xl mx-auto px-4">
      <div class="flex justify-between">

        <div class="flex space-x-4">
          <!-- logo -->
          <div>
            <a href="{{route('pets.index')}}" class="flex items-center py-5 px-2 text-gray-700 hover:text-gray-900">
              <img class="w-10" src="{{ asset('images/pata.png')}}" alt="">
              <span class="font-bold">SosPets</span>
            </a>
          </div>

          <!-- primary nav -->
          <div class="hidden md:flex items-center space-x-1">
            @auth
            <a href="{{ route('pets.create') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900">Cadastrar Pets</a>
            <a href="{{ route('pets.userPets') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900">Meus Pets</a>
            @endauth
            <a href="#" class="py-5 px-3 text-gray-700 hover:text-gray-900">Sobre</a>
            <a href="#" class="py-5 px-3 text-gray-700 hover:text-gray-900">Contato</a>
          </div>
        </div>

        <!-- secondary nav -->
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

        <!-- mobile button goes here -->
        <div class="md:hidden flex items-center">
          <button class="mobile-menu-button">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>

      </div>
    </div>

    <!-- mobile menu -->
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

  <!-- content goes here -->
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

{{-- fim --}}

{{--
<nav class="p-4 shadow md:flex md:items-center md:justify-between">
    <div class="flex justify-between items-center ">
      <span class="text-2xl font-[Poppins] cursor-pointer">
        <a href="{{route('pets.index')}}">SosPets</a>
      </span>

      <span class="text-3xl cursor-pointer mx-2 md:hidden block">
        <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
      </span>
    </div>

    <ul class=" md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
      @auth
        <li class="mx-4 my-6 md:my-0">
            <a href="{{ route('pets.create') }}" class="text-xl hover:text-cyan-500 duration-500">Cadastrar Pets</a>
        </li>

        <li class="mx-4 my-6 md:my-0">
            <a href="{{ route('pets.create') }}" class="text-xl hover:text-cyan-500 duration-500">Meus Pets</a>
        </li>
      @endauth
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-cyan-500 duration-500">Sobre</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-cyan-500 duration-500">Contato</a>
      </li>

      <li class="mx-4 my-6 md:my-0">
        <a href="{{ route('register') }}" class="text-xl hover:text-cyan-500 duration-500">Cadastrar</a>
      </li>

 @auth
 <div class="hidden sm:flex sm:items-center sm:ml-6" style="float:right">
    <x-dropdown align="righ" width="48">
        <x-slot name="trigger">
            <button class="inline-flex items-center px-3 py-2 border border-transparent text-xl leading-4 rounded text-white bg-cyan-400 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                <div>{{ Auth::user()->name }}</div>

                <div class="ml-1">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </button>
        </x-slot>

        <x-slot name="content">
            <x-dropdown-link :href="route('profile.edit')">
                {{ __('Perfil') }}
            </x-dropdown-link>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Sair') }}
                </x-dropdown-link>
            </form>
        </x-slot>
    </x-dropdown>
</div>

@else

<a href="{{ route('login') }}" class="bg-cyan-400 text-xl text-white font-[Poppins] duration-500 px-6 py-2 mx-4 hover:bg-cyan-500 rounded ">
    Login
</a>



    </ul>
  </nav>

@endauth


<script>
    function Menu(e){
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    }
</script> --}}
