<?php
include('config/db_connect.php');
session_start();

if (isset($_GET['or_id'])) {
    $or_id = $_GET['or_id'];
    $sl_ors = "SELECT * from orders where or_id = '$or_id'";
    $res_ors = mysqli_query($conn, $sl_ors);
    if (mysqli_num_rows($res_ors) == 0) {
        header('location: orders.php');
    }
} else {
    header('location: orders.php');
}

?>
<!DOCTYPE html>
<html class="no-js" lang="en" data-theme="light">
<?php require_once("templates/header.php"); ?>


<div class="order-tabs">
    <div class="order-tabs__container">
        <h3 class="order-tabs__title">Order Details</h3>
        <nav class="order-tabs__nav">
            <div class="order-tabs__nav-prev">
                <a class="order-tabs__arrow order-tabs__arrow--prev" href="#">
                    <svg class="icon-icon-chevron">
                        <use xlink:href="#icon-chevron"></use>
                    </svg>
                </a>
            </div>
            <div class="order-tabs__nav-next">
                <a class="order-tabs__arrow order-tabs__arrow--next" href="#">
                    <svg class="icon-icon-chevron">
                        <use xlink:href="#icon-chevron"></use>
                    </svg>
                </a>
            </div>
            <div class="order-tabs__list-wrapper swiper-container">
                <div class="order-tabs__list swiper-wrapper">
                    <div class="order-tabs__item swiper-slide">
                        <a class="order-tabs__link order-tabs__link--active" href="order-details.php">
                            <svg class="icon-icon-details">
                                <use xlink:href="#icon-details"></use>
                            </svg>Details</a>
                    </div>
                    <div class="order-tabs__item swiper-slide">
                        <a class="order-tabs__link" href="order-invoice.php">
                            <svg class="icon-icon-invoice">
                                <use xlink:href="#icon-invoice"></use>
                            </svg>Invoice</a>
                    </div>
                    <div class="order-tabs__item swiper-slide">
                        <a class="order-tabs__link" href="order-status.php">
                            <svg class="icon-icon-status">
                                <use xlink:href="#icon-status"></use>
                            </svg>Status</a>
                    </div>
                    <div class="order-tabs__item swiper-slide">
                        <a class="order-tabs__link" href="order-history.php">
                            <svg class="icon-icon-back-time">
                                <use xlink:href="#icon-back-time"></use>
                            </svg>History</a>
                    </div>
                    <div class="order-tabs__item swiper-slide">
                        <a class="order-tabs__link" href="order-notes.php">
                            <svg class="icon-icon-task-notes">
                                <use xlink:href="#icon-task-notes"></use>
                            </svg>Notes</a>
                    </div>
                    <div class="order-tabs__item swiper-slide">
                        <a class="order-tabs__link" href="order-messages.php">
                            <svg class="icon-icon-chat-messages">
                                <use xlink:href="#icon-chat-messages"></use>
                            </svg>Messages</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>

