<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Anil z" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Organiq is clean and modern organic foods store template perfect for Organic Farm shop, organic foods, agriculture and niche foods store.">
<meta name="keywords" content="food shop, fresh, modern, organic farm, organic farm shop, organic food, organic shop, agriculture, agritourism, agrotourism, e-commerce, eco, eco products, farm, farming, food, health, organic, organic food, retail, shop, store">

<!-- SITE TITLE -->
<title>Chiswa Store</title>
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="/store/images/favicon.png">
<!-- Animation CSS -->
<link rel="stylesheet" href="/store/css/animate.css">	
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="/store/bootstrap/css/bootstrap.min.css">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Lobster+Two:400,700" rel="stylesheet">  
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet"> 
<!-- Icon Font CSS -->
<link rel="stylesheet" href="/store/css/ionicons.min.css">
<!-- FontAwesome CSS -->
<link rel="stylesheet" href="/store/css/all.min.css">
<!-- Themify Font CSS -->
<link rel="stylesheet" href="/store/css/themify-icons.css">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="/store/owlcarousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="/store/owlcarousel/css/owl.theme.css">
<link rel="stylesheet" href="/store/owlcarousel/css/owl.theme.default.min.css">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="/store/css/magnific-popup.css">
<!-- jquery-ui CSS -->
<link rel="stylesheet" href="/store/css/jquery-ui.css">
<!-- Style CSS -->
<link rel="stylesheet" href="/store/css/style.css">
<link rel="stylesheet" href="/store/css/responsive.css">
<link rel="stylesheet" id="layoutstyle" href="/store/color/theme-default.css">

</head>

<body>

<!-- LOADER -->
<div id="preloader">
    <div class="line-scale">
    	<div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</div>
<!-- END LOADER --> 

<!-- START HEADER -->
<header class="header_wrap dark_skin main_menu_uppercase">
    <div class="top-header bg_gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <ul class="contact_detail border_list list_none text-center text-md-left">
                        <li><a href="tel:+263772274702"><i class="ti-mobile"></i> <span>+263 772 274 702</span></a></li>
                        <li><a href="mailto:sales@chiswamusango.com"><i class="ti-email"></i> <span>sales@chiswamusango.com</span></a></li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <ul class="header_list border_list list_none header_dropdown text-center text-md-right">
                        <li class="dropdown">
                          <a class="dropdown-toggle" href="#" data-toggle="dropdown">My Account</a>
                          <div class="dropdown-menu shadow dropdown-menu-right">
                            <ul>
                                <li><a class="dropdown-item" href="{{ route('myaccount') }}">My account</a></li>
                                <li><a class="dropdown-item" href="{{ route('shop.checkout')}}">Checkout</a></li>
                            </ul>
                          </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg"> 
             <a class="navbar-brand" href="{{ route('shop.index')}}">
                <img class="logo_light" src="/store/images/chiswastore.png" alt="logo" />
                <img class="logo_dark" src="/store/images/chiswastore.png" alt="logo" />
                <img class="logo_default" src="/store/images/chiswastore.png" alt="logo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    
                    <li>
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav attr-nav align-items-center">
                <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="ion-ios-search-strong"></i></a>
                    <div class="search-overlay">
                        <div class="search_wrap">
                            <form>
                                <div class="rounded_input">
                                    <input type="text" placeholder="Search" class="form-control" id="search_input">
                                </div>
                                <button type="submit" class="search_icon"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </li>
                <li class="dropdown cart_wrap">
                    <a class="nav-link" href="#" data-toggle="dropdown"><i class="ion-bag"></i><span class="cart_count">2</span></a>
                        <div class="cart_box dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="/store/images/cart_thamb1.jpg" alt="cart_thumb1">Fresh Organic Strawberry</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span>78.00</span></span>
                                </li>
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="/store/images/cart_thamb2.jpg" alt="cart_thumb2">Fresh Organic Grapes</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span>81.00</span></span>
                                </li>
                            </ul>
                        <div class="cart_footer">
                            <p class="cart_total">Total: <span class="cart_amount"> <span class="price_symbole">$</span>159.00</span></p>
                            <p class="cart_buttons"><a href="cart.html" class="btn btn-default btn-radius view-cart">View Cart</a><a href="checkout.html" class="btn btn-dark btn-radius checkout">Checkout</a></p>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!-- END HEADER --> 

<!-- START SECTION BANNER -->
<section class="bg_light_yellow breadcrumb_section background_bg bg_fixed bg_size_contain" data-img-src="/store/images/breadcrumb_bg.png">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-sm-12 text-center">
            	<div class="page-title">
            		<h1>Chiswa Grocery and Sports Bar</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->

@yield('content')

<!-- END SECTION SHOP -->

