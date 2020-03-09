@include('Includes.headernew')
<link href="https://fonts.googleapis.com/css?family=Sacramento&display=swap" rel="stylesheet">
<style>
	.address{
		padding-left: 7%;
    	padding-top: 2%;
    	font-size: 12px;
    	font-weight: bold;
	}
	.ico{
		font-size: 31px;
    	position: absolute;
    	padding-left: 3%;
    	padding-top: 1%;
	}
	.thumb{
		font-size: 31px;
    	position: absolute;
    	padding-left: 3%;
    	padding-top: 2%;
	}
	.phone{
		font-size: 31px;
    	position: absolute;
    	padding-left: 3%;
    	padding-top: 2%;
	}
	.service_head{
	    margin-left: 30%;
	    padding-top: 18px;
	}
	.services_description{
		font-size: 19px;
    	margin-top: 10%;
    	line-height: 1.7em;
	}

	@media only screen and (max-width: 600px) {
 		.service_head{
 			margin-left: 10px;
    		font-size: 25px;
    		margin-top: 10px;
 		}
 		.services_description{
 			margin-top: 3% !important;
 		}
 		.right_div{
 			padding-left: 6%;
 		}
 		.service_area{
 			background-color: #fafafa;
 			background-image: none !important;
 		}
 		.sm-heading{
 			font-size: 30px !important;
 		}
 		.third_p{
 			padding-right: 12% !important;
 		}
 		body{
 			overflow-x: hidden;
 		}
	}
</style>

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>About Us</h1>
            <ul class="breadcrumbs">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color: ##f7f7f7; height: 55px;">
	<div class="row">
		<div class="col-md-5" style="border-right: 2px solid white;">
			<span class="fa fa-map-marker ico"></span>
			<p class="item-text address">Office No. 107, Churchill Executive Towers, Bussines Bay P.O. Box: 124874, Dubai, UAE</p>		
		</div>
		<div class="col-md-3" style="border-right: 2px solid white;">
			<span class="item-icon fa fa-thumb-tack thumb" style=""></span>
			<p class="item-text" style="margin-left: 12%;padding-top: 3%;font-weight: bold;"><a href="mailto:info@edenfort.ae" style="color: #136eb5;">info@edenforthomes.com</a></p>	
		</div>
		<div class="col-md-4">
			<span class="item-icon fa fa-tty phone"></span>
			<p class="item-text" style="margin-left: 12%;padding-top: 3%;font-weight: bold;">+971 4 323 0688</p>	
		</div>			
	</div>	
</div>
<!-- Sub banner end -->


<!-- About us start -->
<div class="about-us content-area-8 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="properties-service-v">
                    <img style="height: 355px;width: 342px;" src="{{('public/edenfortDocs/assets/profile_img/WASIF.jpg')}}" alt="admin" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-7 align-self-center">
                <div class="about-text more-info">
                    <h3>Why Choose Us?</h3>
                    <div id="faq" class="faq-accordion">
                        <div class="card m-b-0">
                            <div class="card-header">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse1">
                                    ADDRESSING THE CLIENT’S NEEDS
                                </a>
                            </div>
                            <div id="collapse1" class="card-block collapse">
                                <p>Real estate is not just about providing the information and doing the paper work for the client. In addition, it is about the needs and preferences of the clients. After all, we deal in providing homes for the masses.

								As such, it could be a life-changing decision for many of us. Keeping this premise in mind, the team at Eden Fort Homes goes at great lengths to understand what your needs might be and how we can help you find what you are really looking for.

								We make sure that our clients are left satisfied and happy and that they keep coming to us, only to find us even more improved and better than ever.</p>
                            </div>

                            <div class="card-header">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse2">
                                    WORKING WITH TRANSPARENCY AND INTEGRITY
                                </a>
                            </div>
                            <div id="collapse2" class="card-block collapse">
                                <p>Our staff is considerate and honest in all the dealings that it does. We strongly believe that transparency and integrity are the primary factors in such dealings.

								We do our best to ensure that our clients are well aware of our activities and that there is nothing which may cause disagreements. We give only the best advice through our exceptionally talented team of experts.</p>
                            </div>

                            <div class="card-header">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse3">
                                    RESEARCH-BASED APPROACH
                                </a>
                            </div>
                            <div id="collapse3" class="card-block collapse">
                                <p>At Eden Fort Homes, our approach is research driven and as such, after understanding the needs of our clients, we conduct rigorous series of researches and analysis in order to identify the best possible solution for you.

								Given that, we understand the need to quickly adapt and change according to the market needs. We are well aware of the fact that if we lag behind, we are very much likely to be out of market altogether.

								Therefore, we realize the significance of speed and keep changing our strategies accordingly. It goes without saying then, that technology is at the heart of Eden Fort Homes. Using only the most sophisticated and robust tools, we conduct our work with utmost care and detail.</p>
                            </div>

                            <div class="card-header bd-none" style="border-bottom: 1px solid gainsboro;">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse4">
                                    OUR METHODOLOGY
                                </a>
                            </div>
                            <div id="collapse4" class="card-block collapse">
                                <p>Our research based approach starts by understanding the big picture in terms of what your needs are and what is available in the market.

								Next, we work by understanding and analyzing the many variables affecting your particular problem. This helps us comprehend the scope and nature of the problem. Furthermore, this allows us to give you frequent updates regarding the progress made.

								We then begin researching for the appropriate solution which is sustainable and comes up to your expectation. Our structured method of delivery ensures that the solution is long-lasting and relevant.</p>
                            </div>
                            <div class="card-header bd-none" >
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse5">
                                    OUR METHODOLOGY
                                </a>
                            </div>
                            <div id="collapse5" class="card-block collapse">
                                <p>Our research based approach starts by understanding the big picture in terms of what your needs are and what is available in the market.

								Next, we work by understanding and analyzing the many variables affecting your particular problem. This helps us comprehend the scope and nature of the problem. Furthermore, this allows us to give you frequent updates regarding the progress made.

								We then begin researching for the appropriate solution which is sustainable and comes up to your expectation. Our structured method of delivery ensures that the solution is long-lasting and relevant.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About us end -->
