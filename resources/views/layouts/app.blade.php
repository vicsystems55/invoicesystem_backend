<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Plug & Play Eccomerce | vicSystems</title>
<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">

<!-- Revolution Slider -->
<link href="assets/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="assets/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="assets/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->

<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">

	<!-- Preloader -->
    <div class="preloader"></div>
	<!-- End Preloader -->

 	<!-- Header Style Three -->
    <header class="main-header header-style-three">

		<!-- Header Lower -->
        <div class="header-lower">
        	<div class="auto-container">
            	<div class="inner-container clearfix">
					<!-- Logo Box -->
					<div class="pull-left logo-box">
						<div class="logo"><a href="index.html"><img src="assets/images/logo-4.png" alt="" title=""></a></div>
					</div>

					<!-- Nav Outer -->
					<div class="nav-outer clearfix">
						<!-- Mobile Navigation Toggler -->
						<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<!-- Toggle Button -->
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li class="current "><a href="#">Home</a>

									</li>


{{--
									<li class=""><a href="#">Blog</a>

									</li> --}}
									<li><a href="/contact">Contact</a></li>
								</ul>
							</div>
							<!-- Search Btn -->
							<div class="search-box-btn transition-300ms"><span class="icon fa fa-search"></span></div>
						</nav>

						<!-- Main Menu End-->
						<div class="outer-box clearfix">

							<!-- Phone Box -->
							<div class="phone-box">
								<div class="box-inner">
									<span class="icon fa fa-phone"></span>
									<a href="tel:+0123-456-7899"><i>Call :</i> +23(803) 783 5670</a>
								</div>
							</div>
							<!-- End Phone Box -->

							<!-- Language Dropdown -->

							<!-- End Language Dropdown -->

							<!-- Button Box -->
							<div class="button-box">
								<a href="/get-started" class="theme-btn btn-style-two"><span class="txt">Get Started <i class="fa fa-angle-right"></i></span></a>
							</div>
							<!-- End Button Box -->

						</div>
					</div>
				</div>
            </div>
        </div>
        <!-- End Header Lower -->

		<!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" title=""><img src="assets/images/logo-5.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">

                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
					<!-- Main Menu End-->

					<!-- Mobile Navigation Toggler -->
					<div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                </div>
            </div>
        </div><!-- End Sticky Menu -->

		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-small.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>

    @yield('content')


    <footer class="footer-style-two">
    	<div class="auto-container">
        	<!-- Widgets Section -->
            <div class="widgets-section">
            	<div class="row clearfix">

                    <!-- Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">

                        	<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
										<a href="index.html"><img src="assets/images/logo-5.png" alt="" /></a>
									</div>
									<div class="text">Sell fast, sell smart, defeat the competition. <br>Follow our progress below.</div>
									<!-- Subscribe Form -->
									<div class="subscribe-form">
										<form method="post" action="#">
											<div class="form-group">
												<input type="email" name="email" value="" placeholder="Enter Email" required>
												<button type="submit" class="submit-btn"><span class="icon flaticon-right-arrow-2"></span></button>
											</div>
										</form>
									</div>
								</div>
							</div>

							<!-- Footer Column -->


						</div>
					</div>

					<!-- Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">

							<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h5>Quick Links</h5>
									<ul class="nav-list">

										<li><a href="#">Help Center</a></li>
										<li><a href="#">Privacy Policy</a></li>

									</ul>
								</div>
							</div>

							<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget info-widget">
									<h5>Get In Touch</h5>
									<ul class="list-style-one style-two">
										<li><span class="icon flaticon-email"></span> support@vicsystems.com.ng</li>
										<li><span class="icon flaticon-telephone"></span> Call : 234 803 783 5670</li>
										<li><span class="icon flaticon-map"></span>Plot 234, zone 7, Dutse Fct, Abuja Nigeria</li>
									</ul>
									<!-- Social Box -->
									<ul class="social-box">
										<li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
										<li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
										<li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
										<li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>

			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="copyright">&copy; {{\Carbon\Carbon::now()->format('Y')}} <a href="https://vicsystems.com.ng">vicSystems Technologies Ltd..</a> All rights reserved</div>
			</div>

		</div>
	</footer>
	<!-- End Footer Style Two -->

</div>
<!-- End PageWrapper -->

<!-- Search Popup -->
<div class="search-popup">
	<button class="close-search style-two"><span class="flaticon-cancel-1"></span></button>
	<button class="close-search"><span class="flaticon-up-arrow"></span></button>
	<form method="post" action="blog.html">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Revolution Slider -->
<script src="assets/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="assets/plugins/revolution/js/main-slider-script.js"></script>
<!-- For Js Library -->

<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/parallax.min.js"></script>
<script src="assets/js/tilt.jquery.min.js"></script>
<script src="assets/js/jquery.paroller.min.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/validate.js"></script>
<script src="assets/js/nav-tool.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/script.js"></script>

</body>
</html>
