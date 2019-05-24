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

Route::get('/', function () {
    return view('index');
});

// Route::get('/login', function(){
//     return View('login'); // Your Blade template name
// });

// Route::get('/register', function(){
//     return View('registo'); // Your Blade template name
// });

Auth::routes();

Route::get('/admin/dashboard', function(){
    return view('admin.dashboard');
})->middleware('admin');
