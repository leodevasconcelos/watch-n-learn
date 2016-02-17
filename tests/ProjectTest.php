<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProjectTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * Test creation of a project
     *
     * @return void
     */
    public function testCreateProject()
    {
        $user = factory(Learn\User::class)->create();

        $this->actingAs($user)
            ->visit('/dashboard')
            ->type('Sorry, Justin Beiber', 'title')
            ->select('other', 'category')
            ->type('https://www.youtube.com/watch?v=fRh_vgS2dFE', 'url')
            ->type('This is JB\'s song Sorry', 'description')
            ->press('Upload')
            ->seeInDatabase('projects', ['url' => 'fRh_vgS2dFE']);
    }
}
