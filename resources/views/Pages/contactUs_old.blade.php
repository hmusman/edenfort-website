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

<!-- ====== CONTACT PAGE HEADER ====== -->
<section class="page-header page-header-padding" style="background-image: url(public/edenfortDocs/assets/images/main_number_bg.jpg);">
	<div class="container">
		<h1 class="page-header-title">Contact</h1>
		<ul class="breadcrumb">
			<li><a href="{{url('/')}}">Home</a></li>
			<li class="active">Contact</li>
		</ul>
	</div>
</section>

<!-- ====== CONTACT PAGE CONTENT ====== -->
<section class="page-section">
	<div class="container">
		<div id="content">
			<!-- Messages Form Section -->
			<section class="section-row">
				<div class="row">
					<div class="col-md-12">
						 @if(session('msg'))
                    		{!! session('msg') !!}
                			@endif						
					</div>
					<div class="col-md-8">
												<h3>We’d love to hear from you!</h3>
							<p>We are so excited to be on this journey together and we are constantly striving to stay fresh, motivated and to give the best to our clients! We truly look forward to working with you!</p>
						<div class="panel-box">
							<div class="panel-header">
								<h3 class="panel-title">Leave Message</h3>
							</div>
							<div class="panel-body">
								<form action="{{url('contactUsForm')}}" method="post" accept-charset="utf-8">
									@csrf
									<div class="row">
										<div class="form-group col-md-6">
											<span style="position: absolute; margin-top: -22px; color: red"></span>
											<input type="text" name="name" class="form-control" placeholder="Name*" value="" required>
											
										</div>
										<div class="form-group col-md-6">
											<span style="position: absolute; margin-top: -22px; color: red"></span>
											<input type="text" name="phone" class="form-control" placeholder="Phone*" value="" required>
										</div>
									</div>
									<div class="form-group">
										<span style="position: absolute; margin-top: -22px; color: red"></span>
										<input type="email" name="email" class="form-control" placeholder="Email*" value="" required>
									</div>
									<div class="form-group">
										<span style="position: absolute; margin-top: -22px; color: red"></span>
										<input type="text" name="subject" class="form-control" placeholder="Subject*" value="" required>
									</div>
									<div class="form-group">
										<span style="position: absolute; margin-top: -22px; color: red"></span>
										<textarea name="message" id="messages" cols="30" rows="7" class="form-control" placeholder="Message*"  required></textarea>
									</div>
									<div class="form-group" style="overflow: hidden;">
										<span style="position: absolute; margin-top: -22px; color: red">
											</span>
									    <div class="g-recaptcha" data-sitekey="6Le2500UAAAAALZTPAGNyqApyX61oFgmF6YSN3Fp"></div>
									    
									</div>
									<div class="form-group">
										<input type="submit" class="btn-submit btn-primary btn" name="submit" value="Submit">
									</div>
						 		</form>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<h3>Our Address</h3>
						 <p>
							Office 411,
							<br>
							Churchill Executive Towers, Bussines Bay
							<br>
							P.O Box 124874,Dubai,UAE.
							<br>
						
						</p> 
						<ul style="list-style:none; padding-left:10px;">
							<li><i class="fa fa-envelope fa-fw"></i> <a href="mailto:info@edenfort.ae" style="color: #136eb5;">info@edenfort.ae</a></li>
							<li><i class="fa fa-phone fa-fw"></i> +971 43 230688</li> 
						</ul>
						<section class="section-row">
							<div class="panel-box">
								<div class="panel-header">
									<h3 class="panel-title">Location</h3>
								</div>
								<div class="panel-body">
									<div id="map"></div>
								</div>
							</div>
						</section>
					</div>
				</div>
				
			</section>
		</div>
	</div>
</section>

@endsection