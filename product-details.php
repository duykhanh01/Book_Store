<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="eng">

<?php require_once("templates/header.php") ?>
<?php 
    if(isset($_GET['idsp']))
    {
        include('admin/config/db_connect.php');
        $pr_id = $_GET['idsp'];
        $sl_pr = "SELECT * FROM products pr, category cate where pr.pr_category = cate.c_id and pr.pr_id = $pr_id ";
        $res_pr = mysqli_query($conn, $sl_pr);
        if(mysqli_num_rows($res_pr)==0)
        {
            header('location: index.php');
        }
        $row_pr = mysqli_fetch_assoc($res_pr);
    }
    else
    {
        header('location: index.php');
    }
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
              <?php 
                    for($i=0 ; $i<count(explode(',', $row_pr['pr_img'])) ; $i++)
                    {?>
                        <div class="single-slide">
                            <img src="admin/<?php echo explode(',', $row_pr['pr_img'])[$i]; ?> " alt="">
                        </div>
                    <?php }
                ?>
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
                <?php 
                    for($i=0 ; $i<count(explode(',', $row_pr['pr_img'])) ; $i++)
                    {?>
                        <div class="single-slide">
                            <img src="admin/<?php echo explode(',', $row_pr['pr_img'])[$i]; ?> " alt="">
                        </div>
                    <?php }
                ?>
                        
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="product-details-info pl-lg--30 ">
                        <p class="tag-block">Thể loại: <?php echo $row_pr['c_name']; ?></p>
                        <h3 class="product-title"><?php echo $row_pr['pr_name'];?> </h3>
                        <ul class="list-unstyled">
                            <li class="mt-2">Tác giả: <a href="#" class="list-value font-weight-bold"><?php echo $row_pr['pr_author'];?> </a></li>
                            <li class="mt-2">Mã sách: <span class="list-value"> <?php echo $row_pr['pr_code'];?></span></li>
                            <li class="mt-2">NXB: <span class="list-value"><?php echo $row_pr['pr_pub'];?></span></li>
                            <li class="mt-2">Tồn kho: <span class="list-value"><?php echo $row_pr['pr_number'];?></span></li>
                        </ul>
                        <div class="price-block">
                            <span class="price-new"><?php echo $row_pr['pr_price']-$row_pr['pr_discount'];?></span>
                            <del class="price-old"><?php echo $row_pr['pr_price'];?></del>
                        </div>


                        <div class="add-to-cart-row">
                            <div class="count-input-block">
                                <span class="widget-label">Số lượng</span>
                                <div class="count-input-block">
                                    <input type="number" class="form-control text-center" id="get_number" value="1">
                                    <div class="count-input-btns">
                                        <button class="inc-ammount count-btn"><i class="zmdi zmdi-chevron-up"></i></button>
                                        <button class="dec-ammount count-btn"><i class="zmdi zmdi-chevron-down"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="add-cart-btn">
                                <button  class="btn btn-outlined--primary" id="add_to_cart" value="<?php echo $pr_id; ?>"><span class="plus-icon">+</span>Thêm giỏ hàng</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="sb-custom-tab review-tab section-padding">
                <ul class="nav nav-tabs nav-style-2" id="myTab2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="tab1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">
                            Thông tin sản phẩm
                        </a>
                    </li>
                </ul>
                <div class="tab-content space-db--20" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                        <article class="review-article">
                            
                            <p><?php echo $row_pr['pr_desc'] ?></p>
                        </article>
                    </div>

                </div>
            </div>
        </div>
        <!--=================================
    RELATED PRODUCTS BOOKS
===================================== -->
<section class="section-margin">
        <div class="container">
            <div class="section-title section-title--bordered">
                <h2>Truyện Tranh</h2>
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
                $sl_romance = "SELECT * from products, category where products.pr_category = category.c_id and products.pr_category = 2 and products.pr_id != $pr_id limit 4";
                $res_romance = mysqli_query($conn, $sl_romance);
                while ($row_romance = mysqli_fetch_assoc($res_romance)) {
                //xử lí lấy ảnh ra
                $name_img = explode(",",$row_romance['pr_img'])[0];
               
                    ?>

                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <a href="" class="author">
                                    <?php echo $row_romance['pr_author'] ?>
                                </a>
                                <h3><a href="product-details.php?idsp=<?php echo $row_romance['pr_id']; ?>"><?php echo $row_romance['pr_name']; ?> </a></h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="admin/<?php echo $name_img;?>" alt="">
                                    <div class="hover-contents">
                                        <a href="product-details.php" class="hover-image">
                                            <img src="admin/<?php echo $name_img;?>" alt="">
                                        </a>
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
                                <div class="price-block">
                                    <span class="price"><?php echo $row_romance['pr_price'] - $row_romance['pr_discount']; ?></span>
                                    <del class="price-old"><?php echo $row_romance['pr_price']; ?></del>
                                    <span class="price-discount">20%</span>
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
<!--=================================
  Brands Slider
===================================== -->
<!--=================================
    Footer Area
<?php require_once("templates/footer.php") ?>


</html>