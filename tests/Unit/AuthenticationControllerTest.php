<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\Concerns\InteractsWithAuthentication;
use Illuminate\Foundation\Testing\Concerns\MakesHttpRequests;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\TestCase;

class AuthenticationControllerTest extends TestCase
{
    use MakesHttpRequests, InteractsWithAuthentication, DatabaseTransactions;
   

    public function testLogin(){
        $user = User::factory()->create([
            'email' => 'johnDoe@example.com',
            'password' => Hash::make('password'),
        ]);
    
        $response = $this->post('/login', [
            'email' => 'johnDoe@example.com',
            'password' => 'password',
        ]);
    
        // $response->assertRedirect('/home');
        $this->assertAuthenticatedAs($user);
        
    }

    public function testRegister(){
        $user = User::factory()->create([
            'name'=>'johnDoe',
            'email' => 'johnDoe@example.com',
            'password' => Hash::make('password'),
        ]);
    
        $response = $this->post('api/register', [
            'email' => 'johnDoe@example.com',
            'password' => 'password',
        ]);
    
        // $response->assertRedirect('/home');
        $this->assertAuthenticatedAs($user);
        
    }
}