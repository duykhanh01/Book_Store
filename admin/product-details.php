<?php

include('../config/db_connect.php');
if (!isset($_GET['pr_id'])) header("Loction: 404.php");
$id =  $_GET['id'];
$sql = "SELECT  category.c_name as c_name, pr_id, pr_code, pr_name,pr_author, pr_pub, pr_category, pr_status,pr_date, pr_number, pr_price, pr_discount, pr_img, pr_desc from products, category where category.c_id = pr_category AND pr_id = '$id'";
$res = mysqli_query($conn, $sql);
$book = mysqli_fetch_assoc($res);
$images = explode(",", $book['pr_img']);


?>




<!DOCTYPE html>
<html class="no-js" lang="en" data-theme="light">

<?php require_once("templates/header.php") ?>
<main class="page-content">
    <div class="container">
        <div class="page-header">
            <h1 class="page-header__title">Add Product</h1>
        </div>
        <div class="page-tools">
            <div class="page-tools__breadcrumbs">
                <div class="breadcrumbs">
                    <div class="breadcrumbs__container">
                        <ol class="breadcrumbs__list">
                            <li class="breadcrumbs__item">
                                <a class="breadcrumbs__link" href="index.html">
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
                            <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="products.html"><span>Products</span>
                                    <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                        <use xlink:href="#icon-keyboard-right"></use>
                                    </svg></a>
                            </li>
                            <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Product Details</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="card add-product card--content-center">
            <div class="card__wrapper">
                <div class="card__container">
                    <form class="add-product__form">
                        <div class="d-flex justify-content-between">
                            <div class="font-weight-bold">Mã sách: <?php echo $book['pr_id'] ?> </div>
                            <button class="button-add button-add--blue" style="font-size: 20px" data-modal=" #addProduct">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                        </div>
                        <div class=" add-product__row">
                            <div class="add-product__slider" id="addProductSlider">
                                <div class="add-product__thumbs">
                                    <div class="add-product__thumbs-slider swiper-container">
                                        <div class="swiper-wrapper">
                                            <?php foreach ($images as $image) : ?>
                                                <div class="add-product__thumb swiper-slide">
                                                    <img class="add-product__thumb-image swiper-lazy" src="<?php echo $image; ?>" srcset="<?php echo $image; ?> 2x" alt="#">
                                                    <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <div class="add-product__thumbs-prev">
                                        <a class="add-product__thumbs-arrow add-product__thumbs-arrow--prev" href="#">
                                            <svg class="icon-icon-chevron">
                                                <use xlink:href="#icon-chevron"></use>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="add-product__thumbs-next">
                                        <a class="add-product__thumbs-arrow add-product__thumbs-arrow--next" href="#">
                                            <svg class="icon-icon-chevron">
                                                <use xlink:href="#icon-chevron"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="add-product__gallery">
                                    <div class="add-product__gallery-slider swiper-container">
                                        <div class="swiper-wrapper">
                                            <?php foreach ($images as $image) : ?>
                                                <div class="add-product__gallery-slide swiper-slide">

                                                    <img class="add-product__gallery-image swiper-lazy" src="<?php echo $image; ?>" srcset="<?php echo $image; ?> 2x" alt="#">
                                                    <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-product__right">

                                <div class="row row--md">

                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label ">Tên sách</label>
                                        <div class="input-group">
                                            <input disabled class="input" type="text" placeholder="" value="<?php echo $book['pr_name']; ?>" required>
                                        </div>
                                    </div>

                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label">Tên tác giả</label>
                                        <div class="input-group">
                                            <input disabled class="input" type="text" placeholder="" value="<?php echo $book['pr_author']; ?>" required>
                                        </div>
                                    </div>
                                    <div class=" col-12 form-group form-group--lg">
                                        <label class="form-label">NXB</label>
                                        <div class="input-group">
                                            <input disabled class="input" type="text" placeholder="" value="<?php echo $book['pr_pub']; ?>" required>
                                        </div>
                                    </div>

                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label">Thể loại</label>
                                        <div class="input-group">
                                            <input disabled class="input" type="text" placeholder="" value="<?php echo $book['c_name']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label">Mô tả chi tiết</label>
                                        <div class="input-editor">
                                            <textarea disabled class="form-control" id="exampleFormControlTextarea3" row=3 name="desc"><?php echo $book['pr_desc']; ?>
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label">Ngày đăng</label>
                                        <div class="input-group">
                                            <input disabled class="input" type="text" placeholder="" value="<?php echo $book['pr_date'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label">Trạng thái</label>
                                        <div class="input-group">
                                            <input disabled class="input" type="text" placeholder="" value="<?php if ($book['pr_status'] == 0)  echo "Private";
                                                                                                            else echo "Public" ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 form-group form-group--lg">
                                        <label class="form-label">Giá</label>
                                        <div class="input-group input-group--prepend">
                                            <div class="input-group__prepend"><span class="input-group__symbol">$</span>
                                            </div>
                                            <input disabled class="input" type="number" min="0" max="999999999" placeholder="" value="<?php echo $book['pr_price']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 form-group form-group--lg">
                                        <label class="form-label">Discount</label>
                                        <div class="input-group input-group--prepend">
                                            <div class="input-group__prepend"><span class="input-group__symbol">%</span>
                                            </div>
                                            <input disabled class="input" type="number" min="0" max="100" placeholder="" value="<?php echo $book['pr_discount']; ?>" required>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
<div class="modal modal-compact modal-success" id="addProductSuccess">
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
                                        <input class="input" type="text" placeholder="Nhập tên sách" required name="namebook">
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label">Mã sách</label>
                                    <div class="input-group">
                                        <input class="input" type="text" placeholder="Nhập mã sách" required name="prcode">
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label">Tên tác giả</label>
                                    <div class="input-group">
                                        <input class="input" type="text" placeholder="Nhập tên tác giả" required name="nameauthor">
                                    </div>
                                </div>

                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label">Nhà xuất bản</label>
                                    <div class="input-group">
                                        <input class="input" type="text" placeholder="Nhà xuất bản" required name="namepub">
                                    </div>
                                </div>

                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label">Số lượng sách</label>
                                    <div class="input-group">
                                        <input class="input" type="number" placeholder="Nhập số lượng" required name="prnumber">
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label">Mô tả chi tiết</label>
                                    <div class="input-editor">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Nhập mô tả chi tiết sản phẩm" rows="5" name="desc"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label">Thể loại</label>
                                    <div class="input-group input-group--append">
                                        <select class="input js-input-select input--fluid" data-placeholder="" name="cate">
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
                                        <input class="input" type="number" min="0" max="999999999" placeholder="VNĐ" value="" required>

                                    </div>
                                </div>
                                <div class="col-12 col-md-6 form-group form-group--lg">
                                    <label class="form-label">Giảm giá (VNĐ)</label>
                                    <div class="input-group input-group--prepend">
                                        <input class="input" type="number" min="0" max="999999999" placeholder="VN" value="" required>

                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label">Ảnh sản phẩm</label>
                                    <div class="image-upload">
                                        <div class="image-upload__drop">
                                            <input class="image-upload__input" type="file" name="file_upload" multiple="multiple" accept="image/png, image/jpeg" />
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
                                <button class="button button--primary button--block" data-dismiss="modal" data-modal="#addProductSuccess"><span class="button__text">Create</span>
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