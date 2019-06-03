<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use App\Caracteristica;
use App\Servico;
use App\Agendamento;
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
            'data' => 'required|date',
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
            return response()->json(['success' => false, 'message' => 'Hora indisponível neste dia.'], 403);
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
}
