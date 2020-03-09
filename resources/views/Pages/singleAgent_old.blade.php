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
			<li><a href="../companies.html">Companies</a></li>
			<li><a href="../companies/1.html">Eden Fort Real Estate</a></li>
			<li class="active">{{$filter->agentName}} </li>
		</ol>
	</div>
</section>

<!-- ====== SERVICES ====== -->
<section id="services" class="page-section" style="padding:0px;">
	<div class="container">
		<!-- Section Title -->
		<div class="row">
		 
			<div class="col-md-8 col-sm-8">
				<div class="agent agent-page">
										<div class="col-lg-4 col-md-3 col-sm-3 col-xs-5 agent-avatar">
						<img src="public/edenfortDocs/assets/profile_img/231e3480c31a0f82d79a93365adb2302.png" alt="{{$filter->agentName}} ">
					</div>

					<div class="col-lg-8 col-md-9 col-sm-9 col-xs-12 agent-content">
						
						<div class="agent-name">
							<h4>{{$filter->agentName}} </h4>
							<span>Agent  </span>
						</div>
						<ul class="agent-contact-details">
							<li><strong>Nationality:</strong> Pakistan</li>
							<li><strong>Language:</strong> Urdu, English</li>
							<li><strong>Active Listing:</strong> <a href= "#our-properties" >5 Properties</a></li>
							<li><strong>Permit #:</strong> </li>
						</ul>
						<div class="clearfix"></div>
					
					</div>
					
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 about-agent">
						<hr>
						<div id="detail">
							<h4>About</h4>

							<p></p>
						</div>
					</div>

				</div>
				
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="agent contact-agent">
					<h4>Contact Agent</h4>
						<button class="btn btn-success btn-action"  title="High Floor | Panoramic Sea And Marina View's" data-phone="{{$filter->contact_no}}" data-secphone="" data-companyphone="{{$filter->contact_no}}" data-referno="{{$filter->referenceNo}}" data-companyName="West Gate Real Estate" data-agentName="{{$filter->agentName}}" data-toggle="modal" data-target="#callModal">Call</button>
						<button class="btn btn-primary  btn-action"  title="High Floor | Panoramic Sea And Marina View's" data-prop="83947" data-referno="{{$filter->referenceNo}}" data-companyName="West Gate Real Estate" data-agentName="{{$filter->agentName}}" data-agentEmail="{{$filter->agentEmail}}" data-toggle="modal" data-target="#emailModal" >Email</button>
																		
				</div>
				<div class="agent agent-company">
						<div class="image text-center">
						<img src="public/edenfortDocs/assets/images/logo1.png" alt="eden fort real estate">
					</div>
					<p class="view-profile">
						<a href="../companies/1.html"> View Profile</a>
					</p>

				</div>
			</div>
	     
		</div>
	</div>
</section>
@endforeach
						@endif
						@endif
<!-- ====== Listing SECTION ====== -->
<section class="page-section" style="">
	<div class="container" id="our-properties">
		<!-- Section Title -->
		<div class="section-header">
			<h2 class="section-title">@if(isset($filtered))
                @if(count($filtered)>0) {{count($filtered)}}  Properties results found @endif @endif  </h2>
		</div>
		<div class="row" style="display:none;">
				<div class="col-md-6 col-sm-6 col-xs-12 ">
					<section class="main">
						<div class="wrapper-demo">
							<label>Sort By:</label>
							<div id="dd" class="wrapper-dropdown-3" tabindex="1">
								<span>Newest</span>
								<ul class="dropdown">
									<li rel="by"><a href="../projects.html">Newest</a></li>
									<li rel="by"><a href="../projects.html">Highest Price</a></li>
									<li rel="by"><a href="../projects.html">Lowest Price</a></li>
									<li rel="by"><a href="../projects.html">Beds (least)</a></li>
									<li rel="by"><a href="../projects.html">Beds (Most)</a></li>
									
								</ul>
							</div>
							<div id="dd1" class="wrapper-dropdown-3" tabindex="1">
								<span>All</span>
								<ul class="dropdown">
									<li rel="for"><a href="../projects.html">All</a></li>
									<li rel="for"><a href="../projects.html">For Sale</a></li>
									<li rel="for"><a href="../projects.html">For Rent</a></li>
									<li rel="for"><a href="../projects.html">Commercial Sale</a></li>
									<li rel="for"><a href="../projects.html">Commercial Rent</a></li>
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
	@endsection