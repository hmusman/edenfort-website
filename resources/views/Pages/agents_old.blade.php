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

	<!-- ====== MAIN SEARCH WITH PROPERTY BACKGROUND ====== -->
<section  class="page-section" style="background-image: url(public/edenfortDocs/assets/images/main_search_bg.jpg); background-position: center center; background-size: cover; padding: 50px 0px;">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<!-- Tabmenu Container / Default Bootstrap Structure -->
				<div class="switch6" style="border:1px solid #ffffff; margin-bottom: 30px">
					<label class="switch6-light" >
							<input name="switch"  onclick="toggle_switch()" type="checkbox" value="1">
							<span>
								<span>Agents</span>
								<span>Companies</span>
							</span>
							<a class="btn btn-success"></a>
					</label>
				</div>
				<div class="search-tabmenu">
					
					<!-- Tabmenu Body / Content -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active">
							<form action="{{route('agentFilter')}}" method="GET">
	                        						
   							<div class="form-body" style="padding-bottom:10px;">
										<div class="row">
										<div class="col-md-9 col-sm-9 form-group" style="">
																					
											<input type="text" class=" form-control" value=""  name="name" placeholder="Search Agent">
										</div>
										<div class="col-md-3 col-sm-3 form-group hidden-xs" style="">
											<button class="btn btn-success pull-right btn-submit" type="submit" name="Filter" style="height:40px;"><i class="fa fa-search"></i> Search</button>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-sm-6 form-group">
																						<select name="language" class="form-control" data-translate-empty-option="Languages">
												<option value="" class="empty" data-gtm-label="Languages">Languages</option>
												<option value="afrikaans" >Afrikaans</option>
												<option value="arabic" >Arabic</option>
												<option value="azerbaijani" >Azerbaijani</option>
												<option value="bahasa Melayu" >Bahasa Melayu</option>
												<option value="bengali" >Bengali</option>
												<option value="bulgarian" >Bulgarian</option>
												<option value="cantonese" >Cantonese</option>
												<option value="croatian" >Croatian</option>
												<option value="danish" >Danish</option>
												<option value="dutch" >Dutch</option>
												<option value="english" >English</option>
												<option value="french" >French</option>
												<option value="german" >German</option>
												<option value="greek" >Greek</option>
												<option value="gujarati" >Gujarati</option>
												<option value="hindi" >Hindi</option>
												<option value="hungarian" >Hungarian</option>
												<option value="italian" >Italian</option>
												<option value="kazakh" >Kazakh</option>
												<option value="kyrgyz" >Kyrgyz</option>
												<option value="malayalam" >Malayalam</option>
												<option value="mandarin" >Mandarin</option>
												<option value="memon" >Memon</option>
												<option value="norwegian" >Norwegian</option>
												<option value="persian/farsi" >Persian/Farsi</option>
												<option value="polish" >Polish</option>
												<option value="portuguese" >Portuguese</option>
												<option value="punjabi" >Punjabi</option>
												<option value="romanian" >Romanian</option>
												<option value="russian" >Russian</option>
												<option value="serbian" >Serbian</option>
												<option value="spanish" >Spanish</option>
												<option value="swedish" >Swedish</option>
												<option value="tagalog" >Tagalog</option>
												<option value="tamil" >Tamil</option>
												<option value="turkish" >Turkish</option>
												<option value="ukranian" >Ukranian</option>
												<option value="urdu" >Urdu</option>
												<option value="uzbek" >Uzbek</option>
											</select>
										</div>
										<div class="col-md-6 col-sm-6 form-group">
																						<select name="nationality" class="form-control">
												<option value="">Nationality</option>
												<option value="afghanistan" >Afghanistan</option>
												<option value="albania" >Albania</option>
												<option value="algeria" >Algeria</option>
												<option value="argentina" >Argentina</option>
												<option value="armenia" >Armenia</option>
												<option value="australia" >Australia</option>
												<option value="austria" >Austria</option>
												<option value="azerbaijan" >Azerbaijan</option>
												<option value="bangladesh" >Bangladesh</option>
												<option value="belarus" >Belarus</option>
												<option value="belgium" >Belgium</option>
												<option value="brazil" >Brazil</option>
												<option value="bulgaria" >Bulgaria</option>
												<option value="cameroon" >Cameroon</option>
												<option value="canada" >Canada</option>
												<option value="china" >China</option>
												<option value="colombia" >Colombia</option>
												<option value="croatia" >Croatia</option>
												<option value="cuba" >Cuba</option>
												<option value="czech republic" >Czech Republic</option>
												<option value="denmark" >Denmark</option>
												<option value="egypt" >Egypt</option>
												<option value="estonia" >Estonia</option>
												<option value="ethiopia" >Ethiopia</option>
												<option value="finland" >Finland</option>
												<option value="france" >France</option>
												<option value="georgia" >Georgia</option>
												<option value="germany" >Germany</option>
												<option value="ghana" >Ghana</option>
												<option value="hungary" >Hungary</option>
												<option value="india" >India</option>
												<option value="iran" >Iran</option>
												<option value="iraq" >Iraq</option>
												<option value="ireland" >Ireland</option>
												<option value="italy" >Italy</option>
												<option value="jordan" >Jordan</option>
												<option value="kazakhstan" >Kazakhstan</option>
												<option value="kenya" >Kenya</option>
												<option value="south korea" >South Korea</option>
												<option value="kyrgyzstan" >Kyrgyzstan</option>
												<option value="latvia" >Latvia</option>
												<option value="lebanon" >Lebanon</option>
												<option value="lithuania" >Lithuania</option>
												<option value="macedonia, republic of" >Macedonia, Republic of</option>
												<option value="mexico" >Mexico</option>
												<option value="moldova" >Moldova</option>
												<option value="montenegro" >Montenegro</option>
												<option value="morocco" >Morocco</option>
												<option value="nepal" >Nepal</option>
												<option value="netherlands" >Netherlands</option>
												<option value="new zealand" >New Zealand</option>
												<option value="nigeria" >Nigeria</option>
												<option value="norway" >Norway</option>
												<option value="oman" >Oman</option>
												<option value="pakistan" >Pakistan</option>
												<option value="palestine" >Palestine</option>
												<option value="philippines" >Philippines</option>
												<option value="poland" >Poland</option>
												<option value="portugal" >Portugal</option>
												<option value="romania" >Romania</option>
												<option value="russian federation" >Russian Federation</option>
												<option value="saudi arabia" >Saudi Arabia</option>
												<option value="senegal" >Senegal</option>
												<option value="serbia" >Serbia</option>
												<option value="singapore" >Singapore</option>
												<option value="slovakia" >Slovakia</option>
												<option value="slovenia" >Slovenia</option>
												<option value="south africa" >South Africa</option>
												<option value="spain" >Spain</option>
												<option value="sri lanka" >Sri Lanka</option>
												<option value="sweden" >Sweden</option>
												<option value="switzerland" >Switzerland</option>
												<option value="syria" >Syria</option>
												<option value="taiwan, republic of china" >Taiwan, Republic of China</option>
												<option value="tajikistan" >Tajikistan</option>
												<option value="tanzania" >Tanzania</option>
												<option value="thailand" >Thailand</option>
												<option value="tunisia" >Tunisia</option>
												<option value="turkey" >Turkey</option>
												<option value="turkmenistan" >Turkmenistan</option>
												<option value="ukraine" >Ukraine</option>
												<option value="united arab emirates" >United Arab Emirates</option>
												<option value="united kingdom" >United Kingdom</option>
												<option value="united states of america" >United States of America</option>
												<option value="uruguay" >Uruguay</option>
												<option value="uzbekistan" >Uzbekistan</option>
												<option value="vietnam" >Vietnam</option>
												<option value="yemen" >Yemen</option>
												<option value="zimbabwe" >Zimbabwe</option>
											</select>
										</div>
										<div class="col-xs-12 form-group hidden-lg hidden-md hidden-sm">
											<button class="btn btn-success pull-right btn-submit" type="submit"  style="height:40px;"><i class="fa fa-search"></i> Search</button>
										</div>
									</div>
								
								</div>
								<!-- Property for Sale Submit Button -->
							</form>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
		
	</div>
