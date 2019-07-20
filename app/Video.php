<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    public function expert_user()
    {
        return $this->belongsTo('App\User', 'expert_id');
    }
}
