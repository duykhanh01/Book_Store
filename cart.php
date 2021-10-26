<!DOCTYPE html>
<html lang="eng">

<?php 
session_start();
include("templates/header.php"); 
?>
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
						<li class="breadcrumb-item active">Cart</li>
					</ol>
				</nav>
			</div>
		</div>
	</section>
	<!-- Cart Page Start -->
	<main class="cart-page-main-block inner-page-sec-padding-bottom">
		<div class="cart_area cart-area-padding  ">
			<div class="container">
				<div class="page-section-title">
					<h1>Shopping Cart</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<form action="#" class="">
							<!-- Cart Table -->
							<div class="cart-table table-responsive mb--40">
								<table class="table">
									<!-- Head Row -->
									<thead>
										<tr>
											<th class="pro-remove"></th>
											<th class="pro-thumbnail">Image</th>
											<th class="pro-title">Tên</th>
											<th class="pro-price">Giá</th>
											<th class="pro-quantity">Số lượng</th>
											<th class="pro-subtotal">Thành tiền</th>
										</tr>
									</thead>
									<tbody>
										<!-- Product Row -->
										<?php
										if(isset($_SESSION['id']))
										{ 
											include('config/db_connect.php');
											$cus_id = $_SESSION['id'];
											$sl_cart = "SELECT * FROM carts, products pr where carts.cus_id = '$cus_id' and carts.pr_id = pr.pr_id ";
											
											$res_cart = mysqli_query($conn, $sl_cart);
											while($row_cart = mysqli_fetch_assoc($res_cart))
											{ ?>
											
											
										<tr>
											<td class="pro-remove"><a href="#"><i class="far fa-trash-alt"></i></a>
											</td>
											<td class="pro-thumbnail"><a href="#"><img src="image/products/product-1.jpg" alt="Product"></a></td>
											<td class="pro-title"><a href="#"><?php echo $row_cart['pr_name']; ?></a></td>
											<td class="pro-price"><span><?php echo $row_cart['pr_price']-$row_cart['pr_discount']; ?></span></td>
											<td class="pro-quantity">
												<div class="pro-qty">
													<div class="count-input-block">
														<input type="number" class="form-control text-center" value="1">
													</div>
												</div>
											</td>
											<td class="pro-subtotal"><span><?php echo ($row_cart['pr_price']-$row_cart['pr_discount'])*$row_cart['cart_quatity']; ?></span></td>
										</tr>
										<?php }}
										?>
										<!-- Product Row -->
										<!-- Discount Row  -->
										<tr>
											<td colspan="6" class="actions">
												<div class="update-block text-right">
													<input type="submit" class="btn btn-outlined" name="update_cart" value="Đặt hàng">
													
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</main>
	<!-- Cart Page End -->
</div>
<!--=================================
  Brands Slider
===================================== -->


<?php include("templates/footer.php") ?>


</html>