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

Route::get('/', function () {
    return view('welcome');
});

Route::view('pageAdmin','pageAdmin');
//  Route::get('/', function () {
//   return view('accueil'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rubrique

Route::get('rubriques/politique', 'RubriquesController@politique');

Route::get('rubriques/economie', 'RubriquesController@economie');

//Admin

Route::get('admin/enregistrer', 'AdminsController@enregistrer');