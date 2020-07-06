@include('Includes.headernew')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDTWJ3Z"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- main header start -->
<style>
    .property-box .property-img img {
    width: 100%;
    height: 300px !important;
}
</style>

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Properties</h1>
            <ul class="breadcrumbs">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">Properties</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Properties list fullwidth start -->
<div class="properties-list-fullwidth content-area-2">

    <div class="container">
    <h2>Properties in UAE</h2>
        <div class="option-bar d-xl-block d-lg-block d-md-block d-sm-block">
            <div class="row clearfix">
                <div class="col-xl-4 col-lg-5 col-md-5 col-sm-5">
                    <h4>
                        <span class="heading-icon" style="background-color: #0f6fb9;">
                            <i class="fa fa-caret-right icon-design" style="color: #0f6fb9;"></i>
                            <i class="fa fa-th-large"></i>
                        </span>
                        <span class="heading">@if(isset($filtered))
                            @if(count($filtered)>0) {{count($filtered)}}  results found @endif @endif </span>
                    </h4>
                </div>
                <div class="col-xl-8 col-lg-7 col-md-7 col-sm-7">
                    <!-- <div class="sorting-options clearfix" style="background-color: #0f6fb9;">
                        <a href="#" class="change-view-btn"><i class="fa fa-th-list" style="color: white;"></i></a>
                        <a href="#" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                    </div> -->
                    <div class="search-area">
                        <div id="dd" class="dropdown" tabindex="1">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Sort By</a>
                            <ul class="dropdown dropdown-menu">
                                <li><a  class="sortBy dropdown-item" id="updated_at" href="#">Newest</a></li>
                            <!--    <li><a   class="sortBy" id="#">Popular</a></li>-->
                                <li><a  class="sortBy dropdown-item" id="highestPrice" href="#">Highest Price</a></li>
                                <li><a class="sortBy dropdown-item" id="lowestPrice" href="#">Lowest Price</a></li>
                                <li><a class="dropdown-item" href="#">Beds (least)</a></li>
                                <li><a class="dropdown-item" href="#">Beds (Most)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @if(isset($filtered))
            @if(count($filtered)>0)
            @foreach($filtered->sortByDesc('updated_at') as $filter)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="{{url('property/'.$filter->id)}}" class="property-img">
                            <div class="tag button alt featured">{{$filter->offering_type1}}</div>
                            <div class="price-ratings-box">
                                <p class="price">
                                    AED {{$filter->price_yearly}}
                                </p>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <img src="{{$filter->photo->photo1}}" alt="property-2" class="img-fluid" >
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="assets/img/property-2.jpg" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="assets/img/property-6.jpg" class="hidden"></a>
                                <a href="assets/img/property-4.jpg" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="{{url('property/'.$filter->id)}}">{{$filter->title_en}}</a>
                        </h1>
                        <div class="location">
                            <a href="{{url('property/'.$filter->id)}}">
                                <i class="fa fa-map-marker"></i>{{$filter->location}}
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> {{$filter->bedroom}} Bedrooms
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> {{$filter->bathroom}} Bathrooms
                            </li>
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:{{$filter->size}}
                            </li>
                            <li>
                                <i class="flaticon-car-repair"></i> Furnished:{{$filter->furnished}}
                            </li>
                            <li>
                                <i class="fa fa-user"></i> Agent: {{$filter->agentName}}
                            </li>
                            <li>
                                 <i class="fa fa-calendar-o"></i> Added: {{$filter->created_at->diffForHumans()}}
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <div class="row">
                            <div class="col-md-6" style="width: 50%;">
                                <button class="btn btn-success btn-action call-btn"  title="High Floor | Panoramic Sea And Marina View's" data-phone="{{$filter->agentPhone}}" data-secphone="" data-companyphone="{{$filter->agentPhone}}" data-referno="{{$filter->reference_number}}" data-companyName="West Gate Real Estate" data-agentName="{{$filter->agentName}}" data-toggle="modal" data-target="#AgentcallModal">Call</button>
                                 
                            </div>
                           <div class="col-md-6" style="width: 50%;">
                                <button class="btn btn-primary  btn-action email-btn agentMail"  title="High Floor | Panoramic Sea And Marina View's" data-prop="83947" data-referno="{{$filter->reference_number}}" data-companyName="West Gate Real Estate" data-agentName="{{$filter->agentName}}" data-agentEmail="{{$filter->agentEmail}}" data-toggle="modal" data-target="#AgentemailModal" >Email</button>
                           </div>
                          
                        </div>
                        
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="container">
                <h5 class="property-price" align="center">No Record Found</h5>
                
            </div>
            @endif
            @endif
            <div class="col-lg-12">
                <div class="pagination-box text-center">
                    <nav aria-label="Page navigation example">
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
</div>
<!-- Properties list fullwidth end -->
<!-- -----------MODALS--------------- -->
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
                            <li class="bdr "><label class="left bld">Phone: &nbsp;</label><a  class="sec_phone phone"></a></li>
                            <li class="bdr"><label class="left bld">Mobile: &nbsp;</label><a  class="phone"></a></li>
                            <li class="bdr"><label class="left bld">Refer# &nbsp;</label><span class="right refer_no ucfirst"></span></li>
                            <li class="bdr agent"><label class="left bld">Agent: &nbsp;</label><span class="right agentName ucfirst"> - At Edenfort Real Estate</span></li>
                            <li class="ref-info" style="margin-left: 12%;">Please quote property reference&nbsp;<span class="bold block refer_no call_refer_no"> Core -  317-Ha-R-2942</span>&nbsp;when calling us.</li>
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
<!-- -------------------END MODALS------------------- -->
<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="#">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="button" class="btn btn-sm btn-color">Search</button>
    </form>
