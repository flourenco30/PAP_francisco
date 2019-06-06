<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use App\Caracteristica;
use App\Servico;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Validator;

class ServicoController extends Controller
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
        Servico::create($input);
        return Redirect::to('/admin/dashboard');
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
    public function update($id)
    {
        // store
        $servi = Servico::findOrFail(request()->Id);
        $servi->nome       = request()->nome;
        $servi->preco      = request()->preco2;
        $servi->save();

        return response()->json(['success' => true, 'message' => 'Caracteristica editada com sucesso.'], 201);
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

        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function assocCaracStore()
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getCaracServi(Request $request)
    {
        $input = $request->all();

        $servico = Servico::findOrFail($input['servico']);

        foreach($input['checkedIds'] as $checkedId){
            $carac = Caracteristica::findOrFail($checkedId);
            if(!$servico->caracteristica()->find($carac->id))
            $servico->caracteristica()->attach($carac->id);
        }

        $servico->save();
    }
}
