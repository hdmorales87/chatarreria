<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['nit','commercial_name','business_name','address','phone_number']; 
}
