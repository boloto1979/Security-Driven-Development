<?php

namespace App\Security;

use Illuminate\Support\Facades\Auth;

class AuthenticationService
{
    public function authenticate($email, $password)
    {
        return Auth::attempt(['email' => $email, 'password' => $password]);
    }
}
