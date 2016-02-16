<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RoutesTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * Test landing page route.
     *
     * @return void
     */
    public function testDefaultRoute()
    {
        $this->visit('/')
            ->see('Watch n Learn');
    }

    public function testRegisterRoute()
    {
        $this->visit('/register')
            ->see('Register');
    }

    public function testLoginRoute()
    {
        $this->visit('/login')
            ->see('Login');
    }
}
