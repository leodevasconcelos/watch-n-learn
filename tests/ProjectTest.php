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

    /**
     * Test for viewing correct project when clicked on
     *
     * @return void
     */
    public function testViewCorrectProject()
    {
        $project = factory(Learn\Project::class)->create();
        $user = factory(Learn\User::class)->create();
        $this->visit('/')
        ->see($project->title)
        ->visit('/projects/'.$project->id)
        ->see($project->title);
    }

    /**
     * Test for viewing edit without auth
     * User is redirected to login
     *
     * @return void
     */
    public function testVisitEditWithoutAuth()
    {
        $this->visit('/projects/1/edit')
        ->seePageIs('/login');
    }

    /**
     * Test for editing a project
     *
     * @return void
     */
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

    /**
     * Test for deleting a project without auth
     * Returns a 401 Unauthorized
     *
     * @return void
     */
    public function testDeleteProjectWithoutAuth()
    {
        $project = factory(Learn\Project::class)->create();
        $response = $this->call(
            'DELETE',
            '/projects/'.$project->id
        );

        $this->assertEquals(401, $response->status());
    }

    /**
     * Test for deleting a project
     *
     * @return void
     */
    public function testDeleteProject()
    {
        $project = factory(Learn\Project::class)->create();
        $user = factory(Learn\User::class)->create();

        $this->seeInDatabase('projects', ['title' => $project->title]);

        $response = $this->actingAs($user)
            ->call(
                'DELETE',
                '/projects/'.$project->id
            );

        $this->visit('/')
            ->dontSee($project->title)
            ->dontSeeInDatabase('projects', ['title' => $project->title]);
    }

    /**
     * Test for commenting without Auth
     * Don't see comment input for comments
     *
     * @return void
     */
    public function testCommentWithoutAuth()
    {
        $project = factory(Learn\Project::class)->create();
        $user = factory(Learn\User::class)->create();
        $this->visit('/projects/'.$project->id)
            ->dontSee('Add your comment');
    }

    /**
     * Test to see comments section when logged in
     *
     * @return void
     */
    public function testSeeCommentOnProjectWhenLoggedIn()
    {
        $project = factory(Learn\Project::class)->create();
        $user = factory(Learn\User::class)->create();
        $this->actingAs($user)
            ->visit('/projects/'.$project->id)
            ->see('Add your comment');
    }

    /**
     * Test for commenting on project
     *
     * @return void
     */
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

    /**
     * Test for Favoriting a project without auth
     * User should receive a 401 Unauthorized
     *
     * @return void
     */
    public function testFavoriteWithoutAuth()
    {
        $response = $this->call(
            'POST',
            '/projects/favorite'
        );
        $this->assertEquals(401, $response->status());
    }

    /**
     * Test for favoriting a project
     *
     * @return void
     */
    public function testFavoriteAProject()
    {
        $project = factory(Learn\Project::class)->create();
        $project2 = factory(Learn\Project::class)->create();
        $user = factory(Learn\User::class)->create();

        $this->actingAs($user)
            ->call(
                'POST',
                '/projects/favorite',
                [
                    'project_id' => $project->id,
                    '_token'     => csrf_token(),
                ]
            );

        $this->actingAs($user)
            ->visit('/projects/'.$project->id)
            ->see('fav'); // fav is a css class added when a user has favorited a video/project

        $this->actingAs($user)
            ->visit('/projects/'.$project2->id)
            ->see('unfav');  // unfav is a css class added when a user has not favorited a video/project
    }
}
