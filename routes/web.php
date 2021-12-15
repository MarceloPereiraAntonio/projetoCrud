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

'Route'::get('/', function () {
    return view('welcome');
});
'Route'::middleware(['auth'])->group(function(){
    'Route'::get('/lista', 'ListaController@index')->name('lista.index');
    'Route'::get('/lista/create', 'Listacontroller@create')->name('lista.create');
    'Route'::post('/lista', 'Listacontroller@store')->name('lista.store');
    'Route'::get('/lista/edit/{id}', 'Listacontroller@edit')->name('lista.edit');
    'Route'::put('/lista/{id}', 'Listacontroller@update')->name('lista.update');
    'Route'::delete('/lista/{id}', 'Listacontroller@distroy')->name('lista.distroy');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