<main class="page-content page-content--order-header">
    <div class="container">
        <div class="page-header">
            <h3 class="page-header__subtitle d-lg-none">Order Details</h3>
            <h1 class="page-header__title">Orders <span class="text-grey">#<?php echo $or_id; ?></span></h1>
        </div>
        <div class="page-tools">
            <div class="page-tools__breadcrumbs">
                <div class="breadcrumbs">
                    <div class="breadcrumbs__container">
                        <ol class="breadcrumbs__list">
                            <li class="breadcrumbs__item">
                                <a class="breadcrumbs__link" href="index.php">
                                    <svg class="icon-icon-home breadcrumbs__icon">
                                        <use xlink:href="#icon-home"></use>
                                    </svg>
                                    <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                        <use xlink:href="#icon-keyboard-right"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link" href="#"><span>E-commerce</span>
                                    <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                        <use xlink:href="#icon-keyboard-right"></use>
                                    </svg></a>
                            </li>
                            <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="orders.php"><span>Orders</span>
                                    <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                        <use xlink:href="#icon-keyboard-right"></use>
                                    </svg></a>
                            </li>
                            <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Details</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="page-tools__right">
                <div class="page-tools__right-row">
                    <div class="page-tools__right-item"><a class="button-icon" href="#"><span class="button-icon__icon">
                                <svg class="icon-icon-print">
                                    <use xlink:href="#icon-print"></use>
                                </svg></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-order">
            <div class="card__wrapper">
                <section class="card-order__section pt-0">
                    <div class="card__container">
                        <div class="card__header">
                            <div class="row gutter-bottom-xs justify-content-between flex-grow-1">
                                <div class="col">
                                    <h3 class="card__title">Customer</h3>
                                </div>
                                <?php
                                //lấy thông tin của customer
                                $sl_orders = "SELECT * from orders where or_id = '$or_id'";
                                $res_order = mysqli_fetch_assoc(mysqli_query($conn, $sl_orders));
                                $cus_id = $res_order['cus_id'];
                                $or_total = $res_order['or_total'];
                                $sl_customer = "select * from customers where cus_id = '$cus_id'";
                                $res_customer = mysqli_fetch_assoc(mysqli_query($conn, $sl_customer));
                                $sl_orderdetail = "SELECT * from orderdetail od, products pr where or_id = '$or_id' and od.pr_id = pr.pr_id";
                                $res_orderdetail = mysqli_query($conn, $sl_orderdetail);
                                $sub_total = mysqli_fetch_assoc(mysqli_query($conn, "SELECT sum(od_total) as sub_total FROM `orderdetail` WHERE or_id = '$or_id'"));
                                ?>
                                <div class="col-auto"><span class="card__date">Thời gian đặt: <?php echo $res_order['or_date']; ?></span>
                                </div>
                            </div>
                        </div>
                        <ul class="card-order__customer-list">
                            <li class="card-order__customer-item">
                                <svg class="icon-icon-user">
                                    <use xlink:href="#icon-user"></use>
                                </svg> <b>Name:</b> <span><?php echo $res_customer['cus_name']; ?></span>
                            </li>
                            <li class="card-order__customer-item">
                                <svg class="icon-icon-phone">
                                    <use xlink:href="#icon-phone"></use>
                                </svg> <b>Phone:</b> <a href="tel:0701234567"><?php echo $res_customer['cus_tel']; ?></a>
                            </li>
                            <li class="card-order__customer-item">
                                <svg class="icon-icon-email">
                                    <use xlink:href="#icon-email"></use>
                                </svg> <b>Email:</b> <a href="mailto:example@mail.com"><?php echo $res_customer['cus_mail']; ?></a>
                            </li>
                        </ul>
                    </div>
                </section>

                <section class="card-order__section color-grey-bg">
                    <div class="card__container">
                        <div class="row gutter-bottom-sm">
                            <div class="col">
                                <h3>Shipping address</h3>
                                <address class="card-order__address">
                                    <ul class="card-order__list">
                                        <li><b>Họ và tên:</b> <?php echo $res_customer['cus_name']; ?></li>
                                        <li><b>Address:</b> <?php echo $res_customer['cus_add']; ?></li>
                                        <li><b>Phone: </b><?php echo $res_customer['cus_tel']; ?></li>
                                    </ul>
                                </address>
                            </div>
                            <div class="col d-none d-xl-block"></div>
                        </div>
                    </div>
                </section>
                <div class="card-order__product scrollbar-thin scrollbar-visible" data-simplebar>
                    <table class="table table--lines table--groups table--striped">
                        <colgroup>
                            <col class="colgroup-1">
                            <col class="colgroup-2">
                            <col>
                            <col>
                            <col>
                        </colgroup>
                        <thead class="table__header">
                            <tr class="table__header-row">
                                <th><span class="text-nowrap">PRODUCT</span>
                                </th>
                                <th class="text-center"><span>PRICE</span>
                                </th>
                                <th class="text-center"><span>QUANTITY</span>
                                </th>
                                <th><span>TOTAL</span>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row_od = mysqli_fetch_assoc($res_orderdetail)) { ?>


                                <tr class="table__row">
                                    <td class="table__td">
                                        <div class="mw-200"><span class="text-light-theme"><?php echo $row_od['pr_name']; ?> </span>
                                        </div>
                                    </td>
                                    <td class="table__td text-center text-dark-theme">
                                        <div class="d-inline-block">
                                            <div class="input-group input-group--prepend-xs">
                                                $<?php echo $row_od['od_price']; ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="table__td text-center">
                                        <?php echo $row_od['od_quatity']; ?>
                                    </td>
                                    <td class="table__td text-nowrap text-dark-theme"><?php echo $row_od['od_total']; ?></td>
                                </tr>
                            <?php    }
                            ?>

                        </tbody>
                    </table>
                </div>
                <div class="card-order__footer-total">
                    <div class="card__container">
                        <div class="row gutter-bottom-sm justify-content-end">
                            <!-- có thể thêm add product -->
                            <div class="col-auto">
                                <ul class="card-order__total">
                                    <li class="card-order__total-item card-order__total-footer">
                                        <div class="card-order__total-title">Sub total:</div>
                                        <div class="card-order__total-value">$<?php echo $sub_total['sub_total']; ?> </div>
                                    </li>
                                    <li class="card-order__total-item card-order__total-footer">
                                        <div class="card-order__total-title">Ship:</div>
                                        <div class="card-order__total-value">$<?php echo $res_order['or_ship']; ?> </div>
                                    </li>
                                    <li class="card-order__total-item card-order__total-footer">
                                        <div class="card-order__total-title">total:</div>
                                        <div class="card-order__total-value">$<?php echo $or_total; ?> </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
<?php require_once("templates/footer.php") ?>

</html