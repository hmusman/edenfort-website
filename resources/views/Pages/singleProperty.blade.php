@include('Includes.header')


<!-- ====== SINGLE PROPERTY CONTENT ====== -->
<section class="page-section paddingTop-10">
	<div class="container">
		<ol class="breadcrumb-custome hidden-xs">
		  	<li class="ucfirst"><a href="{{url('footerFilter?propertyType=&category=&city=Dubai')}}"> {{$filter->city}}</a></li>
		  	<li class="ucfirst"><a href="#">{{$filter->community}}</a></li>
			<li class="ucfirst"><a href="#">{{$filter->sub_community}}</a></li>
						<li class="ucfirst"><a href="#">{{$filter->property_name}}</a></li>
						<li class="ucfirst">{{$filter->reference_number}}</li>
			
		</ol>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-8 col-sm-8">
						<h2 class="ucfirst word-wrap" style=" font-size:20px; font-weight:400; margin:10px 0 20px;">
							{{$filter->title_en}}					</h2>
					</div>
					<div class="col-md-4 col-sm-4 text-right" style="">
											<!--		<button class="btn btn-default btn-action save" rel="72036" style="margin-bottom: 10px"><i class="fa fa-heart"></i> Save</button>-->
												
						<!-- <button id="shareBtn" class="btn btn-default btn-action fb-share-button"
    						data-href="http://www.edenforthomes.com/detail/72036" data-layout="button_count" style="margin-bottom: 10px"><i class="fa fa-share"></i> Share</button>
						<button class="btn btn-default btn-action" style="margin-bottom: 10px" onclick="window.print();"><i class="fa fa-print"></i> Print</button> -->
						<!-- AddToAny BEGIN -->
						<div style="display: inline-block; float: right; margin: 2px 5px;">
						<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
							<a class="a2a_button_whatsapp"></a>
							<a class="a2a_button_facebook"></a>
							<a class="a2a_button_twitter"></a>
							<a class="a2a_button_google_plus"></a>
							<!-- <a class="a2a_button_linkedin"></a>
							<a class="a2a_button_email"></a>
							<a class="a2a_button_reddit"></a> -->
							<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
						</div>
						</div>
						<script>
						var a2a_config = a2a_config || {};
						a2a_config.onclick = 1;
						</script>
						<script async src="../../static.addtoany.com/menu/page.js"></script>
						<!-- AddToAny END -->
					</div>
				</div>
				
			</div>
			<div class="col-md-8">
								<!-- Content -->
				<div id="content">
					<!-- Property Single Detail / Description -->
					<article class="post property-item" style="padding-top:0px;">
					 						<!-- Property Gallery Slider -->
						<div class="property-image">
							<span class="property-price">
								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-12">
										<h3>AED {{$filter->price_yearly}}</h3>
										<p class="ucfirst word-wrap"> {{$filter->location}}</p>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="property-footer">
																							<div class="item-room"><span class="fi flaticon-room"></span> {{$filter->bedroom}}</div>
																																		<div class="item-garage"><span class="fa fa-bathtub"></span>{{$filter->bathroom}}</div>
																						<div class="item-wide"><span class="fi flaticon-wide"></span>{{$filter->size}} Sq.Ft</div>
										</div>
									</div>
								</div>
								
							</span>
														<div id="property-slider" class="property-slider">
													  @if($filter->photo->photo2!=="No Pic")
														  <div>
																		<img src="{{$filter->photo->photo2}}" alt="Property Photo 2">
                                                         </div>																	
																	@endif
																		  @if($filter->photo->photo3!=="No Pic")
																	 <div>	<img src="{{$filter->photo->photo3}}" alt="Property Photo 3"> </div>
																		@endif
																		  @if($filter->photo->photo4!=="No Pic")
																	 <div>	<img src="{{$filter->photo->photo4}}" alt="Property Photo 4"> </div>
																		@endif
																		@if($filter->photo->photo5!=="No Pic")
																	 <div>	<img src="{{$filter->photo->photo5}}" alt="Property Photo 5"> </div>
																		@endif
																		@if($filter->photo->photo6!=="No Pic")
																	 <div>	<img src="{{$filter->photo->photo6}}" alt="Property Photo 6"> </div>
																		@endif
																		@if($filter->photo->photo7!=="No Pic")
																	 <div>	<img src="{{$filter->photo->photo7}}" alt="Property Photo 7"> </div>
																		@endif
																		@if($filter->photo->photo8!=="No Pic")
																	 <div>	<img src="{{$filter->photo->photo8}}" alt="Property Photo 8"> </div>
																		@endif
																		@if($filter->photo->photo9!=="No Pic")
																 <div>		<img src="{{$filter->photo->photo9}}" alt="Property Photo 9"> </div>
																		@endif
																		@if($filter->photo->photo10!=="No Pic")
																 <div>		<img src="{{$filter->photo->photo10}}" alt="Property Photo 10"> </div>
																		@endif
																		@if($filter->photo->photo11!=="No Pic")
																	 <div>	<img src="{{$filter->photo->photo11}}" alt="Property Photo 11"></div>
																		@endif
																		@if($filter->photo->photo12!=="No Pic")
																	<div>	<img src="{{$filter->photo->photo12}}" alt="Property Photo 12"></div>
																		@endif
																		@if($filter->photo->photo13!=="No Pic")
																	<div>	<img src="{{$filter->photo->photo13}}" alt="Property Photo 13"></div>
																		@endif
																		@if($filter->photo->photo14!=="No Pic")
																<div>		<img src="{{$filter->photo->photo14}}" alt="Property Photo 14"></div>
																		@endif
																		@if($filter->photo->photo15!=="No Pic")
																<div>		<img src="{{$filter->photo->photo15}}" alt="Property Photo 15"></div>
																		@endif
																		@if($filter->photo->photo16!=="No Pic")
																<div>		<img src="{{$filter->photo->photo16}}" alt="Property Photo 16"></div>
																		@endif
																		@if($filter->photo->photo17!=="No Pic")
																<div>		<img src="{{$filter->photo->photo17}}" alt="Property Photo 17"></div>
																		@endif
																		@if($filter->photo->photo18!=="No Pic")
																<div>		<img src="{{$filter->photo->photo18}}" alt="Property Photo 18"></div>
																		@endif
																		@if($filter->photo->photo19!=="No Pic")
																<div>		<img src="{{$filter->photo->photo19}}" alt="Property Photo 19"></div>
																		@endif
																		@if($filter->photo->photo20!=="No Pic")
																<div>		<img src="{{$filter->photo->photo20}}" alt="Property Photo 20"></div>
															           @endif
										
																		
																	
							</div>
							<!-- Property Gallery Slider Navigation -->
							<div id="property-slider-nav" class="property-slider-nav">
							                                                   @if($filter->photo->photo2!=="No Pic")
																		<img src="{{$filter->photo->photo2}}" alt="Property Photo 2">
																		@endif
																		  @if($filter->photo->photo3!=="No Pic")
																		<img src="{{$filter->photo->photo3}}" alt="Property Photo 3">
																		@endif
																		  @if($filter->photo->photo4!=="No Pic")
																		<img src="{{$filter->photo->photo4}}" alt="Property Photo 4">
																		@endif
																		@if($filter->photo->photo5!=="No Pic")
																		<img src="{{$filter->photo->photo5}}" alt="Property Photo 5">
																		@endif
																		@if($filter->photo->photo6!=="No Pic")
																		<img src="{{$filter->photo->photo6}}" alt="Property Photo 6">
																		@endif
																		@if($filter->photo->photo7!=="No Pic")
																		<img src="{{$filter->photo->photo7}}" alt="Property Photo 7">
																		@endif
																		@if($filter->photo->photo8!=="No Pic")
																		<img src="{{$filter->photo->photo8}}" alt="Property Photo 8">
																		@endif
																		@if($filter->photo->photo9!=="No Pic")
																		<img src="{{$filter->photo->photo9}}" alt="Property Photo 9">
																		@endif
																		@if($filter->photo->photo10!=="No Pic")
																		<img src="{{$filter->photo->photo10}}" alt="Property Photo 10">
																		@endif
																		@if($filter->photo->photo11!=="No Pic")
																		<img src="{{$filter->photo->photo11}}" alt="Property Photo 11">
																		@endif
																		@if($filter->photo->photo12!=="No Pic")
																		<img src="{{$filter->photo->photo12}}" alt="Property Photo 12">
																		@endif
																		@if($filter->photo->photo13!=="No Pic")
																		<img src="{{$filter->photo->photo13}}" alt="Property Photo 13">
																		@endif
																		@if($filter->photo->photo14!=="No Pic")
																		<img src="{{$filter->photo->photo14}}" alt="Property Photo 14">
																		@endif
																		@if($filter->photo->photo15!=="No Pic")
																		<img src="{{$filter->photo->photo15}}" alt="Property Photo 15">
																		@endif
																		@if($filter->photo->photo16!=="No Pic")
																		<img src="{{$filter->photo->photo16}}" alt="Property Photo 16">
																		@endif
																		@if($filter->photo->photo17!=="No Pic")
																		<img src="{{$filter->photo->photo17}}" alt="Property Photo 17">
																		@endif
																		@if($filter->photo->photo18!=="No Pic")
																		<img src="{{$filter->photo->photo18}}" alt="Property Photo 18">
																		@endif
																		@if($filter->photo->photo19!=="No Pic")
																		<img src="{{$filter->photo->photo19}}" alt="Property Photo 19">
																		@endif
																		@if($filter->photo->photo20!=="No Pic")
																			
																		<img src="{{$filter->photo->photo20}}" alt="Property Photo 20">
																		@endif
																		
												

												
																</div>
						</div>
						<!-- Property facility Detail 
						<div class="property-footer">
							<div class="item-room"><span class="fi flaticon-room"></span> 3</div>
											<div class="item-garage"><span class="fa fa-bathtub"></span> 2</div>
											<div class="item-wide"><span class="fi flaticon-wide"></span> 100 Sqft</div>
						</div>-->
						
						<hr>
						<div class="row">
							<div class="col-md-3 col-sm-3"><h3 class="heading-title">Facts</h3></div>
							<div class="col-md-9 col-sm-9">
								<ul class="feature-list">
									<li style="width: 100%">Reference #: <strong class="ucfirst">{{$filter->reference_number}}</strong></li>
									<li style="width: 100%">Location: <strong class="ucfirst">{{$filter->location}}</strong></li>
									<li>Type: <strong class="ucfirst">{{$filter->property_type}}</strong></li>
									<li>Property For: <strong class="ucfirst">{{$filter->offering_type2}}</strong></li>
																			<li>Bedrooms: <strong class="ucfirst">{{$filter->bedroom}}</strong></li>
																												<li>Bathrooms: <strong class="ucfirst">{{$filter->bathroom}}</strong></li>
																		<li>Price: <strong class="ucfirst">AED {{$filter->price_yearly}}</strong></li>
									<li>Cheques: <strong class="ucfirst">{{$filter->cheques}}</strong></li>
									<li>Area: <strong class="ucfirst">{{$filter->size}} Sq.Ft</strong></li>
									<li> &nbsp;</li>
									
									
								</ul>
							</div>
						</div>
						<!-- Facilities section -->
												<hr>
						<div class="row">
							<div class="col-md-3 col-sm-3"><h3 class="heading-title">Facilites</h3></div>
							<div class="col-md-9 col-sm-9">
																	<ul class="feature-list">
										<li>within a compound</li>									</ul>
																
							</div>
							<!-- OTHER Facilities -->
													</div>
												<!-- Featurs Section -->
																								
						
						<!-- Description Section -->
						<hr>
						<div class="row">
							<div class="col-md-3 col-sm-3"><h3 class="heading-title">Description</h3></div>
							<div class="col-md-9 col-sm-9">
								<p></p>
									<pre>{{$filter->description_en}}
