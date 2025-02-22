<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-input-label for="email" :value="__('E-mail')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Relembrar') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Esqueceu Sua Senha?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Entrar') }}
            </x-primary-button>
        </div>
    </form> -->
     <section class="flex flex-col md:flex-row h-screen items-center">

        <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
    <img src="images/gato_cao.jpg" alt="" class="w-full h-full object-cover">
        </div>

    <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
      flex items-center justify-center">

    <div class="w-full h-100">

        <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Entre com sua conta</h1>

    <form class="mt-6" action="#" method="POST" action="{{ route('login') }}">
    @csrf
      <div>
        <label for="email" :value="__('E-mail')" class="block text-gray-700">Email</label>
        <input type="email" name="email" id="email" placeholder="Email" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required>
      </div>

      <div class="mt-4">
        <label for="password" :value="__('Senha')" class="block text-gray-700">Senha</label>
        <input type="password" name="password" id="password" placeholder="Senha" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
              focus:bg-white focus:outline-none" required>
      </div>

      <div class="text-right mt-2">
      @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}" class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">
        {{ __('Esqueceu Sua Senha?') }}
        </a>
        @endif
      </div>

      <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
            px-4 py-3 mt-6">Entrar</button>
    </form>

    <hr class="my-6 border-gray-300 w-full">

    <p class="mt-8">Não possui conta? <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-700 font-semibold">Crie sua conta</a></p>

  </div>
</div>

</section>
    </x-guest-layout>

    <!-- <section class="flex flex-col md:flex-row h-screen items-center">

        <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
    <img src="images/cat_dog.jpg" alt="" class="w-full h-full object-cover">
        </div>

    <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
      flex items-center justify-center">

    <div class="w-full h-100">

        <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Entre com sua conta</h1>

    <form class="mt-6" action="#" method="POST" action="{{ route('login') }}">
    @csrf
      <div>
        <label for="email" :value="__('E-mail')" class="block text-gray-700">Email</label>
        <input type="email" name="email" id="email" placeholder="Email" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required>
      </div>

      <div class="mt-4">
        <label for="password" :value="__('Senha')" class="block text-gray-700">Senha</label>
        <input type="password" name="password" id="password" placeholder="Senha" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
              focus:bg-white focus:outline-none" required>
      </div>

      <div class="text-right mt-2">
      @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}" class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">
        {{ __('Esqueceu Sua Senha?') }}
        </a>
        @endif
      </div>

      <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
            px-4 py-3 mt-6">Entrar</button>
    </form>

    <hr class="my-6 border-gray-300 w-full">

    <button type="button" class="w-full block bg-white hover:bg-gray-100 focus:bg-gray-100 text-gray-900 font-semibold rounded-lg px-4 py-3 border border-gray-300">
          <div class="flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6 h-6" viewBox="0 0 48 48"><defs><path id="a" d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"/></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"/></clipPath><path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z"/><path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z"/><path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z"/><path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z"/></svg>
          <span class="ml-4">
          Entrar com a conta do Google</span>
          </div>
        </button>

    <p class="mt-8">Não possui conta? <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-700 font-semibold">Crie sua conta</a></p>

  </div>
</div>

</section> -->
