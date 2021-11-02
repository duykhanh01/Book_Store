<?php

session_start();

?>
<!DOCTYPE html>
<html class="no-js" lang="en" data-theme="light">



<?php require_once("templates/header.php") ?>
<?php
include('config/db_connect.php');
$sl_cus_new = "SELECT COUNT(cus_id) as new_cus FROM `customers` WHERE datediff(curdate(), cus_create)<7 and datediff(curdate(), cus_create) >= 0";
$sl_cus_old = "SELECT COUNT(cus_id) as old_cus FROM `customers` WHERE datediff(date(curdate()-30),cus_create)<7 and datediff(date(curdate()-30),cus_create)>=0";
$res_cus_new = mysqli_fetch_assoc(mysqli_query($conn,$sl_cus_new));
$res_cus_old = mysqli_fetch_assoc(mysqli_query($conn,$sl_cus_old));
$number_cus_new = $res_cus_new['new_cus'];
$number_cus_old = $res_cus_old['old_cus'];
if($number_cus_old==0)
{
    $percent_customer = 100;
}
else
{
    $percent_customer = $number_cus_new/$number_cus_old;
}
$sl_order_new = "SELECT count(or_id) as ordernew FROM orders where datediff(date(curdate()), date(or_date))<7";
$sl_order_old = "SELECT count(or_id) as orderold  FROM orders where datediff(date(curdate())-7, date(or_date))<7  and datediff(date(curdate())-7, date(or_date))>=0";
$res_order_new = mysqli_fetch_assoc(mysqli_query($conn,$sl_order_new));
$res_order_old = mysqli_fetch_assoc(mysqli_query($conn,$sl_order_old));
$number_order_new = $res_order_new['ordernew'];
$number_order_old = $res_order_old['orderold'];
if($number_cus_old==0)
{
    $percent_order = 100;
}
else
{
    $percent_order = $number_order_new/$number_order_old;
}

?>

