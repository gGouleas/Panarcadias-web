<?php

namespace Tests\Feature;

use Tests\TestCase;

class AppRoutingTest extends TestCase
{
    public function test_homepage_Get()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_messages_Get()
    {
        $response = $this->get('/messages');

        $response->assertStatus(302);
    }
}
