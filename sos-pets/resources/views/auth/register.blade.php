{{--

<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nome -->
        <div>
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- E-mail -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('E-mail')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Telefone -->
        <div class="mt-4">
            <x-input-label for="telefone" :value="__('Telefones')" />
            <x-text-input maxlength="15" onkeyup="handlePhone(event)" id="telefone" class="block mt-1 w-full" type="text" name="telefone" :value="old('telefone')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
        </div>

        <div class="flex items-center mb-4 mt-4">
             <input id="default-checkbox" type="checkbox" name="tipo_usuario" value="associacao" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
             <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-100 dark:text-gray-900" style="color:black;">Marque esse campo se voçê for uma instituição</label>
        </div>

        <!-- Senha -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirmar Senha-->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmação De Senha')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Já Possui Cadastro?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Cadastrar') }}
            </x-primary-button>
        </div>
    </form>

    <script>
    const handlePhone = (event) => {
    let input = event.target
    input.value = phoneMask(input.value)
    }

  const phoneMask = (value) => {
    if (!value) return ""
    value = value.replace(/\D/g,'')
    value = value.replace(/(\d{2})(\d)/,"($1) $2")
    value = value.replace(/(\d)(\d{4})$/,"$1-$2")
    return value
    }
    </script>


</x-guest-layout> --}}

<x-guest-layout>
<section class="flex flex-col md:flex-row h-screen items-center">

    <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
<img src="images/gato_cao.jpg"  alt="" class="w-full h-full object-cover">
    </div>

<div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
  flex items-center justify-center">

<div class="w-full h-100">

    <h1 class="text-xl md:text-2xl font-bold leading-tight mt-4">Faça seu cadastro</h1>

<form class="mt-2" action="#" method="POST" action="{{ route('register') }}">
@csrf
  <div>
    <label for="name" :value="__('Nome')" class="block text-gray-700">Nome</label>
    <input id="name"type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Digite seu nome" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required>
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
  </div>

  <div class="mt-2">
    <label for="email" :value="__('E-mail')" class="block text-gray-700">E-mail</label>
    <input type="email" name="email" :value="old('email')" required autocomplete="username" id="email" placeholder="Digite seu email" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
          focus:bg-white focus:outline-none" required>
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
  </div>

  <div>
    <label for="telefone" :value="__('Telefone')" class="block text-gray-700">Telefone</label>
    <input maxlength="15" onkeyup="handlePhone(event)" id="telefone" type="text" name="telefone" :value="old('telefone')" required autocomplete="telefone" placeholder="Digite seu telefone" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required>
    <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
  </div>

  <div>
    <label for="cidade" :value="__('Cidade')" class="block text-gray-700">Cidade</label>
    <input id="cidade"type="text" name="cidade" :value="old('cidade')" required autofocus autocomplete="name" placeholder="Digite seu nome" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required>
    <x-input-error :messages="$errors->get('cidade')" class="mt-2" />
  </div>

  <div class="flex items-center mb-4 mt-4">
    <input id="default-checkbox" type="checkbox" name="tipo_usuario" value="associacao" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="default-checkbox" class="ml-2 text-base font-medium text-gray-100 dark:text-gray-900">Marque esse campo se voçê for uma instituição</label>
</div>

<div>
    <label for="password" :value="__('Senha')" class="block text-gray-700">Senha</label>
    <input type="password"
    name="password"
    required autocomplete="new-password" id="password" placeholder="*******" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required>
    <x-input-error :messages="$errors->get('password')" class="mt-2" />
  </div>

  <div>
    <label for="password_confirmation" :value="__('Confirmação De Senha')" class="block text-gray-700">Confirme sua senha</label>
    <input type="password" id="password_confirmation"
    name="password_confirmation" required autocomplete="new-password" placeholder="*******" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required>
    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
  </div>

  <div class="text-right mt-2">
  @if (Route::has('password.request'))
    <a href="{{ route('password.request') }}" class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">
    {{ __('Esqueceu Sua Senha?') }}
    </a>
    @endif
  </div>

  <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
        px-4 py-3 mt-6">Cadastrar</button>
</form>

<hr class="my-6 border-gray-300 w-full">

<p class="mt-2">Já possui cadastro? <a href="{{ route('login') }}"
    class="text-blue-500 hover:text-blue-700 font-semibold">Entrar</a></p>

</div>
</div>

</section>

<script>
    const handlePhone = (event) => {
    let input = event.target
    input.value = phoneMask(input.value)
    }

  const phoneMask = (value) => {
    if (!value) return ""
    value = value.replace(/\D/g,'')
    value = value.replace(/(\d{2})(\d)/,"($1) $2")
    value = value.replace(/(\d)(\d{4})$/,"$1-$2")
    return value
    }
    </script>

</x-guest-layout>

