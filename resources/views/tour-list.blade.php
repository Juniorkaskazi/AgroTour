@extends('layouts.layout')

@section('content')
		
		
		<!-- ======================= Start Page Title ===================== -->
		<div class="page-title image-title" style="background-image:url(assets/img/tour.jpg);">
			<div class="container">
				<div class="page-title-wrap">
				<h2>Tour list</h2>
				<p><a href="#" class="theme-cl">Home</a> | <span>Tour list</span></p>
				</div>
			</div>
		</div>
		<!-- ======================= End Page Title ===================== -->
		
		<!-- =========== Start All Tour In List View =================== -->
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
								 <a href="tour-grid.html" class="btn btn-default tooltips">
									 <i class="ti-flix ti-layout-grid2"></i>
								 </a>
							</div>

							<div class="btn-group">
								 <a href="tour-list.html" class="btn btn-default tooltips">
									 <i class="ti-flix ti-view-list-alt"></i>
								 </a>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<div class="row">
					
					<!-- Single Tour List -->
					<div class="col-lg-6 col-md-6">
						<article class="tour-box list-style">
							<div class="row">
								
								<div class="col-md-5 col-sm-5">
									<div class="tour-box-image">
										<a href="tour-detail.html">
											<img src="assets/img/tour/tour-8.jpg" class="img-responsive tour-box-img" alt="">
										</a>
										<div class="entry-bookmark">                                   
											<a href="#"><i class="ti-bookmark"></i></a>
										</div>
										<div class="tour-time">
											<i class="ti ti-car"></i><span>17h</span>
										</div>
									</div>
								</div>
							
								<div class="col-md-7 col-sm-7">	
									<div class="inner-box">
										<div class="discount-flick">-22%</div>
										<div class="box-inner-ellipsis">
											<div style="margin: 0px; padding: 0px; border: 0px;">
												<h3 class="entry-title">
													<a href="tour-detail.html">Istanbul, Luciano Mortula</a>
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
													<span class="vcard author">
														<span class="fn">
															<a href="#"><img alt="" src="assets/img/user-1.jpg" class="avatar avatar-24" height="24" width="24">Lisa Scholfield</a>
														</span>
													</span>
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
					
					<!-- Single Tour List -->
					<div class="col-lg-6 col-md-6">
						<article class="tour-box list-style">
							<div class="row">
								
								<div class="col-md-5 col-sm-5">
									<div class="tour-box-image">
										<a href="tour-detail.html">
											<img src="assets/img/tour/tour-7.jpg" class="img-responsive tour-box-img" alt="">
										</a>
										<div class="entry-bookmark">                                   
											<a href="#"><i class="ti-bookmark"></i></a>
										</div>
										<div class="tour-time">
											<i class="ti ti-car"></i><span>2h</span>
										</div>
									</div>
								</div>
							
								<div class="col-md-7 col-sm-7">	
									<div class="inner-box">
										<div class="discount-flick">-20%</div>
										<div class="box-inner-ellipsis">
											<div style="margin: 0px; padding: 0px; border: 0px;">
												<h3 class="entry-title">
													<a href="tour-detail.html">Kuala Lumpur, Malaysia</a>
												</h3>
												<div class="entry-content">
													<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
													<span class="price">From <strong class="theme-cl">$221</strong> /per person</span>
												</div>
											</div>
										</div>
										
										<div class="entry-meta">
											<div class="meta-item meta-author">
												<div class="coauthors">
													<span class="vcard author">
														<span class="fn">
															<a href="#"><img alt="" src="assets/img/user-2.jpg" class="avatar avatar-24" height="24" width="24">Lisa Scholfield</a>
														</span>
													</span>
												</div>
											</div>
											<div class="meta-item meta-comment fl-right">
												<i class="ti-comment-alt"></i><span>16</span>
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
					
					<!-- Single Tour List -->
					<div class="col-lg-6 col-md-6">
						<article class="tour-box list-style">
							<div class="row">
								
								<div class="col-md-5 col-sm-5">
									<div class="tour-box-image">
										<a href="tour-detail.html">
											<img src="assets/img/tour/tour-6.jpg" class="img-responsive tour-box-img" alt="">
										</a>
										<div class="entry-bookmark">                                   
											<a href="#"><i class="ti-bookmark"></i></a>
										</div>
										<div class="tour-time">
											<i class="ti ti-car"></i><span>12h</span>
										</div>
									</div>
								</div>
							
								<div class="col-md-7 col-sm-7">	
									<div class="inner-box">
										<div class="discount-flick">-13%</div>
										<div class="box-inner-ellipsis">
											<div style="margin: 0px; padding: 0px; border: 0px;">
												<h3 class="entry-title">
													<a href="tour-detail.html">Singapore. platongkoh</a>
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
													<span class="vcard author">
														<span class="fn">
															<a href="#"><img alt="" src="assets/img/user-3.jpg" class="avatar avatar-24" height="24" width="24">Lisa Scholfield</a>
														</span>
													</span>
												</div>
											</div>
											<div class="meta-item meta-comment fl-right">
												<i class="ti-comment-alt"></i><span>16</span>
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
					
					<!-- Single Tour List -->
					<div class="col-lg-6 col-md-6">
						<article class="tour-box list-style">
							<div class="row">
								
								<div class="col-md-5 col-sm-5">
									<div class="tour-box-image">
										<a href="tour-detail.html">
											<img src="assets/img/tour/tour-5.jpg" class="img-responsive tour-box-img" alt="">
										</a>
										<div class="entry-bookmark">                                   
											<a href="#"><i class="ti-bookmark"></i></a>
										</div>
										<div class="tour-time">
											<i class="ti ti-car"></i><span>17h</span>
										</div>
									</div>
								</div>
							
								<div class="col-md-7 col-sm-7">	
									<div class="inner-box">
										<div class="discount-flick">-32%</div>
										<div class="box-inner-ellipsis">
											<div style="margin: 0px; padding: 0px; border: 0px;">
												<h3 class="entry-title">
													<a href="tour-detail.html">Dubai, United Arab Emirates</a>
												</h3>
												<div class="entry-content">
													<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
													<span class="price">From <strong class="theme-cl">$524</strong> /per person</span>
												</div>
											</div>
										</div>
										
										<div class="entry-meta">
											<div class="meta-item meta-author">
												<div class="coauthors">
													<span class="vcard author">
														<span class="fn">
															<a href="#"><img alt="" src="assets/img/user-4.jpg" class="avatar avatar-24" height="24" width="24">Lisa Scholfield</a>
														</span>
													</span>
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
					
					<!-- Single Tour List -->
					<div class="col-lg-6 col-md-6">
						<article class="tour-box list-style">
							<div class="row">
								
								<div class="col-md-5 col-sm-5">
									<div class="tour-box-image">
										<a href="tour-detail.html">
											<img src="assets/img/tour/tour-4.jpg" class="img-responsive tour-box-img" alt="">
										</a>
										<div class="entry-bookmark">                                   
											<a href="#"><i class="ti-bookmark"></i></a>
										</div>
										<div class="tour-time">
											<i class="ti ti-car"></i><span>2 days</span>
										</div>
									</div>
								</div>
							
								<div class="col-md-7 col-sm-7">	
									<div class="inner-box">
										<div class="discount-flick">-15%</div>
										<div class="box-inner-ellipsis">
											<div style="margin: 0px; padding: 0px; border: 0px;">
												<h3 class="entry-title">
													<a href="tour-detail.html">Paris, France. neirfy</a>
												</h3>
												<div class="entry-content">
													<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
													<span class="price">From <strong class="theme-cl">$987</strong> /per person</span>
												</div>
											</div>
										</div>
										
										<div class="entry-meta">
											<div class="meta-item meta-author">
												<div class="coauthors">
													<span class="vcard author">
														<span class="fn">
															<a href="#"><img alt="" src="assets/img/user-5.jpg" class="avatar avatar-24" height="24" width="24">Lisa Scholfield</a>
														</span>
													</span>
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
					
					<!-- Single Tour List -->
					<div class="col-lg-6 col-md-6">
						<article class="tour-box list-style">
							<div class="row">
								
								<div class="col-md-5 col-sm-5">
									<div class="tour-box-image">
										<a href="tour-detail.html">
											<img src="assets/img/tour/tour-3.jpg" class="img-responsive tour-box-img" alt="">
										</a>
										<div class="entry-bookmark">                                   
											<a href="#"><i class="ti-bookmark"></i></a>
										</div>
										<div class="tour-time">
											<i class="ti ti-car"></i><span>3 days</span>
										</div>
									</div>
								</div>
							
								<div class="col-md-7 col-sm-7">	
									<div class="inner-box">
										<div class="discount-flick">-12%</div>
										<div class="box-inner-ellipsis">
											<div style="margin: 0px; padding: 0px; border: 0px;">
												<h3 class="entry-title">
													<a href="tour-detail.html">London, England. AndreaAstes</a>
												</h3>
												<div class="entry-content">
													<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
													<span class="price">From <strong class="theme-cl">$184</strong> /per person</span>
												</div>
											</div>
										</div>
										
										<div class="entry-meta">
											<div class="meta-item meta-author">
												<div class="coauthors">
													<span class="vcard author">
														<span class="fn">
															<a href="#"><img alt="" src="assets/img/user-6.jpg" class="avatar avatar-24" height="24" width="24">Lisa Scholfield</a>
														</span>
													</span>
												</div>
											</div>
											<div class="meta-item meta-comment fl-right">
												<i class="ti-comment-alt"></i><span>23</span>
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
					
					<!-- Single Tour List -->
					<div class="col-lg-6 col-md-6">
						<article class="tour-box list-style">
							<div class="row">
								
								<div class="col-md-5 col-sm-5">
									<div class="tour-box-image">
										<a href="tour-detail.html">
											<img src="assets/img/tour/tour-2.jpg" class="img-responsive tour-box-img" alt="">
										</a>
										<div class="entry-bookmark">                                   
											<a href="#"><i class="ti-bookmark"></i></a>
										</div>
										<div class="tour-time">
											<i class="ti ti-car"></i><span>10h</span>
										</div>
									</div>
								</div>
							
								<div class="col-md-7 col-sm-7">	
									<div class="inner-box">
										<div class="discount-flick">-12%</div>
										<div class="box-inner-ellipsis">
											<div style="margin: 0px; padding: 0px; border: 0px;">
												<h3 class="entry-title">
													<a href="tour-detail.html">Bangkok, Thailand. thitivong</a>
												</h3>
												<div class="entry-content">
													<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
													<span class="price">From <strong class="theme-cl">$654</strong> /per person</span>
												</div>
											</div>
										</div>
										
										<div class="entry-meta">
											<div class="meta-item meta-author">
												<div class="coauthors">
													<span class="vcard author">
														<span class="fn">
															<a href="#"><img alt="" src="assets/img/user-7.jpg" class="avatar avatar-24" height="24" width="24">Lisa Scholfield</a>
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
					
					<!-- Single Tour List -->
					<div class="col-lg-6 col-md-6">
						<article class="tour-box list-style">
							<div class="row">
								
								<div class="col-md-5 col-sm-5">
									<div class="tour-box-image">
										<a href="tour-detail.html">
											<img src="assets/img/tour/tour-1.jpg" class="img-responsive tour-box-img" alt="">
										</a>
										<div class="entry-bookmark">                                   
											<a href="#"><i class="ti-bookmark"></i></a>
										</div>
										<div class="tour-time">
											<i class="ti ti-car"></i><span>1 day</span>
										</div>
									</div>
								</div>
							
								<div class="col-md-7 col-sm-7">	
									<div class="inner-box">
										<div class="discount-flick">-20%</div>
										<div class="box-inner-ellipsis">
											<div style="margin: 0px; padding: 0px; border: 0px;">
												<h3 class="entry-title">
													<a href="tour-detail.html">New York, New York</a>
												</h3>
												<div class="entry-content">
													<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
													<span class="price">From <strong class="theme-cl">$270</strong> /per person</span>
												</div>
											</div>
										</div>
										
										<div class="entry-meta">
											<div class="meta-item meta-author">
												<div class="coauthors">
													<span class="vcard author">
														<span class="fn">
															<a href="#"><img alt="" src="assets/img/user-8.jpg" class="avatar avatar-24" height="24" width="24">Lisa Scholfield</a>
														</span>
													</span>
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
		<!-- =========== End All Tour In List View =================== -->
			
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
		
		

        @endsection