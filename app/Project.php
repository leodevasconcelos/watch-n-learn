<?php

namespace Learn;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'category', 'url', 'description', 'user_id',
    ];

    public function comments()
    {
        return $this->hasMany('Learn\Comment');
    }

    public function favorites()
    {
        return $this->hasMany('Learn\Favorite');
    }
}
