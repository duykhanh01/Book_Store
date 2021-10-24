<!DOCTYPE html>
<html lang="en">
<?php require_once("templates/header.php") ?>

<div class="site-wrapper" id="top">
    <div class="site-header header-3  d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <ul class="header-top-list">

                        <li class="dropdown-trigger language-dropdown"><a href=""><span class="flag-img"><img src="image/icon/eng-flag.png" alt=""></span>en-gb </a><i class="fas fa-chevron-down dropdown-arrow"></i>
                            <ul class="dropdown-box">
                                <li> <a href=""> <span class="flag-img"><img src="image/icon/eng-flag.png" alt=""></span>English</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 flex-lg-right">
                    <ul class="header-top-list">


                        <li class="dropdown-trigger language-dropdown"><a href=""><i class="icons-left fas fa-user"></i>
                                My Account</a><i class="fas fa-chevron-down dropdown-arrow"></i>
                            <ul class="dropdown-box">
                                <li> <a href="">My Account</a></li>
                                <li> <a href="">Order History</a></li>

                            </ul>
                        </li>
                        <li><a href=""><i class="icons-left fas fa-phone"></i> Contact</a>
                        </li>
                        <li><a href=""><i class="icons-left fas fa-share"></i> Checkout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-middle pt--10 pb--10">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <a href="index.php" class="site-brand">
                            <img src="image/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-lg-5">
                        <div class="header-search-block">
                            <input type="text" placeholder="Search entire store here">
                            <button>Search</button>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="main-navigation flex-lg-right">
                            <div class="cart-widget">
                                <div class="login-block">
                                    <a href="login-register.php" class="font-weight-bold">Login</a> <br>
                                    <span>or</span><a href="login-register.php">Register</a>
                                </div>
                                <div class="cart-block">
                                    <div class="cart-total">
                                        <span class="text-number">
                                            1
                                        </span>
                                        <span class="text-item">
                                            Shopping Cart
                                        </span>
                                        <span class="price">

                                            <i class="fas fa-chevron-down"></i>
                                        </span>
                                    </div>
                                    <div class="cart-dropdown-block">
                                        <div class=" single-cart-block ">
                                            <div class="cart-product">
                                                <a href="product-details.php" class="image">
                                                    <img src="image/products/cart-product-1.jpg" alt="">
                                                </a>
                                                <div class="content">
                                                    <h3 class="title"><a href="product-details.php">Kodak PIXPRO
                                                            Astro Zoom AZ421 16 MP</a></h3>
                                                    <p class="price"><span class="qty">1 ×</span> £87.34</p>
                                                    <button class="cross-btn"><i class="fas fa-times"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" single-cart-block ">
                                            <div class="btn-block">
                                                <a href="cart.php" class="btn">View Cart <i class="fas fa-chevron-right"></i></a>
                                                <a href="checkout.php" class="btn btn--primary">Check Out <i class="fas fa-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- @include('menu.htm') -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row align-items-center mb-3">
                    <div class="col-lg-3">
                        <nav class="category-nav">
                            <div>
                                <a href="javascript:void(0)" class="category-trigger"><i class="fa fa-bars"></i>Browse
                                    categories</a>
                                <ul class="category-menu">
                                    <li class="cat-item has-children">
                                        <a href="#">Arts & Photography</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Bags & Cases</a></li>
                                            <li><a href="#">Binoculars & Scopes</a></li>
                                            <li><a href="#">Digital Cameras</a></li>
                                            <li><a href="#">Film Photography</a></li>
                                            <li><a href="#">Lighting & Studio</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item has-children mega-menu"><a href="#">Biographies</a>
                                        <ul class="sub-menu">
                                            <li class="single-block">
                                                <h3 class="title">WHEEL SIMULATORS</h3>
                                                <ul>
                                                    <li><a href="#">Bags & Cases</a></li>
                                                    <li><a href="#">Binoculars & Scopes</a></li>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Film Photography</a></li>
                                                    <li><a href="#">Lighting & Studio</a></li>
                                                </ul>
                                            </li>
                                            <li class="single-block">
                                                <h3 class="title">WHEEL SIMULATORS</h3>
                                                <ul>
                                                    <li><a href="#">Bags & Cases</a></li>
                                                    <li><a href="#">Binoculars & Scopes</a></li>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Film Photography</a></li>
                                                    <li><a href="#">Lighting & Studio</a></li>
                                                </ul>
                                            </li>
                                            <li class="single-block">
                                                <h3 class="title">WHEEL SIMULATORS</h3>
                                                <ul>
                                                    <li><a href="#">Bags & Cases</a></li>
                                                    <li><a href="#">Binoculars & Scopes</a></li>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Film Photography</a></li>
                                                    <li><a href="#">Lighting & Studio</a></li>
                                                </ul>
                                            </li>
                                            <li class="single-block">
                                                <h3 class="title">WHEEL SIMULATORS</h3>
                                                <ul>
                                                    <li><a href="#">Bags & Cases</a></li>
                                                    <li><a href="#">Binoculars & Scopes</a></li>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Film Photography</a></li>
                                                    <li><a href="#">Lighting & Studio</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="cat-item has-children"><a href="#">Business & Money</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Brake Tools</a></li>
                                            <li><a href="">Driveshafts</a></li>
                                            <li><a href="">Emergency Brake</a></li>
                                            <li><a href="">Spools</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item has-children"><a href="#">Calendars</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Brake Tools</a></li>
                                            <li><a href="">Driveshafts</a></li>
                                            <li><a href="">Emergency Brake</a></li>
                                            <li><a href="">Spools</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item has-children"><a href="#">Children's Books</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Brake Tools</a></li>
                                            <li><a href="">Driveshafts</a></li>
                                            <li><a href="">Emergency Brake</a></li>
                                            <li><a href="">Spools</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item has-children"><a href="#">Comics</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Brake Tools</a></li>
                                            <li><a href="">Driveshafts</a></li>
                                            <li><a href="">Emergency Brake</a></li>
                                            <li><a href="">Spools</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item"><a href="#">Perfomance Filters</a></li>
                                    <li class="cat-item has-children"><a href="#">Cookbooks</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Brake Tools</a></li>
                                            <li><a href="">Driveshafts</a></li>
                                            <li><a href="">Emergency Brake</a></li>
                                            <li><a href="">Spools</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item "><a href="#">Accessories</a></li>
                                    <li class="cat-item "><a href="#">Education</a></li>
                                    <li class="cat-item hidden-menu-item"><a href="#">Indoor Living</a></li>
                                    <li class="cat-item"><a href="#" class="js-expand-hidden-menu">More
                                            Categories</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="header-phone ">
                            <div class="icon">
                                <i class="fas fa-headphones-alt"></i>
                            </div>
                            <div class="text">
                                <p>Free Support 24/7</p>
                                <p class="font-weight-bold number">+01-202-555-0181</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="site-mobile-menu">
        <header class="mobile-header d-block d-lg-none pt--10 pb-md--10">
            <div class="container">
                <div class="row align-items-sm-end align-items-center">
                    <div class="col-md-4 col-7">
                        <a href="index.php" class="site-brand">
                            <img src="image/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-5 order-3 order-md-2">
                        <nav class="category-nav   ">
                            <div>
                                <a href="javascript:void(0)" class="category-trigger"><i class="fa fa-bars"></i>Browse
                                    categories</a>
                                <ul class="category-menu">
                                    <li class="cat-item has-children">
                                        <a href="#">Arts & Photography</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Bags & Cases</a></li>
                                            <li><a href="#">Binoculars & Scopes</a></li>
                                            <li><a href="#">Digital Cameras</a></li>
                                            <li><a href="#">Film Photography</a></li>
                                            <li><a href="#">Lighting & Studio</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item has-children mega-menu"><a href="#">Biographies</a>
                                        <ul class="sub-menu">
                                            <li class="single-block">
                                                <h3 class="title">WHEEL SIMULATORS</h3>
                                                <ul>
                                                    <li><a href="#">Bags & Cases</a></li>
                                                    <li><a href="#">Binoculars & Scopes</a></li>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Film Photography</a></li>
                                                    <li><a href="#">Lighting & Studio</a></li>
                                                </ul>
                                            </li>
                                            <li class="single-block">
                                                <h3 class="title">WHEEL SIMULATORS</h3>
                                                <ul>
                                                    <li><a href="#">Bags & Cases</a></li>
                                                    <li><a href="#">Binoculars & Scopes</a></li>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Film Photography</a></li>
                                                    <li><a href="#">Lighting & Studio</a></li>
                                                </ul>
                                            </li>
                                            <li class="single-block">
                                                <h3 class="title">WHEEL SIMULATORS</h3>
                                                <ul>
                                                    <li><a href="#">Bags & Cases</a></li>
                                                    <li><a href="#">Binoculars & Scopes</a></li>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Film Photography</a></li>
                                                    <li><a href="#">Lighting & Studio</a></li>
                                                </ul>
                                            </li>
                                            <li class="single-block">
                                                <h3 class="title">WHEEL SIMULATORS</h3>
                                                <ul>
                                                    <li><a href="#">Bags & Cases</a></li>
                                                    <li><a href="#">Binoculars & Scopes</a></li>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Film Photography</a></li>
                                                    <li><a href="#">Lighting & Studio</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="cat-item has-children"><a href="#">Business & Money</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Brake Tools</a></li>
                                            <li><a href="">Driveshafts</a></li>
                                            <li><a href="">Emergency Brake</a></li>
                                            <li><a href="">Spools</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item has-children"><a href="#">Calendars</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Brake Tools</a></li>
                                            <li><a href="">Driveshafts</a></li>
                                            <li><a href="">Emergency Brake</a></li>
                                            <li><a href="">Spools</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item has-children"><a href="#">Children's Books</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Brake Tools</a></li>
                                            <li><a href="">Driveshafts</a></li>
                                            <li><a href="">Emergency Brake</a></li>
                                            <li><a href="">Spools</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item has-children"><a href="#">Comics</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Brake Tools</a></li>
                                            <li><a href="">Driveshafts</a></li>
                                            <li><a href="">Emergency Brake</a></li>
                                            <li><a href="">Spools</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item"><a href="#">Perfomance Filters</a></li>
                                    <li class="cat-item has-children"><a href="#">Cookbooks</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Brake Tools</a></li>
                                            <li><a href="">Driveshafts</a></li>
                                            <li><a href="">Emergency Brake</a></li>
                                            <li><a href="">Spools</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item "><a href="#">Accessories</a></li>
                                    <li class="cat-item "><a href="#">Education</a></li>
                                    <li class="cat-item hidden-menu-item"><a href="#">Indoor Living</a></li>
                                    <li class="cat-item"><a href="#" class="js-expand-hidden-menu">More
                                            Categories</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-3 col-5  order-md-3 text-right">
                        <div class="mobile-header-btns header-top-widget">
                            <ul class="header-links">
                                <li class="sin-link">
                                    <a href="cart.php" class="cart-link link-icon"><i class="ion-bag"></i></a>
                                </li>
                                <li class="sin-link">
                                    <a href="javascript:" class="link-icon hamburgur-icon off-canvas-btn"><i class="ion-navicon"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Off Canvas Navigation Start-->
        <aside class="off-canvas-wrapper">
            <div class="btn-close-off-canvas">
                <i class="ion-android-close"></i>
            </div>
            <div class="off-canvas-inner">
                <!-- search box start -->
                <div class="search-box offcanvas">
                    <form>
                        <input type="text" placeholder="Search Here">
                        <button class="search-btn"><i class="ion-ios-search-strong"></i></button>
                    </form>
                </div>
                <!-- search box end -->
                <!-- mobile menu start -->
                <div class="mobile-navigation">
                    <!-- mobile menu navigation start -->
                    <nav class="off-canvas-nav">
                        <ul class="mobile-menu main-mobile-menu">
                            <li class="menu-item-has-children">
                                <a href="#">Home</a>
                                <ul class="sub-menu">
                                    <li> <a href="index.php">Home One</a></li>
                                    <li> <a href="index-2.php">Home Two</a></li>
                                    <li> <a href="index-3.php">Home Three</a></li>
                                    <li> <a href="index-4.php">Home Four</a></li>
                                    <li> <a href="index-5.php">Home Five</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">Blog Grid</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.php">Full Widh (Default)</a></li>
                                            <li><a href="blog-left-sidebar.php">left Sidebar</a></li>
                                            <li><a href="blog-right-sidebar.php">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Blog List</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-list.php">Full Widh (Default)</a></li>
                                            <li><a href="blog-list-left-sidebar.php">left Sidebar</a></li>
                                            <li><a href="blog-list-right-sidebar.php">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Blog Details</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-details.php">Image Format (Default)</a></li>
                                            <li><a href="blog-details-gallery.php">Gallery Format</a></li>
                                            <li><a href="blog-details-audio.php">Audio Format</a></li>
                                            <li><a href="blog-details-video.php">Video Format</a></li>
                                            <li><a href="blog-details-left-sidebar.php">left Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Shop</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">Shop Grid</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop-grid.php">Fullwidth</a></li>
                                            <li><a href="shop-grid-left-sidebar.php">left Sidebar</a></li>
                                            <li><a href="shop-grid-right-sidebar.php">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Shop List</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop-list.php">Fullwidth</a></li>
                                            <li><a href="shop-list-left-sidebar.php">left Sidebar</a></li>
                                            <li><a href="shop-list-right-sidebar.php">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Product Details 1</a>
                                        <ul class="sub-menu">
                                            <li><a href="product-details.php">Product Details Page</a></li>
                                            <li><a href="product-details-affiliate.php">Product Details
                                                    Affiliate</a></li>
                                            <li><a href="product-details-group.php">Product Details Group</a></li>
                                            <li><a href="product-details-variable.php">Product Details
                                                    Variables</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Product Details 2</a>
                                        <ul class="sub-menu">
                                            <li><a href="product-details-left-thumbnail.php">left Thumbnail</a>
                                            </li>
                                            <li><a href="product-details-right-thumbnail.php">Right Thumbnail</a>
                                            </li>
                                            <li><a href="product-details-left-gallery.php">Left Gallery</a></li>
                                            <li><a href="product-details-right-gallery.php">Right Gallery</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="cart.php">Cart</a></li>
                                    <li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="compare.php">Compare</a></li>
                                    <li><a href="wishlist.php">Wishlist</a></li>
                                    <li><a href="login-register.php">Login Register</a></li>
                                    <li><a href="my-account.php">My Account</a></li>
                                    <li><a href="order-complete.php">Order Complete</a></li>
                                    <li><a href="faq.php">Faq</a></li>
                                    <li><a href="contact-2.php">contact 02</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->
                <nav class="off-canvas-nav">
                    <ul class="mobile-menu menu-block-2">
                        <li class="menu-item-has-children">
                            <a href="#">Currency - USD $ <i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li> <a href="cart.php">USD $</a></li>
                                <li> <a href="checkout.php">EUR €</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Lang - Eng<i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li>Eng</li>
                                <li>Ban</li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">My Account <i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="">My Account</a></li>
                                <li><a href="">Order History</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="off-canvas-bottom">
                    <div class="contact-list mb--10">
                        <a href="" class="sin-contact"><i class="fas fa-mobile-alt"></i>(12345) 78790220</a>
                        <a href="" class="sin-contact"><i class="fas fa-envelope"></i>examle@handart.com</a>
                    </div>
                    <div class="off-canvas-social">
                        <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="single-icon"><i class="fas fa-rss"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </aside>
        <!--Off Canvas Navigation End-->
    </div>

    <!--=================================
        Hero Area
    ===================================== -->
    <section class="hero-area hero-slider-3">
        <div class="sb-slick-slider" data-slick-setting='{
                                                        "autoplay": true,
                                                        "autoplaySpeed": 8000,
                                                        "slidesToShow": 1,
                                                        "dots":true
                                                        }'>


            <!-- --------------------------------------------- Banner ---------------------------------------------------------------------------------- -->

            <div class="single-slide bg-image  bg-overlay--dark" data-bg="image/bg-images/home-3-slider-1.jpg">
                <div class="container">
                    <div class="home-content text-center">
                        <div class="row justify-content-end">
                            <div class="col-lg-6">
                                <h1>Beautifully Designed</h1>
                                <h2>Cover up front of book and
                                    <br>leave summary
                                </h2>
                                <a href="shop-grid.php" class="btn btn--yellow">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide bg-image  bg-overlay--dark" data-bg="image/bg-images/home-3-slider-2.jpg">
                <div class="container">
                    <div class="home-content pl--30">
                        <div class="row">
                            <div class="col-lg-6">
                                <h1>I Love This Idea!</h1>
                                <h2>Cover up front of book and
                                    <br>leave summary
                                </h2>
                                <a href="shop-grid.php" class="btn btn--yellow">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        Home Category Gallery
    ===================================== -->

    <!--=================================
    ARTS & PHOTOGRAPHY BOOKS
