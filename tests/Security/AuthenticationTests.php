<?php

namespace Tests\Security;

use Tests\TestCase;

class AuthenticationTests extends TestCase
{
    public function test_user_can_authenticate()
    {
        $user = User::factory()->create([
            'password' => bcrypt($password = 'i-love-laravel'),
        ]);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => $password,
            //
        ]);

        $this->assertAuthenticatedAs($user);
    }
}
