<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', 'HomeController@index');

    // OAuth Routes
    Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
    Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

    // Profile Routes
    Route::get('dashboard', 'ProfileController@index');
    Route::put('dashboard/update', 'ProfileController@update');
    Route::get('settings', 'ProfileController@edit');

    Route::get('profile/{id}', 'ProfileController@show');

    // Project Routes
    Route::get('projects/{id}', 'ProjectController@show');
    Route::get('projects/{id}/edit', 'ProjectController@edit');

    Route::post('projects', 'ProjectController@save');
    Route::post('projects/comment', 'ProjectController@comment');
    Route::post('projects/favorite', 'ProjectController@favorite');
    Route::post('projects/unfavorite', 'ProjectController@unfavorite');
});
