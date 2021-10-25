<!DOCTYPE html>
<html class="no-js" lang="en" data-theme="light">


<?php require_once("templates/header.php") ?>
<main class="page-content">
    <div class="container">
        <div class="page-header">
            <h1 class="page-header__title">Customers <span class="text-grey">(50)</span></h1>
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
                            <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Customers</span>
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
                                <div class="dropdown-menu dropdown-menu--right dropdown-menu--fluid js-dropdown-select"><a class="dropdown-menu__item active" href="#" tabindex="0" data-value="10">10</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="15">15</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="20">20</a>
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
                                <div class="dropdown-menu dropdown-menu--right dropdown-menu--fluid js-dropdown-select"><a class="dropdown-menu__item active" href="#" tabindex="0" data-value="All status"><span class="marker-item"></span> All status</a>
                                    <a class="dropdown-menu__item" href="#" tabindex="0" data-value="Active"><span class="marker-item color-green"></span> Active</a>
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
                                    <input class="input" type="text" placeholder="Search Customer">
                                </div>
                            </form>
                        </div>
                        <div class="col-auto">
                            <button class="button-add button-add--blue" data-modal="#"><span class="button-add__icon">
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
                <table class="table table--spaces">
                    <colgroup>
                        <col width="70px">
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                    </colgroup>
                    <thead class="table__header">
                        <tr class="table__header-row">
                            <th>
                                <div class="table__checkbox table__checkbox--all">
                                    <label class="checkbox">
                                        <input class="js-checkbox-all" type="checkbox" data-checkbox-all="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                                <svg class="icon-icon-checked">
                                                    <use xlink:href="#icon-checked"></use>
                                                </svg></span></span>
                                    </label>
                                </div>
                            </th>
                            <th class="table__th-sort"><span class="align-middle">Customer Name</span><span class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort"><span class="align-middle">Location</span><span class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort"><span class="align-middle">Orders</span><span class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort"><span class="align-middle">Registered</span><span class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort d-none d-sm-table-cell"><span class="align-middle">Status</span><span class="sort sort--down"></span>
                            </th>
                            <th class="table__actions"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table__row">
                            <td class="table__td">
                                <div class="table__checkbox table__checkbox--all">
                                    <label class="checkbox">
                                        <input type="checkbox" data-checkbox="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                                <svg class="icon-icon-checked">
                                                    <use xlink:href="#icon-checked"></use>
                                                </svg></span></span>
                                    </label>
                                </div>
                            </td>
                            <td class="table__td">
                                <div class="media-item media-item--medium">
                                    <a class="media-item__icon color-red" href="customer-account.php">
                                        <div class="media-item__icon-text">FB</div>
                                        <img class="media-item__thumb" src="img/content/humans/item-1.jpg" alt="#">
                                    </a>
                                    <div class="media-item__right">
                                        <h5 class="media-item__title"><a href="customer-account.php">Felecia Burke</a></h5><a class="text-sm text-grey" href="mailto:#">example@mail.com</a>
                                    </div>
                                </div>
                            </td>
                            <td class="table__td text-light-theme">Hong Kong, China</td>
                            <td class="table__td text-dark-theme">1000</td>
                            <td class="table__td text-light-theme">12.07.2018</td>
                            <td class="table__td d-none d-sm-table-cell">
                                <div class="table__status"><span class="table__status-icon color-green"></span> Active</div>
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
                                                <li class="dropdown-items__item"><a class="dropdown-items__link" href="order-details.php"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                                <use xlink:href="#icon-view"></use>
                                                            </svg></span>Details</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-duplicate">
                                                                <use xlink:href="#icon-duplicate"></use>
                                                            </svg></span>Duplicate</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-archive">
                                                                <use xlink:href="#icon-archive"></use>
                                                            </svg></span>Archive</a>
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
                        <tr class="table__space">
                            <td colspan="7"></td>
                        </tr>
                        <tr class="table__row">
                            <td class="table__td">
                                <div class="table__checkbox table__checkbox--all">
                                    <label class="checkbox">
                                        <input type="checkbox" data-checkbox="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                                <svg class="icon-icon-checked">
                                                    <use xlink:href="#icon-checked"></use>
                                                </svg></span></span>
                                    </label>
                                </div>
                            </td>
                            <td class="table__td">
                                <div class="media-item media-item--medium">
                                    <a class="media-item__icon color-red" href="customer-account.php">
                                        <div class="media-item__icon-text">SH</div>
                                        <img class="media-item__thumb" src="img/content/humans/item-2.jpg" alt="#">
                                    </a>
                                    <div class="media-item__right">
                                        <h5 class="media-item__title"><a href="customer-account.php">Sophia Hale</a></h5><a class="text-sm text-grey" href="mailto:#">example@mail.com</a>
                                    </div>
                                </div>
                            </td>
                            <td class="table__td text-light-theme">New York, USA</td>
                            <td class="table__td text-dark-theme">1000</td>
                            <td class="table__td text-light-theme">12.07.2018</td>
                            <td class="table__td d-none d-sm-table-cell">
                                <div class="table__status"><span class="table__status-icon color-green"></span> Active</div>
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
                                                <li class="dropdown-items__item"><a class="dropdown-items__link" href="order-details.php"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                                <use xlink:href="#icon-view"></use>
                                                            </svg></span>Details</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-duplicate">
                                                                <use xlink:href="#icon-duplicate"></use>
                                                            </svg></span>Duplicate</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-archive">
                                                                <use xlink:href="#icon-archive"></use>
                                                            </svg></span>Archive</a>
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
                        <tr class="table__space">
                            <td colspan="7"></td>
                        </tr>
                        <tr class="table__row">
                            <td class="table__td">
                                <div class="table__checkbox table__checkbox--all">
                                    <label class="checkbox">
                                        <input type="checkbox" data-checkbox="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                                <svg class="icon-icon-checked">
                                                    <use xlink:href="#icon-checked"></use>
                                                </svg></span></span>
                                    </label>
                                </div>
                            </td>
                            <td class="table__td">
                                <div class="media-item media-item--medium">
                                    <a class="media-item__icon color-red" href="customer-account.php">
                                        <div class="media-item__icon-text">PG</div>
                                        <img class="media-item__thumb" src="img/content/humans/item-3.jpg" alt="#">
                                    </a>
                                    <div class="media-item__right">
                                        <h5 class="media-item__title"><a href="customer-account.php">Pamela Garza</a></h5><a class="text-sm text-grey" href="mailto:#">example@mail.com</a>
                                    </div>
                                </div>
                            </td>
                            <td class="table__td text-light-theme">Boston, USA</td>
                            <td class="table__td text-dark-theme">1000</td>
                            <td class="table__td text-light-theme">12.07.2018</td>
                            <td class="table__td d-none d-sm-table-cell">
                                <div class="table__status"><span class="table__status-icon color-green"></span> Active</div>
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
                                                <li class="dropdown-items__item"><a class="dropdown-items__link" href="order-details.php"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                                <use xlink:href="#icon-view"></use>
                                                            </svg></span>Details</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-duplicate">
                                                                <use xlink:href="#icon-duplicate"></use>
                                                            </svg></span>Duplicate</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-archive">
                                                                <use xlink:href="#icon-archive"></use>
                                                            </svg></span>Archive</a>
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
                        <tr class="table__space">
                            <td colspan="7"></td>
                        </tr>
                        <tr class="table__row">
                            <td class="table__td">
                                <div class="table__checkbox table__checkbox--all">
                                    <label class="checkbox">
                                        <input type="checkbox" data-checkbox="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                                <svg class="icon-icon-checked">
                                                    <use xlink:href="#icon-checked"></use>
                                                </svg></span></span>
                                    </label>
                                </div>
                            </td>
                            <td class="table__td">
                                <div class="media-item media-item--medium">
                                    <a class="media-item__icon color-red" href="customer-account.php">
                                        <div class="media-item__icon-text">AJ</div>
                                        <img class="media-item__thumb" src="img/content/humans/item-4.jpg" alt="#">
                                    </a>
                                    <div class="media-item__right">
                                        <h5 class="media-item__title"><a href="customer-account.php">Addison James</a></h5><a class="text-sm text-grey" href="mailto:#">example@mail.com</a>
                                    </div>
                                </div>
                            </td>
                            <td class="table__td text-light-theme">Sydney, Australia</td>
                            <td class="table__td text-dark-theme">1000</td>
                            <td class="table__td text-light-theme">12.07.2018</td>
                            <td class="table__td d-none d-sm-table-cell">
                                <div class="table__status"><span class="table__status-icon color-green"></span> Active</div>
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
                                                <li class="dropdown-items__item"><a class="dropdown-items__link" href="order-details.php"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                                <use xlink:href="#icon-view"></use>
                                                            </svg></span>Details</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-duplicate">
                                                                <use xlink:href="#icon-duplicate"></use>
                                                            </svg></span>Duplicate</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-archive">
                                                                <use xlink:href="#icon-archive"></use>
                                                            </svg></span>Archive</a>
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
                        <tr class="table__space">
                            <td colspan="7"></td>
                        </tr>
                        <tr class="table__row">
                            <td class="table__td">
                                <div class="table__checkbox table__checkbox--all">
                                    <label class="checkbox">
                                        <input type="checkbox" data-checkbox="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                                <svg class="icon-icon-checked">
                                                    <use xlink:href="#icon-checked"></use>
                                                </svg></span></span>
                                    </label>
                                </div>
                            </td>
                            <td class="table__td">
                                <div class="media-item media-item--medium">
                                    <a class="media-item__icon color-red" href="customer-account.php">
                                        <div class="media-item__icon-text">JR</div>
                                        <img class="media-item__thumb" src="img/content/humans/item-5.jpg" alt="#">
                                    </a>
                                    <div class="media-item__right">
                                        <h5 class="media-item__title"><a href="customer-account.php">Jamie Rhodes</a></h5><a class="text-sm text-grey" href="mailto:#">example@mail.com</a>
                                    </div>
                                </div>
                            </td>
                            <td class="table__td text-light-theme">Los Angeles, USA</td>
                            <td class="table__td text-dark-theme">1000</td>
                            <td class="table__td text-light-theme">12.07.2018</td>
                            <td class="table__td d-none d-sm-table-cell">
                                <div class="table__status"><span class="table__status-icon color-green"></span> Active</div>
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
                                                <li class="dropdown-items__item"><a class="dropdown-items__link" href="order-details.php"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                                <use xlink:href="#icon-view"></use>
                                                            </svg></span>Details</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-duplicate">
                                                                <use xlink:href="#icon-duplicate"></use>
                                                            </svg></span>Duplicate</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-archive">
                                                                <use xlink:href="#icon-archive"></use>
                                                            </svg></span>Archive</a>
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
                        <tr class="table__space">
                            <td colspan="7"></td>
                        </tr>
                        <tr class="table__row">
                            <td class="table__td">
                                <div class="table__checkbox table__checkbox--all">
                                    <label class="checkbox">
                                        <input type="checkbox" data-checkbox="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                                <svg class="icon-icon-checked">
                                                    <use xlink:href="#icon-checked"></use>
                                                </svg></span></span>
                                    </label>
                                </div>
                            </td>
                            <td class="table__td">
                                <div class="media-item media-item--medium">
                                    <a class="media-item__icon color-red" href="customer-account.php">
                                        <div class="media-item__icon-text">AJ</div>
                                        <img class="media-item__thumb" src="img/content/humans/item-6.jpg" alt="#">
                                    </a>
                                    <div class="media-item__right">
                                        <h5 class="media-item__title"><a href="customer-account.php">Addison Jones</a></h5><a class="text-sm text-grey" href="mailto:#">example@mail.com</a>
                                    </div>
                                </div>
                            </td>
                            <td class="table__td text-light-theme">Miami, USA</td>
                            <td class="table__td text-dark-theme">1000</td>
                            <td class="table__td text-light-theme">12.07.2018</td>
                            <td class="table__td d-none d-sm-table-cell">
                                <div class="table__status"><span class="table__status-icon color-green"></span> Active</div>
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
                                                <li class="dropdown-items__item"><a class="dropdown-items__link" href="order-details.php"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                                <use xlink:href="#icon-view"></use>
                                                            </svg></span>Details</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-duplicate">
                                                                <use xlink:href="#icon-duplicate"></use>
                                                            </svg></span>Duplicate</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-archive">
                                                                <use xlink:href="#icon-archive"></use>
                                                            </svg></span>Archive</a>
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
                        <tr class="table__space">
                            <td colspan="7"></td>
                        </tr>
                        <tr class="table__row">
                            <td class="table__td">
                                <div class="table__checkbox table__checkbox--all">
                                    <label class="checkbox">
                                        <input type="checkbox" data-checkbox="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                                <svg class="icon-icon-checked">
                                                    <use xlink:href="#icon-checked"></use>
                                                </svg></span></span>
                                    </label>
                                </div>
                            </td>
                            <td class="table__td">
                                <div class="media-item media-item--medium">
                                    <a class="media-item__icon color-red" href="customer-account.php">
                                        <div class="media-item__icon-text">AD</div>
                                        <img class="media-item__thumb" src="img/content/humans/item-7.jpg" alt="#">
                                    </a>
                                    <div class="media-item__right">
                                        <h5 class="media-item__title"><a href="customer-account.php">Allen Dunn</a></h5><a class="text-sm text-grey" href="mailto:#">example@mail.com</a>
                                    </div>
                                </div>
                            </td>
                            <td class="table__td text-light-theme">Cape Town, South Africa</td>
                            <td class="table__td text-dark-theme">1000</td>
                            <td class="table__td text-light-theme">12.07.2018</td>
                            <td class="table__td d-none d-sm-table-cell">
                                <div class="table__status"><span class="table__status-icon color-green"></span> Active</div>
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
                                                <li class="dropdown-items__item"><a class="dropdown-items__link" href="order-details.php"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                                <use xlink:href="#icon-view"></use>
                                                            </svg></span>Details</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-duplicate">
                                                                <use xlink:href="#icon-duplicate"></use>
                                                            </svg></span>Duplicate</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-archive">
                                                                <use xlink:href="#icon-archive"></use>
                                                            </svg></span>Archive</a>
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
                        <tr class="table__space">
                            <td colspan="7"></td>
                        </tr>
                        <tr class="table__row">
                            <td class="table__td">
                                <div class="table__checkbox table__checkbox--all">
                                    <label class="checkbox">
                                        <input type="checkbox" data-checkbox="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                                <svg class="icon-icon-checked">
                                                    <use xlink:href="#icon-checked"></use>
                                                </svg></span></span>
                                    </label>
                                </div>
                            </td>
                            <td class="table__td">
                                <div class="media-item media-item--medium">
                                    <a class="media-item__icon color-red" href="customer-account.php">
                                        <div class="media-item__icon-text">JM</div>
                                        <img class="media-item__thumb" src="img/content/humans/item-8.jpg" alt="#">
                                    </a>
                                    <div class="media-item__right">
                                        <h5 class="media-item__title"><a href="customer-account.php">Jim Murphy</a></h5><a class="text-sm text-grey" href="mailto:#">example@mail.com</a>
                                    </div>
                                </div>
                            </td>
                            <td class="table__td text-light-theme">Los Angeles, USA</td>
                            <td class="table__td text-dark-theme">1000</td>
                            <td class="table__td text-light-theme">12.07.2018</td>
                            <td class="table__td d-none d-sm-table-cell">
                                <div class="table__status"><span class="table__status-icon color-green"></span> Active</div>
                            </td>
                            <td class="table__td table__actions">
                                <div class="items-more">
                                    <button class="items-more__button">
                                        <svg class="icon-icon-more">
                                            <use xlink:href="#icon-more"></use>
                                        </svg>
                                    </button>
                                    <div class="dropdown-items dropdown-items--right dropdown-items--up">
                                        <div class="dropdown-items__container">
                                            <ul class="dropdown-items__list">
                                                <li class="dropdown-items__item"><a class="dropdown-items__link" href="order-details.php"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                                <use xlink:href="#icon-view"></use>
                                                            </svg></span>Details</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-duplicate">
                                                                <use xlink:href="#icon-duplicate"></use>
                                                            </svg></span>Duplicate</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-archive">
                                                                <use xlink:href="#icon-archive"></use>
                                                            </svg></span>Archive</a>
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
                        <tr class="table__space">
                            <td colspan="7"></td>
                        </tr>
                        <tr class="table__row">
                            <td class="table__td">
                                <div class="table__checkbox table__checkbox--all">
                                    <label class="checkbox">
                                        <input type="checkbox" data-checkbox="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                                <svg class="icon-icon-checked">
                                                    <use xlink:href="#icon-checked"></use>
                                                </svg></span></span>
                                    </label>
                                </div>
                            </td>
                            <td class="table__td">
                                <div class="media-item media-item--medium">
                                    <a class="media-item__icon color-red" href="customer-account.php">
                                        <div class="media-item__icon-text">LG</div>
                                        <img class="media-item__thumb" src="img/content/humans/item-9.jpg" alt="#">
                                    </a>
                                    <div class="media-item__right">
                                        <h5 class="media-item__title"><a href="customer-account.php">Lynn George</a></h5><a class="text-sm text-grey" href="mailto:#">example@mail.com</a>
                                    </div>
                                </div>
                            </td>
                            <td class="table__td text-light-theme">Shanghai, China</td>
                            <td class="table__td text-dark-theme">1000</td>
                            <td class="table__td text-light-theme">12.07.2018</td>
                            <td class="table__td d-none d-sm-table-cell">
                                <div class="table__status"><span class="table__status-icon color-green"></span> Active</div>
                            </td>
                            <td class="table__td table__actions">
                                <div class="items-more">
                                    <button class="items-more__button">
                                        <svg class="icon-icon-more">
                                            <use xlink:href="#icon-more"></use>
                                        </svg>
                                    </button>
                                    <div class="dropdown-items dropdown-items--right dropdown-items--up">
                                        <div class="dropdown-items__container">
                                            <ul class="dropdown-items__list">
                                                <li class="dropdown-items__item"><a class="dropdown-items__link" href="order-details.php"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                                <use xlink:href="#icon-view"></use>
                                                            </svg></span>Details</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-duplicate">
                                                                <use xlink:href="#icon-duplicate"></use>
                                                            </svg></span>Duplicate</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-archive">
                                                                <use xlink:href="#icon-archive"></use>
                                                            </svg></span>Archive</a>
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
                        <tr class="table__space">
                            <td colspan="7"></td>
                        </tr>
                        <tr class="table__row">
                            <td class="table__td">
                                <div class="table__checkbox table__checkbox--all">
                                    <label class="checkbox">
                                        <input type="checkbox" data-checkbox="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                                <svg class="icon-icon-checked">
                                                    <use xlink:href="#icon-checked"></use>
                                                </svg></span></span>
                                    </label>
                                </div>
                            </td>
                            <td class="table__td">
                                <div class="media-item media-item--medium">
                                    <a class="media-item__icon color-red" href="customer-account.php">
                                        <div class="media-item__icon-text">CL</div>
                                        <img class="media-item__thumb" src="img/content/humans/item-10.jpg" alt="#">
                                    </a>
                                    <div class="media-item__right">
                                        <h5 class="media-item__title"><a href="customer-account.php">Christine Lewis</a></h5><a class="text-sm text-grey" href="mailto:#">example@mail.com</a>
                                    </div>
                                </div>
                            </td>
                            <td class="table__td text-light-theme">Sydney, Australia</td>
                            <td class="table__td text-dark-theme">1000</td>
                            <td class="table__td text-light-theme">12.07.2018</td>
                            <td class="table__td d-none d-sm-table-cell">
                                <div class="table__status"><span class="table__status-icon color-green"></span> Active</div>
                            </td>
                            <td class="table__td table__actions">
                                <div class="items-more">
                                    <button class="items-more__button">
                                        <svg class="icon-icon-more">
                                            <use xlink:href="#icon-more"></use>
                                        </svg>
                                    </button>
                                    <div class="dropdown-items dropdown-items--right dropdown-items--up">
                                        <div class="dropdown-items__container">
                                            <ul class="dropdown-items__list">
                                                <li class="dropdown-items__item"><a class="dropdown-items__link" href="order-details.php"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                                <use xlink:href="#icon-view"></use>
                                                            </svg></span>Details</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-duplicate">
                                                                <use xlink:href="#icon-duplicate"></use>
                                                            </svg></span>Duplicate</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-archive">
                                                                <use xlink:href="#icon-archive"></use>
                                                            </svg></span>Archive</a>
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