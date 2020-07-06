@include('Includes.headernew')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css">


<style>
    @media (max-width: 768px){
    #best-offer{
       margin-top: 16px;
    }
    .section-title{
       font-size: 18px;
    }
    .slide-control{
        margin-top: -7% !important;
    }
    .properties-details-sliders .left {
    left: 5px;
    margin-top: -19%;
}
.properties-details-sliders .right {
    right: 5px;
    margin-top: -19%;
}
.mbl_card{
    margin-top: -1px !important;
    margin-left: 0px !important;
}
.smail-properties{
    margin-top: -53% !important;
}
}
    .carousel-item{
        height: 487px;
        width: 100%;
    }
    #slide-left:hover{
        color: white;
        background-color: #0f6fb9;
        border:1px solid #0f6fb9;
    }
     #slide-right:hover{
        color: white;
        background-color: #0f6fb9;
        border:1px solid #0f6fb9;
    }
	div.scrollmenu {
	  background-color: #333;
	  overflow: auto;
	  overflow-x: hidden;
	  white-space: nowrap;
	}

	div.scrollmenu a {
	  display: inline-block;
	  color: white;
	  text-align: center;
	  padding: 14px;
	  text-decoration: none;
	}

	div.scrollmenu a:hover {
	  background-color: #777;
	}
	.pre{
	background-color: transparent !important;
    border: none;
    border-radius: 0px;
    color: inherit;
    display: inline-block;
    font-size: 14px;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    margin: 10px;
    overflow-wrap: break-word;
    padding: 7px;
    word-break: keep-all;
    white-space: pre-wrap;
    white-space: -moz-pre-wrap;
    white-space: -pre-wrap;
    white-space: -o-pre-wrap;
    word-wrap: break-word;
	}
    .pic_block{
        padding: 0px;
    }
	
</style>

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Property Detail</h1>
            <ul class="breadcrumbs">
            	<li><a href="{{url('footerFilter?propertyType=&category=&city=')}}"> {{$filter->city}}</a></li>
                <li class="active"><a href="#">{{$filter->community}}</a></li>
                <li class="active">{{$filter->sub_community}}</li>
                <li class="active"><a href="#">{{$filter->property_name}}</a></li>
				<li class="active">{{$filter->reference_number}}</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->



