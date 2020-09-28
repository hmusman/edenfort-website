@include('Includes.headernew')
<!-- Global site tag (gtag.js) - Google Analytics -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css">
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110654029-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110654029-1');
</script>   <!-- ====== END HEADER ====== -->
<style>
    jq-toast-single jq-has-icon jq-icon-info{
        font-size: 18px !important;
    }
    .jq-icon-info {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGwSURBVEhLtZa9SgNBEMc9sUxxRcoUKSzSWIhXpFMhhYWFhaBg4yPYiWCXZxBLERsLRS3EQkEfwCKdjWJAwSKCgoKCcudv4O5YLrt7EzgXhiU3/4+b2ckmwVjJSpKkQ6wAi4gwhT+z3wRBcEz0yjSseUTrcRyfsHsXmD0AmbHOC9Ii8VImnuXBPglHpQ5wwSVM7sNnTG7Za4JwDdCjxyAiH3nyA2mtaTJufiDZ5dCaqlItILh1NHatfN5skvjx9Z38m69CgzuXmZgVrPIGE763Jx9qKsRozWYw6xOHdER+nn2KkO+Bb+UV5CBN6WC6QtBgbRVozrahAbmm6HtUsgtPC19tFdxXZYBOfkbmFJ1VaHA1VAHjd0pp70oTZzvR+EVrx2Ygfdsq6eu55BHYR8hlcki+n+kERUFG8BrA0BwjeAv2M8WLQBtcy+SD6fNsmnB3AlBLrgTtVW1c2QN4bVWLATaIS60J2Du5y1TiJgjSBvFVZgTmwCU+dAZFoPxGEEs8nyHC9Bwe2GvEJv2WXZb0vjdyFT4Cxk3e/kIqlOGoVLwwPevpYHT+00T+hWwXDf4AJAOUqWcDhbwAAAAASUVORK5CYII=);
        background-color: #31708f;
        color: #d9edf7;
        border-color: #bce8f1;
        font-size: 15px !important;
        padding-top: 15px;
        padding-bottom: 15px;
    }
    .jq-toast-wrap {
        display: block;
        position: fixed;
        width: 450px;
        pointer-events: none!important;
        letter-spacing: normal;
        z-index: 9000!important;
    }
    .jq-toast-single h2 {
        font-family: arial,sans-serif;
        font-size: 20px;
        margin: 0 0 7px;
        background: 0 0;
        color: inherit;
        line-height: inherit;
        letter-spacing: normal;
        padding-bottom: 8px;
    }
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
    .agent-img{
        height: 270px !important;
        width: 255px !important;
    }
    .search-agent::hover{

    }
    .read-more-agent{
        width: 89%;
        margin-left: 16px;
        margin-top: -2px;
        color: #545454;
        background-color: transparent;
        border: 1px solid lightgrey;
    }
