<?php

session_start();

include("config/db_connect.php");
$id = $_SESSION['id'];
$sql = "SELECT * from products, orders, orderdetail where products.pr_id and orders.or_id  = orderdetail.or_id and orderdetail.pr_id = products.pr_id and orders.cus_id = '$id'";
$res = mysqli_query($conn, $sql);
$rows = mysqli_fetch_all($res, MYSQLI_ASSOC);



?>

<!DOCTYPE html>
<html lang="en">


<?php require_once("templates/header.php") ?>


<div class="site-wrapper" id="top">

    <div class="container d-block">

        <div class="row align-items-center">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">

                <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
                    <div class="d-flex align-items-center mb-3 mb-md-0 m-auto link-dark text-decoration-none">
                        <span class="fs-4 font-weight-bold"> <?php echo  $_SESSION['name'] ?> </span>
                    </div>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="profile.php" class="nav-link active" aria-current="page">
                                Thông tin cá nhân
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="change-password.php" class="nav-link " aria-current="page">

                                Đổi mật khẩu
                            </a>
                        </li>
                        <li>
                            <a href="customer-orders.php" class="nav-link  link-dark">

                                Danh sách đơn hàng
                            </a>
                        </li>
                        <li>
                            <a href="logout.php" class="nav-link link-dark">

                                Đăng xuất
                            </a>
                        </li>

                    </ul>
                    <hr>

                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12">
                <H4>THÔNG TIN TÀI KHOẢN</H4>
            </div>
        </div>
    </div>
</div>


<?php require_once("templates/footer.php") ?>