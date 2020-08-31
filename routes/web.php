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


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/client/add', 'ClientController@add')->name('addclient');
Route::get('/client/edit/{id}', 'ClientController@edit')->name('editclient');
Route::post('/client/update', 'ClientController@update')->name('updateclient');
Route::post('/client/ajouter', 'ClientController@ajouter')->name('ajouterclient');
Route::get('/client/delete/{id}', 'ClientController@delete')->name('deleteclient');
Route::get('/client/getall', 'ClientController@getAll')->name('getallclient');

Route::get('/compte/add', 'CompteController@add')->name('addcompte');
Route::get('/compte/edit/{id}', 'CompteController@edit')->name('editcompte');
Route::post('/compte/update', 'CompteController@update')->name('updatecompte');
Route::post('/compte/ajouter', 'CompteController@ajouter')->name('ajoutercompte');
Route::get('/compte/delete/{id}', 'CompteController@delete')->name('deletecompte');
Route::get('/compte/getall', 'CompteController@getAll')->name('getallcompte');
