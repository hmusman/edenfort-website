@include('Includes.headernew')
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110654029-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110654029-1');
</script>   <!-- ====== END HEADER ====== -->
<style>
    @media (max-width: 768px){
        .agent-details{
            margin-top: -6% !important;
            padding-bottom: 14px !important;
        }
        .position{
            margin-top: -2% !important;
        }
        .property-numbers{
            margin-top: -16px !important;
        }
        .numbers-rent{
            width: 50% !important;
        }
        .number{
            margin-left: 53% !important;
        }
        .title{
            margin-left: 44% !important;
            margin-top: -4% !important;
        }
        .num-r{
            margin-left: 73% !important;
            margin-top: -8% !important;
        }
        .tt-r{
            margin-left: 69% !important;
            margin-top: -2% !important;
        }
        .img-responsive{
            
            margin-left: 81% !important;
            margin-top: -15% !important;
        }
    }
</style>
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
             <h1>Agents Team</h1>
            <ul class="breadcrumbs">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active"><a href="#">Agents</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- agent start -->
<div class="agent content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Meet Our Agents</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div>
			<h4>>@if(isset($filtered))
                @if(count($filtered)>0) {{count($filtered)}}  results found @endif @endif</h4>
             <hr>
        </div>
        <div class="row">
        	@if(isset($filtered))
            @if(count($filtered)>0)
            @foreach($filtered->sortByDesc('updated_at') as $filter)
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="agent-2">
                    <div class="agent-photo">
                        <a href="{{url('agent'.$filter->id)}}">
                            <img src="public/edenfortDocs/assets/profile_img/231e3480c31a0f82d79a93365adb2302.png" alt="{{$filter->agentName}}" class="img-fluid">
                        </a>
                        <img class="img-responsive" alt="Eden Fort Real Estate" src="public/edenfortDocs/assets/images/logo1.png" style="height: 43px;
    width: 85px;
    margin-left: 67%;
    margin-top: -27%;
    background-color: #ffffffb5;" >
                    </div>
                    <div class="agent-details" style="margin-top: -11%;">
                        <h5 style="font-weight: 900;"><a href="agent-detail.html">{{$filter->agentName}}</a></h5>
                        <p class="position" style="margin-top: -5%;">AGENT</p>
                        <!-- <ul class="social-list clearfix">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul> -->
                    </div>
                    <div class="user-details" style="margin-left: 11%;">
						<div class="detail">
							<div class="row user-nationality">
								<div class="label1" style="color: #b7b6b6; font-size: 13px;">Nationality:</div> 
								<div class="label-content" style="margin-left: 4%; font-size: 13px;">Pakistan</div>
							</div> 
							<div class="row user-language">
								<div class="label1" style="color: #b7b6b6; font-size: 13px;">Languages:</div> 
								<div class="label-content" style="margin-left: 4%; font-size: 13px;">Urdu, English</div>
							</div> 
							
						</div>
					</div><hr>
					<div class="row property-numbers" style="margin-top: -6%;">
						<div class="col-md-6 numbers-rent" style="border-right: 1px solid #d2d2d2">
							<div class="number" style="font-weight: bold; margin-left: 50%;">5</div> 
							<div class="title" style="margin-left: 32%; margin-top: -5%; font-size: 15px;">for rent</div>
						</div><hr class="vertical">
						<div class="numbers-buy col-md-6">
							<div class="number num-r"style="font-weight: bold; margin-left: 50%;">0</div> 
							<div class="title tt-r" style="margin-left: 32%; margin-top: -5%; font-size: 15px;">for sale</div>
						</div> 
						<!-- <div class="numbers-commercial">
							<div class="number">5</div> 
							<div class="title">Commercial</div>
						</div> --> 
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
        <div class="row">
		<div class=" col-md-12 text-right">
						
						<nav aria-label="Page navigation">
					 {{$filtered->links()}}
				</nav>
			</div>
		</div>
    </div>
</div >
<!-- agent end -->



@include('Includes.footernew')