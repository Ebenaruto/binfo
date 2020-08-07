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

Route::get('/', 'RubriquesController@index');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('pageAdmin','pageAdmin');
//  Route::get('/', function () {
//   return view('accueil'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rubrique


Route::get('rubriques/politique', 'AdminsController@politique');

Route::get('rubriques/economie', 'AdminsController@economie');
Route::get('rubriques/societe', 'AdminsController@societe');
Route::get('rubriques/cooperation', 'AdminsController@cooperation');
Route::get('rubriques/culture', 'AdminsController@culture');


//Admin

Route::get('admin/enregistrer', 'AdminsController@create');
Route::get('admin', 'AdminsController@index');
Route::get('admin/show', 'AdminsController@show');
Route::post('admin', 'AdminsController@store');
Route::get('admin/{actualite}/edit', 'AdminsController@edit');
Route::patch('admin/{actualite}','AdminsController@update'); 