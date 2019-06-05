<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', 'HomePageController@index');

Route::resource('/admin/dashboard', 'AdminController')->middleware('admin');

Route::post('/alter-user', 'UsersController@update');

Route::post('/criar-carac', 'CaracteristicasController@store');

Route::post('/criar-servi', 'ServicoController@store');

Route::get('/api/eliminar-custom/{servicustom}', 'AgendamentoController@destroyCustom');

Route::post('/api/reg-agenda', 'AgendamentoController@store');

Route::post('/api/assoc-carac', 'ServicoController@assocCaracStore');

Route::post('/api/edit-carac/{id}', 'CaracteristicasController@update');

Route::post('/api/edit-servi/{id}', 'ServicoController@update');

Route::post('/api/servico-custom', 'AgendamentoController@guardarServicoCustomizado');

Route::middleware(['admin'])->group(function(){
    //Caracteristicas Ações
    Route::get('/admin/caracteristicas/{caracteristica}/delete', function($carac){
        $carac=App\Caracteristica::findOrFail($carac);
        $carac->delete();
        return back();
    });
    
    Route::get('/admin/caracteristicas/{caracteristica}/force-delete', function($carac){
        $carac=App\Caracteristica::withTrashed()->findOrFail($carac);
        $carac->forceDelete();
        return back();
    });

    Route::get('/admin/caracteristicas/{caracteristica}/restore', function($carac){
        $carac=App\Caracteristica::withTrashed()->findOrFail($carac);
        $carac->restore();
        return back();
    });
});

Route::middleware(['admin'])->group(function(){
    //Servicos Ações
    Route::get('/admin/servicos/{servico}/delete', function($servi){
        $servi=App\Servico::findOrFail($servi);
        $servi->delete();
        return back();
    });
    
    Route::get('/admin/servicos/{servico}/force-delete', function($servi){
        $servi=App\Servico::withTrashed()->findOrFail($servi);
        $servi->forceDelete();
        return back();
    });

    Route::get('/admin/servicos/{servico}/restore', function($servi){
        $servi=App\Servico::withTrashed()->findOrFail($servi);
        $servi->restore();
        return back();
    });
});

Route::middleware(['admin'])->group(function(){
    //User Ações
    Route::get('/admin/users/{user}/delete', function($user){
        $user=App\models\User::findOrFail($user);
        $user->delete();
        return back();
    });
    
    Route::get('/admin/users/{user}/force-delete', function($user){
        $user=App\models\User::withTrashed()->findOrFail($user);
        $user->forceDelete();
        return back();
    });

    Route::get('/admin/users/{user}/restore', function($user){
        $user=App\models\User::withTrashed()->findOrFail($user);
        $user->restore();
        return back();
    });
});

