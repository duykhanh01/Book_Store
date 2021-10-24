<!DOCTYPE html>
<html lang="eng">

<?php require_once("templates/header.php") ?>

<div class="site-wrapper" id="top">

    <div class="sticky-init fixed-header common-sticky">
        <div class="container d-none d-lg-block">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <a href="index.php" class="site-brand">
                        <img src="image/logo.png" alt="">
                    </a>
                </div>
                <div class="col-lg-8">
                    <div class="main-navigation flex-lg-right">
                        <ul class="main-menu menu-right ">
                            <li class="menu-item has-children">
                                <a href="javascript:void(0)">Home <i class="fas fa-chevron-down dropdown-arrow"></i></a>
                                <ul class="sub-menu">
                                    <li> <a href="index.php">Home One</a></li>
                                    <li> <a href="index-2.php">Home Two</a></li>
                                    <li> <a href="index-3.php">Home Three</a></li>
                                    <li> <a href="index-4.php">Home Four</a></li>
                                </ul>
                            </li>
                            <!-- Shop -->
                            <li class="menu-item has-children mega-menu">
                                <a href="javascript:void(0)">shop <i class="fas fa-chevron-down dropdown-arrow"></i></a>
                                <ul class="sub-menu four-column">
                                    <li class="cus-col-25">
                                        <h3 class="menu-title"><a href="javascript:void(0)">Shop Grid </a></h3>
                                        <ul class="mega-single-block">
                                            <li><a href="shop-grid.php">Fullwidth</a></li>
                                            <li><a href="shop-grid-left-sidebar.php">left Sidebar</a></li>
                                            <li><a href="shop-grid-right-sidebar.php">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="cus-col-25">
                                        <h3 class="menu-title"> <a href="javascript:void(0)">Shop List</a></h3>
                                        <ul class="mega-single-block">
                                            <li><a href="shop-list.php">Fullwidth</a></li>
                                            <li><a href="shop-list-left-sidebar.php">left Sidebar</a></li>
                                            <li><a href="shop-list-right-sidebar.php">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="cus-col-25">
                                        <h3 class="menu-title"> <a href="javascript:void(0)">Product Details 1</a>
                                        </h3>
                                        <ul class="mega-single-block">
                                            <li><a href="product-details.php">Product Details Page</a></li>
                                            <li><a href="product-details-affiliate.php">Product Details
                                                    Affiliate</a></li>
                                            <li><a href="product-details-group.php">Product Details Group</a></li>
                                            <li><a href="product-details-variable.php">Product Details
                                                    Variables</a></li>
                                        </ul>
                                    </li>
                                    <li class="cus-col-25">
                                        <h3 class="menu-title"><a href="javascript:void(0)">Product Details 2</a>
                                        </h3>
                                        <ul class="mega-single-block">
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
                            <!-- Pages -->
                            <li class="menu-item has-children">
                                <a href="javascript:void(0)">Pages <i class="fas fa-chevron-down dropdown-arrow"></i></a>
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
                            <!-- Blog -->
                            <li class="menu-item has-children mega-menu">
                                <a href="javascript:void(0)">Blog <i class="fas fa-chevron-down dropdown-arrow"></i></a>
                                <ul class="sub-menu three-column">
                                    <li class="cus-col-33">
                                        <h3 class="menu-title"><a href="javascript:void(0)">Blog Grid</a></h3>
                                        <ul class="mega-single-block">
                                            <li><a href="blog.php">Full Widh (Default)</a></li>
                                            <li><a href="blog-left-sidebar.php">left Sidebar</a></li>
                                            <li><a href="blog-right-sidebar.php">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="cus-col-33">
                                        <h3 class="menu-title"><a href="javascript:void(0)">Blog List </a></h3>
                                        <ul class="mega-single-block">
                                            <!-- <li><a href="blog-list.php">Full Widh (Default)</a></li> -->
                                            <li><a href="blog-list-left-sidebar.php">left Sidebar</a></li>
                                            <li><a href="blog-list-right-sidebar.php">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="cus-col-33">
                                        <h3 class="menu-title"><a href="javascript:void(0)">Blog Details</a></h3>
                                        <ul class="mega-single-block">
                                            <li><a href="blog-details.php">Image Format (Default)</a></li>
                                            <li><a href="blog-details-gallery.php">Gallery Format</a></li>
                                            <li><a href="blog-details-audio.php">Audio Format</a></li>
                                            <li><a href="blog-details-video.php">Video Format</a></li>
                                            <li><a href="blog-details-left-sidebar.php">left Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="breadcrumb-section">
        <h2 class="sr-only">Site Breadcrumb</h2>
        <div class="container">
            <div class="breadcrumb-contents">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Product Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <main class="inner-page-sec-padding-bottom">
        <div class="container">
            <div class="row  mb--60">
                <div class="col-lg-5 mb--30">
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
                <div class="col-lg-7">
                    <div class="product-details-info pl-lg--30 ">
                        <p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p>
                        <h3 class="product-title">Beats EP Wired On-Ear Headphone-Black</h3>
                        <ul class="list-unstyled">
                            <li class="mt-2">Tác giả: <a href="#" class="list-value font-weight-bold"> Canon</a></li>
                            <li class="mt-2">Mã sách: <span class="list-value"> model1</span></li>
                            <li class="mt-2">NXB: <span class="list-value"> model2</span></li>
                            <li class="mt-2">Tồn kho: <span class="list-value"> 12</span></li>

                            <li class="mt-2">Tình trạng: <span class="list-value"> Còn hàng</span></li>
                        </ul>
                        <div class="price-block">
                            <span class="price-new">£73.79</span>
                            <del class="price-old">£91.86</del>
                        </div>


                        <div class="add-to-cart-row">
                            <div class="count-input-block">
                                <span class="widget-label">Số lượng</span>
                                <div class="count-input-block">
                                    <input type="number" class="form-control text-center" value="1">
                                    <div class="count-input-btns">
                                        <button class="inc-ammount count-btn"><i class="zmdi zmdi-chevron-up"></i></button>
                                        <button class="dec-ammount count-btn"><i class="zmdi zmdi-chevron-down"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="add-cart-btn">
                                <a href="" class="btn btn-outlined--primary"><span class="plus-icon">+</span>Thêm giỏ hàng</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="sb-custom-tab review-tab section-padding">
                <ul class="nav nav-tabs nav-style-2" id="myTab2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="tab1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">
                            DESCRIPTION
                        </a>
                    </li>
                </ul>
                <div class="tab-content space-db--20" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                        <article class="review-article">
                            <h1 class="sr-only">Tab Article</h1>
                            <p>Fashion has been creating well-designed collections since 2010. The brand offers
                                feminine designs delivering
                                stylish
                                separates and statement dresses which have since evolved into a full ready-to-wear
                                collection in which every
                                item is
                                a
                                vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful
                                elegance and unmistakable
                                signature
                                style. All the beautiful pieces are made in Italy and manufactured with the greatest
                                attention. Now Fashion
                                extends
                                to
                                a range of accessories including shoes, hats, belts and more!</p>
                        </article>
                    </div>

                </div>
            </div>
            <!-- <div class="tab-product-details">
  <div class="brand">
    <img src="image/others/review-tab-product-details.jpg" alt="">
  </div>
  <h5 class="meta">Reference <span class="small-text">demo_5</span></h5>
  <h5 class="meta">In stock <span class="small-text">297 Items</span></h5>
  <section class="product-features">
    <h3 class="title">Data sheet</h3>
    <dl class="data-sheet">
      <dt class="name">Compositions</dt>
      <dd class="value">Viscose</dd>
      <dt class="name">Styles</dt>
      <dd class="value">Casual</dd>
      <dt class="name">Properties</dt>
      <dd class="value">Maxi Dress</dd>
    </dl>
  </section>
