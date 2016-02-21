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

    public function testEditProject()
    {
        $title = 'This is a test title';
        $description = 'This ia a test description';
        $category = 'Programming';
        $url = 'https://www.youtube.com/watch?v=fRh_vgS2dFE';

        $project = factory(Learn\Project::class)->create();
        $user = factory(Learn\User::class)->create();
        $response = $this->call(
            'PUT',
            'projects/'.$project->id,
            [
                'title'       => $title,
                'description' => $description,
                'category'    => $category,
                'url'         => $url,
                '_token'      => csrf_token(),
            ]
        );

        $this->seeInDatabase('projects', ['title' => $title, 'description' => $description]);
    }

    public function testCommentWithoutAuth()
    {
        $project = factory(Learn\Project::class)->create();
        $user = factory(Learn\User::class)->create();
        $this->visit('/projects/'.$project->id)
            ->dontSee('Add your comment');
    }

    public function testSeeCommentOnProjectWhenLoggedIn()
    {
        $project = factory(Learn\Project::class)->create();
        $user = factory(Learn\User::class)->create();
        $this->actingAs($user)
            ->visit('/projects/'.$project->id)
            ->see('Add your comment');
    }

    public function testCommentOnProject()
    {
        $project = factory(Learn\Project::class)->create();
        $user = factory(Learn\User::class)->create();
        $comment = 'This is a test comment';

        $this->actingAs($user)
            ->call(
                'POST',
                '/projects/comment',
                [
                    'comment'    => $comment,
                    '_token'     => csrf_token(),
                    'project_id' => $project->id,
                ]
            );

        $this->visit('/projects/'.$project->id)
            ->see($comment);
    }
}
