<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardComponentTest extends TestCase
{
    /**
     * Vue Dashboard & Grid components test
     *
     * @return void
     */
    public function testVueComponentsInOrder()
    {
        $response = $this->get('/dashboard');

        $response->assertStatus(200);
        $response->assertSee('Dashboard');
        $response->assertSee('Grid');

        $response->assertSeeInOrder(['Dashboard', 'Grid']);
    }
}
