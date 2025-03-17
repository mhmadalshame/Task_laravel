<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_register() {
        $response = $this->post('/api/register', [
            'name' => 'mhmad Altki',
            'email' => 'mhmad@gmail.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertStatus(201);
    }

   
}