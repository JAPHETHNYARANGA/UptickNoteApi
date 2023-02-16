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
   

    // public function testLogin(){
      
    
    // $user = \App\Models\User::factory()->create();

    // Passport::actingAs($user);

    // $response = $this->post('/api/login', [
    //     'email' => $user->email,
    //     'password' => 'password',
    // ]);

    // $response->assertStatus(200);
    // $response->assertJson([
    //     'access_token' => true,
    // ]);
        
    // }

    public function testRegister(){
        $response = $this->post('/api/register', [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);
    
        $response->assertStatus(200);    
    }

    
}