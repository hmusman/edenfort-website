<!-- ====== FOOTER ====== -->
	<footer id="footer">
		<!-- Copyright -->
				<a class="go-top"><i class="fa fa-angle-up"></i></a>
		<div class="copyright">
			<div class="container clearfix">
				<div class="row">
					<div class="col-md-6">
						<p>Copyright &copy; 2019 - All Rights Reserved By Eden Fort Home Real Estate</p>
					</div>
					
					<div class="col-md-6">
						<ul>
							<li><a href="public/edenfortDocs/assets/sitemap.xml" target="_blank" title="SiteMap">SiteMap</a></li>
							<li><a href="#" title="">Terms & Policy</a></li>
							<li><a href="{{url('aboutUs')}}" title="About">About</a></li>
							<li><a href="{{url('contactUs')}}" title="Contact Us">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="public/edenfortDocs/assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="public/edenfortDocs/assets/packeges/magicsuggest/magicsuggest-min.js"></script>
	<!-- <script type="text/javascript" src="assets/packeges/magicsuggest/magicsuggest-min.js"></script> -->
	<script type="text/javascript" src="public/edenfortDocs/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="public/edenfortDocs/assets/js/slick.min.js"></script>
	<script type="text/javascript"> var base_url = 'index.html'; var site_url = 'index.html';</script>
	<script type="text/javascript" src="public/edenfortDocs/assets/js/apps.min.js"></script>
	<script src="{{url('public/jQuery-autoComplete-master/jquery.auto-complete.js')}}"></script>
		<script async defer	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0DaKGlV-AAL09UAREeyUD_DOgEEyLwnU&amp;callback=initMap"></script>

		<!-- Your share button code -->
	<script>
		var latitude = '25.05045775';
	var longitude = '55.21278994';

		function initMap() {
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 16,
				scrollwheel: false,
				//center: new google.maps.LatLng(25.181195, 55.262857),
				center: new google.maps.LatLng(latitude, longitude),
			});

			var iconBase = '../assets/images/index.html';
			var icons = {
				property: {
					icon: iconBase + 'icon_marker.png'
				},
			};

			function addMarker(feature) {
				var marker = new google.maps.Marker({
					position: feature.position,
					icon: icons[feature.type].icon,
					map: map
				});
			}

			var features = [
				{
				
					position: new google.maps.LatLng(latitude, longitude),
					type: 'property'
				}
			];

			for (var i = 0, feature; feature = features[i]; i++) {
				addMarker(feature);
			}
		}
	</script>
	<script type="text/javascript">
		function toggle_switch (argument) {

			var checkval = $('input[name="switch"]:checked').val();
			if(checkval == 1)
			{
				window.location.href = 'companies';
			}else{
				window.location.href = 'agents';
			}
		}
	</script>
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
<script type="text/javascript">
	$(document).on('click', '.more-toggle', function(event) {
		event.preventDefault();
		if($(this).hasClass('more'))
		{
			$('#extra_search').slideDown();

			$(this).removeClass('more');
			$(this).addClass('less');
			$(this).html('<i class="fa fa-angle-up fa-fw"></i>Advance');
		}else{
			$('#extra_search').slideUp();
			$(this).removeClass('less');
			$(this).addClass('more');
			$(this).html('<i class="fa fa-angle-down fa-fw"></i>Advance');
		}
	});				
	$(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#grid').removeClass('btn-success'); $(this).addClass('btn-success');$('#products .item').removeClass('grid-group-item');$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#list').removeClass('btn-success'); $(this).addClass('btn-success');$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
    
});
	$( window ).resize(function() {
  var scrn_width =  $( window ).width();
  if(scrn_width < '767')
  {
  	$('#products .item').addClass('list-group-item');
  	$('#products .item').removeClass('grid-group-item');
  }else if($('#grid').hasClass('btn-success')){
  	$('#products .item').removeClass('list-group-item');
	$('#products .item').addClass('grid-group-item');
  }
});
	$(document).ready(function() {
	$(window).on("scroll",function(){
		var sitesearch2 = $('#search_bar');
		if($(this).scrollTop()>105)
			{
				sitesearch2.addClass("search-fix");
			}else {
				sitesearch2.removeClass("search-fix");
			}
	});	
	});

</script>
</body>

<!-- Mirrored from www.edenforthomes.com/agents by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Mar 2019 08:08:26 GMT -->
</html>
