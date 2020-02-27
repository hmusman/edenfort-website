
@include('Includes.headernew')

@section('title','| Search')




<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110654029-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110654029-1');
</script><!-- Modal -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySearchModalLabel">
  <div class="modal-dialog modal-lg" role="document">

    <!-- Modal content-->
    <div class="modal-content"  style="border-radius: 0px">
      	<div>

      		<button type="button" class="close" data-dismiss="modal" style="opacity: 1; font-size: 30px;  color: #F7931E; padding: 3px 6px;">&times;</button>
      	</div>
	      	<div class="modal-body" style="margin: 30px 0 0 0; padding: 0 30px;overflow:auto;-webkit-overflow-scrolling: touch; width:100%">
		        <form action="http://www.edenforthomes.com/search" id="mobile_form" class="searchform" method="GET" >
					<div class="form-body" style="padding: 10px">
						<!-- Property for Sale Content Row 1 -->
						<div class="row">
							<div class="col-md-12 form-group">
								<select name="for" class="form-control">
									<option value="rent"  >To Rent</option>
									<option value="sale"  >For Sale</option>
								</select>
							</div>
							<div class="col-md-12 form-group">
									<!--<input class="state" name="city" type="hidden">-->
								<!--<input type="hidden" name="area" class="location">-->
								<!--<input type="hidden" name="building" class="building">-->
								<!--<input type="hidden" name="" class="location">-->
							<input type="text" class="form-control location_suggest location" name="location" placeholder="Location" autocomplete="off"/>
							 <div class="locationList" style="background:white;">
                                                  </div>
							</div>
							<div class="col-md-12 form-group">
							   	<select class="form-control" name="type" id="sale-type">
									<option value="">Property Type</option>
									<option style="font-weight:bold;" value="">Any</option>
									<option style="font-weight:bold;" value="Residential">Residential</option>
									
					                    
					                     <option value="Residential-Apartment / Flat">Apartment</option>
								                    <option value="Residential-Villa / House">Villa</option>
								                    <option value="Residential-Townhouse">Townhouse</option>
								                    <option value="Residential-Half Floor ">Half Floor</option>
													<option value="Residential-Full Floor ">Full Floor</option>
								                    <option value="Residential-Land / Plot">Plot</option>
								                    <option value="Residential-Whole Building">Building</option>
								                   	<option value="Residential-Penthouse">Penthouse</option>
								                    <option value="Residential-Compound">Villa Compound</option>
					              
			                        <option style="font-weight:bold;" value="Commercial">Commercial</option>
					                
					                     <option value="Commercial-Office space">Office</option>
								                    <option value="Commercial-Shop">Shop</option>
								                    <option value="Commercial-Warehouse">Warehouse</option>
								                    <option value="Commercial-Factory">Factory</option>
								                    <option value="Commercial-Half Floor">Half Floor</option>
													<option value="Commercial-Full Floor">Full Floor</option>
								                    <option value="Commercial-Land / Plot">Plot</option>
								                    <option value="Commercial-Labor camp">Labour Camp</option>
								                    <option value="Commercial-Whole Building">Building</option>
								</select>
							</div>
							<div class="col-md-12 form-group">
								<select class="form-control" name="minPrice" id="sale-bedroom">
									<option value="">Min Price</option>
									<option value="10000"  >10,000 AED/year</option>
									<option value="20000"  >20,000 AED/year</option>
									<option value="30000"  >30,000 AED/year</option>
									<option value="40000"  >40,000 AED/year</option>
									<option value="50000"  >50,000 AED/year</option>
									<option value="60000"  >60,000 AED/year</option>
									<option value="70000"  >70,000 AED/year</option>
									<option value="80000"  >80,000 AED/year</option>
									<option value="90000"  >90,000 AED/year</option>
									<option value="100000"  >100,000 AED/year</option>
									<option value="110000"  >110,000 AED/year</option>
									<option value="120000"  >120,000 AED/year</option>
									<option value="130000"  >130,000 AED/year</option>
									<option value="140000"  >140,000 AED/year</option>
									<option value="150000"  >150,000 AED/year</option>
									<option value="160000"  >160,000 AED/year</option>
									<option value="170000"  >170,000 AED/year</option>
									<option value="180000"  >180,000 AED/year</option>
									<option value="190000"  >190,000 AED/year</option>
									<option value="200000"  >200,000 AED/year</option>
									<option value="225000"  >225,000 AED/year</option>
									<option value="250000"  >250,000 AED/year</option>
									<option value="275000"  >275,000 AED/year</option>
									<option value="300000"  >300,000 AED/year</option>
									<option value="325000"  >325,000 AED/year</option>
									<option value="350000"  >350,000 AED/year</option>
									<option value="375000"  >375,000 AED/year</option>
									<option value="400000"  >400,000 AED/year</option>
									<option value="425000"  >425,000 AED/year</option>
									<option value="450000"  >450,000 AED/year</option>
									<option value="475000"  >475,000 AED/year</option>
									<option value="500000"  >500,000 AED/year</option>
									<option value="550000"  >550,000 AED/year</option>
									<option value="600000"  >600,000 AED/year</option>
									<option value="650000"  >650,000 AED/year</option>
									<option value="700000"  >700,000 AED/year</option>
									<option value="750000"  >750,000 AED/year</option>
									<option value="800000"  >800,000 AED/year</option>
									<option value="850000"  >850,000 AED/year</option>
									<option value="900000"  >900,000 AED/year</option>
									<option value="950000"  >950,000 AED/year</option>
									<option value="1000000"  >1,000,000 AED/year</option>
								</select>
							</div>
							<div class="col-md-12 form-group">
								<select class="form-control" name="maxPrice" id="sale-bathroom">
									<option value="">Max Price</option>
									<option value="10000"  >10,000 AED/year</option>
									<option value="20000"  >20,000 AED/year</option>
									<option value="30000"  >30,000 AED/year</option>
									<option value="40000"  >40,000 AED/year</option>
									<option value="50000"  >50,000 AED/year</option>
									<option value="60000"  >60,000 AED/year</option>
									<option value="70000"  >70,000 AED/year</option>
									<option value="80000"  >80,000 AED/year</option>
									<option value="90000"  >90,000 AED/year</option>
									<option value="100000"  >100,000 AED/year</option>
									<option value="110000"  >110,000 AED/year</option>
									<option value="120000"  >120,000 AED/year</option>
									<option value="130000"  >130,000 AED/year</option>
									<option value="140000"  >140,000 AED/year</option>
									<option value="150000"  >150,000 AED/year</option>
									<option value="160000"  >160,000 AED/year</option>
									<option value="170000"  >170,000 AED/year</option>
									<option value="180000"  >180,000 AED/year</option>
									<option value="190000"  >190,000 AED/year</option>
									<option value="200000"  >200,000 AED/year</option>
									<option value="225000"  >225,000 AED/year</option>
									<option value="250000"  >250,000 AED/year</option>
									<option value="275000"  >275,000 AED/year</option>
									<option value="300000"  >300,000 AED/year</option>
									<option value="325000"  >325,000 AED/year</option>
									<option value="350000"  >350,000 AED/year</option>
									<option value="375000"  >375,000 AED/year</option>
									<option value="400000"  >400,000 AED/year</option>
									<option value="425000"  >425,000 AED/year</option>
									<option value="450000"  >450,000 AED/year</option>
									<option value="475000"  >475,000 AED/year</option>
									<option value="500000"  >500,000 AED/year</option>
									<option value="550000"  >550,000 AED/year</option>
									<option value="600000"  >600,000 AED/year</option>
									<option value="650000"  >650,000 AED/year</option>
									<option value="700000"  >700,000 AED/year</option>
									<option value="750000"  >750,000 AED/year</option>
									<option value="800000"  >800,000 AED/year</option>
									<option value="850000"  >850,000 AED/year</option>
									<option value="900000"  >900,000 AED/year</option>
									<option value="950000"  >950,000 AED/year</option>
									<option value="1000000"  >1,000,000 AED/year</option>
									<option value="">Any</option>
								</select>
							</div>
							<div class="col-md-12 form-group">
								<select class="form-control" name="bed" id="sale-bathroom">
									<option value="">Beds</option>
									<option value="st"  >Studio</option>
									<option value="1"  >1 Bed</option>
									<option value="2"  >2 Beds</option>
									<option value="3"  >3 Beds</option>
									<option value="4"  >4 Beds</option>
									<option value="5"  >5 Beds</option>
									<option value="6"  >6 Beds</option>
									<option value="7"  >7 Beds</option>
									<option value="8"  >8 Beds</option>
									<option value="9"  >9 Beds</option>
									<option value="10"  >10 Beds</option>
								</select>
							</div>
							<div class="col-md-12 form-group">
								<select class="form-control" name="furnish" id="sale-bathroom">
									<option value="">Furnish status</option>
									<option value="Yes"  >Full Furnished</option>
									<option value="No"  >Unfurnish</option>
									<option value="Partly"  >Partialy Furnished</option>
									
								</select>
							</div>
							<div class="col-md-12 form-group text-right">
								<button class="btn btn-success btn-submit" type="submit"><i class="fa fa-search"></i> Search</button>
							</div>
						</div>
						
						
					</div>
				</form>
			</div>
      
    </div>

  </div>
