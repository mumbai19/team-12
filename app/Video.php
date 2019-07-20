<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    public function expert_user()
    {
        return $this->belongsTo('User', 'expert_id');
    }
}
