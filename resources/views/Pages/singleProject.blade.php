@extends('Includes.layout')
@section('title','| Search')


    @section('content')
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110654029-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110654029-1');
</script>	<!-- ====== END HEADER ====== -->

<!-- ====== SINGLE POST / BLOG PAGE HEADER ====== -->
<input type="hidden" id="pprop" value="34">

<section class="page-header page-header-padding page-section hidden" style="background-image: url(../assets/offline-projects/pictures/1521037841154857790-1521984477.jpg); background-position: center bottom;">
	<!-- <img src="http://www.edenforthomes.com/assets/offline-projects/pictures/" /> -->
	<div class="projectbanner-overlay">	
		<div class="container">
			<h1 class="ucfirst" style="color:#fff;">azizi grand - dubai sports city</h2>
			<h1 class="ucfirst" style="color:#fff;margin-top:10px">AED 475,000</h2>
			<h2 class="ucfirst" style="color:#fff;">dubai sports city, dubai</h4>
			
		</div>
	</div>	
</section>
<section id="phone-fix">
	<div class="container-fluid text-center" style="background:#136eb5; color: #fff; font-weight: 500; font-size: 20px;padding: 10px 0 0;">
		<p> <a href="tel:00971524441784" style="color:#fff;text-decoration:none;"><i class="fa fa-phone fa-lg fa-fw"></i> Call Us: +971 52 444 1784</a></p>
	</div>
</section>
<!-- ====== MAIN SLIDER ====== -->

<section style="margin-top: 20px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 style="font-size: 26px; margin: 1px 0 20px; font-weight: 400; color: #136eb5">
					Azizi Grand, location:: {{$projectDetail->location}}				</h3>
			</div>
			<div class="col-md-8">
				<!-- Slider Item -->
				<div id="main-slider" class="page-section">
					
											<div class="slider-item">
							<img src="public/edenfortDocs/assets/images/project.jpg" style="height:430px;" alt="#">
							<div class="">
								<div class="projectbanner-overlay">
									<div class="container">
										<div class="row">
											<div class="col-md-8 col-sm-8 col-xs-12">
												<h2 class="ucfirst hidden-xs" style="color:#fff;font-size:24px;">azizi grand - dubai sports city</h2>
												<!-- <h4 class="ucfirst" style="color:#fff;">dubai sports city, dubai</h4> -->
																								<!-- <h4 class="ucfirst" style="color:#fff;">Studio, 1 Bedroom, 2 Bedroom</h4> -->
																								<span class="price ucfirst">Price Staring From AED 475,000</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
											<div class="slider-item">
							<img src="../assets/offline-projects/pictures/15210378411059110033-1521984500.jpg" style="height:430px;" alt="#">
							<div class="">
								<div class="projectbanner-overlay">
									<div class="container">
										<div class="row">
											<div class="col-md-8 col-sm-8 col-xs-12">
												<h2 class="ucfirst hidden-xs" style="color:#fff;font-size:24px;">azizi grand - dubai sports city</h2>
												<!-- <h4 class="ucfirst" style="color:#fff;">dubai sports city, dubai</h4> -->
																								<!-- <h4 class="ucfirst" style="color:#fff;">Studio, 1 Bedroom, 2 Bedroom</h4> -->
																								<span class="price ucfirst">Price Staring From AED 475,000</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
											<div class="slider-item">
							<img src="../assets/offline-projects/pictures/1521037841858303897-1521984467.jpg" style="height:430px;" alt="#">
							<div class="">
								<div class="projectbanner-overlay">
									<div class="container">
										<div class="row">
											<div class="col-md-8 col-sm-8 col-xs-12">
												<h2 class="ucfirst hidden-xs" style="color:#fff;font-size:24px;">azizi grand - dubai sports city</h2>
												<!-- <h4 class="ucfirst" style="color:#fff;">dubai sports city, dubai</h4> -->
																								<!-- <h4 class="ucfirst" style="color:#fff;">Studio, 1 Bedroom, 2 Bedroom</h4> -->
																								<span class="price ucfirst">Price Staring From AED 475,000</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
											<div class="slider-item">
							<img src="../assets/offline-projects/pictures/1521037841154857790-1-1521984466.jpg" style="height:430px;" alt="#">
							<div class="">
								<div class="projectbanner-overlay">
									<div class="container">
										<div class="row">
											<div class="col-md-8 col-sm-8 col-xs-12">
												<h2 class="ucfirst hidden-xs" style="color:#fff;font-size:24px;">azizi grand - dubai sports city</h2>
												<!-- <h4 class="ucfirst" style="color:#fff;">dubai sports city, dubai</h4> -->
																								<!-- <h4 class="ucfirst" style="color:#fff;">Studio, 1 Bedroom, 2 Bedroom</h4> -->
																								<span class="price ucfirst">Price Staring From AED 475,000</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
										
				</div>
			</div>
			<div class="col-md-4">
			<!-- class="landing-form" -->
				<div id="sidebar" class="landing-form2" >
					<!-- widget section Message -->
					<div class="widget" style="margin-bottom: 0px;">
						<div class="panel-box">
							<!-- Panel Body -->
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12 text-center">
										<h3 style="margin: 0 0 15px">Send Inquiry</h3>
									</div>
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
								</div>
								<form action="{{url('contactUsForm')}}" method="post" accept-charset="utf-8">
									@csrf
									<div class="row">
										<div class="form-group col-md-6">
											<span style="position: absolute; margin-top: -22px; color: red"></span>
											<input type="text" name="name" class="form-control" placeholder="Name*" value="" required>
											
										</div>
										<div class="form-group col-md-6">
											<span style="position: absolute; margin-top: -22px; color: red"></span>
											<input type="text" name="phone" class="form-control" placeholder="Phone*" value="" required>
										</div>
									</div>
									<div class="form-group">
										<span style="position: absolute; margin-top: -22px; color: red"></span>
										<input type="email" name="email" class="form-control" placeholder="Email*" value="" required>
									</div>
									<div class="form-group">
										<span style="position: absolute; margin-top: -22px; color: red"></span>
										<input type="text" name="subject" class="form-control" placeholder="Subject*" value="" required>
									</div>
									<div class="form-group">
										<span style="position: absolute; margin-top: -22px; color: red"></span>
										<textarea name="message" id="messages" cols="30" rows="7" class="form-control" placeholder="Message*"  required></textarea>
									</div>
									<div class="form-group" style="overflow: hidden;">
										<span style="position: absolute; margin-top: -22px; color: red">
											</span>
									    <div class="g-recaptcha" data-sitekey="6Le2500UAAAAALZTPAGNyqApyX61oFgmF6YSN3Fp"></div>
									    
									</div>
									<div class="form-group">
										<input type="submit" class="btn-submit btn-primary btn" name="submit" value="Submit">
									</div>
						 		</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>



