<?php

namespace App\Http\Controllers\rubrique;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PolitiquesController extends Controller
{
    public function politique(){

        return \view('rubriques.politique',compact('politique'));
    }
}
