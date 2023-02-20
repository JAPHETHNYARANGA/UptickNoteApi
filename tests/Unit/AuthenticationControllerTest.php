<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\Passport;

class AuthenticationControllerTest extends TestCase
{
    use RefreshDatabase;


   

    public function testRegister()
    {
        $response = $this->post('/api/register', [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'password',

        ]);

        $response->assertStatus(200);
    }

    public function testLogin()
    {
       

        $user = User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('password'),
        ]);

        $email = $user->email;
        $user = User::where('email', $email)->firstOrFail();
        $token = $user->createToken('Api Token')->accessToken;

        $response = $this->post('/api/login', [
            'email' => 'johndoe@example.com',
            'password' => 'password',
            'token' => $token
        ]);

        $response->assertStatus(200);

      
    }
}