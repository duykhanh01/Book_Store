<!DOCTYPE html>
<html lang="eng">

<?php
session_start();
include("templates/header.php") ?>

<div class="site-wrapper" id="top">


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
                                    <textarea id="order-note" cols="30" rows="10" class="order-note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
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
                                                $sum = 0;
                                                $check = 0;
                                                if (isset($_SESSION['id'])) {
                                                    include('config/db_connect.php');
                                                    $cus_id = $_SESSION['id'];
                                                    $sl_cart = "SELECT * FROM carts, products pr where carts.cus_id = '$cus_id' and carts.pr_id = pr.pr_id ";
                                                    $res_cart = mysqli_query($conn, $sl_cart);
                                                    $check = mysqli_num_rows($res_cart); //tạo biến check kiểm tra số lượng phần tử của carts
                                                    $res = mysqli_fetch_all($res_cart, MYSQLI_ASSOC);

                                                    foreach ($res as $i) {
                                                        $sum += $i['cart_price'] * $i['cart_quatity'];
                                                ?>
                                                        <li><span class="left"><?php echo $i['pr_name']; ?> X
                                                                <?php echo $i['cart_quatity']; ?></span>
                                                            <span class="right"><?php echo $i['cart_price'] * $i['cart_quatity']; ?></span>
                                                        </li>

                                                <?php
                                                    }
                                                }
                                                if ($check != 0)
                                                    $money_ship = 20;
                                                else
                                                    $money_ship = 0;

                                                ?>
                                            </ul>
                                            <?php

                                            ?>
                                            <p>Sub Total <span><?php echo $sum; ?></span></p>
                                            <p>Shipping Fee <span id="money_ship"><?php echo $money_ship; ?> </span></p>
                                            <h4>Grand Total <span id="sum_money"><?php echo $sum + $money_ship; ?> </span></h4>


                                            <button class="place-order w-100 mt-5" id="orders">Place
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