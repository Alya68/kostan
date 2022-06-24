<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
<<<<<<< HEAD
    public function testBasicTest()
=======
    public function test_example()
>>>>>>> 98021bc (halaman semua kos)
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