<!-- START FOOTER -->
<footer class="bg_gray">
	<div class="top_footer small_pt small_pb">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                	<div class="footer_logo">
                       	<a href="{{ route('shop.index')}}"><img alt="logo" src="/store/images/chiswastore.png"></a>
                    </div>
                    <div class="footer_desc">
                    	<p>Chiswamusango store is a family owned comapny located at Gweshe Business Centre in Glendale Chisweshe. Our objective is to provide world class customer service</p>
                    </div>
                    <ul class="contact_info list_none">
                    	<li>
                            <span class="ti-mobile"></span>
                            <a href="tel:+263772274702">+263 772 274 702</a>
                        </li>
                        <li>
                            <span class="ti-email"></span>
                            <a href="mailto:sales@chiswamusango.com">sales@chiswamusango.com</a>
                        </li>
                        <li>
                            <span class="ti-location-pin"></span>
                            <address>Gweshe Business Centre Glendale, Chiweshe</address>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                	<h5 class="widget_title">Information</h5>
                    <ul class="list_none widget_links">
                    	<li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Secure Payment</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Top Sellers</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Our Sitemap</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                	<h5 class="widget_title">Customer Support</h5>
                    <ul class="list_none widget_links">
                    	<li><a href="#">My Account</a></li>
                        <li><a href="#">Shopping Cart</a></li>
                        <li><a href="#">Addresses</a></li>
                        <li><a href="#">Discount</a></li>
                        <li><a href="#">Orders History</a></li>
                        <li><a href="#">Order Tracking</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="middle_footer">
    	<div class="container">
        	<div class="row">
            	<div class="col-12">
                	<div class="shopping_info">
                        <div class="row justify-content-center">
                            <div class="col-md-4">	
                                <div class="icon_box icon_box_style2">
                                    <div class="box_icon">
                                        <i class="fas fa-truck"></i>
                                    </div>
                                    <div class="intro_desc">
                                    	<h5>Free Delivery</h5>
                                        <p>We deliver free of charge to all locations in Harare.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">	
                                <div class="icon_box icon_box_style2">
                                    <div class="box_icon">
                                        <i class="fas fa-dollar-sign"></i>
                                    </div>
                                    <div class="intro_desc">
                                    	<h5>30 Day Returns Guarantee</h5>
                                        <p>We have 100% money refund policy if you not with our service.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer">
    	<div class="container">
        	<div class="row align-items-center">
            	<div class="col-lg-4">
                    <p class="copyright m-lg-0 text-center">Copyright © 2021 All Rights Reserved </p>
                </div>
                <div class="col-lg-4 order-lg-first">
                    <ul class="list_none footer_payment text-center text-lg-left">
                        <li><a href="#"><img src="/store/images/visa.png" alt="visa"/></a></li>
                        <li><a href="#"><img src="/store/images/discover.png" alt="discover"/></a></li>
                        <li><a href="#"><img src="/store/images/master_card.png" alt="master_card"/></a></li>
                        <li><a href="#"><img src="/store/images/paypal.png" alt="paypal"/></a></li>
                        <li><a href="#"><img src="/store/images/amarican_express.png" alt="amarican_express"/></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="overlap_shape">
        <div class="ol_shape21">
            <div class="animation">
                <img data-parallax='{"y": 20, "smoothness": 20}' src="/store/images/shape36.png" alt="shape36"/>
            </div>
        </div>
        <div class="ol_shape22">
            <div class="animation">
                <img data-parallax='{"y": 20, "smoothness": 20}' src="/store/images/shape37.png" alt="shape37"/>
            </div>
        </div>
        <div class="ol_shape23">
            <div class="animation">
                <img data-parallax='{"y": 20, "smoothness": 20}' src="/store/images/shape38.png" alt="shape38"/>
            </div>
        </div>
        <div class="ol_shape24">
            <div class="animation">
                <img data-parallax='{"y": 20, "smoothness": 20}' src="/store/images/shape39.png" alt="shape39"/>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a> 

<!-- Latest jQuery --> 
<script src="/store/js/jquery-1.12.4.min.js"></script> 
<!-- jquery-ui --> 
<script src="/store/js/jquery-ui.js"></script>
<!-- popper min js --> 
<script src="/store/js/popper.min.js"></script>
<!-- Latest compiled and minified Bootstrap --> 
<script src="/store/bootstrap/js/bootstrap.min.js"></script> 
<!-- owl-carousel min js  --> 
<script src="/store/owlcarousel/js/owl.carousel.min.js"></script> 
<!-- magnific-popup min js  --> 
<script src="/store/js/magnific-popup.min.js"></script> 
<!-- waypoints min js  --> 
<script src="/store/js/waypoints.min.js"></script> 
<!-- parallax js  --> 
<script src="/store/js/parallax.js"></script> 
<!-- jquery dd js  --> 
<script src="/store/js/jquery.dd.min.js"></script>
<!-- countdown js  --> 
<script src="/store/js/jquery.countdown.min.js"></script> 
<!-- jquery.counterup.min js --> 
<script src="/store/js/jquery.counterup.min.js"></script>
<!-- jquery.parallax-scroll js -->
<script src="/store/js/jquery.parallax-scroll.js"></script>
<!-- elevatezoom js -->
<script src='/store/js/jquery.elevatezoom.js'></script>
<!-- fit video  -->
<script src="/store/js/jquery.fitvids.js"></script>
<!-- imagesloaded js --> 
<script src="/store/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope min js --> 
<script src="/store/js/isotope.min.js"></script>
<!-- cookie js -->
<script src="/store/js/js.cookie.js"></script>
<!-- scripts js --> 
<script src="/store/js/scripts.js"></script>

</body>
</html>