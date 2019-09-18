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
Route::resource('contacts', 'ContactController');
Route::GET('/contacts', 'ContactController@index');
Route::get('/contacts.create', 'ContactController@create');
Route::get('/contacts{contact}', 'ContactController@show');
Route::get('/contacts/{contact}.edit', 'ContactController@edit');
Route::put('/contacts/{contact}', 'ContactController@update');
Route::get('/contacts/{contact}', 'ContactController@destroy');

