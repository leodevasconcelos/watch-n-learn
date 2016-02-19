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

    public function user()
    {
        return $this->belongsTo('Learn\User');
    }

    public function comments()
    {
        return $this->hasMany('Learn\Comment');
    }

    public function favorites()
    {
        return $this->hasMany('Learn\Favorite');
    }

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