</section>


<!-- ====== OUR AGENT SECTION ====== -->
<section class="page-section" style="padding-top: 10px">
	<div class="container">
		<div style="padding: 10px 0; border-bottom: 1px solid #ccc; margin-bottom: 30px">
			<div class="row">
	        	<div class="col-md-8">
	        		<h4 class="ucfirst">@if(isset($filtered))
                @if(count($filtered)>0) {{count($filtered)}}  results found @endif @endif</h4>
	        	</div>
	        	<div class="col-md-4">
	        		<section class="main hidden">
						<div class="wrapper-demo">
							<strong>Sort By:</strong>
							<div id="dd" class="wrapper-dropdown-3" tabindex="1">
								<span>Newest</span>
								<ul class="dropdown">
									<li><a href="search.html">Newest</a></li>
									<li><a href="search.html">Popular</a></li>
									<li><a href="search.html">Highest Price</a></li>
									<li><a href="search.html">Lowest Price</a></li>
									<li><a href="search.html">Beds (least)</a></li>
									<li><a href="search.html">Beds (Most)</a></li>
								</ul>
							</div>
						</div>
					</section>
		    			
	        		
	        	</div>

	        </div>
        </div>
		<div class="tile-block-area">
						
							<!-- start of filtered results-->
                @if(isset($filtered))
                @if(count($filtered)>0)
                @foreach($filtered->sortByDesc('updated_at') as $filter)
									<div class="tile-block-container">
						<a href="{{url('agent'.$filter->id)}}" class="tile-block gtm-click gtm-impression-sent" data-id="119313" data-type="agent" data-properties="{&quot;position&quot;:&quot;1&quot;,&quot;listingStatus&quot;:&quot;Standard&quot;,&quot;broker&quot;:{&quot;id&quot;:&quot;880&quot;}}">
							<div class="tile-block-content">
								<div class="img-container placeholder-agent-lg">
																		<img class="main-img" alt="{{$filter->agentName}} " src="public/edenfortDocs/assets/profile_img/231e3480c31a0f82d79a93365adb2302.png"> 
									<div class="broker-logo-sm placeholder-broker-tile">
																				<img class="img-responsive" alt="Eden Fort Real Estate" src="public/edenfortDocs/assets/images/logo1.png" style="height:43px;" >
									</div>
								</div> 
								<div class="details-area">
									<div class="ranking-tag hidden">Standard</div> 
									<div class="name-section">
										<div class="name">{{$filter->agentName}} </div> 
										<div class="position">Agent</div>
									</div> 
									<div class="user-details">
										<div class="detail">
											<div class="user-nationality">
												<div class="label1">Nationality:</div> 
												<div class="label-content">Pakistan</div>
											</div> 
											<div class="user-language">
												<div class="label1">Languages:</div> 
												<div class="label-content">Urdu, English</div>
											</div> 
											
										</div>
									</div>
								</div> 
								<div class="property-numbers">
									<div class="numbers-rent">
										<div class="number">5</div> 
										<div class="title">for rent</div>
									</div> 
									<div class="numbers-buy">
										<div class="number">0</div> 
										<div class="title">for sale</div>
									</div> 
									<!-- <div class="numbers-commercial">
										<div class="number">5</div> 
										<div class="title">Commercial</div>
									</div> --> 
								</div>
							</div>
						</a>
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
</section>

@endsection