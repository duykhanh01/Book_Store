<?php
session_start();


?>
<!DOCTYPE html>
<html class="no-js" lang="en" data-theme="light">

<?php
include('config/db_connect.php');
require_once("templates/header.php"); ?>
<main class="page-content">
    <div class="container">
        <div class="page-header">
            <h1 class="page-header__title">Orders</h1>
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
                            <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Orders</span>
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
                    <div class="page-tools__right-item"><a class="button-icon" href="#"><span class="button-icon__icon">
                                <svg class="icon-icon-import">
                                    <use xlink:href="#icon-import"></use>
                                </svg></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="toolbox">
            <div class="toolbox__row row gutter-bottom-xs">
                <div class="toolbox__left col-12 col-lg">
                    <div class="toolbox__left-row row row--xs gutter-bottom-xs">
                        <div class="form-group form-group--inline col-12 col-sm-auto">
                            <label class="form-label">Show</label>
                            <div class="input-group input-group--white input-group--append">
                                <input class="input input--select" type="text" value="10" size="1" data-toggle="dropdown" readonly><span class="input-group__arrow">
                                    <svg class="icon-icon-keyboard-down">
                                        <use xlink:href="#icon-keyboard-down"></use>
                                    </svg></span>
                                <div class="dropdown-menu dropdown-menu--right dropdown-menu--fluid js-dropdown-select">
                                    <a class="dropdown-menu__item active" href="#" tabindex="0" data-value="10">10</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="15">15</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="20">20</a>
                                    <a class="dropdown-menu__item" href="#" tabindex="0" data-value="25">25</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="50">50</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-group--inline col col-sm-auto">
                            <div class="input-group input-group--white input-group--prepend input-group--append">
                                <div class="input-group__prepend">
                                    <svg class="icon-icon-calendar">
                                        <use xlink:href="#icon-calendar"></use>
                                    </svg>
                                </div>
                                <input class="input input--select" type="text" value="01.12.18 / 07.12.18" readonly><span class="input-group__arrow">
                                    <svg class="icon-icon-keyboard-down">
                                        <use xlink:href="#icon-keyboard-down"></use>
                                    </svg></span>
                            </div>
                        </div>
                        <div class="form-group form-group--inline col-12 col-sm-auto d-none d-sm-block">
                            <div class="toolbox__status input-group input-group--white input-group--append">
                                <input class="input input--select" type="text" value="All status" data-toggle="dropdown" readonly><span class="input-group__arrow">
                                    <svg class="icon-icon-keyboard-down">
                                        <use xlink:href="#icon-keyboard-down"></use>
                                    </svg></span>
                                <div class="dropdown-menu dropdown-menu--right dropdown-menu--fluid js-dropdown-select">
                                    <a class="dropdown-menu__item active" href="#" tabindex="0" data-value="All status"><span class="marker-item"></span> All status</a>
                                    <a class="dropdown-menu__item" href="#" tabindex="0" data-value="Complete"><span class="marker-item color-green"></span>
                                        Complete</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="Pending"><span class="marker-item color-blue"></span>
                                        Pending</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="Processing"><span class="marker-item color-orange"></span>
                                        Processing</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="toolbox__right col-12 col-lg-auto">
                    <div class="toolbox__right-row row row--xs flex-nowrap">
                        <div class="col col-lg-auto">
                            <form class="toolbox__search" method="GET">
                                <div class="input-group input-group--white input-group--prepend">
                                    <div class="input-group__prepend">
                                        <svg class="icon-icon-search">
                                            <use xlink:href="#icon-search"></use>
                                        </svg>
                                    </div>
                                    <input class="input" type="text" placeholder="Search orders">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-wrapper">
            <div class="table-wrapper__content table-collapse scrollbar-thin scrollbar-visible" data-simplebar>
                <table class="table table--lines">
                    <colgroup>
                        <col width="90px">
                        <col width="100px">
                        <col width="16%">
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                    </colgroup>
                    <thead class="table__header">
                        <tr class="table__header-row">
                            <th>
                                #
                            </th>
                            <th class="d-none d-lg-table-cell"><span>Order ID</span>
                            </th>
                            <th class="table__th-sort"><span class="align-middle">Customer Name</span><span class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort d-none d-sm-table-cell"><span class="align-middle">Payment
                                    Type</span><span class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort"><span class="align-middle">Total</span><span class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort"><span class="align-middle">Date</span><span class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort d-none d-sm-table-cell"><span class="align-middle">Status</span><span class="sort sort--down"></span>
                            </th>
                            <th class="table__actions"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sl_orders = "SELECT * FROM orders, customers where orders.cus_id = customers.cus_id";
                        $res_orders = mysqli_query($conn, $sl_orders);
                        $count = 1;
                        while ($row_or  = mysqli_fetch_assoc($res_orders)) { ?>
                            <tr class="table__row">
                                <td class="table__td">
                                    <?php echo $count; ?>
                                </td>
                                <td class="d-none d-lg-table-cell table__td"><span class="text-grey"><?php echo $row_or['or_id']; ?></span>
                                </td>
                                <td class="table__td"><?php echo $row_or['cus_name']; ?></td>
                                <td class="d-none d-sm-table-cell table__td"><span class="text-grey"><?php echo $row_or['or_pay']; ?> </span>
                                </td>
                                <td class="table__td"><span><?php echo $row_or['or_total']; ?></span>
                                </td>
                                <td class="table__td text-nowrap"><span class="text-grey"><?php echo $row_or['or_date']; ?> </span>
                                </td>
                                <td class="d-none d-sm-table-cell table__td">
                                    <div class="table__status"><span class="table__status-icon color-green"></span>
                                        <?php
                                        if ($row_or['or_status'] == 0) {
                                            echo "Đang xử lý";
                                        } elseif ($row_or['or_status'] == 1) {
                                            echo "Đã xử lý";
                                        } elseif ($row_or['or_status'] == 2) {
                                            echo "Đang giao hàng";
                                        } elseif ($row_or['or_status'] == 3) {
                                            echo "Giao hàng thành công";
                                        }

                                        ?></div>
                                </td>

                                <td class="table__td table__actions">
                                    <div class="items-more">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-items dropdown-items--right">
                                            <div class="dropdown-items__container">
                                                <ul class="dropdown-items__list">
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link" href="order-details.php?or_id=<?php echo $row_or['or_id']; ?>"><span class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-view">
                                                                    <use xlink:href="#icon-view"></use>
                                                                </svg></span>Details</a>
                                                    </li>

                                                    <li class="dropdown-items__item"><a class="dropdown-items__link" href="core/delete_orders.php?or_id=<?php echo $row_or['or_id']; ?>"><span class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-trash">
                                                                    <use xlink:href="#icon-trash"></use>
                                                                </svg></span>Delete</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link" href="order-status.php?or_id=<?php echo $row_or['or_id']; ?>"><span class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-trash">
                                                                    <use xlink:href="#icon-trash"></use>
                                                                </svg></span>Status</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php $count++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="table-wrapper__footer">
                <div class="row">
                    <div class="table-wrapper__show-result col text-grey"><span class="d-none d-sm-inline-block">Showing</span> 1 to 10 <span class="d-none d-sm-inline-block">of 50 items</span>
                    </div>
                    <div class="table-wrapper__pagination col-auto">
                        <ol class="pagination">
                            <li class="pagination__item">
                                <a class="pagination__arrow pagination__arrow--prev" href="#">
                                    <svg class="icon-icon-keyboard-left">
                                        <use xlink:href="#icon-keyboard-left"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="pagination__item active"><a class="pagination__link" href="#">1</a>
                            </li>
                            <li class="pagination__item"><a class="pagination__link" href="#">2</a>
                            </li>
                            <li class="pagination__item"><a class="pagination__link" href="#">3</a>
                            </li>
                            <li class="pagination__item pagination__item--dots">...</li>
                            <li class="pagination__item"><a class="pagination__link" href="#">10</a>
                            </li>
                            <li class="pagination__item">
                                <a class="pagination__arrow pagination__arrow--next" href="#">
                                    <svg class="icon-icon-keyboard-right">
                                        <use xlink:href="#icon-keyboard-right"></use>
                                    </svg>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
<?php require_once("templates/footer.php") ?>
</body>

</html>