<?php

namespace Learn;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    /**
     * Favorite belongs to User relationship.
     */
    public function user()
    {
        return $this->belongsTo('Learn\User');
    }

    /**
     * Favorite belongs to a project relationship.
     */
    public function project()
    {
        return $this->belongsTo('Learn\Project');
    }
}
