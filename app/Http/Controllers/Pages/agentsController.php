<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\search;
class agentsController extends Controller
{
    //

       public function index(Request $r){
      $language= $r->get('language');
      $nationality= $r->get('nationality');
      $name= $r->get('name');
     if($language!="" and $nationality!="" and $name!="")
      {
      dd($name,$language,$nationality);
       }
       
       	$filtered=search::paginate(12);

    	return view('Pages.agents',compact('filtered')); 
    }

    public function singleAgent($id){

    $filtered=search::where(['id'=>$id])->paginate(10);

    //dd($filtered);
    return view('Pages.singleAgent',compact('filtered'));
    }
//     public function agentFilter(Request $r){
//        dd('a');
// dd($r->name);
//         return view('Pages.agents',compact('filtered'));
//     }

}
