<?php

namespace Learn\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Learn\Project;

class ProjectController extends Controller
{
    public function show($id)
    {
        $project = Project::find($id);

        return view('project.show', compact('project'));
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'title'       => 'required|max:255',
            'description' => 'required|max:255',
            'category'    => 'required',
            'url'         => 'required',
        ]);

        $url = explode('=', $request->input('url'));
        $url = end($url);

        $request['url'] = $url;
        $request['user_id'] = Auth::user()->id;

        Project::create($request->all());

        return redirect('profile');
    }
}
