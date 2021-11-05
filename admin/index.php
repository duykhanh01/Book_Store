<?php

session_start();

?>
<!DOCTYPE html>
<html class="no-js" lang="en" data-theme="light">



<?php require_once("templates/header.php") ?>
<?php
include('config/db_connect.php');
include('core/export_data.php');
$sl_cus_new = "SELECT COUNT(cus_id) as new_cus FROM `customers` WHERE datediff(curdate(), cus_create)<7 and datediff(curdate(), cus_create) >= 0";
$sl_cus_old = "SELECT COUNT(cus_id) as old_cus FROM `customers` WHERE datediff(date(curdate()-30),cus_create)<7 and datediff(date(curdate()-30),cus_create)>=0";
$res_cus_new = mysqli_fetch_assoc(mysqli_query($conn, $sl_cus_new));
$res_cus_old = mysqli_fetch_assoc(mysqli_query($conn, $sl_cus_old));
$number_cus_new = $res_cus_new['new_cus'];
$number_cus_old = $res_cus_old['old_cus'];
if ($number_cus_old == 0) {
    $percent_customer = 100;
} else {
    $percent_customer = $number_cus_new / $number_cus_old;
}
$sl_order_new = "SELECT count(or_id) as ordernew FROM orders where datediff(date(curdate()), date(or_date))<7";
$sl_order_old = "SELECT count(or_id) as orderold  FROM orders where datediff(date(curdate())-7, date(or_date))<7  and datediff(date(curdate())-7, date(or_date))>=0";
$res_order_new = mysqli_fetch_assoc(mysqli_query($conn, $sl_order_new));
$res_order_old = mysqli_fetch_assoc(mysqli_query($conn, $sl_order_old));
$number_order_new = $res_order_new['ordernew'];
$number_order_old = $res_order_old['orderold'];
if ($number_cus_old == 0) {
    $percent_order = 100;
} else {
    $percent_order = $number_order_new / $number_order_old;
}

?>

