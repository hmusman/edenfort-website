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
@if(isset($filtered))
                @if(count($filtered)>0)
                @foreach($filtered->sortByDesc('updated_at') as $filter)
<section class="paddingTop-10">
	<div class="container" style="position: relative;">
		<ol class="breadcrumb-custome ucfirst">
			<li><a href="http://www.edenforthomes.com/companies">Companies</a></li>
			<li class="active">One Broker Group</li>
		</ol>
	</div>
</section>	

<!-- ====== SERVICES ====== -->
<section id="services" class="page-section" style="padding-bottom:0px; padding-top:20px;">
	<div class="container">
		<!-- Section Title -->
		<div style="background: #fff; padding: 30px 15px 15px;">
			<div class="section-header header-center">
				<h2 class="section-title">About One Broker Group</h2>
			</div>
			<div class="row">

				<!-- Services Content -->
				<div class="col-md-8">
					<div class="services-content">
						<table class="table">
							<tr>
								<th>Employees:</th>
								<td><a href= "#agents" >5 Agents AgentName: {{$filter->agentName}}</a></td>
							</tr>
							<tr>
								<th>Active listing:</th>
								<td><a href= "#our-properties" >111</a></td>
							</tr>
							<tr>
								<th>RERA:</th>
								<td>#0</td>
							</tr>
							<tr>
								<th>Head office:</th>
								<td>After 4th interchange, Al Barsha, Sheikh Zayed Road, Maleka Zarooni Building, Office No. 602</td>
							</tr>
						</table>
						<br>
						<p>About Us
Provident Estate, is one of the major leading 5 real estate companies in Dubai UAE and offers our valued clients the complete spectrum of well-designed real estate management services. Right from your first vision of owning, selling or leasing a property in Dubai, provident estate shows up time and again to be the best option. Whether you are an investor or an end user, we at provident estate provide you with a huge fresh exclusive property choice that meets your every preference, either directly from the developers or from resellers. Our vast property selections offer single units, apartments, villas, retail spaces, commercial offices, townhouses, holiday homes and towers, as well as investment tailored opportunities.</p>
						
					</div>
				</div>
				<!-- Services Image -->
				<div class="col-md-4">
										<div class="services-image" style="position: relative; height:170px">
						<img src="https://www.providentestate.com/images/site_logo.png" style=" bottom: 0;display: block;left: 0;margin: auto;position: absolute;right: 0;top: -70px;height:150px;width:auto; max-width:100%;" alt="one broker group" class="">
					</div>
					<div class="agent contact-agent">
						<h4>Contact Broker</h4>
					<button class="btn btn-success btn-action"  title="High Floor | Panoramic Sea And Marina View's" data-phone="{{$filter->contact_no}}" data-secphone="" data-companyphone="{{$filter->contact_no}}" data-referno="{{$filter->referenceNo}}" data-companyName="West Gate Real Estate" data-agentName="{{$filter->agentName}}" data-toggle="modal" data-target="#callModal">Call</button>
										<button class="btn btn-primary  btn-action"  title="High Floor | Panoramic Sea And Marina View's" data-prop="83947" data-referno="{{$filter->referenceNo}}" data-companyName="West Gate Real Estate" data-agentName="{{$filter->agentName}}" data-agentEmail="{{$filter->agentEmail}}" data-toggle="modal" data-target="#emailModal" >Email</button>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>
@endforeach
						@endif
						@endif
