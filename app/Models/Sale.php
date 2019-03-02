<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{ 
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'farmer_id', 'no_of_bags', 'county', 'subcounty', 'price'
   ];
}
