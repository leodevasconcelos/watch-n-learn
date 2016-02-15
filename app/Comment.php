<?php

namespace Learn;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('Learn\User');
    }
}
