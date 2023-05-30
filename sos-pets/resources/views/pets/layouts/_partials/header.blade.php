<!-- navbar goes here -->
<nav class="bg-purple-500">
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
