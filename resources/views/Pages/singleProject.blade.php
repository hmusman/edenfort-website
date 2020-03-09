@include('Includes.headernew')
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110654029-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110654029-1');
</script>	<!-- ====== END HEADER ====== -->

<style>
     @media (max-width: 768px){
        .servic_rop{
            width: 346px !important;
            margin-left: -5px !important;
        }
        .icons {
            margin-left: 24px !important;
            text-align: center !important;
        }
        .media{
            width: 100% !important;
            margin-left: 0px !important;
        }
        .service{
        border:1px solid white !important;
    }
     }

	.tab{
		border-bottom:1px solid #e6e5e5;
	}
	.service{
		border:1px solid #fafafa;
	}
	.icons{
		margin-left: 17px;
        text-align: center;
	}
	.service_name{
		    font-size: 12px;
	}
	h6{
        text-align: center;
    }
</style>

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Project Detail</h1>
            <ul class="breadcrumbs">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">Azizi Grand</li>
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
                                    <h3>Azizi Grand</h3>
                                    <p><i class="fa fa-map-marker"></i>{{$projectDetail->location}}</p>
                                </div>
                                <div class="p-r">
                                    <h3>$420,00</h3>
                                    <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- main slider carousel items -->
                    <div class="carousel-inner">
                        <div class="active item carousel-item" data-slide-number="0">
                            <img src="public/edenfortDocs/assets/images/project.jpg" class="img-fluid" alt="property-4">
                        </div>
                        <div class="item carousel-item" data-slide-number="1">
                            <img src="public/edenfortDocs/assets/images/project.jpg" class="img-fluid" alt="property-6">
                        </div>
                        <div class="item carousel-item" data-slide-number="2">
                            <img src="public/edenfortDocs/assets/images/project.jpg" class="img-fluid" alt="property-1">
                        </div>
                        <div class="item carousel-item" data-slide-number="4">
                            <img src="public/edenfortDocs/assets/images/project.jpg" class="img-fluid" alt="property-5">
                        </div>
                        <div class="item carousel-item" data-slide-number="5">
                            <img src="public/edenfortDocs/assets/images/project.jpg" class="img-fluid" alt="property-8">
                        </div>

                        <a class="carousel-control left" href="#propertiesDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="carousel-control right" href="#propertiesDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>

                    </div>
                    <!-- main slider carousel nav controls -->
                    <ul class="carousel-indicators smail-properties list-inline nav nav-justified">
                        <li class="list-inline-item active">
                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#propertiesDetailsSlider">
                                <img src="public/edenfortDocs/assets/images/project.jpg" class="img-fluid" alt="property-4">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">
                                <img src="public/edenfortDocs/assets/images/project.jpg" class="img-fluid" alt="property-6">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-2" data-slide-to="2" data-target="#propertiesDetailsSlider">
                                <img src="public/edenfortDocs/assets/images/project.jpg" class="img-fluid" alt="property-1">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-3" data-slide-to="3" data-target="#propertiesDetailsSlider">
                                <img src="public/edenfortDocs/assets/images/project.jpg" class="img-fluid" alt="property-5">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-4" data-slide-to="4" data-target="#propertiesDetailsSlider">
                                <img src="public/edenfortDocs/assets/images/project.jpg" class="img-fluid" alt="property-8">
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Search area start -->
                <div class="search-area widget-2 d-lg-none d-xl-none">
                    <h5 class="sidebar-title">Send Inquiry</h5>
                    <div class="col-md-12 text-center">
					@if(session('msg'))
              			{!! session('msg') !!}
               		@endif	
						<div class="alert alert-success text-center lead_success" style="display:none; padding:10px;">
							Email Sent Successfully!
						</div>
						<div class="alert alert-danger text-center lead_fail" style="display:none; padding:10px;">
							Sorry! Please try again.
						</div>
						<div class="alert alert-danger text-center lead_dublicate" style="display:none; padding:10px;">
							<strong>Alert!</strong> Email already sent for this project.
						</div>
					</div>
                    <div class="search-area-inner">
                        <div class="search-contents ">
                            <form action="{{url('contactUsForm')}}" method="post" accept-charset="utf-8">
                            	@csrf
                                <div class="form-group">
                                    <label>Name:</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name*" value="" required>
                                </div>
                                <div class="form-group">
                                    <label>Phone*:</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Phone*" value="" required>
                                </div>
                                <div class="form-group">
                                    <label>Email*:</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email*" value="" required>
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" name="subject" class="form-control" placeholder="Subject*" value="" required>
                                </div>
                                <div class="form-group">
                                    <label>Message*:</label>
                                    <textarea name="message" id="messages" cols="30" rows="7" class="form-control" placeholder="Message*"  required></textarea>
                                </div>
                                <br>
                                <div class="form-group">
                                    <span style="position: absolute; margin-top: -22px; color: red">
											</span>
									    <div class="g-recaptcha" data-sitekey="6Le2500UAAAAALZTPAGNyqApyX61oFgmF6YSN3Fp"></div>
                                </div>
                                <br/>
                                <button class="search-button btn-md btn-color"type="submit"
									name="submit" value="Submit" style="background-color: #f6911d">Submit</button>
                            </form>
                        </div>
                    </div><br>
                </div>

                <!-- Property description start -->
                <div class="property-description mb-60">
                    <h3 class="heading" style="font-size: 30px;">About Project</h3>
                    <p><strong>Azizi Grand</strong>&nbsp;is a new residential launch of Azizi Developments which features 431 luxurious apartments that offer an unparalleled level of convenience and amenities. Each apartment is furnished and delivered with a modern and fresh interior design.</p>

					<p><strong>Location:</strong> Dubai Sports City, Dubai, UAE</p>

					<p><strong>Key Features:</strong></p>

					<ul>
						<li>Fantastic views on new Alfay Road,</li>
						<li>Extended open space view towards Mohamed Bin Rashid Road</li>
						<li>Nearby Dubai International Cricket Stadium and Golf Club.</li>
						<li>Convenient access from Mohamed Bin Rashid Road.</li>
						<li>Sports Parks</li>
						<li>Football Centre</li>
						<li>Canal Promenade Retail</li>
						<li>Sporting features</li>
					</ul>

					<p>&nbsp;</p>	
                </div>
                <!-- Floor plans start -->
                <div class="floor-plans mb-60" style="margin-top: -7%;">
                    <table>
                        <tr>
							<th>Master Comunity</th>
							<td class="ucfirst">dubai sports city</td>
						</tr>
						<tr class="tab">
							<th>Property Type</th>
							<td class="ucfirst">apartment</td>
						</tr>
						<tr class="tab">
							<th>Location</th>
							<td class="ucfirst">dubai sports city, dubai</td>
						</tr>
						<tr class="tab">
							<th>Status</th>
							<td class="ucfirst">under construction</td>
						</tr>
						<tr class="tab">
							<th>Estimated Completion Year</th>
							<td class="ucfirst">Dec, 2019</td>
						</tr>
						<tr class="tab">
							<th>Life Cycle:</th>
							<td class="ucfirst">under construction</td>
						</tr>
						<tr>
							<th>Under Construction Buildings:</th>
							<td class="ucfirst">1</td>
						</tr>
                    </table>
                </div>

                <!-- Property vedio start -->
                <div class="property-video mb-60">
                    <h3 class="heading">Property Vedio</h3>
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tOUOcNIEwWY" frameborder="0" allowfullscreen ></iframe>
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
                    <div class="widget search-area d-none d-xl-block d-lg-block">
                        <h5 class="sidebar-title">Send Inquiry</h5>
                        <div class="col-md-12 text-center">
						@if(session('msg'))
	              			{!! session('msg') !!}
	               		@endif	
							<div class="alert alert-success text-center lead_success" style="display:none; padding:10px;">
								Email Sent Successfully!
							</div>
							<div class="alert alert-danger text-center lead_fail" style="display:none; padding:10px;">
								Sorry! Please try again.
							</div>
							<div class="alert alert-danger text-center lead_dublicate" style="display:none; padding:10px;">
								<strong>Alert!</strong> Email already sent for this project.
							</div>
						</div>
                        <div class="search-area-inner">
                            <div class="search-contents ">
                                <form method="GET">
                                    <div class="form-group">
                                        <label>Name*:</label>
                                       <input type="text" name="name" class="form-control" placeholder="Name*" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone*:</label>
                                        <input type="text" name="phone" class="form-control" placeholder="Phone*" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email*:</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email*" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Subject*:</label>
                                        <input type="text" name="subject" class="form-control" placeholder="Subject*" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Message*:</label>
                                        <textarea name="message" id="messages" cols="30" rows="7" class="form-control" placeholder="Message*"  required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <span style="position: absolute; margin-top: -22px; color: red">
											</span>
									    <div class="g-recaptcha" data-sitekey="6Le2500UAAAAALZTPAGNyqApyX61oFgmF6YSN3Fp"></div>
                                    </div>
                                    <br>
                                    <br/>
                                    <button type="submit" name="submit" value="Submit" class="search-button btn-md btn-color" style="background-color: #f6911d">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div><hr>

                    <!-- Recent posts start -->
                    <div class="widget recent-posts">
                        <h5 class="sidebar-title">Sale Prices</h5>
                        <div class="media mb-4" style="background-color: #f6911d;width: 114%;margin-left: -20px;">
                           <div class="col-md-12 text-center">
								<div class="project-price">
									<h5 style="font-size: 13px;margin-top: 13px;">Studio</h5>
									<h5 style="font-size: 13px;">400 Sq.Ft</h5>
									<h5 style="font-size: 13px;"> AED 475,000 </h5>
								</div>
							</div>
                        </div><br>
                        <div class="media mb-4" style="background-color: #f6911d;width: 114%;margin-left: -20px;margin-top: -46px;">
                           <div class="col-md-12 text-center">
								<div class="project-price">
									<h5 style="font-size: 13px;margin-top: 13px;">1 Bedroom</h5>
									<h5 style="font-size: 13px;">870 Sq.Ft</h5>
									<h5 style="font-size: 13px;"> AED 750,000 </h5>
								</div>
							</div>
                        </div><br>
                        <div class="media mb-4" style="background-color: #f6911d;width: 114%;margin-left: -20px;margin-top: -46px;">
                           <div class="col-md-12 text-center">
								<div class="project-price">
									<h5 style="font-size: 13px;margin-top: 13px;">2 Bedroom</h5>
									<h5 style="font-size: 13px;">1300 Sq.Ft</h5>
									<h5 style="font-size: 13px;"> AED 1.3 Million </h5>
								</div>
							</div>
                        </div>
                    </div><hr>
                    <!-- Recent posts start -->
                    <div class="widget recent-posts" style="margin-top: -15px;">
                        <h5 class="sidebar-title">Payments Plan</h5>
                        <div class="media mb-4" style="border: 1px solid #f6911d;width: 114%;margin-left: -20px;">
                           <div class="col-md-12 text-center">
								<div class="project-price">
									<h3 style="color: #0f6fb9;">5%</h3>
									<h4 style="font-size: 17px;">On Booking </h4>
								</div>
							</div>
                        </div><br>
                        <div class="media mb-4" style="border: 1px solid #f6911d;width: 114%;margin-left: -20px;margin-top: -46px;">
                           <div class="col-md-12 text-center">
								<div class="project-price">
									<h3 style="color: #0f6fb9;">35%</h3>
									<h4 style="font-size: 17px;">During Construction </h4>
								</div>
							</div>
                        </div><br>
                        <div class="media mb-4" style="border: 1px solid #f6911d;width: 114%;margin-left: -20px;margin-top: -46px;">
                           <div class="col-md-12 text-center">
								<div class="project-price">
									<h3 style="color: #0f6fb9;">60%</h3>
									<h4 style="font-size: 17px;">Upon Handover</h4>
								</div>
							</div>
                        </div>
                    </div><hr>
					
					<!-- Animation and services  start -->
                    <div class="contact-1 financing-calculator widget">
                        <h5 class="sidebar-title">Amenities & Services</h5>
                        <div class="row servic_rop" style="width: 332px;margin-left: -20px;">
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<i class="fa fa-tv fa-2x icons"></i> 
                        		<h6 class="service_name" style="margin-left: 6px;margin-top: 5px;">Cable TV</h6>
                        	</div>
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<i class="fa fa-product-hunt fa-2x icons"></i><h6 class="service_name" style="    margin-top: 5px;">Free parking</h6>
                        	</div>
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="{{url('public/edenfortDocs/icons/balcony.png')}}" style="height: 36px;"> <h6 class="service_name" style="margin-left: -11px;margin-top: 5px;">Balcony/Terrace</h6>
                        	</div>
                        </div>
                        <div class="row servic_rop" style="width: 332px;margin-left: -20px;">
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<i class="fa fa-thermometer fa-2x icons"></i> 
                        		<h6 class="service_name" style="margin-left: 6px;margin-top: 5px;">Heating</h6>
                        	</div>
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/treeeeee.png" alt="treeeeee.png" style="height: 36px;"><h6 class="service_name" style="    margin-top: 5px;">Garden</h6>
                        	</div>
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/tree.png" style="height: 36px;"> <h6 class="service_name" style="margin-left: -11px;margin-top: 5px;">Garden View</h6>
                        	</div>
                        </div>
                        <div class="row servic_rop" style="width: 332px;margin-left: -20px;">
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img src="public/edenfortDocs/icons/gym.png" alt="tennis.png" class="ml-4 icons"style="height: 36px;">
                        		<h6 class="service_name" style="margin-left: 6px;margin-top: 5px;">Gymnasium</h6>
                        	</div>
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/tennis.png" style="height: 36px;"><h6 class="service_name" style="    margin-top: 5px;">Tennis Court</h6>
                        	</div>
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/swim.png" style="height: 36px;"> <h6 class="service_name" style="margin-left: -11px;margin-top: 5px;">Swimming Pool</h6>
                        	</div>
                        </div>
                        <div class="row servic_rop" style="width: 332px;margin-left: -20px;">
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/summer.png" style="height: 36px;">
                        		<h6 class="service_name" style="margin-left: 6px;margin-top: 5px;">Children Pool</h6>
                        	</div>
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/towel.png" style="height: 36px;"><h6 class="service_name" style="    margin-top: 5px;">Sauna</h6>
                        	</div>
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/breakfast.png" style="height: 36px;"> <h6 class="service_name" style="margin-left: -11px;margin-top: 5px;">Restuarant</h6>
                        	</div>
                        </div>
                        <div class="row servic_rop" style="width: 332px;margin-left: -20px;">
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/food.png" style="height: 36px;"> 
                        		<h6 class="service_name" style="margin-left: 6px;margin-top: 5px;">Cafe</h6>
                        	</div>
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/hotel.png" style="height: 36px;"><h6 class="service_name" style="    margin-top: 5px;">Room Service</h6>
                        	</div>
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/household.png" style="height: 36px;"> <h6 class="service_name" style="margin-left: -11px;margin-top: 5px;">laundry Facility</h6>
                        	</div>
                        </div>
                        <div class="row servic_rop" style="width: 332px;margin-left: -20px;">
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/air-conditioner.png" style="height: 36px;">
                        		<h6 class="service_name" style="margin-left: 6px;margin-top: 5px;">Centeral Air Contioning</h6>
                        	</div>
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/wifi.png" style="height: 36px;"><h6 class="service_name" style="    margin-top: 5px;">Internet</h6>
                        	</div>
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/telephone.png" style="height: 36px;"> <h6 class="service_name" style="margin-left: -11px;margin-top: 5px;">Telephone</h6>
                        	</div>
                        </div>
                        <div class="row servic_rop" style="width: 332px;margin-left: -20px;">
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/train.png" style="height: 36px;">
                        		<h6 class="service_name" style="margin-left: 6px;margin-top: 5px;">Metro</h6>
                        	</div>
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/fire-extinguisher.png" style="height: 36px;"><h6 class="service_name" style="    margin-top: 5px;">Fire Extinguisher</h6>
                        	</div>
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/postal.png" style="height: 36px;"> <h6 class="service_name" style="margin-left: -11px;margin-top: 5px;">Post Office</h6>
                        	</div>
                        </div>
                        <div class="row servic_rop" style="width: 332px;margin-left: -20px;">
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/hospital.png" style="height: 36px;">
                        		<h6 class="service_name" style="margin-left: 6px;margin-top: 5px;">Children Care Center</h6>
                        	</div>
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/shopping-bag.png" style="height: 36px;"><h6 class="service_name" style="    margin-top: 5px;">Super Market</h6>
                        	</div>
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/treatment.png" style="height: 36px;"> <h6 class="service_name" style="margin-left: -11px;margin-top: 5px;">Grey Water system</h6>
                        	</div>
                        </div>
                        <div class="row servic_rop" style="width: 332px;margin-left: -20px;">
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/electric-current.png" style="height: 36px;">
                        		<h6 class="service_name" style="margin-left: 6px;margin-top: 5px;">Electercity</h6>
                        	</div>
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/taxi.png" style="height: 36px;"><h6 class="service_name" style="    margin-top: 5px;">Public Transport</h6>
                        	</div>
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/school.png" style="height: 36px;"> <h6 class="service_name" style="margin-left: -11px;margin-top: 5px;">School</h6>
                        	</div>
                        </div>
                        <div class="row servic_rop" style="width: 332px;margin-left: -20px;">
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/mall.png" style="height: 36px;">
                        		<h6 class="service_name" style="margin-left: 6px;margin-top: 5px;">Shopping Mall</h6>
                        	</div>
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/mosque.png" style="height: 36px;"><h6 class="service_name" style="    margin-top: 5px;">Mosque</h6>
                        	</div>
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/lock.png" style="height: 36px;"> <h6 class="service_name" style="margin-left: -11px;margin-top: 5px;">Security</h6>
                        	</div>
                        </div>
                        <div class="row servic_rop" style="width: 332px;margin-left: -20px;">
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/jacuzzi.png" style="height: 36px;">
                        		<h6 class="service_name" style="margin-left: 6px;margin-top: 5px;">Jacuzzi</h6>
                        	</div>
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/plane.png" style="height: 36px;"><h6 class="service_name" style="    margin-top: 5px;">Airport</h6>
                        	</div>
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/playground.png" style="height: 36px;"> <h6 class="service_name" style="margin-left: -11px;margin-top: 5px;">Play Area</h6>
                        	</div>
                        </div>
                        <div class="row servic_rop" style="width: 332px;margin-left: -20px;">
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img src="public/edenfortDocs/icons/petrol.png" alt="petrol.png" class="icons" style="height: 36px;"> 
                        		<h6 class="service_name" style="margin-left: 6px;margin-top: 5px;">Petrol Pump</h6>
                        	</div>
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img src="public/edenfortDocs/icons/muscle.png" alt="muscle.png" class="icons" style="height: 36px;"><h6 class="service_name" style="    margin-top: 5px;">Fitnnes Center</h6>
                        	</div>
                        	<div class="col-sm-4 service" style="width:33%;">
                        		<img class="icons" src="public/edenfortDocs/icons/patient.png" style="height: 36px;"> <h6 class="service_name" style="margin-left: -11px;margin-top: 5px;">Hospital</h6>
                        	</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Properties details page start -->


