<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function unauthorized(){
        return response()->json([
            'error' => 'Não autorizado'
        ], '401');
    }

    public function register(Request $request){
        $returnArray = ['error' => ''];

        dd($request->all());


        return $returnArray;
    }
}
