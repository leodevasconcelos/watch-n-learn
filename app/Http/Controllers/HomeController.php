<?php

namespace Learn\Http\Controllers;

use Learn\Project;

class HomeController extends Controller
{
    /**
     * Show the application landing page.
     *
     */
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->paginate(12);

        return view('index', compact('projects'));
    }
}