===================================== -->
    <section class="section-margin mt-5">
        <div class="container">
            <div class="section-title section-title--bordered">
                <h2>Sản phẩm HOT</h2>
            </div>
            <div class="product-slider sb-slick-slider slider-border-single-row" data-slick-setting='{
                        "autoplay": true,
                        "autoplaySpeed": 8000,
                        "slidesToShow": 5,
                        "dots":true
                    }' data-slick-responsive='[
                        {"breakpoint":1200, "settings": {"slidesToShow": 4} },
                        {"breakpoint":992, "settings": {"slidesToShow": 3} },
                        {"breakpoint":768, "settings": {"slidesToShow": 2} },
                        {"breakpoint":480, "settings": {"slidesToShow": 1} },
                        {"breakpoint":320, "settings": {"slidesToShow": 1} }
                    ]'>
                <?php
                    include('config/db_connect.php');
                    $sql = "SELECT  * FROM `products` limit 7";
                    $res = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($res))
                    {?>
                        <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="" class="author">
                                Lpple
                            </a>
                            <h3><a href="product-details.php"><?php echo $row['pr_name']; ?></a></h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-2.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="product-details.php" class="hover-image">
                                        <img src="image/products/product-1.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="cart.php" class="single-btn">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>

                                        <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div>
                  <?php  }
                
                ?>
                
                <!-- <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="" class="author">
                                Jpple
                            </a>
                            <h3><a href="product-details.php">Turn Your BOOK Into High Machine</a>
                            </h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-10.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="product-details.php" class="hover-image">
                                        <img src="image/products/product-1.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="cart.php" class="single-btn">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>

                                        <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="" class="author">
                                Wpple
                            </a>
                            <h3><a href="product-details.php">3 Ways Create Better BOOK With</a></h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-3.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="product-details.php" class="hover-image">
                                        <img src="image/products/product-2.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="cart.php" class="single-btn">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>

                                        <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="" class="author">
                                Epple
                            </a>
                            <h3><a href="product-details.php">What You Can Learn From Bill Gates</a>
                            </h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-5.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="product-details.php" class="hover-image">
                                        <img src="image/products/product-4.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="cart.php" class="single-btn">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>

                                        <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="" class="author">
                                Hpple
                            </a>
                            <h3><a href="product-details.php">a Half Very Simple Things You To</a></h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-6.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="product-details.php" class="hover-image">
                                        <img src="image/products/product-4.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="cart.php" class="single-btn">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>

                                        <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="" class="author">
                                Bpple
                            </a>
                            <h3><a href="product-details.php">Here Is A Quick Cure For Book</a>
                            </h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-8.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="product-details.php" class="hover-image">
                                        <img src="image/products/product-7.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="cart.php" class="single-btn">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>

                                        <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="" class="author">
                                zpple
                            </a>
                            <h3><a href="product-details.php">BOOK: Do You Really Need It? This </a></h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-13.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="product-details.php" class="hover-image">
                                        <img src="image/products/product-11.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="cart.php" class="single-btn">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>

                                        <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!--=================================
    CHILDREN’S BOOKS
