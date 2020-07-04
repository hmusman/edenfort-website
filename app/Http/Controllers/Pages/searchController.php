<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\search;
use App\Models\property;
use App\Models\photo;
use App\Models\user;
use Carbon\Carbon;
class searchController extends Controller
{
    //

      public function index(){
      
    	return view('Pages.search');
    }
//single property detail
public function singleProperty($id){
   $propertyDetail=property::find($id);
     $filter=property::find($id);
    
     $sameAreaProperties=property::where(['community'=>$filter->community])->orderBy('updated_at', 'desc')->take(4)->get();
     
      $agentName=explode(' ',$filter->agentName);
      //dd($agentName['0']);
     $agentPic=user::where('First_name', 'LIKE', "%{$agentName['0']}%")->get();
     // dd($agentPic);
     $current = Carbon::now();
     $recent_properties = property::where('created_at','<=',$current)->join('photo','photo.reference_number','property.reference_number')->orderBy('created_at','DESC')->take(5)->get();
     
     return view('Pages.singleProperty',compact('propertyDetail','filter','sameAreaProperties','agentPic','recent_properties'));
}
//View all properties of specific agent, from single proerty page
public function agentPropertiesFilter()
{

    $agentProperties=$_GET['agentProperties'];
  
  
  $filtered=property::where(['agentName'=>$agentProperties]);
   //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$filtered = $filtered->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$filtered = $filtered->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$filtered = $filtered->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$filtered = $filtered->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$filtered = $filtered->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $filtered = $filtered->paginate(10);
}

  //end sorting
return view('Pages.search',compact('filtered'));
}
public function menuSearch()
{
    $propertyType=$_GET['propertyType'];
	$offering_type2=$_GET['offering_type2'];
	//dd($type,$category);
	$filtered=property::where(['offering_type1'=>$propertyType])->where(['offering_type2'=>$offering_type2]);
	  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$filtered = $filtered->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$filtered = $filtered->orderBy('price_yearly','DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$filtered = $filtered->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$filtered = $filtered->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$filtered = $filtered->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $filtered = $filtered->paginate(9);
}

  //end sorting
//dd($filtered);
return view('Pages.search',compact('filtered'));
}
//home page footer filter links
public function footerSearch(Request $r)
{
    $propertyType=$r->get('propertyType'); 
    $offering_type2=$r->get('offering_type2');
    $city=$r->get('city');
  
  //dd($type,$category);
  $filtered=property::where(['property_type'=>$propertyType])->where(['city'=>$city])->where(['offering_type2'=>$offering_type2]);
	  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$filtered = $filtered->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$filtered = $filtered->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$filtered = $filtered->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$filtered = $filtered->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$filtered = $filtered->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $filtered = $filtered->paginate(10);
}

  //end sorting

