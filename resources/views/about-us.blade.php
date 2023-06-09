@extends('layouts.layout')	

@section('content')
   
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
            
                <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
                
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                        <ul class="dropdown-menu animated fadeOutUp">
                            <li><a href="index-2.html">Home 1</a></li>
                            <li><a href="home-2.html">Home 2</a></li>
                            <li><a href="home-3.html">Home 3</a></li>
                            <li><a href="home-4.html">Home 4</a></li>
                            <li><a href="home-5.html">Home 5</a></li>
                        </ul>
                    </li>
                
                    <li class="dropdown megamenu-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Brows</a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Destinations</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="destination-grid.html">Destination Grid</a></li>
                                                <li><a href="destination-list.html">Destination List</a></li>
                                                <li><a href="destination-grid-sidebar.html">Destination Grid Sidebar</a></li>
                                                <li><a href="destination-list-sidebar.html">Destination List Sidebar</a></li>
                                                <li><a href="destination-detail.html">Destination Detail</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
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
                    
                    <li>
                        <a href="hire-guider.html">Find Guide</a>
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
                    
                    <li>
                        <a href="dashboard.html">Dashboard</a>
                    </li>
                    
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
    
    <!-- ======================= Start Page Title ===================== -->
    <div class="page-title image-title" style="background-image:url(assets/img/about.jpg);">
        <div class="container">
            <div class="page-title-wrap">
            <h2>Who We Are?</h2>
            <p><a href="#" class="theme-cl">Home</a> | <span>About Us</span></p>
            </div>
        </div>
    </div>
    <!-- ======================= End Page Title ===================== -->
    
    <!-- =========== Who We Are =================== -->
    <section>
        <div class="container">
        
            <div class="row">
            
                <div class="col-md-6 col-sm-12">
                    <div class="ab-detail">
                        <h2>Who We Are?</h2>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-12">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="info-module">
                                <i class="ti-help-alt cl-success"></i>
                                <h4 class="infobox_title">24x7 Support</h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="info-module">
                                <i class="ti-world cl-success"></i>
                                <h4 class="infobox_title">150+ Countries</h4>
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                    
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="info-module">
                                <i class="ti-headphone-alt cl-success"></i>
                                <h4 class="infobox_title">740+ Branches</h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="info-module">
                                <i class="ti-user cl-success"></i>
                                <h4 class="infobox_title">10,000+ Member</h4>
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                
            </div>
            
        </div>
    </section>
    <!-- =========== End Who We are =================== -->
    
    <!-- =========== Start Testimonial =================== -->
    <section class="half-bg">
        <div class="container">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="heading light">
                        <span class="cl-white">Our Testimonials</span>
                        <h1>What People Says</h1>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="testimonial-carousel">
                    
                    <!-- Single Testimonial -->
                    <div class="testimonial-carousel-box">
                        <div class="testimonial-caption">
                            <i class="ti-quote-right"></i>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                            <div class="testimonial-author">
                                <img src="assets/img/avatar4.jpg" class="img-responsive img-circle" alt="" />
                                <h4>Adam Cristwal</h4>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Single Testimonial -->
                    <div class="testimonial-carousel-box">
                        <div class="testimonial-caption">
                            <i class="ti-quote-right"></i>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                            <div class="testimonial-author">
                                <img src="assets/img/avatar4.jpg" class="img-responsive img-circle" alt="" />
                                <h4>Adam Cristwal</h4>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Single Testimonial -->
                    <div class="testimonial-carousel-box">
                        <div class="testimonial-caption">
                            <i class="ti-quote-right"></i>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                            <div class="testimonial-author">
                                <img src="assets/img/avatar4.jpg" class="img-responsive img-circle" alt="" />
                                <h4>Adam Cristwal</h4>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Single Testimonial -->
                    <div class="testimonial-carousel-box">
                        <div class="testimonial-caption">
                            <i class="ti-quote-right"></i>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                            <div class="testimonial-author">
                                <img src="assets/img/avatar4.jpg" class="img-responsive img-circle" alt="" />
                                <h4>Adam Cristwal</h4>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- =========== End Testimonial =================== -->
    
    <!-- ================= Features ===================== -->
    <section>
        <div class="container">
        
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <span class="theme-cl">New Features</span>
                        <h1>Latest Features</h1>
                    </div>
                </div>
            </div>
            
            <div class="row">
                
                <div class="col-md-3 col-sm-6">
                    <div class="info-features">
                        <i class="ti-headphone-alt info-ibox bg-success-light"></i>
                        <h4 class="infobox_title">24x7 Support</h4>
                        <div class="infobox_content">Cryptronick caters to clients who require an intensive.</div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="info-features">
                        <i class="ti-rocket info-ibox bg-success-light"></i>
                        <h4 class="infobox_title">Fast & Protect Services</h4>
                        <div class="infobox_content">Cryptronick caters to clients who require an intensive.</div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="info-features">
                        <i class="ti-dashboard info-ibox bg-success-light"></i>
                        <h4 class="infobox_title">Creative Dashboard</h4>
                        <div class="infobox_content">Cryptronick caters to clients who require an intensive.</div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="info-features">
                        <i class="ti-gift info-ibox bg-success-light"></i>
                        <h4 class="infobox_title">Winner Announced</h4>
                        <div class="infobox_content">Cryptronick caters to clients who require an intensive.</div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- ===================== End fetures ===================== -->
    
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