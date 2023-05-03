<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AuthController extends Controller
{
    public function unauthorized(){
        return response()->json([
            'error' => 'Não autorizado'
        ], '401');
    }

    public function register(Request $request){
        $returnArray = ['msg' => ''];

        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'email' => 'required|email|unique:users,email'
        ]);

        if(!$validator->fails()){
            $name = $request->input('username');
            $password = $request->input('password');
            $email = $request->input('email');

            $hash = password_hash($password, PASSWORD_DEFAULT);
            $newUser = new User();
            $newUser->name = $name;
            $newUser->password = $hash;
            $newUser->email = $email;
            $newUser->save();

            $returnArray['msg'] = 'Cadastro realizado com sucesso!';
        }else{
            $returnArray['msg'] = $validator->errors()->first();
            return $returnArray;
        }

        return $returnArray;
    }
}
