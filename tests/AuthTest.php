<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * Test Regisering a new user
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
            ->see('Ganga Christopher')
            ->seeInDatabase('users', ['email' => 'ganga.chris@gmail.com']);
    }

    /**
     * Test Login a new user
     */
    public function testLoginUser()
    {
        $this->visit('/register')
            ->type('Ganga Christopher', 'name')
            ->type('gangachris', 'username')
            ->type('ganga.chris@gmail.com', 'email')
            ->type('123456789', 'password')
            ->type('123456789', 'password_confirmation')
            ->press('Register')
            ->visit('/logout')
            ->visit('/login')
            ->type('ganga.chris@gmail.com', 'email')
            ->type('123456789', 'password')
            ->press('Login')
            ->see('Ganga Christopher');
    }
}
