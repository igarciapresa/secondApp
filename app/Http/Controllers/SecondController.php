<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondController extends Controller
{
    function home(Request $request){
        $nombre = $request->input('nombre');
        $clave  = $request->input('clave');
        if(strcasecmp($nombre, 'pepe') === 0 &&
            strcasecmp($clave, 'pepe') === 0){
                return view('page4');
        }else{
            return redirect('login');
        }
    }
}