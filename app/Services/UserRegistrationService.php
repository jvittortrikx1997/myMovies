<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserRegistrationService
{
    public function register(array $data): array
    {
        $validator = Validator::make($data, [
            'username' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'email' => 'required|email|unique:users,email'
        ]);

        if ($validator->fails()) {
            return [
                'msg' => $validator->errors()->first(),
                'type' => 'error'
            ];
        }

        $name = $data['username'];
        $password = $data['password'];
        $email = $data['email'];

        $hash = password_hash($password, PASSWORD_DEFAULT);
        $newUser = new User();
        $newUser->name = $name;
        $newUser->password = $hash;
        $newUser->email = $email;
        $newUser->save();

        return [
            'msg' => 'Cadastro realizado com sucesso!',
            'type' => 'success'
        ];
    }
}
