@extends('layouts.layout')

@section('content')

		
		<!-- ======================= Start Page Title ===================== -->
		<div class="page-title image-title" style="background-image:url(assets/img/destination.jpg);">
			<div class="container">
				<div class="page-title-wrap">
				<h2>Destination List</h2>
				<p><a href="#" class="theme-cl">Home</a> | <span>Destination List</span></p>
				</div>
			</div>
		</div>
		<!-- ======================= End Page Title ===================== -->
		
		<!-- =========== Start All Destination In List View =================== -->
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
					
					<!-- Single Destination List -->
					<div class="col-lg-6 col-md-6">
						<article class="destination-box list-style">
							<div class="row">
								
								<div class="col-md-5 col-sm-5">
									<div class="destination-box-image">
										<a href="destination-detail.html">
											<img src="assets/img/destination/des-8.jpg" class="img-responsive destination-box-img" alt="" />
										</a>
										<a href="#" class="list-like left"><i class="ti-heart"></i></a>
										<div class="destination-time">
											<i class="ti ti-car"></i><span>3 days</span>
										</div>
									</div>
								</div>
							
								<div class="col-md-7 col-sm-7">	
									<div class="inner-box">
										<div class="discount-flick">-22%</div>
										<div class="box-inner-ellipsis">
											<div style="margin: 0px; padding: 0px; border: 0px;">
												<h3 class="entry-title">
													<a href="destination-detail.html">Bali, Indonesia</a>
												</h3>
												<div class="entry-content">
													<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
													<span class="price">From <strong class="theme-cl">$170</strong> /per person</span>
												</div>
											</div>
										</div>
										
										<div class="entry-meta">
											<div class="meta-item meta-author">
												<div class="coauthors">
													<div class="vcard author">
														<div class="fn">
															<h4><a href="destination-detail.html">Hong Kong</a></h4>
														</div>
													</div>
												</div>
											</div>
											<div class="meta-item meta-comment fl-right">
												<i class="ti-comment-alt"></i><span>25</span>
											</div>
											<div class="meta-item meta-rating fl-right">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half"></i>
											</div>
										</div>
									</div>
								</div>
							
							</div>

						</article>
					</div>
					
					<!-- Single Destination List -->
					<div class="col-lg-6 col-md-6">
						<article class="destination-box list-style">
							<div class="row">
								
								<div class="col-md-5 col-sm-5">
									<div class="destination-box-image">
										<a href="destination-detail.html">
											<img src="assets/img/destination/des-7.jpg" class="img-responsive destination-box-img" alt="" />
										</a>
										<a href="#" class="list-like left"><i class="ti-heart"></i></a>
										<div class="destination-time">
											<i class="ti ti-car"></i><span>17h</span>
										</div>
									</div>
								</div>
							
								<div class="col-md-7 col-sm-7">	
									<div class="inner-box">
										<div class="box-inner-ellipsis">
											<div style="margin: 0px; padding: 0px; border: 0px;">
												<h3 class="entry-title">
													<a href="destination-detail.html">Istanbul, Turkey</a>
												</h3>
												<div class="entry-content">
													<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
													<span class="price">From <strong class="theme-cl">$224</strong> /per person</span>
												</div>
											</div>
										</div>
										
										<div class="entry-meta">
											<div class="meta-item meta-author">
												<div class="coauthors">
													<div class="vcard author">
														<div class="fn">
															<h4><a href="destination-detail.html">United Kingdom</a></h4>
														</div>
													</div>
												</div>
											</div>
											<div class="meta-item meta-comment fl-right">
												<i class="ti-comment-alt"></i><span>19</span>
											</div>
											<div class="meta-item meta-rating fl-right">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half"></i>
											</div>
										</div>
									</div>
								</div>
							
							</div>

						</article>
					</div>
					
					<!-- Single Destination List -->
					<div class="col-lg-6 col-md-6">
						<article class="destination-box list-style">
							<div class="row">
								
								<div class="col-md-5 col-sm-5">
									<div class="destination-box-image">
										<a href="destination-detail.html">
											<img src="assets/img/destination/des-6.jpg" class="img-responsive destination-box-img" alt="" />
										</a>
										<a href="#" class="list-like left"><i class="ti-heart"></i></a>
										<div class="destination-time">
											<i class="ti ti-car"></i><span>23h</span>
										</div>
									</div>
								</div>
							
								<div class="col-md-7 col-sm-7">	
									<div class="inner-box">
										<div class="box-inner-ellipsis">
											<div style="margin: 0px; padding: 0px; border: 0px;">
												<h3 class="entry-title">
													<a href="destination-detail.html">Halifax, Nova Scotia</a>
												</h3>
												<div class="entry-content">
													<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
													<span class="price">From <strong class="theme-cl">$234</strong> /per person</span>
												</div>
											</div>
										</div>
										
										<div class="entry-meta">
											<div class="meta-item meta-author">
												<div class="coauthors">
													<div class="vcard author">
														<div class="fn">
															<h4><a href="destination-detail.html">Singapore</a></h4>
														</div>
													</div>
												</div>
											</div>
											<div class="meta-item meta-comment fl-right">
												<i class="ti-comment-alt"></i><span>17</span>
											</div>
											<div class="meta-item meta-rating fl-right">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half"></i>
											</div>
										</div>
									</div>
								</div>
							
							</div>

						</article>
					</div>
					
					<!-- Single Destination List -->
					<div class="col-lg-6 col-md-6">
						<article class="destination-box list-style">
							<div class="row">
								
								<div class="col-md-5 col-sm-5">
									<div class="destination-box-image">
										<a href="destination-detail.html">
											<img src="assets/img/destination/des-5.jpg" class="img-responsive destination-box-img" alt="" />
										</a>
										<a href="#" class="list-like left"><i class="ti-heart"></i></a>
										<div class="destination-time">
											<i class="ti ti-car"></i><span>2 daysh</span>
										</div>
									</div>
								</div>
							
								<div class="col-md-7 col-sm-7">	
									<div class="inner-box">
										<div class="discount-flick">-15%</div>
										<div class="box-inner-ellipsis">
											<div style="margin: 0px; padding: 0px; border: 0px;">
												<h3 class="entry-title">
													<a href="destination-detail.html">Casablanca, Morocco</a>
												</h3>
												<div class="entry-content">
													<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
													<span class="price">From <strong class="theme-cl">$204</strong> /per person</span>
												</div>
											</div>
										</div>
										
										<div class="entry-meta">
											<div class="meta-item meta-author">
												<div class="coauthors">
													<span class="vcard author">
														<span class="fn">
															<h4><a href="destination-detail.html">Switzerland</a></h4>
														</span>
													</span>
												</div>
											</div>
											<div class="meta-item meta-comment fl-right">
												<i class="ti-comment-alt"></i><span>13</span>
											</div>
											<div class="meta-item meta-rating fl-right">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half"></i>
											</div>
										</div>
									</div>
								</div>
							
							</div>

						</article>
					</div>
					
					<!-- Single Destination List -->
					<div class="col-lg-6 col-md-6">
						<article class="destination-box list-style">
							<div class="row">
								
								<div class="col-md-5 col-sm-5">
									<div class="destination-box-image">
										<a href="destination-detail.html">
											<img src="assets/img/destination/des-4.jpg" class="img-responsive destination-box-img" alt="" />
										</a>
										<a href="#" class="list-like left"><i class="ti-heart"></i></a>
										<div class="destination-time">
											<i class="ti ti-car"></i><span>12h</span>
										</div>
									</div>
								</div>
							
								<div class="col-md-7 col-sm-7">	
									<div class="inner-box">
										<div class="discount-flick">-12%</div>
										<div class="box-inner-ellipsis">
											<div style="margin: 0px; padding: 0px; border: 0px;">
												<h3 class="entry-title">
													<a href="destination-detail.html">Rovinj, Croatia </a>
												</h3>
												<div class="entry-content">
													<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
													<span class="price">From <strong class="theme-cl">$134</strong> /per person</span>
												</div>
											</div>
										</div>
										
										<div class="entry-meta">
											<div class="meta-item meta-author">
												<div class="coauthors">
													<div class="vcard author">
														<div class="fn">
															<h4><a href="destination-detail.html">United States</a></h4>
														</div>
													</div>
												</div>
											</div>
											<div class="meta-item meta-comment fl-right">
												<i class="ti-comment-alt"></i><span>20</span>
											</div>
											<div class="meta-item meta-rating fl-right">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half"></i>
											</div>
										</div>
									</div>
								</div>
							
							</div>

						</article>
					</div>
					
					<!-- Single Destination List -->
					<div class="col-lg-6 col-md-6">
						<article class="destination-box list-style">
							<div class="row">
								
								<div class="col-md-5 col-sm-5">
									<div class="destination-box-image">
										<a href="destination-detail.html">
											<img src="assets/img/destination/des-3.jpg" class="img-responsive destination-box-img" alt="" />
										</a>
										<a href="#" class="list-like left"><i class="ti-heart"></i></a>
										<div class="destination-time">
											<i class="ti ti-car"></i><span>10h</span>
										</div>
									</div>
								</div>
							
								<div class="col-md-7 col-sm-7">	
									<div class="inner-box">
										<div class="box-inner-ellipsis">
											<div style="margin: 0px; padding: 0px; border: 0px;">
												<h3 class="entry-title">
													<a href="destination-detail.html">Marrakech, Morroco</a>
												</h3>
												<div class="entry-content">
													<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
													<span class="price">From <strong class="theme-cl">$154</strong> /per person</span>
												</div>
											</div>
										</div>
										
										<div class="entry-meta">
											<div class="meta-item meta-author">
												<div class="coauthors">
													<div class="vcard author">
														<div class="fn">
															<h4><a href="destination-detail.html">Saudi Arabia</a></h4>
														</div>
													</div>
												</div>
											</div>
											<div class="meta-item meta-comment fl-right">
												<i class="ti-comment-alt"></i><span>13</span>
											</div>
											<div class="meta-item meta-rating fl-right">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half"></i>
											</div>
										</div>
									</div>
								</div>
							
							</div>

						</article>
					</div>
					
					<!-- Single Destination List -->
					<div class="col-lg-6 col-md-6">
						<article class="destination-box list-style">
							<div class="row">
								
								<div class="col-md-5 col-sm-5">
									<div class="destination-box-image">
										<a href="destination-detail.html">
											<img src="assets/img/destination/des-2.jpg" class="img-responsive destination-box-img" alt="" />
										</a>
										<a href="#" class="list-like left"><i class="ti-heart"></i></a>
										<div class="destination-time">
											<i class="ti ti-car"></i><span>2 days</span>
										</div>
									</div>
								</div>
							
								<div class="col-md-7 col-sm-7">	
									<div class="inner-box">
										<div class="discount-flick">-13%</div>
										<div class="box-inner-ellipsis">
											<div style="margin: 0px; padding: 0px; border: 0px;">
												<h3 class="entry-title">
													<a href="destination-detail.html">Prague, Czech Republic</a>
												</h3>
												<div class="entry-content">
													<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
													<span class="price">From <strong class="theme-cl">$104</strong> /per person</span>
												</div>
											</div>
										</div>
										
										<div class="entry-meta">
											<div class="meta-item meta-author">
												<div class="coauthors">
													<div class="vcard author">
														<div class="fn">
															<h4><a href="destination-detail.html">Austrailia</a></h4>
														</div>
													</div>
												</div>
											</div>
											<div class="meta-item meta-comment fl-right">
												<i class="ti-comment-alt"></i><span>18</span>
											</div>
											<div class="meta-item meta-rating fl-right">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half"></i>
											</div>
										</div>
									</div>
								</div>
							
							</div>

						</article>
					</div>
					
					<!-- Single Destination List -->
					<div class="col-lg-6 col-md-6">
						<article class="destination-box list-style">
							<div class="row">
								
								<div class="col-md-5 col-sm-5">
									<div class="destination-box-image">
										<a href="destination-detail.html">
											<img src="assets/img/destination/des-1.jpg" class="img-responsive destination-box-img" alt="" />
										</a>
										<a href="#" class="list-like left"><i class="ti-heart"></i></a>
										<div class="destination-time">
											<i class="ti ti-car"></i><span>7h</span>
										</div>
									</div>
								</div>
							
								<div class="col-md-7 col-sm-7">	
									<div class="inner-box">
										<div class="discount-flick">-10%</div>
										<div class="box-inner-ellipsis">
											<div style="margin: 0px; padding: 0px; border: 0px;">
												<h3 class="entry-title">
													<a href="destination-detail.html">London, United Kingdom</a>
												</h3>
												<div class="entry-content">
													<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
													<span class="price">From <strong class="theme-cl">$134</strong> /per person</span>
												</div>
											</div>
										</div>
										
										<div class="entry-meta">
											<div class="meta-item meta-author">
												<div class="coauthors">
													<div class="vcard author">
														<div class="fn">
															<h4><a href="destination-detail.html">Netherlands</a></h4>
														</div>
													</div>
												</div>
											</div>
											<div class="meta-item meta-comment fl-right">
												<i class="ti-comment-alt"></i><span>10</span>
											</div>
											<div class="meta-item meta-rating fl-right">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half"></i>
											</div>
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
		<!-- =========== End All Destination In List View =================== -->
			
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