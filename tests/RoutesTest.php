<?php

class RoutesTest extends TestCase
{
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
}