===================================== -->
    <section class="section-margin">
        <div class="container">
            <div class="section-title section-title--bordered">
                <h2>Tên loại</h2>
            </div>
            <div class="product-slider sb-slick-slider slider-border-single-row" data-slick-setting='{
                        "autoplay": true,
                        "autoplaySpeed": 8000,
                        "slidesToShow": 5,
                        "dots":true
                    }' data-slick-responsive='[
                        {"breakpoint":1200, "settings": {"slidesToShow": 4} },
                        {"breakpoint":992, "settings": {"slidesToShow": 3} },
                        {"breakpoint":768, "settings": {"slidesToShow": 2} },
                        {"breakpoint":480, "settings": {"slidesToShow": 1} },
                        {"breakpoint":320, "settings": {"slidesToShow": 1} }
                    ]'>
                <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="" class="author">
                                Lpple
                            </a>
                            <h3><a href="product-details.php">Revolutionize Your BOOK With</a></h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-1.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="product-details.php" class="hover-image">
                                        <img src="image/products/product-1.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="cart.php" class="single-btn">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>

                                        <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">500.000đ</span>
                                <del class="price-old">600.000đ</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    BIOGRAPHIES BOOKS
===================================== -->
    <!-- ------------------------------------------------ Foreach Thể loại ------------------------------------------------------------------ -->
    <section class="section-margin">
        <div class="container">
            <div class="section-title section-title--bordered">
                <h2>Thể loại sách 2</h2>
            </div>
            <div class="product-slider sb-slick-slider slider-border-single-row" data-slick-setting='{
                        "autoplay": true,
                        "autoplaySpeed": 8000,
                        "slidesToShow": 5,
                        "dots":true
                    }' data-slick-responsive='[
                        {"breakpoint":1200, "settings": {"slidesToShow": 4} },
                        {"breakpoint":992, "settings": {"slidesToShow": 3} },
                        {"breakpoint":768, "settings": {"slidesToShow": 2} },
                        {"breakpoint":480, "settings": {"slidesToShow": 1} },
                        {"breakpoint":320, "settings": {"slidesToShow": 1} }
                    ]'>
                <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="" class="author">
                                Lpple
                            </a>
                            <h3><a href="product-details.php">Revolutionize Your BOOK With</a></h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-2.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="product-details.php" class="hover-image">
                                        <img src="image/products/product-1.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="cart.php" class="single-btn">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>

                                        <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="" class="author">
                                Jpple
                            </a>
                            <h3><a href="product-details.php">Turn Your BOOK Into High Machine</a>
                            </h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-2.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="product-details.php" class="hover-image">
                                        <img src="image/products/product-1.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="cart.php" class="single-btn">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>

                                        <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="" class="author">
                                Wpple
                            </a>
                            <h3><a href="product-details.php">3 Ways Create Better BOOK With</a></h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-3.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="product-details.php" class="hover-image">
                                        <img src="image/products/product-2.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="cart.php" class="single-btn">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>

                                        <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="" class="author">
                                Epple
                            </a>
                            <h3><a href="product-details.php">What You Can Learn From Bill Gates</a>
                            </h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-5.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="product-details.php" class="hover-image">
                                        <img src="image/products/product-4.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="cart.php" class="single-btn">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>

                                        <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="" class="author">
                                Hpple
                            </a>
                            <h3><a href="product-details.php">a Half Very Simple Things You To</a></h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-6.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="product-details.php" class="hover-image">
                                        <img src="image/products/product-4.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="cart.php" class="single-btn">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>

                                        <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="" class="author">
                                Bpple
                            </a>
                            <h3><a href="product-details.php">Here Is A Quick Cure For Book</a>
                            </h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-8.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="product-details.php" class="hover-image">
                                        <img src="image/products/product-7.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="cart.php" class="single-btn">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>

                                        <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="" class="author">
                                zpple
                            </a>
                            <h3><a href="product-details.php">BOOK: Do You Really Need It? This </a></h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-13.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="product-details.php" class="hover-image">
                                        <img src="image/products/product-11.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="cart.php" class="single-btn">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>

                                        <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        Home Features Section
    ===================================== -->
    <section class="mb--30 space-dt--30">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 mt--30">
                    <div class="feature-box h-100">
                        <div class="icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="text">
                            <h5>Free Shipping Item</h5>
                            <p> Orders over $500</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mt--30">
                    <div class="feature-box h-100">
                        <div class="icon">
                            <i class="fas fa-redo-alt"></i>
                        </div>
                        <div class="text">
                            <h5>Money Back Guarantee</h5>
                            <p>100% money back</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mt--30">
                    <div class="feature-box h-100">
                        <div class="icon">
                            <i class="fas fa-piggy-bank"></i>
                        </div>
                        <div class="text">
                            <h5>Cash On Delivery</h5>
                            <p>Lorem ipsum dolor amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mt--30">
                    <div class="feature-box h-100">
                        <div class="icon">
                            <i class="fas fa-life-ring"></i>
                        </div>
                        <div class="text">
                            <h5>Help & Support</h5>
                            <p>Call us : + 0123.4567.89</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        Promotion Section One
    ===================================== -->
    <section class="section-margin">
        <h1 class="sr-only">Promotion Section</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <a href="" class="promo-image promo-overlay">
                        <img src="image/bg-images/promo-banner-with-text.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="" class="promo-image promo-overlay">
                        <img src="image/bg-images/promo-banner-with-text-2.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        Home Two Column Section
    ===================================== -->

    <!--=================================
        CLIENT TESTIMONIALS
    ===================================== -->
    <section class="section-margin">
        <div class="container">
            <div class="section-title section-title--bordered mb-lg--60">
                <h2>CLIENT TESTIMONIALS</h2>
            </div>
            <div class="sb-slick-slider testimonial-slider" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow":3,
                "dots":true
            }' data-slick-responsive='[
                {"breakpoint":1200, "settings": {"slidesToShow": 2} },
                {"breakpoint":992, "settings": {"slidesToShow": 1} },
                {"breakpoint":768, "settings": {"slidesToShow": 1} },
                {"breakpoint":490, "settings": {"slidesToShow": 1} }
            ]'>
                <div class="single-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-image">
                            <img src="image/others/client-1.png" alt="">
                        </div>
                        <div class="testimonial-body">
                            <article>
                                <h2 class="sr-only">Testimonial Article</h2>
                                <p>version This is Photoshops of Lorem Ipsum. Proin gravida nibh vel velit.Lorem
                                    ipsum dolor sit amet, consectetur
                                    adipiscing elit. In molestie augue magna. Pell..</p>
                                <span class="d-block client-name">Rebecka Filson</span>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-image">
                            <img src="image/others/client-2.png" alt="">
                        </div>
                        <div class="testimonial-body">
                            <article>
                                <h2 class="sr-only">Testimonial Article</h2>
                                <p>In molestie augue magna.This is Photoshops version of Lorem Ipsum. Proin gravida
                                    nibh vel velit.Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Pell..</p>
                                <span class="d-block client-name">Rebecka Filson</span>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-image">
                            <img src="image/others/client-3.png" alt="">
                        </div>
                        <div class="testimonial-body">
                            <article>
                                <h2 class="sr-only">Testimonial Article</h2>
                                <p>Lorem Ipsum This is Photoshops version of . Proin gravida nibh vel velit.Lorem
                                    ipsum dolor sit amet, consectetur
                                    adipiscing elit. In molestie augue magna. Pell..</p>
                                <span class="d-block client-name">Rebecka Filson</span>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-image">
                            <img src="image/others/client-4.png" alt="">
                        </div>
                        <div class="testimonial-body">
                            <article>
                                <h2 class="sr-only">Testimonial Article</h2>
                                <p>elit. In molestie This is Photoshops version of Lorem Ipsum. Proin gravida nibh
                                    vel velit.Lorem ipsum dolor sit amet, consectetur
                                    adipiscing augue magna. Pell..</p>
                                <span class="d-block client-name">Rebecka Filson</span>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-image">
                            <img src="image/others/client-5.png" alt="">
                        </div>
                        <div class="testimonial-body">
                            <article>
                                <h2 class="sr-only">Testimonial Article</h2>
                                <p>Pell Photoshops version of Lorem Ipsum. Proin gravida nibh vel velit.Lorem ipsum
                                    dolor sit amet, consectetur
                                    adipiscing elit. In molestie augue magna. This is..</p>
                                <span class="d-block client-name">Rebecka Filson</span>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog" aria-labelledby="quickModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close modal-close-btn ml-auto" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="product-details-modal">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- Product Details Slider Big Image-->
                            <div class="product-details-slider sb-slick-slider arrow-type-two" data-slick-setting='{
              "slidesToShow": 1,
              "arrows": false,
              "fade": true,
              "draggable": false,
              "swipe": false,
              "asNavFor": ".product-slider-nav"
              }'>
                                <div class="single-slide">
                                    <img src="image/products/product-details-1.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="image/products/product-details-2.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="image/products/product-details-3.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="image/products/product-details-4.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="image/products/product-details-5.jpg" alt="">
                                </div>
                            </div>
                            <!-- Product Details Slider Nav -->
                            <div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two" data-slick-setting='{
            "infinite":true,
              "autoplay": true,
              "autoplaySpeed": 8000,
              "slidesToShow": 4,
              "arrows": true,
              "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
              "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
              "asNavFor": ".product-details-slider",
              "focusOnSelect": true
              }'>
                                <div class="single-slide">
                                    <img src="image/products/product-details-1.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="image/products/product-details-2.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="image/products/product-details-3.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="image/products/product-details-4.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="image/products/product-details-5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 mt--30 mt-lg--30">
                            <div class="product-details-info pl-lg--30 ">
                                <p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p>
                                <h3 class="product-title">Beats EP Wired On-Ear Headphone-Black</h3>
                                <ul class="list-unstyled">
                                    <li>Ex Tax: <span class="list-value"> £60.24</span></li>
                                    <li>Brands: <a href="#" class="list-value font-weight-bold"> Canon</a></li>
                                    <li>Product Code: <span class="list-value"> model1</span></li>
                                    <li>Reward Points: <span class="list-value"> 200</span></li>
                                    <li>Availability: <span class="list-value"> In Stock</span></li>
                                </ul>
                                <div class="price-block">
                                    <span class="price-new">£73.79</span>
                                    <del class="price-old">£91.86</del>
                                </div>
                                <div class="rating-widget">
                                    <div class="rating-block">
                                        <span class="fas fa-star star_on"></span>
                                        <span class="fas fa-star star_on"></span>
                                        <span class="fas fa-star star_on"></span>
                                        <span class="fas fa-star star_on"></span>
                                        <span class="fas fa-star "></span>
                                    </div>
                                    <div class="review-widget">
                                        <a href="">(1 Reviews)</a> <span>|</span>
                                        <a href="">Write a review</a>
                                    </div>
                                </div>
                                <article class="product-details-article">
                                    <h4 class="sr-only">Product Summery</h4>
                                    <p>Long printed dress with thin adjustable straps. V-neckline and wiring under
                                        the Dust with ruffles at the bottom
                                        of the
                                        dress.</p>
                                </article>
                                <div class="add-to-cart-row">
                                    <div class="count-input-block">
                                        <span class="widget-label">Qty</span>
                                        <input type="number" class="form-control text-center" value="1">
                                    </div>
                                    <div class="add-cart-btn">
                                        <a href="" class="btn btn-outlined--primary"><span class="plus-icon">+</span>Add to Cart</a>
                                    </div>
                                </div>
                                <div class="compare-wishlist-row">
                                    <a href="" class="add-link"><i class="fas fa-heart"></i>Add to Wish List</a>
                                    <a href="" class="add-link"><i class="fas fa-random"></i>Add to Compare</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="widget-social-share">
                        <span class="widget-label">Share:</span>
                        <div class="modal-social-share">
                            <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
    Footer
===================================== -->
</div>
<!--=================================
  Brands Slider
===================================== -->


<?php require_once("templates/footer.php") ?>


</html>