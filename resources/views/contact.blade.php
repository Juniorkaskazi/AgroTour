
@extends('layouts.layout')

@section('content')
	
    
    <!-- ======================= Start Page Title ===================== -->
    <div class="page-title image-title" style="background-image:url(assets/img/banner.jpg);">
        <div class="container">
            <div class="page-title-wrap">
            <h2>Say Hello</h2>
            <p><a href="#" class="theme-cl">Home</a> | <span>Say Hello</span></p>
            </div>
        </div>
    </div>
    <!-- ======================= End Page Title ===================== -->
    
    <!-- =========== Start All Hotel In Grid View =================== -->
    <section class="gray-bg">
        <div class="container">
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="form-box">
                        <i class="c-icon ti-email theme-cl"></i>
                        <div class="c-detail">
                            <strong>Email On:</strong>
                            <p>support@travelizm.com</p>
                        </div>
                    </div>
                    
                    <div class="form-box">
                        <i class="c-icon ti-headphone-alt theme-cl"></i>
                        <div class="c-detail">
                            <strong>Call Us:</strong>
                            <p>170 125 457 8547</p>
                        </div>
                    </div>
                    
                    <div class="form-box">
                        <i class="c-icon ti-map-alt theme-cl"></i>
                        <div class="c-detail">
                            <strong>Location:</strong>
                            <p>#210, QCHR7, Near Mirkel Market<br>New York</p>
                        </div>
                    </div>
                    
                </div>
                
                <div class="col-md-7 col-sm-7">
                    <div class="form-box">
                        <form class="c-form">
                        
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Name<sup class="cl-danger">*</sup></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <label>Email<sup class="cl-danger">*</sup></label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Phone<sup class="cl-danger">*</sup></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <label>Subject</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Message</label>
                                    <textarea class="form-control height-150"></textarea>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="button" class="btn theme-btn btn-arrow">Submit Request</button>
                                </div>
                            </div>
                            
                        </form>
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