</div>


<section id="search_bar">
	<div class="container-fluid">
		
		<div class="row">
			<div class="col-md-12" style="padding:0;">
			

				<!-- Tabmenu Container / Default Bootstrap Structure -->
				<div class="search-tabmenu">
					
					<!-- Tabmenu Content 1 / Property For SALE -->
				<!--hidden input fields for containing pagination for the search comes from home page-->
				<!--footer--search-->
      @if(isset($_GET['propertyType'])) <input type="hidden" name="propertyType" value="{{@$_GET['propertyType']}}"/> @endif

                             @if(isset($_GET['offering_type2'])) <input type="hidden" name="offering_type2" value="{{@$_GET['offering_type2']}}"/> @endif
               @if(isset($_GET['city'])) <input type="hidden" name="getCity" value="{{@$_GET['city']}}"/> @endif
<!--End footer--search-->

<!--index page search-->
			         @if(isset($_GET['for'])) <input type="hidden" name="for" value="{{@$_GET['for']}}"/> @endif
               @if(isset($_GET['location'])) <input type="hidden" name="location" value="{{@$_GET['location']}}"/> @endif
			   @if(isset($_GET['type'])) <input type="hidden" name="type" value="{{@$_GET['type']}}"/> @endif
			   @if(isset($_GET['minPrice'])) <input type="hidden" name="minPrice" value="{{@$_GET['minPrice']}}"/> @endif
			   @if(isset($_GET['maxPrice'])) <input type="hidden" name="maxPrice" value="{{@$_GET['maxPrice']}}"/> @endif
			   @if(isset($_GET['bed'])) <input type="hidden" name="bed" value="{{@$_GET['bed']}}"/> @endif
			  @if(isset($_GET['sortby'])) <input type="hidden" name="bed" value="{{@$_GET['sortby']}}"/> @endif
