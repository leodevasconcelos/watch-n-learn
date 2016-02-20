<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProfileTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * Test Profile Updating.
     *
     * @return void
     */
    public function testProfileUpdateWithoutAuth()
    {
        $this->visit('/dashboard')
            ->seePageIs('/login');
    }

    /**
     * Test Profile Updating.
     *
     * @return void
     */
    public function testProfileUpdate()
    {
        $user = factory(Learn\User::class)->create();
        $this->actingAs($user)
            ->visit('/dashboard')
            ->see('Update Your Profile')
            ->type('Ganga Christopher', 'name')
            ->type('gangachris', 'username')
            ->press('Save')
            ->seeInDatabase('users', ['username' => 'gangachris']);
    }
}
