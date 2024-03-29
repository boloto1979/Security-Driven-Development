<?php

namespace Tests\Security;

use Tests\TestCase;

class DataValidationTests extends TestCase
{
    public function test_data_validation()
    {
        $response = $this->post('/register', [
            'name' => 'John Doe',
            'email' => 'not-an-email',
            'password' => '123456',
            'password_confirmation' => '123456'
            //
        ]);

        $response->assertSessionHasErrors('email');
    }
}
