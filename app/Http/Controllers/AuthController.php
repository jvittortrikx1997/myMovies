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

    public function showLoginForm(){
        return view('login');
    }

    public function register(Request $request){
        $returnArray = ['msg' => '', 'type' => ''];

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
            $returnArray['type'] = 'success';
        }else{
            $returnArray['msg'] = $validator->errors()->first();
            $returnArray['type'] = 'error';
            return view('cadastro', $returnArray);
        }

        return view('cadastro', $returnArray);
    }

    public function login(Request $request){
        $arrayReturn = ['error' => '', 'type' => ''];

        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        if(!$validator->fails()){
            $username = $request->input('username');
            $password = $request->input('password');

            $token = auth()->attempt([
                'name' => $username,
                'password' => $password
            ]);

        }else{
            $arrayReturn['error'] = $validator->errors()->first();
            $arrayReturn['type'] = 'error';
            return $arrayReturn;
        }

        return $arrayReturn;
    }
}
