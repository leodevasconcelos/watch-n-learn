<?php

namespace Learn;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Comment belongs to User relationship
     */
    public function user()
    {
        return $this->belongsTo('Learn\User');
    }
}
