<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cheetos extends Controller
{
   function inicio(){
        return view('login');
    }
    function pola(Request $request){
        $usuario = $request->input('inusername');
        $contra = $request->input('inpassword');
        if ($usuario==0) {
            return view('raton');
        }
        else if ($contra==0) {
            return view('raton');
        }
        else {
            return view('raton');
        }
    }
}