<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;

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

    public function testDashboardRouteWithoutLogin()
    {
        $this->visit('/dashboard')
            ->seePageIs('/login');
    }
}
