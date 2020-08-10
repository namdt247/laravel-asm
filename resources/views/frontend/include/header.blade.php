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
                    <a href="/">
                        <img class="logo img-responsive" src="{{asset('Admin/dist/img/logo_chair.png')}}" alt="Super Chair">
                    </a>
                </div>

                <div id="search_widget" class="col-lg-5 col-md-7 col-sm-12 search-widget" data-search-controller-url="//prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=search">
                    <span class="search_button"></span>
                    <div class="searchtoggle">

                        <form method="get" action="{{ route('frontend.productSearch') }}">
                            <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                            <input type="text" name="keyword" value="" placeholder="Tìm kiếm Sản phẩm tại đây" aria-label="Search" class="ui-autocomplete-input" />
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
                            <div class="menu-title pull-xs-left">Dòng sản phẩm</div>
                        </a>
                    </div>
                    <div class="menu collapse" id="desktop_top_menu">
                        <?php $category = \App\Category::where('status', '=', 1)->get(); ?>
                        <ul class="tm_sf-menu top-menu" id="top-menu">
                            @foreach($category as $cate)
                                <li class="category ">
                                    <a href="{!! route('frontend.productByCate', $cate->id) !!}" class="dropdown-item dropdown-item1">
                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        {{$cate->name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div id="links_block_top" class="block links">
                    <h3 class="h3 title_block "><i class="material-icons"></i></h3>
                    <ul id="tm_toplink" class="block_content">
                        <li><a href="#" title="today deal's">Hot deal</a></li>
                        <li><a href="{{ route('frontend.introduce') }}" title="introduce">Giới thiệu</a></li>
                        <li><a href="{{ route('frontend.faq') }}" title="q&a">Câu hỏi thường gặp</a></li>
                        <li><a href="#" title="news">Tin tức</a></li>
                        <li><a href="{{ route('frontend.contact') }}" title="Contacts">Liên hệ</a></li>
                    </ul>
                </div>
                <div id="_desktop_cart">
                    <a href=""><i class="fa fa-user-o"></i></a>
                    <a href="{{route('frontend.shopping_cart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>