<!--Endindex page search-->

<!--view specific agent all properties Filter-->
			         @if(isset($_GET['agentProperties'])) <input type="hidden" name="agentProperties" value="{{@$_GET['agentProperties']}}"/> @endif
<!--end of view specific agent all properties-->					 
					<div role="tabpanel" class="tab-pane active" id="for-sale">
							<form action="{{route('advanceFilter')}}"  method="GET">
								<div class="form-body" style="padding: 15px 24px 0 ">
									<div class="search-tabmenu hidden-lg hidden-md hidden-sm">
	<div class="row">
						<div class="col-md-12 form-group">
													<div class="input-group">
														
					  								  <input type="text" class="form-control" placeholder="Location" style="line-height:1.71429; height:40px;" aria-describedby="sizing-addon1" data-toggle="modal" data-target="#myModal">
													  <span class="input-group-addon btn btn-success" style="background:#5cb85c; border-color:#5cb85c;color:#fff;" id="sizing-addon1" data-toggle="modal" data-target="#myModal">
													  	<i class="fa fa-search"></i> Search
													  </span>
													  
													</div>
												</div>
										</div>
										
									</div>
									<!-- Property for Sale Content Row 1 -->
									<div class="row hidden-xs" style="position: relative;">
										<div class="col-md-1 col-sm-4 form-group">
											<select name="for" class="form-control">
												<option value="rent"  >To Rent</option>
												<option value="sale"  >For Sale</option>
											</select>
										</div>
										<div class="col-md-4 col-sm-4 form-group search-width">
									
											<input type="text" class="form-control location"   name="location" placeholder="Location" autocomplete="off"/>
										<div class="locationList" style="background:white;">
                                                  </div>
										</div>
										<div class="col-md-2 col-sm-2 form-group custom-width">
											<select class="form-control" name="type" id="sale-type">
									<option value="">Property Type</option>
									<option style="font-weight:bold;" value="">Any</option>
									<option style="font-weight:bold;" value="Residential">Residential</option>
									
					                    
					                     <option value="Residential-Apartment / Flat">Apartment</option>
								                    <option value="Residential-Villa / House">Villa</option>
								                    <option value="Residential-Townhouse">Townhouse</option>
								                    <option value="Residential-Half Floor ">Half Floor</option>
													<option value="Residential-Full Floor ">Full Floor</option>
								                    <option value="Residential-Land / Plot">Plot</option>
								                    <option value="Residential-Whole Building">Building</option>
								                   	<option value="Residential-Penthouse">Penthouse</option>
								                    <option value="Residential-Compound">Villa Compound</option>
					              
			                        <option style="font-weight:bold;" value="Commercial">Commercial</option>
					                
					                     <option value="Commercial-Office space">Office</option>
								                    <option value="Commercial-Shop">Shop</option>
								                    <option value="Commercial-Warehouse">Warehouse</option>
								                    <option value="Commercial-Factory">Factory</option>
								                    <option value="Commercial-Half Floor">Half Floor</option>
													<option value="Commercial-Full Floor">Full Floor</option>
								                    <option value="Commercial-Land / Plot">Plot</option>
								                    <option value="Commercial-Labor camp">Labour Camp</option>
								                    <option value="Commercial-Whole Building">Building</option>
								</select>
										</div>
										<div class="col-md-2 col-sm-2 form-group custom-width">
											<select class="form-control" name="minPrice" id="sale-bedroom">
												<option value="">Min Price</option>
												<option value="10000"  >10,000 AED/year</option>
												<option value="20000"  >20,000 AED/year</option>
												<option value="30000"  >30,000 AED/year</option>
												<option value="40000"  >40,000 AED/year</option>
												<option value="50000"  >50,000 AED/year</option>
												<option value="60000"  >60,000 AED/year</option>
												<option value="70000"  >70,000 AED/year</option>
												<option value="80000"  >80,000 AED/year</option>
												<option value="90000"  >90,000 AED/year</option>
												<option value="100000"  >100,000 AED/year</option>
												<option value="110000"  >110,000 AED/year</option>
												<option value="120000"  >120,000 AED/year</option>
												<option value="130000"  >130,000 AED/year</option>
												<option value="140000"  >140,000 AED/year</option>
												<option value="150000"  >150,000 AED/year</option>
												<option value="160000"  >160,000 AED/year</option>
												<option value="170000"  >170,000 AED/year</option>
												<option value="180000"  >180,000 AED/year</option>
												<option value="190000"  >190,000 AED/year</option>
												<option value="200000"  >200,000 AED/year</option>
												<option value="225000"  >225,000 AED/year</option>
												<option value="250000"  >250,000 AED/year</option>
												<option value="275000"  >275,000 AED/year</option>
												<option value="300000"  >300,000 AED/year</option>
												<option value="325000"  >325,000 AED/year</option>
												<option value="350000"  >350,000 AED/year</option>
												<option value="375000"  >375,000 AED/year</option>
												<option value="400000"  >400,000 AED/year</option>
												<option value="425000"  >425,000 AED/year</option>
												<option value="450000"  >450,000 AED/year</option>
												<option value="475000"  >475,000 AED/year</option>
												<option value="500000"  >500,000 AED/year</option>
												<option value="550000"  >550,000 AED/year</option>
												<option value="600000"  >600,000 AED/year</option>
												<option value="650000"  >650,000 AED/year</option>
												<option value="700000"  >700,000 AED/year</option>
												<option value="750000"  >750,000 AED/year</option>
												<option value="800000"  >800,000 AED/year</option>
												<option value="850000"  >850,000 AED/year</option>
												<option value="900000"  >900,000 AED/year</option>
												<option value="950000"  >950,000 AED/year</option>
												<option value="1000000"  >1,000,000 AED/year</option>
											</select>
										</div>	
										<div class="col-md-2 col-sm-2 form-group custom-width">	
											<select class="form-control" name="maxPrice" id="sale-bathroom">
												<option value="">Max Price</option>
												<option value="10000"  >10,000 AED/year</option>
												<option value="20000"  >20,000 AED/year</option>
												<option value="30000"  >30,000 AED/year</option>
												<option value="40000"  >40,000 AED/year</option>
												<option value="50000"  >50,000 AED/year</option>
												<option value="60000"  >60,000 AED/year</option>
												<option value="70000"  >70,000 AED/year</option>
												<option value="80000"  >80,000 AED/year</option>
												<option value="90000"  >90,000 AED/year</option>
												<option value="100000"  >100,000 AED/year</option>
												<option value="110000"  >110,000 AED/year</option>
												<option value="120000"  >120,000 AED/year</option>
												<option value="130000"  >130,000 AED/year</option>
												<option value="140000"  >140,000 AED/year</option>
												<option value="150000"  >150,000 AED/year</option>
												<option value="160000"  >160,000 AED/year</option>
												<option value="170000"  >170,000 AED/year</option>
												<option value="180000"  >180,000 AED/year</option>
												<option value="190000"  >190,000 AED/year</option>
												<option value="200000"  >200,000 AED/year</option>
												<option value="225000"  >225,000 AED/year</option>
												<option value="250000"  >250,000 AED/year</option>
												<option value="275000"  >275,000 AED/year</option>
												<option value="300000"  >300,000 AED/year</option>
												<option value="325000"  >325,000 AED/year</option>
												<option value="350000"  >350,000 AED/year</option>
												<option value="375000"  >375,000 AED/year</option>
												<option value="400000"  >400,000 AED/year</option>
												<option value="425000"  >425,000 AED/year</option>
												<option value="450000"  >450,000 AED/year</option>
												<option value="475000"  >475,000 AED/year</option>
												<option value="500000"  >500,000 AED/year</option>
												<option value="550000"  >550,000 AED/year</option>
												<option value="600000"  >600,000 AED/year</option>
												<option value="650000"  >650,000 AED/year</option>
												<option value="700000"  >700,000 AED/year</option>
												<option value="750000"  >750,000 AED/year</option>
												<option value="800000"  >800,000 AED/year</option>
												<option value="850000"  >850,000 AED/year</option>
												<option value="900000"  >900,000 AED/year</option>
												<option value="950000"  >950,000 AED/year</option>
												<option value="1000000"  >1,000,000 AED/year</option>
												<option value="">Any</option>
											</select>
										</div>
										
										<div class="col-md-1 col-sm-2 form-group custom-width">
											<select class="form-control" name="bed" id="sale-bathroom">
												<option value="">Beds</option>
												<option value="st"  >Studio</option>
												<option value="1"  >1 Bed</option>
												<option value="2"  >2 Beds</option>
												<option value="3"  >3 Beds</option>
												<option value="4"  >4 Beds</option>
												<option value="5"  >5 Beds</option>
												<option value="6"  >6 Beds</option>
												<option value="7"  >7 Beds</option>
												<option value="8"  >8 Beds</option>
												<option value="9"  >9 Beds</option>
												<option value="10"  >10 Beds</option>
											</select>
										</div>
										<div class="col-md-1 col-sm-2 form-group hidden-sm hidden-xs">
											<button class="btn btn-success pull-right" type="submit" name="Filter" style=" padding: 4px 5px !important;"><i class="fa fa-search"></i> Search</button>
										</div>
										<span class="more-toggle more"><i class="fa fa-angle-down fa-fw"></i>Advance</span>
									</div>	
									<div class="row hidden-xs" id="extra_search" style="display:none;">
										<div class="col-md-2 col-sm-2 form-group">
											<select class="form-control" name="furnish" id="sale-bathroom">
											<option value="">Furnish status</option>
									<option value="Yes"  >Full Furnished</option>
									<option value="No"  >Unfurnish</option>
									<option value="Partly"  >Partialy Furnished</option>
											</select>
										</div>
										<div class="col-md-2 col-sm-2 form-group">
											<select class="form-control" name="minArea" id="sale-bedroom">
												<option value="">Min Area Sqft</option>
												<option value="500"  >500 sqft</option>
												<option value="600"  >600 sqft</option>
												<option value="700"  >700 sqft</option>
												<option value="800"  >800 sqft</option>
												<option value="900"  >900 sqft</option>
												<option value="1000"  >1,000 sqft</option>
												<option value="1100"  >1,100 sqft</option>
												<option value="1200"  >1,200 sqft</option>
												<option value="1300"  >1,300 sqft</option>
												<option value="1400"  >1,400 sqft</option>
												<option value="1500"  >1,500 sqft</option>
												<option value="1600"  >1,600 sqft</option>
												<option value="1800"  >1,800 sqft</option>
												<option value="2000"  >2,000 sqft</option>
												<option value="2200"  >2,200 sqft</option>
												<option value="2400"  >2,400 sqft</option>
												<option value="2600"  >2,600 sqft</option>
												<option value="2800"  >2,800 sqft</option>
												<option value="3000"  >3,000 sqft</option>
												<option value="3200"  >3,200 sqft</option>
												<option value="3400"  >3,400 sqft</option>
												<option value="3600"  >3,600 sqft</option>
												<option value="3800"  >3,800 sqft</option>
												<option value="4200"  >4,200 sqft</option>
												<option value="4600"  >4,600 sqft</option>
												<option value="5000"  >5,000 sqft</option>
												<option value="5400"  >5,400 sqft</option>
												<option value="5800"  >5,800 sqft</option>
												<option value="6200"  >6,200 sqft</option>
												<option value="6600"  >6,600 sqft</option>
												<option value="7000"  >7,000 sqft</option>
												<option value="7400"  >7,400 sqft</option>
												<option value="7800"  >7,800 sqft</option>
												<option value="8200"  >8,200 sqft</option>
												<option value="9000"  >9,000 sqft</option>
											</select>
										</div>
										<div class="col-md-2 col-sm-2 form-group">
											<select class="form-control" name="maxArea" id="sale-bathroom">
												<option value="">Max Area Sqft</option>
												<option value="500"  >500 sqft</option>
												<option value="600"  >600 sqft</option>
												<option value="700"  >700 sqft</option>
												<option value="800"  >800 sqft</option>
												<option value="900"  >900 sqft</option>
												<option value="1000"  >1,000 sqft</option>
												<option value="1100"  >1,100 sqft</option>
												<option value="1200"  >1,200 sqft</option>
												<option value="1300"  >1,300 sqft</option>
												<option value="1400"  >1,400 sqft</option>
												<option value="1500"  >1,500 sqft</option>
												<option value="1600"  >1,600 sqft</option>
												<option value="1800"  >1,800 sqft</option>
												<option value="2000"  >2,000 sqft</option>
												<option value="2200"  >2,200 sqft</option>
												<option value="2400"  >2,400 sqft</option>
												<option value="2600"  >2,600 sqft</option>
												<option value="2800"  >2,800 sqft</option>
												<option value="3000"  >3,000 sqft</option>
												<option value="3200"  >3,200 sqft</option>
												<option value="3400"  >3,400 sqft</option>
												<option value="3600"  >3,600 sqft</option>
												<option value="3800"  >3,800 sqft</option>
												<option value="4200"  >4,200 sqft</option>
												<option value="4600"  >4,600 sqft</option>
												<option value="5000"  >5,000 sqft</option>
												<option value="5400"  >5,400 sqft</option>
												<option value="5800"  >5,800 sqft</option>
												<option value="6200"  >6,200 sqft</option>
												<option value="6600"  >6,600 sqft</option>
												<option value="7000"  >7,000 sqft</option>
												<option value="7400"  >7,400 sqft</option>
												<option value="7800"  >7,800 sqft</option>
												<option value="8200"  >8,200 sqft</option>
												<option value="9000"  >9,000 sqft</option>
												<option value="">Any</option>
											</select>
										</div>
										<div class="col-md-1 col-sm-2 form-group">
											<select class="form-control" name="bath" id="sale-bathroom">
												<option value="">Baths</option>
												<option value="1"  >1 Bath</option>
												<option value="2"  >2 Baths</option>
												<option value="3"  >3 Baths</option>
												<option value="4"  >4 Baths</option>
												<option value="5"  >5 Baths</option>
												<option value="6"  >6 Baths</option>
												<option value="7"  >7 Baths</option>
												<option value="8"  >8 Baths</option>
												<option value="9"  >9 Baths</option>
												<option value="10"  >10 Baths</option>
											</select>
										</div>
										<!--<div class="col-md-2 col-sm-2 form-group">
											<input type="text" name="keywords" value="" class="form-control" placeholder="Keywords" />
										</div>-->
										<div class="col-md-2 col-sm-2 form-group">
											
											<input type="text"   name="agent" class=" form-control" placeholder="Search Agent" />
										</div>
										<div class="col-md-1 col-sm-2 form-group ">
											<button class="reset" type="reset" style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; border: 1px solid rgb(204, 204, 204); color: rgb(255, 255, 255); margin-top: 18px;">Reset</button>
											
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
	
