<!DOCTYPE html>
<html lang="en"> 


<!-- Mirrored from www.edenforthomes.com/agents by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Mar 2019 08:07:50 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Eden Fort Real Estate @yield('title')</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<link rel="shortcut icon" type='image/x-icon' href="public/edenfortDocs/assets/images/fav.jpg">
	<meta name="viewport" content="initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="public/edenfortDocs/assets/css/style.min.css">
	<link rel="stylesheet" type="text/css" href="public/edenfortDocs/assets/css/bootstrap-3.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/edenfortDocs/assets/packeges/magicsuggest/magicsuggest-min.css">
	<link rel="stylesheet" type="text/css" href="public/edenfortDocs/assets/css/customed986.css?1524033873">
	<link rel="stylesheet" href="{{url('public/jQuery-autoComplete-master/jquery.auto-complete.css')}}">
	
</head>
<body>
	
	<!-- ====== BEGIN HEADER ====== -->
	<div id="callModal" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="myCallModalLabel">
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
		        			<li><label class="left">Phone</label><a href="tel:+971-12345678" class="sec_phone">+971-12345678</a></li>
		        			<li><label class="left">Mobile</label><a href="tel:+971-55-12345678" class="phone">+971-55-12345678</a></li>
		        			<li><label class="left">Refer#</label><span class="right refer_no ucfirst">Reference not found</span></li>
		        			<li><label class="left">Agent</label><span class="right agentName ucfirst">Jon Deo - Core Real Estate</span></li>
		        			<li class="ref-info">Please quote property reference<span class="bold block refer_no">Core -  317-Ha-R-2942</span>when calling us.</li>
		        		</ul>
					</div>
		        </div>
		       
			</div>
      
    </div>

  </div>
</div>
<div id="emailModal" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="myEmailModalLabel">
  <div class="modal-dialog contact_modals">

    <!-- Modal content-->
    <div class="modal-content"  style="border-radius: 0px;border-top: 4px solid #0071bc;">
      	<div>
      		<button type="button" class="close" data-dismiss="modal" style="opacity: 1; font-size: 30px;  color: #F7931E; padding: 3px 6px;">&times;</button>
      	</div>
	      	<div class="modal-body" style="margin-top:30px; padding: 0 30px;">
		        <div class="row">
		        	<input type="hidden" id="prop" value="">
		        	<input type="hidden" id="refer_no" value="">
		        	<div class="col-md-12 text-center">
		        		<div class="alert alert-success text-center lead_success" style="display:none;">
				            Email Sended Successfully!
				        </div>
				        <div class="alert alert-danger text-center lead_fail" style="display:none;">
				            Sorry! Please try again.
				        </div>
				        <div class="alert alert-danger text-center lead_dublicate" style="display:none;">
				            <strong>Alert!</strong> Email already sended to agent for this property.
				        </div>
		        		<h2>Contact Agent</h2>
		        		<p class="company_name ucfirst">Core Real Estate</p>
		        		<p class="refer_no">Core - 317-Ha-R-2942</p>
		        		<p class="agentEmail" style="display:none;">Email</p>
		        	</div>

		        	<div class="col-md-12">
		        		<div class="form-group">
		        			<input type="text" name="name" id="name" placeholder="Name" class="form-control" />
		        		</div>
		        		<div class="form-group">
		        			<input type="Email" name="email" id="email" placeholder="Email" class="form-control" />
		        		</div>
		        		<div class="form-group">
		        			<input type="tel" name="phone" id="urphone" class="form-control" placeholder="Phone*"  >
		        		</div>
		        		<div class="form-group">
		        			<select class="form-control" name="type" id="type" >
		        				<option value="tenant">Tenant</option>
		        				<option value="agent">Agent</option>
		        				<option value="Other">Other</option>
		        			</select>
		        		</div>
		        		<div class="form-group">
		        			<textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
		        		</div>
		        		<input type="hidden" name="agentEmail" id="agentEmail"  placeholder="Email" class="form-control agentEmail" />
		        		<div class="form-group">
		        			<input type="checkbox" id="robot" name="robot">
		        			<label class="chkbox_label">I am not a robot &nbsp;<span class="robot-error text-danger"></span></label>
		        		</div>
		        		<div class="form-group">
		        			<button class="btn btn-success btn-submit" id="send" > <i class="fa fa-refresh fa-spin" style="display:none;"></i>&nbsp; Send Email</button>
		        		</div>
		        		<div class="form-group">
		        			<input type="checkbox" name="sendnotification" checked="checked" >
		        			<label class="chkbox_label">Keep me Informed about similar properties</label>
		        		</div>
		        		<div class="form-group text-center">
		        			<p>By sending an enquiry, you agree to our Terms of use.</p>
		        		</div>

		        	</div>
		        </div>
		       
			</div>
      
    </div>

  </div>
