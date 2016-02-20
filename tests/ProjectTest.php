<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProjectTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * Test creation of a project.
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

    public function testViewCorrectProject()
    {
        $project = factory(Learn\Project::class)->create();
        $user = factory(Learn\User::class)->create();
        $this->visit('/')
            ->see($project->title)
            ->visit('/projects/'.$project->id)
            ->see($project->title);
    }

    public function testVisitEditWithoutAuth()
    {
        $this->visit('/projects/1/edit')
            ->seePageIs('/login');
    }
}
