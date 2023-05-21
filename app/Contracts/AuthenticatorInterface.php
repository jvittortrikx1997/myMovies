<?php

namespace App\Contracts;

interface AuthenticatorInterface
{
    public function login(Request $request);
    public function register(Request $request);
}