<!-- Properties details page start -->
<div class="properties-details-page content-area-16">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-60">
                    <div class="heading-properties">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-left">
                                    <h3>{{$filter->title_en}}</h3>
                                    <p><i class="fa fa-map-marker"></i>{{$filter->location}}</p>
                                </div>
                                <div class="p-r">
                                    <h3>AED {{$filter->price_yearly}}</h3>
                                    <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- main slider carousel items -->
                    <div class="carousel-inner">
                    	@if($filter->photo->photo2!=="No Pic")
                        <div class="active item carousel-item" data-slide-number="0">
                            <img src="{{$filter->photo->photo2}}" class="img-fluid" alt="property-4">
                        </div>
                        @endif
						@if($filter->photo->photo3!=="No Pic")
                        <div class="item carousel-item" data-slide-number="1">
                            <img src="{{$filter->photo->photo3}}" class="img-fluid" alt="property-6">
                        </div>
                        @endif
					  	@if($filter->photo->photo4!=="No Pic")
                        <div class="item carousel-item" data-slide-number="2">
                            <img src="{{$filter->photo->photo4}}" class="img-fluid" alt="property-1">
                        </div>
                        @endif
						@if($filter->photo->photo5!=="No Pic")
                        <div class="item carousel-item" data-slide-number="4">
                            <img src="{{$filter->photo->photo5}}" class="img-fluid" alt="property-5">
                        </div>
                        @endif
						@if($filter->photo->photo6!=="No Pic")
                        <div class="item carousel-item" data-slide-number="5">
                            <img src="{{$filter->photo->photo6}}" class="img-fluid" alt="property-8">
                        </div>
                        @endif
						@if($filter->photo->photo7!=="No Pic")
						<div class="item carousel-item" data-slide-number="5">
                            <img src="{{$filter->photo->photo7}}" class="img-fluid" alt="property-8">
                        </div>
                        @endif
						@if($filter->photo->photo8!=="No Pic")
						<div class="item carousel-item" data-slide-number="5">
                            <img src="{{$filter->photo->photo8}}" class="img-fluid" alt="property-8">
                        </div>
                        @endif
						@if($filter->photo->photo9!=="No Pic")
						<div class="item carousel-item" data-slide-number="5">
                            <img src="{{$filter->photo->photo9}}" class="img-fluid" alt="property-8">
                        </div>
                        @endif
						@if($filter->photo->photo10!=="No Pic")
						<div class="item carousel-item" data-slide-number="5">
                            <img src="{{$filter->photo->photo10}}" class="img-fluid" alt="property-8">
                        </div>
                        @endif
						@if($filter->photo->photo11!=="No Pic")
						<div class="item carousel-item" data-slide-number="5">
                            <img src="{{$filter->photo->photo11}}" class="img-fluid" alt="property-8">
                        </div>
                        @endif
						@if($filter->photo->photo12!=="No Pic")
						<div class="item carousel-item" data-slide-number="5">
                            <img src="{{$filter->photo->photo12}}" class="img-fluid" alt="property-8">
                        </div>
                        @endif
						@if($filter->photo->photo13!=="No Pic")
						<div class="item carousel-item" data-slide-number="5">
                            <img src="{{$filter->photo->photo13}}" class="img-fluid" alt="property-8">
                        </div>
                        @endif
						@if($filter->photo->photo14!=="No Pic")
						<div class="item carousel-item" data-slide-number="5">
                            <img src="{{$filter->photo->photo14}}" class="img-fluid" alt="property-8">
                        </div>
                        @endif
						@if($filter->photo->photo15!=="No Pic")
						<div class="item carousel-item" data-slide-number="5">
                            <img src="{{$filter->photo->photo15}}" class="img-fluid" alt="property-8">
                        </div>
                        @endif
						@if($filter->photo->photo16!=="No Pic")
						<div class="item carousel-item" data-slide-number="5">
                            <img src="{{$filter->photo->photo16}}" class="img-fluid" alt="property-8">
                        </div>
                        @endif
						@if($filter->photo->photo17!=="No Pic")
						<div class="item carousel-item" data-slide-number="5">
                            <img src="{{$filter->photo->photo17}}" class="img-fluid" alt="property-8">
                        </div>
                        @endif
						@if($filter->photo->photo18!=="No Pic")
						<div class="item carousel-item" data-slide-number="5">
                            <img src="{{$filter->photo->photo18}}" class="img-fluid" alt="property-8">
                        </div>
                        @endif
                        @if($filter->photo->photo19!=="No Pic")
						<div class="item carousel-item" data-slide-number="5">
                            <img src="{{$filter->photo->photo19}}" class="img-fluid" alt="property-8">
                        </div>
                        @endif
                        @if($filter->photo->photo20!=="No Pic")
						<div class="item carousel-item" data-slide-number="5">
                            <img src="{{$filter->photo->photo20}}" class="img-fluid" alt="property-8">
                        </div>
                        @endif
                        

                        <a class="carousel-control left" href="#propertiesDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="carousel-control right" href="#propertiesDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>

                    </div>
                    <!-- main slider carousel nav controls -->
                    <!-- <ul class="carousel-indicators smail-properties list-inline nav nav-justified ">
                        <li class="list-inline-item active">
                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#propertiesDetailsSlider">
                                <img src="{{$filter->photo->photo2}}" class="img-fluid" alt="property-4">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">@if($filter->photo->photo2!=="No Pic")
                                <img src="{{$filter->photo->photo2}}" class="img-fluid" alt="property-2">
                            @endif</a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">@if($filter->photo->photo3!=="No Pic")
                                <img src="{{$filter->photo->photo3}}" class="img-fluid" alt="property-3">
                            @endif</a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">@if($filter->photo->photo4!=="No Pic")
                                <img src="{{$filter->photo->photo4}}" class="img-fluid" alt="property-4">
                            @endif</a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">@if($filter->photo->photo5!=="No Pic")
                                <img src="{{$filter->photo->photo5}}" class="img-fluid" alt="property-5">
                            @endif</a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">@if($filter->photo->photo6!=="No Pic")
                                <img src="{{$filter->photo->photo6}}" class="img-fluid" alt="property-6">
                            @endif</a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">@if($filter->photo->photo7!=="No Pic")
                                <img src="{{$filter->photo->photo7}}" class="img-fluid" alt="property-7">
                            @endif</a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">@if($filter->photo->photo8!=="No Pic")
                                <img src="{{$filter->photo->photo8}}" class="img-fluid" alt="property-8">
                            @endif</a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">@if($filter->photo->photo9!=="No Pic")
                                <img src="{{$filter->photo->photo9}}" class="img-fluid" alt="property-9">
                            @endif</a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">@if($filter->photo->photo10!=="No Pic")
                                <img src="{{$filter->photo->photo10}}" class="img-fluid" alt="property-10">
                            @endif</a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">@if($filter->photo->photo11!=="No Pic")
                                <img src="{{$filter->photo->photo11}}" class="img-fluid" alt="property-11">
                            @endif</a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">@if($filter->photo->photo12!=="No Pic")
                                <img src="{{$filter->photo->photo12}}" class="img-fluid" alt="property-12">
                            @endif</a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">@if($filter->photo->photo13!=="No Pic")
                                <img src="{{$filter->photo->photo14}}" class="img-fluid" alt="property-13">
                            @endif</a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">@if($filter->photo->photo14!=="No Pic")
                                <img src="{{$filter->photo->photo2}}" class="img-fluid" alt="property-14">
                            @endif</a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">@if($filter->photo->photo15!=="No Pic")
                                <img src="{{$filter->photo->photo15}}" class="img-fluid" alt="property-15">
                            @endif</a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">@if($filter->photo->photo16!=="No Pic")
                                <img src="{{$filter->photo->photo2}}" class="img-fluid" alt="property-16">
                            @endif</a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">@if($filter->photo->photo17!=="No Pic")
                                <img src="{{$filter->photo->photo17}}" class="img-fluid" alt="property-17">
                            @endif</a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">@if($filter->photo->photo18!=="No Pic")
                                <img src="{{$filter->photo->photo18}}" class="img-fluid" alt="property-18">
                            @endif</a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">@if($filter->photo->photo19!=="No Pic")
                                <img src="{{$filter->photo->photo19}}" class="img-fluid" alt="property-19">
                            @endif</a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">@if($filter->photo->photo20!=="No Pic")
                                <img src="{{$filter->photo->photo20}}" class="img-fluid" alt="property-20">
                            @endif</a>
                        </li>

                        
                    </ul> -->
                </div>
                <!-- Search area start -->
                <div class="search-area widget-2 d-lg-none d-xl-none">
                    <!-- <h5 class="sidebar-title">Advanced Search</h5> -->
                    <div class="search-area-inner">
                        <div class="search-contents ">
                             <div class="widget search-area d-none d-xl-block d-lg-block">
                        @if(isset($agentPic))                              
                            @foreach($agentPic as $aP)
                                @if($aP->image == NULL || !empty($aP->image))
                                <p>here</p>
                                    <img src="{{url('/')}}/{{$aP->image}}" alt="{{$aP->user_name}}" style="height: 275px; width: 288px; border: 1px solid gainsboro;">
                                @else
                                <img src="{{url('public/edenfortDocs/assets/profile_img/default.png.png')}}" alt="{{$aP->user_name}}" style="height: 275px; width: 288px; border: 1px solid gainsboro;">
                                <span class="compnay_img"><img src="{{url('/public/edenfortDocs/assets/images/smallLogo.png')}}" alt="eden fort real estate" style="margin-top: -25%; margin-left: 1px; background-color: #f1f1f1; height: 45px;"></span><br>
                                @endif
                                    <!-- models -->
                                    <div id="AgentcallModal" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="myCallModalLabel">
                                      <div class="modal-dialog contact_modals">

                                        <!-- Modal content-->
                                        <div class="modal-content"  style="border-radius: 0px;border-top: 4px solid #0071bc;">
                                            <div>
                                                <button type="button" class="close" data-dismiss="modal" style="opacity: 1; font-size: 30px;  color: #F7931E; padding: 3px 6px;">&times;</button>
                                            </div>
                                                <div class="modal-body" style="margin-top:30px; padding: 0 30px;">
                                                    <div class="row">
                                                        <div class="col-md-12 text-center">
                                                            <h2>Agent Contact Detail</h2>
                                                            <p class="company_name ucfirst">Edenfort Estate</p>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <ul class="mt10">
                                                                <li class="bdr"><label class="left bld">Phone: </label><a href="tel:+971-12345678" class="sec_phone"> {{$aP->Phone}}</a></li>
                                                                <li class="bdr"><label class="left bld">Mobile: </label><a href="tel:+971-55-12345678" class="phone"> {{$aP->Phone}}</a></li>
                                                                <li class="bdr"><label class="left bld">Refer#</label><span class="right refer_no ucfirst"> {{$aP->refrence}}</span></li>
                                                                <li class="bdr"><label class="left bld">Agent</label><span class="right agentName ucfirst">{{$aP->First_name}} {{$aP->Last_name}} - At Edenfort Real Estate</span></li>
                                                                <li class="ref-info" style="margin-left: 12%;">Please quote property reference<span class="bold block refer_no"> Core -  317-Ha-R-2942</span>when calling us.</li>
                                                                <br>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                          
                                        </div>

                                      </div>
                                    </div>
                           @endforeach
                       @endif
                    </div>
                        <div class="container mbl_card" style="margin-top: -45px; margin-left: 2px;">
                        <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-6">Agent:</div>
                        <div class="col-md-8 col-sm-8 col-xs-6"><strong><a href="../agents/91267.html" target="_blank" class="ucfirst">{{$filter->agentName}}</a></strong></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-6">Company:</div>
                        <div class="col-md-8 col-sm-8 col-xs-6"><strong class="ucfirst">eden fort real estate</strong></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-6">Permit #:</div>
                        <div class="col-md-8 col-sm-8 col-xs-6">{{$filter->permit_number}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-6">ORN #:</div>
                        <div class="col-md-8 col-sm-8 col-xs-6"> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-6">DED #:</div>
                        <div class="col-md-8 col-sm-8 col-xs-6"></div>
                        <div class="col-md-12 col-sm-12 col-xs-12"><a href="{{url('agentPropertiesFilter?agentProperties='.$filter->agentName)}}" style="color:#136eb5;font-size:16px;">View all our properties</a></div>
                    </div>
                    <div class="row ">
                    
                    <div class="col-md-6 col-sm-6 paddingTop-20"><button class="btn btn-success btn-submit call-btn" data-phone="{{$filter->agentPhone}}" data-secphone="" data-companyphone="" data-referno="{{$filter->reference_number}}" data-companyName="West Gate Real Estate" data-agentName="{{$filter->agentName}}" data-toggle="modal" data-target="#AgentcallModal">Call</button></div>
                        <div class="col-md-6 col-sm-6 paddingTop-20"><button class="btn btn-email btn-submit email-btn agentMail" data-prop="" data-referno="{{$filter->reference_number}}" data-companyName="West Gate Real Estate" data-agentName="{{$filter->agentName}}" data-agentEmail="{{$filter->agentEmail}}" data-toggle="modal" data-target="#AgentemailModal" >Email</button></div>
                        
                    </div>
                    </div>
                        </div>
                    </div>
                </div>
                

                <!-- Property description start -->
                <div class="property-description mb-60">
                    <h3 class="heading">Property Description</h3><hr>
                    <pre class="pre">{{$filter->description_en}}</pre>
                </div>

                <!-- Property details start -->
                <div class="property-details mb-60">
                    <h3 class="heading">Facts</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <ul>
                                <li>
                                    <strong>Reference Number:</strong>{{$filter->reference_number}}
                                </li>
                                <li>
                                    <strong>Locaion:</strong>{{$filter->location}}
                                </li>
                                <li>
                                    <strong>Property Type:</strong>{{$filter->property_type}}
                                </li>
                                 <li>
                                    <strong>Price:</strong>AED {{$filter->price_yearly}}
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <ul>
                                <li>
                                    <strong>Property Size:</strong>{{$filter->size}} Sq.Ft
                                </li>

                                <li>
                                    <strong>Property for:</strong>{{$filter->offering_type2}}
                                </li>
                                <li>
                                    <strong>Furnished:</strong>2
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <ul>
                                <li>
                                    <strong>City:</strong>{{$filter->city}}
                                </li>
                                <li>
                                    <strong>Bedrooms:</strong>{{$filter->bedroom}}
                                </li>
                                <li>
                                    <strong>Bathrooms:</strong>{{$filter->bathroom}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Amenities box start -->
                <div class="amenities-box af mb-60">
                    <h3 class="heading">Facilites</h3>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li><span><i class="flaticon-draw-check-mark"></i>within a compound</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Section Location start -->
                <div class="section-location mb-60">
                    <h3 class="heading">Property Location</h3>
                    <div class="map">
                        <div id="map" class="contact-map"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar mbl">
                    <!-- Search area start -->
                    <div class="widget search-area d-none d-xl-block d-lg-block pic_block">
                        <!-- <h5 class="sidebar-title">Advanced Search</h5> -->
                        <div class="search-area-inner">
                            <div class="search-contents ">
                                 <div class="widget search-area d-none d-xl-block d-lg-block">
                        @if(isset($agentPic))                              
                            @foreach($agentPic as $aP)
                                @if($aP->image !== NULL || !empty($aP->image) )
                                <img src="{{url('/')}}/{{$aP->image}}" alt="{{$aP->user_name}}" style="height: 275px; width: 288px; border: 1px solid gainsboro;">
                                <span class="compnay_img"><img src="{{url('/public/edenfortDocs/assets/images/smallLogo.png')}}" alt="eden fort real estate" style="margin-top: -25%; margin-left: 1px; background-color: #f1f1f100; height: 45px;"></span>
                                @else
                                <img src="{{url('public/edenfortDocs/assets/profile_img/default.png.png')}}" alt="{{$aP->user_name}}" style="height: 275px; width: 288px; border: 1px solid gainsboro;"><span class="compnay_img"><img src="{{url('/public/edenfortDocs/assets/images/smallLogo.png')}}" alt="eden fort real estate" style="margin-top: -25%; margin-left: 1px; background-color: #f1f1f100; height: 45px;"></span><br>
                                @endif
                                     <!-- models -->
                                    <div id="AgentcallModal1" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="myCallModalLabel">
                                      <div class="modal-dialog contact_modals">

                                        <!-- Modal content-->
                                        <div class="modal-content"  style="border-radius: 0px;border-top: 4px solid #0071bc;">
                                            <div>
                                                <button type="button" class="close" data-dismiss="modal" style="opacity: 1; font-size: 30px;  color: #F7931E; padding: 3px 6px;">&times;</button>
                                            </div>
                                                <div class="modal-body" style="margin-top:30px; padding: 0 30px;">
                                                    <div class="row">
                                                        <div class="col-md-12 text-center">
                                                            <h2>Agent Contact Detail</h2>
                                                            <p class="company_name ucfirst">Edenfort Estate</p>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <ul class="mt10">
                                                                <li class="bdr"><label class="left bld">Phone: </label><a href="tel:+971-12345678" class="sec_phone"> {{$aP->Phone}}</a></li>
                                                                <li class="bdr"><label class="left bld">Mobile: </label><a href="tel:+971-55-12345678" class="phone"> {{$aP->Phone}}</a></li>
                                                                <li class="bdr"><label class="left bld">Refer#</label><span class="right refer_no ucfirst"> {{$aP->refrence}}</span></li>
                                                                <li class="bdr"><label class="left bld">Agent</label><span class="right agentName ucfirst">{{strtoupper($aP->First_name)}} {{strtoupper($aP->Last_name)}} - At Edenfort Real Estate</span></li>
                                                                <li class="ref-info" style="    font-size: 14px;">Please quote property reference &nbsp;<span class="bold block refer_no"> Core -  317-Ha-R-2942 </span>&nbsp;when calling us.</li>
                                                                <br>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                          
                                        </div>

                                      </div>
                                    </div>
                           @endforeach
                       @endif
                    </div>
                    <div class="container mbl_card" style="margin-top: -45px; margin-left: 2px;">
                        <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-6">Agent:</div>
                        <div class="col-md-8 col-sm-8 col-xs-6"><strong><a href="../agents/91267.html" target="_blank" class="ucfirst">{{$filter->agentName}}</a></strong></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-6">Company:</div>
                        <div class="col-md-8 col-sm-8 col-xs-6"><strong class="ucfirst">eden fort real estate</strong></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-6">Permit #:</div>
                        <div class="col-md-8 col-sm-8 col-xs-6">{{$filter->permit_number}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-6">ORN #:</div>
                        <div class="col-md-8 col-sm-8 col-xs-6"> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-6">DED #:</div>
                        <div class="col-md-8 col-sm-8 col-xs-6"></div>
                        <div class="col-md-12 col-sm-12 col-xs-12"><a href="{{url('agentPropertiesFilter?agentProperties='.$filter->agentName)}}" style="color:#136eb5;font-size:16px;">View all our properties</a></div>
                    </div>
                    <div class="row ">
                    
                    <div class="col-md-6 col-sm-6 paddingTop-20"><button class="btn btn-success btn-submit call-btn" data-phone="{{$filter->agentPhone}}" data-secphone="" data-companyphone="" data-referno="{{$filter->reference_number}}" data-companyName="West Gate Real Estate" data-agentName="{{$filter->agentName}}" data-toggle="modal" data-target="#AgentcallModal1">Call</button></div>
                        <div class="col-md-6 col-sm-6 paddingTop-20">
                            <button class="btn btn-email btn-submit email-btn agentMail" data-prop="" data-referno="{{$filter->reference_number}}" data-companyName="West Gate Real Estate" data-agentName="{{$filter->agentName}}" data-agentEmail="{{$filter->agentEmail}}" data-toggle="modal" data-target="#AgentemailModal" >Email</button></div>
                        
                    </div>
                    </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sell Your Property -->
                    <div class="sell-your-properties" style="margin-top: 20px;
">
                        <h3>Sell Your Property</h3>
                        <p>want to sell your property? List here your property we will assist you.</p>
                        <a href="{{url('submitPropertyForm')}}" class="btn blue btn-md" style="background-color: #0f6fb8; color: white;">Lsit Your Property</a>
                    </div>

                    <!-- Recent posts start -->
                    <div class="widget recent-posts">
                        <h5 class="sidebar-title">Recent Properties</h5>
                        @foreach($recent_properties as $re_property)
                        <div class="media mb-4">
                            <a href="{{url('property'.$filter->id)}}">
                                <img src="{{$re_property->photo1}}" alt="sub-property" style="width: 111px;height: 102px;">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="{{url('property'.$filter->id)}}" style="font-size: 12px;">{{$re_property->title_en}}</a>
                                </h5>
                                <p>{{$re_property->created_at->diffForHumans()}}</p>
                                <p> <strong>AED {{$re_property->price_yearly}}</strong></p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade AgentemailModal" id="AgentemailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Conatct Agent </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="myform" id="myform">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" placeholder="Name" id="sender-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="email" class="form-control" placeholder="Email" id="sender-email">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Phone Number:</label>
            <input type="tel" class="form-control" placeholder="Phone Number" id="sender-phone">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Select Type:</label>

             <select class="form-control" name="type" id="sender-type" >
                <option value="null">-- Select Option --</option>
                <option value="tenant">Tenant</option>
                <option value="agent">Agent</option>
                <option value="Other">Other</option>
            </select>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" placeholder="Message" id="sender-message"></textarea>
          </div>
          <div class="form-group" id="check-robot">
              <input type="checkbox" id="sender-robot" name="robot" required="">
              <label class="chkbox_label">I am not a robot &nbsp;<span class="robot-error text-danger"></span></label>
          </div>
          <div class="form-group">
            <input type="checkbox" name="sendnotification" checked="checked" >
            <label class="chkbox_label">Keep me Informed about similar properties</label>
        </div>
        <div class="form-group">
            <label>By sending an enquiry, you agree to our Terms of use.</label>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="button" class="btn btn-primary sendmail">Send message</button>
      </div>
    </div>
  </div>
</div>
<section id="best-offer" class="page-section paddingTop-10">
    <div class="container">
        <!-- Section Header / Title with Column Slider Control / Add 'header-column' to use this style -->
        <div class="section-header header-column" style="margin-top: -65px; background-color: white; height: 52px;">
            <h3 class="section-title heading" style="padding-top: 11px; padding-left: 24px;">Properties available in the same area</h3>
            <!-- Slider Control -->
            <div class="slide-control" style="float: right; margin-top: -4%; margin-right: 15px;">
                <button id="slide-left" class="slide-left" style="height: 34px; width: 35px;"><i class="fa fa-angle-left"></i></button>
                <button id="slide-right" class="slide-right" style="height: 34px; width: 35px;" ><i class="fa fa-angle-right"></i></button>
            </div>
        </div>
        <div id="product-slider" class="row product-slider" style="margin-top: 13px;">
            @if(isset($sameAreaProperties))
            @if(count($sameAreaProperties)>0)
            @foreach($sameAreaProperties as $filter)
                <div class="col-md-4">
                    <div class="property-box-4">
                        <!-- Property Img -->
                        <div class="property-thumbnail" data-prop-id ="{{$filter->id}}" style="cursor: pointer;">
                            <a href="{{url('property/'.$filter->id)}}" class="property-img">
                                <img src="{{$filter->photo->photo1}}" alt="property-3" class="img-fluid" style="height: 285px;">
                            </a>
                                <div class="text">
                                <div class="pull-left">
                                    <a href="{{url('property/'.$filter->id)}}">{{$filter->title_en}}</a>
                                </div>
                                <div class="pull-right price">
                                    AED {{$filter->price_yearly}}
                                </div>
                            </div>
 
                            
                        </div>
                    </div>  
                </div>
            @endforeach
            @endif
            @endif
        </div>
    </div>
</section>
<!-- Properties details page start -->
<script>
    

        var latitude = {{$filter->geopointLatitude}};
    var longitude = {{$filter->geopointLongitude}};

        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                scrollwheel: false,
                //center: new google.maps.LatLng(25.181195, 55.262857),
                center: new google.maps.LatLng(latitude, longitude),
            });

            var iconBase = '../assets/images/index.html';
            var icons = {
                property: {
                    icon: iconBase + 'icon_marker.png'
                },
            };

            function addMarker(feature) {
                var marker = new google.maps.Marker({
                    position: feature.position,
                    icon: icons[feature.type].icon,
                    map: map
                });
            }

            var features = [
                {
                
                    position: new google.maps.LatLng(latitude, longitude),
                    type: 'property'
                }
            ];

            for (var i = 0, feature; feature = features[i]; i++) {
                addMarker(feature);
            }
        }
    </script>
    <script type="text/javascript">
        function toggle_switch (argument) {

            var checkval = $('input[name="switch"]:checked').val();
            if(checkval == 1)
            {
                window.location.href = 'companies';
            }else{
                window.location.href = 'agents';
            }
        }
    </script>
    <script type="text/javascript">
            
        function DropDown(el) {
            this.dd = el;
            this.placeholder = this.dd.children('span');
            this.opts = this.dd.find('ul.dropdown > li');
            this.val = '';
            this.index = -1;
            this.initEvents();
        }
        DropDown.prototype = {
            initEvents : function() {
                var obj = this;
                obj.dd.on('click', function(event){
                    $(this).toggleClass('active');
                    return false;
                });

                obj.opts.on('click',function(){
                    var opt = $(this);
                    obj.val = opt.text();
                    obj.index = opt.index();
                    obj.placeholder.text(obj.val);
                    var currenturl = window.location.href;
                    var n = currenturl.indexOf('&sortby');
                    currenturl = currenturl.substring(0, n != -1 ? n : currenturl.length);
                    
                    var n = currenturl.indexOf('&per_page');
                    currenturl = currenturl.substring(0, n != -1 ? n : currenturl.length);
                    //currenturl = currenturl.substring(0, currenturl.indexOf('&sortby'));
                    currenturl +='&sortby='+obj.val.replace(' ', '-');
                    //alert(currenturl);
                    window.location.href =  currenturl;
                });
            },
            getValue : function() {
                return this.val;
            },
            getIndex : function() {
                return this.index;
            }
        };

        $(function() {
            var dd = new DropDown( $('#dd') );
            $(document).click(function() {
                $('.wrapper-dropdown-3').removeClass('active');
            });
        });

    </script>
