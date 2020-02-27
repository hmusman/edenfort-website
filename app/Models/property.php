<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    //
    protected $table="property";

     public function photo(){

   	return $this->hasOne('App\Models\photo','reference_number','reference_number');
   }
}
