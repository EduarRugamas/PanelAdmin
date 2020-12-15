<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', 'NoticiasPublicidadController@index');
Route::get('/',function (){
    return view('Home.home');
});
Route::resource('/noticias','NoticiasPublicidadController');

/* Route::get('/create', function (){
    return view('Panel.Noticias.create');
}); */
Route::get('/card', function (){
    return view('Panel.card');
});

Route::get('/doctores', function (){
    return view('Doctores.create');
})->name('Form.doctores');

Route::resource('/publicidad','AdsController');
