<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRegisteringUser()
    {
        $this->visit('/register')
            ->type('Ganga Christopher', 'name')
            ->type('gangachris', 'username')
            ->type('ganga.chris@gmail.com', 'email')
            ->type('123456789', 'password')
            ->type('123456789', 'password_confirmation')
            ->press('Register')
            ->seePageIs('/')
            ->seeInDatabase('users', ['email' => 'ganga.chris@gmail.com']);
    }
}