return view('Pages.search',compact('filtered'));
}
//advance search on search blade
public function advanceFilter(Request $r){

$for=$r->get('for');
    $location=$r->get('location');
    $type=$r->get('type');
    $minPrice=$r->get('minPrice');
    $maxPrice=$r->get('maxPrice');
    $bed=$r->get('bed');
    $furnish=$r->get('furnish');
    $minArea=$r->get('minArea');
    $maxArea=$r->get('maxArea');
    $bath=$r->get('bath');
    $keywords=$r->get('keywords');
    $agent=$r->get('agent');
	
	//dd($r->all());

 $conditions = [];
 if(empty($for) and empty($location) and empty($type) and empty($minPrice) and empty($maxPrice) and empty($bed) and empty($furnish) and empty($minArea) and empty($maxArea) and empty($bath) and empty($keywords) and empty($agent) ){
 $resut=property::paginate(10);
}else{
	
	$typefurther=explode('-',$type);
	
	
	$result=property::where('offering_type2', $for);
   /* if(! empty($for)) {
	  $result = $result->where('offering_type2', $for);
    }*/
	 if(! empty($location)) {
		 
	  $result = $result->where('location', 'LIKE', "%{$location}%");
    }
	 if(! empty($type)) {
		 
		 if(isset($typefurther['1'])){
	  $result = $result->where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]]);
		 }else{
			 $result = $result->where('offering_type1', $type);
		 }
    }
	if(! empty($minPrice)) {
	  $result = $result->where('price_yearly','>=',$minPrice);
    }
	if(! empty($maxPrice)) {
	  $result = $result->where('price_yearly','<=',$maxPrice);
    }
	if(! empty($bed)) {
	  $result = $result->where('bedroom', $bed);
    }
	if(! empty($furnish)) {
	  $result = $result->where('furnished', $furnish);
    }
	if(! empty($minArea)) {
	  $result = $result->where('size','>=',$minArea);
    }
	if(! empty($maxArea)) {
	  $result = $result->where('size','<=',$maxArea);
    }
	if(! empty($bath)) {
	  $result = $result->where('bathroom', $bath);
    }
	/*if(! empty($keywords)) {
	  $result = $result->where('keywords', $keywords);
    }*/
	if(! empty($agent)) {
	  $result = $result->where('agentName', 'LIKE', "%{$agent}%");
    }

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//sorting end
	//dd($result);

}

 $filtered=$result;
    	return view('Pages.search',compact('filtered'));

}


