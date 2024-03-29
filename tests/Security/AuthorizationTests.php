<?php

namespace Tests\Security;

use Tests\TestCase;

class AuthorizationTests extends TestCase
{
    public function test_user_can_access_a_route_requires_authorization()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        
        $response = $this->get('/protected-route');

        $response->assertStatus(200);
    }
}
