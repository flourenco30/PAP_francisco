<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use App\Caracteristica;
use App\ServicoCustom;
use App\Servico;
use App\Agendamento;
use App\AgendamentoCustom;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Validator;
use App\Rules\Exact;

class AgendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $input = $request->all();
        $validatedData = $request->validate([
            'data' => 'required|date|after:yesterday',
            'hora' => 'required|numeric|min:8|max:18',
            'minutos' => ['required', 'numeric', new Exact],
        ]);

        
        
        $agenda = new Agendamento();
        $agenda->Data    = $validatedData['data'];
        $agenda->Hora    = $validatedData['hora'].':'.$validatedData['minutos'].':'.'00';
        $agenda->Notas   = $request['notas'];
        $agenda->user_id = Auth::user()->id;
        $agenda->servi_id = Servico::findOrFail($request['Id'])->id;

        if($agenda->livre($agenda->Data, $agenda->Hora) == false){
            return response()->json('Hora indisponível neste dia.', 403);
        }

        $agenda->save();

        return response()->json(['success' => true, 'message' => 'Agendamento marcado com sucesso.'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    function registarAgendamento(Request $request){
        return response()->json($request->all(), 200);
    }


    // Guardar serviço customizado
    function guardarServicoCustomizado(Request $request){
        $input = $request->all();


        $serviC = new ServicoCustom();
        $serviC->Total    = $input['total'];
        $userID = Auth::user()->id;
        $serviC->user_id    = $userID;

        $serviC->save();

        foreach($input['caratetisticas'] as $caracID){
            $carac = Caracteristica::findOrFail($caracID);
            if(!$serviC->caracteristica()->find($carac->id))
            $serviC->caracteristica()->attach($carac->id);
        }
        return response()->json($request);
    }

    // Eliminar serviço customizado
    function destroyCustom($id){
        // delete
        $serviC = ServicoCustom::findOrFail($id);
        $serviC->delete();

        return Redirect::to('/');
    }

    public function regAgendamentoCustom(Request $request)
    {        
        $input = $request->all();
        $validatedData = $request->validate([
            'data_custom' => 'required|date|after:yesterday',
            'hora_custom' => 'required|numeric|min:8|max:18',
            'minutos_custom' => ['required', 'numeric', new Exact],
        ]);

        
        
        $agenda = new AgendamentoCustom();
        $agenda->Data    = $validatedData['data_custom'];
        $agenda->Hora    = $validatedData['hora_custom'].':'.$validatedData['minutos_custom'].':'.'00';
        $agenda->Notas   = $request['notas_custom'];
        $agenda->user_id = Auth::user()->id;
        $agenda->servico_custom_id = ServicoCustom::findOrFail($request['Id'])->id;

        if($agenda->livre($agenda->Data, $agenda->Hora) == false){
            return response()->json('Hora indisponível neste dia.', 403);
        }

        $agenda->save();

        return response()->json(['success' => true, 'message' => 'Agendamento marcado com sucesso.'], 201);
    }
}
