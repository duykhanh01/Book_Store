<?php
session_start();
include('config/db_connect.php');
?>



<!DOCTYPE html>
<html lang="en">
<?php require_once("templates/header.php") ?>
<?php include('config/db_connect.php'); ?>

<div class="site-wrapper" id="top">


    <!--=================================
        banner sách hot
    ===================================== -->
    <section class="hero-area hero-slider-3">
        <div class="sb-slick-slider" data-slick-setting='{
                                                        "autoplay": true,
                                                        "autoplaySpeed": 8000,
                                                        "slidesToShow": 1,
                                                        "dots":true
                                                        }'>


            <!-- --------------------------------------------- Banner ---------------------------------------------------------------------------------- -->

            <div class="single-slide bg-image" data-bg="image/bg-images/banner3.png">
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
            
            <div class="single-slide bg-image" data-bg="image/bg-images/banner2.png">
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
    <!-- sách hot -->
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
                $sl_id = "SELECT  od.pr_id, count(od.or_id) FROM orderdetail od, orders ors 
                where od.or_id = ors.or_id and DATEDIFF(CURDATE(), ors.or_date)<=7 
                GROUP BY od.pr_id ORDER BY  count(od.or_id) DESC LIMIT 7";
                $list_id = mysqli_query($conn, $sl_id);
                while($row_id = mysqli_fetch_assoc($list_id))
                {
                    $products_id = $row_id['pr_id'];
                
                $sql = "SELECT  * FROM `products` where pr_id = $products_id limit 7";
                $res = mysqli_query($conn, $sql);
                while ($row_romance = mysqli_fetch_assoc($res)) {  
                $name_img = explode(",",$row_romance['pr_img'])[0];?>
                    <div class="single-slide">
                        <div class="product-card">
                            
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="admin/<?php echo $name_img;?>" class="m-auto" style="width:190px; height:190px;" alt="">
                                    <div class="hover-contents">
                                        
                                        <div class="hover-btns">
                                            <a href="#" class="single-btn add_cart" value="<?php echo $row_romance['pr_id']; ?>">
                                                <i class="fas fa-cart-plus"></i>
                                            </a>

                                            <a  data-toggle="modal" data-target="#quickModal" class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-header mt-2">
                                    <h3><a href="product-details.php?idsp=<?php echo $row_romance['pr_id']; ?>"><?php echo $row_romance['pr_name']; ?> </a></h3>
                                </div>
                                <div class="price-block">
                                    <span class="price"><?php echo number_format($row_romance['pr_price'] - $row_romance['pr_discount'], 0, ',', '.'). " VNĐ"; ?></span>
                                    <del class="price-old"><?php echo number_format($row_romance['pr_price'], 0, ',', '.'). " VNĐ"; ?></del>
                                    <span class="price-discount"><?php echo ceil(($row_romance['pr_discount'])/($row_romance['pr_price'])*100) ?>%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php  } } ?>
            </div>
        </div>
    </section>

    <!-- gợi ý hôm nay -->
    <section class="section-margin mt-5">
        <div class="container">
            <div class="section-title section-title--bordered">
                <h2>Gợi ý cho bạn hôm nay</h2>
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

                //create table virtual
                $create_table = "CREATE TEMPORARY TABLE productnew as 
                ((SELECT  `pr_name`, `pr_author`, `pr_pub`, `pr_status`, `pr_category`, `pr_code`, `pr_number`, `pr_price`, `pr_discount`, `pr_img`, `pr_date`, `pr_desc`,orderdetail.or_id,orderdetail.pr_id,orders.or_date, COUNT(orderdetail.or_id) as number 
                from orders, orderdetail, products 
                where orders.or_id = orderdetail.or_id and  orderdetail.pr_id = products.pr_id 
                GROUP BY orderdetail.pr_id HAVING  datediff(date(curdate()), date(orders.or_date))<=3 
                ORDER BY COUNT(orderdetail.or_id) DESC))";
                mysqli_query($conn, $create_table);
               
                // $sl_recommend = "SELECT *, COUNT(orderdetail.or_id) 
                // from orders, orderdetail, products 
                // where orders.or_id = orderdetail.or_id and  orderdetail.pr_id = products.pr_id 
                // GROUP BY orderdetail.or_id 
                // HAVING  datediff(date(curdate()), date(orders.or_date))<=3 
                // ORDER BY COUNT(orderdetail.or_id) DESC 
                // LIMIT 10;";
                $sl_recommend = "SELECT *, sum(productnew.number) as sum FROM productnew, category 
                WHERE productnew.pr_category = category.c_id GROUP BY pr_id ORDER BY SUM(productnew.number) DESC LIMIT 10";
                $res_recommend = mysqli_query($conn, $sl_recommend);
                // echo mysqli_num_rows($res_recommend);
                // exit;
                while ($row_recommend = mysqli_fetch_assoc($res_recommend)) {  
                $name_img = explode(",",$row_recommend['pr_img'])[0];?>
                    <div class="single-slide">
                        <div class="product-card">
                            
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="admin/<?php echo $name_img;?>" class="m-auto" style="width:190px; height:190px;" alt="">
                                    <div class="hover-contents">
                                        
                                        <div class="hover-btns">
                                            <a href="#" class="single-btn add_cart" value="<?php echo $row_recommend['pr_id']; ?>">
                                                <i class="fas fa-cart-plus"></i>
                                            </a>

                                            <a  data-toggle="modal" data-target="#quickModal" class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-header mt-2">
                                    <h3><a href="product-details.php?idsp=<?php echo $row_recommend['pr_id']; ?>"><?php echo $row_recommend['pr_name']; ?> </a></h3>
                                </div>
                                <div class="price-block">
                                    <span class="price"><?php echo number_format($row_recommend['pr_price'] - $row_recommend['pr_discount'], 0, ',', '.'). " VNĐ"; ?></span>
                                    <del class="price-old"><?php echo number_format($row_recommend['pr_price'], 0, ',', '.'). " VNĐ" ; ?></del>
                                    <span class="price-discount"><?php echo CEIL(($row_recommend['pr_discount'])/($row_recommend['pr_price'])*100); ?>%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php  }  ?>
            </div>
        </div>
    </section>
