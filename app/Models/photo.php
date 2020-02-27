<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    //
   protected $table="photo";

   public function property(){

   	return $this->belongsTo('App\Models\property');
   }
}
