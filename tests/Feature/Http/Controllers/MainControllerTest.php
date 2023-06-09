<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MainControllerTest extends TestCase
{
    public function test_index_page_laods()
    {
        $response = $this->get('/');

        $response->assertStatus(200);        
    }

    public function test_index_page_loads_template()
    {
        $response = $this->get('/');

        $response->assertViewIs('main.index');
    }
}