<!-- Counters start -->
<div class="counters overview-bgi" style="background-image: url(public/assets/img/bg-photo-2.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-tag"></i>
                    <h1 class="counter">500</h1>
                    <h5>Lines of Sale</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-badge"></i>
                    <h1 class="counter">254</h1>
                    <h5>Listings For Rent</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-call-center-agent"></i>
                    <h1 class="counter">510</h1>
                    <h5>Agents</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-job"></i>
                    <h1 class="counter">94</h1>
                    <h5>Brokers</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters end -->

<div class="container-fluid service_area" style="background-image: url(public/edenfortDocs/assets/images/bg-services-home.jpg);background-repeat: no-repeat;background-size: 100% 100%;min-height: 720px; overflow-x: hidden;">
	<h2 class="service_head">Focus on our Real Estate Services</h2>
	<div class="row">
		<div class="col-md-5" style="padding-left: 7%; padding-right: 6%;">
			<a href="#" title=""><h2 class="services_description">Dubai properties for sale</h2></a>
			<p style="text-indent: 50px;text-align: justify;line-height: 18px;">Our real estate professional team will deliver impartial and qualified advice each time across all off plan and ready projects in Dubai  to suit all budgets from Dubai Marina to Palm Jumeirah, Downtown, Dubailand and Jumeirah Village Circle.  We will adapt our sales approach to deliver results in all aspects of the sales process before and after you have a property title deed in your hand and before you receive keys to your new home.  We have agreements with all large developers such as Emaar Properties, Nakheel,  Damac  if you are looking to buy property off plan with a competitive payment plan.  </p>
		</div>
		<div class="col-md-5 right_div" style="padding-right: 12%;">
			<a href="#" title=""><h2 class="services_description">Dubai properties for rent</h2></a>
			<p style="text-indent: 50px;text-align: justify;line-height: 18px;">All our agents are licensed to facilitate real estate transactions and together we  offer a premium, professional and flexible service to landlords and tenants offering a wide selection of apartments, villas & other property for rent in Dubai. We ensure all clients property needs are met during their home search and all our agents work with knowledge of the areas and properties they represent and are experienced and transparent representatives of the real estate industry. Our leasing team are available with keys for immediate viewings and can be found at our shop in Dubai Marina or at our Kiosk in the Ranches 2 Souk.    </p>
		</div>
		<div class="col-md-5 third_p" style="padding-left: 7%; padding-right: 6%;">
			<a href="#" title=""><h2 class="services_description">Property Management in Dubai</h2></a>
			<p style="text-indent: 50px;text-align: justify;line-height: 18px;">This service is a comfort and effective cost saving solution for local and overseas property owners. We act in the landlords best interests at all times and look after the property as if it is our own.  We work independently with our business partners services group to ensure we manage and maintain a properties condition to maximize home owners returns on investment and reduce landlord costs.  </p>
		</div>
		<div class="col-md-5 right_div" style="padding-right: 12%;">
			<a href="#" title=""><h2 class="services_description">Commercial properties in Dubai </h2></a>
			<p style="text-indent: 50px;text-align: justify;line-height: 18px;">Our commercial division presents a range of options for sale and rent in line with government and free zone regulations.  Our wide range of listings includes retail, offices, warehouses, hospitality and community services, shops for rent in dubai – an option to suit each business needs. An Exclusive Links Commercial agent/ broker will discuss a range of property, licencing and set up services to help your business.   </p>
		</div>
	</div>
	<h1 class="sm-heading" style="font-family: 'Sacramento', cursive;margin-left: 9%;font-size: 74px;">The <strong>complete</strong> property experience</h1>
</div>

@include('Includes.footernew')