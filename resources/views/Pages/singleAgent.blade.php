@include('Includes.headernew')
<!-- Global site tag (gtag.js) - Google Analytics -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css">
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
    .slick-slide {
    margin: 0px 20px;
}
.nav-tabs li .active.show {
    background: #0d6fb7;
    color: white;
}

.slick-slide img {
    width: 272px;
    height: 200px;
}

.slick-dots li{
    width: 6px !important;
    height: 6px !important;
}
.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}
figcaption{
    font-size: 13px;
}
</style>
@if(!empty($filtered))
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Agent Detail</h1>
            <ul class="breadcrumbs">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">{{$filtered->First_name}} {{$filtered->Last_name}}</li>
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
                                @if($filtered->image != NULL || !empty($filtered->image))
                                <img src="{{url('/')}}/{{$filtered->image}}" alt="avatar-16" class="img-fluid">
                                @else
                                <img src="{{url('public/edenfortDocs/assets/profile_img/default.png.png')}}" alt="avatar-16" class="img-fluid">
                                @endif
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
                                <h6 class="mt-2">
                                    {{$filtered->designation}}
                                    {{-- @if($filtered->role == 1) ADMIN @elseif($filtered->role == 2) Owner @elseif($filtered->role == 3) AGENT @elseif($filtered->role == 4) SuperAgent @endif --}}
                                </h6>
                                <h3><a href="#">{{$filtered->First_name}} {{$filtered->Last_name}}</a></h3>
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
                                            <span>Active Listing:</span><a>{{$active_listing}} Properties</a>
                                        </li>
                                        @if(!empty($filtered->rera_no))
                                         <li>
                                            <span>Rera No.</span><a>{{$filtered->rera_no}}</a>
                                        </li>
                                        @endif
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
                                <!-- <li class="nav-item">
                                    <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="two" aria-selected="false">Additional Details</a>
                                </li> -->
                                <!-- <li class="nav-item">
                                    <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="three" aria-selected="true">Attachments</a>
                                </li> -->
                            </ul>
                            <div class="tab-content" id="carTabContent">
                                <div class="tab-pane fade active show" id="one" role="tabpanel" aria-labelledby="one-tab">
                                    <!-- <h3 class="heading">Description</h3> -->
                                    @if(!empty($detail))
                                    <p>
                                        {{$detail->agent_detail}}
                                    </p>
                                    @endif
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
                            		<button class="btn btn-success btn-action"  title="Call This Agent" data-phone="{{$filtered->Phone}}" data-secphone="" data-companyphone="{{$filtered->Phone}}" data-referno="{{$filtered->reference}}" data-companyName="Edenfort Real Estate" data-agentName="{{$filtered->uaer_name}}" data-toggle="modal" data-target="#AgentcallModal">Call</button>
									
                            	</div>
                            	<div class="col-md-6" style="width: 50%;">
                            		<button class="btn btn-primary  btn-action agentMail"  title="High Floor | Panoramic Sea And Marina View's" data-prop="83947" data-referno="{{$filtered->reference}}" data-companyName="West Gate Real Estate" data-agentName="{{$filtered->user_name}}" data-agentEmail="{{$filtered->Email}}" data-toggle="modal" data-target="#AgentemailModal" >Email</button>
                            	</div>
                            </div><hr>
                            <div>
                            	<div class="image text-center">
									<img src="{{url('public/edenfortDocs/assets/images/smallLogo.png')}}" alt="eden fort real estate" style="    height: 100px;">
								</div><hr>
								<p class="view-profile mt-2" style="text-align: center;font-size: 17px;font-weight: bold;">
									<!-- <a href="#"> View Profile</a> -->
								</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <div class="container">
      <h5 class="mb-3">Agent Propeties</h5>
       <section class="customer-logos slider mb-3">
        @if(!empty($agent_properties))
        @foreach($agent_properties as $property)
        <a class="slide " href="{{url('property')}}/{{$property->id}}" title="{{$property->property_name}}">
          <div class="slide"><img src="{{$property->photo1}}"><figcaption>{{$property->property_name}} : {{$property->title_en}} : {{$property->location}} </figcaption></div>
        </a>
        @endforeach
        @else
        <p>No properties found for this agent.</p>
        @endif
       </section>
    </div>
    <!-- Agent detail end -->
    <!-- models -->
<div id="AgentcallModal" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="myCallModalLabel">
  <div class="modal-dialog contact_modals">

    <!-- Modal content-->
    <div class="modal-content"  style="border-radius: 0px;border-top: 4px solid #0071bc;">
        <div>
            <button type="button" class="close" data-dismiss="modal" style="opacity: 1; font-size: 30px;  color: #F7931E; padding: 3px 6px;">&times;</button>
        </div>
            <div class="modal-body" style="margin-top:30px; padding: 0 30px;">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Contact Detail</h2>
                        <p class="company_name ucfirst">Edenfort Estate</p>
                    </div>
                    <div class="col-md-12">
                        <ul class="mt10">
                            <li class="bdr"><label class="left bld">Phone: </label><a href="tel:+971-12345678" class="sec_phone"> {{$filtered->Phone}}</a></li>
                            <li class="bdr"><label class="left bld">Mobile: </label><a href="tel:+971-55-12345678" class="phone"> {{$filtered->Phone}}</a></li>
                            <li class="bdr"><label class="left bld">Refer#</label><span class="right refer_no ucfirst"> {{$filtered->refrence}}</span></li>
                            <li class="bdr"><label class="left bld">Agent</label><span class="right agentName ucfirst">{{$filtered->First_name}} {{$filtered->Last_name}} - At Edenfort Real Estate</span></li>
                            <!-- <li class="ref-info" style="margin-left: 12%;">Please quote property reference<span class="bold block refer_no"> Core -  317-Ha-R-2942</span>when calling us.</li> -->
                            <br>
                        </ul>
                    </div>
                </div>
               
            </div>
      
    </div>

  </div>
