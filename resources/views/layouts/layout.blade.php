<!DOCTYPE html>
<html lang="en">
	
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agro Tour</title>

    <!-- Plugins CSS -->
	<link rel="stylesheet" href="assets/plugins/css/plugins.css">	
    
    <!-- Custom style -->
    <link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/responsiveness.css" rel="stylesheet"><link id="jssDefault" rel="stylesheet" href="assets/css/skins/default.css">
    
	</head>
	<body>

		
		<!-- ======================= Start Navigation ===================== -->
		<nav class="navbar navbar-default navbar-mobile navbar-fixed light bootsnav">
			<div class="container">
			
				<!-- Start Logo Header Navigation -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="/">
						<img src="assets/img/logo.png" class="logo logo-display" alt="">
						<img src="assets/img/logo.png" class="logo logo-scrolled" alt="">
					</a>

				</div>
				<!-- End Logo Header Navigation -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-menu">
				
					<ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
					
						{{-- <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
							<ul class="dropdown-menu animated fadeOutUp">
								<li><a href="index">Home 1</a></li>
								<li><a href="home-2.html">Home 2</a></li>
								<li><a href="home-3.html">Home 3</a></li>
								<li><a href="home-4.html">Home 4</a></li>
								<li><a href="home-5.html">Home 5</a></li>
							</ul>
						</li> --}}
					
						<li class="dropdown megamenu-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Brows</a>
							<ul class="dropdown-menu megamenu-content" role="menu">
								<li>
									<div class="row">
										<div class="col-menu col-md-3">
											<h6 class="title">Destinations</h6>
											<div class="content">
												<ul class="menu-col">
													<li><a href="destination-grid">Destination Grid</a></li>
													<li><a href="destination-list">Destination List</a></li>
													<li><a href="destination-grid-slider">Destination Grid Sidebar</a></li>
													<li><a href="destination-list-slider">Destination List Sidebar</a></li>
													<li><a href="destination-detail">Destination Detail</a></li>
												</ul>
											</div>
										</div><!-- end col-3 -->
										{{-- <div class="col-menu col-md-3">
											<h6 class="title">Tours</h6>
											<div class="content">
												<ul class="menu-col">
													<li><a href="tour-grid.html">Tour Grid</a></li>
													<li><a href="tour-list.html">Tour List</a></li>
													<li><a href="tour-grid-sidebar.html">Tour Grid Sidebar</a></li>
													<li><a href="tour-list-sidebar.html">tour List Sidebar</a></li>
													<li><a href="tour-detail.html">Tour Detail</a></li>
												</ul>
											</div>
										</div><!-- end col-3 -->
										<div class="col-menu col-md-3">
											<h6 class="title">Hotels</h6>
											<div class="content">
												<ul class="menu-col">
													<li><a href="hotel-grid.html">Hotel Grid</a></li>
													<li><a href="hotel-list.html">Hotel List</a></li>
													<li><a href="hotel-grid-sidebar.html">Hotel Grid Sidebar</a></li>
													<li><a href="hotel-list-sidebar.html">Hotel List Sidebar</a></li>
													<li><a href="hotel-detail.html">Hotel Detail</a></li>
												</ul>
											</div>
										</div>    
										<div class="col-menu col-md-3">
											<h6 class="title">Restaurants</h6>
											<div class="content">
												<ul class="menu-col">
													<li><a href="restaurant-grid.html">Restaurant Grid</a></li>
													<li><a href="restaurant-list.html">Restaurant List</a></li>
													<li><a href="restaurant-grid-sidebar.html">Restaurant Grid Sidebar</a></li>
													<li><a href="restaurant-list-sidebar.html">Restaurant List Sidebar</a></li>
													<li><a href="restaurant-detail.html">Restaurant Detail</a></li>
												</ul>
											</div>
										</div><!-- end col-3 -->
									</div><!-- end row -->
								</li>
							</ul>
						</li>
						 --}}
						<li>
							<a href="hire-guider">Find Guide</a>
						</li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Extra</a>
							<ul class="dropdown-menu animated fadeOutUp">
								<li><a href="cart.html">Add To Cart</a></li>
								<li><a href="payment-methode.html">Paayment Methode</a></li>
								<li><a href="success-page.html">Success Page</a></li>
								<li><a href="coming-soon.html">Coming Soon</a></li>
								<li><a href="about-us.html">About Us</a></li>
								<li><a href="pricing.html">Pricing</a></li>
								<li><a href="services.html">Services</a></li>
								<li class="dropdown"><a href="#">View More</a>
									<ul class="dropdown-menu">
										<li><a href="blog.html">Blog</a></li>
										<li><a href="faqs.html">FAQs</a></li>
										<li><a href="login.html">LogIn</a></li>
										<li><a href="signup.html">SignUp</a></li>
										<li><a href="contact.html">Contact</a></li>
										<li><a href="icons.html">icons</a></li>
										<li><a href="404.html">404</a></li>
									</ul>
								</li>
							</ul>
						</li>
						
						{{-- <li>
							<a href="dashboard.html">Dashboard</a>
						</li> --}}
						
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li class="br-right"><a href="javascript:void(0)"  data-toggle="modal" data-target="#signin"><i class="login-icon ti-user"></i>Login</a></li>
						<li class="sign-up"><a class="btn-signup red-btn" href="tour-grid-sidebar.html"><span class="ti-briefcase"></span>Booking Toor</a></li> 
					</ul>
						
				</div>
				<!-- /.navbar-collapse -->
			</div>  
		</nav>
		<!-- ======================= End Navigation ===================== -->

        @yield('content')
        
		<footer class="footer dark-bg">
			<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="copyright text-center">
						<p><a target="_blank" href="">Ago Tour Class of 2023</a></p>
					</div>
				</div>
			</div>
			
		</div>
	</footer>

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
	<!-- /Switcher -->

	<!-- =================== START JAVASCRIPT ================== -->
	<script src="assets/plugins/js/jquery.min.js"></script>
	<script src="assets/plugins/js/bootstrap.min.js"></script>
	<script src="assets/plugins/js/viewportchecker.js"></script>
	<script src="assets/plugins/js/bootsnav.js"></script>
	<script src="assets/plugins/js/slick.min.js"></script>
	<script src="assets/plugins/js/jquery.nice-select.min.js"></script>
	<script src="assets/plugins/js/jquery.fancybox.min.js"></script>
	<script src="assets/plugins/js/jquery.downCount.js"></script>
	<script src="assets/plugins/js/freshslider.1.0.0.js"></script>
	<script src="assets/plugins/js/moment.min.js"></script>
	<script src="assets/plugins/js/daterangepicker.js"></script>
	<script src="assets/plugins/js/wysihtml5-0.3.0.js"></script>
	<script src="assets/plugins/js/bootstrap-wysihtml5.js"></script>
	<script src="http://maps.google.com/maps/api/js?key="></script>
	<script src="assets/plugins/js/markerclusterer.js"></script>
	<script src="assets/js/map.js"></script>
	
	<!-- Dashboard Js -->
	<script src="assets/plugins/js/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/js/jquery.metisMenu.js"></script>
	<script src="assets/plugins/js/jquery.easing.min.js"></script>

	<!-- Custom Js -->
	<script src="assets/js/custom.js"></script>

	<script>
		$('#checkin').daterangepicker({
			"singleDatePicker": true,
			"timePicker": true,
			"startDate": "12/12/2018",
			"endDate": "12/14/2018"
		}, function(start, end, label) {
		  console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
		});
	</script>
	
	<script>
		$('#checkout').daterangepicker({
			"singleDatePicker": true,
			"timePicker": true,
			"startDate": "12/18/2018",
			"endDate": "12/18/2018"
		}, function(start, end, label) {
		  console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
		});
	</script>
	
	<script src="assets/js/jQuery.style.switcher.js"></script>
	<script>
		function openRightMenu() {
			document.getElementById("rightMenu").style.display = "block";
		}
		function closeRightMenu() {
			document.getElementById("rightMenu").style.display = "none";
		}
	</script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#styleOptions').styleSwitcher();
		});

    </body>
</html>