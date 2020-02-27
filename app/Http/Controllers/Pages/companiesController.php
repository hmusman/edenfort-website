<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\search;
class companiesController extends Controller
{
    //
      public function index(Request $r){
     
      $name= $r->get('name');
     if($name!="")
      {
      dd($name);
       }
       
       	$filtered=search::paginate(12);

    	return view('Pages.companies',compact('filtered')); 
    }


    public function singleCompany($id){

    $filtered=search::where(['id'=>$id])->paginate(10);

    //dd($filtered);
    return view('Pages.singleCompany',compact('filtered'));
    }
}
