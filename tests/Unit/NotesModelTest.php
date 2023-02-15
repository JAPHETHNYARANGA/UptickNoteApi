<?php

namespace Tests\Unit;

use App\Models\notes;
use PHPUnit\Framework\TestCase;

class NotesModelTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    public function testnotesBody(){
        $notes = new notes();
        $notes->body = "this is the body of my notes";
        $this->assertEquals("this is the body of my notes", $notes->body);
    }

    public function testnotesTitle(){
        $notes = new notes();
        $notes->title = "this is the notes title";
        $this->assertEquals("this is the notes title", $notes->title);
    }
}