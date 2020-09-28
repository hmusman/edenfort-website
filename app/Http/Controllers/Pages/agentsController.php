<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\search;
use App\Models\user;
use App\Models\property;
use App\Models\agentDetail;

class agentsController extends Controller
{
    //

       public function index(Request $r){

      $query=user::query();

      $total=user::where('status',1)->whereNotNull('image')->count();
      // dd($total);
      // dd($agentPic);
      $agentname = $r->get('agent-name');

      if(isset($agentname)){
        $agentPic = $query->where('user_name', 'like', '%' . $agentname . '%')->paginate(12);
      }else{
        $agentPic = $query->where('status',1)->whereNotNull('image')->orderBy('updated_at', 'DESC')->paginate(12);
      }
    	return view('Pages.agents',compact('agentPic','total', 'agentname')); 
    }

    public function singleAgent($id){

    $filtered=user::where(['id'=>$id])->first();

    // dd($filtered);
    $active_listing = property::where('agentEmail',$filtered->Email)->count();
    agentDetail::where('agent_id',$id)->update(['active_listing'=>$active_listing]);

    $detail = agentDetail::where('agent_id',$id)->first();
    // dd($detail);

    $agent_properties = property::where('property.agentEmail',$filtered->Email)->join('photo','property.reference_number','photo.reference_number')->select('property.*','photo.photo1','photo.photo2','photo.photo2')->get();
    // dd($agent_properties);
    return view('Pages.singleAgent',compact('filtered','active_listing','detail','agent_properties'));
    }
//    
}
