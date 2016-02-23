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

    /**
     * Test for register route.
     *
     * @return void
     */
    public function testRegisterRoute()
    {
        $this->visit('/register')
            ->see('Register');
    }

    /**
     * Test for login route.
     *
     * @return void
     */
    public function testLoginRoute()
    {
        $this->visit('/login')
            ->see('Login');
    }

    /**
     * Test for Dashboard route.
     *
     * @return void
     */
    public function testDashboardRouteWithoutLogin()
    {
        $this->visit('/dashboard')
            ->seePageIs('/login');
    }
}
