<?php

namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserModelTest extends TestCase
{
  

    public function testusername(){
        $user = new User();
        $user->name = 'John Doe';
        $this->assertEquals('John Doe',$user->name);
    }

    public function testEmail(){
        $user = new User();
        $user->email = 'johndoe@gmail.com';
        $this->assertEquals('johndoe@gmail.com', $user->email);
    }
}