<main class="page-content">
    <input type="text" class="d-none" id="getdata" value="<?php echo $lb; ?>">
    <div class="container">
        <div class="widgets">
            <div class="widgets__row row gutter-bottom-xl">
                <div class="col-12 col-md-6 col-xl-4 d-flex">
                    <div class="widget">
                        <div class="widget__wrapper">
                            <div class="widget__row">
                                <div class="widget__left">
                                    <h3 class="widget__title">Khách hàng mới</h3>
                                    <div class="widget__status-title text-grey">Số lượng đăng ký hôm nay</div>
                                    <div class="widget__trade"><span class="widget__trade-count"><?php echo $number_cus_new; ?></span><span class="trade-icon trade-icon--up">
                                            <svg class="icon-icon-trade-up">
                                                <use xlink:href="#icon-trade-up"></use>
                                            </svg></span><span class="badge badge--sm badge--green"><?php echo $percent_customer; ?>%</span>
                                    </div>

                                </div>
                                <div class="widget__chart">
                                    <div class="widget__chart-inner">
                                        <div class="widget__chart-percentage"><?php echo $percent_customer; ?><small>%</small>
                                        </div>
                                        <div class="widget__chart-caption">Chỉ tiêu</div>
                                    </div>
                                    <div class="widget__chart-canvas js-progress-circle" data-value="<?php echo $percent_customer / 100; ?>" data-color="#22CCE2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 d-flex">
                    <div class="widget">
                        <div class="widget__wrapper">
                            <div class="widget__row">
                                <div class="widget__left">
                                    <h3 class="widget__title">Đơn hàng</h3>
                                    <div class="widget__status-title text-grey">Số lượng đơn hàng hôm nay</div>
                                    <div class="widget__trade"><span class="widget__trade-count"><?php echo $number_order_new; ?></span><span class="trade-icon trade-icon--down">
                                            <svg class="icon-icon-trade-down">
                                                <use xlink:href="#icon-trade-down"></use>
                                            </svg></span><span class="badge badge--sm badge--red"><?php echo $percent_order; ?>%</span>
                                    </div>

                                </div>
                                <div class="widget__chart">
                                    <div class="widget__chart-inner">
                                        <div class="widget__chart-percentage"><?php echo $percent_order; ?><small>%</small>
                                        </div>
                                        <div class="widget__chart-caption">Chỉ tiêu</div>
                                    </div>
                                    <div class="widget__chart-canvas js-progress-circle" data-value="<?php echo $percent_order / 100; ?>" data-color="#FDBF5E"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 d-flex">
                    <div class="widget">
                        <div class="widget__wrapper">
                            <div class="widget__row">
                                <div class="widget__left">
                                    <h3 class="widget__title">Doanh thu</h3>
                                    <div class="widget__status-title text-grey">Tổng doanh thu hôm nay</div>
                                    <div class="widget__trade"><span class="widget__trade-count">500,000 VNĐ</span><span class="trade-icon trade-icon--up">
                                            <svg class="icon-icon-trade-up">
                                                <use xlink:href="#icon-trade-up"></use>
                                            </svg></span><span class="badge badge--sm badge--green">9%</span>
                                    </div>

                                </div>
                                <div class="widget__chart">
                                    <div class="widget__chart-inner">
                                        <div class="widget__chart-percentage">80<small>%</small>
                                        </div>
                                        <div class="widget__chart-caption">Chỉ tiêu</div>
                                    </div>
                                    <div class="widget__chart-canvas js-progress-circle" data-value="0.8" data-color="#FF3D57"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="section__title d-none">
                <h2>Section</h2>
            </div>
            <div class="row justify-content-center gutter-bottom-xl">
                <div class="col-12 col-lg-12 col-xl-12 d-flex">
                    <div class="card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__header">
                                    <div class="card__header-left">
                                        <h3 class="card__header-title">Doanh thu</h3>
                                    </div>


                                </div>
                                <div class="card__body">
                                    <div class="card__widgets">
                                        <div class="card__widgets-row gutter-bottom-sm">
                                            <div class="card-widget">
                                                <h4 class="card-widget__title">Tuần này</h4>
                                                <div class="card-widget__trade"><span class="card-widget__count text-red">1,200,000 VNĐ</span><span class="trade-icon trade-icon--up">
                                                        <svg class="icon-icon-trade-up">
                                                            <use xlink:href="#icon-trade-up"></use>
                                                        </svg></span><span class="badge badge--green badge--sm">5%</span>
                                                </div>
                                            </div>
                                            <div class="card-widget">
                                                <h4 class="card-widget__title">Tuần trước</h4>
                                                <div class="card-widget__trade"><span class="card-widget__count text-grey">500,000 VNĐ</span><span class="trade-icon trade-icon--down">
                                                        <svg class="icon-icon-trade-down">
                                                            <use xlink:href="#icon-trade-down"></use>
                                                        </svg></span><span class="badge badge--red badge--sm">2%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card__chart">
                                        <div class="card__container card__container--gutter-sm">
                                            <div class="card__chart-item chart-revenue" id="revenueChart" data-series="[<?php echo $val_old; ?>, <?php echo $val_new; ?>]"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="section">
            <div class="section__title d-none">
                <h2>Section</h2>
            </div>
            <div class="row justify-content-center gutter-bottom-xl">
                <div class="col-12 col-lg-12 col-xl-12 d-flex">
                    <div class="card card--overview">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__header">
                                    <div class="card__header-left">
                                        <h3 class="card__header-title">Số lượng sản phẩm bán được theo ngày</h3>
                                    </div>


                                </div>
                                <div class="card__body">

                                    <div class="card__chart">
                                        <div class="card__container card__container--gutter-sm">
                                            <div class="card__chart-item chart-overview" id="overviewLineChart" data-series="<?php echo $val_pr; ?>"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php require_once("templates/footer.php") ?>


</html>