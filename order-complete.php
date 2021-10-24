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
						<li class="breadcrumb-item active">Order Complete</li>
					</ol>
				</nav>
			</div>
		</div>
	</section>

	<!-- order complete Page Start -->
	<section class="order-complete inner-page-sec-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="order-complete-message text-center">
						<h1>Thank you !</h1>
						<p>Your order has been received.</p>
					</div>
					<ul class="order-details-list">
						<li>Order Number: <strong>3053</strong></li>
						<li>Date: <strong>January 24, 2019</strong></li>
						<li>Total: <strong>$117.00</strong></li>
						<li>Payment Method: <strong>Cash on Delivery</strong></li>
					</ul>
					<p>Pay with cash upon delivery.</p>
					<h3 class="order-table-title">Order Details</h3>
					<div class="table-responsive">
						<table class="table order-details-table">
							<thead>
								<tr>
									<th>Product</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><a href="single-product.php">Vans Off The Wall T-Shirt In</a> <strong>× 1</strong></td>
									<td><span>$59.00</span></td>
								</tr>
								<tr>
									<td><a href="single-product.php">Supreme Being Icon Glitch T-Shirt</a> <strong>× 1</strong></td>
									<td><span>$58.00</span></td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th>Subtotal:</th>
									<td><span>$117.00</span></td>
								</tr>
								<tr>
									<th>Payment Method:</th>
									<td>Cash on Delivery</td>
								</tr>
								<tr>
									<th>Total:</th>
									<td><span>$117.00</span></td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- order complete Page End -->
</div>
<!--=================================
  Brands Slider
===================================== -->

<!--=================================
    Footer Area
<?php require_once("templates/footer.php") ?>


</html>