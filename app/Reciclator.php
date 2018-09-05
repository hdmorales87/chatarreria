<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reciclator extends Model
{
    protected $fillable = ['document_type','document','first_name','last_name','address','phone_number','mobile_number','id_type_purchase']; 
}