<!-- ====== OUR Properties SECTION ====== -->
<section id="our-properties" class="page-section" style="padding-bottom:0px;">
	<div class="container">
		<!-- Section Title -->
		<div class="section-header">
			<h2 class="section-title">@if(isset($filtered))
                @if(count($filtered)>0) {{count($filtered)}}  Properties results found @endif @endif </h2>
		</div>
		<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12 ">
					<section class="main">
						<div class="wrapper-demo">
							<label>Sort By:</label>
							<div id="dd" class="wrapper-dropdown-3" tabindex="1">
								<span>Newest</span>
								<ul class="dropdown">
									<li><a href="http://www.edenforthomes.com/projects">Newest</a></li>
									<li><a href="http://www.edenforthomes.com/projects">Highest Price</a></li>
									<li><a href="http://www.edenforthomes.com/projects">Lowest Price</a></li>
									<li><a href="http://www.edenforthomes.com/projects">Beds (least)</a></li>
									<li><a href="http://www.edenforthomes.com/projects">Beds (Most)</a></li>
									
								</ul>
							</div>
							<div id="dd1" class="wrapper-dropdown-3" tabindex="1">
								<span>All</span>
								<ul class="dropdown">
									<li><a href="http://www.edenforthomes.com/projects">All</a></li>
									<li><a href="http://www.edenforthomes.com/projects">For Sale</a></li>
									<li><a href="http://www.edenforthomes.com/projects">For Rent</a></li>
									<li><a href="http://www.edenforthomes.com/projects">Commercial Sale</a></li>
									<li><a href="http://www.edenforthomes.com/projects">commercial Rent</a></li>
								</ul>
							</div>
						</div>
					</section>
				</div>
			</div>
		<div class="row">
			<div class="col-md-12">
				<div id="products" class="row list-group">
			        <div id="content">
			        				        		 @if(isset($filtered))
                @if(count($filtered)>0)
                @foreach($filtered->sortByDesc('updated_at') as $filter)
			        				        
		<div class="item property-item property-archive col-xs-4 col-lg-4 list-group-item">
			            <div class="row thumbnail">
							<div class="col-lg-5 col-md-5 col-sm-5 col-xs-8 col-custom-offset">
								<a href="public/edenfortDocs/assets/images/d185dd.jpg" class="property-image"  title="High Floor | Panoramic Sea And Marina View's">
																			<img src="public/edenfortDocs/assets/images/d185dd.jpg" alt="Post list 1">
																		
									<span class="property-pics"><i class="fa fa-camera fa-fw"></i> 11</span>
								</a>
							</div>
							<div class="col-lg-7 col-md-7 col-sm-7 col-xs-8 col-custom-offset">
								<div class="property-content">
									<h1 class="property-price"><a href="detail/83947.html" title="High Floor | Panoramic Sea And Marina View's">AED {{$filter->price}}<small></small> </a></h1>
									<p class="word-wrap ucfirst"  title="High Floor | Panoramic Sea And Marina View's">{{$filter->location}}</p>
									<div class="property-footer">
										<div class="item-appart ucfirst"  title="High Floor | Panoramic Sea And Marina View's">apartment</div>
																					<div class="item-room"  title="High Floor | Panoramic Sea And Marina View's"><span class="fi flaticon-room"></span>{{$filter->beds}}</div>
																															<div class="item-garage"  title="High Floor | Panoramic Sea And Marina View's"><span class="fa fa-bathtub"></span>2</div>
																				<div class="item-wide"  title="High Floor | Panoramic Sea And Marina View's"><span class="fi flaticon-wide"></span>808 Sq.Ft</div>
									</div>
									<h3 class="property-title ucfirst">
										<a href="detail/83947.html"  title="High Floor | Panoramic Sea And Marina View's">
										{{$filter->category}}										</a>
									</h3>
									<p class="property-description"  title="High Floor | Panoramic Sea And Marina View's">
										{{$filter->type}} {{$filter->updated_at}}								</p>
									<div class="property-footer-section">
										<button class="btn btn-success btn-action"  title="High Floor | Panoramic Sea And Marina View's" data-phone="{{$filter->contact_no}}" data-secphone="" data-companyphone="{{$filter->contact_no}}" data-referno="{{$filter->referenceNo}}" data-companyName="West Gate Real Estate" data-agentName="{{$filter->agentName}}" data-toggle="modal" data-target="#callModal">Call</button>
										<button class="btn btn-primary  btn-action"  title="High Floor | Panoramic Sea And Marina View's" data-prop="83947" data-referno="{{$filter->referenceNo}}" data-companyName="West Gate Real Estate" data-agentName="{{$filter->agentName}}" data-agentEmail="{{$filter->agentEmail}}" data-toggle="modal" data-target="#emailModal" >Email</button>
																					<button class="btn btn-default btn-action save"  title="High Floor | Panoramic Sea And Marina View's" rel="83947" style="display:none;"><i class="fa fa-heart"></i> Save</button>
																			</div>
									<div class="company-logo">
										<img src="public/edenfortDocs/assets/images/7b48ea8e910331b2aa735bfb33ac0408.png"  title="High Floor | Panoramic Sea And Marina View's"  width="75" height="48">
									</div>
								</div>
							</div>
						</div>
			        </div>
			        	  @endforeach
                @else
                	<div class="item property-item property-archive col-xs-4 col-lg-4 list-group-item">
			            <div class="row thumbnail">
						
							<div class="property-content">
									<h1 class="property-price" align="center"><a href="detail/83947.html" title="High Floor | Panoramic Sea And Marina View's">No Record Found<small></small> </a></h1>
								
								
								</div>
						</div>
			        </div>
                @endif
                @endif
			        			
			        	        <!-- Property List Pagination -->
					<div class=" col-md-12 text-right">
						
						<nav aria-label="Page navigation">
						 @if(isset($_GET['type']))
					{{$filtered->appends(Request::only('type','category'))->links()}}
                    @else
                    {{$filtered->links()}}
                    @endif
						</nav>
						
					</div> 
				        
				    </div>

			    </div>
			</div>
		</div>
		
	</div>