</div>

<!-- Property Video Modal -->
<div class="modal property-modal fade" id="propertyModal" tabindex="-1" role="dialog" aria-labelledby="propertyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="propertyModalLabel">
                    Find Your Dream Properties
                </h5>
                <p>
                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i> 123 Kathal St. Tampa City,
                </p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 modal-left">
                        <div class="modal-left-content">
                            <div id="modalCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <iframe class="modalIframe" src="https://www.youtube.com/embed/5e0LxrLSzok"  allowfullscreen></iframe>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/property-1.jpg" alt="Test ALT">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/property-1.jpg" alt="Test ALT">
                                    </div>
                                </div>
                                <a class="control control-prev" href="#modalCarousel" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="control control-next" href="#modalCarousel" role="button" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                            <div class="description"><h3>Description</h3>
                                <p>
                                    Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque
                                    massa, viverra interdum eros ut, imperdiet pellentesque mauris. Proin sit amet scelerisque
                                    risus. Donec
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 modal-right">
                        <div class="modal-right-content bg-white">
                            <strong class="price">
                                $178,000
                            </strong>
                            <section>
                                <h3>Features</h3>
                                <ul class="bullets">
                                    <li><i class="flaticon-bed"></i> Double Bed</li>
                                    <li><i class="flaticon-swimmer"></i> Swimming Pool</li>
                                    <li><i class="flaticon-bath"></i> 2 Bathroom</li>
                                    <li><i class="flaticon-car-repair"></i> Garage</li>
                                    <li><i class="flaticon-parking"></i> Parking</li>
                                    <li><i class="flaticon-theatre-masks"></i> Home Theater</li>
                                    <li><i class="flaticon-old-typical-phone"></i> Telephone</li>
                                    <li><i class="flaticon-green-park-city-space"></i> Private space</li>
                                </ul>
                            </section>
                            <section>
                                <h3>Overview</h3>
                                <dl>
                                    <dt>Area</dt>
                                    <dd>2500 Sq Ft:3400</dd>
                                    <dt>Condition</dt>
                                    <dd>New</dd>
                                    <dt>Year</dt>
                                    <dd>2018</dd>
                                    <dt>Price</dt>
                                    <dd>$178,000</dd>
                                </dl>
                            </section>
                            <a href="properties-details.html" class="btn btn-show btn-theme">Show Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Off-canvas sidebar -->
