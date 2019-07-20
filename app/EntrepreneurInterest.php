<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntrepreneurInterest extends Model
{
    protected $table = "entrepreneur_interest";

    public function entrepreneur()
    {
        return $this->belongsTo('User', 'entrepreneur_id');
    }

    public function farmer_product() {
        return $this->belongsTo('FarmerProduct', 'farmer_product_id');
    }
}
