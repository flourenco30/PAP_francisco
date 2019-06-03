<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use App\Caracteristica;
use App\Servico;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Validator;

class CaracteristicasController extends Controller
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
        Caracteristica::create($input);
        $carac = new Caracteristica();
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
        $rules = array(
            'desc'       => 'required',
            'preco'      => 'required|numeric',
        );
        $validator = Validator::make(Input::all(), $rules);
    
        if ($validator->fails()) {
            Session::flash('message', 'Erro ao atualizar a caracteristica!');
            return Redirect::to('/admin');
        } else {
            // store
            $carac = Caracteristica::findOrFail($id);
            $carac->desc       = Input::get('desc');
            $carac->preco      = Input::get('preco');
            $carac->save();

            // redirect
            Session::flash('message', 'Caracteristica atualizada com sucesso!');
            return Redirect::to('/admin');
        }
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
}