<!-- Sidebar -->


<section class="page-section paddingTop-10">
	<div class="container" id="content">
		<div class="nav-tabs-custom">
			<div class="row">
				<div class="col-md-12 hidden">
					<div class="widget" style="margin-top: 20px">
						
						<div class="tagcloud">
							<!-- <button class="btn btn-primary btn-contact" data-toggle="modal" data-target="#emailModal">Email Us</button> <button class="btn btn-success btn-contact" rel="123456789">Call Us</button> -->
							<ul class="nav nav-tabs custom-nav hidden">
				               <li class="active"><a href="#property-detail" data-toggle="tab" class="text-center">About</a></li> 
				               <li ><a href="#pictures" data-toggle="tab" class="text-center">Pictures</a></li>
				               <li><a href="#documents" data-toggle="tab" class="text-center">Download</a></li> 
				            </ul>
						</div>
						<div class="share-box" >
							<div class="a2a_kit a2a_kit_size_32 a2a_default_style pull-right">
								<a class="a2a_button_facebook"></a>
								<a class="a2a_button_twitter"></a>
								<a class="a2a_button_google_plus"></a>
								<a class="a2a_button_pinterest"></a>
								<a class="a2a_button_linkedin"></a>
								<a class="a2a_button_email"></a>
								<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
							</div>
							<script>
							var a2a_config = a2a_config || {};
							a2a_config.onclick = 1;
							a2a_config.icon_color = "transparent,midnightblue";
							</script>
							<script async src="../../static.addtoany.com/menu/page.js"></script>
							<ul class="share-box-list hidden">
								<li>
									<a href="#" class="facebook">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#" class="twitter">
										<i class="fa fa-twitter"></i>
										<i class="fa fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#" class="pinterest">
										<i class="fa fa-pinterest"></i>
										<i class="fa fa-pinterest"></i>
									</a>
								</li>
								<li>
									<a href="#" class="google">
										<i class="fa fa-google"></i>
										<i class="fa fa-google"></i>
									</a>
								</li>
								<li>
									<a href="#" class="rss">
										<i class="fa fa-rss"></i>
										<i class="fa fa-rss"></i>
									</a>
								</li>
								<li>
									<a href="#" class="envelope">
										<i class="fa fa-envelope"></i>
										<i class="fa fa-envelope"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-md-12">
							<!-- Content -->
							<!-- Post Entries-->
								<article class="post hidden">
									<!-- <h2 class="post-title"><a href="#"></a></h2>
									
									<ul class="post-meta">
										<li class="post-author"><a href="#">Admin</a></li>
										<li class="post-comment"><a href="#">10 Comments</a></li>
										<li class="post-category"><a href="#">Appartement</a></li>
									</ul> -->
									<div class="post-entries">
										
										<blockquote>
											<p>"AZIZI GRAND located in Dubai Sports City, is a high-end serviced residential apartment building. The building features a unique design that creates a unique look that is unsurpassed. "</p>
											<!-- <footer>John Travolta</footer> -->
										</blockquote>
									</div>
								</article>
								<article class="">
									<h2 class="project-subtitle"  style="margin-top: 20px;" >About Project</h2>
									<!-- <figure class="post-image"><a href="#"><img src="http://www.edenforthomes.com/assets/images/img_post_1.jpg" alt="Post list 1"></a></figure>
									<ul class="post-meta">
										<li class="post-author"><a href="#">Admin</a></li>
										<li class="post-comment"><a href="#">10 Comments</a></li>
										<li class="post-category"><a href="#">Appartement</a></li>
									</ul> -->
									<div class="post-entries" style="font-size:16px;text-align:justify">
										<div class="row">
											<div class="col-md-6">
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

