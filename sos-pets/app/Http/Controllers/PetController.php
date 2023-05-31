<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Adopt;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    private $pets_show;

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
        return redirect()->route('pets.userPets')->with('success', 'Pet cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if (!$pet = Pet::find($id)) {
            return redirect()->route('pets.index');
        }
        $this->pets_show = Pet::find($id);
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
    public function update(Request $request, $id)
    {
        //$data = $request->only('nome', 'idade', 'especie', 'raca', 'porte', 'sexo', 'descricao');
        if (!$pet = Pet::find($id)) {
            return redirect()->back();
        }

        $data = $request->all();

        if ($request->hasFile('fotos')) {
            if(Storage::exists($pet->fotos)){
                Storage::delete($pet->fotos);
            }
            $caminho_imagem =  $request->fotos->store("pets", "public");
            $data['fotos'] = $caminho_imagem;
        }



        //Pet::where('id', $id)->update($data);

        $pet->update($data);

        return redirect()->route('pets.userPets');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if (!$pet = Pet::find($id)) {
            return redirect()->back();
        }
        //$pet = Pet::find($id);
        if(Storage::exists($pet->fotos)){
            Storage::delete($pet->fotos);
        }

        $pet->delete();

        return redirect()->route('pets.userPets')->with('success', 'Pet excluído com sucesso!');
    }

    public function userPets()
    {

        $user = auth()->user();
        $id = $user->id;

        $user = User::find($id);
        $userPets = $user->pets()->get();

        return view('pets.userpets', compact('userPets'));
    }

    public function adotar(Request $request)
    {
        $user = auth()->user();
        $id = $user->id;

        $pet = Pet::find($id);

        $data = $request->all();
        $register = Adopt::create($data);

        //return redirect()->back();
        //return redirect()->route('pets.show')->with('success', 'Agendado com sucesso!');
        return view('pets.show', compact('pet'));
    }
}
