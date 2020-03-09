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
	 	.d-tabs {
		    display: contents !important; 
		    float: left;
		}
	 }
	.d-tabs {
	    display: flex !important; 
	    float: left;
	}
</style>
@if(isset($filtered))
    @if(count($filtered)>0)
        @foreach($filtered->sortByDesc('updated_at') as $filter)
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Agent Detail</h1>
            <ul class="breadcrumbs">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">{{$filter->agentName}}</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->



<!-- Agent page start -->
<div class="agent-page content-area-2">
    <!-- Agent detail start -->
    <div class="agent-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row agent-4 agent-6">
                        <div class="col-lg-5 col-md-5 col-pad">
                            <div class="photo">
                                <img src="public/edenfortDocs/assets/profile_img/231e3480c31a0f82d79a93365adb2302.png" alt="avatar-16" class="img-fluid">
                                <div class="social-list">
                                    <ul>
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-pad align-self-center">
                            <div class="details">
                                <h6>Agent</h6>
                                <h3><a href="#">{{$filter->agentName}}</a></h3>
                                <div class="contact clearfix">
                                    <ul>
                                        <!-- <li>
                                            <span>Address:</span><a href="#"> 44 New Design Street,</a>
                                        </li>
                                        <li>
                                            <span>Email:</span><a href="mailto:info@themevessel.com"> info@themevessel.com</a>
                                        </li>
                                        <li>
                                            <span>Mobile:</span><a href="tel:+554XX-634-7071"> +55 4XX-634-7071</a>
                                        </li>
                                        <li>
                                            <span>Fax:</span><a href="#"> +XXXX XXXX XXX</a>
                                        </li>
                                        <li>
                                            <span>Website:</span> www.themevesselcom
                                        </li> -->
                                        <li>
                                            <span>Nationality:</span><a href="#"> Pakistan</a>
                                        </li>
                                        <li>
                                            <span>Language:</span><a href="#"> Urdu, English</a>
                                        </li>
                                        <li>
                                            <span>Active Listing:</span><a href="#our-properties"> 5 Properties</a>
                                        </li>
                                         <li>
                                            <span>Permit #:</span><a href="#our-properties"> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agent-description">
                        <div class="tabbing tabbing-box mb-60">
                            <ul class="nav nav-tabs d-tabs" id="carTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="false">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="two" aria-selected="false">Additional Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="three" aria-selected="true">Attachments</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="carTabContent">
                                <div class="tab-pane fade active show" id="one" role="tabpanel" aria-labelledby="one-tab">
                                    <h3 class="heading">Description</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel,dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed ligula hendrerit condimentum.
                                        Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra.</p>
                                    <p>Vestibulum vel mauris et odio lobortis laoreet eget eu magna. Proin mauris erat, luctus at nulla ut, lobortis mattis magna. Morbi a arcu lacus. Maecenas tristique velit vitae nisi consectetur, in mattis diam sodales. Mauris sagittis sem mattis justo bibendum, a eleifend dolor facilisis. Mauris
                                        nec pharetra tortor, ac aliquam felis. Nunc pretium erat sed quam consectetur fringilla.</p>
                                    <p>Aliquam ultricies nunc porta metus interdum mollis. Donec porttitor libero augue, vehicula tincidunt lectus placerat a. Sed tincidunt dolor non sem dictum dignissim. Nulla vulputate orci felis, ac ornare purus ultricies a. Fusce euismod magna orci, sit amet aliquam turpis dignissim ac. In at
                                        tortor at ligula pharetra sollicitudin. Sed tincidunt, purus eget laoreet elementum, felis est pharetra ante, tincidunt feugiat libero enim sed risus.</p>
                                    <p>Sed at leo sit amet mi bibendum aliquam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent cursus varius odio, non faucibus dui. Nunc vehicula lectus sed velit suscipit aliquam vitae eu ipsum. adipiscing elit.</p>
                                </div>
                                <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="two-tab">
                                    <div class="additional-details-list">
                                        <h3 class="heading">Additional Details</h3>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <ul>
                                                    <li><span>Agent Since:</span>2018</li>
                                                    <li><span>Last Sold Property:</span>21 day ago</li>
                                                    <li><span>Properties Sold:</span>20</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <ul>
                                                    <li><span>Properties Rented:</span>14</li>
                                                    <li><span>Average Price:</span>$280,000</li>
                                                    <li><span>Website:</span><a href="#">www.themevesselcom</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="three" role="tabpanel" aria-labelledby="three-tab">
                                    <div class="attachments">
                                        <h3 class="heading">Attachments</h3>
                                        <!-- <a href="#"><i class="fa fa-file-o"></i>Resume</a> -->
                                        <!-- <br><br> -->
                                        <!-- <a href="#"><i class="fa fa-file-o"></i>Brochure</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar mbl">
                        <div class="contact-2 contact-agent widget">
                            <h5 class="sidebar-title">Contact Agent</h5>
                            <div class="row">
                            	<div class="col-md-6" style="width: 50%;">
                            		<button class="btn btn-success btn-action"  title="High Floor | Panoramic Sea And Marina View's" data-phone="{{$filter->contact_no}}" data-secphone="" data-companyphone="{{$filter->contact_no}}" data-referno="{{$filter->referenceNo}}" data-companyName="West Gate Real Estate" data-agentName="{{$filter->agentName}}" data-toggle="modal" data-target="#callModal">Call</button>
									
                            	</div>
                            	<div class="col-md-6" style="width: 50%;">
                            		<button class="btn btn-primary  btn-action"  title="High Floor | Panoramic Sea And Marina View's" data-prop="83947" data-referno="{{$filter->referenceNo}}" data-companyName="West Gate Real Estate" data-agentName="{{$filter->agentName}}" data-agentEmail="{{$filter->agentEmail}}" data-toggle="modal" data-target="#emailModal" >Email</button>
                            	</div>
                            </div><hr>
                            <div>
                            	<div class="image text-center">
									<img src="public/edenfortDocs/assets/images/logo1.png" alt="eden fort real estate" style="    height: 100px;">
								</div><hr>
								<p class="view-profile mt-2" style="text-align: center;font-size: 17px;font-weight: bold;">
									<a href="../companies/1.html"> View Profile</a>
								</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Agent detail end -->