</div> -->
        </div>
        <!--=================================
    RELATED PRODUCTS BOOKS
===================================== -->
        <section class="">
            <div class="container">
                <div class="section-title section-title--bordered">
                    <h2>RELATED PRODUCTS</h2>
                </div>
                <div class="product-slider sb-slick-slider slider-border-single-row" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow": 4,
                "dots":true
            }' data-slick-responsive='[
                {"breakpoint":1200, "settings": {"slidesToShow": 4} },
                {"breakpoint":992, "settings": {"slidesToShow": 3} },
                {"breakpoint":768, "settings": {"slidesToShow": 2} },
                {"breakpoint":480, "settings": {"slidesToShow": 1} }
            ]'>
                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <a href="" class="author">
                                    Lpple
                                </a>
                                <h3><a href="product-details.php">Revolutionize Your BOOK With BCDS</a></h3>
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
                                                <i class="fas fa-shopping-basket"></i>
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
                                                <i class="fas fa-shopping-basket"></i>
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
                                                <i class="fas fa-shopping-basket"></i>
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
                                                <i class="fas fa-shopping-basket"></i>
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
                                                <i class="fas fa-shopping-basket"></i>
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
                                        <p>Long printed dress with thin adjustable straps. V-neckline and wiring
                                            under the Dust with ruffles at the bottom
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
    </main>
</div>
<!--=================================
  Brands Slider
===================================== -->
<!--=================================
    Footer Area
<?php require_once("templates/footer.php") ?>


</html>