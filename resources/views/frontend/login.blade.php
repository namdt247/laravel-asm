<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Super Chair</title>
    <link rel="stylesheet" href="{{asset('Admin/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/plugins/fontawesome-free/css/v4-shims.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/refresh_style.css')}}">
    <link rel="stylesheet"
          href="{{asset('Admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<main>
    <header id="header">
        <div class="header-banner"></div>
        <nav class="header-nav">
            <div class="container">
                <div class="hidden-md-down">
                    <div class="left-nav"></div>
                    <div class="right-nav">
                        <div id="links_block_top" class="block links">
                            <h3 class="h3 title_block ">
                                <i class="material-icons"></i>
                            </h3>
                            <ul id="tm_toplink" class="block_content">
                                <li><a href="#" title="today deal's">today deal's</a></li>
                                <li><a href="#" title="gift card">gift card</a></li>
                                <li><a href="#" title="subscribe">subscribe</a></li>
                                <li><a href="#" title="buyer Protection">buyer Protection</a></li>
                                <li><a href="#" title="portfolio">portfolio</a></li>
                                <li><a href="#" title="Contacts">Contacts</a></li>
                                <li><a href="#" title="news">news</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="hidden-lg-up text-xs-center mobile">
                    <div class="text-xs-left mobile hidden-lg-up mobile-menu">
                        <div class="menu-container">
                            <div class="menu-icon">
                                <div class="cat-title"><i class="material-icons menu-open"></i></div>
                            </div>
                        </div>
                        <div class="top-logo" id="_mobile_logo"></div>
                        <div class="pull-xs-right" id="_mobile_cart"></div>
                        <div class="pull-xs-right" id="_mobile_user_info"></div>
                        <div class="right-nav">
                            <div id="links_block_top" class="block links">
                                <h3 class="h3 title_block ">
                                    <i class="material-icons"></i>
                                </h3>
                                <ul id="tm_toplink" class="block_content">
                                    <li><a href="#" title="today deal's">today deal's</a></li>
                                    <li><a href="#" title="gift card">gift card</a></li>
                                    <li><a href="#" title="subscribe">subscribe</a></li>
                                    <li><a href="#" title="buyer Protection">buyer Protection</a></li>
                                    <li><a href="#" title="portfolio">portfolio</a></li>
                                    <li><a href="#" title="Contacts">Contacts</a></li>
                                    <li><a href="#" title="news">news</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="header-top">
            <div class="header-div">
                <div class="container">
                    <div class="header_logo hidden-md-down" id="_desktop_logo">
                        <a href="#">
                            <img class="logo img-responsive" src="{{asset('Admin/dist/img/logo_chair.png')}}"
                                 alt="Super Chair">
                        </a>
                    </div>
                    <div id="search_widget" class="col-lg-4 col-md-5 col-sm-12 search-widget"
                         data-search-controller-url="//prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=search">
                        <span class="search_button"></span>
                        <div class="searchtoggle">

                            <form method="get"
                                  action="//prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=search">
                                <input type="hidden" name="controller" value="search">
                                <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input
                                        type="text" name="s" value="" placeholder="Serach Product here..."
                                        aria-label="Search" class="ui-autocomplete-input" autocomplete="off">
                                <button type="submit">
                                    <div class="submit-text">search</div>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div id="tmnav1cmsblock">
                        <div class="navcms_block">
                            <div class="box-content-cms">
                                <div class="inner-cms">
                                    <div class="box-cms-content">
                                        <div class="first-content">
                                            <div class="inner-content">
                                                <div class="service-content">
                                                    <div class="cms-icon icon-left1"><i class="fa fa-truck"></i></div>
                                                    <div class="service-right">
                                                        <div class="title">free shipping</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="second-content">
                                            <div class="inner-content">
                                                <div class="service-content">
                                                    <div class="cms-icon icon-left1"><i class="fa fa-phone"></i></div>
                                                    <div class="service-right">
                                                        <div class="title">need help?</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="mobile_top_menu_wrapper" class="row hidden-lg-up">
                        <div class="mobile-menu-inner">
                            <div class="menu-icon">
                                <div class="cat-title title2"><i class="material-icons menu-close"></i></div>
                            </div>
                            <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
                            <div id="_mobile_currency_selector"></div>
                            <div id="_mobile_language_selector"></div>
                            <div id="_mobile_contact_link"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-top-main bg_main">
                <div class="container">
                    <div id="tm_vertical_menu_top"
                         class="tmvm-contener clearfix col-lg-12  hb-animate-element top-to-bottom">
                        <div class="block-title clearfix">
                            <div class="menu-icon pull-xs-left"><i class="fa fa-list" aria-hidden="true"></i></div>
                            <div class="menu-title pull-xs-left">all categories</div>
                        </div>
                        <div class="menu vertical-menu js-top-menu position-static hidden-sm-down"
                             id="_desktop_top_menu">
                            <ul class="tm_sf-menu top-menu" id="top-menu" data-depth="0">
                                <li class="category " id="tmcategory-3">
                                    <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=3&amp;controller=category&amp;id_lang=1"
                                       class="dropdown-item" data-depth="0">
                                            <span class="pull-xs-right hidden-lg-up">
                                                <span data-target="#top_sub_menu_41486" data-toggle="collapse"
                                                      class="navbar-toggler collapse-icons">
                                                    <i class="material-icons add"></i>
                                                    <i class="material-icons remove"></i>
                                                </span>
                                            </span> furniture
                                    </a>
                                    <div class="menu-images-container"></div>
                                    <div class="popover sub-menu js-sub-menu collapse threecolumn"
                                         id="top_sub_menu_41486">
                                        <ul class="tm_sf-menu top-menu" data-depth="1">
                                            <li class="category " id="tmcategory-4">
                                                <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=4&amp;controller=category&amp;id_lang=1"
                                                   class="dropdown-item dropdown-submenu" data-depth="1">
                                                        <span class="pull-xs-right hidden-lg-up">
                                                            <span data-target="#top_sub_menu_13172"
                                                                  data-toggle="collapse"
                                                                  class="navbar-toggler collapse-icons">
                                                                <i class="material-icons add"></i>
                                                                <i class="material-icons remove"></i>
                                                            </span>
                                                        </span>Men
                                                </a>
                                                <div class="menu-images-container">
                                                    <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/c/4-0_thumb.jpg">
                                                </div>
                                                <div class="collapse" id="top_sub_menu_13172">
                                                    <ul class="tm_sf-menu top-menu" data-depth="2">
                                                        <li class="category " id="tmcategory-11">
                                                            <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=11&amp;controller=category&amp;id_lang=1"
                                                               class="dropdown-item" data-depth="2">Jeans &amp;
                                                                Jeggings</a>
                                                        </li>
                                                        <li class="category " id="tmcategory-12">
                                                            <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=12&amp;controller=category&amp;id_lang=1"
                                                               class="dropdown-item" data-depth="2">T-Shirts &amp;
                                                                Shirts</a>
                                                        </li>
                                                        <li class="category " id="tmcategory-13">
                                                            <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=13&amp;controller=category&amp;id_lang=1"
                                                               class="dropdown-item" data-depth="2">Tops &amp; Tees</a>
                                                        </li>
                                                        <li class="category " id="tmcategory-25">
                                                            <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=25&amp;controller=category&amp;id_lang=1"
                                                               class="dropdown-item" data-depth="2">tool store</a>
                                                        </li>
                                                        <li class="category " id="tmcategory-26">
                                                            <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=26&amp;controller=category&amp;id_lang=1"
                                                               class="dropdown-item" data-depth="2">sofa set</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category " id="tmcategory-5">
                                                <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=5&amp;controller=category&amp;id_lang=1"
                                                   class="dropdown-item dropdown-submenu" data-depth="1">
                                                        <span class="pull-xs-right hidden-lg-up">
                                                            <span data-target="#top_sub_menu_10542"
                                                                  data-toggle="collapse"
                                                                  class="navbar-toggler collapse-icons">
                                                                <i class="material-icons add"></i>
                                                                <i class="material-icons remove"></i>
                                                            </span>
                                                        </span>Women
                                                </a>
                                                <div class="menu-images-container">
                                                    <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/c/5-0_thumb.jpg">
                                                </div>
                                                <div class="collapse" id="top_sub_menu_10542">
                                                    <ul class="tm_sf-menu top-menu" data-depth="2">
                                                        <li class="category " id="tmcategory-14">
                                                            <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=14&amp;controller=category&amp;id_lang=1"
                                                               class="dropdown-item" data-depth="2">Kurtas &amp;
                                                                Kurtis</a>
                                                        </li>
                                                        <li class="category " id="tmcategory-15">
                                                            <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=15&amp;controller=category&amp;id_lang=1"
                                                               class="dropdown-item" data-depth="2">Anarkali Suits</a>
                                                        </li>
                                                        <li class="category " id="tmcategory-16">
                                                            <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=16&amp;controller=category&amp;id_lang=1"
                                                               class="dropdown-item" data-depth="2">Party Gowns</a>
                                                        </li>
                                                        <li class="category " id="tmcategory-27">
                                                            <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=27&amp;controller=category&amp;id_lang=1"
                                                               class="dropdown-item" data-depth="2">lighting</a>
                                                        </li>
                                                        <li class="category " id="tmcategory-28">
                                                            <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=28&amp;controller=category&amp;id_lang=1"
                                                               class="dropdown-item" data-depth="2">Mesotherapy</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category " id="tmcategory-10">
                                                <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=10&amp;controller=category&amp;id_lang=1"
                                                   class="dropdown-item dropdown-submenu" data-depth="1">
                                                        <span class="pull-xs-right hidden-lg-up">
                                                            <span data-target="#top_sub_menu_52631"
                                                                  data-toggle="collapse"
                                                                  class="navbar-toggler collapse-icons">
                                                                <i class="material-icons add"></i>
                                                                <i class="material-icons remove"></i>
                                                            </span>
                                                        </span>kids
                                                </a>
                                                <div class="menu-images-container">
                                                    <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/c/10-0_thumb.jpg">
                                                </div>
                                                <div class="collapse" id="top_sub_menu_52631">
                                                    <ul class="tm_sf-menu top-menu" data-depth="2">
                                                        <li class="category " id="tmcategory-17">
                                                            <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=17&amp;controller=category&amp;id_lang=1"
                                                               class="dropdown-item" data-depth="2">Frocks &amp;
                                                                Dresses</a>
                                                        </li>
                                                        <li class="category " id="tmcategory-18">
                                                            <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=18&amp;controller=category&amp;id_lang=1"
                                                               class="dropdown-item" data-depth="2">Traditional Wear</a>
                                                        </li>
                                                        <li class="category " id="tmcategory-19">
                                                            <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=19&amp;controller=category&amp;id_lang=1"
                                                               class="dropdown-item" data-depth="2">Body Suits</a>
                                                        </li>
                                                        <li class="category " id="tmcategory-29">
                                                            <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=29&amp;controller=category&amp;id_lang=1"
                                                               class="dropdown-item" data-depth="2">Floor bed</a>
                                                        </li>
                                                        <li class="category " id="tmcategory-30">
                                                            <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=30&amp;controller=category&amp;id_lang=1"
                                                               class="dropdown-item" data-depth="2">Recliner Sofa</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category " id="tmcategory-6">
                                    <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=6&amp;controller=category&amp;id_lang=1"
                                       class="dropdown-item" data-depth="0">Accessories</a>
                                </li>
                                <li class="category " id="tmcategory-9">
                                    <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=9&amp;controller=category&amp;id_lang=1"
                                       class="dropdown-item" data-depth="0">Sports Shoes</a>
                                </li>
                                <li class="category " id="tmcategory-7">
                                    <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=7&amp;controller=category&amp;id_lang=1"
                                       class="dropdown-item" data-depth="0">Eyewear</a>
                                </li>
                                <li class="category " id="tmcategory-8">
                                    <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=8&amp;controller=category&amp;id_lang=1"
                                       class="dropdown-item" data-depth="0">Footwear</a>
                                </li>
                                <li class="category " id="tmcategory-20">
                                    <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=20&amp;controller=category&amp;id_lang=1"
                                       class="dropdown-item" data-depth="0">Electronics</a>
                                </li>
                                <li class="category " id="tmcategory-21">
                                    <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=21&amp;controller=category&amp;id_lang=1"
                                       class="dropdown-item" data-depth="0">Smartphones</a>
                                </li>
                                <li class="category " id="tmcategory-22">
                                    <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=22&amp;controller=category&amp;id_lang=1"
                                       class="dropdown-item" data-depth="0">Televison</a>
                                </li>
                                <li class="category " id="tmcategory-23">
                                    <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=23&amp;controller=category&amp;id_lang=1"
                                       class="dropdown-item" data-depth="0">digital camera</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="links_block_top" class="block links">
                        <h3 class="h3 title_block "><i class="material-icons"></i></h3>
                        <ul id="tm_toplink" class="block_content">
                            <li><a href="#" title="today deal's">today deal's</a></li>
                            <li><a href="#" title="gift card">gift card</a></li>
                            <li><a href="#" title="subscribe">subscribe</a></li>
                            <li><a href="#" title="buyer Protection">buyer Protection</a></li>
                            <li><a href="#" title="portfolio">portfolio</a></li>
                            <li><a href="#" title="Contacts">Contacts</a></li>
                            <li><a href="#" title="news">news</a></li>
                        </ul>
                    </div>
                    <div id="_desktop_cart">
                        <a href=""><i class="fa fa-user-o"></i></a>
                        <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <aside id="notifications"></aside>
    <section id="wrapper">
        <div class="container">
            <div id="columns_inner">
                <nav data-depth="1" class="breadcrumb hidden-sm-down">
                    <div class="container"><h1 class="h1">
                            Log in to your account
                        </h1>
                        <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <a itemprop="item" href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php">
                                    <span itemprop="name">Home</span>
                                </a>
                                <meta itemprop="position" content="1">
                            </li>
                        </ol>
                    </div>
                </nav>
                <div id="content-wrapp  er" class="left-column">
                    <section id="main">
                        <header class="page-header">
                        </header>
                        <section id="content" class="page-content card card-block">
                            <section class="login-form">
                                <!-- begin customer/_partials/login-form.tpl -->
                                <form id="login-form"
                                      action="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=authentication&amp;back=my-account"
                                      method="post">
                                    <section>
                                        <!-- begin _partials/form-fields.tpl -->
                                        <input type="hidden" name="back" value="my-account">
                                        <!-- end _partials/form-fields.tpl -->
                                        <!-- begin _partials/form-fields.tpl -->
                                        <div class="form-group row ">
                                            <label class="col-md-3 form-control-label required">
                                                Email
                                            </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="email" type="email" value=""
                                                       required="">
                                            </div>
                                            <div class="col-md-3 form-control-comment">
                                            </div>
                                        </div>
                                        <!-- end _partials/form-fields.tpl -->
                                        <!-- begin _partials/form-fields.tpl -->
                                        <div class="form-group row ">
                                            <label class="col-md-3 form-control-label required">
                                                Password
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-group js-parent-focus">
                                                    <input class="form-control js-child-focus js-visible-password"
                                                           name="password" type="password" value="" pattern=".{5,}"
                                                           required="">
                                                    <span class="input-group-btn">
                                                        <button class="btn" type="button" data-action="show-password"
                                                                data-text-show="Show" data-text-hide="Hide">
                                                            Show
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 form-control-comment">
                                            </div>
                                        </div>
                                        <!-- end _partials/form-fields.tpl -->
                                        <div class="forgot-password">
                                            <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=password"
                                               rel="nofollow">
                                                Forgot your password?
                                            </a>
                                        </div>
                                    </section>
                                    <footer class="form-footer text-xs-center clearfix">
                                        <input type="hidden" name="submitLogin" value="1">

                                        <button id="submit-login" class="btn btn-primary" data-link-action="sign-in"
                                                type="submit">
                                            Sign in
                                        </button>
                                    </footer>
                                </form>
                                <!-- end customer/_partials/login-form.tpl -->
                            </section>
                            <hr>
                            <div class="no-account">
                                <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=authentication&amp;create_account=1"
                                   data-link-action="display-register-form">
                                    No account? Create one here
                                </a>
                            </div>
                        </section>
                        <footer class="page-footer">
                            <!-- Footer content -->
                        </footer>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="footer-container">
            <div class="container">
                <div class="row footer">
                    <div class="block-contact footer-block col-xs-12 col-sm-4 links wrapper hb-animate-element right-to-left">
                        <h3 class="block-contact-title hidden-md-down">
                            <a>address</a>
                        </h3>
                        <div class="title h3 hidden-lg-up" data-target="#block-contact_list" data-toggle="collapse">
                            <span class="">address</span>
                            <span class="pull-xs-right">
                                        <span class="navbar-toggler collapse-icons">
                                            <i class="material-icons add"></i>
                                            <i class="material-icons remove"></i>
                                        </span>
                                  </span>
                        </div>
                        <ul id="block-contact_list" class="collapse">
                            <li class="address">
                                <i class="fa fa-map-marked"></i>
                                <span class="contactdiv">số 8A, Tôn Thất Thuyết, Mỹ Đình, Nam Từ Liêm, Hà Nội</span>
                            </li>
                            <li class="number">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span class="contactdiv">024 7300 8855</span>
                            </li>
                            <li class="email">
                                <i class="fa fa-envelope-open" aria-hidden="true"></i>
                                <span class="contactdiv">Sales@Yourcompany.Com</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 links block links hb-animate-element top-to-bottom">
                        <h3 class="h3 hidden-md-down">Sản phẩm</h3>
                        <ul id="footer_sub_menu">
                            <li><a>Thanh toán</a></li>
                            <li><a>Giảm giá</a></li>
                            <li><a>Sản phẩm mới</a></li>
                            <li><a>Sản phẩm bán chạy</a></li>
                            <li><a>Giao hàng</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 links block links hb-animate-element top-to-bottom">
                        <h3 class="h3 hidden-md-down">Giới thiệu</h3>
                        <ul id="footer_sub_menu">
                            <li><a>Giới thiệu</a></li>

                            <li><a>Thông báo</a></li>
                            <li><a>Sơ đồ</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 links block links hb-animate-element top-to-bottom"
                         style="margin-right: 60px;">
                        <h3 class="h3 hidden-md-down">Chính sách</h3>
                        <ul id="footer_sub_menu">
                            <li><a>Cửa hàng</a></li>
                            <li><a>Liên hệ</a></li>
                            <li><a>Đăng nhập</a></li>
                            <li><a>Tài khoản của tôi</a></li>
                        </ul>
                    </div>
                    <div class="links block_newsletter block col-lg-12 col-md-12 col-sm-12">
                        <h3 class="block_title hidden-md-down">Đăng ký</h3>
                        <div class="col-md-12 col-xs-12 block_content collapse" id="block_email_toggle">
                            <p class="text">Bạn có thể hủy đăng ký bất cứ lúc nào. Xin vui lòng tìm thông tin liên lạc
                                của chúng tôi trong thông báo pháp lý.</p>
                            <form>
                                <div class="col-xs-12">
                                    <div class="input-wrapper">
                                        <input name="email" type="email" value="" placeholder="Nhập id"
                                               aria-labelledby="block-newsletter-label">
                                        <button class="btn btn-primary pull-xs-right hidden-xs-down"
                                                name="submitNewsletter"><i class="fa fa-paper-plane"
                                                                           aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-xs-12"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
