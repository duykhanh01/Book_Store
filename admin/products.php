<?php
include('../config/db_connect.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en" data-theme="light">

<?php require_once("templates/header.php") ?>
<main class="page-content">
    <div class="container">
        <div class="page-header">
            <h1 class="page-header__title">Products</h1>
        </div>
        <div class="page-tools">
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
                            <div class="input-group input-group--white input-group--append">
                                <select id="select_category" class="input js-input-select" data-placeholder="">
                                    <?php
                                    include("../config/db_connect.php");
                                    $sql = "SELECT * FROM category";
                                    $res = mysqli_query($conn, $sql);
                                    $categories = mysqli_fetch_all($res, MYSQLI_ASSOC);
                                    ?>
                                    <option value="0" selected="selected">All Categories
                                    </option>
                                    <?php foreach ($categories as $category) :  ?>
                                        <option value="<?php echo $category['c_id'] ?>"><?php echo $category['c_name'] ?> </option>
                                    <?php endforeach; ?>
                                </select><span class="input-group__arrow">
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
                                    <a class="dropdown-menu__item" href="#" tabindex="0" data-value="Published"><span class="marker-item color-green"></span>
                                        Published</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="Deleted"><span class="marker-item color-red"></span>
                                        Deleted</a>
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
                                    <input class="input" type="text" placeholder="Search product">
                                </div>
                            </form>
                        </div>
                        <div class="col-auto">
                            <button class="button-add button-add--blue" data-modal="#addProduct"><span class="button-add__icon">
                                    <svg class="icon-icon-plus">
                                        <use xlink:href="#icon-plus"></use>
                                    </svg></span><span class="button-add__text"></span>
                            </button>
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
                        <col width="350px">
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
                            <th class="d-none d-lg-table-cell"><span>ID</span>
                            </th>
                            <th class="table__th-sort"><span class="align-middle">Product Name</span><span class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort"><span class="align-middle">Category</span><span class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort"><span class="align-middle">Price</span><span class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort d-none d-lg-table-cell"><span class="align-middle">Date</span><span class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort d-none d-sm-table-cell"><span class="align-middle">Status</span><span class="sort sort--down"></span>
                            </th>
                            <th class="table__actions"></th>
                        </tr>
                    </thead>

                    <tbody id="body-table">
                        <?php
                        $sl_product = "SELECT * FROM products";
                        $res_product = mysqli_query($conn, $sl_product);
                        $count = 1;
                        while ($row = mysqli_fetch_assoc($res_product)) {
                        ?>
                            <tr class="table__row">


                                <td class="table__td">
                                    <?php echo $count; ?>
                                </td>
                                <td class="d-none d-lg-table-cell table__td"><?php echo $row['pr_code']; ?><span class="text-grey"></span>
                                </td>
                                <td class="table__td"><?php echo $row['pr_name']; ?></td>
                                <td class="table__td"><span class="text-grey"><?php echo $row['pr_category']; ?></span>
                                </td>
                                <td class="table__td"><span><?php echo $row['pr_price']; ?></span>
                                </td>
                                <td class="d-none d-lg-table-cell table__td"><span class="text-grey"><?php echo $row['pr_date']; ?></span>
                                </td>
                                <td class="d-none d-sm-table-cell table__td">
                                    <div class="table__status"><span class="table__status-icon <?php if ($row['pr_status'] == 0)  echo "color-red";
                                                                                                else echo "color-green" ?>"></span>
                                        <?php if ($row['pr_status'] == 0)  echo "Deleted";
                                        else echo "Published" ?></div>
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
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-view">
                                                                    <use xlink:href="#icon-view"></use>
                                                                </svg></span>Details</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-trash">
                                                                    <use xlink:href="#icon-trash"></use>
                                                                </svg></span>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        <?php
                            $count++;
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
<div class="modal modal--panel modal--right" id="addProduct">
    <div class="modal__overlay" data-dismiss="modal"></div>
    <div class="modal__wrap">
        <div class="modal__window scrollbar-thin" data-simplebar>
            <div class="modal__content">
                <div class="modal__header">
                    <div class="modal__container">
                        <h2 class="modal__title">Thêm sản phẩm</h2>
                    </div>
                </div>
                <div class="modal__body">
                    <div class="modal__container">
                        <form method="POST">
                            <div class="row row--md">
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label">Tên sách</label>
                                    <div class="input-group">
                                        <input class="input" type="text" placeholder="Nhập tên sách" required id="pr_name" name="pr_name">
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label">Mã sách</label>
                                    <div class="input-group">
                                        <input class="input" type="text" placeholder="Nhập mã sách" required id="pr_code" name="pr_code">
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label">Tên tác giả</label>
                                    <div class="input-group">
                                        <input class="input" type="text" placeholder="Nhập tên tác giả" required id="auth_name" name="auth_name">
                                    </div>
                                </div>

                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label">Nhà xuất bản</label>
                                    <div class="input-group">
                                        <input class="input" type="text" placeholder="Nhà xuất bản" required id="pub_name" name="pub_name">
                                    </div>
                                </div>

                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label">Số lượng sách</label>
                                    <div class="input-group">
                                        <input class="input" type="number" placeholder="Nhập số lượng" required id="pr_number" name="pr_number">
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label">Mô tả chi tiết</label>
                                    <div class="input-editor">
                                        <textarea class="form-control pr_desc" id="exampleFormControlTextarea1" placeholder="Nhập mô tả chi tiết sản phẩm" rows="5" name="pr_desc"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label">Thể loại</label>
                                    <div class="input-group input-group--append">
                                        <select class="input js-input-select input--fluid" data-placeholder="" id="pr_category" name="pr_category">
                                            <?php
                                            include('../config/db_connect.php');
                                            $sl_Category = "SELECT * FROM `category`";
                                            $res_Category = mysqli_query($conn, $sl_Category);
                                            while ($row = mysqli_fetch_assoc($res_Category)) { ?>
                                                <option value="<?php echo $row['c_id']; ?>"><?php echo $row['c_name'] ?></option>
                                            <?php }
                                            ?>

                                        </select>
                                        <span class="input-group__arrow">
                                            <svg class="icon-icon-keyboard-down">
                                                <use xlink:href="#icon-keyboard-down"></use>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 form-group form-group--lg">
                                    <label class="form-label">Giá (VNĐ)</label>
                                    <div class="input-group input-group--prepend">
                                        <input class="input" type="number" min="0" max="999999999" placeholder="VNĐ" id="pr_price" name="pr_price" value="" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 form-group form-group--lg">
                                    <label class="form-label">Giảm giá (VNĐ)</label>
                                    <div class="input-group input-group--prepend">
                                        <input class="input" type="number" min="0" max="999999999" placeholder="VN" id="pr_discount" name="pr_discount" value="" required>

                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label">Ảnh sản phẩm</label>
                                    <div class="image-upload">
                                        <div class="image-upload__drop">
                                            <input class="image-upload__input" type="file" id="pr_images" name="pr_images" multiple="multiple" accept="image/png, image/jpeg" />
                                            <div class="image-upload__drop-text">
                                                <svg class="icon-icon-upload">
                                                    <use xlink:href="#icon-upload"></use>
                                                </svg> <span>Drag and Drop or </span> <span class="image-upload__drop-action text-blue">Browse</span> <span>to upload</span>
                                            </div>
                                        </div>
                                        <ul class="image-upload__list">
                                            <li class="image-upload__item">
                                                <div class="image-upload__progress">
                                                    <div class="image-upload__progress-icon"></div>
                                                </div>
                                                <div class="image-upload__action-remove">
                                                    <svg class="icon-icon-cross">
                                                        <use xlink:href="#icon-cross"></use>
                                                    </svg>
                                                </div>
                                            </li>
                                            <li class="image-upload__item">
                                                <div class="image-upload__progress">
                                                    <div class="image-upload__progress-icon"></div>
                                                </div>
                                                <div class="image-upload__action-remove">
                                                    <svg class="icon-icon-cross">
                                                        <use xlink:href="#icon-cross"></use>
                                                    </svg>
                                                </div>
                                            </li>
                                            <li class="image-upload__item">
                                                <div class="image-upload__progress">
                                                    <div class="image-upload__progress-icon"></div>
                                                </div>
                                                <div class="image-upload__action-remove">
                                                    <svg class="icon-icon-cross">
                                                        <use xlink:href="#icon-cross"></use>
                                                    </svg>
                                                </div>
                                            </li>
                                            <li class="image-upload__item">
                                                <div class="image-upload__progress">
                                                    <div class="image-upload__progress-icon"></div>
                                                </div>
                                                <div class="image-upload__action-remove">
                                                    <svg class="icon-icon-cross">
                                                        <use xlink:href="#icon-cross"></use>
                                                    </svg>
                                                </div>
                                            </li>
                                            <li class="image-upload__item">
                                                <div class="image-upload__progress">
                                                    <div class="image-upload__progress-icon"></div>
                                                </div>
                                                <div class="image-upload__action-remove">
                                                    <svg class="icon-icon-cross">
                                                        <use xlink:href="#icon-cross"></use>
                                                    </svg>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal__footer">
                    <div class="modal__container">
                        <div class="modal__footer-buttons">
                            <div class="modal__footer-button">
                                <button id="add-product" class="button button--primary button--block" data-dismiss="modal" data-modal="#addProductSuccess"><span class="button__text">Create</span>
                                </button>
                            </div>
                            <div class="modal__footer-button">
                                <button class="button button--secondary button--block" data-dismiss="modal"><span class="button__text">Cancel</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-compact modal-success scrollbar-thin" id="addProductSuccess" data-simplebar>
    <div class="modal__overlay" data-dismiss="modal"></div>
    <div class="modal__wrap">
        <div class="modal__window">
            <div class="modal__content">
                <div class="modal__body">
                    <div class="modal__container">
                        <img class="modal-success__icon" src="img/content/checked-success.svg" alt="#">
                        <h4 class="modal-success__title">Product was added</h4>
                    </div>
                </div>
                <div class="modal-compact__buttons">
                    <div class="modal-compact__button-item">
                        <button class="modal-compact__button button" data-dismiss="modal" data-modal="#addProduct"><span class="button__text">Add new product</span>
                        </button>
                    </div>
                    <div class="modal-compact__button-item">
                        <button class="modal-compact__button button" data-dismiss="modal"><span class="button__text">Close</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once("templates/footer.php") ?>


</html>