<script type="text/javascript">
    $(document).on('click', '.more-toggle', function(event) {
        event.preventDefault();
        if($(this).hasClass('more'))
        {
            $('#extra_search').slideDown();

            $(this).removeClass('more');
            $(this).addClass('less');
            $(this).html('<i class="fa fa-angle-up fa-fw"></i>Advance');
        }else{
            $('#extra_search').slideUp();
            $(this).removeClass('less');
            $(this).addClass('more');
            $(this).html('<i class="fa fa-angle-down fa-fw"></i>Advance');
        }
    });             
    $(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#grid').removeClass('btn-success'); $(this).addClass('btn-success');$('#products .item').removeClass('grid-group-item');$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#list').removeClass('btn-success'); $(this).addClass('btn-success');$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
    
});
    $( window ).resize(function() {
  var scrn_width =  $( window ).width();
  if(scrn_width < '767')
  {
    $('#products .item').addClass('list-group-item');
    $('#products .item').removeClass('grid-group-item');
  }else if($('#grid').hasClass('btn-success')){
    $('#products .item').removeClass('list-group-item');
    $('#products .item').addClass('grid-group-item');
  }
});
    $(document).ready(function() {
    $(window).on("scroll",function(){
        var sitesearch2 = $('#search_bar');
        if($(this).scrollTop()>105)
            {
                sitesearch2.addClass("search-fix");
            }else {
                sitesearch2.removeClass("search-fix");
            }
    }); 
    });

