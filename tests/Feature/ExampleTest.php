<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

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

    public function testHomePageText()
    {
        $response = $this->get('/');

        $response->assertSee('Task 清单');
    }

    /**
     * @test
     */
    public function 测试()
    {
        $this->assertTrue(true);
    }
}
