<?php

namespace Learn\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Learn\Project;
use Learn\Http\Requests;
use Learn\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function save(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'category'    => 'required',
            'url' => 'required',
        ]);

        $request['user_id'] = Auth::user()->id;
        Project::create($request->all());

        return redirect('profile');
    }
}
