<?php

namespace Learn\Http\Controllers;

use Auth;
use Cloudder;
use Illuminate\Http\Request;
use Learn\User;

class ProfileController extends Controller
{
    /**
     * Return user dashboard.
     */
    public function index()
    {
        $user = Auth::user();
        $projects = $user->projects()->latest()->paginate(9);
        $favorites = $user->favoriteProjects();

        return view('profile.index', compact('user', 'projects', 'favorites'));
    }

    /**
     * Update user details.
     */
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

    /**
     * Update user avatar.
     */
    public function updatePic(Request $request)
    {
        if ($request->hasFile('image')) {
            Cloudder::upload($request->file('image'));
            User::find(Auth::user()->id)->updateAvatar(Cloudder::getResult()['url']);
        }

        return redirect('/settings');
    }

    /**
     * Return profile settings page.
     */
    public function edit()
    {
        $user = Auth::user();
        $projects = $user->projects()->latest()->paginate(9);
        $favorites = $user->favoriteProjects();

        return view('profile.settings', compact('user', 'projects', 'favorites'));
    }

    /**
     * Show a particular user profile.
     */
    public function show($id)
    {
        $user = User::find($id);
        $projects = $user->projects()->latest()->paginate(9);
        $favorites = $user->favoriteProjects();

        // Rerturn dashboard if a user is viewing his own profile.
        if (Auth::user()->id == $user->id) {
            return view('profile.index', compact('user', 'projects', 'favorites'));
        }

        return view('profile.user', compact('user', 'projects', 'favorites'));
    }
}
