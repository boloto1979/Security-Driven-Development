<?php

namespace App\Security;

use Illuminate\Support\Facades\Gate;

class AuthorizationService
{
    public function canUserPerformAction($user, $action, $object = null)
    {
        return Gate::forUser($user)->allows($action, $object);
    }
}
