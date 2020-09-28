<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class agentDetail extends Model
{
    //
    protected $table="agent_detail";

     public function photo(){

   	return $this->hasOne('App\Models\users','id','agent_id');
   }
}
