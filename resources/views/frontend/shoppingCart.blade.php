<?php
?>
@extends('frontend.layout_master')

@section('link-header')
    <link rel="stylesheet" href="{{asset('css/frontend/shoppingCart.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/plugins/fancybox/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/plugins/swiper/swiper.min.css')}}">
@stop
@section('main-content')
    <section id="wrapper">
        <div class="container">
            <div id="columns_inner" style="padding: 20px 0;">
                <div id="content-wrapper" class="row">
                    <div class="tab-main-title col-md-12" style="margin-bottom: 15px !important; border: none;">
                        <h2 class="h1 products-section-title text-uppercase" style="font-size: 16px !important;">
                            SHOPPING CART
                        </h2>
                    </div>
                    <section id="main" class="col-md-12">
                        <div class="cart-grid row">
                            <div class="cart-grid-body col-md-9">
                                <div class="card cart-container">
                                    <div class="card-block">
                                        {{-- for từ đây --}}
                                        <div class="cart-header">
                                            <div class="close1"></div>
                                            <div class="cart-sec simpleCart_shelfItem">
                                                <div class="cart-item cyc" style="border-bottom: none;">
                                                    <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/2/32-home_default.jpg" class="img-responsive" alt="" />
                                                </div>
                                                <div class="cart-item-info">
                                                    <h3><a href="#">Mountain Hopper(XS R034)</a><span>Mã sản phẩm: 3578</span></h3>
                                                    <ul class="qty">
                                                        <li class="row py-1">
                                                            <div class="clearfix product-variants-item col-md-6">
                                                                <span class="control-label col-md-6 pl-0">Size</span>
                                                                <select class="form-control form-control-select col-md-3" id="group_1">
                                                                    <option value="1" title="S" selected="selected">S</option>
                                                                    <option value="2" title="M">M</option>
                                                                    <option value="3" title="L">L</option>
                                                                </select>
                                                            </div>
                                                            <div class="clearfix product-variants-item col-md-6">
                                                                <span class="control-label col-md-6">Color</span>
                                                                <ul id="group_2" class="col-md-4" style="margin: 8px 20px 8px 0;">
                                                                    <li class="pull-xs-left input-container">
                                                                        <label>
                                                                            <input class="input-color" type="radio" data-product-attribute="2" name="group[2]" value="6">
                                                                            <span class="color" style="background-color: #cfc4a6;"><span class="sr-only">Taupe</span></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="pull-xs-left input-container">
                                                                        <label>
                                                                            <input class="input-color" type="radio" data-product-attribute="2" name="group[2]" value="8" checked="checked">
                                                                            <span class="color" style="background-color: #ffffff;"><span class="sr-only">White</span></span>
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="row py-1">
                                                            <div class="clearfix product-variants-item col-md-6">
                                                                <span class="control-label col-md-6 pl-0">Dimension</span>
                                                                <select class="form-control form-control-select col-md-4" id="group_3">
                                                                    <option value="19" title="40x60cm">40x60cm</option>
                                                                    <option value="20" title="60x90cm" selected="selected">60x90cm</option>
                                                                </select>
                                                            </div>
                                                            <div class="product-add-to-cart clearfix col-md-6">
                                                                <span class="control-label col-md-6">Quantity</span>
                                                                <div class="product-quantity col-md-3">
                                                                    <div class="qty">
                                                                        <div class="input-group bootstrap-touchspin">
                                                                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                                                            <input type="number" name="qty" id="quantity_wanted" min="0" value="1" class="input-group form-control" aria-label="Quantity" style="display: block;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </li>
                                                    </ul>

                                                    <div class="delivery">
                                                        <p>Total : 100.00 VND</p>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="cart-overview js-cart d-none">
                                        <span class="no-items">There are no more items in your cart</span>
                                    </div>
                                </div>
                                <a class="label" href="#"> <i class="fa fa-chevron-left" aria-hidden="true" style="font-size: 13px;"></i> Continue shopping </a>
                            </div>
                            <div class="cart-grid-right col-md-3">
                                <div class="card cart-summary">
                                    <div class="cart-detailed-totals">
                                        <div class="card-block">
                                            <div class="cart-summary-line" id="cart-subtotal-products">
                                            <span class="label js-subtotal">
                                                0 items
                                            </span>
                                                <span class="value">$0.00</span>
                                            </div>
                                            <div class="cart-summary-line" id="cart-subtotal-shipping">
                                            <span class="label">
                                                Shipping
                                            </span>
                                                <span class="value">Free</span>
                                                <div><small class="value"></small></div>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="cart-summary-line cart-total">
                                                <span class="label">Total (tax excl.)</span>
                                                <span class="value">$0.00</span>
                                            </div>

                                            <div class="cart-summary-line">
                                                <small class="label">Taxes</small>
                                                <small class="value">$0.00</small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="checkout text-xs-center card-block">
                                        <button type="button" class="btn add-to-cart">Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="featured-products clearfix">
                        <div class="tab-main-title">
                            <h2 class="h1 products-section-title text-uppercase">
                                Popular Products
                            </h2>
                        </div>
                        <div id="spe_res">
                            <div class="products">
                                <ul class="featured_grid product_list grid row gridcount">
                                    <li class="item col-md-2">
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
                                    <li class="item col-md-2">
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
                                    <li class="item col-md-2">
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
                                    <li class="item col-md-2">
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
                                    <li class="item col-md-2">
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
                                    <li class="item col-md-2">
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
                                    <li class="item col-md-2">
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
                                    <li class="item col-md-2">
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
                                <a class="all-product-link pull-xs-left pull-md-right" href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=2&amp;controller=category&amp;id_lang=1">
                                    All products <i class="fa fa-chevron-right" aria-hidden="true" style="font-size: 13px;"></i>
                                </a>
                            </div>
                        </div>
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
