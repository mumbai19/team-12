<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalisedAdvice extends Model
{
    protected $table = 'videos';

    public function expert_user()
    {
        return $this->belongsTo('App\User', 'expert_id');
    }

    public function farmer()
    {
        return $this->belongsTo('App\User', 'farmer_id');
    }
}
