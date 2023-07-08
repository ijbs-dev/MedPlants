<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Adopt;
use App\Models\Port;
use App\Models\Sex;
use App\Models\User;
use App\Models\Type;
use App\Models\Adress;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUpdatePetFormRequest;
use Intervention\Image\Facades\Image;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //private $pet;

    public function index()
    {

         $pets = Pet::with('user.adress')->get();

         return view('pets.index',compact('pets'));

        //$pets = Pet::all()->reverse();

        //return view('pets.index',compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        $ports = Port::all();
        $sexes = Sex::all();
        return view('pets.create',compact('types','ports','sexes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdatePetFormRequest $request)
    {

       $data = $request->all();

       //$data =  $request->validated();

        $data['user_id'] = auth()->user()->id;

        $id = $data['user_id'];

        // if ($request->hasFile('fotos') || $request->fotos->isValid()) {
        //     $caminho_imagem =  $request->fotos->store("pets", "public");
        // }
        // $data['fotos'] = $caminho_imagem;

        $image_path = $request->file('fotos')->store('pets', 'public');
        $data['fotos'] = $image_path;
        
        $register = Pet::create($data);

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
        $types = Type::all();
        //$this->pets_show = Pet::find($id);
        return view('pets.show', compact('pet','types'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!$pet = Pet::find($id)) {
            return redirect()->route('pets.userPets');
        }
        $types = Type::all();
        $ports = Port::all();
        $sexes = Sex::all();
        //$types = Type::find($pet->type_id);
        // $types = Type::where('id', $pet->type_id)->first();
        // $ports = Port::find($pet->port_id);
        // $sexes = Sex::find($pet->sex_id);

        return view('pets.edit',compact('pet','types','ports','sexes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdatePetFormRequest $request, $id)
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

        return redirect()->route('pets.meusPets');
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

        return redirect()->route('pets.meusPets')->with('success', 'Pet excluído com sucesso!');
    }

    public function meusPets()
    {

        $user = auth()->user();
        $id = $user->id;

        $user = User::find($id);
        $meusPets = $user->pets()->latest()->get();

        return view('pets.meuspets', compact('meusPets'));
    }

    public function agendamentos(Request $request)
    {

       $usuarioLogadoId = Auth::id();
       $petId = $request->input('pet_id');


    // Verifique se o ID do usuário logado é o mesmo que o ID do proprietário do animal de estimação
    $pet = Pet::findOrFail($petId);


    if ($pet->user_id == $usuarioLogadoId) {
        return back()->with('error', 'Você não pode adotar seu próprio animal de estimação!');
    }

    $agendamentoExistente = DB::table('schedules')
        ->where('pet_id', $petId)
        ->exists();

    if ($agendamentoExistente) {
        return back()->with('error', 'Este pet já está agendado.');
    }


    $data = $request->all();
    Schedule::create($data);


    return redirect()->route('pets.agendamentos')->with('sucesso','Agendamento feito com sucesso');
    }

    public function meusAgendamentos(Request $request)
    {
        // Obtém o usuário logado
        $usuarioLogado = Auth::user();

        // Obtém todos os registros da tabela "Schedule" que pertencem ao usuário logado
         $schedules = Schedule::where('user_id', $usuarioLogado->id)->get();

         // Exibe os dados na view
         return view('pets.agendamentos', ['schedules' => $schedules]);
    }

    public function contatos()
    {
        return view('pets.contatos');
    }
}
