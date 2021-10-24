<!DOCTYPE html>
<html class="no-js" lang="en" data-theme="light">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="MobileOptimized" content="320" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Arion Admin Dashboard</title>
    <meta name="description" content="Arion — This is the best dashboard" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="application-name" content="Arion — This is the best dashboard" />
    <meta name="apple-mobile-web-app-title" content="Arion Admin Dashboard" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/apexcharts.css" />
    <link rel="stylesheet" href="css/tippy/tippy.css" />
    <link rel="stylesheet" href="css/flatpickr.min.css" />
    <link rel="stylesheet" href="css/select2.min.css" />
    <link rel="stylesheet" href="css/quill/quill.snow.css" />
    <link rel="stylesheet" href="css/quill/quill.core.css" />
    <link rel="stylesheet" href="css/filepond.min.css" />
    <link rel="stylesheet" href="css/filepond-plugin-image-preview.min.css" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/content/favicons/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="img/content/favicons/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/content/favicons/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/content/favicons/apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/content/favicons/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="img/content/favicons/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/content/favicons/apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/content/favicons/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="img/content/favicons/apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="img/content/favicons/android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="img/content/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="img/content/favicons/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="img/content/favicons/favicon-16x16.png" />
    <!-- <link rel="manifest" href="img/content/favicons/manifest.json" />-->
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />
</head>