</pre>								
							</div>
						</div>
						<!-- Availability Section -->
						<hr>
						<div class="row">
							<div class="col-md-3 col-sm-3"><h3 class="heading-title"></h3></div>
							<div class="col-md-9 col-sm-9 text-right">
								<h4 class="property-status"><button class="btn btn-danger">Report Property</button></h4>
							</div>
						</div>
					</article>

					<!-- Property Location / Map -->
					<div class="property-location widget panel-box">
						<div class="panel-header">
							<h3 class="panel-title">Property Location   </h3>
						</div>
						<div class="panel-body">
							<div id="map"></div>
						</div>
					</div>

					
				</div>
			</div>
			<div class="col-md-4">

				<!-- Sidebar -->
				<div id="sidebar" class="">
					

					<!-- widget section Contact Our Agent -->
					<div class="widget col-md-12 col-sm-6">
						<!-- Panel Box -->
						<div class="panel-box">
							<!-- Panel Header / Title -->
							<!-- <div class="panel-header">
								<h3 class="panel-title">Contact Our Agent</h3>
							</div> -->
							<!-- Panel Body -->
							<div class="panel-body">
								<div class="profile-box">
									<div class="profile-header">
																		<div class="profile-img">
														@if(isset($agentPic))						       
															@foreach($agentPic as $aP)
                                          <img src="{{$aP->image}}" alt="{{$aP->user_name}}">
										 
										   @endforeach
										   @endif
											<span class="compnay_img"><img src="public/edenfortDocs/assets/images/smallLogo.png" alt="eden fort real estate"></span>
										</div>

									</div>
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
									
									<div class="col-md-6 col-sm-6 paddingTop-20"><button class="btn btn-success btn-submit" data-phone="{{$filter->agentPhone}}" data-secphone="" data-companyphone="" data-referno="{{$filter->reference_number}}" data-companyName="West Gate Real Estate" data-agentName="{{$filter->agentName}}" data-toggle="modal" data-target="#callModal">Call</button></div>
										<div class="col-md-6 col-sm-6 paddingTop-20"><button class="btn btn-email btn-submit" data-prop="" data-referno="{{$filter->reference_number}}" data-companyName="West Gate Real Estate" data-agentName="{{$filter->agentName}}" data-agentEmail="{{$filter->agentEmail}}" data-toggle="modal" data-target="#emailModal" >Email</button></div>
										
									</div>
										
									
								</div>
							</div>
						</div>
					</div>

					<!-- widget section Message -->
					<div class="widget hidden-xs hidden-sm col-md-12 col-sm-6 hidden">
						<div class="panel-box">
							<img src="../assets/images/frame4.png" class="img-responsive">
							
						</div>
					</div>

					<div class="widget hidden-xs hidden-sm col-md-12 col-sm-6 hidden">
						<div class="panel-box">
							<img src="../assets/images/frame4.png" class="img-responsive">
							
						</div>
					</div>

					<div class="widget hidden-xs hidden-sm col-md-12 col-sm-6 hidden">
						<div class="panel-box">
							<img src="../assets/images/frame4.png" class="img-responsive">
							
						</div>
					</div>

					
					
				</div>
			</div>
		</div>
	</div>
