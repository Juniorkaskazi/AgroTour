@extends('layouts.layout')

@section('content')

		
		
		<!-- ======================= Start Page Title ===================== -->
		<div class="page-title image-title" style="background-image:url(assets/img/destination.jpg);">
			<div class="container">
				<div class="page-title-wrap">
				<h2>Destination Grid Sidebar</h2>
				<p><a href="#" class="theme-cl">Home</a> | <span>Destination Grid Sidebar</span></p>
				</div>
			</div>
		</div>
		<!-- ======================= End Page Title ===================== -->
		
		<!-- =========== Start All Hotel In Grid View =================== -->
		<section class="gray-bg">
			<div class="container">
				<div class="row">
					
					<!-- Filter Sidebar -->
					<div class="col-md-4 col-sm-12">
						
						<div class="tr-single-box">
							<div class="tr-single-header">
								<h4>Filter</h4>
								<span class="pull-right clickables" data-toggle="collapse" data-target="#filter"><i class="ti-align-left"></i></span>
							</div>
							<div id="filter" class="collapse in">
								
								<!-- Input Box Search -->
								<div class="tr-single-body">
									<div class="sidebar-input">
										<input type="text" class="form-control" placeholder="Type Keyword..">
									</div>
									<div class="sidebar-input">
										<input type="text" class="form-control" placeholder="Destination..">
									</div>
									<div class="sidebar-input">
										<input type="text" class="form-control" placeholder="Location..">
									</div>
								</div>
								
								<!-- Range Slider -->
								<div class="tr-inner-single-box">
									<div class="tr-single-header">
										<h4>Distance In Km.</h4>
									</div>
									<div class="tr-single-body">
										<form method="post">
											<div id="price-range"></div>
										</form>
									</div>
								</div>
								
								<!-- Distance -->
								<div class="tr-inner-single-box">
									<div class="tr-single-header">
										<h4>By Distance</h4>
										
									</div>
									<div class="tr-single-body">
										<ul class="side-list-check">
											<li>
												<span class="custom-checkbox">
													<input type="checkbox" id="144">
													<label for="144"></label>
												</span>
												Between 10Km To 100Km
												<span class="pull-right">102</span>
											</li>
											<li>
												<span class="custom-checkbox">
													<input type="checkbox" id="133">
													<label for="133"></label>
												</span>
												Between 100Km To 500Km
												<span class="pull-right">110</span>
											</li>
											<li>
												<span class="custom-checkbox">
													<input type="checkbox" id="122">
													<label for="122"></label>
												</span>
												Between 150Km To 700Km
												<span class="pull-right">56</span>
											</li>
											<li>
												<span class="custom-checkbox">
													<input type="checkbox" id="111">
													<label for="111"></label>
												</span>
												Between 700Km To 1000Km
												<span class="pull-right">18</span>
											</li>
											<li>
												<span class="custom-checkbox">
													<input type="checkbox" id="161">
													<label for="161"></label>
												</span>
												Between 10000Km To 50000Km
												<span class="pull-right">75</span>
											</li>
										</ul>
									</div>
								</div>
								
								<!-- Start Rating -->
								<div class="tr-inner-single-box">
									<div class="tr-single-header">
										<h4>Start Rating</h4>
										
									</div>
									<div class="tr-single-body">
										<ul class="side-list-check">
											<li>
												<span class="custom-checkbox">
													<input type="checkbox" id="11">
													<label for="11"></label>
												</span>
												<div class="search-rating">
													<i class="fa fa-star enable"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<span class="pull-right">102</span>
											</li>
											<li>
												<span class="custom-checkbox">
													<input type="checkbox" id="12">
													<label for="12"></label>
												</span>
												<div class="search-rating">
													<i class="fa fa-star enable"></i>
													<i class="fa fa-star enable"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<span class="pull-right">110</span>
											</li>
											<li>
												<span class="custom-checkbox">
													<input type="checkbox" id="13">
													<label for="13"></label>
												</span>
												<div class="search-rating">
													<i class="fa fa-star enable"></i>
													<i class="fa fa-star enable"></i>
													<i class="fa fa-star enable"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<span class="pull-right">56</span>
											</li>
											<li>
												<span class="custom-checkbox">
													<input type="checkbox" id="14">
													<label for="14"></label>
												</span>
												<div class="search-rating">
													<i class="fa fa-star enable"></i>
													<i class="fa fa-star enable"></i>
													<i class="fa fa-star enable"></i>
													<i class="fa fa-star enable"></i>
													<i class="fa fa-star"></i>
												</div>
												<span class="pull-right">18</span>
											</li>
											<li>
												<span class="custom-checkbox">
													<input type="checkbox" id="15">
													<label for="15"></label>
												</span>
												<div class="search-rating">
													<i class="fa fa-star enable"></i>
													<i class="fa fa-star enable"></i>
													<i class="fa fa-star enable"></i>
													<i class="fa fa-star enable"></i>
													<i class="fa fa-star enable"></i>
												</div>
												<span class="pull-right">75</span>
											</li>
										</ul>
									</div>
								</div>
								
								<!-- Tour Type -->
								<div class="tr-inner-single-box">
									<div class="tr-single-header">
										<h4>Tour Type</h4>
										
									</div>
									<div class="tr-single-body">
										<ul class="side-list-check">
											<li>
												<span class="custom-checkbox">
													<input type="checkbox" id="a">
													<label for="a"></label>
												</span>
												Food & Cooking Tours
												<span class="pull-right">36</span>
											</li>
											<li>
												<span class="custom-checkbox">
													<input type="checkbox" id="b">
													<label for="b"></label>
												</span>
												Sightseeing Tours
												<span class="pull-right">75</span>
											</li>
											<li>
												<span class="custom-checkbox">
													<input type="checkbox" id="c">
													<label for="c"></label>
												</span>
												Museums & Art
												<span class="pull-right">69</span>
											</li>
											<li>
												<span class="custom-checkbox">
													<input type="checkbox" id="d">
													<label for="d"></label>
												</span>
												Extraordinary Tours
												<span class="pull-right">20</span>
											</li>
											<li>
												<span class="custom-checkbox">
													<input type="checkbox" id="e">
													<label for="e"></label>
												</span>
												History & Architecture
												<span class="pull-right">45</span>
											</li>
											<li>
												<span class="custom-checkbox">
													<input type="checkbox" id="f">
													<label for="f"></label>
												</span>
												Trips out of town
												<span class="pull-right">45</span>
											</li>
										</ul>
									</div>
								</div>
								
								<!-- Animinities -->
								<div class="tr-inner-single-box">
									<div class="tr-single-header">
										<h4>Animinities</h4>
										
									</div>
									<div class="tr-single-body">
										<ul class="side-list-check">
											<li>
												<span class="custom-checkbox">
													<input type="checkbox" id="a1">
													<label for="a1"></label>
												</span>
												With guide
												<span class="pull-right">36</span>
											</li>
											<li>
												<span class="custom-checkbox">
													<input type="checkbox" id="b2">
													<label for="b2"></label>
												</span>
												Breakfast
												<span class="pull-right">75</span>
											</li>
											<li>
												<span class="custom-checkbox">
													<input type="checkbox" id="c3">
													<label for="c3"></label>
												</span>
												Musician
												<span class="pull-right">69</span>
											</li>
											<li>
												<span class="custom-checkbox">
													<input type="checkbox" id="d4">
													<label for="d4"></label>
												</span>
												Hot Water
												<span class="pull-right">20</span>
											</li>
											<li>
												<span class="custom-checkbox">
													<input type="checkbox" id="e5">
													<label for="e5"></label>
												</span>
												High Difinition TV
												<span class="pull-right">45</span>
											</li>
										</ul>
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
					
					<!-- All Item -->
					<div class="col-md-8 col-sm-12">
						
						<!-- Row -->
						<div class="row mrg-0">
							<div class="tr-single-box short-box">
								<div class="col-sm-3 hidden-xs align-self-center">
									<h4>Shorty By</h4>
								</div>
								
								<div class="col-sm-9 text-right">
								
									<div class="btn-group mr-lg-2">
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Short By
										</button>
										<div class="dropdown-menu pull-right animated flipInX">
											<a href="#">Accending</a>
											<a href="#">Decending</a>
											<a href="#">By Date</a>
										</div>
									</div>
									
									<div class="btn-group">
										 <a href="destination-grid-sidebar.html" class="btn btn-default tooltips">
											 <i class="ti-flix ti-layout-grid2"></i>
										 </a>
									</div>

									<div class="btn-group">
										 <a href="destination-list-sidebar.html" class="btn btn-default tooltips">
											 <i class="ti-flix ti-view-list-alt"></i>
										 </a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Row -->
						
						<!-- Row -->
						<div class="row">
							
							<!-- Single Destination -->
							<div class="col-md-6 col-sm-6">
								<article class="destination-box style-1">

									<div class="destination-box-image">
										<figure>
											<a href="destination-detail.html">
												<img src="assets/img/destination/des-1.jpg" class="img-responsive listing-box-img" alt="" />
												<div class="list-overlay"></div>
											</a>
											<div class="discount-flick">-12%</div>
											<h4 class="destination-place">
												<a href="destination-detail.html">Bali, Indonesia</a>
											</h4>
											<a href="#" class="list-like left"><i class="ti-heart"></i></a>
										</figure>
									</div>
									
									<div class="entry-meta">
										<div class="meta-item meta-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half"></i>
										</div>
										<div class="meta-item meta-comment fl-right">
											<span class="text-through">$2887</span><span class="real-price padd-l-10 font-bold">$2782</span>
										</div>
									</div>

									<div class="inner-box">
										<div class="box-inner-ellipsis">
											<h4 class="entry-location">
												<a href="destination-detail.html">New York, US</a>
											</h4>
											<div class="price-box">
												<div class="destination-price fl-right">
													<a href="#"><i class="theme-cl ti-arrow-right"></i></a>
												</div>
											</div>
										</div>
									</div>
									
								</article>
							</div>
							
							<!-- Single Destination -->
							<div class="col-md-6 col-sm-6">
								<article class="destination-box style-1">

									<div class="destination-box-image">
										<figure>
											<a href="destination-detail.html">
												<img src="assets/img/destination/des-2.jpg" class="img-responsive listing-box-img" alt="" />
												<div class="list-overlay"></div>
											</a>	
											<div class="discount-flick">-12%</div>
											<h4 class="destination-place">
												<a href="destination-detail.html">Grand Canyon National Park</a>
											</h4>
											<a href="#" class="list-like left"><i class="ti-heart"></i></a>
										</figure>
									</div>
									
									<div class="entry-meta">
										<div class="meta-item meta-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half"></i>
										</div>
										<div class="meta-item meta-comment fl-right">
											<span class="text-through">$2587</span><span class="real-price padd-l-10 font-bold">$1282</span>
										</div>
									</div>

									<div class="inner-box">
										<div class="box-inner-ellipsis">
											<h4 class="entry-location">
												<a href="destination-detail.html">Hong Kong</a>
											</h4>
											<div class="price-box">
												<div class="destination-price fl-right">
													<a href="#"><i class="theme-cl ti-arrow-right"></i></a>
												</div>
											</div>
										</div>
									</div>
									
								</article>
							</div>
							
							<!-- Single Destination -->
							<div class="col-md-6 col-sm-6">
								<article class="destination-box style-1">

									<div class="destination-box-image">
										<figure>
											<a href="destination-detail.html">
												<img src="assets/img/destination/des-3.jpg" class="img-responsive listing-box-img" alt="" />
												<div class="list-overlay"></div>
											</a>
											<div class="discount-flick">-12%</div>
											<h4 class="destination-place">
												<a href="destination-detail.html">Prague, Czech Republic</a>
											</h4>
											<a href="#" class="list-like left"><i class="ti-heart"></i></a>
										</figure>
									</div>
									
									<div class="entry-meta">
										<div class="meta-item meta-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half"></i>
										</div>
										<div class="meta-item meta-comment fl-right">
											<span class="text-through">$2569</span><span class="real-price padd-l-10 font-bold">$2547</span>
										</div>
									</div>

									<div class="inner-box">
										<div class="box-inner-ellipsis">
											<h4 class="entry-location">
												<a href="destination-detail.html">Netherlands</a>
											</h4>
											<div class="price-box">
												<div class="destination-price fl-right">
													<a href="#"><i class="theme-cl ti-arrow-right"></i></a>
												</div>
											</div>
										</div>
									</div>
									
								</article>
							</div>
							
							<!-- Single Destination -->
							<div class="col-md-6 col-sm-6">
								<article class="destination-box style-1">

									<div class="destination-box-image">
										<figure>
											<a href="destination-detail.html">
												<img src="assets/img/destination/des-4.jpg" class="img-responsive listing-box-img" alt="" />
												<div class="list-overlay"></div>
											</a>
											<div class="discount-flick">-12%</div>
											<h4 class="destination-place">
												<a href="destination-detail.html">Marrakech, Morroco</a>
											</h4>
											<a href="#" class="list-like left"><i class="ti-heart"></i></a>
										</figure>
									</div>
									
									<div class="entry-meta">
										<div class="meta-item meta-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half"></i>
										</div>
										<div class="meta-item meta-comment fl-right">
											<span class="text-through">$1856</span><span class="real-price padd-l-10 font-bold">$1750</span>
										</div>
									</div>

									<div class="inner-box">
										<div class="box-inner-ellipsis">
											<h4 class="entry-location">
												<a href="destination-detail.html">Saudi Arabia</a>
											</h4>
											<div class="price-box">
												<div class="destination-price fl-right">
													<a href="#"><i class="theme-cl ti-arrow-right"></i></a>
												</div>
											</div>
										</div>
									</div>
									
								</article>
							</div>
							
							<!-- Single Destination -->
							<div class="col-md-6 col-sm-6">
								<article class="destination-box style-1">

									<div class="destination-box-image">
										<figure>
											<a href="destination-detail.html">
												<img src="assets/img/destination/des-5.jpg" class="img-responsive listing-box-img" alt="" />
												<div class="list-overlay"></div>
											</a>
											<div class="discount-flick">-12%</div>
											<h4 class="destination-place">
												<a href="destination-detail.html">New York City, New York</a>
											</h4>
											<a href="#" class="list-like left"><i class="ti-heart"></i></a>
										</figure>
									</div>
									
									<div class="entry-meta">
										<div class="meta-item meta-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half"></i>
										</div>
										<div class="meta-item meta-comment fl-right">
											<span class="text-through">$4525</span><span class="real-price padd-l-10 font-bold">$4258</span>
										</div>
									</div>

									<div class="inner-box">
										<div class="box-inner-ellipsis">
											<h4 class="entry-location">
												<a href="destination-detail.html">Switzerland</a>
											</h4>
											<div class="price-box">
												<div class="destination-price fl-right">
													<a href="#"><i class="theme-cl ti-arrow-right"></i></a>
												</div>
											</div>
										</div>
									</div>
									
								</article>
							</div>
							
							<!-- Single Destination -->
							<div class="col-md-6 col-sm-6">
								<article class="destination-box style-1">

									<div class="destination-box-image">
										<figure>
											<a href="destination-detail.html">
												<img src="assets/img/destination/des-6.jpg" class="img-responsive listing-box-img" alt="" />
												<div class="list-overlay"></div>
											</a>
											<div class="discount-flick">-12%</div>
											<h4 class="destination-place">
												<a href="destination-detail.html">Halifax, Nova Scotia </a>
											</h4>
											<a href="#" class="list-like left"><i class="ti-heart"></i></a>
										</figure>
									</div>
									
									<div class="entry-meta">
										<div class="meta-item meta-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half"></i>
										</div>
										<div class="meta-item meta-comment fl-right">
											<span class="text-through">$7802</span><span class="real-price padd-l-10 font-bold">$7581</span>
										</div>
									</div>

									<div class="inner-box">
										<div class="box-inner-ellipsis">
											<h4 class="entry-location">
												<a href="destination-detail.html">Singapore</a>
											</h4>
											<div class="price-box">
												<div class="destination-price fl-right">
													<a href="#"><i class="theme-cl ti-arrow-right"></i></a>
												</div>
											</div>
										</div>
									</div>
									
								</article>
							</div>
							
							<!-- Single Destination -->
							<div class="col-md-6 col-sm-6">
								<article class="destination-box style-1">

									<div class="destination-box-image">
										<figure>
											<a href="destination-detail.html">
												<img src="assets/img/destination/des-7.jpg" class="img-responsive listing-box-img" alt="" />
												<div class="list-overlay"></div>
											</a>
											<div class="discount-flick">-12%</div>
											<h4 class="destination-place">
												<a href="destination-detail.html">San Jose, Costa Rica</a>
											</h4>
											<a href="#" class="list-like left"><i class="ti-heart"></i></a>
										</figure>
									</div>
									
									<div class="entry-meta">
										<div class="meta-item meta-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half"></i>
										</div>
										<div class="meta-item meta-comment fl-right">
											<span class="text-through">$2300</span><span class="real-price padd-l-10 font-bold">$2250</span>
										</div>
									</div>

									<div class="inner-box">
										<div class="box-inner-ellipsis">
											<h4 class="entry-location">
												<a href="destination-detail.html">New York, US</a>
											</h4>
											<div class="price-box">
												<div class="destination-price fl-right">
													<a href="#"><i class="theme-cl ti-arrow-right"></i></a>
												</div>
											</div>
										</div>
									</div>
									
								</article>
							</div>
							
							<!-- Single Destination -->
							<div class="col-md-6 col-sm-6">
								<article class="destination-box style-1">

									<div class="destination-box-image">
										<figure>
											<a href="destination-detail.html">
												<img src="assets/img/destination/des-8.jpg" class="img-responsive listing-box-img" alt="" />
												<div class="list-overlay"></div>
											</a>
											<div class="discount-flick">-12%</div>
											<h4 class="destination-place">
												<a href="destination-detail.html">Casablanca, Morocco</a>
											</h4>
											<a href="#" class="list-like left"><i class="ti-heart"></i></a>
										</figure>
									</div>
									
									<div class="entry-meta">
										<div class="meta-item meta-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half"></i>
										</div>
										<div class="meta-item meta-comment fl-right">
											<span class="text-through">$2650</span><span class="real-price padd-l-10 font-bold">$2563</span>
										</div>
									</div>

									<div class="inner-box">
										<div class="box-inner-ellipsis">
											<h4 class="entry-location">
												<a href="destination-detail.html">Casablanca</a>
											</h4>
											<div class="price-box">
												<div class="destination-price fl-right">
													<a href="#"><i class="theme-cl ti-arrow-right"></i></a>
												</div>
											</div>
										</div>
									</div>
									
								</article>
							</div>
							
						</div>
						<!-- /Row -->
						
						<div class="row">
							<ul class="pagination">
								<li class="page-item">
								  <a class="page-link" href="#" aria-label="Previous">
									<span class="ti-arrow-left"></span>
									<span class="sr-only">Previous</span>
								  </a>
								</li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item active"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">4</a></li>
								<li class="page-item"><a class="page-link" href="#">5</a></li>
								<li class="page-item">
								  <a class="page-link" href="#" aria-label="Next">
									<span class="ti-arrow-right"></span>
									<span class="sr-only">Next</span>
								  </a>
								</li>
							</ul>
						</div>
						
					</div>
					
				</div>
			</div>
		</section>
		<!-- =========== End All Hotel In Grid View =================== -->
			
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
			
		
		
		
	@endsection