<body class="sidebar-collapse">
    <div class="sidebar-backdrop"></div>
    <div class="page-wrapper">
        <header class="header">
            <div class="header__inner">
                <div class="container-fluid">
                    <div class="header__row row justify-content-between">
                        <div class="header__col-left col d-flex align-items-center">
                            <div class="header__left-toggle">
                                <button class="header__toggle-menu toggle-sidebar" type="button">
                                    <svg class="icon-icon-menu">
                                        <use xlink:href="#icon-menu"></use>
                                    </svg>
                                </button>
                                <button class="header__toggle-search toggle-search">
                                    <svg class="icon-icon-search">
                                        <use xlink:href="#icon-search"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="header__search">
                                <form class="form-search" action="#" method="GET">
                                    <div class="form-search__container"><span class="form-search__icon-left">
                                            <svg class="icon-icon-search">
                                                <use xlink:href="#icon-search"></use>
                                            </svg></span>
                                        <input class="form-search__input" type="text" placeholder="Search..." />
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="header__col-right col d-flex align-items-center">
                            <div class="header__language dropdown">
                                <button class="header__toggle-language" type="button" data-toggle="dropdown" data-tippy-content="Language" data-tippy-placement="bottom">
                                    <svg class="icon-icon-language">
                                        <use xlink:href="#icon-language"></use>
                                    </svg> <span class="icon-arrow-down">
                                        <svg class="icon-icon-arrow-down">
                                            <use xlink:href="#icon-arrow-down"></use>
                                        </svg></span>
                                </button>
                                <div class="lang-menu dropdown-menu">
                                    <button class="lang-menu__button dropdown-menu__item" tabindex="0">
                                        <img class="lang-menu__icon" src="img/content/flags/us.svg" alt="#" /><span class="lang-menu__text">En</span>
                                    </button>
                                    <button class="lang-menu__button dropdown-menu__item" tabindex="0">
                                        <img class="lang-menu__icon" src="img/content/flags/gb.svg" alt="#" /><span class="lang-menu__text">Gb</span>
                                    </button>
                                    <button class="lang-menu__button dropdown-menu__item" tabindex="0">
                                        <img class="lang-menu__icon" src="img/content/flags/ru.svg" alt="#" /><span class="lang-menu__text">Ru</span>
                                    </button>
                                    <button class="lang-menu__button dropdown-menu__item" tabindex="0">
                                        <img class="lang-menu__icon" src="img/content/flags/cn.svg" alt="#" /><span class="lang-menu__text">Cn</span>
                                    </button>
                                    <div class="lang-menu__separate"></div><a class="lang-menu__button lang-menu__button--all dropdown-menu__item" href="#" tabindex="0">Learn</a>
                                </div>
                            </div>
                            <div class="header__tools">
                                <div class="header__notes header__tools-item">
                                    <a class="header__tools-toggle header__tools-toggle--message" href="#" data-tippy-content="Notifications" data-tippy-placement="bottom" data-toggle="dropdown">
                                        <svg class="icon-icon-message">
                                            <use xlink:href="#icon-message"></use>
                                        </svg> <span class="badge-signal"></span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-menu__top dropdown-menu__item"><span class="dropdown-menu__title">Notifications</span><span class="badge badge--red">5</span><a class="dropdown-menu__clear-all" href="#" role="button">Clear All</a>
                                        </div>
                                        <div class="dropdown-menu__items scrollbar-thin scrollbar-visible" data-simplebar="data-simplebar">
                                            <div class="dropdown-menu__item">
                                                <a class="dropdown-menu__item-remove" href="#">
                                                    <svg class="icon-icon-cross">
                                                        <use xlink:href="#icon-cross"></use>
                                                    </svg>
                                                </a>
                                                <a class="dropdown-menu__item-block dropdown-menu__note" href="#">
                                                    <div class="dropdown-menu__item-left">
                                                        <div class="dropdown-menu__item-icon color-green">
                                                            <svg class="icon-icon-cart">
                                                                <use xlink:href="#icon-cart"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-menu__item-right">
                                                        <h4 class="dropdown-menu__item-title">New Order Received</h4><span class="dropdown-menu__item-time">25 min ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="dropdown-menu__item">
                                                <a class="dropdown-menu__item-remove" href="#">
                                                    <svg class="icon-icon-cross">
                                                        <use xlink:href="#icon-cross"></use>
                                                    </svg>
                                                </a>
                                                <a class="dropdown-menu__item-block dropdown-menu__note" href="#">
                                                    <div class="dropdown-menu__item-left">
                                                        <div class="dropdown-menu__item-icon color-orange">
                                                            <svg class="icon-icon-bill">
                                                                <use xlink:href="#icon-bill"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-menu__item-right">
                                                        <h4 class="dropdown-menu__item-title">New invoice received</h4><span class="dropdown-menu__item-time">5 hours ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="dropdown-menu__item">
                                                <a class="dropdown-menu__item-remove" href="#">
                                                    <svg class="icon-icon-cross">
                                                        <use xlink:href="#icon-cross"></use>
                                                    </svg>
                                                </a>
                                                <a class="dropdown-menu__item-block dropdown-menu__note" href="#">
                                                    <div class="dropdown-menu__item-left">
                                                        <div class="dropdown-menu__item-icon color-teal">
                                                            <svg class="icon-icon-truck">
                                                                <use xlink:href="#icon-truck"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-menu__item-right">
                                                        <h4 class="dropdown-menu__item-title">new batch is shipped</h4><span class="dropdown-menu__item-time">10 hours ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="dropdown-menu__item">
                                                <a class="dropdown-menu__item-remove" href="#">
                                                    <svg class="icon-icon-cross">
                                                        <use xlink:href="#icon-cross"></use>
                                                    </svg>
                                                </a>
                                                <a class="dropdown-menu__item-block dropdown-menu__note" href="#">
                                                    <div class="dropdown-menu__item-left">
                                                        <div class="dropdown-menu__item-icon color-green">
                                                            <svg class="icon-icon-cart">
                                                                <use xlink:href="#icon-cart"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-menu__item-right">
                                                        <h4 class="dropdown-menu__item-title">New Order Received</h4><span class="dropdown-menu__item-time">25 min ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="dropdown-menu__item">
                                                <a class="dropdown-menu__item-remove" href="#">
                                                    <svg class="icon-icon-cross">
                                                        <use xlink:href="#icon-cross"></use>
                                                    </svg>
                                                </a>
                                                <a class="dropdown-menu__item-block dropdown-menu__note" href="#">
                                                    <div class="dropdown-menu__item-left">
                                                        <div class="dropdown-menu__item-icon color-orange">
                                                            <svg class="icon-icon-bill">
                                                                <use xlink:href="#icon-bill"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-menu__item-right">
                                                        <h4 class="dropdown-menu__item-title">New invoice received</h4><span class="dropdown-menu__item-time">5 hours ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu__divider"></div><a class="dropdown-menu__item dropdown-menu__link-all" href="#">View all Notifications
                                            <svg class="icon-icon-keyboard-right">
                                                <use xlink:href="#icon-keyboard-right"></use>
                                            </svg></a>
                                    </div>
                                </div>
                                <div class="header__messages header__tools-item">
                                    <a class="header__tools-toggle header__tools-toggle--bell" href="#" data-tippy-content="Messages" data-tippy-placement="bottom" data-toggle="dropdown">
                                        <svg class="icon-icon-bell">
                                            <use xlink:href="#icon-bell"></use>
                                        </svg> <span class="badge-signal"></span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-menu__top dropdown-menu__item"><span class="dropdown-menu__title">Messages</span><span class="badge badge--red">7</span><a class="dropdown-menu__clear-all" href="#" role="button">Clear All</a>
                                        </div>
                                        <div class="dropdown-menu__items scrollbar-thin scrollbar-visible" data-simplebar="data-simplebar">
                                            <div class="dropdown-menu__item">
                                                <a class="dropdown-menu__item-remove" href="#">
                                                    <svg class="icon-icon-cross">
                                                        <use xlink:href="#icon-cross"></use>
                                                    </svg>
                                                </a>
                                                <a class="dropdown-menu__item-block dropdown-menu__message" href="#">
                                                    <div class="dropdown-menu__item-left">
                                                        <div class="dropdown-menu__item-icon color-teal">
                                                            <div class="dropdown-menu__item-icon-text">MA</div>
                                                            <img src="img/content/humans/item-4.jpg" alt="#" />
                                                        </div>
                                                        <div class="badge-signal badge-signal--green"></div>
                                                    </div>
                                                    <div class="dropdown-menu__item-right">
                                                        <div class="dropdown-menu__item-column">
                                                            <h4 class="dropdown-menu__item-title">Mark Anderson</h4>
                                                            <p class="dropdown-menu__text">Nemo enim ipsam voluptatem Nemo enim ipsam voluptatem</p>
                                                        </div><span class="dropdown-menu__item-time">25 min ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="dropdown-menu__item">
                                                <a class="dropdown-menu__item-remove" href="#">
                                                    <svg class="icon-icon-cross">
                                                        <use xlink:href="#icon-cross"></use>
                                                    </svg>
                                                </a>
                                                <a class="dropdown-menu__item-block dropdown-menu__message" href="#">
                                                    <div class="dropdown-menu__item-left">
                                                        <div class="dropdown-menu__item-icon color-orange-dark">
                                                            <div class="dropdown-menu__item-icon-text">JT</div>
                                                            <img src="img/content/humans/item-1.jpg" alt="#" />
                                                        </div>
                                                        <div class="badge-signal badge-signal--green"></div>
                                                    </div>
                                                    <div class="dropdown-menu__item-right">
                                                        <div class="dropdown-menu__item-column">
                                                            <h4 class="dropdown-menu__item-title">Jennifer Tang</h4>
                                                            <p class="dropdown-menu__text">Nemo enim ipsam voluptatem Nemo enim ipsam voluptatem</p>
                                                        </div><span class="dropdown-menu__item-time">3 hours ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="dropdown-menu__item">
                                                <a class="dropdown-menu__item-remove" href="#">
                                                    <svg class="icon-icon-cross">
                                                        <use xlink:href="#icon-cross"></use>
                                                    </svg>
                                                </a>
                                                <a class="dropdown-menu__item-block dropdown-menu__message" href="#">
                                                    <div class="dropdown-menu__item-left">
                                                        <div class="dropdown-menu__item-icon color-orange">
                                                            <div class="dropdown-menu__item-icon-text">SA</div>
                                                            <img src="img/content/humans/item-5.jpg" alt="#" />
                                                        </div>
                                                        <div class="badge-signal"></div>
                                                    </div>
                                                    <div class="dropdown-menu__item-right">
                                                        <div class="dropdown-menu__item-column">
                                                            <h4 class="dropdown-menu__item-title">Stephen Allen</h4>
                                                            <p class="dropdown-menu__text">Nemo enim ipsam voluptatem Nemo enim ipsam voluptatem</p>
                                                        </div><span class="dropdown-menu__item-time">10 hours ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="dropdown-menu__item">
                                                <a class="dropdown-menu__item-remove" href="#">
                                                    <svg class="icon-icon-cross">
                                                        <use xlink:href="#icon-cross"></use>
                                                    </svg>
                                                </a>
                                                <a class="dropdown-menu__item-block dropdown-menu__message" href="#">
                                                    <div class="dropdown-menu__item-left">
                                                        <div class="dropdown-menu__item-icon color-red">
                                                            <div class="dropdown-menu__item-icon-text">WS</div>
                                                            <img src="img/content/humans/item-6.jpg" alt="#" />
                                                        </div>
                                                        <div class="badge-signal badge-signal--red"></div>
                                                    </div>
                                                    <div class="dropdown-menu__item-right">
                                                        <div class="dropdown-menu__item-column">
                                                            <h4 class="dropdown-menu__item-title">Walter Sanders</h4>
                                                            <p class="dropdown-menu__text">Nemo enim ipsam voluptatem Nemo enim ipsam voluptatem</p>
                                                        </div><span class="dropdown-menu__item-time">30 min ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="dropdown-menu__item">
                                                <a class="dropdown-menu__item-remove" href="#">
                                                    <svg class="icon-icon-cross">
                                                        <use xlink:href="#icon-cross"></use>
                                                    </svg>
                                                </a>
                                                <a class="dropdown-menu__item-block dropdown-menu__message" href="#">
                                                    <div class="dropdown-menu__item-left">
                                                        <div class="dropdown-menu__item-icon color-blue">
                                                            <div class="dropdown-menu__item-icon-text">SA</div>
                                                            <img src="img/content/humans/item-5.jpg" alt="#" />
                                                        </div>
                                                        <div class="badge-signal badge-signal--green"></div>
                                                    </div>
                                                    <div class="dropdown-menu__item-right">
                                                        <div class="dropdown-menu__item-column">
                                                            <h4 class="dropdown-menu__item-title">Stephen Allen</h4>
                                                            <p class="dropdown-menu__text">Nemo enim ipsam voluptatem Nemo enim ipsam voluptatem</p>
                                                        </div><span class="dropdown-menu__item-time">2h hours ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="dropdown-menu__item">
                                                <a class="dropdown-menu__item-remove" href="#">
                                                    <svg class="icon-icon-cross">
                                                        <use xlink:href="#icon-cross"></use>
                                                    </svg>
                                                </a>
                                                <a class="dropdown-menu__item-block dropdown-menu__message" href="#">
                                                    <div class="dropdown-menu__item-left">
                                                        <div class="dropdown-menu__item-icon color-green">
                                                            <div class="dropdown-menu__item-icon-text">JH</div>
                                                            <img src="img/content/humans/item-7.jpg" alt="#" />
                                                        </div>
                                                        <div class="badge-signal"></div>
                                                    </div>
                                                    <div class="dropdown-menu__item-right">
                                                        <div class="dropdown-menu__item-column">
                                                            <h4 class="dropdown-menu__item-title">John Hendrix</h4>
                                                            <p class="dropdown-menu__text">Nemo enim ipsam voluptatem Nemo enim ipsam voluptatem</p>
                                                        </div><span class="dropdown-menu__item-time">8 hours ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="dropdown-menu__item">
                                                <a class="dropdown-menu__item-remove" href="#">
                                                    <svg class="icon-icon-cross">
                                                        <use xlink:href="#icon-cross"></use>
                                                    </svg>
                                                </a>
                                                <a class="dropdown-menu__item-block dropdown-menu__message" href="#">
                                                    <div class="dropdown-menu__item-left">
                                                        <div class="dropdown-menu__item-icon color-orange">
                                                            <div class="dropdown-menu__item-icon-text">RH</div>
                                                            <img src="img/content/humans/item-8.jpg" alt="#" />
                                                        </div>
                                                        <div class="badge-signal badge-signal--red"></div>
                                                    </div>
                                                    <div class="dropdown-menu__item-right">
                                                        <div class="dropdown-menu__item-column">
                                                            <h4 class="dropdown-menu__item-title">Ryan Henderson</h4>
                                                            <p class="dropdown-menu__text">Nemo enim ipsam voluptatem Nemo enim ipsam voluptatem</p>
                                                        </div><span class="dropdown-menu__item-time">5 min ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu__divider"></div><a class="dropdown-menu__item dropdown-menu__link-all" href="#">View all Messages
                                            <svg class="icon-icon-keyboard-right">
                                                <use xlink:href="#icon-keyboard-right"></use>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                            <div class="header__profile dropdown">
                                <a class="header__profile-toggle dropdown__toggle" href="#" data-toggle="dropdown">
                                    <div class="header__profile-image"><span class="header__profile-image-text">MA</span>
                                        <img src="img/content/humans/item-4.jpg" alt="#" />
                                    </div>
                                    <div class="header__profile-text"><span>Mark Anderson</span>
                                    </div><span class="icon-arrow-down">
                                        <svg class="icon-icon-arrow-down">
                                            <use xlink:href="#icon-arrow-down"></use>
                                        </svg></span>
                                </a>
                                <div class="profile-dropdown dropdown-menu dropdown-menu--right"><a class="profile-dropdown__item dropdown-menu__item" href="#" tabindex="0"><span class="profile-dropdown__icon">
                                            <svg class="icon-icon-user">
                                                <use xlink:href="#icon-user"></use>
                                            </svg></span><span>My Profile</span></a><a class="profile-dropdown__item dropdown-menu__item" href="#" tabindex="0"><span class="profile-dropdown__icon">
                                            <svg class="icon-icon-chat">
                                                <use xlink:href="#icon-chat"></use>
                                            </svg></span><span>My chat</span></a><a class="profile-dropdown__item dropdown-menu__item" href="#" tabindex="0"><span class="profile-dropdown__icon">
                                            <svg class="icon-icon-task">
                                                <use xlink:href="#icon-task"></use>
                                            </svg></span><span>Tasks</span></a><a class="profile-dropdown__item dropdown-menu__item" href="#" tabindex="0"><span class="profile-dropdown__icon">
                                            <svg class="icon-icon-settings">
                                                <use xlink:href="#icon-settings"></use>
                                            </svg></span><span>Settings</span></a>
                                    <div class="dropdown-menu__divider"></div><a class="profile-dropdown__item dropdown-menu__item" href="#" tabindex="0"><span class="profile-dropdown__icon">
                                            <svg class="icon-icon-logout">
                                                <use xlink:href="#icon-logout"></use>
                                            </svg></span><span>Logout</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <aside class="sidebar">
            <div class="sidebar__backdrop"></div>
            <div class="sidebar__container">
                <div class="sidebar__top">
                    <div class="container container--sm">
                        <a class="sidebar__logo" href="index.php">
                            <img class="sidebar__logo-icon" src="img/content/logotype.svg" alt="#" width="44" />
                            <div class="sidebar__logo-text">arion</div>
                        </a>
                    </div>
                </div>
                <div class="sidebar__content" data-simplebar="data-simplebar">
                    <nav class="sidebar__nav">
                        <ul class="sidebar__menu">
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="index.php" aria-expanded="false"><span class="sidebar__link-icon">
                                        <svg class="icon-icon-dashboard">
                                            <use xlink:href="#icon-dashboard"></use>
                                        </svg></span><span class="sidebar__link-text">Dashboard</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="products.php" data-toggle="collapse" data-target="#E-Commerce" aria-expanded="false"><span class="sidebar__link-icon">
                                        <svg class="icon-icon-cart">
                                            <use xlink:href="#icon-cart"></use>
                                        </svg></span><span class="sidebar__link-text">E-Commerce</span><span class="sidebar__link-arrow">
                                        <svg class="icon-icon-keyboard-down">
                                            <use xlink:href="#icon-keyboard-down"></use>
                                        </svg></span></a>
                                <div class="collapse" id="E-Commerce">
                                    <ul class="sidebar__collapse-menu">
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="products.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Products</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="product-add.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Add Product</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="orders.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Orders</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="order-details.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Details</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="order-invoice.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Invoice</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="order-status.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Status</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="order-history.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order History</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="order-history-v2.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order History V.2</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="order-notes.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Notes</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="order-messages.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Messages</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="order-messages-v2.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Messages V.2</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="customers.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Customers</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="customer-account.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Account</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="customer-account-v2.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Account V.2</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="customer-wishlist.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Wish List</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="reviews.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Reviews</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="calendar.php" aria-expanded="false"><span class="sidebar__link-icon">
                                        <svg class="icon-icon-calendar">
                                            <use xlink:href="#icon-calendar"></use>
                                        </svg></span><span class="sidebar__link-text">Calendar</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link active" href="mail.php" aria-expanded="true"><span class="sidebar__link-icon">
                                        <svg class="icon-icon-email">
                                            <use xlink:href="#icon-email"></use>
                                        </svg></span><span class="sidebar__link-text">Mail</span><span class="badge badge--red">20</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="chat.php" aria-expanded="false"><span class="sidebar__link-icon">
                                        <svg class="icon-icon-chat">
                                            <use xlink:href="#icon-chat"></use>
                                        </svg></span><span class="sidebar__link-text">Chat</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="contacts.php" aria-expanded="false"><span class="sidebar__link-icon">
                                        <svg class="icon-icon-contacts">
                                            <use xlink:href="#icon-contacts"></use>
                                        </svg></span><span class="sidebar__link-text">Contacts</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="todo.php" aria-expanded="false"><span class="sidebar__link-icon">
                                        <svg class="icon-icon-todo">
                                            <use xlink:href="#icon-todo"></use>
                                        </svg></span><span class="sidebar__link-text">ToDo</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="file-manager.php" aria-expanded="false"><span class="sidebar__link-icon">
                                        <svg class="icon-icon-folder">
                                            <use xlink:href="#icon-folder"></use>
                                        </svg></span><span class="sidebar__link-text">File Manager</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="timeline.php" aria-expanded="false"><span class="sidebar__link-icon">
                                        <svg class="icon-icon-clock">
                                            <use xlink:href="#icon-clock"></use>
                                        </svg></span><span class="sidebar__link-text">Timeline</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="#" data-toggle="collapse" data-target="#Auth" aria-expanded="false"><span class="sidebar__link-icon">
                                        <svg class="icon-icon-password">
                                            <use xlink:href="#icon-password"></use>
                                        </svg></span><span class="sidebar__link-text">Authentication</span><span class="sidebar__link-arrow">
                                        <svg class="icon-icon-keyboard-down">
                                            <use xlink:href="#icon-keyboard-down"></use>
                                        </svg></span></a>
                                <div class="collapse" id="Auth">
                                    <ul class="sidebar__collapse-menu">
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-login.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Login</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-login-v2.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Login V.2</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-login-v3.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Login V.3</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-create.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Create Account</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-create-v2.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Create Account V.2</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-create-v3.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Create Account V.3</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-lock.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Lock</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-lock-v2.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Lock V.2</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-lock-v3.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Lock V.3</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-forgot.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Forgot</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-forgot-v2.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Forgot V.2</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-forgot-v3.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Forgot V.3</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="404.php" aria-expanded="false"><span class="sidebar__link-icon"></span><span class="sidebar__link-text">404</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="ui-kit.php" aria-expanded="false"><span class="sidebar__link-icon">
                                        <svg class="icon-icon-settings">
                                            <use xlink:href="#icon-settings"></use>
                                        </svg></span><span class="sidebar__link-text">UI Kit</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </aside>
        <main class="page-content page-content--full">
            <div class="inbox-grid">
                <aside class="sidebar-panel scrollbar-thin" id="sidebarPanel" data-simplebar="data-simplebar">
                    <div class="sidebar-panel__top">
                        <button class="button button--primary" data-modal="#addMessage"><span class="button__icon button__icon--left">
                                <svg class="icon-icon-task">
                                    <use xlink:href="#icon-task"></use>
                                </svg></span><span class="button__text">Compose</span>
                        </button>
                    </div>
                    <div class="sidebar-panel__content">
                        <div class="sidebar-panel__nav">
                            <ul class="sidebar-panel__menu">
                                <li class="sidebar-panel__menu-item">
                                    <a class="sidebar-panel__menu-link active" href="#">
                                        <svg class="icon-icon-inbox">
                                            <use xlink:href="#icon-inbox"></use>
                                        </svg><span class="sidebar-panel__menu-text">Inbox</span><span class="badge badge--red">20</span>
                                    </a>
                                </li>
                                <li class="sidebar-panel__menu-item">
                                    <a class="sidebar-panel__menu-link" href="#">
                                        <svg class="icon-icon-send">
                                            <use xlink:href="#icon-send"></use>
                                        </svg><span class="sidebar-panel__menu-text">Sent</span>
                                    </a>
                                </li>
                                <li class="sidebar-panel__menu-item">
                                    <a class="sidebar-panel__menu-link" href="#">
                                        <svg class="icon-icon-drafts">
                                            <use xlink:href="#icon-drafts"></use>
                                        </svg><span class="sidebar-panel__menu-text">Drafts</span><span class="badge badge--red">5</span>
                                    </a>
                                </li>
                                <li class="sidebar-panel__menu-item">
                                    <a class="sidebar-panel__menu-link" href="#">
                                        <svg class="icon-icon-detail">
                                            <use xlink:href="#icon-detail"></use>
                                        </svg><span class="sidebar-panel__menu-text">Important</span>
                                    </a>
                                </li>
                                <li class="sidebar-panel__menu-item">
                                    <a class="sidebar-panel__menu-link" href="#">
                                        <svg class="icon-icon-star">
                                            <use xlink:href="#icon-star"></use>
                                        </svg><span class="sidebar-panel__menu-text">Starred</span>
                                    </a>
                                </li>
                                <li class="sidebar-panel__menu-item">
                                    <a class="sidebar-panel__menu-link" href="#">
                                        <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                        </svg><span class="sidebar-panel__menu-text">Deleted</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-panel__section">
                            <h3 class="sidebar-panel__section-title">Labels</h3>
                            <div class="sidebar-panel__labels">
                                <div class="sidebar-panel__labels-item"><span class="marker-item color-red"></span> Personal
                                </div>
                                <div class="sidebar-panel__labels-item"><span class="marker-item color-teal"></span> Clients
                                </div>
                                <div class="sidebar-panel__labels-item"><span class="marker-item color-green"></span> Events
                                </div>
                                <div class="sidebar-panel__labels-item"><span class="marker-item color-orange"></span> Social
                                </div>
                                <div class="sidebar-panel__labels-item"><span class="marker-item color-grey-light"></span> Work
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <div class="inbox-mails">
                    <div class="inbox-mails__top">
                        <button class="toggle-sidebar toggle-sidebar--secondary js-toggle-sidebar-panel" type="button" data-toggle="#sidebarPanel">
                            <svg class="icon-icon-menu">
                                <use xlink:href="#icon-menu"></use>
                            </svg>
                        </button>
                        <button class="toggle-search toggle-search--module" type="button" data-search="#search0">
                            <svg class="icon-icon-search">
                                <use xlink:href="#icon-search"></use>
                            </svg>
                            <svg class="icon-icon-cross">
                                <use xlink:href="#icon-cross"></use>
                            </svg>
                        </button>
                        <form class="module-search" id="search0" method="GET">
                            <div class="input-group input-group--prepend">
                                <div class="input-group__prepend">
                                    <svg class="icon-icon-search">
                                        <use xlink:href="#icon-search"></use>
                                    </svg>
                                </div>
                                <input class="input" type="text" placeholder="Search">
                            </div>
                        </form>
                        <div class="inbox-mails__sort"><span class="text-light-theme mr-1">Sort by:</span>
                            <button class="inbox-mails__sort-button text-dark-theme" type="button" data-toggle="dropdown"><span class="inbox-mails__sort-text">Date</span><span class="inbox-mails__sort-arrow">
                                    <svg class="icon-icon-arrow-down">
                                        <use xlink:href="#icon-arrow-down"></use>
                                    </svg></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu--right js-dropdown-select"><a class="dropdown-menu__item active" href="#" tabindex="0" data-value="Date"><span class="marker-item"></span> Date</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="Personal"><span class="marker-item color-red"></span> Personal</a>
                                <a class="dropdown-menu__item" href="#" tabindex="0" data-value="Clients"><span class="marker-item color-teal"></span> Clients</a><a class="dropdown-menu__item active" href="#" tabindex="0" data-value="Events"><span class="marker-item color-green"></span> Events</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="Social"><span class="marker-item color-orange"></span> Social</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="Work"><span class="marker-item color-grey-light"></span> Work</a>
                            </div>
                        </div>
                    </div>
                    <div class="inbox-mails__content scrollbar-thin scrollbar-hidden" data-simplebar>
                        <ul class="inbox-mails__list">
                            <li class="inbox-mails__list-item">
                                <a class="inbox-mails__item" href="#">
                                    <div class="inbox-mails__item-avatar color-orange-dark">
                                        <div class="inbox-mails__item-avatar-text">FB</div>
                                        <img src="img/content/humans/item-1.jpg" alt="#">
                                    </div>
                                    <div class="inbox-mails__item-right">
                                        <h5 class="inbox-mails__item-name"><span>Felecia Burke</span><span class="marker-item color-red"></span>
                                        </h5>
                                        <div class="inbox-mails__item-right-group"><span class="inbox-mails__item-attachment">
                                                <svg class="icon-icon-attachment">
                                                    <use xlink:href="#icon-attachment"></use>
                                                </svg></span><span class="inbox-mails__item-time">20 min</span>
                                        </div>
                                        <div class="inbox-mails__item-message">
                                            <p class="inbox-mails__item-text">The Arts play a large role in the expression of inner thoughts and beauty in my life. The Arts play a large role in the expression of inner thoughts and beauty in my life</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="inbox-mails__list-item">
                                <a class="inbox-mails__item active" href="#">
                                    <div class="inbox-mails__item-avatar color-red">
                                        <div class="inbox-mails__item-avatar-text">JB</div>
                                        <img src="img/content/humans/item-4.jpg" alt="#">
                                    </div>
                                    <div class="inbox-mails__item-right">
                                        <h5 class="inbox-mails__item-name"><span>Joan Bates</span><span class="marker-item color-teal"></span>
                                        </h5>
                                        <div class="inbox-mails__item-right-group"><span class="inbox-mails__item-attachment">
                                                <svg class="icon-icon-attachment">
                                                    <use xlink:href="#icon-attachment"></use>
                                                </svg></span><span class="inbox-mails__item-time">2 hours</span>
                                        </div>
                                        <div class="inbox-mails__item-message">
                                            <p class="inbox-mails__item-text">Hello, Mark!</p>
                                            <p class="inbox-mails__item-text">I am writing to introduce you to David Boyd</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="inbox-mails__list-item">
                                <a class="inbox-mails__item" href="#">
                                    <div class="inbox-mails__item-avatar color-teal">
                                        <div class="inbox-mails__item-avatar-text">DP</div>
                                        <img src="img/content/humans/item-5.jpg" alt="#">
                                    </div>
                                    <div class="inbox-mails__item-right">
                                        <h5 class="inbox-mails__item-name"><span>David Palmer</span>
                                        </h5>
                                        <div class="inbox-mails__item-right-group"><span class="inbox-mails__item-attachment">
                                                <svg class="icon-icon-attachment">
                                                    <use xlink:href="#icon-attachment"></use>
                                                </svg></span><span class="inbox-mails__item-time">6 hours</span>
                                        </div>
                                        <div class="inbox-mails__item-message">
                                            <p class="inbox-mails__item-text">We use the Arts as a means of touching that part of us that we cannot reach with</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="inbox-mails__list-item">
                                <a class="inbox-mails__item" href="#">
                                    <div class="inbox-mails__item-avatar color-orange">
                                        <div class="inbox-mails__item-avatar-text">ED</div>
                                        <img src="img/content/humans/item-2.jpg" alt="#">
                                    </div>
                                    <div class="inbox-mails__item-right">
                                        <h5 class="inbox-mails__item-name"><span>Elaine Day</span>
                                        </h5>
                                        <div class="inbox-mails__item-right-group"><span class="inbox-mails__item-attachment">
                                                <svg class="icon-icon-attachment">
                                                    <use xlink:href="#icon-attachment"></use>
                                                </svg></span><span class="inbox-mails__item-time">2 days</span>
                                        </div>
                                        <div class="inbox-mails__item-message">
                                            <p class="inbox-mails__item-text">The arts allow us to be as specific or as abstract as we please. It helps us become closer</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="inbox-mails__list-item">
                                <a class="inbox-mails__item" href="#">
                                    <div class="inbox-mails__item-avatar color-green">
                                        <div class="inbox-mails__item-avatar-text">MS</div>
                                        <img src="img/content/humans/item-6.jpg" alt="#">
                                    </div>
                                    <div class="inbox-mails__item-right">
                                        <h5 class="inbox-mails__item-name"><span>Morris Stevens</span>
                                        </h5>
                                        <div class="inbox-mails__item-right-group"><span class="inbox-mails__item-attachment">
                                                <svg class="icon-icon-attachment">
                                                    <use xlink:href="#icon-attachment"></use>
                                                </svg></span><span class="inbox-mails__item-time">3 days</span>
                                        </div>
                                        <div class="inbox-mails__item-message">
                                            <p class="inbox-mails__item-text">From dance and music to abstract art our concept of life is shown through the various</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="inbox-mails__list-item">
                                <a class="inbox-mails__item" href="#">
                                    <div class="inbox-mails__item-avatar color-orange-dark">
                                        <div class="inbox-mails__item-avatar-text">TR</div>
                                        <img src="img/content/humans/item-7.jpg" alt="#">
                                    </div>
                                    <div class="inbox-mails__item-right">
                                        <h5 class="inbox-mails__item-name"><span>Troy Russell</span><span class="marker-item color-orange"></span>
                                        </h5>
                                        <div class="inbox-mails__item-right-group"><span class="inbox-mails__item-attachment">
                                                <svg class="icon-icon-attachment">
                                                    <use xlink:href="#icon-attachment"></use>
                                                </svg></span><span class="inbox-mails__item-time">3 days</span>
                                        </div>
                                        <div class="inbox-mails__item-message">
                                            <p class="inbox-mails__item-text">The arts teach us how to communicate through creative expression</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="inbox-mails__list-item">
                                <a class="inbox-mails__item" href="#">
                                    <div class="inbox-mails__item-avatar color-teal">
                                        <div class="inbox-mails__item-avatar-text">BH</div>
                                        <img src="img/content/humans/item-8.jpg" alt="#">
                                    </div>
                                    <div class="inbox-mails__item-right">
                                        <h5 class="inbox-mails__item-name"><span>Billy Hicks</span>
                                        </h5>
                                        <div class="inbox-mails__item-right-group"><span class="inbox-mails__item-attachment">
                                                <svg class="icon-icon-attachment">
                                                    <use xlink:href="#icon-attachment"></use>
                                                </svg></span><span class="inbox-mails__item-time">1 week</span>
                                        </div>
                                        <div class="inbox-mails__item-message">
                                            <p class="inbox-mails__item-text">Music, singing, dancing, poetry, and sketching are just a few of the different forms of</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="inbox-mails__list-item">
                                <a class="inbox-mails__item" href="#">
                                    <div class="inbox-mails__item-avatar color-red">
                                        <div class="inbox-mails__item-avatar-text">NS</div>
                                        <img src="img/content/humans/item-3.jpg" alt="#">
                                    </div>
                                    <div class="inbox-mails__item-right">
                                        <h5 class="inbox-mails__item-name"><span>Nora Stanley</span><span class="marker-item color-red"></span>
                                        </h5>
                                        <div class="inbox-mails__item-right-group"><span class="inbox-mails__item-attachment">
                                                <svg class="icon-icon-attachment">
                                                    <use xlink:href="#icon-attachment"></use>
                                                </svg></span><span class="inbox-mails__item-time">3 week</span>
                                        </div>
                                        <div class="inbox-mails__item-message">
                                            <p class="inbox-mails__item-text">Prepare us to adapt to and respect the ways others think, work, and express themselves</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="inbox-mails__list-item">
                                <a class="inbox-mails__item" href="#">
                                    <div class="inbox-mails__item-avatar color-orange">
                                        <div class="inbox-mails__item-avatar-text">WM</div>
                                        <img src="img/content/humans/item-9.jpg" alt="#">
                                    </div>
                                    <div class="inbox-mails__item-right">
                                        <h5 class="inbox-mails__item-name"><span>Walter Miles</span>
                                        </h5>
                                        <div class="inbox-mails__item-right-group"><span class="inbox-mails__item-attachment">
                                                <svg class="icon-icon-attachment">
                                                    <use xlink:href="#icon-attachment"></use>
                                                </svg></span><span class="inbox-mails__item-time">3 week</span>
                                        </div>
                                        <div class="inbox-mails__item-message">
                                            <p class="inbox-mails__item-text">Show us how to understand human experiences, past and present</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="inbox-details">
                    <div class="inbox-details__top">
                        <div class="inbox-details__top-left">
                            <button class="inbox-details__dismiss button-icon button-icon--grey" type="button" data-dismiss><span class="button-icon__icon">
                                    <svg class="icon-icon-chevron">
                                        <use xlink:href="#icon-chevron"></use>
                                    </svg></span>
                            </button>
                            <button class="button-icon button-icon--grey"><span class="button-icon__icon">
                                    <svg class="icon-icon-reply-all">
                                        <use xlink:href="#icon-reply-all"></use>
                                    </svg></span>
                            </button>
                            <button class="button-icon button-icon--grey"><span class="button-icon__icon">
                                    <svg class="icon-icon-reply">
                                        <use xlink:href="#icon-reply"></use>
                                    </svg></span>
                            </button>
                        </div>
                        <div class="inbox-details__top-center">
                            <div class="inbox-details__pagination">
                                <button class="button-icon button-icon--grey"><span class="button-icon__icon">
                                        <svg class="icon-icon-keyboard-left">
                                            <use xlink:href="#icon-keyboard-left"></use>
                                        </svg></span>
                                </button>
                                <div class="d-inline-flex align-items-center mx-2"><span>1</span><span class="mx-1">of</span><span>200</span>
                                </div>
                                <button class="button-icon button-icon--grey"><span class="button-icon__icon">
                                        <svg class="icon-icon-keyboard-right">
                                            <use xlink:href="#icon-keyboard-right"></use>
                                        </svg></span>
                                </button>
                            </div>
                        </div>
                        <div class="inbox-details__top-right">
                            <div class="d-none d-sm-inline-flex">
                                <button class="button-icon button-icon--grey"><span class="button-icon__icon">
                                        <svg class="icon-icon-flag">
                                            <use xlink:href="#icon-flag"></use>
                                        </svg></span>
                                </button>
                            </div>
                            <div class="d-inline-flex">
                                <button class="button-icon button-icon--grey"><span class="button-icon__icon">
                                        <svg class="icon-icon-print">
                                            <use xlink:href="#icon-print"></use>
                                        </svg></span>
                                </button>
                            </div>
                            <div class="d-inline-flex">
                                <button class="button-icon button-icon--grey"><span class="button-icon__icon">
                                        <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                        </svg></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="inbox-details__content scrollbar-thin scrollbar-hidden" data-simplebar>
                        <div class="inbox-details__header">
                            <div class="media-item media-item--medium">
                                <div class="media-item__icon color-red">
                                    <div class="media-item__icon-text">JB</div>
                                    <img class="media-item__thumb" src="img/content/humans/item-4.jpg" alt="#">
                                </div>
                                <div class="media-item__right">
                                    <h5 class="media-item__title">Joan Bates</h5><a class="text-sm text-blue" href="mailto:#">david_boyd@mail.com</a>
                                </div>
                            </div>
                            <div class="text-nowrap text-sm text-grey">30 Nov 2019</div>
                        </div>
                        <pre class="inbox-details__text-message">Hello, Mark!