</section>

<section id="best-offer" class="page-section paddingTop-10">
	<div class="container">
				<!-- Section Header / Title with Column Slider Control / Add 'header-column' to use this style -->
		<div class="section-header header-column">
			<h2 class="section-title">More available in the same area</h2>
			<!-- Slider Control -->
			<div class="slide-control">
				<button id="slide-left" class="slide-left"><i class="fa fa-angle-left"></i></button>
				<button id="slide-right" class="slide-right"><i class="fa fa-angle-right"></i></button>
			</div>
		</div>
		<div id="product-slider" class="row product-slider">
		
		
		
		@if(isset($sameAreaProperties))
                @if(count($sameAreaProperties)>0)
                @foreach($sameAreaProperties as $filter)
							<div class="col-md-3 col-sm-6">
					<!-- Property Item -->
					<div class="property-item">
						<a href="{{url('property'.$filter->id)}}"  title="Unfurnished Studio Tuscan Residence Pool View">
							<div class="img-box">
																	<img src="{{$filter->photo->photo1}}" alt="Unfurnished Studio Tuscan Residence Pool View" class="img-responsive">
																	
								<span class="property-price"></span>
								<span class="property-pics">
									<span class="property-price" ><span class="currency">AED</span> {{$filter->price_yearly}}<small><!--per year--></small></span>
									<span class="pics"><i class="fa fa-camera fa-fw"></i> <!--10--></span>
								</span>
							</div>
						</a>
						<div class="property-content">
							<a href="{{url('property'.$filter->id)}}" title="Unfurnished Studio Tuscan Residence Pool View" class="property-title ucfirst">
								{{$filter->title_en}}						</a>
							<div class="property-footer">
								<div class="item-appart ucfirst" title="Unfurnished Studio Tuscan Residence Pool View">{{$filter->property_type}}</div>
																	<div class="item-room" title="Unfurnished Studio Tuscan Residence Pool View"><span class="fi flaticon-room"></span>	{{$filter->bedroom}}</div>
																									<div class="item-garage" title="Unfurnished Studio Tuscan Residence Pool View"><span class="fa fa-bathtub"></span>{{$filter->bathroom}}</div>
																<div class="item-wide" title="Unfurnished Studio Tuscan Residence Pool View"><span class="fi flaticon-wide"></span>{{$filter->size}} Sq.Ft</div>
							</div>
							<div class="property-heading">
