<?php

namespace Learn\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $projects = $user->projects()->get();

        return view('profile.index', compact('user', 'projects'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required|max:255',
            'username' => 'unique:users,username,'.Auth::user()->id,
            'email'    => 'required|unique:users,email,'.Auth::user()->id,
            'bio'      => 'max:140',
        ]);

        Auth::user()->update($request->all());

        return redirect('dashboard');
    }


    public function edit()
    {
        $user = Auth::user();
        $projects = $user->projects()->get();
        return view('profile.settings', compact('user', 'projects'));
    }
}
