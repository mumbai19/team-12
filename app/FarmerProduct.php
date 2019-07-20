<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FarmerProduct extends Model
{
    protected $table = 'farmer_products';

    public function farmer()
    {
        return $this->belongsTo('User', 'farmer_id');
    }
}
