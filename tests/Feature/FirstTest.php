<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FirstTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);

        $text = 'Hello World';
        $this->assertEquals('Hello World', $text);

        $this->assertNotEmpty('Hello World');
    }
}