<!-- in ra các thể loại -->
<?php
    $sl_category = "SELECT * from category";
    $res_category = mysqli_query($conn, $sl_category);
    while($row_category = mysqli_fetch_assoc($res_category))
    { ?>
        <section class="section-margin">
        <div class="container">
            <div class="section-title section-title--bordered">
                <h2><?php echo $row_category['c_name'] ?></h2>
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
                <!-- thêm các sách theo loại tình cảm -->
                <?php
                $c_id = $row_category['c_id'];
                $sl_romance = "SELECT * from products, category where products.pr_category = category.c_id and products.pr_category = $c_id limit 8";
                $res_romance = mysqli_query($conn, $sl_romance);
                while ($row_romance = mysqli_fetch_assoc($res_romance)) {
                //xử lí lấy ảnh ra
                $name_img = explode(",",$row_romance['pr_img'])[0];
               
                    ?>

                    <div class="single-slide">
                        <div class="product-card">
                            
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="admin/<?php echo $name_img;?>" class="m-auto" style="width:190px; height:190px;" alt="">
                                    <div class="hover-contents">
                                        
                                        <div class="hover-btns">
                                            <a class="single-btn add_cart" value="<?php echo $row_romance['pr_id']; ?>">
                                                <i class="fas fa-cart-plus"></i>
                                            </a>

                                            <a href="product-details.php?idsp=<?php echo $row_romance['pr_id']; ?>" class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-header mt-2">
                                    <h3><a href="product-details.php?idsp=<?php echo $row_romance['pr_id']; ?>"><?php echo $row_romance['pr_name']; ?> </a></h3>
                                </div>
                                <div class="price-block">
                                    <span class="price"><?php echo number_format($row_romance['pr_price'] - $row_romance['pr_discount'], 0, ',', '.'). " VNĐ"; ?></span>
                                    <del class="price-old"><?php echo number_format($row_romance['pr_price'], 0, ',', '.'). " VNĐ"; ?></del>
                                    <span class="price-discount"><?php echo ceil((($row_romance['pr_discount'])/($row_romance['pr_price'])*100));?> %</span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }

                ?>
            </div>
        </div>
    </section>
    <?php } 
//phan moi
?>
    
    <!-- ------------------------------------------------ Foreach Thể loại ------------------------------------------------------------------ -->
  
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
    
    <!--=================================
    Footer
===================================== -->
</div>
<!--=================================
  Brands Slider
===================================== -->


<?php require_once("templates/footer.php") ?>


</html>