I am writing to introduce you to David Boyd. I know you've been looking hard for a candidate for that Creative Director position and I believe David Boyd ﬁts the position.

David Boyd and I worked together at Apple company, Where they were the senior Creative Director. They did a terriﬁc job there. David Boyd was responsible for completely restructuring both the public-facing and internal websites. They’d be a great ﬁt at Google company.

I've attached David Boyd resume and portfolio for your review. You can contact David Boyd at
<a class="text-blue" href="mailto">david_boyd@mail.com</a>

Thanks for any help you can give. <img src="img/content/emoji-happy.svg" alt="#">

Best regards,
Joan Bates</pre>
                        <div class="inbox-details__files">
                            <div class="media-file">
                                <div class="media-file__icon">
                                    <img class="media-file__thumb" src="img/content/file-pdf.svg" alt="#" />
                                </div>
                                <div class="media-file__right">
                                    <div class="media-file__prepend">
                                        <h5 class="media-file__title">Resume.pdf</h5><span class="text-sm text-grey">570 KB</span>
                                    </div>
                                    <div class="media-file__append"><a class="button-icon button-icon--grey" href="#"><span class="button-icon__icon">
                                                <svg class="icon-icon-download">
                                                    <use xlink:href="#icon-download"></use>
                                                </svg></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="media-file">
                                <div class="media-file__icon">
                                    <img class="media-file__thumb" src="img/content/file-zip.svg" alt="#" />
                                </div>
                                <div class="media-file__right">
                                    <div class="media-file__prepend">
                                        <h5 class="media-file__title">Portfolio.zip</h5><span class="text-sm text-grey">250 MB</span>
                                    </div>
                                    <div class="media-file__append"><a class="button-icon button-icon--grey" href="#"><span class="button-icon__icon">
                                                <svg class="icon-icon-download">
                                                    <use xlink:href="#icon-download"></use>
                                                </svg></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inbox-details__input">
                            <textarea class="input" rows="4" placeholder="Reply..."></textarea>
                        </div>
                    </div>
                    <div class="inbox-details__bottom">
                        <div class="row">
                            <div class="col-auto">
                                <label class="button-icon button-icon--transparent">
                                    <input type="file" multiple><span class="button-icon__icon">
                                        <svg class="icon-icon-attachment">
                                            <use xlink:href="#icon-attachment"></use>
                                        </svg></span>
                                </label>
                                <button class="button-icon button-icon--transparent"><span class="button-icon__icon">
                                        <svg class="icon-icon-emoji">
                                            <use xlink:href="#icon-emoji"></use>
                                        </svg></span>
                                </button>
                            </div>
                            <div class="col-auto ml-auto">
                                <button class="button button--primary"><span class="button__icon button__icon--left">
                                        <svg class="icon-icon-reply">
                                            <use xlink:href="#icon-reply"></use>
                                        </svg></span><span class="button__text">Reply</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="backdrop-sidebar-panel"></div>
            </div>
        </main>
    </div>
    <div class="inbox-add modal modal-compact scrollbar-thin" id="addMessage" data-simplebar>
        <div class="modal__overlay" data-dismiss="modal"></div>
        <div class="modal__wrap">
            <div class="modal__window">
                <div class="modal__content">
                    <button class="modal__close" data-dismiss="modal">
                        <svg class="icon-icon-cross">
                            <use xlink:href="#icon-cross"></use>
                        </svg>
                    </button>
                    <div class="modal__header">
                        <div class="modal__container">
                            <h2 class="modal__title">New Message</h2>
                        </div>
                    </div>
                    <div class="modal__body">
                        <div class="modal__container">
                            <form method="POST">
                                <div class="row">
                                    <div class="col-12 form-group form-group--lg">
                                        <div class="row row--sm align-items-center justify-content-between">
                                            <div class="col-auto form-group form-group--inline form-group--label">
                                                <label class="form-label">To</label>
                                            </div>
                                            <div class="col-auto form-group form-group--inline form-group--label">
                                                <label class="form-label text-light-dark-theme">Show CC & BCC</label>
                                                <label class="checkbox-toggle">
                                                    <input type="checkbox"><span class="checkbox-toggle__range"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <input class="input" type="text" value="Joan Bates" required>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label form-label--sm">Subject</label>
                                        <div class="input-group">
                                            <input class="input" type="text" value="review" required>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label form-label--sm">Message</label>
                                        <div class="input-editor">
                                            <div class="js-description-editor">Write a Text</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row row--xs gutter-bottom-xs">
                                            <div class="col-12 col-sm-6">
                                                <div class="media-file media-file--full">
                                                    <div class="media-file__icon">
                                                        <img class="media-file__thumb" src="img/content/file-pdf.svg" alt="#" />
                                                    </div>
                                                    <div class="media-file__right">
                                                        <div class="media-file__prepend">
                                                            <h5 class="media-file__title">Resume.pdf</h5><span class="text-sm text-grey">570 KB</span>
                                                        </div>
                                                        <div class="media-file__append"><a class="button-icon button-icon--grey" href="#"><span class="button-icon__icon">
                                                                    <svg class="icon-icon-trash">
                                                                        <use xlink:href="#icon-trash"></use>
                                                                    </svg></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="media-file media-file--full">
                                                    <div class="media-file__icon">
                                                        <img class="media-file__thumb" src="img/content/file-unknown.svg" alt="#" />
                                                    </div>
                                                    <div class="media-file__right">
                                                        <div class="media-file__prepend">
                                                            <h5 class="media-file__title">Resume.pdf</h5><span class="text-sm text-grey">570 KB</span>
                                                        </div>
                                                        <div class="media-file__append"><a class="button-icon button-icon--grey" href="#"><span class="button-icon__icon">
                                                                    <svg class="icon-icon-trash">
                                                                        <use xlink:href="#icon-trash"></use>
                                                                    </svg></span></a>
                                                        </div>
                                                        <div class="media-file__upload">
                                                            <div class="media-file__upload-text">Uploading File... 40%</div>
                                                            <button class="media-file__upload-dismiss" type="button">
                                                                <svg class="icon-icon-cross">
                                                                    <use xlink:href="#icon-cross"></use>
                                                                </svg>
                                                            </button>
                                                            <div class="media-file__progressbar">
                                                                <div class="media-file__progressbar-item" style="width: 40%"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal__footer">
                        <div class="modal__container">
                            <div class="row">
                                <div class="col-auto">
                                    <button class="button-icon button-icon--transparent"><span class="button-icon__icon">
                                            <svg class="icon-icon-attachment">
                                                <use xlink:href="#icon-attachment"></use>
                                            </svg></span>
                                    </button>
                                    <button class="button-icon button-icon--transparent"><span class="button-icon__icon">
                                            <svg class="icon-icon-emoji">
                                                <use xlink:href="#icon-emoji"></use>
                                            </svg></span>
                                    </button>
                                </div>
                                <div class="col-auto ml-auto">
                                    <button class="button button--primary" data-dismiss="modal"><span class="button__icon button__icon--left">
                                            <svg class="icon-icon-send">
                                                <use xlink:href="#icon-send"></use>
                                            </svg></span><span class="button__text">Send</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/gsap/gsap.min.js"></script>
    <script src="js/gsap/ScrollToPlugin.min.js"></script>
    <script src="js/gsap/ScrollTrigger.min.js"></script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="js/vendor/simplebar.min.js"></script>
    <script src="js/vendor/tippy-bundle.umd.min.js"></script>
    <script src="js/vendor/grid/masonry.pkgd.min.js"></script>
    <script src="js/vendor/grid/isotope.pkgd.min.js"></script>
    <script src="js/vendor/charts/circle-progress.min.js"></script>
    <script src="js/vendor/charts/echarts.common.min.js"></script>
    <script src="js/vendor/charts/apexcharts/apexcharts.min.js"></script>
    <script src="js/vendor/cleave/cleave.min.js"></script>
    <script src="js/vendor/cleave/addons/cleave-phone.us.js"></script>
    <script src="js/vendor/jqvmap/jquery.vmap.min.js"></script>
    <script src="js/vendor/jqvmap/jquery.vmap.world.js"></script>
    <script src="js/vendor/jqvmap/jquery.vmap.sampledata.js"></script>
    <script src="js/vendor/jquery.star-rating-svg.min.js"></script>
    <script src="js/vendor/calendar/flatpickr/flatpickr.min.js"></script>
    <script src="js/vendor/calendar/flatpickr/en.js"></script>
    <script src="js/vendor/select2.min.js"></script>
    <script src="js/vendor/editors/quill.min.js"></script>
    <script src="js/vendor/filepond/filepond-plugin-image-preview.min.js"></script>
    <script src="js/vendor/filepond/filepond.min.js"></script>
    <script src="js/vendor/swiper-bundle.min.js"></script>
    <script src="js/vendor/scrollmagic/ScrollMagic.min.js"></script>
    <script src="js/vendor/scrollmagic/debug.addIndicators.min.js"></script>
    <script src="js/components.js"></script>
    <script src="js/common.js"></script>
</body>

</html>