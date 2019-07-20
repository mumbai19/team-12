<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntrepreneurInterest extends Model
{
    protected $table = "entrepreneur_interest";

    public function entrepreneur()
    {
        return $this->belongsTo('App\User', 'entrepreneur_id');
    }

    public function farmer() {
        return $this->belongsTo('App\User', 'farmer_id');
    }
}