<div class="off-canvas-sidebar">
    <div class="off-canvas-sidebar-wrapper">
        <div class="off-canvas-header">
            <a class="close-offcanvas" href="#"><span class="fa fa-times"></span></a>
        </div>
        <div class="off-canvas-content">
            <aside class="canvas-widget">
                <div class="logo-sitebar text-center">
                    <img src="assets/img/logos/logo.png" alt="logo">
                </div>
            </aside>
            <aside class="canvas-widget">
                <ul class="menu">
                    <li class="menu-item menu-item-has-children"><a href="index.html">Home</a></li>
                    <li class="menu-item"><a href="properties-grid-leftside.html">Properties List</a></li>
                    <li class="menu-item"><a href="properties-details.html">Property Detail</a></li>
                    <li class="menu-item"><a href="blog-single-sidebar-right.html">Blog</a></li>
                    <li class="menu-item"><a href="about-1.html">About  US</a></li>
                    <li class="menu-item"><a href="contact-1.html">Contact US</a></li>
                </ul>
            </aside>
            <aside class="canvas-widget">
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-vk"></i></a></li>
                </ul>
            </aside>
        </div>
    </div>
</div>

<!-- External JS libraries -->

@include('Includes.footernew')
<!-- <script>
    $('.sortBy').click(function(){
        var id = this.id;
        alert(this.id);
        });
    </script> -->
<script type="text/javascript">
        
    function DropDown(el) {
        this.dd = el;
        this.placeholder = this.dd.children('span');
        this.opts = this.dd.find('ul.dropdown > li');
        this.val = '';
        this.index = -1;
        this.initEvents();
    }
    DropDown.prototype = {
        initEvents : function() {
            var obj = this;
            obj.dd.on('click', function(event){
                $(this).toggleClass('active');
                return false;
            });

            obj.opts.on('click',function(){
                var opt = $(this);
                obj.val = opt.text();
                obj.index = opt.index();
                obj.placeholder.text(obj.val);
                var currenturl = window.location.href;
                var n = currenturl.indexOf('&sortby');
                currenturl = currenturl.substring(0, n != -1 ? n : currenturl.length);
                
                var n = currenturl.indexOf('&per_page');
                currenturl = currenturl.substring(0, n != -1 ? n : currenturl.length);
                //currenturl = currenturl.substring(0, currenturl.indexOf('&sortby'));
                currenturl +='&sortby='+obj.val.replace(' ', '-');
                //alert(currenturl);
                window.location.href =  currenturl;
            });
        },
        getValue : function() {
            return this.val;
        },
        getIndex : function() {
            return this.index;
        }
    };

    $(function() {
        var dd = new DropDown( $('#dd') );
        $(document).click(function() {
            $('.wrapper-dropdown-3').removeClass('active');
        });
    });

</script>
<!-- Mirrored from storage.googleapis.com/themevessel-products/xero/properties-grid-fullwidth.html by HTTrack Website  -->
<script>
    $('.call-btn').on('click',function(){

        var phone = $(this).attr('data-phone');
        var refer_no = $(this).attr('data-referno');
        var agentName = $(this).attr('data-agentName');
        $('.phone').empty();
        $('.phone').append(phone);
        $('.refer_no').empty();
        $('.refer_no').append(refer_no);
        $('.agentName').empty();
        $('.agentName').append(agentName);

    })
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>

<script>
    var agetRefno;
    var agetName;
    var agetEmail; 
    $('.agentMail').on('click', function(){

         agetRefno = $(this).attr('data-referno');
         agetName = $(this).attr('data-agentName');
         agetEmail = $(this).attr('data-agentEmail');

        console.log(agetRefno);
        console.log(agetName);
        console.log(agetEmail);

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
</script>