</script>


@include('Includes.footernew')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>

<script>
    var agetRefno;
    var agetName;
    var agetEmail; 
    $('.agentMail').on('click', function(){

         agetRefno = $(this).attr('data-referno');
         agetName = $(this).attr('data-agentName');
         agetEmail = $(this).attr('data-agentEmail');

        console.log(agetRefno);
        console.log(agetName);
        console.log(agetEmail);

    })
      $("input").keyup(function(){
        $(this).css('border', '1px solid #ced4da');
      });
      $("select").on('change',function(){
        $(this).css('border', '1px solid #ced4da');
      });
      $("textarea").keyup(function(){
        $(this).css('border', '1px solid #ced4da');
      });
    $('.sendmail').on('click', function(){
        // console.log(agetRefno);
        // console.log(agetName);
        // console.log(agetEmail);
        var name = $("#sender-name").val();
        var email = $("#sender-email").val();
        var phone = $("#sender-phone").val();
        var message = $("#sender-message").val();
        $('select').change(function(){
            $(this).find(':selected').addClass('selected')
                .siblings('option').removeClass('selected');
        })
        var type = $( "#sender-type option:selected" ).val();


        if(name == '' || typeof name == 'undefined'){
            $("#sender-name").css('border', '1px solid red');
        }
        if(email == '' || typeof email == 'undefined'){
            $("#sender-email").css('border', '1px solid red');
        }
        if(phone == '' || typeof phone == 'undefined'){
            $("#sender-phone").css('border', '1px solid red');
        }
        if(type == '' || typeof type === 'undefined' || type == 'null'){
            $("#sender-type").css('border', '1px solid red');
        }
        if(message == '' || typeof message == 'undefined'){
            $("#sender-message").css('border', '1px solid red');
        }

        if ($('#sender-robot').is(":checked"))
        {
            var checkbox = document.getElementById('sender-robot').value;

        }else{
            var checkbox = null;
        }
        
        if(checkbox == null || typeof checkbox == 'null' || typeof checkbox == 'undefined'){
            $( ".error" ).remove();
            $('#check-robot').append('<p class="alert alert-danger error">Please check the checkbox to make sure you are not a robot.');
        }

        if(name == '' || typeof name == 'undefined' || email == '' || typeof email == 'undefined' || phone == '' || typeof phone == 'undefined' || type == '' || typeof type === 'undefined' || type == 'null' || message == '' || typeof message == 'undefined' || checkbox == null || typeof checkbox == 'null' || typeof checkbox == 'undefined'){

            $.toast({
                heading: 'Error',
                text: 'Please fill all required fields to submit form.',
                icon: 'error',
                position: 'top-right',
                loader: true,        // Change it to false to disable loader
                loaderBg: '#9EC600',  // To change the background
                showHideTransition: 'slide',
                hideAfter: 5000,
                allowToastClose: true, 

            })
        }else{
            $.ajax({
                url: "<?php echo url('contactAgent') ?>",
                type: "POST",
                data:{
                    "_token" : "{{ csrf_token() }}",
                    'agetRefno' : agetRefno,
                    'agetName' : agetName,
                    'agetEmail' : agetEmail,
                    'name' : name,
                    'email' : email,
                    'phone' : phone,
                    'type' : type,
                    'message' : message,
                },
                success:function(data){
                    $('.AgentemailModal').modal('hide'); 
                    $('#myform')[0].reset();
                    $.toast({
                        heading: 'Success',
                        text: 'Your email is received. Agent will get you back soon.',
                        icon: 'success',
                        position: 'top-right',
                        loader: true,        // Change it to false to disable loader
                        loaderBg: '#9EC600',  // To change the background
                        showHideTransition: 'slide',
                        hideAfter: 5000,
                        allowToastClose: true, 

                    })
                }
            })
        }
    })


    $('.call-btn').on('click', function(){
        var refer_no = $(this).attr('data-referno');
        if(refer_no != '' || typeof refer_no != 'undefined' || refer_no != null){

            $(".refer_no").empty();

            $(".refer_no").append(refer_no);
        }
    })
</script>