@extends ('layouts.layout')


@section ('content')

	
		
		<!-- ======================= Start Banner ===================== -->
		<div class="main-banner" style="background-image:url(assets/img/banner-1.jpg);">
			<div class="container">
				<div class="col-md-12">
				
					<div class="caption text-center cl-white">
						<h2>Discover Your Next Farm Adventure</h2>
						<p>Expolore top rated Farm tours around Tanzania</p>
					</div>
					
					<form action="{{url('/findFarm')}}" method="POST">
						<fieldset class="home-form-1">
						
							<div class="col-md-3 col-sm-3 padd-0">
								<input type="text" name="location" class="form-control br-1" placeholder="City, Tanzania">
							</div>
							
							<div class="col-md-3 col-sm-3 padd-0">
								<input type="date" name="book-date" class="form-control br-1" value="When...">
							</div>
								
							<div class="col-md-2 col-sm-2 padd-0">
								<div class="sl-box">
									<!-- <select class="wide form-control br-1">
										<option data-display="Adults">Adults</option>
										<option value="1">01</option>
										<option value="2">02</option>
										<option value="3">03</option>
										<option value="4">04</option>
									</select> -->
									<input type="text" name="adults" class="form-control br-1" value="No of Adults">

								</div>
							</div>
								
							<div class="col-md-2 col-sm-2 padd-0">
								<div class="sl-box">
								<input type="text" name="children" class="form-control br-1" value="No Of Children">
								</div>
							</div>
							
								
							<div class="col-md-2 col-sm-2 padd-0">
								<button type="submit" class="btn theme-btn cl-white seub-btn">FIND FARM</button>
							</div>
								
						</fieldset>
					</form>
				</div>
			</div>
		</div>
		<!-- ======================= End Banner ===================== -->
		<div class="clearfix"></div>
		
		<!-- ====================== How It Work ================= -->
		<section class="how-it-works">
			<div class="container">
				
				<div class="row">
					<div class="col-md-12">
						<div class="heading">
							<span class="theme-cl">Working Process</span>
							<h1>How It Works?</h1>
						</div>
					</div>
				</div>
				
				<div class="row">
				
					<div class="col-md-4 col-sm-4">
						<div class="work-process">
							<div class="process-img">
								<img src="assets/img/tour-1.png" class="img-responsive" alt="" />
								<span class="process-num">01</span>
							</div>
							<h4>Choose a Destination & Guide Of your Farm of Choice </h4>
							<p>Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4">
						<div class="work-process">
							<div class="process-img">
								<img src="assets/img/tour-2.png" class="img-responsive" alt="" />
								<span class="process-num">02</span>
							</div>
							<h4>Choose your guide & Customize</h4>
							<p>Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4">
						<div class="work-process">
							<div class="process-img">
								<img src="assets/img/tour-3.png" class="img-responsive" alt="" />
								<span class="process-num">03</span>
							</div>
							<h4>Book Your Farm Guide Online</h4>
							<p>Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
						</div>
					</div>
					
				</div>
		
			</div>
		</section>
		<!-- ====================== How It Work ================= -->
		<div class="clearfix"></div>
		
		
		<!-- ====================== Popular Tour ================= -->
		<section class="gray-dot gray-bg">
			<div class="container">
				
				<div class="row">
					<div class="col-md-12">
						<div class="heading">
							<span class="theme-cl">Select Farm Tour</span>
							<h1>Latest Farm Tour</h1>
						</div>
					</div>
				</div>
				
				<div class="row">
					
					<div class="list-slider">
					   @foreach($farm_details as $farmDetail)
						<!-- Single Tour -->
						<div class="list-slide-box">
							<article class="tour-box style-1">
							
								<!-- Single Tour -->
								<div class="tour-box-image">
									<figure>
										<a href="/viewFarm/{{ $farmDetail->id }}">
											<img src="{{ $farmDetail->getFirstMediaUrl('farm_photos') }}" class="img-responsive listing-box-img" alt="" />
											<div class="list-overlay"></div>
										</a>
										<!-- <div class="entry-bookmark">                                   
											<a href="#"><i class="ti-bookmark"></i></a>
										</div> -->
										<!-- <div class="tour-time">
											<i class="ti ti-car"></i><span></span>
										</div> -->
										<h4 class="tour-place">
											<a href="tour-detail.html">{{ $farmDetail->location }}</a>
										</h4>
										<span class="featured-tour"><i class="fa fa-star"></i></span>
										<a href="#" class="list-like left"><i class="ti-heart"></i></a>
									</figure>
								</div>
								
								<div class="entry-meta">
									<div class="meta-item meta-author">
										<div class="coauthors">
											<span class="vcard author">
												<span class="fn">
													{{ $farm_image->where('id', $farmDetail->id)->first()->getFirstMediaUrl() }}
													<a href="#"><img alt="" src="{{ $farm_image->where('id', $farmDetail->id)->first()->getFirstMediaUrl() }}" class="avatar avatar-24" height="24" width="24">{{ $farm_tourGuides->where('id', $farmDetail->userFarms()->pluck('user_id'))->get('name') }}</a>
												</span>
											</span>
										</div>
									</div>
									<div class="meta-item meta-comment fl-right">
										<i class="ti-comment-alt"></i><span>{{ $farmDetail->review->count() }}</span>
									</div>
									<div class="meta-item meta-rating fl-right">
										@for ($i = 0; $i <= $farmDetail->review()->get('rating')->first(); $i++)
										<i class="fa fa-star"></i>
										@endfor
									</div>
								</div>

								<div class="inner-box">
									<div class="box-inner-ellipsis">
										<h4 class="entry-title">
											<a href="{{ url('/viewFarm/$farmDetail->id') }}">Tanzania</a>
										</h4>
										<div class="price-box">
											<div class="tour-price fl-right">
												<i class="ti ti-user"></i><span class="theme-cl f-bold">{{ $farmDetail->price }}</span>
											</div>
										</div>
									</div>
								</div>
			
							</article>
						</div>
						@endforeach
						</div>
					</div>
		
			</div>
		</section>
		<!-- ====================== Popular Tour ================= -->
		<div class="clearfix"></div>
		
		
		<!-- ====================== Popular Guide ================= -->
		<section class="tour-guide">
			<div class="container">
				
				<div class="row">
					<div class="col-md-12">
						<div class="heading">
							<span class="theme-cl">Popular Farm Guide</span>
							<h1>Dedicated Farm Guide</h1>
						</div>
					</div>
				</div>
				
				<div class="row">
				
					@foreach($farm_tourGuides as $tourGuide)
					<!-- Single Guide -->
					<div class="col-md-4">
						<div class="guides-container">
						
							<div class="guides-box">
								<div class="guides-img-box">
									<img src="{{ $tourGuide->getFirstMediaUrl('userImage') }}" class="img-responsive" alt="" />
								</div>
								<div class="guider-detail">
									<h4>{{$tourGuide->pluck('name')[0]}}</h4>
									<h5 class="theme-cl font-bold">Tsh /Hour</h5>
								</div>
							</div>
						
						</div>
					</div>
					@endforeach
				
					
				</div>
		
			</div>
		</section>
		<!-- ====================== Popular Guide ================= -->		
		<div class="clearfix"></div>
		