</div>

<div class="modal fade AgentemailModal" id="AgentemailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="myform" id="myform">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Your Name:</label>
            <input type="text" class="form-control" placeholder="Your Name" id="sender-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Your Email:</label>
            <input type="email" class="form-control" placeholder="Your Email" id="sender-email">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Your Phone Number:</label>
            <input type="tel" class="form-control" placeholder="Your Phone Number" id="sender-phone">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Select Type:</label>

             <select class="form-control" name="type" id="sender-type" >
                <option value="null">-- Select Option --</option>
                <option value="tenant">Tenant</option>
                <option value="agent">Agent</option>
                <option value="Other">Other</option>
            </select>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Your Message:</label>
            <textarea class="form-control" placeholder="Your Message" id="sender-message"></textarea>
          </div>
          <div class="form-group" id="check-robot">
              <input type="checkbox" id="sender-robot" name="robot" required="">
              <label class="chkbox_label">I am not a robot &nbsp;<span class="robot-error text-danger"></span></label>
          </div>
          <div class="form-group">
            <input type="checkbox" name="sendnotification" checked="checked" >
            <label class="chkbox_label">Keep me Informed about similar properties</label>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary sendmail">Send message</button>
      </div>
    </div>
  </div>
</div>
	@endif

@include('Includes.footernew')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>

<script>
    var agetRefno;
    var agetName;
    var agetEmail; 
    $('.agentMail').on('click', function(){

         agetRefno = $(this).attr('data-referno');
         agetName = $(this).attr('data-agentName');
         agetEmail = $(this).attr('data-agentEmail');

        // console.log(agetRefno);
        // console.log(agetName);
        // console.log(agetEmail);

    })
      $("input").keyup(function(){
        $(this).css('border', '1px solid #ced4da');
      });
      $("select").on('change',function(){
        $(this).css('border', '1px solid #ced4da');
      });
      $("textarea").keyup(function(){
        $(this).css('border', '1px solid #ced4da');
      });
    $('.sendmail').on('click', function(){
        // console.log(agetRefno);
        // console.log(agetName);
        // console.log(agetEmail);
        var name = $("#sender-name").val();
        var email = $("#sender-email").val();
        var phone = $("#sender-phone").val();
        var message = $("#sender-message").val();
        $('select').change(function(){
            $(this).find(':selected').addClass('selected')
                .siblings('option').removeClass('selected');
        })
        var type = $( "#sender-type option:selected" ).val();


        if(name == '' || typeof name == 'undefined'){
            $("#sender-name").css('border', '1px solid red');
        }
        if(email == '' || typeof email == 'undefined'){
            $("#sender-email").css('border', '1px solid red');
        }
        if(phone == '' || typeof phone == 'undefined'){
            $("#sender-phone").css('border', '1px solid red');
        }
        if(type == '' || typeof type === 'undefined' || type == 'null'){
            $("#sender-type").css('border', '1px solid red');
        }
        if(message == '' || typeof message == 'undefined'){
            $("#sender-message").css('border', '1px solid red');
        }

        if ($('#sender-robot').is(":checked"))
        {
            var checkbox = document.getElementById('sender-robot').value;

        }else{
            var checkbox = null;
        }
        
        if(checkbox == null || typeof checkbox == 'null' || typeof checkbox == 'undefined'){
            $( ".error" ).remove();
            $('#check-robot').append('<p class="alert alert-danger error">Please check the checkbox to make sure you are not a robot.');
        }

        if(name == '' || typeof name == 'undefined' || email == '' || typeof email == 'undefined' || phone == '' || typeof phone == 'undefined' || type == '' || typeof type === 'undefined' || type == 'null' || message == '' || typeof message == 'undefined' || checkbox == null || typeof checkbox == 'null' || typeof checkbox == 'undefined'){

            $.toast({
                heading: 'Error',
                text: 'Please fill all required fields to submit form.',
                icon: 'error',
                position: 'top-right',
                loader: true,        // Change it to false to disable loader
                loaderBg: '#9EC600',  // To change the background
                showHideTransition: 'slide',
                hideAfter: 5000,
                allowToastClose: true, 

            })
        }else{
            $.ajax({
                url: "<?php echo url('contactAgent') ?>",
                type: "POST",
                data:{
                    "_token" : "{{ csrf_token() }}",
                    'agetRefno' : agetRefno,
                    'agetName' : agetName,
                    'agetEmail' : agetEmail,
                    'name' : name,
                    'email' : email,
                    'phone' : phone,
                    'type' : type,
                    'message' : message,
                },
                success:function(data){
                    $('.AgentemailModal').modal('hide'); 
                    $('#myform')[0].reset();
                    $.toast({
                        heading: 'Success',
                        text: 'Your email is received. Agent will get back to you soon.',
                        icon: 'success',
                        position: 'top-right',
                        loader: true,        // Change it to false to disable loader
                        loaderBg: '#9EC600',  // To change the background
                        showHideTransition: 'slide',
                        hideAfter: 5000,
                        allowToastClose: true, 

                    })
                }
            })
        }
    })

    $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        dots: true,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>