</div>
<header id="header2">


		<!-- Main Menu Header -->
		<nav class="navbar">
			<div class="container">
				<!-- Navbar Brand -->
				<div class="navbar-header">
					<a href="{{url('/')}}" id="navbar-brand" class="navbar-brand"><img src="public/edenfortDocs/assets/images/smallLogo.png" alt="Eden Fort Real Estate"></a>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style=" z-index:2;">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="login-box">
					<ul>
												<li class="left link-l-dd login-dd m0 user_top_extras">
					        <!-- <a href="https://www.bayut.com/login.html" class="login" title="Login">Login</a>-->
			                     <a href="{{url('submitPropertyForm')}}"> <button style="border: 1px solid #136eb5;color: #136eb5;margin-top: 16px; padding: 4px 15px; background-color: Transparent; !important; ">Add Property</button></
			                  <a href="{{url('http://crm.edenfort.ae')}}"> <button style="border: 1px solid #136eb5;color: #136eb5;margin-top: 16px; padding: 4px 15px; background-color: Transparent; !important; ">Login</button></a>
				               
				           <!--  <div class="login" style="">Login</div>-->
							<div class="right dropdown dd-hide form" style="display: none;">
								<div class="login-section">
																			<a href="#" onclick="window.open('https://www.facebook.com/v2.6/dialog/oauth?client_id=113307665950447&amp;state=e6eb8d595c3bb0a652025a516227ad62&amp;response_type=code&amp;sdk=php-sdk-5.0.0&amp;redirect_uri=http%3A%2F%2Fwww.edenforthomes.com%2Fuser_authentication&amp;scope=email', 'facebook', 'width=640,height=480');"><button class="primary-btn fb" id="fb-login-button">Sign in with Facebook</button></a>
																		
									<form method="post" class="pos-rel" id="login-frm" novalidate="novalidate">
										<div class="ajax-loader dis-none"></div>
										<div id="login_msg" class="alert alert-danger text-center" style="padding:5px; margin:0; display:none;"></div>
										<div id="login_succesmsg" class="alert alert-success text-center" style="padding:5px; margin:0;display:none;"></div>
										<input id="email_add" name="email_add" placeholder="Email*" class="form-control" type="text">
										<input id="user_password" name="user_password" placeholder="Password*" class="form-control" type="password">
										
										<button type="submit" class="primary-btn loginbtn form-btn"><i class="fa fa-refresh fa-spin" style="display:none;"></i> Login</button>
										<input id="remember" type="checkbox">
										<label class="chkbox_label" for="remember">Remember Me</label>
										<div class="forgot right" id="forgot_pass">Forgot Password?</div>
										<div class="mt30 new">Become a free member</div>
									</form>
			                         <a class="ghost-btn" href="register.html" title="Become A Free Member" rel="">Register Now</a>
								</div>
								<div class="forget-section displayNone">
									<form method="post" id="forgot-frm">
										<div id="reset_msg" class="alert alert-danger text-center" style="padding:5px; margin:0; display:none;"></div>
										<div id="reset_succesmsg" class="alert alert-success text-center" style="padding:5px; margin:0;display:none;"></div>
										<p style="color:red; display:none" id="email_empty">Please enter correct email address</p>							
										<input id="user_email" name="user_email" placeholder="Email*" class="form-control" type="text" required>
										<button type="submit" data-role="popup" data-width="300" class="primary-btn forgotbtn" id="resetbtn"><i class="fa fa-refresh fa-spin" style="display:none;"></i> Submit</button>
										<div class="forgot right" id="go_login">Back to Login</div>
									</form>
								</div>
							</div>
							
			            </li>
			            					</ul>
				</div>
				<!-- Navbar Menu -->
				<nav id="navbar" class="navbar navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Residential</a>
				          <ul class="dropdown-menu">
				            <li><a href="{{url('menuFilter?propertyType=Residential&offering_type2=sale')}}">Buy</a></li>
				            <li><a href="{{url('menuFilter?propertyType=Residential&offering_type2=rent')}}">Rent</a></li>
<!--hidden input fields for menu click search-->
     @if(isset($_GET['type'])) <input type="hidden" name="type" value="{{@$_GET['type']}}"/> @endif
     @if(isset($_GET['category'])) <input type="hidden" name="category" value="{{@$_GET['category']}}"/> @endif

				           </ul>
				        </li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Commercial</a>
				          <ul class="dropdown-menu">
				           <li><a href="{{url('menuFilter?propertyType=Commercial&offering_type2=sale')}}">Buy</a></li>
				            <li><a href="{{url('menuFilter?propertyType=Commercial&offering_type2=rent')}}">Rent</a></li>
				           </ul>
				        </li>
						<!-- <li class="">
	                    	<a href="#">Buy</a>
                		</li>
                        <li class="">
                    		<a href="#">Rent</a>
                		</li>
                        <li class="">
                    		<a href="#">Commercial</a>
                		</li> -->
            			<li class="">
                    		<a href="{{url('agents')}}">Find agent</a>
                		</li>
            			<li class="">
                    		<a href="{{url('projects')}}">New projects</a>
                		</li>
					</ul>
					<!-- <ul class="nav navbar-nav navbar-right">
						<li class="">
	                    	<a href="#">Login</a>
                		</li>
                        
                        
					</ul> -->
				</nav>

			</div>
		</nav>
</header>