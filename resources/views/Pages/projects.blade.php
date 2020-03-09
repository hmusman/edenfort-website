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
        .project_title{
                margin-top: -13px;
        }
        .sec_heading{
            
            margin-top: -9px;
            padding-bottom: 19px;
        }
    }
	.read-more{
		width: 137px !important;
		border: 1px solid black;
		color: black;
	}
	.read-more:hover{
		color: white;	
		background-color: #0f6fb9;
		border: 1px solid #0f6fb9;
	}

</style>

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>New Projects</h1>
            <ul class="breadcrumbs">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">New Projects</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->



<!-- Our service start -->
<div class="services content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Projects</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row">
        	@if(isset($filtered))
            @if(count($filtered)>0)
        	@foreach($filtered->sortByDesc('updated_at') as $filter)
            <div class="col-lg-4 col-md-6">
                <div class="card services-info-4">
                	<a href="{{url('project'.$filter->id)}}" title="">
                    	<img class="card-img-top" src="public/edenfortDocs/assets/images/project.jpg" alt="service-2">
                	</a>
                    <div class="card-body detail">
                        <h5 class="project_title" style="float: left;">
                            <a href="{{url('project'.$filter->id)}}" style="color: #0f6fb9;">villa nova</a>
                        </h5><br>
                        <h5 class="sec_heading" style="font-size: 13px;">
                            <a href="{{url('project'.$filter->id)}}" style="margin-left: -100%;">villa Starting</a>
                        </h5><br>
                        <div class="" style="float: left;margin-top: -14%;">
                        <span class="text-muted">from</span>  
                        <span class="price" style="color: green; font-weight: 500;">AED 1.2 M</span></h4> 
						<p class="project-location">dubailand, dubai</p>
                        </div><br><br><br>
                        
                        <p style="margin-top: -45px;">Villa Nova is located in DUBAI LAND near the intersection of Emirates Road and Al Ain Road, in close proximity to Sheikh Mohammed Bin Zayed Road.</p>
                        <a href="{{url('project'.$filter->id)}}" class="btn btn-sm btn-border read-more">Read more</a>
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
</div>
<!-- Our service end -->

@include('Includes.footernew')