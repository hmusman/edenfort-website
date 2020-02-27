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

	<!-- ====== MAIN SEARCH WITH PROPERTY BACKGROUND ====== -->
<section  class="page-section" style="background-image: url(public/edenfortDocs/assets/images/main_search_bg.jpg); background-position: center center; background-size: cover; padding: 50px 0px;">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<!-- Tabmenu Container / Default Bootstrap Structure -->
				<div class="switch6" style="border:1px solid #ffffff; margin-bottom: 30px">
					<label class="switch6-light" >
							<input name="switch"  onclick="toggle_switch()" type="checkbox" value="1">
							<span>
								<span>Agents</span>
								<span>Companies</span>
							</span>
							<a class="btn btn-success"></a>
					</label>
				</div>
				<div class="search-tabmenu">
					
					<!-- Tabmenu Body / Content -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active">
							<form action="{{route('companyFilter')}}" method="GET">
	                        						
   							<div class="form-body" style="padding-bottom:10px;">
										<div class="row">
										<div class="col-md-9 col-sm-9 form-group" style="">
																					
											<input type="text" class=" form-control" value=""  name="name" placeholder="Search Company">
										</div>
										<div class="col-md-3 col-sm-3 form-group hidden-xs" style="">
											<button class="btn btn-success pull-right btn-submit" type="submit" name="Filter" style="height:40px;"><i class="fa fa-search"></i> Search</button>
										</div>
									</div>
									
								
								</div>
								<!-- Property for Sale Submit Button -->
							</form>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
		
	</div>
</section>


<!-- ====== OUR AGENT SECTION ====== -->
<section class="page-section" style="padding-top: 10px">
	<div class="container">
		<div style="padding: 10px 0; border-bottom: 1px solid #ccc; margin-bottom: 30px">
			<div class="row">
	        	<div class="col-md-8">
	        		<h4 class="ucfirst">@if(isset($filtered))
                @if(count($filtered)>0) {{count($filtered)}}  results found @endif @endif</h4>
	        	</div>
	        	<div class="col-md-4">
	        		<section class="main hidden">
						<div class="wrapper-demo">
							<strong>Sort By:</strong>
							<div id="dd" class="wrapper-dropdown-3" tabindex="1">
								<span>Newest</span>
								<ul class="dropdown">
									<li><a href="search.html">Newest</a></li>
									<li><a href="search.html">Popular</a></li>
									<li><a href="search.html">Highest Price</a></li>
									<li><a href="search.html">Lowest Price</a></li>
									<li><a href="search.html">Beds (least)</a></li>
									<li><a href="search.html">Beds (Most)</a></li>
								</ul>
							</div>
						</div>
					</section>
		    			
	        		
	        	</div>

	        </div>
        </div>
		<div class="tile-block-area">
						
							<!-- start of filtered results-->
                @if(isset($filtered))
                @if(count($filtered)>0)
                @foreach($filtered->sortByDesc('updated_at') as $filter)
									<div class="tile-block-container">
						<a href="{{url('company'.$filter->id)}}" class="tile-block gtm-click gtm-impression-sent" data-id="119313" data-type="agent" data-properties="{&quot;position&quot;:&quot;1&quot;,&quot;listingStatus&quot;:&quot;Standard&quot;,&quot;broker&quot;:{&quot;id&quot;:&quot;880&quot;}}">
							<div class="tile-block-content">
								<div class="img-container placeholder-agent-lg">
																		<img class="main-img" alt="{{$filter->agentName}} " src="public/edenfortDocs/assets/images/company.png"> 
									<div class="broker-logo-sm placeholder-broker-tile">
																				
									</div>
								</div> 
								<div class="details-area">
									<div class="ranking-tag hidden">Standard</div> 
									<div class="name-section">
										<div class="name">{{$filter->agentName}} </div> 
										<div class="position">Agent</div>
									</div> 
									<div class="user-details">
										<div class="detail">
											<div class="user-nationality">
												<div class="label1">Nationality:</div> 
												<div class="label-content">Pakistan</div>
											</div> 
											<div class="user-language">
												<div class="label1">Languages:</div> 
												<div class="label-content">Urdu, English</div>
											</div> 
											
										</div>
									</div>
								</div> 
								<div class="property-numbers">
									<div class="numbers-rent">
										<div class="number">5</div> 
										<div class="title">for rent</div>
									</div> 
									<div class="numbers-buy">
										<div class="number">0</div> 
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
						
							
		</div>
		<div class="row">
		<div class=" col-md-12 text-right">
						
						<nav aria-label="Page navigation">
					 {{$filtered->links()}}
				</nav>
			</div>
		</div>
	</div>
</section>

@endsection