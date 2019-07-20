<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];

    public function products()
    {
        return $this->hasMany("App\Product", "vendor_id");
    }

    public function videos()
    {
        return $this->hasMany("App\Video","expert_id");
    }

    public function farmer_products()
    {
        return $this->hasMany("App\FarmerProduct", "farmer_id");
    }

    public function personalised_advices_given()
    {
        return $this->hasMany("App\PersonalisedAdvice", "expert_id");
    }

    public function personalised_advices_taken()
    {
        return $this->hasMany("App\PersonalisedAdvice", "farmer_id");
    }

    public function vendor_interests()
    {
        return $this->hasMany("App\VendorInterest","vendor_id");
    }

    public function entrepreneur_interests()
    {
        return $this->hasMany("App\EntrepreneurInterest", "entrepreneur_id");
    }

}
