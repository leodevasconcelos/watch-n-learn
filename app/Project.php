<?php

namespace Learn;

use Auth;
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

    /**
     * Project Owner realtionship
     */
    public function user()
    {
        return $this->belongsTo('Learn\User');
    }

    /**
     * Project has many comments relationship
     */
    public function comments()
    {
        return $this->hasMany('Learn\Comment');
    }

    /**
     * Project has many favorites relationship
     */
    public function favorites()
    {
        return $this->hasMany('Learn\Favorite');
    }

    /**
     * Checkk if logged in user has favorited this project
     * @return bool true or false based on the favorite status
     */
    public function checkFavorite()
    {
        if (!Auth::guest()) {
            $user = $this->favorites()->where('user_id', Auth::user()->id)->first();
            if ($user) {
                return true;
            }

            return false;
        }
    }
}
