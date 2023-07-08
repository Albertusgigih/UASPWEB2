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
Route::get('/tamu', 'TamuController@index');

Route::get('/tamu/create', 'TamuController@create'); 
Route::post('/tamu', 'TamuController@store');

Route::get('tamu/{id}/edit', 'TamuController@edit'); 
Route::patch('tamu/{id}', 'TamuController@update');

Route::delete('tamu/{id}', 'TamuController@destroy');

Route::get('/tamu/search', 'TamuController@search')->name('search');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