@endforeach
	@endif
	@endif
    <!-- Featured properties start -->
    <div class="featured-properties">
        <div class="container">
            <h3 class="heading">@if(isset($filtered))
                @if(count($filtered)>0) {{count($filtered)}}  Properties results found @endif @endif</h3>
            <div class="row">
            	@if(isset($filtered))
                @if(count($filtered)>0)
                @foreach($filtered->sortByDesc('updated_at') as $filter)
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                    <div class="card property-box-2">
                        <!-- property img -->
                        <div class="property-thumbnail">
                            <a href="public/edenfortDocs/assets/images/d185dd.jpg" title="High Floor | Panoramic Sea And Marina View's" class="property-img">
                                <img src="public/edenfortDocs/assets/images/d185dd.jpg" alt="property-3" class="img-fluid">
                            </a>
                            <!-- <div class="property-overlay">
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
                                    <a href="assets/img/property-7.jpg" class="hidden"></a>
                                    <a href="assets/img/property-6.jpg" class="hidden"></a>
                                </div>
                            </div> -->
                        </div>
                        <!-- detail -->
                        <div class="detail">
                            <h5 class="title"><a href="properties-details.html">High Floor | Panoramic Sea And Marina View's</a></h5>
                            <h4 class="price">
                                AED {{$filter->price}}
                            </h4>
                            <p>{{$filter->location}}</p>
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
                
            </div>
        </div>
    </div>
    <!-- Featured properties end -->
</div>
<!-- Agent page end -->

@include('Includes.footernew')