<div class="container">
	<!-- Related properties start -->
        <div class="related-properties hedin-mb-30" style="margin-top: -6%;">
            <h3 class="heading">Projects you may interested in</h3>
            <div class="row">
                <div class="col-md-3">
                    <div class="property-box-4">
                        <!-- Property Img -->
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <img src="public/edenfortDocs/assets/images/project.jpg" alt="property-3" class="img-fluid">
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
                                    <a href="properties-details.html">VILLA NOVA</a>
                                </div>
                                <div class="pull-right price">
                                    Dubai Land, Dubai
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="property-box-4">
                        <!-- Property Img -->
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <img src="public/edenfortDocs/assets/images/project.jpg" alt="property-3" class="img-fluid">
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
                                    <a href="properties-details.html">CASA VIVA</a>
                                </div>
                                <div class="pull-right price">
                                    Dubai Land, Dubai
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="property-box-4">
                        <!-- Property Img -->
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <img src="public/edenfortDocs/assets/images/project.jpg" alt="property-3" class="img-fluid">
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
                                    <a href="properties-details.html">RIVERSIDE</a>
                                </div>
                                <div class="pull-right price">
                                    Business Bay, Dubai
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="property-box-4">
                        <!-- Property Img -->
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <img src="public/edenfortDocs/assets/images/project.jpg" alt="property-3" class="img-fluid">
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
                                    <a href="properties-details.html">VILLA NOVA</a>
                                </div>
                                <div class="pull-right price">
                                    Dubai Land, Dubai
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	
</div>



@include('Includes.footernew')