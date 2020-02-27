<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\search;
class projectController extends Controller
{
    //

     public function index(){

     	$filtered=search::paginate(12);
    	return view('Pages.projects',compact('filtered'));
    }
     public function singleProject($id){

   $projectDetail=search::find($id);
    $filtered=search::where(['id'=>$id])->paginate(10);

    //dd($filtered);
    return view('Pages.singleProject',compact('projectDetail','filtered'));
    }
}
