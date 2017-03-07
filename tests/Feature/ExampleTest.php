<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testPing()
    {
        $response = $this->get('/ping');

        $response->assertJson(['alive' => true]);
    }

    public function testContact()
    {
        $response = $this->get('/contact');

        $response->assertSee(('me'));
    }

}
