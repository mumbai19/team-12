<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalisedAdvice extends Model
{
    protected $table = 'videos';

    public function expert_user()
    {
        return $this->belongsTo('User', 'expert_id');
    }

    public function farmer()
    {
        return $this->belongsTo('User', 'farmer_id');
    }
}
