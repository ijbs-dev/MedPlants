<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Adress;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        //$cidade = $request->only('cidade');

        // Agora, $campoSeparado conterá apenas o campo específico do request

        //$data = $request->except('cidade');

        //dd($request);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'telefone' => ['required'],
            'cidade' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'tipo_usuario' => isset($request->tipo_usuario),
            'cidade' => $request->cidade,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

         // Salvar o endereço
         $endereco = new Adress();
         $endereco->cidade = $request->cidade;

         // Associar o endereço ao usuário
         $user->adress()->save($endereco);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
