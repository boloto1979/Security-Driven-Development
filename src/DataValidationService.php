<?php

namespace App\Security;

use Illuminate\Support\Facades\Validator;

class DataValidationService
{
    public function validate(array $data, array $rules)
    {
        return Validator::make($data, $rules)->validate();
    }
}
