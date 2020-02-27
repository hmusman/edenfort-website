@extends('Includes.layout')
@section('title','| Search')
@section('content')
<section class="page-section " style="padding:0px; padding-top:10px; ">
   <div>
   </div>
   <div class="container">
      <div class="row">
         <h3> List Your Property</h3>
         <br>
         @if(session('msg'))
         {!! session('msg') !!}
         @endif
         @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      </div>
      <!-- Section Title -->
      <div class="row" style="margin-bottom:200px;">
         <div class="col-md-12 col-sm-12" style="background: white; padding:20px; ">
            <form action="{{url('submitProperty')}}" method="get" >
               <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                  <label for="unit no">Unit</label>				
                  <input id="unit no" name="unit_no" placeholder="unit_no" class="form-control " type="text" value="{{old('unit_no')}}"  required>
               </div>
               <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                  <label for="Building"> Building</label>								
                  <input  id="Building" name="Building" placeholder="Building" class="form-control " type="text" value="{{old('Building')}}" required>
               </div>
               <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                  <label for="area">Area</label>					
                  <input  id="area" name="area" placeholder="area" class="form-control " type="text" value="{{old('area')}}" required>
               </div>
               <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                  <label for="landloard">Landlord</label>	
                  <input id="landloard" name="LandLord" placeholder="LandLord" class="form-control " type="text" value="{{old('LandLord')}}">
               </div>
               <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                  <label id="email">Email</label>					
                  <input  for="email" name="email" placeholder="email" class="form-control" type="email" value="{{old('email')}}" required>
               </div>
               <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">	
                  <label for="contact">Contact</label>	
                  <input  id="contact" name="contact_no" placeholder="contact_no" class="form-control" type="text" value="{{old('contact_no')}}" required>
               </div>
               <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                  <label>Bedroom</label>		
                  <input  name="Bedroom" placeholder="Bedroom" class="form-control" type="text" value="{{old('Bedroom')}}" >
               </div>
               <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">	
                  <label>Washroom</label>	
                  <input  name="Washroom" placeholder="Washroom" class="form-control" type="text" value="{{old('Washroom')}}" >
               </div>
               <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">	
                  <label>Condition</label>	
                  <input  name="Conditions" placeholder="Conditions" class="form-control" type="text" value="{{old('Conditions')}}">
               </div>
               <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                  <label>Area_Sqft</label>	
                  <input  name="Area_Sqft" placeholder="Area_Sqft" class="form-control" type="text" value="{{old('Area_Sqft')}}" >
               </div>
               <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                  <label for="price">Price</label>	
                  <input  id="price" name="Price" placeholder="Price" class="form-control" type="number" value="{{old('Price')}}" required>
               </div>
               <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                  <label>Type</label>	
                  <select name="type" class="form-control" required>
                     <option value="For Rent">Rent</option>
                     <option value="For Sale">Sale</option>
                  </select>
               </div>
               <!--3rd row end-->
               <br>	
               <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">		
                  <button type="submit" class="primary-btn form-control " >Submit</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
@endsection