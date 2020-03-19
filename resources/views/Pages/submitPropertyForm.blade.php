@include('Includes.headernew')



<style>
   .submit_property input{
      color: black !important;
   }
   .sub_btn{
      background: transparent;
      border: 1px solid gray;
      color: gray;
   }
   .sub_btn:hover{
      background-color: #0e6fb7;
      color: white;
      border-color: 1px solid #0e6fb7 !important;
   }
</style>
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Submit Property</h1>
            <ul class="breadcrumbs">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">Submit Property</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->


<!-- User page start -->
<div class="user-page submit-property content-area-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="notification-box mb-60">
                    <h3>List here your property, we will assist you the best.</h3>
                </div>
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
                <div class="search-area contact-2">
                    <div class="search-area-inner">
                        <div class="search-contents ">
                            <form action="{{url('submitProperty')}}" method="get" class="submit_property">
                                <h3 class="heading">Basic Information</h3>
                                <div class="row mb-50">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Unit</label>
                                            <input id="unit no" name="unit_no" placeholder="unit_no" class="form-control " type="text" value="{{old('unit_no')}}"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="Building"> Building</label>                      
                                            <input  id="Building" name="Building" placeholder="Building" class="form-control " type="text" value="{{old('Building')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="area">Area</label>             
                                            <input  id="area" name="area" placeholder="area" class="form-control " type="text" value="{{old('area')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="landloard">Name</label> 
                                            <input id="landloard" name="LandLord" placeholder="Name" class="form-control " type="text" value="{{old('LandLord')}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label id="email">Email</label>               
                                            <input  for="email" name="email" placeholder="email" class="form-control" type="email" value="{{old('email')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="contact">Contact</label> 
                                            <input  id="contact" name="contact_no" placeholder="contact_no" class="form-control" type="text" value="{{old('contact_no')}}" required>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="heading">Additional Information</h3>
                                <div class="row mb-50">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Bedroom</label>      
                                            <input  name="Bedroom" placeholder="Bedroom" class="form-control" type="text" value="{{old('Bedroom')}}" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Washroom</label>  
                                            <input  name="Washroom" placeholder="Washroom" class="form-control" type="text" value="{{old('Washroom')}}" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                             <label>Condition</label>   
                                             <input  name="Conditions" placeholder="Conditions" class="form-control" type="text" value="{{old('Conditions')}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Area_Sqft</label> 
                                            <input  name="Area_Sqft" placeholder="Area_Sqft" class="form-control" type="text" value="{{old('Area_Sqft')}}" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                             <label for="price">Price</label> 
                                             <input  id="price" name="Price" placeholder="Price" class="form-control" type="number" value="{{old('Price')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                             <label>Type</label>  
                                             <select name="type" class="form-control" required style="color: black !important">
                                                <option value="For Rent">Rent</option>
                                                <option value="For Sale">Sale</option>
                                             </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-md sub_btn">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- User page end -->
@include('Includes.footernew')