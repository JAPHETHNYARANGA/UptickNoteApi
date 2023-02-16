<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\Passport;

class AuthenticationControllerTest extends TestCase
{
    use RefreshDatabase;


    public function testLogin()
    {


        $token = Passport::actingAs(
            User::factory()->create(),
            ['create-servers']
        );

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->post('/api/login', [
            'email' => 'nyaranga4@gmail.com',
            'password' => '123456',
        ]);

        $response->assertStatus(200);

      
    }

    public function testRegister()
    {
        $response = $this->post('/api/register', [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'password',

        ]);

        $response->assertStatus(200);
    }
}