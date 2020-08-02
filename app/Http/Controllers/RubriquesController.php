<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RubriquesController extends Controller
{
  public function politique(){
      return \view('rubriques.politique');
  }

public function economie(){

    return \view('rubriques.economie');
} 


}