</section>
<!-- ====== OUR AGENT SECTION ====== -->
<section id="agents" class="page-section">
	<div class="container">
		<!-- Section Title -->
		<div class="section-header">
			<h2 class="section-title">Our Agent</h2>
		</div>

		<div class="tile-block-area">
						<div class="tile-block-container">
				<a href="http://www.edenforthomes.com/agents/88939" class="tile-block gtm-click gtm-impression-sent" data-id="119313" data-type="agent" data-properties="{&quot;position&quot;:&quot;1&quot;,&quot;listingStatus&quot;:&quot;Standard&quot;,&quot;broker&quot;:{&quot;id&quot;:&quot;880&quot;}}">
					<div class="tile-block-content">
						<div class="img-container placeholder-agent-lg">
														<img class="main-img" alt="Masoud Goharian " src="http://www.edenforthomes.com/assets/profile_img/avatar.png"> 
							<div class="broker-logo-sm placeholder-broker-tile">
																<img class="img-responsive" alt="One Broker Group" src="https://www.providentestate.com/images/site_logo.png">
							</div>
						</div> 
						<div class="details-area">
							<div class="ranking-tag hidden">Standard</div> 
							<div class="name-section">
								<div class="name">Masoud Goharian </div> 
								<div class="position">Agent</div>
							</div> 
							<div class="user-details">
								<div class="detail">
									<div class="user-nationality">
										<div class="label1">Nationality:</div> 
										<div class="label-content"></div>
									</div> 
									<div class="user-language">
										<div class="label1">Languages:</div> 
										<div class="label-content"></div>
									</div> 
									
								</div>
							</div>
						</div> 
						<div class="property-numbers">
							<div class="numbers-rent">
								<div class="number">0</div> 
								<div class="title">for rent</div>
							</div> 
							<div class="numbers-buy">
								<div class="number">50</div> 
								<div class="title">for sale</div>
							</div> 
							<!-- <div class="numbers-commercial">
								<div class="number">5</div> 
								<div class="title">Commercial</div>
							</div> --> 
						</div>
					</div>
				</a>
			</div>
			<div class="tile-block-container">
				<a href="http://www.edenforthomes.com/agents/88939" class="tile-block gtm-click gtm-impression-sent" data-id="119313" data-type="agent" data-properties="{&quot;position&quot;:&quot;1&quot;,&quot;listingStatus&quot;:&quot;Standard&quot;,&quot;broker&quot;:{&quot;id&quot;:&quot;880&quot;}}">
					<div class="tile-block-content">
						<div class="img-container placeholder-agent-lg">
														<img class="main-img" alt="Masoud Goharian " src="http://www.edenforthomes.com/assets/profile_img/avatar.png"> 
							<div class="broker-logo-sm placeholder-broker-tile">
																<img class="img-responsive" alt="One Broker Group" src="https://www.providentestate.com/images/site_logo.png">
							</div>
						</div> 
						<div class="details-area">
							<div class="ranking-tag hidden">Standard</div> 
							<div class="name-section">
								<div class="name">Masoud Goharian </div> 
								<div class="position">Agent</div>
							</div> 
							<div class="user-details">
								<div class="detail">
									<div class="user-nationality">
										<div class="label1">Nationality:</div> 
										<div class="label-content"></div>
									</div> 
									<div class="user-language">
										<div class="label1">Languages:</div> 
										<div class="label-content"></div>
									</div> 
									
								</div>
							</div>
						</div> 
						<div class="property-numbers">
							<div class="numbers-rent">
								<div class="number">0</div> 
								<div class="title">for rent</div>
							</div> 
							<div class="numbers-buy">
								<div class="number">50</div> 
								<div class="title">for sale</div>
							</div> 
							<!-- <div class="numbers-commercial">
								<div class="number">5</div> 
								<div class="title">Commercial</div>
							</div> --> 
						</div>
					</div>
				</a>
			</div>
					
						

		</div>
	</div>
	</section>
	@endsection