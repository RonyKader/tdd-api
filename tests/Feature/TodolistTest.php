<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodolistTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        // Preperation / prepare
        $this->withoutExceptionHandling();
        // Action / Perform
        $response = $this->get('api/todo-list');

        // Assertion / predict
        $response->assertStatus(200);
    }
}
