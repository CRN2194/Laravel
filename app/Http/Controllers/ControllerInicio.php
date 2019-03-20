<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerInicio extends Controller
{
    public function Inicio(){
        return view('Inicio');
    }
}
