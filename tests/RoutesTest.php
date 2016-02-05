<?php

class RoutesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDefaultRoute()
    {
        $this->visit('/')
            ->see('Watch n Learn');
    }
}
