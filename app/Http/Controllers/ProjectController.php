<?php

namespace Learn\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\Request;
use Learn\Comment;
use Learn\Favorite;
use Learn\Project;

class ProjectController extends Controller
{
    /**
     * Show particular learning resource.
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        $comments = $project->comments()->get();
        $favorites = $project->favorites()->count();

        return view('project.show', compact('project', 'comments', 'favorites'));
    }

    /**
     * Save new project.
     */
    public function save(Request $request)
    {
        $this->validate($request, [
            'title'       => 'required|max:255',
            'description' => 'required|max:255',
            'category'    => 'required',
            'url'         => 'required|youtube',
        ]);

        $url = explode('=', $request->input('url'));
        $url = end($url);

        $request['url'] = $url;
        $request['user_id'] = Auth::user()->id;

        Project::create($request->all());

        return redirect('dashboard');
    }

    /**
     * Comment on a project.
     *
     * @return json containing user and the comment
     */
    public function comment(Request $request)
    {
        $comment = new Comment();
        $comment->comment = $request->input('comment');
        $comment->user_id = Auth::user()->id;
        $comment->project_id = $request->input('project_id');
        $comment->save();
        $comment->time = $comment->created_at->diffForHumans();

        $user = Auth::user();

        return compact('user', 'comment');
    }

    /**
     * Favorite a project.
     */
    public function favorite(Request $request)
    {
        if (Auth::check()) {
            $favorite = new Favorite();
            $favorite->user_id = Auth::user()->id;
            $favorite->project_id = $request->input('project_id');
            $favorite->save();

            $favorites = Project::find($request->input('project_id'))->favorites()->count();

            return $favorites;
        }

        return response('Unauthorized', 401);
    }

    /**
     * Unfavorite a project.
     */
    public function unfavorite(Request $request)
    {
        if (Auth::check()) {
            DB::delete('DELETE FROM favorites WHERE project_id = ? AND user_id = ?', [$request->input('project_id'), Auth::user()->id]);

            $favorites = Project::find($request->input('project_id'))->favorites()->count();

            return $favorites;
        }

        return response('Unauthorized', 401);
    }

    /**
     * Return edit view for a project.
     *
     * @param int $id id of the project to be edited
     */
    public function edit($id)
    {
        $user = Auth::user();
        $project = Project::find($id);

        if ($user->id == $project->user->id) {
            $projects = $user->projects()->latest()->paginate(9);
            $favorites = $user->favoriteProjects();

            return view('project.edit', compact('user', 'project', 'projects', 'favorites'));
        }

        return redirect('/projects/'.$id);
    }

    /**
     * Update a project.
     *
     * @param int $id id of the project to be updated
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'       => 'required|max:255',
            'description' => 'required|max:255',
            'category'    => 'required',
            'url'         => 'required|youtube',
        ]);

        $url = explode('=', $request->input('url'));
        $request->url = end($url);

        $project = Project::find($id)->update($request->all());

        return redirect('/projects/'.$id);
    }

    /**
     * Delete a project.
     *
     * @param int $id id of the project to be deleted
     */
    public function delete($id)
    {
        if (Auth::check()) {
            Project::destroy($id);

            return redirect('/dashboard');
        }

        return response('Unauthorized', 401);
    }
}