</section>	<!-- ====== END HEADER ====== -->
<section class="paddingTop-10">
	<div class="container" style="position: relative;">
		<div class="row">
			<div class="col-md-12">
	        						  	<h4 class="ucfirst">Properties  in UAE </h4>
	        </div>
		</div>
		
		<span style="position: absolute; top: 0; right: 15px; color: #666"></span>
		<div class="well well-sm ">
			<div class="row">
	        	<div class="col-md-7">
	        		<h5>@if(isset($filtered))
                @if(count($filtered)>0) {{count($filtered)}}  results found @endif @endif  </h5>
	        	</div>
	        	<div class="col-md-5">
	        		<div class="row ">
		    			<div class="col-md-7 col-sm-6">
		    				<section class="main">
								<div class="wrapper-demo">
									<strong>Sort By:</strong>
									<div id="dd" class="wrapper-dropdown-3" tabindex="1">
										<span>Newest</span>
										<ul class="dropdown">
											<li><a  class="sortBy" id="updated_at">Newest</a></li>
										<!--	<li><a   class="sortBy" id="#">Popular</a></li>-->
											<li><a  class="sortBy" id="highestPrice">Highest Price</a></li>
											<li><a class="sortBy" id="lowestPrice">Lowest Price</a></li>
											<li><a href="search.html">Beds (least)</a></li>
											<li><a href="search.html">Beds (Most)</a></li>
										</ul>
									</div>
								</div>
							</section>
		    			</div>
		    			<div class="col-md-5 col-sm-6 text-right">
		    				<div class="btn-group hidden-xs">
					            <a href="#" id="list" class="btn btn-default btn-success"><span class="glyphicon glyphicon-th-list">
					            </span>List</a> <a href="#" id="grid" class="btn btn-default"><span
					                class="glyphicon glyphicon-th"></span>Grid</a>
					        </div>
		    			</div>
		    		</div>
	        		
	        	</div>

	        </div>
        </div>
	</div>

