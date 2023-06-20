<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserLoginService
{
    public function login(array $data): array
    {
        $validator = Validator::make($data, [
            'username' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return [
                'error' => $validator->errors()->first(),
                'type' => 'error'
            ];
        }

        $username = $data['username'];
        $password = $data['password'];

        $token = auth()->attempt([
            'name' => $username,
            'password' => $password
        ]);

        if (!$token) {
            return [
                'error' => 'Usuário e/ou senha inválidos.',
                'type' => 'error'
            ];
        }

        $user = auth()->user();
        $properties = User::select(['id', 'name'])->where('name', $user['name'])->get();

        $response = [
            'token' => $token,
            'user' => $user,
        ];

        $response['user']['properties'] = $properties;

        return $response;
    }
}
