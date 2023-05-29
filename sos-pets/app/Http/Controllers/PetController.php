<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\User;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $pets = Pet::all();

        return view('pets.index', ['pets' => $pets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('pets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $data['user_id'] = auth()->user()->id;

        $id = $data['user_id'];

        //checa se a imagem veio na requisição e se houve erro no upload
        if ($request->hasFile('fotos') || $request->fotos->isValid()) {
            $caminho_imagem =  $request->fotos->store("pets", "public");
        }
        $data['fotos'] = $caminho_imagem;


        $register = Pet::create($data);

        //return redirect()->back();
        return redirect()->route('pets.index')->with('success', 'Pet cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if (!$pet = Pet::find($id)) {
            return redirect()->route('pets.index');
        }
        return view('pets.show', compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $pet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pet $pet)
    {
        $pet->update([
            'nome' => $request->nome,
            'idade' => $request->idade,
            'especie' => $request->especie,
            'raca' => $request->raca,
            'porte' => $request->porte,
            'sexo' => $request->sexo,
            'descricao' => $request->descricao,
            'fotos' => $request->fotos,

        ]);

         //checa se a imagem veio na requisição e se houve erro no upload
         if ($request->hasFile('fotos') || $request->fotos->isValid()) {
            $caminho_imagem =  $request->fotos->store("pets", "public");
        }
        $data['fotos'] = $caminho_imagem;

        return redirect(route('pets.update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet)
    {
        $pet->delete();
        return redirect(route('pets.userPets'));
    }

    public function userPets()
    {
        $user = auth()->user();
        $id = $user->id;
        $user = User::find($id);
        $userPets = $user->pets()->get();

        return view('pets.userpets', compact('userPets'));
    }
}