<div class="col-md-6 col-sm-6 paddingTop-20"><button class="btn btn-success btn-submit" data-phone="{{$filter->agentPhone}}" data-secphone="" data-companyphone="" data-referno="{{$filter->reference_number}}" data-companyName="West Gate Real Estate" data-agentName="{{$filter->agentName}}" data-toggle="modal" data-target="#callModal">Call</button></div>
										<div class="col-md-6 col-sm-6 paddingTop-20"><button class="btn btn-email btn-submit" data-prop="" data-referno="{{$filter->reference_number}}" data-companyName="West Gate Real Estate" data-agentName="{{$filter->agentName}}" data-agentEmail="{{$filter->agentEmail}}" data-toggle="modal" data-target="#emailModal" >Email</button></div>
																	
																
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

<!-- ====== FOOTER ====== -->
	<footer id="footer">
		<!-- Copyright -->
				<a class="go-top"><i class="fa fa-angle-up"></i></a>
		<div class="copyright">
			<div class="container clearfix">
				<div class="row">
					<div class="col-md-6">
						<p>Copyright &copy; 2019 - All Rights Reserved By Eden Fort Home Real Estate</p>
					</div>
					
					<div class="col-md-6">
						<ul>
							<li><a href="public/edenfortDocs/assets/sitemap.xml" target="_blank" title="SiteMap">SiteMap</a></li>
							<li><a href="#" title="">Terms & Policy</a></li>
							<li><a href="{{url('aboutUs')}}" title="About">About</a></li>
							<li><a href="{{url('contactUs')}}" title="Contact Us">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="public/edenfortDocs/assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="public/edenfortDocs/assets/packeges/magicsuggest/magicsuggest-min.js"></script>
	<!-- <script type="text/javascript" src="assets/packeges/magicsuggest/magicsuggest-min.js"></script> -->
	<script type="text/javascript" src="public/edenfortDocs/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="public/edenfortDocs/assets/js/slick.min.js"></script>
	<script type="text/javascript"> var base_url = 'index.html'; var site_url = 'index.html';</script>
	<script type="text/javascript" src="public/edenfortDocs/assets/js/apps.min.js"></script>
		<script async defer	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0DaKGlV-AAL09UAREeyUD_DOgEEyLwnU&amp;callback=initMap"></script>

		<!-- Your share button code -->
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
</body>

<!-- Mirrored from www.edenforthomes.com/agents by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Mar 2019 08:08:26 GMT -->
</html>

