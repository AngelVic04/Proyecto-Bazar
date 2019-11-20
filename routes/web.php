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
    return view('welcome');
});

Route::get('/inicio', function (){
    return view('/inicio');
  });
  
  Route::get('/nosotros', function (){
    return view('/nosotros');
  });
  
  Route::get('/catalago', function (){
    return view('/catalago');
  });
  
  Route::get('/contacto', function (){
    return view('/contacto');
  });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::resource('/encargado','EncargadoController')->middleware('auth');
Route::resource('/password', 'PasswordController')->middleware('auth');
Route::resource('/area','AreasController')->middleware('auth');
Route::resource('/empezar','BienvenidoController')->middleware('auth');