//home page filter
    public function search($for,$location,$type,$minPrice,$maxPrice,$bed){
//make a varible to check both Residential and apartment etc    	
$typefurther=explode('-',$type);

    	 if($for!='' and $location!='' and $type!='' and $minPrice!='' and $maxPrice!='' and $bed!=''  ){
if(isset($typefurther['1'])){
$result=property::where(['offering_type2'=>$for])->where(['location'=>$location])->where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where('price_yearly','>=',$minPrice)->where('price_yearly','<=',$maxPrice)->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['offering_type2'=>$for])->where(['location'=>$location])->where(['offering_type1'=>$type])->where('price_yearly','>=',$minPrice)->where('price_yearly','<=',$maxPrice)->where(['bedroom'=>$bed]);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($location!='' and $type!='' and $minPrice!='' and $maxPrice!='' and $bed!=''  ){

  if(isset($typefurther['1'])){
$result=property::where(['location'=>$location])->where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where('price_yearly','>=',$minPrice)->where('price_yearly','<=',$maxPrice)->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
 $result=property::where(['location'=>$location])->where(['offering_type1'=>$type])->where('price_yearly','>=',$minPrice)->where('price_yearly','<=',$maxPrice)->where(['bedroom'=>$bed]);
 
 //sorting
 if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

 //end sorting
 
}

}elseif($for!='' and $type!='' and $minPrice!='' and $maxPrice!='' and $bed!=''){

   if(isset($typefurther['1'])){
$result=property::where(['offering_type2'=>$for])->where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where('price_yearly','>=',$minPrice)->where('price_yearly','<=',$maxPrice)->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['offering_type2'=>$for])->where(['offering_type1'=>$type])->where('price_yearly','>=',$minPrice)->where('price_yearly','<=',$maxPrice)->where(['bedroom'=>$bed]);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($for!='' and $location!='' and $minPrice!='' and $maxPrice!='' and $bed!=''){
$result=property::where(['offering_type2'=>$for])->where(['location'=>$location])->where('price_yearly','>=',$minPrice)->where('price_yearly','<=',$maxPrice)->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}elseif($for!='' and $location!='' and $type!='' and $maxPrice!='' and $bed!=''){

  if(isset($typefurther['1'])){
$result=property::where(['offering_type2'=>$for])->where(['location'=>$location])->where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where('price_yearly','<=',$maxPrice)->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['offering_type2'=>$for])->where(['location'=>$location])->where(['offering_type1'=>$type])->where('price_yearly','<=',$maxPrice)->where(['bedroom'=>$bed]);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($for!='' and $location!='' and $type!='' and $minPrice!='' and $bed!=''){

  if(isset($typefurther['1'])){
$result=property::where(['offering_type2'=>$for])->where(['location'=>$location])->where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where('price_yearly','>=',$minPrice)->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['offering_type2'=>$for])->where(['location'=>$location])->where(['offering_type1'=>$type])->where('price_yearly','>=',$minPrice)->where(['bedroom'=>$bed]);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($for!='' and $location!='' and $type!='' and $minPrice!='' and $maxPrice!=''){

  if(isset($typefurther['1'])){
$result=property::where(['offering_type2'=>$for])->where(['location'=>$location])->where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where('price_yearly','>=',$minPrice)->where('price_yearly','<=',$maxPrice);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['offering_type2'=>$for])->where(['location'=>$location])->where(['offering_type1'=>$type])->where('price_yearly','>=',$minPrice)->where('price_yearly','<=',$maxPrice);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($type!='' and $minPrice!='' and $maxPrice!='' and $bed!=''){

  if(isset($typefurther['1'])){
$result=property::where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where('price_yearly','>=',$minPrice)->where('price_yearly','<=',$maxPrice)->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['offering_type1'=>$type])->where('price_yearly','>=',$minPrice)->where('price_yearly','<=',$maxPrice)->where(['bedroom'=>$bed]);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($location!='' and $minPrice!='' and $maxPrice!='' and $bed!=''){
$result=property::where(['location'=>$location])->where('price_yearly','>=',$minPrice)->where('price_yearly','<=',$maxPrice)->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}elseif($location!='' and $type!='' and $maxPrice!='' and $bed!=''){

  if(isset($typefurther['1'])){
$result=property::where(['location'=>$location])->where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where('price_yearly','<=',$maxPrice)->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['location'=>$location])->where(['offering_type1'=>$type])->where('price_yearly','<=',$maxPrice)->where(['bedroom'=>$bed]);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($location!='' and $type!='' and $minPrice!='' and $bed!=''){

  if(isset($typefurther['1'])){
$result=property::where(['location'=>$location])->where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where('price_yearly','>=',$minPrice)->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['location'=>$location])->where(['offering_type1'=>$type])->where('price_yearly','>=',$minPrice)->where(['bedroom'=>$bed]);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($location!='' and $type!='' and $minPrice!='' and $maxPrice!=''){

   if(isset($typefurther['1'])){
$result=property::where(['location'=>$location])->where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where('price_yearly','>=',$minPrice)->where('price_yearly','<=',$maxPrice);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['location'=>$location])->where(['offering_type1'=>$type])->where('price_yearly','>=',$minPrice)->where('price_yearly','<=',$maxPrice);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($for!='' and $minPrice!='' and $maxPrice!='' and $bed!=''){
$result=property::where(['offering_type2'=>$for])->where('price_yearly','>=',$minPrice)->where('price_yearly','<=',$maxPrice)->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}elseif($for!='' and $type!='' and $maxPrice!='' and $bed!=''){

  if(isset($typefurther['1'])){
$result=property::where(['offering_type2'=>$for])->where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where('price_yearly','<=',$maxPrice)->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['offering_type2'=>$for])->where(['offering_type1'=>$type])->where('price_yearly','<=',$maxPrice)->where(['bedroom'=>$bed]);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($for!='' and $type!='' and $minPrice!='' and $bed!=''){

  if(isset($typefurther['1'])){
$result=property::where(['offering_type2'=>$for])->where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where('price_yearly','>=',$minPrice)->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['offering_type2'=>$for])->where(['offering_type1'=>$type])->where('price_yearly','>=',$minPrice)->where(['bedroom'=>$bed]);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($for!='' and $type!='' and $minPrice!='' and $maxPrice!=''){

  if(isset($typefurther['1'])){
$result=property::where(['offering_type2'=>$for])->where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where('price_yearly','>=',$minPrice)->where('price_yearly','<=',$maxPrice);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['offering_type2'=>$for])->where(['offering_type1'=>$type])->where('price_yearly','>=',$minPrice)->where('price_yearly','<=',$maxPrice);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($for!='' and $location!='' and $maxPrice!='' and $bed!=''){
$result=property::where(['offering_type2'=>$for])->where(['location'=>$location])->where('price_yearly','<=',$maxPrice)->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}elseif($for!='' and $location!='' and $minPrice!='' and $bed!=''){
$result=property::where(['offering_type2'=>$for])->where(['location'=>$location])->where('price_yearly','>=',$minPrice)->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}elseif($for!='' and $location!='' and $minPrice!='' and $maxPrice!=''){
$result=property::where(['offering_type2'=>$for])->where(['location'=>$location])->where('price_yearly','>=',$minPrice)->where('price_yearly','<=',$maxPrice);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}elseif($for!='' and $location!='' and $type!='' and $bed!=''){

  if(isset($typefurther['1'])){
$result=property::where(['offering_type2'=>$for])->where(['location'=>$location])->where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['offering_type2'=>$for])->where(['location'=>$location])->where(['offering_type1'=>$type])->where(['bedroom'=>$bed]);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($for!='' and $location!='' and $type!='' and $maxPrice!=''){

  if(isset($typefurther['1'])){
$result=property::where(['offering_type2'=>$for])->where(['location'=>$location])->where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where('price_yearly','<=',$maxPrice);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['offering_type2'=>$for])->where(['location'=>$location])->where(['offering_type1'=>$type])->where('price_yearly','<=',$maxPrice);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($for!='' and $location!='' and $type!='' and $minPrice!=''){

  if(isset($typefurther['1'])){
$result=property::where(['offering_type2'=>$for])->where(['location'=>$location])->where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where('price_yearly','>=',$minPrice);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['offering_type2'=>$for])->where(['location'=>$location])->where(['offering_type1'=>$type])->where('price_yearly','>=',$minPrice);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
 }
}elseif($minPrice!='' and $maxPrice!='' and $bed!=''){
$result=property::where('price_yearly','>=',$minPrice)->where('price_yearly','<=',$maxPrice)->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}elseif($type!='' and $maxPrice!='' and $bed!=''){

   if(isset($typefurther['1'])){
$result=property::where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where('price_yearly','<=',$maxPrice)->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['offering_type1'=>$type])->where('price_yearly','<=',$maxPrice)->where(['bedroom'=>$bed]);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($type!='' and $minPrice!='' and $bed!=''){

  if(isset($typefurther['1'])){
$result=property::where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where('price_yearly','>=',$minPrice)->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['offering_type1'=>$type])->where('price_yearly','>=',$minPrice)->where(['bedroom'=>$bed]);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($type!='' and $minPrice!='' and $maxPrice!=''){

   if(isset($typefurther['1'])){
$result=property::where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where('price_yearly','>=',$minPrice)->where('price_yearly','<=',$maxPrice);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['offering_type1'=>$type])->where('price_yearly','>=',$minPrice)->where('price_yearly','<=',$maxPrice);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($location!='' and $maxPrice!='' and $bed!=''){
$result=property::where(['location'=>$location])->where('price_yearly','<=',$maxPrice)->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}elseif($location!='' and $minPrice!='' and $bed!=''){
$result=property::where(['location'=>$location])->where('price_yearly','>=',$minPrice)->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}elseif($location!='' and $minPrice!='' and $maxPrice!=''){
$result=property::where(['location'=>$location])->where('price_yearly','>=',$minPrice)->where('price_yearly','<=',$maxPrice);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}elseif($location!='' and $type!='' and $bed!=''){

  if(isset($typefurther['1'])){
$result=property::where(['location'=>$location])->where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['location'=>$location])->where(['offering_type1'=>$type])->where(['bedroom'=>$bed]);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($location!='' and $type!='' and $maxPrice!=''){

  if(isset($typefurther['1'])){
$result=property::where(['location'=>$location])->where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where('price_yearly','<=',$maxPrice);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['location'=>$location])->where(['offering_type1'=>$type])->where('price_yearly','<=',$maxPrice);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($location!='' and $type!='' and $minPrice!=''){

  if(isset($typefurther['1'])){
$result=property::where(['location'=>$location])->where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where('price_yearly','>=',$minPrice);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['location'=>$location])->where(['offering_type1'=>$type])->where('price_yearly','>=',$minPrice);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}
}elseif($for!='' and $maxPrice!='' and $bed!=''){
    
$result=property::where(['offering_type2'=>$for])->where('price_yearly','<=',$maxPrice)->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}elseif($for!='' and $minPrice!='' and $bed!=''){
$result=property::where(['offering_type2'=>$for])->where('price_yearly','>=',$minPrice)->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}elseif($for!='' and $minPrice!='' and $maxPrice!=''){
$result=property::where(['offering_type2'=>$for])->where('price_yearly','>=',$minPrice)->where('price_yearly','<=',$maxPrice);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}elseif($for!='' and $type!='' and $bed!=''){

  if(isset($typefurther['1'])){
$result=property::where(['offering_type2'=>$for])->where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['offering_type2'=>$for])->where(['offering_type1'=>$type])->where(['bedroom'=>$bed]);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($for!='' and $type!='' and $maxPrice!=''){

   if(isset($typefurther['1'])){
$result=property::where(['offering_type2'=>$for])->where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where('price_yearly','<=',$maxPrice);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['offering_type2'=>$for])->where(['offering_type1'=>$type])->where('price_yearly','<=',$maxPrice);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($for!='' and $type!='' and $minPrice!=''){

   if(isset($typefurther['1'])){
$result=property::where(['offering_type2'=>$for])->where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where('price_yearly','>=',$minPrice);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['offering_type2'=>$for])->where(['offering_type1'=>$type])->where('price_yearly','>=',$minPrice);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($for!='' and $location!='' and $bed!=''){
$result=property::where(['offering_type2'=>$for])->where(['location'=>$location])->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}elseif($for!='' and $location!='' and $maxPrice!=''){
$result=property::where(['offering_type2'=>$for])->where(['location'=>$location])->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}elseif($for!='' and $location!='' and $minPrice!=''){
$result=property::where(['offering_type2'=>$for])->where(['location'=>$location])->where('price_yearly','>=',$minPrice);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}elseif($for!='' and $location!='' and $type!=''){

  if(isset($typefurther['1'])){
$result=property::where(['offering_type2'=>$for])->where(['location'=>$location])->where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['offering_type2'=>$for])->where(['location'=>$location])->where(['offering_type1'=>$type]);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($maxPrice!='' and $bed!=''){
$result=property::where('price_yearly','<=',$maxPrice)->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}elseif($minPrice!='' and $bed!=''){
$result=property::where('price_yearly','>=',$minPrice)->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}elseif($minPrice!='' and $maxPrice!=''){
$result=property::where('price_yearly','>=',$minPrice)->where('price_yearly','<=',$maxPrice);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}elseif($type!='' and $bed!=''){

  if(isset($typefurther['1'])){
  $result=property::where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where(['bedroom'=>$bed]);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}else{
    $result=property::where(['offering_type1'=>$type])->where(['bedroom'=>$bed]);
    
    //sorting
    if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

    //end sorting
    
}

}elseif($type!='' and $maxPrice!=''){

  if(isset($typefurther['1'])){
$result=property::where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where('price_yearly','<=',$maxPrice);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['offering_type1'=>$type])->where('price_yearly','<=',$maxPrice);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($type!='' and $minPrice!=''){

  if(isset($typefurther['1'])){
$result=property::where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]])->where('price_yearly','>=',$minPrice);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{

$result=property::where(['offering_type1'=>$type])->where('price_yearly','>=',$minPrice);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}

}elseif($location!='' and $bed!=''){
$result=property::where(['location'=>$location])->where(['bedroom'=>$bed]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}elseif($location!='' and $maxPrice!=''){
$result=property::where(['location'=>$location])->where('price_yearly','<=',$maxPrice);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}elseif($location!='' and $minPrice!=''){
$result=property::where(['location'=>$location])->where('price_yearly','>=',$minPrice);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}elseif($location!='' and $type!=''){

   if(isset($typefurther['1'])){
$result=property::where(['location'=>$location])->where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['location'=>$location])->where(['offering_type1'=>$type]);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($for!='' and $bed!=''){
  $result=property::where(['offering_type2'=>$for])->where(['bedroom'=>$bed]);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  

}elseif($for!='' and $maxPrice!=''){
  $result=property::where(['offering_type2'=>$for])->where('price_yearly','<=',$maxPrice);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  

}elseif($for!='' and $minPrice!=''){
$result=property::where(['offering_type2'=>$for])->where('price_yearly','>=',$minPrice);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}elseif($for!='' and $type!=''){

   if(isset($typefurther['1'])){
$result=property::where(['offering_type2'=>$for])->where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting

}else{
  $result=property::where(['offering_type2'=>$for])->where(['offering_type1'=>$type]);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
}

}elseif($for!='' and $location!=''){
$result=property::where(['offering_type2'=>$for])->where(['location'=>$location]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}elseif($bed!=''){
 $result=property::where(['bedroom'=>$bed]);
 
 //sorting
 if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

 //end sorting
 

}elseif($maxPrice!=''){
 $result=property::where('price_yearly','<=',$maxPrice);
 
 //sorting
 if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

 //end sorting
 
 
}elseif($minPrice!=''){
 $result=property::where('price_yearly','>=',$minPrice);
 
 //sorting
 if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

 //end sorting
 
 
}elseif($type!=''){

  if(isset($typefurther['1'])){
 $result=property::where(['offering_type1'=>$typefurther[0],'property_type'=>$typefurther[1]]);
 
 //sorting
 if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

 //end sorting
 
 }else{
  $result=property::where(['offering_type1'=>$type]);
  
  //sorting
  if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

  //end sorting
  
 }

}elseif($location!=''){
 $result=property::where(['location'=>$location]);
 
 //sorting
 if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

 //end sorting
 
 
}elseif($for!=''){
$result=property::where(['offering_type2'=>$for]);

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = $result->orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = $result->orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = $result->orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = $result->orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = $result->orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}else{
//$result=property;

//sorting
if(isset($_GET['sortby'])){
   if($_GET['sortby']=="Newest"){
$result = property::orderBy('updated_at', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Highest-Price"){
$result = property::orderBy('price_yearly', 'DESC')->paginate(10);
}elseif($_GET['sortby']=="Lowest-Price"){
$result = property::orderBy('price_yearly', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(least)"){
$result = property::orderBy('bedroom', 'ASC')->paginate(10);
}elseif($_GET['sortby']=="Beds-(Most)"){
$result = property::orderBy('bedroom', 'DESC')->paginate(10);
}

}else{
  $result = $result->paginate(10);
}

//end sorting


}
    	
    	return $result;
    }
    //home page search
     public function homePage(Request $r){
    $for=$r->get('for');
    $location=$r->get('location');
    $type=$r->get('type');
    $minPrice=$r->get('minPrice');
    $maxPrice=$r->get('maxPrice');
    $bed=$r->get('bed');
   // dd($for,$location,$type,$minPrice,$maxPrice,$bed);

      $filtered=$this->search($for,$location,$type,$minPrice,$maxPrice,$bed);
     // dd($a);
    	return view('Pages.search',compact('filtered'));
    }
}
