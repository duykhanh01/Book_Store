<!DOCTYPE html>
<html lang="zxx">

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

	<!--=============================================
    =            Login Register page content         =
    =============================================-->
	<main class="page-section inner-page-sec-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb--30 mb-lg--0">
					<!-- Login Form s-->
					<form action="#">
						<div class="login-form">
							<h4 class="login-title">New Customer</h4>
							<p><span class="font-weight-bold">I am a new customer</span></p>
							<div class="row">
								<div class="col-md-12 col-12 mb--15">
									<label for="email">Full Name</label>
									<input class="mb-0 form-control" type="text" id="name" placeholder="Enter your full name">
								</div>
								<div class="col-12 mb--20">
									<label for="email">Email</label>
									<input class="mb-0 form-control" type="email" id="email" placeholder="Enter Your Email Address Here..">
								</div>
								<div class="col-lg-6 mb--20">
									<label for="password">Password</label>
									<input class="mb-0 form-control" type="password" id="password" placeholder="Enter your password">
								</div>
								<div class="col-lg-6 mb--20">
									<label for="password">Repeat Password</label>
									<input class="mb-0 form-control" type="password" id="repeat-password" placeholder="Repeat your password">
								</div>
								<div class="col-md-12">
									<a href="#" class="btn btn-outlined">Register</a>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
					<form action="./">
						<div class="login-form">
							<h4 class="login-title">Returning Customer</h4>
							<p><span class="font-weight-bold">I am a returning customer</span></p>
							<div class="row">
								<div class="col-md-12 col-12 mb--15">
									<label for="email">Enter your email address here...</label>
									<input class="mb-0 form-control" type="email" id="email1" placeholder="Enter you email address here...">
								</div>
								<div class="col-12 mb--20">
									<label for="password">Password</label>
									<input class="mb-0 form-control" type="password" id="login-password" placeholder="Enter your password">
								</div>
								<div class="col-md-12">
									<a href="#" class="btn btn-outlined">Login</a>
								</div>
							</div>
						</div>
					</form>
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