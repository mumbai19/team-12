<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorInterest extends Model
{
    protected $table = "vendor_interest";

    public function vendor()
    {
        return $this->belongsTo('User', 'vendor_id');
    }

    public function product() {
        return $this->belongsTo('Product', 'product_id');
    }
}
