@include('Includes.headernew')
<!-- Banner start -->

<style type="text/css">
@media (min-width: 990px) {
	.show-hide,.form-toggle {
		display: none ;
			}
			.search-tabmenu,.search-inner{
				display: block ;
			}
			.search-tabmenu{
				width: 70%;
			}
		}
.slick-slide-item{
    padding:0px !important;
}
.services-info-3{
    width: 50%;
}
.s-brd-3{
    border-bottom: 1px solid #f1f2f3 !important;
}
</style>
<div class="banner" id="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{url('public/edenfortDocs/assets/images/d185dd.jpg')}}" height="" alt="banner" style="height: 900px;width: 100%;">
 
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{url('public/assets/img/banner-2.jpg')}}" height=""  alt="banner" style="height: 900px;width: 100%;">
             
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{url('public/assets/img/banner-3.jpg')}}" height=""  alt="banner" style="height: 900px;width: 100%;">
              
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
        </a>
    </div>
</div>

  <div class="container my-4">

    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Controls-->
      <div class="controls-top" style="text-align: right;margin-bottom: 10px;position: absolute;
    margin-left: 93%;">
        <a class="btn-floating f_slide_ind_l" style="padding: 10px;background: #0f6fb9;color: white;" href="#multi-item-example" data-slide="prev"><i  class="fa fa-chevron-left"></i></a>
        <a class="btn-floating f_slide_ind_r" href="#multi-item-example" style="padding: 10px;background: #0f6fb9;color: white;
    " data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
        <li data-target="#multi-item-example" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

    <h5 class="slide_heading" style="font-weight: bold;">Properties For Sale in Dubai</h5><hr>
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">

          <div class="row">
            @foreach($properties_sale_row1 as $property_sale_row1)
            <div class="col-md-4 clearfix  d-md-block">
                 <div class="slick-slide-item">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="{{url('/')}}/property{{$property_sale_row1->id}}" class="property-img" style="height: 233px;">
                            <div class="tag button alt featured">{{$property_sale_row1->offering_type1}}</div>
                            <div class="price-ratings-box">
                                <p class="price">
                                    AED {{$property_sale_row1->price_yearly}}
                                </p>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <img src="{{$property_sale_row1->photo1}}" alt="property-1" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="{{url('/')}}/property{{$property_sale_row1->id}}" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="assets/img/property-1.jpg" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="assets/img/property-6.jpg" class="hidden"></a>
                                <a href="assets/img/property-3.jpg" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="{{url('/')}}/property{{$property_sale_row1->id}}">{{$property_sale_row1->title_en}}</a>
                        </h1>
                        <div class="location">
                            <a href="{{url('/')}}/property{{$property_sale_row1->id}}">
                                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>{{$property_sale_row1->location}}
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> {{$property_sale_row1->bedroom}} Bedrooms
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> {{$property_sale_row1->bathroom}} Bathrooms
                            </li>
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:{{$property_sale_row1->size}}
                            </li>
                            <li>
                                <i class="flaticon-car-repair"></i> Furnished: {{$property_sale_row1->furnished}}
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#">
                            <i class="fa fa-user"></i> {{$property_sale_row1->agentName}}
                        </a>
                        <span>
                            <i class="fa fa-calendar-o"></i> {{$property_sale_row1->created_at->diffForHumans()}}
                        </span>
                    </div>
                </div>
            </div>
            </div>
            @endforeach
          </div>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">
        <div class="row">
            @foreach($properties_sale_row2 as $property_sale_row2)
            <div class="col-md-4 clearfix  d-md-block">
                 <div class="slick-slide-item">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="{{url('/')}}/property{{$property_sale_row2->id}}" class="property-img" style="height: 233px;">
                            <div class="tag button alt featured">{{$property_sale_row2->offering_type1}}</div>
                            <div class="price-ratings-box">
                                <p class="price">
                                    AED {{$property_sale_row2->price_yearly}}
                                </p>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <img src="{{$property_sale_row2->photo1}}" alt="property-1" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="{{url('/')}}/property{{$property_sale_row2->id}}" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="assets/img/property-1.jpg" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="assets/img/property-6.jpg" class="hidden"></a>
                                <a href="assets/img/property-3.jpg" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="{{url('/')}}/property{{$property_sale_row2->id}}">{{$property_sale_row2->title_en}}</a>
                        </h1>
                        <div class="location">
                            <a href="{{url('/')}}/property{{$property_sale_row2->id}}">
                                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>{{$property_sale_row2->location}}
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> {{$property_sale_row2->bedroom}} Bedrooms
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> {{$property_sale_row2->bathroom}} Bathrooms
                            </li>
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:{{$property_sale_row2->size}}
                            </li>
                            <li>
                                <i class="flaticon-car-repair"></i> Furnished: {{$property_sale_row2->furnished}}
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#">
                            <i class="fa fa-user"></i> {{$property_sale_row2->agentName}}
                        </a>
                        <span>
                            <i class="fa fa-calendar-o"></i> {{$property_sale_row2->created_at->diffForHumans()}}
                        </span>
                    </div>
                </div>
            </div>
            </div>
            @endforeach
          </div>

        </div>
        <!--/.Second slide-->

        <!--Third slide-->
        <div class="carousel-item">

           <div class="row">
           @foreach($properties_sale_row3 as $property_sale_row3)
            <div class="col-md-4 clearfix  d-md-block">
                 <div class="slick-slide-item">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="{{url('/')}}/property{{$property_sale_row3->id}}" class="property-img" style="height: 233px;">
                            <div class="tag button alt featured">{{$property_sale_row3->offering_type1}}</div>
                            <div class="price-ratings-box">
                                <p class="price">
                                    AED {{$property_sale_row3->price_yearly}}
                                </p>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <img src="{{$property_sale_row3->photo1}}" alt="property-1" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="{{url('/')}}/property{{$property_sale_row3->id}}" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="assets/img/property-1.jpg" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="assets/img/property-6.jpg" class="hidden"></a>
                                <a href="assets/img/property-3.jpg" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="{{url('/')}}/property{{$property_sale_row3->id}}">{{$property_sale_row3->title_en}}</a>
                        </h1>
                        <div class="location">
                            <a href="{{url('/')}}/property{{$property_sale_row3->id}}">
                                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>{{$property_sale_row3->location}}
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> {{$property_sale_row3->bedroom}} Bedrooms
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> {{$property_sale_row3->bathroom}} Bathrooms
                            </li>
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:{{$property_sale_row3->size}}
                            </li>
                            <li>
                                <i class="flaticon-car-repair"></i> Furnished: {{$property_sale_row3->furnished}}
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#">
                            <i class="fa fa-user"></i> {{$property_sale_row3->agentName}}
                        </a>
                        <span>
                            <i class="fa fa-calendar-o"></i> {{$property_sale_row3->created_at->diffForHumans()}}
                        </span>
                    </div>
                </div>
            </div>
            </div>
            @endforeach
          </div>

        </div>
        <!--/.Third slide-->

      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->


  </div>

  <div class="container my-4">

    <!--Carousel Wrapper-->
    <div id="multi-item-example1" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Controls-->
      <div class="controls-top" style="text-align: right;margin-bottom: 10px;position: absolute;
    margin-left: 93%;">
        <a class="btn-floating f_slide_ind_l" style="padding: 10px;background: #0f6fb9;color: white;" href="#multi-item-example1" data-slide="prev"><i  class="fa fa-chevron-left"></i></a>
        <a class="btn-floating f_slide_ind_r" href="#multi-item-example1" style="padding: 10px;background: #0f6fb9;color: white;" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item1" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item1" data-slide-to="1"></li>
        <li data-target="#multi-item1" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

    <h5 class="slide_heading" style="font-weight: bold;">Properties For Rent in Dubai</h5><hr>
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">

          <div class="row">
            @foreach($properties_rent_row1 as $property_rent_row1)
            <div class="col-md-4 clearfix  d-md-block">
                 <div class="slick-slide-item">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img">
                            <div class="tag button alt featured">{{$property_rent_row1->offering_type1}}</div>
                            <div class="price-ratings-box">
                                <p class="price">
                                    AED {{$property_rent_row1->price_yearly}}
                                </p>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <img src="{{$property_rent_row1->photo1}}" alt="property-1" class="img-fluid" style="height: 233px;">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="assets/img/property-1.jpg" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="assets/img/property-6.jpg" class="hidden"></a>
                                <a href="assets/img/property-3.jpg" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="properties-details.html">{{$property_rent_row1->title_en}}</a>
                        </h1>
                        <div class="location">
                            <a href="properties-details.html">
                                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>{{$property_rent_row1->location}}
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> {{$property_rent_row1->bedroom}} Bedrooms
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> {{$property_rent_row1->bathroom}} Bathrooms
                            </li>
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:{{$property_rent_row1->size}}
                            </li>
                            <li>
                                <i class="flaticon-car-repair"></i> Furnished: {{$property_rent_row1->furnished}}
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#">
                            <i class="fa fa-user"></i> {{$property_rent_row1->agentName}}
                        </a>
                        <span>
                            <i class="fa fa-calendar-o"></i> {{$property_rent_row1->created_at->diffForHumans()}}
                        </span>
                    </div>
                </div>
            </div>
            </div>
            @endforeach
          </div>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">
        <div class="row">
            @foreach($properties_rent_row2 as $property_rent_row2)
            <div class="col-md-4 clearfix  d-md-block">
                 <div class="slick-slide-item">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img">
                            <div class="tag button alt featured">{{$property_rent_row2->offering_type1}}</div>
                            <div class="price-ratings-box">
                                <p class="price">
                                    AED {{$property_rent_row2->price_yearly}}
                                </p>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <img src="{{$property_rent_row2->photo1}}" alt="property-1" class="img-fluid" style="height: 233px;">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="assets/img/property-1.jpg" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="assets/img/property-6.jpg" class="hidden"></a>
                                <a href="assets/img/property-3.jpg" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="properties-details.html">{{$property_rent_row2->title_en}}</a>
                        </h1>
                        <div class="location">
                            <a href="properties-details.html">
                                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>{{$property_rent_row2->location}}
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> {{$property_rent_row2->bedroom}} Bedrooms
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> {{$property_rent_row2->bathroom}} Bathrooms
                            </li>
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:{{$property_rent_row2->size}}
                            </li>
                            <li>
                                <i class="flaticon-car-repair"></i> Furnished: {{$property_rent_row2->furnished}}
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#">
                            <i class="fa fa-user"></i> {{$property_rent_row2->agentName}}
                        </a>
                        <span>
                            <i class="fa fa-calendar-o"></i> {{$property_rent_row2->created_at->diffForHumans()}}
                        </span>
                    </div>
                </div>
            </div>
            </div>
            @endforeach
          </div>

        </div>
        <!--/.Second slide-->

        <!--Third slide-->
        <div class="carousel-item">

           <div class="row">
           @foreach($properties_rent_row3 as $property_rent_row3)
            <div class="col-md-4 clearfix  d-md-block">
                 <div class="slick-slide-item">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img">
                            <div class="tag button alt featured">{{$property_rent_row3->offering_type1}}</div>
                            <div class="price-ratings-box">
                                <p class="price">
                                    AED {{$property_rent_row3->price_yearly}}
                                </p>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <img src="{{$property_rent_row3->photo1}}" alt="property-1" class="img-fluid" style="height: 233px;">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="assets/img/property-1.jpg" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="assets/img/property-6.jpg" class="hidden"></a>
                                <a href="assets/img/property-3.jpg" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="properties-details.html">{{$property_rent_row3->title_en}}</a>
                        </h1>
                        <div class="location">
                            <a href="properties-details.html">
                                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>{{$property_rent_row3->location}}
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> {{$property_rent_row3->bedroom}} Bedrooms
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> {{$property_rent_row3->bathroom}} Bathrooms
                            </li>
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:{{$property_rent_row3->size}}
                            </li>
                            <li>
                                <i class="flaticon-car-repair"></i> Furnished: {{$property_rent_row3->furnished}}
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#">
                            <i class="fa fa-user"></i> {{$property_rent_row3->agentName}}
                        </a>
                        <span>
                            <i class="fa fa-calendar-o"></i> {{$property_rent_row3->created_at->diffForHumans()}}
                        </span>
                    </div>
                </div>
            </div>
            </div>
            @endforeach
          </div>

        </div>
        <!--/.Third slide-->

      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->


  </div>

