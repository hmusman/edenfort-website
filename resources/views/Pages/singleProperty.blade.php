@include('Includes.headernew')


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
            	<li><a href="{{url('footerFilter?propertyType=&category=&city=Dubai')}}"> {{$filter->city}}</a></li>
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
                    <ul class="carousel-indicators smail-properties list-inline nav nav-justified ">
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

                        
                    </ul>
                </div>
                <!-- Search area start -->
                <div class="search-area widget-2 d-lg-none d-xl-none">
                    <!-- <h5 class="sidebar-title">Advanced Search</h5> -->
                    <div class="search-area-inner">
                        <div class="search-contents ">
                             <div class="widget search-area d-none d-xl-block d-lg-block">
                        @if(isset($agentPic))                              
                            @foreach($agentPic as $aP)
                                @if($aP->image !== "NULL")
                                <img src="{{$aP->image}}" alt="{{$aP->user_name}}" style="height: 275px; width: 288px; border: 1px solid gainsboro;">
                                <span class="compnay_img"><img src="public/edenfortDocs/assets/images/smallLogo.png" alt="eden fort real estate" style="margin-top: -25%; margin-left: 1px; background-color: #f1f1f1; height: 45px;"></span>
                                @else
                                <img src="{{$aP->image}}" alt="{{$aP->user_name}}" style="height: 275px; width: 288px; border: 1px solid gainsboro;">
                                @endif

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
                    
                    <div class="col-md-6 col-sm-6 paddingTop-20"><button class="btn btn-success btn-submit call-btn" data-phone="{{$filter->agentPhone}}" data-secphone="" data-companyphone="" data-referno="{{$filter->reference_number}}" data-companyName="West Gate Real Estate" data-agentName="{{$filter->agentName}}" data-toggle="modal" data-target="#callModal">Call</button></div>
                        <div class="col-md-6 col-sm-6 paddingTop-20"><button class="btn btn-email btn-submit email-btn" data-prop="" data-referno="{{$filter->reference_number}}" data-companyName="West Gate Real Estate" data-agentName="{{$filter->agentName}}" data-agentEmail="{{$filter->agentEmail}}" data-toggle="modal" data-target="#emailModal" >Email</button></div>
                        
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
                                <!-- <li><span><i class="flaticon-draw-check-mark"></i> 2 Bathroom</span></li> -->
                            </ul>
                        </div>
                        <!-- <div class="col-md-4 col-sm-6">
                            <ul>
                                <li><span><i class="flaticon-draw-check-mark"></i> 1 Garage</span></li>
                                <li><span><i class="flaticon-draw-check-mark"></i> 1 Balcony</span></li>
                            </ul>
                        </div -->
                        <!-- <div class="col-md-4 col-sm-6">
                            <ul>
                                <li><span><i class="flaticon-draw-check-mark"></i> 4800 sq ft</span></li>
                                <li><span><i class="flaticon-draw-check-mark"></i> TV</span></li>
                            </ul>
                        </div> -->
                    </div>
                </div>

                <!-- Features opions start -->
                <!-- <div class="features-opions af mb-60">
                    <h3 class="heading">Features</h3>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Air conditioning
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Wifi
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Swimming Pool
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Double Bed
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Balcony
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Telephone
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Garage
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Parking
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    TV
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Home Theater
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Alarm
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Garage
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Gym
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Electric Range
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Private space
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->

                <!-- Section Location start -->
                <div class="section-location mb-60">
                    <h3 class="heading">Property Location</h3>
                    <div class="map">
                        <div id="map" class="contact-map"></div>
                    </div>
                </div>
                    
                <!-- Related properties start -->
                <!-- <div class="related-properties hedin-mb-30">
                    <h3 class="heading">Related Properties</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="property-box-4"> -->
                                <!-- Property Img -->
                                <!-- <div class="property-thumbnail">
                                    <a href="properties-details.html" class="property-img">
                                        <img src="{{url('public/assets/img/property-3.jpg')}}" alt="property-3" class="img-fluid">
                                    </a>
                                    <div class="property-overlay">
                                        <a href="properties-details.html" class="overlay-link">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="overlay-link property-video" title="Test Title">
                                            <i class="fa fa-video-camera"></i>
                                        </a>
                                        <div class="property-magnify-gallery">
                                            <a href="assets/img/property-3.jpg" class="overlay-link">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                            <a href="assets/img/property-1.jpg" class="hidden"></a>
                                            <a href="assets/img/property-4.jpg" class="hidden"></a>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <div class="pull-left">
                                            <a href="properties-details.html">Beautiful Single Home</a>
                                        </div>
                                        <div class="pull-right price">
                                            $320.00
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="property-box-4"> -->
                                <!-- Property Img -->
                                <!-- <div class="property-thumbnail">
                                    <a href="properties-details.html" class="property-img">
                                        <img src="{{url('public/assets/img/property-6.jpg')}}" alt="property-6" class="img-fluid">
                                    </a>
                                    <div class="property-overlay">
                                        <a href="properties-details.html" class="overlay-link">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="overlay-link property-video" title="Test Title">
                                            <i class="fa fa-video-camera"></i>
                                        </a>
                                        <div class="property-magnify-gallery">
                                            <a href="assets/img/property-6.jpg" class="overlay-link">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                            <a href="assets/img/property-8.jpg" class="hidden"></a>
                                            <a href="assets/img/property-4.jpg" class="hidden"></a>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <div class="pull-left">
                                            <a href="properties-details.html">Modern Family Home</a>
                                        </div>
                                        <div class="pull-right price">
                                            $320.00
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
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
                                @if($aP->image !== "NULL")
                                <img src="{{$aP->image}}" alt="{{$aP->user_name}}" style="height: 275px; width: 288px; border: 1px solid gainsboro;">
                                <span class="compnay_img"><img src="public/edenfortDocs/assets/images/smallLogo.png" alt="eden fort real estate" style="margin-top: -25%; margin-left: 1px; background-color: #f1f1f1; height: 45px;"></span>
                                @else
                                <img src="{{$aP->image}}" alt="{{$aP->user_name}}" style="height: 275px; width: 288px; border: 1px solid gainsboro;">
                                @endif

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
                    
                    <div class="col-md-6 col-sm-6 paddingTop-20"><button class="btn btn-success btn-submit call-btn" data-phone="{{$filter->agentPhone}}" data-secphone="" data-companyphone="" data-referno="{{$filter->reference_number}}" data-companyName="West Gate Real Estate" data-agentName="{{$filter->agentName}}" data-toggle="modal" data-target="#callModal">Call</button></div>
                        <div class="col-md-6 col-sm-6 paddingTop-20"><button class="btn btn-email btn-submit email-btn" data-prop="" data-referno="{{$filter->reference_number}}" data-companyName="West Gate Real Estate" data-agentName="{{$filter->agentName}}" data-agentEmail="{{$filter->agentEmail}}" data-toggle="modal" data-target="#emailModal" >Email</button></div>
                        
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
                        <div class="property-thumbnail">
                            <a href="{{url('property'.$filter->id)}}" class="property-img">
                                <img src="{{$filter->photo->photo1}}" alt="property-3" class="img-fluid" style="height: 285px;">
                            </a>
                            <!-- <div class="property-overlay">
                                <a href="{{url('property'.$filter->id)}}" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="overlay-link property-video" title="Test Title">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                                <div class="property-magnify-gallery">
                                    <a href="assets/img/property-3.jpg" class="overlay-link">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                    <a href="assets/img/property-1.jpg" class="hidden"></a>
                                    <a href="assets/img/property-4.jpg" class="hidden"></a>
                                </div>
                            </div> -->
                                <div class="text">
                                <div class="pull-left">
                                    <a href="{{url('property'.$filter->id)}}">{{$filter->title_en}}</a>
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