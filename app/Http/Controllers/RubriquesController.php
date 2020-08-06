<?php

namespace App\Http\Controllers;

use App\Actualite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RubriquesController extends Controller
{

  public function index(){
    $actualites= Actualite::all();

    return view('welcome',compact('actualites'));

  }
 




}