<?php

namespace Learn;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password', 'uid', 'avatar', 'provider', 'bio',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function projects()
    {
        return $this->hasMany('Learn\Project');
    }


    public function favorites()
    {
        return $this->hasMany('Learn\Favorite');
    }

    public function favoriteProjects()
    {
        $fevs = $this->favorites()->get();
        $projects = [];

        foreach ($fevs as $fev) {
            array_push($projects, $fev->project()->get());
        }

        return collect($projects)->collapse();
    }
}
