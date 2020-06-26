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
    .btn-message{
      background-color: transparent;
      color: black;
      border: 1px solid black;
    }
    .btn-message:hover{
        color: white;
        background-color: #0e6fb7;
        border: 1px solid #0e6fb7;
    }
    .mrg-btn-0 {
	    margin-bottom: 20px !important;
	}
</style>
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Contact Us</h1>
            <ul class="breadcrumbs">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Contact 1 start -->
<div class="contact-1 content-area-7">
    <div class="container">
	<div class="col-md-12">
	 @if(session('msg'))
		{!! session('msg') !!}
		@endif						
	</div>
        <div class="main-title">
            <h1>We’d love to hear from you!</h1>
            <p>We are so excited to be on this journey together and we are constantly striving to stay fresh, motivated and to give the best to our clients! We truly look forward to working with you!</p>
        </div>

        <div class="row">
            <div class="col-lg-7 col-md-7 col-md-7">
                <form action="{{url('contactUsForm')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                	@csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group name">
                                <span style="position: absolute; margin-top: -22px; color: red"></span>
								<input type="text" name="name" class="form-control" placeholder="Name*" value="" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group email">
                                <span style="position: absolute; margin-top: -22px; color: red"></span>
								<input type="email" name="email" class="form-control" placeholder="Email*" value="" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group subject">
                                <span style="position: absolute; margin-top: -22px; color: red"></span>
								<input type="text" name="subject" class="form-control" placeholder="Subject*" value="" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group number">
                                <span style="position: absolute; margin-top: -22px; color: red"></span>
								<input type="text" name="phone" class="form-control" placeholder="Phone*" value="" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group message">
                                <span style="position: absolute; margin-top: -22px; color: red"></span>
								<textarea name="message" id="messages" cols="30" rows="7" class="form-control" placeholder="Message*"  required></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                        <div class="form-group" style="overflow: hidden;">
								<span style="position: absolute; margin-top: -22px; color: red">
									</span>
							    <div class="g-recaptcha" data-sitekey="6Le2500UAAAAALZTPAGNyqApyX61oFgmF6YSN3Fp"></div>
							</div>
						</div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="send-btn">
                                <button type="submit" class="btn btn-color btn-md btn-message">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class=" offset-lg-1 col-lg-4 offset-md-0 col-md-5">
                <div class="contact-info">
                    <h3>Contact Info</h3>
                    <div class="media">
                        <i class="fa fa-map-marker"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Office Address</h5>
                            <p>Office 05- Blue Matrix buisness center, floor 27, prime tower, buisness bay.</p>
                        </div>
                    </div>
                    <div class="media">
                        <i class="fa fa-phone"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Phone Number</h5>
                            <!-- <p>Office<a href="tel:0477-0477-8556-552">: XXXX XXXX XXX</a> </p> -->
                            <p>Mobile<a href="tel:+0477-85x6-552">: +971502296968</a> </p>
                        </div>
                    </div>
                    <div class="media mrg-btn-0">
                        <i class="fa fa-envelope"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Email Address</h5>
                            <p><a href="#">info@edenfort.ae</a></p>
                            <!-- <p><a href="#">info@youcanbuyindubai.com</a></p> -->
                        </div>
                    </div>
                     <div class="media mrg-btn-0">
                        <i class="fa fa-whatsapp"></i>
                        <div class="media-body">
                            <h5 class="mt-0">WhatsApp</h5>
                            <p><a href="#">+971502296968</a></p>
                            <!-- <p><a href="#">info@youcanbuyindubai.com</a></p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact 1 end -->

<!-- Google map start -->
<div class="section">
    <div class="map">
        <div id="map" class="contact-map"></div>
    </div>
</div>
<!-- Google map end -->

@include('Includes.footernew')