<main class="page-content">
    <div class="container">
        <div class="widgets">
            <div class="widgets__row row gutter-bottom-xl">
                <div class="col-12 col-md-6 col-xl-4 d-flex">
                    <div class="widget">
                        <div class="widget__wrapper">
                            <div class="widget__row">
                                <div class="widget__left">
                                    <h3 class="widget__title">New customers</h3>
                                    <div class="widget__status-title text-grey">Total visits today</div>
                                    <div class="widget__trade"><span class="widget__trade-count"><?php echo $number_cus_new; ?></span><span class="trade-icon trade-icon--up">
                                            <svg class="icon-icon-trade-up">
                                                <use xlink:href="#icon-trade-up"></use>
                                            </svg></span><span class="badge badge--sm badge--green"><?php echo $percent_customer; ?>%</span>
                                    </div>
                                    <div class="widget__details"><a class="link-under text-grey" href="#">Detail</a>
                                    </div>
                                </div>
                                <div class="widget__chart">
                                    <div class="widget__chart-inner">
                                        <div class="widget__chart-percentage"><?php echo $percent_customer; ?><small>%</small>
                                        </div>
                                        <div class="widget__chart-caption">New Visits</div>
                                    </div>
                                    <div class="widget__chart-canvas js-progress-circle" data-value="<?php echo $percent_customer/100; ?>" data-color="#22CCE2"></div>
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
                                    <h3 class="widget__title">Orders</h3>
                                    <div class="widget__status-title text-grey">Total visits today</div>
                                    <div class="widget__trade"><span class="widget__trade-count"><?php echo $number_order_new; ?></span><span class="trade-icon trade-icon--down">
                                            <svg class="icon-icon-trade-down">
                                                <use xlink:href="#icon-trade-down"></use>
                                            </svg></span><span class="badge badge--sm badge--red"><?php echo $percent_order; ?>%</span>
                                    </div>
                                    <div class="widget__details"><a class="link-under text-grey" href="#">Detail</a>
                                    </div>
                                </div>
                                <div class="widget__chart">
                                    <div class="widget__chart-inner">
                                        <div class="widget__chart-percentage"><?php  echo $percent_order;?><small>%</small>
                                        </div>
                                        <div class="widget__chart-caption">New Orders</div>
                                    </div>
                                    <div class="widget__chart-canvas js-progress-circle" data-value="<?php echo $percent_order/100;?>" data-color="#FDBF5E"></div>
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
                                    <h3 class="widget__title">Sales</h3>
                                    <div class="widget__status-title text-grey">Total visits today</div>
                                    <div class="widget__trade"><span class="widget__trade-count">$500</span><span class="trade-icon trade-icon--up">
                                            <svg class="icon-icon-trade-up">
                                                <use xlink:href="#icon-trade-up"></use>
                                            </svg></span><span class="badge badge--sm badge--green">9%</span>
                                    </div>
                                    <div class="widget__details"><a class="link-under text-grey" href="#">Detail</a>
                                    </div>
                                </div>
                                <div class="widget__chart">
                                    <div class="widget__chart-inner">
                                        <div class="widget__chart-percentage">80<small>%</small>
                                        </div>
                                        <div class="widget__chart-caption">New Sales</div>
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
                <div class="col-12 col-lg-7 col-xl-8 d-flex">
                    <div class="card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__header">
                                    <div class="card__header-left">
                                        <h3 class="card__header-title">Revenue</h3>
                                    </div>
                                    <div class="card__tools">
                                        <div class="card__tools-row row row--xs gutter-bottom-xs">
                                            <div class="card__tools-calendar col-auto">
                                                <div class="input-group input-group--prepend input-group--append">
                                                    <div class="input-group__prepend">
                                                        <svg class="icon-icon-calendar">
                                                            <use xlink:href="#icon-calendar"></use>
                                                        </svg>
                                                    </div>
                                                    <input class="input input--select" type="text" value="01.12.18 / 07.12.18" readonly="readonly" /><span class="input-group__arrow">
                                                        <svg class="icon-icon-keyboard-down">
                                                            <use xlink:href="#icon-keyboard-down"></use>
                                                        </svg></span>
                                                </div>
                                            </div>
                                            <div class="card__tools-week col">
                                                <div class="input-group input-group--append">
                                                    <input class="input input--select" type="text" value="Week" data-toggle="dropdown" readonly="readonly" /><span class="input-group__arrow">
                                                        <svg class="icon-icon-keyboard-down">
                                                            <use xlink:href="#icon-keyboard-down"></use>
                                                        </svg></span>
                                                    <div class="dropdown-menu dropdown-menu--right dropdown-menu--fluid js-dropdown-select"><a class="dropdown-menu__item active" href="#" tabindex="0" data-value="Week">Week</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="Month">Month</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="Quarter">Quarter</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="Year">Year</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="All Time">All Time</a>
                                                        <a class="dropdown-menu__item" href="#" tabindex="0" data-value="Custom">Custom</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card__body">
                                    <div class="card__widgets">
                                        <div class="card__widgets-row gutter-bottom-sm">
                                            <div class="card-widget">
                                                <h4 class="card-widget__title">Current week</h4>
                                                <div class="card-widget__trade"><span class="card-widget__count text-red">$180</span><span class="trade-icon trade-icon--up">
                                                        <svg class="icon-icon-trade-up">
                                                            <use xlink:href="#icon-trade-up"></use>
                                                        </svg></span><span class="badge badge--green badge--sm">5%</span>
                                                </div>
                                            </div>
                                            <div class="card-widget">
                                                <h4 class="card-widget__title">Previous week</h4>
                                                <div class="card-widget__trade"><span class="card-widget__count text-grey">$52.30</span><span class="trade-icon trade-icon--down">
                                                        <svg class="icon-icon-trade-down">
                                                            <use xlink:href="#icon-trade-down"></use>
                                                        </svg></span><span class="badge badge--red badge--sm">2%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card__chart">
                                        <div class="card__container card__container--gutter-sm">
                                            <div class="card__chart-item chart-revenue" id="revenueChart" data-series="[[0, 10, 48, 9, 9, 53, 12], [0, 45, 9, 49, 53, 180, 70]]"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 col-xl-4 d-flex">
                    <div class="card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__header mb-0">
                                    <div class="card__header-left">
                                        <h3 class="card__header-title">Profit</h3>
                                    </div>

                                </div>
                                <div class="card__body">
                                    <div class="card__chart">
                                        <div class="card__chart-item chart-profit" id="profitPieChart" data-series="[200, 120, 180]"></div>
                                    </div>
                                </div>
                                <div class="card__footer">
                                    <div class="card__container">
                                        <table class="card__stat">
                                            <tbody>
                                                <tr>
                                                    <td><span class="signal" style="color: #FF3D57;"></span><span>Current</span>
                                                    </td>
                                                    <td><span>$500</span><span class="quotation quotation--up">
                                                            <svg class="icon-icon-arrow-down">
                                                                <use xlink:href="#icon-arrow-down"></use>
                                                            </svg></span>
                                                    </td>
                                                    <td><span class="text-grey">37%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="signal" style="color: #FDBF5E;"></span><span>Lost</span>
                                                    </td>
                                                    <td><span>$450</span><span class="quotation quotation--down">
                                                            <svg class="icon-icon-arrow-down">
                                                                <use xlink:href="#icon-arrow-down"></use>
                                                            </svg></span>
                                                    </td>
                                                    <td><span class="text-grey">35%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="signal" style="color: #22CCE2;"></span><span>Target</span>
                                                    </td>
                                                    <td><span>$300</span><span class="quotation quotation--down">
                                                            <svg class="icon-icon-arrow-down">
                                                                <use xlink:href="#icon-arrow-down"></use>
                                                            </svg></span>
                                                    </td>
                                                    <td><span class="text-grey">28%</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
                <div class="col-12 col-lg-7 col-xl-8 d-flex">
                    <div class="card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__header">
                                    <div class="card__header-left">
                                        <h3 class="card__header-title">Activity</h3>
                                    </div>
                                    <div class="card__tools">
                                        <div class="card__tools-row row row--xs gutter-bottom-xs">
                                            <div class="card__tools-calendar col-auto">
                                                <div class="input-group input-group--prepend input-group--append">
                                                    <div class="input-group__prepend">
                                                        <svg class="icon-icon-calendar">
                                                            <use xlink:href="#icon-calendar"></use>
                                                        </svg>
                                                    </div>
                                                    <input class="input input--select" type="text" value="01.12.18 / 07.12.18" readonly="readonly" /><span class="input-group__arrow">
                                                        <svg class="icon-icon-keyboard-down">
                                                            <use xlink:href="#icon-keyboard-down"></use>
                                                        </svg></span>
                                                </div>
                                            </div>
                                            <div class="card__tools-week col">
                                                <div class="input-group input-group--append">
                                                    <input class="input input--select" type="text" value="Week" data-toggle="dropdown" readonly="readonly" /><span class="input-group__arrow">
                                                        <svg class="icon-icon-keyboard-down">
                                                            <use xlink:href="#icon-keyboard-down"></use>
                                                        </svg></span>
                                                    <div class="dropdown-menu dropdown-menu--right dropdown-menu--fluid js-dropdown-select"><a class="dropdown-menu__item active" href="#" tabindex="0" data-value="Week">Week</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="Month">Month</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="Quarter">Quarter</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="Year">Year</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="All Time">All Time</a>
                                                        <a class="dropdown-menu__item" href="#" tabindex="0" data-value="Custom">Custom</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card__body">
                                    <div class="card__chart">
                                        <div class="card__container">
                                            <div class="card__chart-item chart-activity" id="activityChart" data-series="[[&quot;Mon&quot;, &quot;Tue&quot;, &quot;Wed&quot;, &quot;Thu&quot;, &quot;Fri&quot;, &quot;Sat&quot;, &quot;Sun&quot;], [170, 120, 200, 270, 220, 290, 320], [120, 90, 100, 240, 120, 200, 250]]"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 col-xl-4 d-flex">
                    <div class="card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__header mb-0">
                                    <div class="card__header-left">
                                        <h3 class="card__header-title">Tasks</h3>
                                    </div>

                                </div>
                                <div class="card__body">
                                    <div class="card__chart">
                                        <div class="card__chart-item chart-task" id="taskPieChart" data-series="[75, 25, 80]"></div>
                                    </div>
                                    <div class="card__chart-progress">
                                        <div class="card__chart-progress-item">
                                            <div class="card__progressbar">
                                                <div class="progressbar">
                                                    <div class="progressbar__legend"><span class="progressbar__legend-marker" style="color: #FF3D57"></span><span>Complete</span>
                                                    </div>
                                                    <div class="progressbar__items">
                                                        <div class="progressbar__bar" style="width: 75%; background-color: #FF3D57;"></div>
                                                    </div>
                                                    <div class="progressbar__append"><span class="progressbar__percentage">75%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card__chart-progress-item">
                                            <div class="card__progressbar">
                                                <div class="progressbar">
                                                    <div class="progressbar__legend"><span class="progressbar__legend-marker" style="color: #FDBF5E"></span><span>In Progress</span>
                                                    </div>
                                                    <div class="progressbar__items">
                                                        <div class="progressbar__bar" style="width: 25%; background-color: #FDBF5E;"></div>
                                                    </div>
                                                    <div class="progressbar__append"><span class="progressbar__percentage">25%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card__chart-progress-item">
                                            <div class="card__progressbar">
                                                <div class="progressbar">
                                                    <div class="progressbar__legend"><span class="progressbar__legend-marker" style="color: #22CCE2"></span><span>Started</span>
                                                    </div>
                                                    <div class="progressbar__items">
                                                        <div class="progressbar__bar" style="width: 80%; background-color: #22CCE2;"></div>
                                                    </div>
                                                    <div class="progressbar__append"><span class="progressbar__percentage">80%</span>
                                                    </div>
                                                </div>
                                            </div>
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
                <div class="col-12 col-lg-7 col-xl-8 d-flex">
                    <div class="card card--overview">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__header">
                                    <div class="card__header-left">
                                        <h3 class="card__header-title">Overview</h3>
                                    </div>
                                    <div class="card__tools">
                                        <div class="card__tools-row row row--xs gutter-bottom-xs">
                                            <div class="card__tools-switcher col">
                                                <div class="switcher-button">
                                                    <div class="switcher-button__items">
                                                        <div class="switcher-button__float"></div>
                                                        <div class="switcher-button__item active">
                                                            <button class="switcher-button__btn">Weekly</button>
                                                        </div>
                                                        <div class="switcher-button__item">
                                                            <button class="switcher-button__btn">Monthly</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card__body">
                                    <div class="card__widgets">
                                        <div class="card__widgets-row gutter-bottom-sm">
                                            <div class="card-widget card-widget--sm">
                                                <h4 class="card-widget__title">Views</h4>
                                                <div class="card-widget__trade"><span class="card-widget__count">9,000</span><span class="trade-icon trade-icon--up">
                                                        <svg class="icon-icon-trade-up">
                                                            <use xlink:href="#icon-trade-up"></use>
                                                        </svg></span><span class="badge badge--green badge--sm">5%</span>
                                                </div>
                                            </div>
                                            <div class="card-widget card-widget--sm">
                                                <h4 class="card-widget__title">Visits</h4>
                                                <div class="card-widget__trade"><span class="card-widget__count">15,000</span><span class="trade-icon trade-icon--down">
                                                        <svg class="icon-icon-trade-down">
                                                            <use xlink:href="#icon-trade-down"></use>
                                                        </svg></span><span class="badge badge--red badge--sm">5%</span>
                                                </div>
                                            </div>
                                            <div class="card-widget card-widget--sm">
                                                <h4 class="card-widget__title">Orders</h4>
                                                <div class="card-widget__trade"><span class="card-widget__count">18,000</span><span class="trade-icon trade-icon--up">
                                                        <svg class="icon-icon-trade-up">
                                                            <use xlink:href="#icon-trade-up"></use>
                                                        </svg></span><span class="badge badge--green badge--sm">5%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card__chart">
                                        <div class="card__container card__container--gutter-sm">
                                            <div class="card__chart-item chart-overview" id="overviewLineChart" data-series="[20, 60, 30, 50, 120, 90, 200]"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 col-xl-4 d-flex">
                    <div class="card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__header">
                                    <div class="card__header-left">
                                        <h3 class="card__header-title">Statistics</h3>
                                    </div>

                                </div>
                                <div class="card__body">
                                    <div class="card__chart">
                                        <div class="card__container">
                                            <div class="card__chart-item chart-statistics" id="statisticsBarChart" data-series="[[&quot;Mon&quot;, &quot;Tue&quot;, &quot;Wed&quot;, &quot;Thu&quot;, &quot;Fri&quot;, &quot;Sat&quot;, &quot;Sun&quot;],[23000, 62000, 79000, 86000, 90500, 39500, 64000],[42000, 49000, 39000, 100000, 67000, 59000, 45000]]"></div>
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