<!-- Agent start -->
<!-- <div class="agent content-area">
    <div class="container">
        <div class="main-title">
            <h1>Meet Our Agents</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row">
            @foreach($agents as $agent)
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                <div class="agent-2">
                    <div class="agent-photo">
                        <a href="{{url('/')}}/agent{{$agent->id}}">
                            <img src="{{$agent->image}}" alt="avatar-5" class="img-fluid" style="height: 250px;">
                        </a>
                    </div>
                    <div class="agent-details">
                        <h5><a href="agent-detail.html">{{$agent->First_name}} {{$agent->Last_name}}</a></h5> -->
                        <!-- <p>Web Developer</p> -->
                        <!-- <ul class="social-list clearfix">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div > -->
<!-- Agent end -->

<!-- services start -->
<div class="services content-area-20 bg-white">
    <div class="container">
        <div class="main-title">
            <h1>What Are you Looking For?</h1>
            <p>We are here for you.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 services-info-3 s-brd-2 wow fadeInLeft delay-04s">
                <i class="flaticon-hotel-building" style="color: #0f6fb9;"></i>
                <h5 style="color: #0f6fb9;">Apartments Clean</h5>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p> -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 services-info-3 s-brd-1 wow fadeInUp delay-04s">
                <i class="flaticon-house" style="color: #f6911d;"></i>
                <h5 style="color: #f6911d;">Houses</h5>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p> -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 services-info-3 s-brd-3 wow fadeInDown delay-04s">
                <i class="flaticon-call-center-agent" style="color: #0f6fb9;"></i>
                <h5 style="color: #0f6fb9;">Support 24/7</h5>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p> -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 services-info-3 wow fadeInRight delay-04s">
                <i class="flaticon-office-block" style="color: #f6911d;"></i>
                <h5 style="color: #f6911d;">Commercial</h5>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p> -->
            </div>
        </div>
    </div>
