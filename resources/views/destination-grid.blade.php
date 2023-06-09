@extends('layouts.layout')

@section('content')

		
		
		<!-- ======================= Start Page Title ===================== -->
		<div class="page-title image-title" style="background-image:url(assets/img/destination.jpg);">
			<div class="container">
				<div class="page-title-wrap">
				<h2>Destination Grid</h2>
				<p><a href="#" class="theme-cl">Home</a> | <span>Destination Grid</span></p>
				</div>
			</div>
		</div>
		<!-- ======================= End Page Title ===================== -->
		
		<!-- =========== Start All Destination In Grid View =================== -->
		<section class="gray-bg">
			<div class="container">
					
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
								 <a href="destination-grid.html" class="btn btn-default tooltips">
									 <i class="ti-flix ti-layout-grid2"></i>
								 </a>
							</div>

							<div class="btn-group">
								 <a href="destination-list.html" class="btn btn-default tooltips">
									 <i class="ti-flix ti-view-list-alt"></i>
								 </a>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
						
				<div class="row">
					
					<!-- Single Destination -->
					<div class="col-md-4 col-sm-6">
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
					<div class="col-md-4 col-sm-6">
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
					<div class="col-md-4 col-sm-6">
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
					<div class="col-md-4 col-sm-6">
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
					<div class="col-md-4 col-sm-6">
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
					<div class="col-md-4 col-sm-6">
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
					<div class="col-md-4 col-sm-6">
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
					<div class="col-md-4 col-sm-6">
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
					
					<!-- Single Destination -->
					<div class="col-md-4 col-sm-6">
						<article class="destination-box style-1">

							<div class="destination-box-image">
								<figure>
									<a href="destination-detail.html">
										<img src="assets/img/destination/des-9.jpg" class="img-responsive listing-box-img" alt="" />
										<div class="list-overlay"></div>
									</a>
									<div class="discount-flick">-12%</div>
									<h4 class="destination-place">
										<a href="destination-detail.html">London, United Kingdom</a>
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
									<span class="text-through">$5800</span><span class="real-price padd-l-10 font-bold">$5682</span>
								</div>
							</div>

							<div class="inner-box">
								<div class="box-inner-ellipsis">
									<h4 class="entry-location">
										<a href="destination-detail.html">United Kingdom</a>
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
		</section>
		<!-- =========== End All Destination In Grid View =================== -->
			
		
		
		
		

        @endsection