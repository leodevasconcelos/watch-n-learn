<?php

namespace Learn\Http\Controllers;

use Learn\Project;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        return view('index', compact('projects'));
    }
}
