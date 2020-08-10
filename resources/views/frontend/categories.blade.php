<?php
?>
@extends('frontend.layout_master')

@section('link-header')
<link rel="stylesheet" href="{{asset('css/frontend/contentCategories.css')}}">
<link rel="stylesheet" href="{{asset('Admin/plugins/fancybox/jquery.fancybox.min.css')}}">
<link rel="stylesheet" href="{{asset('Admin/plugins/swiper/swiper.min.css')}}">
@stop
@section('main-content')
<section id="wrapper" style="padding: 40px 0 20px 0">
    <div class="container">
        <div id="columns_inner">
            {{-- left --}}
            <div id="left-column" class="col-md-2">
                <div class="block-categories block">
                    <h4 class="block_title hidden-md-down">shop by category</h4>
                    <div id="block_categories_toggle" class="block_content">
                        <ul class="category-top-menu">
                            <li>
                                <ul class="category-sub-menu">
                                    <li data-depth="0">
                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=4&amp;controller=category&amp;id_lang=1">Men</a>
                                    </li>
                                    <li data-depth="0">
                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=5&amp;controller=category&amp;id_lang=1">Women</a>
                                    </li>
                                    <li data-depth="0">
                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=10&amp;controller=category&amp;id_lang=1">kids</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="tmleftbanner" class="block">
                    <ul class="hidden-md-down">
                        <li class="slide tmleftbanner-container">
                            <a href="#" title="LeftBanner 1">
                                <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/modules/tm_leftbanner/views/img/left-banner-1.jpg" alt="LeftBanner 1" title="LeftBanner 1" />
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-latest block">
                    <h4 class="block_title hidden-md-down">Top Sellers</h4>
                    <div class="block_content" id="block_latest_toggle">
                        <div class="products clearfix">
                            <div class="product-item">
                                <div class="left-part">
                                    <a href="#" class="thumbnail product-thumbnail" >
                                        <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/1/8/2/182-cart_default.jpg" alt="" />
                                    </a>
                                </div>

                                <div class="right-part">
                                    <div class="product-description">
                            <span class="h3 product-title" itemprop="name">
                                <a href="#" >
                                    Dolor Curabituraliquam...
                                </a>
                            </span>
                                        <div class="product-price-and-shipping">
                                            <span itemprop="price" class="price">$19.12</span>
                                            <span class="discount-percentage">-20%</span>
                                            <span class="regular-price">$23.90</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="left-part">
                                    <a href="#" class="thumbnail product-thumbnail" >
                                        <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/1/8/1/181-cart_default.jpg" alt="" />
                                    </a>
                                </div>

                                <div class="right-part">
                                    <div class="product-description">
                            <span class="h3 product-title" itemprop="name">
                                <a href="#" >
                                    Massa Suspendisselibero...
                                </a>
                            </span>
                                        <div class="product-price-and-shipping">
                                            <span itemprop="price" class="price">$28.72</span>
                                            <span class="discount-percentage">-20%</span>
                                            <span class="regular-price">$35.90</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="left-part">
                                    <a href="" class="thumbnail product-thumbnail" >
                                        <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/1/8/0/180-cart_default.jpg" alt="" />
                                    </a>
                                </div>

                                <div class="right-part">
                                    <div class="product-description">
                            <span class="h3 product-title" itemprop="name">
                                <a href="#">
                                    Volutpat Tellus...
                                </a>
                            </span>
                                        <div class="product-price-and-shipping">
                                            <span itemprop="price" class="price">$29.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            {{-- right --}}
            <div id="content-wrapper" class="col-md-10">
                <section id="main">
                    <section id="products" style="padding-left: 10px;">
                        <div id="">
                            <div id="js-product-list-top" class="row products-selection">
                                <div class="col-md-6 hidden-md-down total-products">
                                    <ul class="display hidden-xs grid_list">
                                        <li id="grid" class="selected"><a href="#" title="Grid"><i class="fa fa-th-large" aria-hidden="true"></i>
                                            </a></li>
                                        <li id="list"><a href="#" title="List"><i class="fa fa-th-list" aria-hidden="true"></i>
                                            </a></li>
                                    </ul>
                                    <p>There are 30 products.</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <span class="col-sm-3 col-md-3 hidden-sm-down sort-by">Sort by:</span>
                                        <div class="col-sm-9 col-xs-8 col-md-9 products-sort-order dropdown">
                                            <a class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Relevance <i class="material-icons pull-xs-right"></i> </a>
                                            <div class="dropdown-menu">
                                                <a
                                                    rel="nofollow"
                                                    href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=3&amp;controller=category&amp;id_lang=1&amp;order=product.position.asc"
                                                    class="select-list current js-search-link"
                                                >
                                                    Relevance
                                                </a>
                                                <a rel="nofollow" href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=3&amp;controller=category&amp;id_lang=1&amp;order=product.name.asc" class="select-list js-search-link">
                                                    Name, A to Z
                                                </a>
                                                <a rel="nofollow" href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=3&amp;controller=category&amp;id_lang=1&amp;order=product.name.desc" class="select-list js-search-link">
                                                    Name, Z to A
                                                </a>
                                                <a rel="nofollow" href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=3&amp;controller=category&amp;id_lang=1&amp;order=product.price.asc" class="select-list js-search-link">
                                                    Price, low to high
                                                </a>
                                                <a rel="nofollow" href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=3&amp;controller=category&amp;id_lang=1&amp;order=product.price.desc" class="select-list js-search-link">
                                                    Price, high to low
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 col-xs-4 hidden-lg-up filter-button">
                                            <button id="search_filter_toggler" class="btn btn-secondary btn-primary">
                                                Filter
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 hidden-lg-up showing">
                                    Showing 1-16 of 30 item(s)
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="js-product-list">
                                <div id="spe_res">
                                    <div class="products col-md-12">
                                        <ul class="product_list grid gridcount row">
                                            <li class="item col-md-3">
                                                <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">
                                                        <a href="#" class="thumbnail product-thumbnail">
                                                            <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/7/27-home_default.jpg" alt=""/>
                                                            <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/2/32-home_default.jpg"/>
                                                        </a>
                                                        <ul class="product-flags">
                                                            <li class="on-sale">On sale!</li>
                                                            <li class="new">New</li>
                                                            <li class="discount_type_flag">
                                                                <span class="discount-percentage">-20%</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-description">
                                                        <div class="comments_note">
                                                            <div class="star_content clearfix">
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                            </div>
                                                        </div>
                                                        <span class="h3 product-title" itemprop="name">
										                <a href="#" > Curabitur Dolor NuncPellentesque augue </a>
										            </span>
                                                        <div class="product-price-and-shipping">
                                                            <span class="sr-only">Price</span>
                                                            <span itemprop="price" class="price">$19.12</span>
                                                            <span class="sr-only">Regular price</span>
                                                            <span class="regular-price">$23.90</span>
                                                        </div>
                                                        <div class="product-actions-main">
                                                            <form action="" method="post" class="add-to-cart-or-refresh">
                                                                <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />
                                                                <input type="hidden" name="id_product" value="1" class="product_page_product_id" />
                                                                <input type="hidden" name="id_customization" value="0" class="product_customization_id" />
                                                                <button class="btn btn-sm add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </article>
                                            </li>
                                            <li class="item col-md-3">
                                                <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">
                                                        <a href="#" class="thumbnail product-thumbnail">
                                                            <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/7/27-home_default.jpg" alt=""/>
                                                            <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/2/32-home_default.jpg"/>
                                                        </a>
                                                        <ul class="product-flags">
                                                            <li class="on-sale">On sale!</li>
                                                            <li class="new">New</li>
                                                            <li class="discount_type_flag">
                                                                <span class="discount-percentage">-20%</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-description">
                                                        <div class="comments_note">
                                                            <div class="star_content clearfix">
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                            </div>
                                                        </div>
                                                        <span class="h3 product-title" itemprop="name">
										                <a href="#" > Curabitur Dolor NuncPellentesque augue </a>
										            </span>
                                                        <div class="product-price-and-shipping">
                                                            <span class="sr-only">Price</span>
                                                            <span itemprop="price" class="price">$19.12</span>
                                                            <span class="sr-only">Regular price</span>
                                                            <span class="regular-price">$23.90</span>
                                                        </div>
                                                        <div class="product-actions-main">
                                                            <form action="" method="post" class="add-to-cart-or-refresh">
                                                                <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />
                                                                <input type="hidden" name="id_product" value="1" class="product_page_product_id" />
                                                                <input type="hidden" name="id_customization" value="0" class="product_customization_id" />
                                                                <button class="btn btn-sm add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </article>
                                            </li>
                                            <li class="item col-md-3">
                                                <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">
                                                        <a href="#" class="thumbnail product-thumbnail">
                                                            <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/7/27-home_default.jpg" alt=""/>
                                                            <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/2/32-home_default.jpg"/>
                                                        </a>
                                                        <ul class="product-flags">
                                                            <li class="on-sale">On sale!</li>
                                                            <li class="new">New</li>
                                                            <li class="discount_type_flag">
                                                                <span class="discount-percentage">-20%</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-description">
                                                        <div class="comments_note">
                                                            <div class="star_content clearfix">
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                            </div>
                                                        </div>
                                                        <span class="h3 product-title" itemprop="name">
										                <a href="#" > Curabitur Dolor NuncPellentesque augue </a>
										            </span>
                                                        <div class="product-price-and-shipping">
                                                            <span class="sr-only">Price</span>
                                                            <span itemprop="price" class="price">$19.12</span>
                                                            <span class="sr-only">Regular price</span>
                                                            <span class="regular-price">$23.90</span>
                                                        </div>
                                                        <div class="product-actions-main">
                                                            <form action="" method="post" class="add-to-cart-or-refresh">
                                                                <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />
                                                                <input type="hidden" name="id_product" value="1" class="product_page_product_id" />
                                                                <input type="hidden" name="id_customization" value="0" class="product_customization_id" />
                                                                <button class="btn btn-sm add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </article>
                                            </li>
                                            <li class="item col-md-3">
                                                <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">
                                                        <a href="#" class="thumbnail product-thumbnail">
                                                            <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/7/27-home_default.jpg" alt=""/>
                                                            <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/2/32-home_default.jpg"/>
                                                        </a>
                                                        <ul class="product-flags">
                                                            <li class="on-sale">On sale!</li>
                                                            <li class="new">New</li>
                                                            <li class="discount_type_flag">
                                                                <span class="discount-percentage">-20%</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-description">
                                                        <div class="comments_note">
                                                            <div class="star_content clearfix">
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                            </div>
                                                        </div>
                                                        <span class="h3 product-title" itemprop="name">
										                <a href="#" > Curabitur Dolor NuncPellentesque augue </a>
										            </span>
                                                        <div class="product-price-and-shipping">
                                                            <span class="sr-only">Price</span>
                                                            <span itemprop="price" class="price">$19.12</span>
                                                            <span class="sr-only">Regular price</span>
                                                            <span class="regular-price">$23.90</span>
                                                        </div>
                                                        <div class="product-actions-main">
                                                            <form action="" method="post" class="add-to-cart-or-refresh">
                                                                <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />
                                                                <input type="hidden" name="id_product" value="1" class="product_page_product_id" />
                                                                <input type="hidden" name="id_customization" value="0" class="product_customization_id" />
                                                                <button class="btn btn-sm add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </article>
                                            </li>
                                            <li class="item col-md-3">
                                                <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">
                                                        <a href="#" class="thumbnail product-thumbnail">
                                                            <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/7/27-home_default.jpg" alt=""/>
                                                            <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/2/32-home_default.jpg"/>
                                                        </a>
                                                        <ul class="product-flags">
                                                            <li class="on-sale">On sale!</li>
                                                            <li class="new">New</li>
                                                            <li class="discount_type_flag">
                                                                <span class="discount-percentage">-20%</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-description">
                                                        <div class="comments_note">
                                                            <div class="star_content clearfix">
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                            </div>
                                                        </div>
                                                        <span class="h3 product-title" itemprop="name">
										                <a href="#" > Curabitur Dolor NuncPellentesque augue </a>
										            </span>
                                                        <div class="product-price-and-shipping">
                                                            <span class="sr-only">Price</span>
                                                            <span itemprop="price" class="price">$19.12</span>
                                                            <span class="sr-only">Regular price</span>
                                                            <span class="regular-price">$23.90</span>
                                                        </div>
                                                        <div class="product-actions-main">
                                                            <form action="" method="post" class="add-to-cart-or-refresh">
                                                                <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />
                                                                <input type="hidden" name="id_product" value="1" class="product_page_product_id" />
                                                                <input type="hidden" name="id_customization" value="0" class="product_customization_id" />
                                                                <button class="btn btn-sm add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </article>
                                            </li>
                                            <li class="item col-md-3">
                                                <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">
                                                        <a href="#" class="thumbnail product-thumbnail">
                                                            <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/7/27-home_default.jpg" alt=""/>
                                                            <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/2/32-home_default.jpg"/>
                                                        </a>
                                                        <ul class="product-flags">
                                                            <li class="on-sale">On sale!</li>
                                                            <li class="new">New</li>
                                                            <li class="discount_type_flag">
                                                                <span class="discount-percentage">-20%</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-description">
                                                        <div class="comments_note">
                                                            <div class="star_content clearfix">
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                            </div>
                                                        </div>
                                                        <span class="h3 product-title" itemprop="name">
										                <a href="#" > Curabitur Dolor NuncPellentesque augue </a>
										            </span>
                                                        <div class="product-price-and-shipping">
                                                            <span class="sr-only">Price</span>
                                                            <span itemprop="price" class="price">$19.12</span>
                                                            <span class="sr-only">Regular price</span>
                                                            <span class="regular-price">$23.90</span>
                                                        </div>
                                                        <div class="product-actions-main">
                                                            <form action="" method="post" class="add-to-cart-or-refresh">
                                                                <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />
                                                                <input type="hidden" name="id_product" value="1" class="product_page_product_id" />
                                                                <input type="hidden" name="id_customization" value="0" class="product_customization_id" />
                                                                <button class="btn btn-sm add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </article>
                                            </li>
                                            <li class="item col-md-3">
                                                <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">
                                                        <a href="#" class="thumbnail product-thumbnail">
                                                            <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/7/27-home_default.jpg" alt=""/>
                                                            <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/2/32-home_default.jpg"/>
                                                        </a>
                                                        <ul class="product-flags">
                                                            <li class="on-sale">On sale!</li>
                                                            <li class="new">New</li>
                                                            <li class="discount_type_flag">
                                                                <span class="discount-percentage">-20%</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-description">
                                                        <div class="comments_note">
                                                            <div class="star_content clearfix">
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                <div class="star star_on"><i class="fa fa-star"></i></div>
                                                            </div>
                                                        </div>
                                                        <span class="h3 product-title" itemprop="name">
										                <a href="#" > Curabitur Dolor NuncPellentesque augue </a>
										            </span>
                                                        <div class="product-price-and-shipping">
                                                            <span class="sr-only">Price</span>
                                                            <span itemprop="price" class="price">$19.12</span>
                                                            <span class="sr-only">Regular price</span>
                                                            <span class="regular-price">$23.90</span>
                                                        </div>
                                                        <div class="product-actions-main">
                                                            <form action="" method="post" class="add-to-cart-or-refresh">
                                                                <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />
                                                                <input type="hidden" name="id_product" value="1" class="product_page_product_id" />
                                                                <input type="hidden" name="id_customization" value="0" class="product_customization_id" />
                                                                <button class="btn btn-sm add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </article>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <nav class="pagination row">
                                    <div class="col-md-4">
                                        Showing 1-16 of 30 item(s)
                                    </div>
                                    <div class="col-md-8">
                                        <ul class="page-list clearfix text-xs-right">
                                            <li class="current">
                                                <a rel="nofollow" href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=3&amp;controller=category&amp;id_lang=1" class="disabled js-search-link">
                                                    1
                                                </a>
                                            </li>

                                            <li>
                                                <a rel="nofollow" href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=3&amp;controller=category&amp;id_lang=1&amp;page=2" class="js-search-link">
                                                    2
                                                </a>
                                            </li>

                                            <li>
                                                <a rel="next" href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=3&amp;controller=category&amp;id_lang=1&amp;page=2" class="next js-search-link">
                                                    <i class="material-icons"></i>Next
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
        </div>
    </div>
</section>
@endsection
@section('main-script')
<script src="{{asset('Admin/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('Admin/plugins/swiper/swiper.min.js')}}"></script>
<script src="{{asset('js/detail.js')}}"></script>

@stop
