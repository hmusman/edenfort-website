
@extends('Includes.layout')
@section('title','| Projects')


    @section('content')

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110654029-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110654029-1');
</script>	<!-- ====== END HEADER ====== -->

	<!-- ====== CONTACT PAGE HEADER ====== -->
	<section class="page-header page-header-padding" style="background-image: url(public/edenfortDocs/assets/images/developer4.gif); background-position: center bottom;">
		<div class="container">
			<h1 class="page-header-title">Projects</h1>
			<ul class="breadcrumb">
				<li><a href="{{url('/')}}">Home</a></li>
				<li class="active">Projects</li>
			</ul>
		</div>
	</section>
	<!-- Topbar Header -->

	<section id="our-agent" class="page-section" style="background-color:transparent;padding:30px 0;" >
		<div class="container">
		
			<div class="row">
					  @if(isset($filtered))
                @if(count($filtered)>0)
                @foreach($filtered->sortByDesc('updated_at') as $filter)					
					<div class="col-md-4 col-sm-4 col-xs-12">
						<!-- Agent / Team Item -->
						<div class="profile-box2">
							<a href="{{url('project'.$filter->id)}}" target="_blank">
								<div class="image-box" >
									<img src="public/edenfortDocs/assets/images/project.jpg" alt="EdenFort Real Estate">
								</div>
							</a>
							<div class="profile-content">
								<a href="projects/villa-nova.html" target="_blank" class="project-title">villa nova</a>
								<h4 class="project-pricesec ucfirst">villa Starting <br><span class="text-muted">from</span>  <span class="price">AED 1.2 M</span> <!-- <span class="text-muted">location</span> --></h4> 
								<p class="project-location">dubailand, dubai</p>
								<p class="project-description">Villa Nova is located in DUBAI LAND near the intersection of Emirates Road and Al Ain Road, in close proximity to Sheikh Mohammed Bin Zayed Road.</p>
								<ul class="profile-contact">
									<li><a href="{{url('project'.$filter->id)}}" target="_blank" class="btn btn-primary">Read More</a></li>
									<!-- <li><i class="fa fa-envelope"></i> <a href="#">info@damac.com</a></li>
									<li><i class="fa fa-phone"></i> <a href="#">+971 5 1234 123</a></li> -->
								</ul>
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
					

		
			<div class="row hidden">
			</div>
			<div class="row" style="margin-bottom: 20px;">
				<div class=" col-md-12 text-right">
					<nav aria-label="Page navigation" style="margin-bottom:30px">
					{{$filtered->links()}}
					</nav>
						
				</div>
			</div>
		</div>
	</section>

    @endsection