</div>
<!-- services end -->

<!-- we exit ti keep -->
<div class="services content-area-20 bg-white" style="margin-top: -10%">
    <div class="container">
        <div class="main-title">
            <h1>We Exit to Keep</h1>
            <p>Satisfaction is a key to build trust.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 services-info-3 s-brd-2 wow fadeInLeft delay-04s">
                <img src="public/edenfortDocs/icons/deal.png" alt="deal.png" style="height: 75px;">
                <h5 style="color: #0f6fb9;">Our Clients Satisfied</h5>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p> -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 services-info-3 s-brd-1 wow fadeInUp delay-04s">
                <img src="public/edenfortDocs/icons/agreement.png" alt="agreement.png" style="height: 75px;">
                <h5 style="color: #f6911d;">Our Affiliates Happy</h5>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p> -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 services-info-3 s-brd-3 wow fadeInDown delay-04s">
                <img src="public/edenfortDocs/icons/diamond.png" alt="diamond.png" style="height: 75px;">
                <h5 style="color: #0f6fb9;">Our Brand Competitive</h5>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p> -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 services-info-3 wow fadeInRight delay-04s">
                <img src="public/edenfortDocs/icons/winner.png" alt="winner.png" style="height: 75px;">
                <h5 style="color: #f6911d;">Our Staff Motivated</h5>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p> -->
            </div>
        </div>
    </div>
</div>
<!-- we exit ti keep -->

<!-- intro section start -->
<div class="intro-section" style="background-color: #f1f1f1;">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12">
              <!--   <img src="{{url('public/assets/img/logos/logo.jpg')}}" width="30%" alt="loo"> -->
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12">
                <div class="intro-text">
                    <h3 style="color: #000;">Looking To Sell Or Rent Your Property?</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <a href="{{url('submitPropertyForm')}}" class="btn btn-md sn">Submit Now</a>
            </div>
        </div>
    </div>
</div>
<!-- intro section end -->
@include('Includes.footernew')