</section>

<!-- ====== PROPERTY LIST CONTENT ====== -->
<section class="page-section paddingTop-10">
	<div class="container">
    
    <div class="row">
    	<div class="col-md-10 col-sm-12">
    		    		<div id="products" class="row list-group">
		        <div id="content">
                
                <!-- start of filtered results-->
                @if(isset($filtered))
                @if(count($filtered)>0)
                @foreach($filtered->sortByDesc('updated_at') as $filter)
                	<div class="item property-item property-archive col-xs-4 col-lg-4 list-group-item">
			            <div class="row thumbnail">
							<div class="col-lg-5 col-md-5 col-sm-5 col-xs-8 col-custom-offset">
								<a href="{{url('property'.$filter->id)}}" class="property-image"  title="High Floor | Panoramic Sea And Marina View's">
																			<img src="{{$filter->photo->photo1}}" alt="Post list 1">
																		
									<span class="property-pics"><i class="fa fa-camera fa-fw"></i> <!--11--></span>
								</a>
							</div>
							<div class="col-lg-7 col-md-7 col-sm-7 col-xs-8 col-custom-offset">
								<div class="property-content">
									<h1 class="property-price"><a href="{{url('property'.$filter->id)}}" title="High Floor | Panoramic Sea And Marina View's">AED {{$filter->price_yearly}}<small></small> </a></h1>
									<p class="word-wrap ucfirst"  title="High Floor | Panoramic Sea And Marina View's">{{$filter->location}}  </p>
									<div class="property-footer">
										<div class="item-appart ucfirst"  title="High Floor | Panoramic Sea And Marina View's">{{$filter->property_type}}</div>
																					<div class="item-room"  title="High Floor | Panoramic Sea And Marina View's"><span class="fi flaticon-room"></span>{{$filter->bedroom}}</div>
																															<div class="item-garage"  title="High Floor | Panoramic Sea And Marina View's"><span class="fa fa-bathtub"></span>{{$filter->bathroom}}</div>
																				<div class="item-wide"  title="High Floor | Panoramic Sea And Marina View's"><span class="fi flaticon-wide"></span>{{$filter->size}} Sq.Ft</div>
									</div>
									<h3 class="property-title ucfirst">
										<a href="detail/83947.html"  title="High Floor | Panoramic Sea And Marina View's">
										{{$filter->category}}										</a>
									</h3>
									<p class="property-description"  title="High Floor | Panoramic Sea And Marina View's">
										{{$filter->description_en}}								</p>
									<div class="property-footer-section">
										<button class="btn btn-success btn-action"  title="High Floor | Panoramic Sea And Marina View's" data-phone="{{$filter->contact_no}}" data-secphone="" data-companyphone="{{$filter->contact_no}}" data-referno="{{$filter->referenceNo}}" data-companyName="West Gate Real Estate" data-agentName="{{$filter->agentName}}" data-toggle="modal" data-target="#callModal">Call</button>
										<button class="btn btn-primary  btn-action"  title="High Floor | Panoramic Sea And Marina View's" data-prop="83947" data-referno="{{$filter->referenceNo}}" data-companyName="West Gate Real Estate" data-agentName="{{$filter->agentName}}" data-agentEmail="{{$filter->agentEmail}}" data-toggle="modal" data-target="#emailModal" >Email</button>
																					<button class="btn btn-default btn-action save"  title="High Floor | Panoramic Sea And Marina View's" rel="83947" style="display:none;"><i class="fa fa-heart"></i> Save</button>
																			</div>
									<div class="company-logo">
										<img src="public/edenfortDocs/assets/images/smallLogo.png"  title="High Floor | Panoramic Sea And Marina View's"  width="75" height="48">
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
                <!--End of filtered results-->
		  
		        	
		  	       <!-- Property List Pagination -->
					<div class=" col-md-12 text-right">
						
						<nav aria-label="Page navigation">
						 @if(isset($_GET['propertyType']))
					{{$filtered->appends(Request::only('propertyType','offering_type2','city','sortby'))->links()}}
				
                    @elseif(isset($_GET['agentProperties']))
					
					{{$filtered->appends(Request::only('agentProperties','sortby'))->links()}}
                    @else
						
					{{$filtered->appends(Request::only('for','location','type','minPrice','maxPrice','bed','furnish','minArea','maxArea','bath','keywords','agent','sortby'))->links()}}
					
                    @endif
					
					
						</nav>
						
					</div> 
			        
			    </div>

		    </div>
		    
    	</div>
    	<div class="col-md-2 col-sm-12 hidden">
    		
    		
    	</div>
    </div>
    
</div>


	
</section>
<!-- by abdul-->

<!-- script added by abul-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       
	<script>
 $(document).ready(function () {
		
                // keyup function looks at the keys typed on the search box
                $('.location').on('keyup',function() {
				   // the text typed in the input field is assigned to a variable 
                    var query = $(this).val();
					
                    // call to an ajax function
					
                    $.ajax({
                        // assign a controller function to perform search action - route name is search
                        url:"{{ route('ajaxLocation') }}",
                        // since we are getting data methos is assigned as GET
                        type:"GET",
                        // data are sent the server
                        data:{'location':query},
                        // if search is succcessfully done, this callback function is called
                        success:function (data) {
						
                            // print the search results in the div called country_list(id)
                           
							 $('.locationList').html(data);
                        }
                    })
                    // end of ajax call
                });

                // initiate a click function on each search result
                $(document).on('click', 'li', function(){
                    // declare the value in the input field to a variable
                    var value = $(this).text();
                    // assign the value to the search box
                    $('.location').val(value);
                    // after click is done, search results segment is made empty
                    $('.locationList').html("");
                });
            });
</script>
    <script>
$('.sortBy').click(function(){
	var id = this.id;
	alert(this.id);
	});
	</script>	
	
 
    