</style>
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
             <h1>Agents Team</h1>
            <ul class="breadcrumbs">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active"><a href="{{url('agents')}}">Agents</a></li>
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
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. {{$agentname}}</p>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h4>@if(isset($total)>0) {{$total}}  Total @endif >@if(isset($agentPic))
                        @if(count($agentPic)>0) {{count($agentPic)}}  results found @endif @endif</h4>
                </div>
                <div class="col-md-6">
                    <form action="{{url('agentFilter')}}" method="get" accept-charset="utf-8">
                    <div class="row" style="float: right;">
                        <div class="">
                            <input class="form-control" type="text" name="agent-name" placeholder="Search Agent By Name" value="{{$agentname, ''}}" style="height: 39px;width: 445px;">
                        </div>
                        <div class="">
                            <button class="btn btn-success search-agent" type="submit">Search</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <hr><br>
        </div>
        <div class="row">
        	@if(isset($agentPic))
            @if(count($agentPic)>0)
            @foreach($agentPic as $agent)
            @if($agent->image != NULL || !empty($agent->image))
            @if($agent->user_name == 'Wasif Bilal')
            
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="agent-2">
                    <div class="agent-photo">
                        <a href="{{url('agent/'.$agent->id)}}">
                            <img class="agent-img" src="{{url('/')}}/{{$agent->image}}" alt="{{$agent->user_name}}" class="img-fluid">
                        </a>
                        <img class="img-responsive" alt="Eden Fort Real Estate" src="public/edenfortDocs/assets/images/smallLogo.png" style="height: 43px;width: 85px;margin-left: 67%;margin-top: -27%;background-color: #ffffff00;" >
                    </div>
                    <div class="agent-details" style="margin-top: -11%;">
                        <h5 style="font-weight: 900;"><a href="{{url('agent/'.$agent->id)}}">{{$agent->First_name}} {{$agent->Last_name}}</a></h5>
                        <p class="position" style="margin-top: -5%;">
                           {{--  @if($agent->role == 1) ADMIN @elseif($agent->role == 2) Owner @elseif($agent->role == 3) AGENT @elseif($agent->role == 4) SuperAgent @endif  --}}
                           {{$agent->designation}}
                        </p>
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
						 <a class="btn btn-primary read-more-agent" href="{{url('agent/'.$agent->id)}}" title="">Read More</a>
					</div>
                </div>
            </div>
            @endif
            @endif
             @endforeach
             @else
             <div class="item property-item property-archive col-xs-4 col-lg-4 list-group-item">
	            <div class="row thumbnail">
				
					<div class="property-content">
							<h1 class="property-price" align="center"><a href="#" title="High Floor | Panoramic Sea And Marina View's">No Record Found<small></small> </a></h1>
						</div>
				</div>
	        </div>
            @endif
            @endif
            @if(isset($agentPic))
            @if(count($agentPic)>0)
            @foreach($agentPic as $agent)
            @if($agent->image != NULL || !empty($agent->image))
            @if($agent->user_name != 'Wasif Bilal')
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="agent-2">
                    <div class="agent-photo">
                        <a href="{{url('agent/'.$agent->id)}}">
                            <img class="agent-img" src="{{url('/')}}/{{$agent->image}}" alt="{{$agent->user_name}}" class="img-fluid">
                        </a>
                        <img class="img-responsive" alt="Eden Fort Real Estate" src="public/edenfortDocs/assets/images/smallLogo.png" style="height: 43px;width: 85px;margin-left: 67%;margin-top: -27%;background-color: #ffffff00;" >
                    </div>
                    <div class="agent-details" style="margin-top: -11%;">
                        <h5 style="font-weight: 900;"><a href="{{url('agent/'.$agent->id)}}">{{$agent->First_name}} {{$agent->Last_name}}</a></h5>
                        <p class="position" style="margin-top: -5%;">
                           {{--  @if($agent->role == 1) ADMIN @elseif($agent->role == 2) Owner @elseif($agent->role == 3) AGENT @elseif($agent->role == 4) SuperAgent @endif  --}}
                           {{$agent->designation}}
                        </p>
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
                        <a class="btn btn-primary read-more-agent" href="{{url('agent/'.$agent->id)}}" title="">Read More</a>
                    </div>
                </div>
            </div>
            @endif
            @endif
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
					 {{$agentPic->links()}}
				</nav>
			</div>
		</div>
    </div>
</div >
<!-- agent end -->



@include('Includes.footernew')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
<script>
   $( document ).ready(function() {
        setTimeout(function(){
            $.toast({
                heading: 'Important Notice!',
                text: 'Sheharyar Ahsen, Ali Ahmed Abbasi, Quaid Johar and  Amir Hussain are not working with us',
                icon: 'info',
                position: 'top-right',
                loader: false,        // Change it to false to disable loader
                loaderBg: '#9EC600',  // To change the background
                showHideTransition: 'slide',
                hideAfter: false,
                allowToastClose: true, 

            })
        },4000);
    })
</script>