{{-- 		
		<!-- ============== Before Footer ====================== -->
		<section class="before-footer bt-1 bb-1">
			<div class="container-fluid padd-0 full-width">
			
				<div class=" col-md-2 col-sm-2 br-1 mbb-1">
					<div class="data-flex">
						<h4>Contact Us!</h4>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-3 br-1 mbb-1">
					<div class="data-flex text-center">
					53 Boulevard Victor Hugo 44200 Nantes, France
					</div>
				</div>
				
				<div class="col-md-3 col-sm-3 br-1 mbb-1">
					<div class="data-flex text-center">
						<span class="d-block mrg-bot-0">06 52 52 20 30</span>
						<a href="#" class="theme-cl"><strong>hello@gmail.com</strong></a>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-4 padd-0">
					<div class="data-flex padd-0">
						<ul class="social-share">
							<li><a href="#"><i class="fa fa-facebook theme-cl"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus theme-cl"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter theme-cl"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin theme-cl"></i></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</section>
		<!-- =================== Before Footer ====================== -->
			
		<!-- ================= footer start ========================= -->
		<footer class="footer dark-bg">
			<div class="container">
				
				<!-- Row Start -->
				<div class="row">
				
					<div class="col-md-8 col-sm-8">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<h4>Featured Destinations</h4>
								<ul>
									<li><a href="destination-grid.html">Destination Grid</a></li>
									<li><a href="destination-list.html">Destination List</a></li>
									<li><a href="destination-grid-sidebar.html">Destination Grid Sidebar</a></li>
									<li><a href="destination-list-sidebar.html">Destination List Sidebar</a></li>
									<li><a href="destination-detail.html">Destination Detail</a></li>
									<li><a href="restaurant-grid.html">Restaurant Grid</a></li>
								</ul>
							</div>
							<div class="col-md-4 col-sm-4">
								<h4>Featured Tours</h4>
								<ul>
									<li><a href="tour-grid.html">Tour Grid</a></li>
									<li><a href="tour-list.html">Tour List</a></li>
									<li><a href="tour-grid-sidebar.html">Tour Grid Sidebar</a></li>
									<li><a href="tour-list-sidebar.html">tour List Sidebar</a></li>
									<li><a href="tour-detail.html">Tour Detail</a></li>
									<li><a href="http://themezhub.com/">Restaurant Grid</a></li>
								</ul>
							</div>
							<div class="col-md-4 col-sm-4">
								<h4>Featured Hotels</h4>
								<ul>
									<li><a href="hotel-grid.html">Hotel Grid</a></li>
									<li><a href="hotel-list.html">Hotel List</a></li>
									<li><a href="hotel-grid-sidebar.html">Hotel Grid Sidebar</a></li>
									<li><a href="hotel-list-sidebar.html">Hotel List Sidebar</a></li>
									<li><a href="hotel-detail.html">Hotel Detail</a></li>
									<li><a href="restaurant-detail.html">Restaurant Detail</a></li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4">
						<h4>Subscribe Now</h4>
						<!-- Newsletter -->
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Enter Email">
							<span class="input-group-btn">
								<button type="button" class="btn btn-default"><i class="fa fa-location-arrow font-20"></i></button>
							</span>
						</div>
						
						<!-- Social Box -->
						<div class="f-social-box">
							<ul>
								<li><a href="#"><i class="fa fa-facebook facebook-cl"></i></a></li>
								<li><a href="#"><i class="fa fa-google google-plus-cl"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter twitter-cl"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest pinterest-cl"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram instagram-cl"></i></a></li>
							</ul>
						</div>
						
						<!-- App Links -->
						<div class="f-app-box">
							<ul>
								<li><a href="#"><i class="fa fa-apple"></i>App Store</a></li>
								<li><a href="#"><i class="fa fa-android"></i>Play Store</a></li>
							</ul>
						</div>
						
					</div>
					
				</div>
				
				<!-- Row Start -->
				<div class="row">
					<div class="col-md-12">
						<div class="copyright text-center">
							<p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
						</div>
					</div>
				</div>
				
			</div>
		</footer>
		
		<!-- Sign Up Window Code -->
		<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content" id="myModalLabel1">
					<div class="modal-body">
						<div class="text-center"><img src="assets/img/logo.png" class="img-responsive" alt=""></div>
						
						<!-- Nav tabs -->
						<ul class="nav nav-tabs nav-advance theme-bg" role="tablist">
							<li class="nav-item active">
								<a class="nav-link" data-toggle="tab" href="#employer" role="tab">
								<i class="ti-user"></i> Employer</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#candidate" role="tab">
								<i class="ti-user"></i> Candidate</a>
							</li>
						</ul>
						<!-- Nav tabs -->
							
						<!-- Tab panels -->
						<div class="tab-content">
						
							<!-- Employer Panel 1-->
							<div class="tab-pane fade in show active" id="employer" role="tabpanel">
								<form>
									
									<div class="form-group">
										<label>User Name</label>
										<input type="text" class="form-control" placeholder="User Name">
									</div>
									
									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control" placeholder="*********">
									</div>
									
									<div class="form-group">
										<span class="custom-checkbox">
											<input type="checkbox" id="4">
											<label for="4"></label>Remember me
										</span>
										<a href="#" title="Forget" class="fl-right">Forgot Password?</a>
									</div>
									<div class="form-group text-center">
										<button type="button" class="btn theme-btn full-width btn-m">LogIn </button>
									</div>
									
								</form>
								
								<div class="log-option"><span>OR</span></div>
								
								<div class="row mrg-bot-20">
									<div class="col-md-6">
										<a href="#" title="" class="fb-log-btn log-btn"><i class="fa fa-facebook"></i>Sign In With Facebook</a>
									</div>
									<div class="col-md-6">
										<a href="#" title="" class="gplus-log-btn log-btn"><i class="fa fa-google-plus"></i>Sign In With Google+</a>
									</div>
								</div>
					
							</div>
							<!--/.Panel 1-->
							
							<!-- Candidate Panel 2-->
							<div class="tab-pane fade" id="candidate" role="tabpanel">
								<form>
									
									<div class="form-group">
										<label>User Name</label>
										<input type="text" class="form-control" placeholder="User Name">
									</div>
									
									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control" placeholder="*********">
									</div>
									
									<div class="form-group">
										<span class="custom-checkbox">
											<input type="checkbox" id="4">
											<label for="4"></label>Remember me
										</span>
										<a href="#" title="Forget" class="fl-right">Forgot Password?</a>
									</div>
									<div class="form-group text-center">
										<button type="button" class="btn theme-btn full-width btn-m">LogIn </button>
									</div>
									
								</form>
								
								<div class="log-option"><span>OR</span></div>
								
								<div class="row mrg-bot-20">
									<div class="col-md-6">
										<a href="#" title="" class="fb-log-btn log-btn"><i class="fa fa-facebook"></i>Sign In With Facebook</a>
									</div>
									<div class="col-md-6">
										<a href="#" title="" class="gplus-log-btn log-btn"><i class="fa fa-google-plus"></i>Sign In With Google+</a>
									</div>
								</div>
								
							</div>
							<!--/.Panel 2-->
							
						</div>
						<!-- Tab panels -->
					</div>
				</div>
			</div>
		</div>   
		<!-- End Sign Up Window -->
		<!-- Switcher -->
		<button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin theme-cl fa fa-cog" aria-hidden="true"></i></button>
		<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
		  <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large theme-bg">Close &times;</button>
		   <ul id="styleOptions" title="switch styling">
				<li>
					<a href="javascript: void(0)" class="cl-box cl-default" data-theme="skins/default"></a>
				</li>
				<li>
					<a href="javascript: void(0)" class="cl-box cl-red" data-theme="skins/red"></a>
				</li>
				<li>
					<a href="javascript: void(0)" class="cl-box cl-green" data-theme="skins/green"></a>
				</li>
				<li>
					<a href="javascript: void(0)" class="cl-box cl-blue" data-theme="skins/blue"></a>
				</li>
				<li>
					<a href="javascript: void(0)" class="cl-box cl-pink" data-theme="skins/pink"></a>
				</li>
				<li>
					<a href="javascript: void(0)" class="cl-box cl-purple" data-theme="skins/purple"></a>
				</li>
			</ul>
		</div>
		<!-- /Switcher --> --}}

	
		

@endsection 

