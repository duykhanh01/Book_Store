<!DOCTYPE html>
<html lang="eng">

<?php include("templates/header.php") ?>

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
                                <a href="javascript:void(0)">Pages <i
                                        class="fas fa-chevron-down dropdown-arrow"></i></a>
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

    <main id="content" class="page-section inner-page-sec-padding-bottom space-db--20">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Checkout Form s-->
                    <div class="checkout-form">
                        <div class="row row-40">
                            <div class="col-12">

                                <!-- Slide Down Blox ==> Login Box  -->

                                <!-- Slide Down Trigger  -->

                                <!-- Slide Down Blox ==> Cupon Box -->
                                <div class="checkout-slidedown-box" id="quick-cupon">
                                    <form action="./">
                                        <div class="checkout_coupon">
                                            <input type="text" class="mb-0" placeholder="Coupon Code">
                                            <a href="" class="btn btn-outlined">Apply coupon</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-7 mb--20">
                                <!-- Billing Address -->
                                <div id="billing-form" class="mb-40">
                                    <h4 class="checkout-title mt-4">Billing Address</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>First Name*</label>
                                            <input type="text" placeholder="First Name">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Last Name*</label>
                                            <input type="text" placeholder="Last Name">
                                        </div>
                                        <div class="col-12 mb--20">
                                            <label>Company Name</label>
                                            <input type="text" placeholder="Company Name">
                                        </div>
                                        <div class="col-12 col-12 mb--20">
                                            <label>Country*</label>
                                            <select class="nice-select">
                                                <option>Bangladesh</option>
                                                <option>China</option>
                                                <option>country</option>
                                                <option>India</option>
                                                <option>Japan</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Email Address*</label>
                                            <input type="email" placeholder="Email Address">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Phone no*</label>
                                            <input type="text" placeholder="Phone number">
                                        </div>
                                        <div class="col-12 mb--20">
                                            <label>Address*</label>
                                            <input type="text" placeholder="Address">
                                        </div>



                                    </div>
                                </div>
                                <!-- Shipping Address -->
                                <div id="shipping-form" class="mb--40">
                                    <h4 class="checkout-title">Shipping Address</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>First Name*</label>
                                            <input type="text" placeholder="First Name">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Last Name*</label>
                                            <input type="text" placeholder="Last Name">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Email Address*</label>
                                            <input type="email" placeholder="Email Address">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Phone no*</label>
                                            <input type="text" placeholder="Phone number">
                                        </div>
                                        <div class="col-12 mb--20">
                                            <label>Company Name</label>
                                            <input type="text" placeholder="Company Name">
                                        </div>
                                        <div class="col-12 mb--20">
                                            <label>Address*</label>
                                            <input type="text" placeholder="Address">
                                        </div>


                                    </div>
                                </div>
                                <div class="order-note-block mt--20">
                                    <label for="order-note">Order notes</label>
                                    <textarea id="order-note" cols="30" rows="10" class="order-note"
                                        placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <!-- Cart Total -->
                                    <div class="col-12">
                                        <div class="checkout-cart-total">
                                            <h2 class="checkout-title">YOUR ORDER</h2>
											
                                            <h4>Product <span>Total</span></h4>
                                            <ul>

                                                <?php
												//xử lí thêm vào order và order detail
													include('config/db_connect.php');
													$sl_cart = "SELECT * FROM carts, products pr where carts.cus_id = 1 and carts.pr_id = pr.pr_id ";
													$res_cart = mysqli_query($conn, $sl_cart);
													$check = mysqli_num_rows($res_cart); //tạo biến check kiểm tra số lượng phần tử của carts
													$res = mysqli_fetch_all($res_cart, MYSQLI_ASSOC);
													$sum = 0;
													foreach($res as $i)
													{
														$sum += $i['cart_price']*$i['cart_quatity'];
														?>
                                               			<li><span class="left"><?php echo $i['pr_name']; ?> X
                                                        <?php echo $i['cart_quatity'] ;?></span>
                                                    	<span
                                                        class="right"><?php echo $i['cart_price']*$i['cart_quatity'] ; ?></span>
                                                		</li>

                                                <?php		
													}
													if($check !=0)
														$money_ship = 20;
													else
														$money_ship = 0;
												
												?>
                                            </ul>
                                            <?php
	
											?>
                                            <p>Sub Total <span><?php echo $sum; ?></span></p>
                                            <p>Shipping Fee <span id="money_ship"><?php echo $money_ship; ?> </span></p>
                                            <h4>Grand Total <span id="sum_money"><?php echo $sum+$money_ship; ?> </span></h4>


                                            <button class="place-order w-100 mt-5" id = "orders">Place
                                                order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


<?php include("templates/footer.php") ?>


</html>