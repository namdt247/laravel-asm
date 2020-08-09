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
                            <div class="cat-title"> <i class="material-icons menu-open"></i></div>
                        </div>
                    </div>
                    {{-- next prev banner --}}
                    <div class="pull-xs-right" id="_mobile_cart"></div>
                    <div class="pull-xs-right" id="_mobile_user_info"></div>
                    <div class="right-nav">
                        <div id="links_block_top" class="block links">
                            <h3 class="h3 title_block ">
                                <i class="material-icons"></i>
                            </h3>
                            <ul id="tm_toplink" class="block_content">
                                <li><a href="#" title="today deal's">A</a></li>
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
            {{-- logo and sreach--}}
            <div class="container">
                <div class="header_logo hidden-md-down" id="_desktop_logo">
                    <a href="#">
                        <img class="logo img-responsive" src="{{asset('Admin/dist/img/logo_chair.png')}}" alt="Super Chair">
                    </a>
                </div>

                <div id="search_widget" class="col-lg-5 col-md-7 col-sm-12 search-widget" data-search-controller-url="//prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=search">
                    <span class="search_button"></span>
                    <div class="searchtoggle">

                        <form method="get" action="//prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=search">
                            <input type="hidden" name="controller" value="search">
                            <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input type="text" name="s" value="" placeholder="Tìm kiếm Sản phẩm tại đây" aria-label="Search" class="ui-autocomplete-input">
                            <button type="submit">
                                <div class="submit-text">Tìm kiếm</div>
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
        {{-- header and categorie --}}
        <div class="header-top-main bg_main">
            <div class="container">
                <div id="tm_vertical_menu_top" class="tmvm-contener clearfix col-lg-12  hb-animate-element top-to-bottom">
                    <div class="block-title clearfix">
                        <a class="categorie_toggle" data-toggle="collapse" data-target="#desktop_top_menu">
                            <div class="menu-icon pull-xs-left"><i class="fa fa-list" aria-hidden="true"></i></div>
                            <div class="menu-title pull-xs-left">All Categories</div>
                        </a>
                    </div>
                    <div class="menu collapse" id="desktop_top_menu">
                        <ul class="tm_sf-menu top-menu" id="top-menu">
                            <li class="category ">
                                <a href="" class="dropdown-item dropdown-item1">
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    furniture
                                </a>
                                <div class="menu-images-container"></div>
                                <div class="popover sub-menu js-sub-menu collapse threecolumn" id="top_sub_menu">
                                    <ul class="tm_sf-menu top-menu">
                                        <li class="category " id="tmcategory-4">
                                            <a href="#" class="dropdown-item dropdown-submenu">
                                                        <span class="pull-xs-right hidden-lg-up">
                                                            <span data-target="#top_sub_menu_13172" data-toggle="collapse" class="navbar-toggler collapse-icons">
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
                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=11&amp;controller=category&amp;id_lang=1" class="dropdown-item" data-depth="2">Jeans &amp; Jeggings</a>
                                                    </li>
                                                    <li class="category " id="tmcategory-12">
                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=12&amp;controller=category&amp;id_lang=1" class="dropdown-item" data-depth="2">T-Shirts &amp; Shirts</a>
                                                    </li>
                                                    <li class="category " id="tmcategory-13">
                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=13&amp;controller=category&amp;id_lang=1" class="dropdown-item" data-depth="2">Tops &amp; Tees</a>
                                                    </li>
                                                    <li class="category " id="tmcategory-25">
                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=25&amp;controller=category&amp;id_lang=1" class="dropdown-item" data-depth="2">tool store</a>
                                                    </li>
                                                    <li class="category " id="tmcategory-26">
                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=26&amp;controller=category&amp;id_lang=1" class="dropdown-item" data-depth="2">sofa set</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="category " id="tmcategory-5">
                                            <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=5&amp;controller=category&amp;id_lang=1" class="dropdown-item dropdown-submenu" data-depth="1">
                                                        <span class="pull-xs-right hidden-lg-up">
                                                            <span data-target="#top_sub_menu_10542" data-toggle="collapse" class="navbar-toggler collapse-icons">
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
                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=14&amp;controller=category&amp;id_lang=1" class="dropdown-item" data-depth="2">Kurtas &amp; Kurtis</a>
                                                    </li>
                                                    <li class="category " id="tmcategory-15">
                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=15&amp;controller=category&amp;id_lang=1" class="dropdown-item" data-depth="2">Anarkali Suits</a>
                                                    </li>
                                                    <li class="category " id="tmcategory-16">
                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=16&amp;controller=category&amp;id_lang=1" class="dropdown-item" data-depth="2">Party Gowns</a>
                                                    </li>
                                                    <li class="category " id="tmcategory-27">
                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=27&amp;controller=category&amp;id_lang=1" class="dropdown-item" data-depth="2">lighting</a>
                                                    </li>
                                                    <li class="category " id="tmcategory-28">
                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=28&amp;controller=category&amp;id_lang=1" class="dropdown-item" data-depth="2">Mesotherapy</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="category " id="tmcategory-10">
                                            <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=10&amp;controller=category&amp;id_lang=1" class="dropdown-item dropdown-submenu" data-depth="1">
                                                        <span class="pull-xs-right hidden-lg-up">
                                                            <span data-target="#top_sub_menu_52631" data-toggle="collapse" class="navbar-toggler collapse-icons">
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
                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=17&amp;controller=category&amp;id_lang=1" class="dropdown-item" data-depth="2">Frocks &amp; Dresses</a>
                                                    </li>
                                                    <li class="category " id="tmcategory-18">
                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=18&amp;controller=category&amp;id_lang=1" class="dropdown-item" data-depth="2">Traditional Wear</a>
                                                    </li>
                                                    <li class="category " id="tmcategory-19">
                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=19&amp;controller=category&amp;id_lang=1" class="dropdown-item" data-depth="2">Body Suits</a>
                                                    </li>
                                                    <li class="category " id="tmcategory-29">
                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=29&amp;controller=category&amp;id_lang=1" class="dropdown-item" data-depth="2">Floor bed</a>
                                                    </li>
                                                    <li class="category " id="tmcategory-30">
                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=30&amp;controller=category&amp;id_lang=1" class="dropdown-item" data-depth="2">Recliner Sofa</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="category " >
                                <a href="" class="dropdown-item dropdown-item1"><i class="fa fa-arrow-right" aria-hidden="true"></i>Accessories</a>
                            </li>
                            <li class="category ">
                                <a href="" class="dropdown-item dropdown-item1"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sports Shoes</a>
                            </li>
                            <li class="category ">
                                <a href="" class="dropdown-item dropdown-item1"><i class="fa fa-arrow-right" aria-hidden="true"></i>Eyewear</a>
                            </li>
                            <li class="category ">
                                <a href="#" class="dropdown-item dropdown-item1"><i class="fa fa-arrow-right" aria-hidden="true"></i>Footwear</a>
                            </li>
                            <li class="category ">
                                <a href="#" class="dropdown-item dropdown-item1"><i class="fa fa-arrow-right" aria-hidden="true"></i>Electronics</a>
                            </li>
                            <li class="category ">
                                <a href="#" class="dropdown-item dropdown-item1"><i class="fa fa-arrow-right" aria-hidden="true"></i>Smartphones</a>
                            </li>
                            <li class="category ">
                                <a href="#" class="dropdown-item dropdown-item1"><i class="fa fa-arrow-right" aria-hidden="true"></i>Televison</a>
                            </li>
                            <li class="category ">
                                <a href="#" class="dropdown-item dropdown-item1"><i class="fa fa-arrow-right" aria-hidden="true"></i>digital camera</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="links_block_top" class="block links">
                    <h3 class="h3 title_block "><i class="material-icons"></i></h3>
                    <ul id="tm_toplink" class="block_content">
                        <li><a href="#" title="today deal's">Hot deal</a></li>
                        <li><a href="#" title="introduce">Giới thiệu</a></li>
                        <li><a href="#" title="q&a">Câu hỏi thường gặp</a></li>
                        <li><a href="#" title="news">Tin tức</a></li>
                        <li><a href="#" title="Contacts">Tuyển dụng</a></li>
                        <li><a href="#" title="Contacts">Liên lạc</a></li>
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
