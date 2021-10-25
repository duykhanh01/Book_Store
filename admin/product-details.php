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
                        <div class="font-weight-bold">Mã sách:</div>
                        <div class="add-product__row">
                            <div class="add-product__slider" id="addProductSlider">
                                <div class="add-product__thumbs">
                                    <div class="add-product__thumbs-slider swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="add-product__thumb swiper-slide">
                                                <img class="add-product__thumb-image swiper-lazy" src="img/content/product/thumb-1.jpg" srcset="img/content/product/thumb-1.jpg 2x" alt="#">
                                                <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                            </div>
                                            <div class="add-product__thumb swiper-slide">
                                                <img class="add-product__thumb-image swiper-lazy" src="img/content/product/thumb-2.jpg" srcset="img/content/product/thumb-2.jpg 2x" alt="#">
                                                <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                            </div>
                                            <div class="add-product__thumb swiper-slide">
                                                <img class="add-product__thumb-image swiper-lazy" src="img/content/product/thumb-3.jpg" srcset="img/content/product/thumb-3.jpg 2x" alt="#">
                                                <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                            </div>
                                            <div class="add-product__thumb swiper-slide">
                                                <img class="add-product__thumb-image swiper-lazy" src="img/content/product/thumb-4.jpg" srcset="img/content/product/thumb-4.jpg 2x" alt="#">
                                                <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                            </div>
                                            <div class="add-product__thumb swiper-slide">
                                                <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                            </div>
                                            <div class="add-product__thumb swiper-slide">
                                                <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                            </div>
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
                                            <div class="add-product__gallery-slide swiper-slide">
                                                <img class="add-product__gallery-image swiper-lazy" src="img/content/product/item-1.jpg" srcset="img/content/product/item-1.jpg 2x" alt="#">
                                                <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                            </div>
                                            <div class="add-product__gallery-slide swiper-slide">
                                                <img class="add-product__gallery-image swiper-lazy" src="img/content/product/item-2.jpg" srcset="img/content/product/item-2.jpg 2x" alt="#">
                                                <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                            </div>
                                            <div class="add-product__gallery-slide swiper-slide">
                                                <img class="add-product__gallery-image swiper-lazy" src="img/content/product/item-3.jpg" srcset="img/content/product/item-3.jpg 2x" alt="#">
                                                <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                            </div>
                                            <div class="add-product__gallery-slide swiper-slide">
                                                <img class="add-product__gallery-image swiper-lazy" src="img/content/product/item-4.jpg" srcset="img/content/product/item-4.jpg 2x" alt="#">
                                                <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                            </div>
                                            <div class="add-product__gallery-slide swiper-slide">
                                                <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                            </div>
                                            <div class="add-product__gallery-slide swiper-slide">
                                                <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-product__right">

                                <div class="row row--md">
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
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label ">Tên sách</label>
                                        <div class="input-group">
                                            <input disabled class="input" type="text" placeholder="" value="Apple Watch Series 4" required>
                                        </div>
                                    </div>

                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label">Tên tác giả</label>
                                        <div class="input-group">
                                            <input disabled class="input" type="text" placeholder="" value="Apple Watch Series 4" required>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label">NXB</label>
                                        <div class="input-group">
                                            <input disabled class="input" type="text" placeholder="" value="Apple Watch Series 4" required>
                                        </div>
                                    </div>

                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label">Thể loại</label>
                                        <div class="input-group">
                                            <input disabled class="input" type="text" placeholder="" value="Apple Watch Series 4" required>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label">Mô tả chi tiết</label>
                                        <div class="input-editor">
                                            <textarea disabled class="form-control" id="exampleFormControlTextarea1" row=3 name="desc"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label">Ngày đăng</label>
                                        <div class="input-group">
                                            <input disabled class="input" type="text" placeholder="" value="Apple Watch Series 4" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 form-group form-group--lg">
                                        <label class="form-label">Giá</label>
                                        <div class="input-group input-group--prepend">
                                            <div class="input-group__prepend"><span class="input-group__symbol">$</span>
                                            </div>
                                            <input disabled class="input" type="number" min="0" max="999999999" placeholder="" value="399" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 form-group form-group--lg">
                                        <label class="form-label">Discount</label>
                                        <div class="input-group input-group--prepend">
                                            <div class="input-group__prepend"><span class="input-group__symbol">%</span>
                                            </div>
                                            <input disabled class="input" type="number" min="0" max="100" placeholder="" value="10" required>
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
<?php require_once("templates/footer.php") ?>

</html>