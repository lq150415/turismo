<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['web']], function () {

Route::get('/','UsuarioController@index');
Route::get('/admin','AdminController@index');

Route::get('/iniciou','UsuarioController@principal');
 Route::get('/{lang}', function ($lang) {
        session(['lang' => $lang]);
        return \Redirect::back();
    })->where([
        'lang' => 'en|es'
    ]);
Route::get('trafico','UsuarioController@trafico');
Route::get('calendario','UsuarioController@calendario');
Route::get('/index','UsuarioController@principal');
Route::get('registrar',['as'=>'registrar','uses'=>'UsuarioController@regusu']);
Route::post('regusu','UsuarioController@regusuario');
Route::get('login', ['as'=>'login','uses'=>'Auth\AuthController@getLogin']);
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');
Route::group(['middleware' => 'auth'], function () {
Route::get('/inicio','AdminController@index');
Route::get('atractivoadmin',['as'=>'atractivoadmin','uses'=>'AdminController@atractivo']);
Route::post('guardaratractivo','AdminController@store');
Route::post('guardarcultura','AdminController@storecultura');
Route::get('culturaadmi',['as'=>'culturaadmi','uses'=>'AdminController@cultura']);
});
Route::get('atractivoturistico','AndroidController@atractivo');
});
