@extends('layouts.layout')

@section('content')

@if (session('success'))
<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('success') }}
</div>
@elseif(session('failed'))
<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('failed') }}
</div>
@endif
		<!-- ======================= Start Banner ===================== -->
		<section class="page-title-banner" style="background-image:url(assets/img/banner.jpg);">
			<div class="container">
				<div class="row">
					<div class="tr-list-detail">
						<div class="tr-list-thumb">
							 <img src="{{ $farmGuide->getFirstMediaUrl('userImage')}}" class="img-responsive img-circle" alt="" />
						</div>
						<div class="tr-list-info">
							<h4>{{ $farmGuide->name }}</h4>
							<p>{{ $farmDetails->location }}</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ======================= End Banner ===================== -->

		<!-- ======================= Start Detail Header ===================== -->
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
							<button type="button" class="btn theme-btn"><span class="fa fa-paper-plane mrg-r-10"></span><a href="#contacts">Send Message</a></button>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- ======================= End Detail Header ===================== -->

		<!-- ======================= Start Detail ===================== -->
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

												<div class="col-md-6 col-sm-6">
													<div class="list-thumb-box">
														<img src="assets/img/destination/des-6.jpg" class="img-responsive" alt="" />
														<a href="#" class="list-like left"><i class="ti-heart"></i></a>
														<h5>4.8/<sub class="theme-cl">5</sub></h5>
													</div>
												</div>

												<div class="col-md-6 col-sm-6">
													<div class="list-overview-detail">
														<ul class="extra-service">
															<li>
																<div class="icon-box-icon-block">
																	<a href="#">
																		<div class="icon-box-round">
																			<i class=" ti-location-pin"></i>
																		</div>
																		<div class="icon-box-text">
																		{{$farmDetails->location}}
																		</div>
																	</a>
																</div>
															</li>

															<li>
																<div class="icon-box-icon-block">
																	<a href="#">
																		<div class="icon-box-round">
																			<i class="ti-email"></i>
																		</div>
																		<div class="icon-box-text">
																			{{$farmGuide->email}}
																		</div>
																	</a>
																</div>
															</li>

															<li>
																<div class="icon-box-icon-block">
																	<a href="#">
																		<div class="icon-box-round">
																			<i class="ti-headphone-alt"></i>
																		</div>
																		<div class="icon-box-text">
																		{{$farmGuide->phone_no??null}}
																		</div>
																	</a>
																</div>
															</li>

															<li>
																<!-- <div class="icon-box-icon-block">
																	<a href="#">
																		<div class="icon-box-round">
																			<i class="ti-share"></i>
																		</div>
																		<div class="icon-box-text">
																			110 Share
																		</div>
																	</a>
																</div> -->
															</li>

															<li>
																<div class="icon-box-icon-block">
																	<a href="#">
																		<div class="icon-box-round">
																			<i class="ti-comment-alt"></i>
																		</div>
																		<div class="icon-box-text">
																			{{ $farmDetails->review->count() }} comments
																		</div>
																	</a>
																</div>
															</li>

														</ul>
													</div>
												</div>

											</div>
										</div>
									</div>
								</div>

								<!-- Overview -->
								<div class="row">
									<div class="tr-single-box">
										<div class="tr-single-header">
											<h4><i class="fa fa-star-o"></i>Ratting</h4>
										</div>
										<div class="tr-single-body">
											<div class="row">
												<div class="col-sm-4">
													<div id="review_summary">
														<strong>{{ $farmDetails->review->sum('rating')/ 10 }}</strong>
														<em class="cl-success">Superb</em>
														<small>Based on all reviews</small>
													</div>
												</div>
												<div class="col-sm-8">
													<div class="row">
														<div class="col-lg-10 col-9">
															<div class="progress">
																<?php $val = (($farmDetails->review->where('rating', 5)->sum('rating') / $farmDetails->review->sum('rating')) * 100) ?>
																<div class="progress-bar progress-bar-success" role="progressbar" style="width: {{$val}}%" aria-valuenow={{$val}} aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
													</div>
													<!-- /row -->
													<div class="row">
														<div class="col-lg-10 col-9">
															<div class="progress">
																<?php $val = (($farmDetails->review->where('rating', 4)->sum('rating') / $farmDetails->review->sum('rating')) * 100) ?>
																<div class="progress-bar progress-bar-warning" role="progressbar" style="width: {{$val}}%" aria-valuenow={{$val}} aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
													</div>
													<!-- /row -->
													<div class="row">
														<div class="col-lg-10 col-9">
															<div class="progress">
															<?php $val = (($farmDetails->review->where('rating', 3)->sum('rating') / $farmDetails->review->sum('rating')) * 100) ?>
																<div class="progress-bar progress-bar-primary" role="progressbar" style="width: {{$val}}%" aria-valuenow={{$val}} aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
													</div>
													<!-- /row -->
													<div class="row">
														<div class="col-lg-10 col-9">
															<div class="progress">
															<?php $val = (($farmDetails->review->where('rating', 2)->sum('rating') / $farmDetails->review->sum('rating')) * 100) ?>
																<div class="progress-bar progress-bar-danger" role="progressbar" style="width: {{$val}}%" aria-valuenow={{$val}} aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
													</div>
													<!-- /row -->
													<div class="row">
														<div class="col-lg-10 col-9">
															<div class="progress">
															<?php $val = (($farmDetails->review->where('rating', 1)->sum('rating') / $farmDetails->review->sum('rating')) * 100) ?>
																<div class="progress-bar" role="progressbar" style="width: {{$val}}%" aria-valuenow={{$val}} aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
													</div>
													<!-- /row -->
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
											{{ $farmDetails->description }}
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
												@for ($i=0; i<= $farmDetails->amenities->count(); $i++)
													<li>{{$farmDetails->amenities[i]}}</li>
												@endfor
												<!-- <li>Satellite TV</li>
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
												<li>Security cameras </li> -->
											</ul>
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
								<h4>Bali, Indonesia<sup class="cl-success">NewYork</sup></h4>
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
													$120/person
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
													May - July
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
								<form class="book-form" method='POST' action='{{ url('booking') }}'>
                                    @csrf
									<div class="row">
										<div class="col-xs-12">
											<div class="form-group">
												<label>User Name</label>
												<input type="text" name="user_name" id="userName" class="form-control" value="" placeholder="user name">
											</div>
										</div>
										<div class="col-xs-12">
											<div class="form-group">
												<label>Email</label>
												<input type="email" name="email" id="email" class="form-control" value="" placeholder="email">
											</div>
										</div>
										<div class="col-xs-12">
											<div class="form-group">
												<label>Phone</label>
												<input type="tel" name="phone_no" id="phone_no" class="form-control" value="" placeholder="phone">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<div class="form-group">
												<label>Check In</label>
												<input type="date" name="check_in" id="check_in" class="form-control" value="" placeholder="check in">
											</div>
										</div>
										<div class="col-xs-12">
											<div class="form-group">
												<label>Check Out</label>
												<input type="date" name="check_out" id="check_out" class="form-control" value="" placeholder="check out">
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
													<select class="wide form-control" name='room'>
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
													<select class="wide form-control" name="name">
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
																<input type="checkbox" id="1" name="amenities[]" value="Satellite TV">
																<label for="1"></label>
															</span>
															Satellite TV
														</li>

														<li>
															<span class="custom-checkbox">
																<input type="checkbox" id="2" name="amenities[]" value="Coffeemaker">
																<label for="2"></label>
															</span>
															Coffeemaker
														</li>

														<li>
															<span class="custom-checkbox">
																<input type="checkbox" id="3" name="amenities[]" value="Luxury Bedding">
																<label for="3"></label>
															</span>
															Luxury Bedding
														</li>

														<li>
															<span class="custom-checkbox">
																<input type="checkbox" id="4" name="amenities[]" value="Swimming Pool">
																<label for="4"></label>
															</span>
															Swimming Pool
														</li>

														<li>
															<span class="custom-checkbox">
																<input type="checkbox" id="5" name="amenities[]" value="Free Parking">
																<label for="5"></label>
															</span>
															Free Parking
														</li>

														<li>
															<span class="custom-checkbox">
																<input type="checkbox" id="6" name="amenities[]" value="Free Wifi">
																<label for="6"></label>
															</span>
															Free Wifi
														</li>

														<li>
															<span class="custom-checkbox">
																<input type="checkbox" id="7" name="amenities[]" value="Pets Allow">
																<label for="7"></label>
															</span>
															Pets Allow
														</li>

														<li>
															<span class="custom-checkbox">
																<input type="checkbox" id="8" name="amenities[]" value="Elevator">
																<label for="8"></label>
															</span>
															Elevator
														</li>

														<li>
															<span class="custom-checkbox">
																<input type="checkbox" id="9" name="amenities[]" value="Spa/Sauna">
																<label for="9"></label>
															</span>
															Spa/Sauna
														</li>

														<li>
															<span class="custom-checkbox">
																<input type="checkbox" id="11" name="amenities[]" value="Security cameras">
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
                                            <button type="submit" class="btn btn-arrow theme-btn">Book now</button>
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

						<!-- Share this -->
						<div class="tr-single-box">
							<div class="tr-single-header">
								<h4>Similar Item</h4>
							</div>

							<div class="tr-single-body">
								<div class="single-side-slide">
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
								</div>
							</div>

						</div>

					</div>
					<!-- /col-md-4 -->
				</div>
			</div>
		</section>
		<!-- ======================= End Detail ===================== -->

		<!-- ============== Before Footer ====================== -->
		<section class="before-footer bt-1 bb-1">
			<div class="container-fluid padd-0 full-width" id="contacts">

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
