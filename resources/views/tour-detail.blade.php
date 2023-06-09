@extends('layouts.layout')

@section('content')
		
		<!-- ======================= Start Banner ===================== -->
		<section class="page-title-banner" style="background-image:url(assets/img/banner.jpg);">
			<div class="container">
				<div class="row">
					<div class="tr-list-detail">
						<div class="tr-list-thumb">
							<img src="assets/img/user-2.jpg" class="img-responsive img-circle" alt="" />
						</div>
						<div class="tr-list-info">
							<h4>Adam G. Gilworm</h4>
							<p>Canada Tour</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ======================= End Banner ===================== -->
		
		<section class="profile-header-nav padd-0 bb-1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-8 col-sm-8">
						<div class="tab" role="tabpanel">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#Overview" aria-controls="home" role="tab" data-toggle="tab"><i class="ti-user"></i>Overview</a></li>
								<li role="presentation"><a href="#Features" aria-controls="profile" role="tab" data-toggle="tab"><i class="ti-settings"></i>Features</a></li>
								<li role="presentation"><a href="#Review" aria-controls="messages" role="tab" data-toggle="tab"><i class="ti-thumb-up"></i>Review</a></li>
								<li role="presentation"><a href="#Photos" aria-controls="messages" role="tab" data-toggle="tab"><i class="ti-gallery"></i>Photos</a></li>
							</ul>
							<!-- Tab panes -->
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4">
						<div class="fl-right">
							<button type="button" class="btn theme-btn"><span class="fa fa-paper-plane mrg-r-10"></span>Send Message</button>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		
		<!-- ============== Tour Detail ====================== -->	
		<section class="tr-single-detail gray-bg">
			<div class="container">
				<div class="row">
				
					<div class="col-md-8 col-sm-12">
						<div class="tab-content tabs">
							
							<div role="tabpanel" class="tab-pane fade in active" id="Overview">
								
								<!-- Overview -->
								<div class="row">
									<div class="tr-single-box">
										<div class="tr-single-header">
											<h4><i class="fa fa-star-o"></i>Overview</h4>
										</div>
										<div class="tr-single-body">
											<div class="row">
											
												<div class="col-md-4 col-sm-6">
													<div class="listing-features">
														<div class="listing-features-box">
															<div class="listing-features-thumb">
																<img src="assets/img/muscle.png" class="img-responsive" alt="" />
															</div>
															<div class="listing-features-detail">
																<h4>Gym & Fitness</h4>
															</div>
														</div>
													</div>
												</div>
												
												<div class="col-md-4 col-sm-6">
													<div class="listing-features">
														<div class="listing-features-box">
															<div class="listing-features-thumb">
																<img src="assets/img/wifi.png" class="img-responsive" alt="" />
															</div>
															<div class="listing-features-detail">
																<h4>Free Wifi</h4>
															</div>
														</div>
													</div>
												</div>
												
												<div class="col-md-4 col-sm-6">
													<div class="listing-features">
														<div class="listing-features-box">
															<div class="listing-features-thumb">
																<img src="assets/img/spa-waters.png" class="img-responsive" alt="" />
															</div>
															<div class="listing-features-detail">
																<h4>Free Spa</h4>
															</div>
														</div>
													</div>
												</div>
												
												<div class="col-md-4 col-sm-6">
													<div class="listing-features">
														<div class="listing-features-box">
															<div class="listing-features-thumb">
																<img src="assets/img/tea.png" class="img-responsive" alt="" />
															</div>
															<div class="listing-features-detail">
																<h4>Restaurent</h4>
															</div>
														</div>
													</div>
												</div>
												
												<div class="col-md-4 col-sm-6">
													<div class="listing-features">
														<div class="listing-features-box">
															<div class="listing-features-thumb">
																<img src="assets/img/parking.png" class="img-responsive" alt="" />
															</div>
															<div class="listing-features-detail">
																<h4>Parking On Site</h4>
															</div>
														</div>
													</div>
												</div>
												
												<div class="col-md-4 col-sm-6">
													<div class="listing-features">
														<div class="listing-features-box">
															<div class="listing-features-thumb">
																<img src="assets/img/poker.png" class="img-responsive" alt="" />
															</div>
															<div class="listing-features-detail">
																<h4>Casino</h4>
															</div>
														</div>
													</div>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								
								<!-- Description -->
								<div class="row">
									<div class="tr-single-box">
										<div class="tr-single-header">
											<h4><i class="ti-files"></i>Description</h4>
										</div>
										<div class="tr-single-body">
											<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus..</p>
											<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
											<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam.</p>
										</div>
									</div>
								</div>
								
								<!-- Amenities -->
								<div class="row">
									<div class="tr-single-box">
										<div class="tr-single-header">
											<h4><i class="ti-crown"></i>Amenities</h4>
										</div>
										<div class="tr-single-body">
											<ul class="amenities third">
												<li>Satellite TV</li>
												<li>Coffeemaker</li>
												<li>Hair Dryer</li>
												<li>Swimming Pool</li>
												<li>Room Service</li>
												<li>Luxury Bedding</li>
												<li>Good Showers</li>
												<li>Free Parking</li>
												<li>Free Wifi</li>
												<li>Bath towel</li>
												<li>Free Coffee</li>
												<li>Pets Allow</li>
												<li>Hot Water</li>
												<li>Attached garage </li>
												<li>Elevator</li>
												<li>Spa/Sauna</li>
												<li>Indoor pool </li>
												<li>Security cameras </li>
											</ul>
										</div>
									</div>
								</div>
								
								<!-- Guider -->
								<div class="row">
									<div class="tr-single-box">
										<div class="tr-single-header">
											<h4><i class="ti-user"></i>Guide</h4>
										</div>
										<div class="tr-single-body">
										
											<div class="guider-box-detail">
												<div class="guider-box-thumb">
													<img src="assets/img/user-6.jpg" class="img-responsive img-circle" alt="" />
												</div>
												<div class="guider-box-detail-content">
													<h4>Shilka Niharika<sup class="theme-cl">Guide</sup></h4>
													<p>4 year Experience<span class="guider-status bg-success">Online</span></p>
													<a href="#" class="btn btn-info">View Detail</a>
													<a href="#" class="btn btn-default">Message</a>
												</div>
												<div class="pr-table">
													<ul>
														<li>
															<strong>Tour type:</strong>
															<span class="t-type bg-danger">Extraordinary</span>
															<span class="t-type bg-warning">Food</span>
															<span class="t-type bg-success">Travel</span>
														</li>
														<li><strong>Activity Lavel:</strong>Minimal</li>
														<li><strong>Language:</strong>English, French</li>
														<li><strong>Location:</strong>Canada</li>
														<li><strong></strong></li>
													</ul>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								
								<!-- Location -->
								<div class="row">
									<div class="tr-single-box">
										<div class="tr-single-header">
											<h4><i class="ti-map-alt"></i>Location</h4>
										</div>
										<div class="tr-single-body">
											<div class="height-350" id="singleMap" data-latitude="40.712776" data-longitude="-74.005974" data-mapTitle="Our Location"></div>	
										</div>
									</div>
								</div>
								
							</div>
							
							<!-- ============ Features =================== -->
							<div role="tabpanel" class="tab-pane fade in" id="Features">
								
								<!-- About Features -->
								<div class="row">
									<div class="tr-single-box">
										<div class="tr-single-header">
											<h4><i class="ti-files"></i>About Features</h4>
										</div>
										<div class="tr-single-body">
											<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
										</div>
									</div>
								</div>
								
								<!-- Extra features -->
								<div class="row">
									<div class="tr-single-box">
										<div class="tr-single-header">
											<h4><i class="ti-thumb-up"></i>Extra Features</h4>
										</div>
										<div class="tr-single-body">
											
											<ul class="simple-features-list">
												<li>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</li>
												<li>Minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</li>
												<li>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain.</li>
												<li>Pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes.</li>
												<li>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</li>
												<li>Minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</li>
												<li>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain.</li>
												<li>Pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes.</li>
											</ul>
											
										</div>
									</div>
								</div>
								
							</div>
							
							<!-- ============ Review =================== -->
							<div role="tabpanel" class="tab-pane fade in" id="Review">
								
								<!-- Review -->
								<div class="row">
									<div class="tr-single-box">
										<div class="tr-single-header">
											<h4><i class="ti-write"></i>All Review</h4>
										</div>
										<div class="tr-single-body">
											
											<!-- Single Review -->
											<div class="review-box">
												<div class="review-thumb">
													<img src="assets/img/user-1.jpg" class="img-responsive img-circle" alt="" />
												</div>
												
												<div class="review-box-content">
													<div class="reviewer-rate">
														<p><i class="fa fa-star cl-warning"></i>4.7/<span>5</span></p>
													</div>
													<div class="review-user-info">
														<h4>Daniel Dicoss</h4>
														<p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
													</div>
													<div class="review-lc text-right">
														<a href="#"><i class="ti-heart"></i>87</a>
														<a href="#"><i class="ti-comment"></i>52</a>
													</div>
												</div>
												
											</div>
											
											<!-- Single Review -->
											<div class="review-box">
												<div class="review-thumb">
													<img src="assets/img/user-2.jpg" class="img-responsive img-circle" alt="" />
												</div>
												
												<div class="review-box-content">
													<div class="reviewer-rate">
														<p><i class="fa fa-star cl-warning"></i>4.4/<span>5</span></p>
													</div>
													<div class="review-user-info">
														<h4>Archita Singh</h4>
														<p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
													</div>
													<div class="review-lc text-right">
														<a href="#"><i class="ti-heart"></i>65</a>
														<a href="#"><i class="ti-comment"></i>78</a>
													</div>
												</div>
												
											</div>
											
											<!-- Single Review -->
											<div class="review-box">
												<div class="review-thumb">
													<img src="assets/img/user-3.jpg" class="img-responsive img-circle" alt="" />
												</div>
												
												<div class="review-box-content">
													<div class="reviewer-rate">
														<p><i class="fa fa-star cl-warning"></i>5.0/<span>5</span></p>
													</div>
													<div class="review-user-info">
														<h4>Devesh Patri</h4>
														<p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
													</div>
													<div class="review-lc text-right">
														<a href="#"><i class="ti-heart"></i>110</a>
														<a href="#"><i class="ti-comment"></i>47</a>
													</div>
												</div>
												
											</div>
											
											<!-- Single Review -->
											<div class="review-box">
												<div class="review-thumb">
													<img src="assets/img/user-4.jpg" class="img-responsive img-circle" alt="" />
												</div>
												
												<div class="review-box-content">
													<div class="reviewer-rate">
														<p><i class="fa fa-star cl-warning"></i>4.9/<span>5</span></p>
													</div>
													<div class="review-user-info">
														<h4>Ruchi Sethi</h4>
														<p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
													</div>
													<div class="review-lc text-right">
														<a href="#"><i class="ti-heart"></i>120</a>
														<a href="#"><i class="ti-comment"></i>36</a>
													</div>
												</div>
												
											</div>
											
											<!-- Single Review -->
											<div class="review-box">
												<div class="review-thumb">
													<img src="assets/img/user-5.jpg" class="img-responsive img-circle" alt="" />
												</div>
												
												<div class="review-box-content">
													<div class="reviewer-rate">
														<p><i class="fa fa-star cl-warning"></i>4.8/<span>5</span></p>
													</div>
													<div class="review-user-info">
														<h4>Duke Divalkis</h4>
														<p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
													</div>
													<div class="review-lc text-right">
														<a href="#"><i class="ti-heart"></i>80</a>
														<a href="#"><i class="ti-comment"></i>70</a>
													</div>
												</div>
												
											</div>
											
											<!-- Single Review -->
											<div class="review-box">
												<div class="review-thumb">
													<img src="assets/img/user-6.jpg" class="img-responsive img-circle" alt="" />
												</div>
												
												<div class="review-box-content">
													<div class="reviewer-rate">
														<p><i class="fa fa-star cl-warning"></i>4.7/<span>5</span></p>
													</div>
													<div class="review-user-info">
														<h4>Shilka Rai</h4>
														<p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
													</div>
													<div class="review-lc text-right">
														<a href="#"><i class="ti-heart"></i>120</a>
														<a href="#"><i class="ti-comment"></i>140</a>
													</div>
												</div>
												
											</div>
											
										</div>
									</div>
								
								</div>
								
							</div>
							
							<!-- ============ Photos =================== -->
							<div role="tabpanel" class="tab-pane fade in" id="Photos">
								<div class="row">
									<div class="tr-single-box">
										<div class="tr-single-header">
											<h4><i class="ti-gallery"></i>All Gallery</h4>
										</div>
										<div class="tr-single-body">
											<ul class="gallery-list">
												<li>
													<a data-fancybox="gallery" href="assets/img/destination/des-1.jpg">
														<img src="assets/img/destination/des-1.jpg" class="img-responsive" alt="">
													</a>
												</li>
												<li>
													<a data-fancybox="gallery" href="assets/img/destination/des-2.jpg">
														<img src="assets/img/destination/des-2.jpg" class="img-responsive" alt="">
													</a>
												</li>
												<li>
													<a data-fancybox="gallery" href="assets/img/destination/des-3.jpg">
														<img src="assets/img/destination/des-3.jpg" class="img-responsive" alt="">
													</a>
												</li>
												<li>
													<a data-fancybox="gallery" href="assets/img/destination/des-4.jpg">
														<img src="assets/img/destination/des-4.jpg" class="img-responsive" alt="">
													</a>
												</li>
												<li>
													<a data-fancybox="gallery" href="assets/img/destination/des-5.jpg">
														<img src="assets/img/destination/des-5.jpg" class="img-responsive" alt="">
													</a>
												</li>
												<li>
													<a data-fancybox="gallery" href="assets/img/destination/des-6.jpg">
														<img src="assets/img/destination/des-6.jpg" class="img-responsive" alt="">
													</a>
												</li>
												<li>
													<a data-fancybox="gallery" href="assets/img/destination/des-7.jpg">
														<img src="assets/img/destination/des-7.jpg" class="img-responsive" alt="">
													</a>
												</li>
												<li>
													<a data-fancybox="gallery" href="assets/img/destination/des-8.jpg">
														<img src="assets/img/destination/des-8.jpg" class="img-responsive" alt="">
													</a>
												</li>
												<li>
													<a data-fancybox="gallery" href="assets/img/destination/des-9.jpg">
														<img src="assets/img/destination/des-9.jpg" class="img-responsive" alt="">
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						
						</div>
					</div>
				
					<!-- Sidebar Start -->
					<div class="col-md-4 col-sm-12">
						
						<!-- Tourist Overview -->
						<div class="tr-single-box">
							<div class="tr-single-header">
								<h4>Adam G. Gilworm<sup class="cl-success">Canada Tour</sup></h4>
							</div>
							
							<div class="tr-single-body">
								<ul class="extra-service half">
									<li>
										<div class="icon-box-icon-block">
											<a href="#">
												<div class="icon-box-round">
													<i class="ti-user"></i>
												</div>
												<div class="icon-box-text">
													5 Person
												</div>
											</a>
										</div>
									</li>
									
									<li>
										<div class="icon-box-icon-block">
											<a href="#">
												<div class="icon-box-round">
													<i class="ti-timer"></i>
												</div>
												<div class="icon-box-text">
													For 7 Days
												</div>
											</a>
										</div>
									</li>
									
									<li>
										<div class="icon-box-icon-block">
											<a href="#">
												<div class="icon-box-round">
													<i class="ti-eye"></i>
												</div>
												<div class="icon-box-text">
													785 View
												</div>
											</a>
										</div>
									</li>
									
									<li>
										<div class="icon-box-icon-block">
											<a href="#">
												<div class="icon-box-round">
													<i class="ti-share"></i>
												</div>
												<div class="icon-box-text">
													110 Share
												</div>
											</a>
										</div>
									</li>
									
									<li>
										<div class="icon-box-icon-block">
											<a href="#">
												<div class="icon-box-round">
													<i class="ti-comment-alt"></i>
												</div>
												<div class="icon-box-text">
													22 comments
												</div>
											</a>
										</div>
									</li>
									
									<li>
										<div class="icon-box-icon-block">
											<a href="#">
												<div class="icon-box-round">
													<i class="ti-heart"></i>
												</div>
												<div class="icon-box-text">
													20 Likes
												</div>
											</a>
										</div>
									</li>
									
								</ul>
							</div>
							
						</div>
						
						<!-- overview & booking Form -->
						<div class="tr-single-box">
							<div class="tr-single-header">
								<div class="entry-meta">
									<div class="meta-item meta-comment fl-right">
										<div class="view-box">
											<div class="fl-right">
												<h4 class="font-20"><span class="theme-cl font-20">$</span>216<sub>/Per Persion</sub></h4>
											</div>
										</div>
									</div>
									<div class="meta-item meta-author">
										<div class="hotel-review entry-location">
											<span class="review-status bg-success"><i class="ti-check"></i></span>
											<h6><span class="cl-success font-bold">Good</span>1362 Review</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="tr-single-body">
								<form class="book-form">
								
									<div class="row">
										<div class="col-xs-12">
											<div class="form-group">
												<label>Check In</label>
												<input type="text" name="checkin" id="checkin" class="form-control" value="Check in">
											</div>
										</div>
										<div class="col-xs-12">
											<div class="form-group">
												<label>Check Out</label>
												<input type="text" name="checkout" id="checkout" class="form-control" value="Check out">
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Adult</label>
												<input type="number" name="adult" value="1" class="form-control">
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Children</label>
												<input type="number" name="children" value="0" class="form-control">
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Room</label>
												<div class="sl-side">
													<select class="wide form-control">
														<option data-display="Room">1</option>
														<option value="1">2</option>
														<option value="2">3</option>
														<option value="3">4</option>
														<option value="4">5</option>
														<option value="4">5</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Night</label>
												<div class="sl-side">
													<select class="wide form-control">
														<option data-display="Night">1</option>
														<option value="1">2</option>
														<option value="2">3</option>
														<option value="3">4</option>
														<option value="4">5</option>
														<option value="4">5</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-xs-12">
											<button type="button" class="btn btn-default full-width text-left" data-toggle="collapse" data-target="#extra-service">Choose Extra Amenities<i class="ti-settings fl-right mrg-top-5"></i></button>
											<div id="extra-service" class="collapse">
												<div class="extra-features">
													<ul class="extra-service half">
													
														<li>
															<span class="custom-checkbox">
																<input type="checkbox" id="1">
																<label for="1"></label>
															</span>
															Satellite TV
														</li>
														
														<li>
															<span class="custom-checkbox">
																<input type="checkbox" id="2">
																<label for="2"></label>
															</span>
															Coffeemaker
														</li>
														
														<li>
															<span class="custom-checkbox">
																<input type="checkbox" id="3">
																<label for="3"></label>
															</span>
															Luxury Bedding
														</li>
														
														<li>
															<span class="custom-checkbox">
																<input type="checkbox" id="4">
																<label for="4"></label>
															</span>
															Swimming Pool
														</li>
														
														<li>
															<span class="custom-checkbox">
																<input type="checkbox" id="5">
																<label for="5"></label>
															</span>
															Free Parking
														</li>
														
														<li>
															<span class="custom-checkbox">
																<input type="checkbox" id="6">
																<label for="6"></label>
															</span>
															Free Wifi
														</li>
														
														<li>
															<span class="custom-checkbox">
																<input type="checkbox" id="7">
																<label for="7"></label>
															</span>
															Pets Allow
														</li>
														
														<li>
															<span class="custom-checkbox">
																<input type="checkbox" id="8">
																<label for="8"></label>
															</span>
															Elevator
														</li>
														
														<li>
															<span class="custom-checkbox">
																<input type="checkbox" id="9">
																<label for="9"></label>
															</span>
															Spa/Sauna 
														</li>
														
														<li>
															<span class="custom-checkbox">
																<input type="checkbox" id="11">
																<label for="11"></label>
															</span>
															Security cameras 
														</li>
														
													</ul>
												</div>
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-xs-12 mrg-top-15">
											<a href="#" class="btn btn-arrow theme-btn full-width">Book now</a>		
										</div>
									</div>
									
								</form>
							</div>
						</div>
						
						<!-- Share this -->
						<div class="tr-single-box">
							<div class="tr-single-header">
								<h4>Share this</h4>
							</div>
							
							<div class="tr-single-body">
								<ul class="extra-service half">
									<li>
										<div class="icon-box-icon-block">
											<a href="#">
												<div class="icon-box-round">
													<i class="fa fa-facebook"></i>
												</div>
												<div class="icon-box-text">
													Facebook
												</div>
											</a>
										</div>
									</li>
									
									<li>
										<div class="icon-box-icon-block">
											<a href="#">
												<div class="icon-box-round">
													<i class="fa fa-google-plus"></i>
												</div>
												<div class="icon-box-text">
													Google plus
												</div>
											</a>
										</div>
									</li>
									
									<li>
										<div class="icon-box-icon-block">
											<a href="#">
												<div class="icon-box-round">
													<i class="fa fa-twitter"></i>
												</div>
												<div class="icon-box-text">
													Twitter
												</div>
											</a>
										</div>
									</li>
									
									<li>
										<div class="icon-box-icon-block">
											<a href="#">
												<div class="icon-box-round">
													<i class="fa fa-linkedin"></i>
												</div>
												<div class="icon-box-text">
													LinkedIn
												</div>
											</a>
										</div>
									</li>
									
									<li>
										<div class="icon-box-icon-block">
											<a href="#">
												<div class="icon-box-round">
													<i class="fa fa-instagram"></i>
												</div>
												<div class="icon-box-text">
													Instagram
												</div>
											</a>
										</div>
									</li>
									
									<li>
										<div class="icon-box-icon-block">
											<a href="#">
												<div class="icon-box-round">
													<i class="fa fa-pinterest"></i>
												</div>
												<div class="icon-box-text">
													Pinterest
												</div>
											</a>
										</div>
									</li>
									
								</ul>
							</div>
							
						</div>
						
					</div>
					<!-- /col-md-4 -->
				</div>
			</div>
		</section>
		<!-- ============== Tour Detail ====================== -->	
		
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