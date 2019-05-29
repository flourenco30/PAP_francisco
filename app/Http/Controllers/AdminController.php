<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use App\Caracteristica;
use App\Servico;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $caracs = Caracteristica::all();
        $servis = Servico::all();
        return view('admin.dashboard', compact('users', 'caracs', 'servis'));
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateUser(Request $request)
    {
        $input = $request->all();

        // $user= User::findOrFail(Auth::user()->id)->update($input);

        // return redirect('/');

        $user = Auth::user();
    
        $user->contacto = request()->input('contacto');
        $user->nif = request()->input('nif');

        $user->save();

        $request->session()->flash('status', 'Your account has been updated!');
        return Redirect::to('/');
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAgendamento(Request $request)
    {
        $input = $request->all();

        $agenda = Auth::user();

        $totalHoras = request()->input('hora').request()->input('minutos');

        $agenda->Data  = request()->input('Data');
        $agenda->Hora  = $totalHoras;
        $agenda->Notas = request()->input('Notas');
        $agenda->user_id = Auth::user()->id;

    }

       /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCaracteristicas(Request $request)
    {
        $input = $request->all();
        Caracteristica::create($input);
        $carac = new Caracteristica();
        return Redirect::to('/admin/dashboard');

    }

           /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeServico(Request $request)
    {
        $input = $request->all();
        Servico::create($input);
        $carac = new Servico();
        return Redirect::to('/admin/dashboard');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexWeb()
    {
        $caracs = Caracteristica::all();
        $servis = Servico::all();
        return view('index', compact('caracs', 'servis'));
    }
}
