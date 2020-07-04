<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\search;
use App\Models\user;

class agentsController extends Controller
{
    //

       public function index(Request $r){

      $query=user::query();

      $total=user::count();
      // dd($total);
      // dd($agentPic);
      $agentname = $r->get('agent-name');

      if(isset($agentname)){
        $agentPic = $query->where('user_name', 'like', '%' . $agentname . '%')->paginate(12);
      }else{
        $agentPic = $query->orderBy('updated_at', 'DESC')->paginate(12);
      }
    	return view('Pages.agents',compact('agentPic','total', 'agentname')); 
    }

    public function singleAgent($id){

    $filtered=user::where(['id'=>$id])->first();

    //dd($filtered);
    return view('Pages.singleAgent',compact('filtered'));
    }
//     public function agentFilter(Request $r){
//        dd('a');
// dd($r->name);
//         return view('Pages.agents',compact('filtered'));
//     }

}
