<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductFeedTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasic()
    {
        $response = $this->json('GET', '/api/products');

        $response
            ->assertStatus(200);
    }
}
