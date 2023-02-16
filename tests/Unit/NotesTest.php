<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;

use App\Models\User;
use Laravel\Passport\Passport;
use Tests\TestCase;


class NotesTest extends TestCase
{


    public function testaddnote()
    {
        Passport::actingAs(
            User::factory()->create(),
            ['create-servers']
        );

        $response = $this->post('/api/addnote',[
            'title'=>'title',
            'body'=>'body'
        ]);
 
        $response->assertStatus(200);
    }

    public function testgetnote()
    {
        Passport::actingAs(
            User::factory()->create(),
            ['create-servers']
        );
        $response = $this->get('/api/getnotes');
 
        $response->assertStatus(200);
    }

    public function testspecificgetnote(){
        Passport::actingAs(
            User::factory()->create(),
            ['create-servers']
        );

        $response = $this->get('/api/getnote/1');
 
        $response->assertStatus(200);
        
    }

    public function testspecificdeletenote(){
        Passport::actingAs(
            User::factory()->create(),
            ['create-servers']
        );

        $response = $this->get('/api/deletenote/1');
 
        $response->assertStatus(200);
        
    }

    // will check later deletes data from db instead
    
    // public function testspecificupdatenote(){
    //     Passport::actingAs(
    //         User::factory()->create(),
    //         ['create-servers']
    //     );

    //     $response = $this->put('/api/updatenote/1',[
    //         'title'=>'title',
    //         'body'=>'body'
    //     ]);
 
    //     $response->assertStatus(200);
        
    // }
}