<p>&nbsp;</p>											</div>
											<div class="col-md-6">
												<figure class="post-image" style="">
																											<div class="embed-responsive embed-responsive-16by9">
														  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tOUOcNIEwWY" frameborder="0" allowfullscreen ></iframe>
														</div>
																										<div class="text-center" style="margin-top:20px;">
														<!-- <button class="btn btn-primary btn-contact" data-toggle="modal" data-target="#emailModal">Send Inquiry</button>  -->
														<!-- <a class="btn btn-success btn-contact"  href="tel:00971524441784" >Call Us</a> -->
													</div>
													
												</figure>
											</div>
										</div>
									 
									</div>
								</article>
								<article class="" style="font-size:16px;">
									<h2 class="project-subtitle"></h2>
									<div class="">
										<table class="table table-bordered table-striped">
											<tr>
												<th>Master Comunity</th>
												<td class="ucfirst">dubai sports city</td>
											</tr>
											<tr>
												<th>Property Type</th>
												<td class="ucfirst">apartment</td>
											</tr>
											<tr>
												<th>Location</th>
												<td class="ucfirst">dubai sports city, dubai</td>
											</tr>
											<tr>
												<th>Status</th>
												<td class="ucfirst">under construction</td>
											</tr>
											<tr>
												<th>Estimated Completion Year</th>
												<td class="ucfirst">Dec, 2019</td>
											</tr>
											<tr>
												<th>Life Cycle:</th>
												<td class="ucfirst">under construction</td>
											</tr>
											<tr>
												<th>Under Construction Buildings:</th>
												<td class="ucfirst">1</td>
											</tr>
										</table>
									</div>
								</article>
																<article class="">
									<h1 class="project-subtitle text-center">Sale Prices</h1>
									<!-- <figure class="post-image"><a href="#"><img src="http://www.edenforthomes.com/assets/images/img_post_1.jpg" alt="Post list 1"></a></figure>
									<ul class="post-meta">
										<li class="post-author"><a href="#">Admin</a></li>
										<li class="post-comment"><a href="#">10 Comments</a></li>
										<li class="post-category"><a href="#">Appartement</a></li>
									</ul> -->
									<div class="row">
																					<div class="col-md-4 text-center">
												<div class="project-price">
													<h3>Studio</h3>
													<h4>400 Sq.Ft</h4>
													<h4> AED 475,000 </h4>
												</div>
											</div>
																						<div class="col-md-4 text-center">
												<div class="project-price">
													<h3>1 Bedroom</h3>
													<h4>870 Sq.Ft</h4>
													<h4> AED 750,000 </h4>
												</div>
											</div>
																						<div class="col-md-4 text-center">
												<div class="project-price">
													<h3>2 Bedroom</h3>
													<h4>1300 Sq.Ft</h4>
													<h4> AED 1.3 Million </h4>
												</div>
											</div>
											</div><div class="row">
									</div>
									<div class="table-responsive hidden">
										<table class="table table-bordered table-striped">
											<thead>
												<tr style="background-color: #136eb5;color: #fff;">
													<th>Unit Type</th>
													<th>Area Sq.Ft</th>
													<th>Price Starting From</th>
												</tr>
											</thead>
																						<tr>
												<td class="ucfirst"></td>
												<td class="ucfirst"></td>
												<td class="ucfirst"></td>
											</tr>
																						<tr>
												<td class="ucfirst"></td>
												<td class="ucfirst"></td>
												<td class="ucfirst"></td>
											</tr>
																						<tr>
												<td class="ucfirst"></td>
												<td class="ucfirst"></td>
												<td class="ucfirst"></td>
											</tr>
																					</table>
									</div>
								</article>
																<article class="">
									<h2 class="project-subtitle">Payment Plan</h2>
										
									<div class="row">
																					<div class="col-md-2 text-center">
												<div class="payment-plan">
													<h3>5%</h3>
													<h4>On Booking </h4>
												</div>
											</div>
																						<div class="col-md-2 text-center">
												<div class="payment-plan">
													<h3>35%</h3>
													<h4>During Construction</h4>
												</div>
											</div>
																						<div class="col-md-2 text-center">
												<div class="payment-plan">
													<h3>60%</h3>
													<h4>Upon Handover</h4>
												</div>
											</div>
																				</div>
								</article>
																<article class="">
									
									<!-- <figure class="post-image"><a href="#"><img src="http://www.edenforthomes.com/assets/images/img_post_1.jpg" alt="Post list 1"></a></figure>
									<ul class="post-meta">
										<li class="post-author"><a href="#">Admin</a></li>
										<li class="post-comment"><a href="#">10 Comments</a></li>
										<li class="post-category"><a href="#">Appartement</a></li>
									</ul> -->
									<div class="post-entries">
										<div class="row">
											<div class="col-md-6">
												<h2 class="project-subtitle">Amenities & Services</h2>
												<div class="project-features">
													<ul>
																												<li ><i class="fa fa-cutlery fa-2x"></i> Kitchen</li>
														
														<li style="display:none"><i class="fa fa-tv fa-2x"></i> Cable TV</li>
														<li ><i class="fa fa-product-hunt fa-2x"></i> Free parking</li>
														<li ><i class="flaticon-balcony"></i> Balcony/Terrace</li>
														<li ><i class="fa fa-thermometer fa-2x"></i> Heating</li>
														<li ><i class="flaticon-fence"></i> Garden</li>
														<li ><i class="flaticon-flowers-pot-of-yard"></i> Garden View</li>
														<li ><i class="flaticon-exercise"></i> Gymnasium</li>
														<li ><i class="flaticon-squash-rackets"></i> Tennis Court</li>
														<li ><i class="flaticon-swimming-pool"></i> Swimming Pool</li>
														<li ><i class="flaticon-aqua-gym"></i> Children Pool</li>
														<li ><i class="flaticon-person-silhouette-in-sauna"></i> Sauna</li>
														<li ><i class="flaticon-fast-food"></i> Restuarant</li>
														<li style="display:none"><i class="flaticon-coffee-cup"></i> Cafe</li>
														<li style="display:none"><i class="flaticon-covered-food-tray-on-a-hand-of-hotel-room-service"></i> Room Service</li>
														<li ><i class="flaticon-laundry"></i> laundry Facility</li>
														<li ><i class="flaticon-air-conditioner"></i> Centeral Air Contioning</li>
														<li style="display:none"><i class="fa fa-wifi fa-2x"></i> Internet</li>
														<li ><i class="flaticon-old-typical-phone"></i> Telephone</li>
														<!-- <li ><i class="flaticon-bathtub"></i> Shower</li> -->
														<li style="display:none"><i class="flaticon-public-transport-subway"></i> Metro</li>
														<li ><i class="flaticon-security"></i> Fire Extinguisher</li>
														<li style="display:none"><i class="flaticon-message"></i> Post Office</li>
														<li ><i class="flaticon-children-care"></i> Children Care Center</li>
														<li ><i class="flaticon-groceries"></i> Super Market</li>
														<li style="display:none"><i class="flaticon-plumber-tap"></i> Grey Water system</li>
														<li ><i class="flaticon-flash"></i> Electercity</li>
														<li ><i class="flaticon-bus"></i> Public Transport</li>
														<li ><i class="flaticon-university"></i> School</li>
														<li style="display:none"><i class="flaticon-shopping-cart"></i> Shopping Mall</li>
														<li ><i class="flaticon-mosque-domes"></i> Mosque</li>
														<li ><i class="flaticon-shield"></i> Security</li>
														<li ><i class="flaticon-jacuzzi"></i> Jacuzzi</li>
														<li style="display:none"><i class="flaticon-beach-view"></i> Sea View</li>
														<li style="display:none"><i class="flaticon-departures-flights"></i> Airport</li>
														<!-- <li><i class="flaticon-carousel"></i> </li> -->
														<li ><i class="flaticon-toboggan"></i> Play Area</li>
														<li ><i class="flaticon-gas-station"></i> Petrol Pump</li>
														<li style="display:none"><i class="flaticon-fitness-facilities"></i> Fitnnes Center</li>
														<li ><i class="flaticon-hospital-buildings"></i> Hospital </li>
														<li style="display:none"><i class="flaticon-waiter"></i>Hotel </li>
													</ul>
												</div>
											</div>
											<div class="col-md-6">
												<h2 class="project-subtitle">Location</h2>
												<!-- ====== MAP SECTION ====== -->
												<section id="search-map" class="page-section">
													<!-- Google Map -->
													<div id="map"></div>
												</section>

											</div>
										</div>
									 
									</div>
								</article>
				</div>
						
				<div class="col-md-12" style="padding-bottom:40px;">
							<h2 class="project-subtitle">Pictures</h2>
														<div id="gallery" style="display:none;">
																	<a href="http://www.edenfort.ae/">
										<img alt="azizi grand"
									     src="../assets/offline-projects/pictures/thumbnails/15210378412077647373-1521984529.jpg"
									     data-image="../assets/offline-projects/pictures/15210378412077647373-1521984529.jpg"
									     data-description=""
									     style="display:none">
									</a>
																	<a href="http://www.edenfort.ae/">
										<img alt="azizi grand"
									     src="../assets/offline-projects/pictures/thumbnails/15210378411059110033-1521984500.jpg"
									     data-image="../assets/offline-projects/pictures/15210378411059110033-1521984500.jpg"
									     data-description=""
									     style="display:none">
									</a>
																	<a href="http://www.edenfort.ae/">
										<img alt="azizi grand"
									     src="../assets/offline-projects/pictures/thumbnails/1521037841858303897-1521984467.jpg"
									     data-image="../assets/offline-projects/pictures/1521037841858303897-1521984467.jpg"
									     data-description=""
									     style="display:none">
									</a>
																	<a href="http://www.edenfort.ae/">
										<img alt="azizi grand"
									     src="../assets/offline-projects/pictures/thumbnails/1521037841154857790-1-1521984466.jpg"
									     data-image="../assets/offline-projects/pictures/1521037841154857790-1-1521984466.jpg"
									     data-description=""
									     style="display:none">
									</a>
															</div>
											</div>
					
					
			   	
			</div>
		</div>
		
		
		<div class="row clearfix">
			<div class="col-md-12">
				<h2 class="project-subtitle">Projects you may interested in</h2>
				<!-- Related Post Box -->
					<div class="related-post widget panel-box2" style="background: transparent;">
						<!-- Related Post Title -->
						
						<!-- Related Post List -->
						<div class="panel-body">
							<ul class="post-list">
																	<li>
										<a class="post-image" href="villa-nova.html">
											<img src="public/edenfortDocs/assets/images/project.jpg" alt="#">
											<figure class="item-photo__hover item-photo__hover--params">
	                        					<span class="properties__params">Property type - villa</span>
	                                			<span class="properties__intro ">
										          Villa Nova is located in DUBAI LAND near the intersection of Emirates Road and Al Ain Road, in close proximity to Sheikh Mohammed Bin Zayed Road.										        </span>
	                   	 						<span class="properties__time">&nbsp;</span>
	            								<span class="properties__more">View details</span>
	    									</figure>
										</a>
										<span class="properties__ribon">AED 1.2 M</span>
										<div class="post-content">
											<a href="villa-nova.html" class="post-title ucfirst">villa nova</a>
											<p class="ucfirst">dubailand, dubai</p>
										</div>
									</li>
																	<li>
										<a class="post-image" href="casa-viva.html">
											<img src="../assets/offline-projects/pictures/d0d32c15-99f1-45a2-84d0-c0b256165bde2-1524473446.jpg" alt="#">
											<figure class="item-photo__hover item-photo__hover--params">
	                        					<span class="properties__params">Property type - villa</span>
	                                			<span class="properties__intro ">
										          Casa Viva Townhouses are  located at Serena within Dubai Land, and will be the home of the world\'s largest renowned complex that will draw the attention of the people and the guest to the area. The development is scheduled to be completed before the beginning of 2020.										        </span>
	                   	 						<span class="properties__time">&nbsp;</span>
	            								<span class="properties__more">View details</span>
	    									</figure>
										</a>
										<span class="properties__ribon">AED 1.2 M</span>
										<div class="post-content">
											<a href="casa-viva.html" class="post-title ucfirst">casa viva</a>
											<p class="ucfirst">dubai land, dubai</p>
										</div>
									</li>
																	<li>
										<a class="post-image" href="riverside.html">
											<img src="../assets/offline-projects/pictures/1d7d62f4-9f4a-4867-8862-93714e6fdf7f6-1523542782.jpg" alt="#">
											<figure class="item-photo__hover item-photo__hover--params">
	                        					<span class="properties__params">Property type - apartment</span>
	                                			<span class="properties__intro ">
										          On the banks of Dubai Canal, in the heart of Business Bay Riverside is part of a brand new development by Dubai Properties, a space that offers everything you’ve been looking for in a downtown apartment.										        </span>
	                   	 						<span class="properties__time">&nbsp;</span>
	            								<span class="properties__more">View details</span>
	    									</figure>
										</a>
										<span class="properties__ribon">AED 1,000,000</span>
										<div class="post-content">
											<a href="riverside.html" class="post-title ucfirst">riverside</a>
											<p class="ucfirst">business bay, dubai</p>
										</div>
									</li>
																
								<li class="hidden">
									<a class="post-image" href="#">
										<img src="../assets/images/property_item_2.html" alt="#">
										<figure class="item-photo__hover item-photo__hover--params">
                        					<span class="properties__params">Property type - Residential</span>
                                			<span class="properties__intro ">
									          Providing comfort in a beautifully-designed package, Aura’s apartments are paneled…
									        </span>
                   	 						<span class="properties__time">Added date: 1 week ago</span>
            								<span class="properties__more">View details</span>
    									</figure>
									</a>
									<span class="properties__ribon">AED 175,568</span>
									<div class="post-content">
										<a href="#" class="post-title">Sejahtera Family Hotel & Apartement</a>
										<p>Palm Jumaihra, Dubai</p>
									</div>
								</li>
								<li class="hidden">
									<a class="post-image" href="#">
										<img src="../assets/images/property_item_3.html" alt="#">
										<figure class="item-photo__hover item-photo__hover--params">
                        					<span class="properties__params">Property type - Residential</span>
                                			<span class="properties__intro ">
									          Providing comfort in a beautifully-designed package, Aura’s apartments are paneled…
									        </span>
                   	 						<span class="properties__time">Added date: 1 week ago</span>
            								<span class="properties__more">View details</span>
    									</figure>
									</a>
									<span class="properties__ribon">AED 175,568</span>
									<div class="post-content">
										<a href="#" class="post-title">Sejahtera Family Hotel & Apartement</a>
										<p>Palm Jumaihra, Dubai</p>
									</div>
								</li>
								
							</ul>
						</div>
					</div>
			</div>
		</div>
			</div>
</section>	

	@endsection