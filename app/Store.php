<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'phone', 'mail', 'address', 'zipcode', 'city', 'website', 'profilePicture', 'latitude', 'longitude'
    ];





}
