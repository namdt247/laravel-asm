<?php
/**
 * Created by PhpStorm.
 * User: namdt
 * Date: 8/3/20
 */
?>

@extends('frontend.layout_master')
@section('link-header')
    <link rel="stylesheet" href="{{asset('Admin/plugins/fancybox/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/plugins/swiper/swiper.min.css')}}">
@stop
@section('main-content')
    <section id="wrapper">
        <div class="topdiv">
            <div id="carouselExampleIndicators" class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="d-block w-100" src="https://prestashop.templatemela.com/PRSADD11/PRS273/modules/tm_imageslider/views/img/sample-1.jpg" alt="First slide" />
                    </div>
                    <div class="swiper-slide">
                        <img class="d-block w-100" src="https://prestashop.templatemela.com/PRSADD11/PRS273/modules/tm_imageslider/views/img/sample-2.jpg" alt="Second slide" />
                    </div>
                </div>
                <a class="carousel-control-prev" style="font-size: 30px;color: #000;z-index: 1;"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                <a class="carousel-control-next" style="font-size: 30px;color: #000;z-index: 1;"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="container">
            <div id="columns_inner">
                <div id="content-wrapper">
                    <section id="main">
                        {{-- section 1 --}}
                        <div class="topbelow">
                            <div id="tmcms1block" class="container">
                                <div class="tmcms1block">
                                    <div class="first-content main-content">
                                        <div class="cms_content">
                                            <div class="cms_img">
                                                <a href="#">
                                                    <img src="{{asset('img/Sub-banner-1.jpg')}}" alt="Sub-banner-1" />
                                                </a>
                                            </div>
                                            <div class="cms-block">
                                                <div class="cms_offer">New Lighting</div>
                                                <div class="cms_offer1">Now in all Color Varient Available..</div>
                                                <div class="subbutton">
                                                    <a href="#" class="btn ">shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="second-content main-content">
                                        <div class="cms_content">
                                            <div class="cms_img">
                                                <a href="#">
                                                    <img src="{{asset('img/Sub-banner-2.jpg')}}" alt="Sub-banner-1" />
                                                </a>
                                            </div>
                                            <div class="cms-block">
                                                <div class="cms_offer">New Lighting</div>
                                                <div class="cms_offer1">Now in all Color Varient Available..</div>
                                                <div class="subbutton">
                                                    <a href="#" class="btn ">shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <section id="content" class="page-home">
                            {{-- section 2 --}}
                            <div class="tm-hometabcontent container">
                                <div class="tabs">
                                    <ul id="home-page-tabs" class="nav nav-tabs clearfix">
                                        <h2 class="products-section-title text-uppercase" style="border: none;">Trending Product</h2>
                                        <li class="nav-item">
                                            <a data-toggle="tab" href="#featureProduct" class="nav-link active" data-text="">
                                                <span>Feature</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a data-toggle="tab" href="#newProduct" class="nav-link" data-text="">
                                                <span>New</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a data-toggle="tab" href="#bestseller" class="nav-link" data-text="">
                                                <span>Bestseller</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tm_productinner tab-pane active" id="featureProduct">
                                            <section class="featured-products clearfix">
                                                <div id="spe_res">
                                                    <div class="products">
                                                        <ul id="feature-carousel" class="tm-carousel product_list owl-carousel owl-theme swiper-container">
                                                            <div class="swiper-wrapper">
                                                                <div class="owl-item swiper-slide">
                                                                    <li class="item">
                                                                        <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope="" itemtype="http://schema.org/Product">
                                                                            <div class="thumbnail-container">
                                                                                <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=1&amp;id_product_attribute=1&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white" class="thumbnail product-thumbnail">
                                                                                    <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/7/27-home_default.jpg" alt="Curabitur Dolor NuncPellentesque augue" data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/7/27-large_default.jpg">
                                                                                    <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/2/32-home_default.jpg" data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/2/32-large_default.jpg" alt="">
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
                                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=1&amp;id_product_attribute=1&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white">Curabitur Dolor NuncPellentesque augue</a>
                                                                                    </span>
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="sr-only">Price</span>
                                                                                    <span itemprop="price" class="price">$19.12</span>
                                                                                    <span class="sr-only">Regular price</span>
                                                                                    <span class="regular-price">$23.90</span>
                                                                                </div>
                                                                                <div class="product-actions-main">
                                                                                    <form action="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                        <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c">
                                                                                        <input type="hidden" name="id_product" value="1" class="product_page_product_id">
                                                                                        <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                        <button class="btn  add-to-cart" data-button-action="add-to-cart" type="submit"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Add to cart</button>
                                                                                    </form>
                                                                                    <a class="quick-view" href="#" data-link-action="quickview"></a>
                                                                                </div>
                                                                                <div class="highlighted-informations hidden-sm-down">
                                                                                    <div class="variant-links">
                                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=1&amp;id_product_attribute=1&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white" class="color" title="White" style="background-color: #ffffff">
                                                                                            <span class="sr-only">White</span>
                                                                                        </a>
                                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=1&amp;id_product_attribute=2&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black" class="color" title="Black" style="background-color: #434A54">
                                                                                            <span class="sr-only">Black</span>
                                                                                        </a>
                                                                                        <span class="js-count count"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </li>
                                                                </div>
                                                                <div class="owl-item swiper-slide">
                                                                    <li class="item">
                                                                        <article class="product-miniature js-product-miniature" data-id-product="2" data-id-product-attribute="48" itemscope="" itemtype="http://schema.org/Product">
                                                                            <div class="thumbnail-container">
                                                                                <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=2&amp;id_product_attribute=48&amp;rewrite=brown-bear-printed-sweater&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white/20-dimension-60x90cm" class="thumbnail product-thumbnail">
                                                                                    <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/8/28-home_default.jpg" alt="Suspendisse Massa Nullaqm vulputate dictum" data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/8/28-large_default.jpg">
                                                                                    <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/7/37-home_default.jpg" data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/7/37-large_default.jpg" alt="">
                                                                                </a>
                                                                                <ul class="product-flags">
                                                                                    <li class="online-only">Online only</li>
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
                                                                                        <div class="star"><i class="fa fa-star"></i></div>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="h3 product-title" itemprop="name">
                                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=2&amp;id_product_attribute=48&amp;rewrite=brown-bear-printed-sweater&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white/20-dimension-60x90cm">Suspendisse Massa Nullaqm vulputate dictum</a>
                                                                                    </span>
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="sr-only">Price</span>
                                                                                    <span itemprop="price" class="price">$28.72</span>
                                                                                    <span class="sr-only">Regular price</span>
                                                                                    <span class="regular-price">$35.90</span>
                                                                                </div>
                                                                                <div class="product-actions-main">
                                                                                    <form action="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                        <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c">
                                                                                        <input type="hidden" name="id_product" value="2" class="product_page_product_id">
                                                                                        <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                        <button class="btn  add-to-cart" data-button-action="add-to-cart" type="submit"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Add to cart </button>
                                                                                    </form>
                                                                                    <a class="quick-view" href="#" data-link-action="quickview"></a>
                                                                                </div>
                                                                                <div class="highlighted-informations hidden-sm-down">
                                                                                    <div class="variant-links">
                                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=2&amp;id_product_attribute=43&amp;rewrite=brown-bear-printed-sweater&amp;controller=product&amp;id_lang=1#/2-size-m/6-color-taupe/20-dimension-60x90cm" class="color" title="Taupe" style="background-color: #CFC4A6">
                                                                                            <span class="sr-only">Taupe</span>
                                                                                        </a>
                                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=2&amp;id_product_attribute=40&amp;rewrite=brown-bear-printed-sweater&amp;controller=product&amp;id_lang=1#/2-size-m/8-color-white/20-dimension-60x90cm" class="color" title="White" style="background-color: #ffffff">
                                                                                            <span class="sr-only">White</span>
                                                                                        </a>
                                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=2&amp;id_product_attribute=42&amp;rewrite=brown-bear-printed-sweater&amp;controller=product&amp;id_lang=1#/2-size-m/9-color-off_white/20-dimension-60x90cm" class="color" title="Off White" style="background-color: #faebd7">
                                                                                            <span class="sr-only">Off White</span>
                                                                                        </a>
                                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=2&amp;id_product_attribute=41&amp;rewrite=brown-bear-printed-sweater&amp;controller=product&amp;id_lang=1#/2-size-m/10-color-red/20-dimension-60x90cm" class="color" title="Red" style="background-color: #E84C3D">
                                                                                            <span class="sr-only">Red</span>
                                                                                        </a>
                                                                                        <span class="js-count count"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </li>
                                                                </div>
                                                                <div class="owl-item swiper-slide">
                                                                    <li class="item">
                                                                        <article class="product-miniature js-product-miniature" data-id-product="3" data-id-product-attribute="72" itemscope="" itemtype="http://schema.org/Product">
                                                                            <div class="thumbnail-container">
                                                                                <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=3&amp;id_product_attribute=72&amp;rewrite=the-best-is-yet-to-come-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/16-color-yellow" class="thumbnail product-thumbnail">
                                                                                    <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/9/29-home_default.jpg" alt="Justo Neque Commodo Pellentesque augue justo" data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/9/29-large_default.jpg">
                                                                                    <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/4/2/42-home_default.jpg" data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/4/2/42-large_default.jpg" alt="">
                                                                                </a>
                                                                                <ul class="product-flags">
                                                                                    <li class="online-only">Online only</li>
                                                                                    <li class="new">New</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="product-description">
                                                                                <div class="comments_note">
                                                                                    <div class="star_content clearfix">
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star"><i class="fa fa-star"></i></div>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="h3 product-title" itemprop="name">
                                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=3&amp;id_product_attribute=72&amp;rewrite=the-best-is-yet-to-come-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/16-color-yellow">Justo Neque Commodo Pellentesque augue justo</a>
                                                                                    </span>
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="sr-only">Price</span>
                                                                                    <span itemprop="price" class="price">$29.00</span>
                                                                                </div>
                                                                                <div class="product-actions-main">
                                                                                    <form action="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                        <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c">
                                                                                        <input type="hidden" name="id_product" value="3" class="product_page_product_id">
                                                                                        <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                        <button class="btn  add-to-cart" data-button-action="add-to-cart" type="submit"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Add to cart </button>
                                                                                    </form>
                                                                                    <a class="quick-view" href="#" data-link-action="quickview"></a>
                                                                                </div>
                                                                                <div class="highlighted-informations hidden-sm-down">
                                                                                    <div class="variant-links">
                                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=3&amp;id_product_attribute=67&amp;rewrite=the-best-is-yet-to-come-framed-poster&amp;controller=product&amp;id_lang=1#/2-size-m/13-color-orange" class="color" title="Orange" style="background-color: #F39C11">
                                                                                            <span class="sr-only">Orange</span>
                                                                                        </a>
                                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=3&amp;id_product_attribute=66&amp;rewrite=the-best-is-yet-to-come-framed-poster&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue" class="color" title="Blue" style="background-color: #5D9CEC">
                                                                                            <span class="sr-only">Blue</span>
                                                                                        </a>
                                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=3&amp;id_product_attribute=65&amp;rewrite=the-best-is-yet-to-come-framed-poster&amp;controller=product&amp;id_lang=1#/2-size-m/15-color-green" class="color" title="Green" style="background-color: #A0D468">
                                                                                            <span class="sr-only">Green</span>
                                                                                        </a>
                                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=3&amp;id_product_attribute=64&amp;rewrite=the-best-is-yet-to-come-framed-poster&amp;controller=product&amp;id_lang=1#/2-size-m/16-color-yellow" class="color" title="Yellow" style="background-color: #F1C40F">
                                                                                            <span class="sr-only">Yellow</span>
                                                                                        </a>
                                                                                        <span class="js-count count"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </li>
                                                                </div>
                                                                <div class="owl-item swiper-slide">
                                                                    <li class="item">
                                                                        <article class="product-miniature js-product-miniature" data-id-product="4" data-id-product-attribute="76" itemscope="" itemtype="http://schema.org/Product">
                                                                            <div class="thumbnail-container">
                                                                                <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=4&amp;id_product_attribute=76&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige" class="thumbnail product-thumbnail">
                                                                                    <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/0/30-home_default.jpg" alt="Suspendisse PotentiSed atant Mauris eleifend" data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/0/30-large_default.jpg">
                                                                                    <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/4/7/47-home_default.jpg" data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/4/7/47-large_default.jpg" alt="">
                                                                                </a>
                                                                                <ul class="product-flags">
                                                                                    <li class="new">New</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="product-description">
                                                                                <div class="comments_note">
                                                                                    <div class="star_content clearfix">
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star"><i class="fa fa-star"></i></div>
                                                                                        <div class="star"><i class="fa fa-star"></i></div>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="h3 product-title" itemprop="name">
                                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=4&amp;id_product_attribute=76&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige">Suspendisse PotentiSed atant Mauris eleifend</a>
                                                                                    </span>
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="sr-only">Price</span>
                                                                                    <span itemprop="price" class="price">$29.00</span>
                                                                                </div>
                                                                                <div class="product-actions-main">
                                                                                    <form action="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                        <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c">
                                                                                        <input type="hidden" name="id_product" value="1" class="product_page_product_id">
                                                                                        <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                        <button class="btn  add-to-cart" data-button-action="add-to-cart" type="submit"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Add to cart</button>
                                                                                    </form>
                                                                                    <a class="quick-view" href="#" data-link-action="quickview"></a>
                                                                                </div>
                                                                                <div class="highlighted-informations hidden-sm-down">
                                                                                    <div class="variant-links">
                                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=1&amp;id_product_attribute=1&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white" class="color" title="White" style="background-color: #ffffff">
                                                                                            <span class="sr-only">White</span>
                                                                                        </a>
                                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=1&amp;id_product_attribute=2&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black" class="color" title="Black" style="background-color: #434A54">
                                                                                            <span class="sr-only">Black</span>
                                                                                        </a>
                                                                                        <span class="js-count count"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </li>
                                                                </div>
                                                                <div class="owl-item swiper-slide">
                                                                    <li class="item">
                                                                        <article class="product-miniature js-product-miniature" data-id-product="5" data-id-product-attribute="87" itemscope="" itemtype="http://schema.org/Product">
                                                                            <div class="thumbnail-container">
                                                                                <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=5&amp;id_product_attribute=87&amp;rewrite=today-is-a-good-day-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige/20-dimension-60x90cm" class="thumbnail product-thumbnail">
                                                                                    <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/1/31-home_default.jpg" alt="Tellus Eu Volutpat VariusCurabitur sit amet era" data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/1/31-large_default.jpg">
                                                                                    <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/5/2/52-home_default.jpg" data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/5/2/52-large_default.jpg" alt="">
                                                                                </a>
                                                                                <ul class="product-flags">
                                                                                    <li class="new">New</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="product-description">
                                                                                <div class="comments_note">
                                                                                    <div class="star_content clearfix">
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star"><i class="fa fa-star"></i></div>
                                                                                        <div class="star"><i class="fa fa-star"></i></div>
                                                                                        <div class="star"><i class="fa fa-star"></i></div>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="h3 product-title" itemprop="name"><a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=5&amp;id_product_attribute=87&amp;rewrite=today-is-a-good-day-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige/20-dimension-60x90cm">Tellus Eu Volutpat VariusCurabitur sit amet era</a></span>
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="sr-only">Price</span>
                                                                                    <span itemprop="price" class="price">$29.00</span>
                                                                                </div>
                                                                                <div class="product-actions-main">
                                                                                    <form action="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                        <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c">
                                                                                        <input type="hidden" name="id_product" value="1" class="product_page_product_id">
                                                                                        <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                        <button class="btn  add-to-cart" data-button-action="add-to-cart" type="submit"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Add to cart</button>
                                                                                    </form>
                                                                                    <a class="quick-view" href="#" data-link-action="quickview"></a>
                                                                                </div>
                                                                                <div class="highlighted-informations hidden-sm-down">
                                                                                    <div class="variant-links">
                                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=1&amp;id_product_attribute=1&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white" class="color" title="White" style="background-color: #ffffff">
                                                                                            <span class="sr-only">White</span>
                                                                                        </a>
                                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=1&amp;id_product_attribute=2&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black" class="color" title="Black" style="background-color: #434A54">
                                                                                            <span class="sr-only">Black</span>
                                                                                        </a>
                                                                                        <span class="js-count count"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </li>
                                                                </div>
                                                                <div class="owl-item swiper-slide">
                                                                    <li class="item">
                                                                        <article class="product-miniature js-product-miniature" data-id-product="5" data-id-product-attribute="87" itemscope="" itemtype="http://schema.org/Product">
                                                                            <div class="thumbnail-container">
                                                                                <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=5&amp;id_product_attribute=87&amp;rewrite=today-is-a-good-day-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige/20-dimension-60x90cm" class="thumbnail product-thumbnail">
                                                                                    <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/1/31-home_default.jpg" alt="Tellus Eu Volutpat VariusCurabitur sit amet era" data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/1/31-large_default.jpg">
                                                                                    <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/5/2/52-home_default.jpg" data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/5/2/52-large_default.jpg" alt="">
                                                                                </a>
                                                                                <ul class="product-flags">
                                                                                    <li class="new">New</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="product-description">
                                                                                <div class="comments_note">
                                                                                    <div class="star_content clearfix">
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star"><i class="fa fa-star"></i></div>
                                                                                        <div class="star"><i class="fa fa-star"></i></div>
                                                                                        <div class="star"><i class="fa fa-star"></i></div>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="h3 product-title" itemprop="name"><a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=5&amp;id_product_attribute=87&amp;rewrite=today-is-a-good-day-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige/20-dimension-60x90cm">Tellus Eu Volutpat VariusCurabitur sit amet era</a></span>
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="sr-only">Price</span>
                                                                                    <span itemprop="price" class="price">$29.00</span>
                                                                                </div>
                                                                                <div class="product-actions-main">
                                                                                    <form action="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                        <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c">
                                                                                        <input type="hidden" name="id_product" value="1" class="product_page_product_id">
                                                                                        <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                        <button class="btn  add-to-cart" data-button-action="add-to-cart" type="submit"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Add to cart</button>
                                                                                    </form>
                                                                                    <a class="quick-view" href="#" data-link-action="quickview"></a>
                                                                                </div>
                                                                                <div class="highlighted-informations hidden-sm-down">
                                                                                    <div class="variant-links">
                                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=1&amp;id_product_attribute=1&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white" class="color" title="White" style="background-color: #ffffff">
                                                                                            <span class="sr-only">White</span>
                                                                                        </a>
                                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=1&amp;id_product_attribute=2&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black" class="color" title="Black" style="background-color: #434A54">
                                                                                            <span class="sr-only">Black</span>
                                                                                        </a>
                                                                                        <span class="js-count count"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </li>
                                                                </div>
                                                                <div class="owl-item swiper-slide">
                                                                    <li class="item">
                                                                        <article class="product-miniature js-product-miniature" data-id-product="5" data-id-product-attribute="87" itemscope="" itemtype="http://schema.org/Product">
                                                                            <div class="thumbnail-container">
                                                                                <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=5&amp;id_product_attribute=87&amp;rewrite=today-is-a-good-day-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige/20-dimension-60x90cm" class="thumbnail product-thumbnail">
                                                                                    <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/1/31-home_default.jpg" alt="Tellus Eu Volutpat VariusCurabitur sit amet era" data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/1/31-large_default.jpg">
                                                                                    <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/5/2/52-home_default.jpg" data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/5/2/52-large_default.jpg" alt="">
                                                                                </a>
                                                                                <ul class="product-flags">
                                                                                    <li class="new">New</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="product-description">
                                                                                <div class="comments_note">
                                                                                    <div class="star_content clearfix">
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star"><i class="fa fa-star"></i></div>
                                                                                        <div class="star"><i class="fa fa-star"></i></div>
                                                                                        <div class="star"><i class="fa fa-star"></i></div>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="h3 product-title" itemprop="name"><a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=5&amp;id_product_attribute=87&amp;rewrite=today-is-a-good-day-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige/20-dimension-60x90cm">Tellus Eu Volutpat VariusCurabitur sit amet era</a></span>
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="sr-only">Price</span>
                                                                                    <span itemprop="price" class="price">$29.00</span>
                                                                                </div>
                                                                                <div class="product-actions-main">
                                                                                    <form action="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                        <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c">
                                                                                        <input type="hidden" name="id_product" value="1" class="product_page_product_id">
                                                                                        <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                        <button class="btn  add-to-cart" data-button-action="add-to-cart" type="submit"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Add to cart</button>
                                                                                    </form>
                                                                                    <a class="quick-view" href="#" data-link-action="quickview"></a>
                                                                                </div>
                                                                                <div class="highlighted-informations hidden-sm-down">
                                                                                    <div class="variant-links">
                                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=1&amp;id_product_attribute=1&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white" class="color" title="White" style="background-color: #ffffff">
                                                                                            <span class="sr-only">White</span>
                                                                                        </a>
                                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=1&amp;id_product_attribute=2&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black" class="color" title="Black" style="background-color: #434A54">
                                                                                            <span class="sr-only">Black</span>
                                                                                        </a>
                                                                                        <span class="js-count count"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </li>
                                                                </div>
                                                            </div>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="customNavigation">
                                                    <a class="btn prev brand_prev carousel-control-prev">&nbsp;<i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                                                    <a class="btn next brand_next carousel-control-next">&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- section 3 --}}
                            <div id="tmcms2_block" class="container">
                                <div class="tmcms2">
                                    <div class="main-content">
                                        <div class="cms_content">
                                            <div class="cms_img">
                                                <a href="#">
                                                    <img alt="Offer banner" src="{{asset('img/Offer-banner.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="cms-block">
                                                <div class="cms_offer">Home Decor Collection</div>
                                                <div class="cms_offer2">Now in all Color Varient Available Grab This Offer Now...</div>
                                                <div class="subbutton">
                                                    <a class="btn " href="#">shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- section 4 --}}
                            <div class="container">
                                <div class="Bannercombo1">
                                    <div class="tmcategorylist">
                                        <div class="tmcategory-container container hb-animate-element left-to-right">
                                            <div class="row" id="product_department">
                                                <h2 class="h1 products-section-title">Shop by department</h2>
                                                <div class="menu-title">choose what you looking for</div>
                                                <div class="customNavigation">
                                                    <a class="carousel-control-prev">&nbsp;<i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                                                    <a class="carousel-control-next">&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                                </div>

                                                <ul id="tmcategorylist-carousel" class="tm-carousel product_list owl-carousel owl-theme swiper-container">
                                                    <div class="swiper-wrapper">
                                                        <div class="owl-item swiper-slide">
                                                            <li>
                                                                <div class="categoryblock0 categoryblock item">
                                                                    <div class="block_content">
                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=3&amp;controller=category&amp;id_lang=1">
                                                                            <div class="categoryimage_bg">
                                                                                <div class="categoryimage">
                                                                                    <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/modules/tm_categorylist/views/img/3-tm_categorylist.jpg" alt="" class="img-responsive" />
                                                                                </div>
                                                                            </div>
                                                                        </a>

                                                                        <div class="categorylist">
                                                                            <div class="cate-heading">
                                                                                <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=3&amp;controller=category&amp;id_lang=1">furniture </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </div>
                                                        <div class="owl-item swiper-slide">
                                                            <li>
                                                                <div class="categoryblock1 categoryblock item">
                                                                    <div class="block_content">
                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=6&amp;controller=category&amp;id_lang=1">
                                                                            <div class="categoryimage_bg">
                                                                                <div class="categoryimage">
                                                                                    <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/modules/tm_categorylist/views/img/6-tm_categorylist.jpg" alt="" class="img-responsive" />
                                                                                </div>
                                                                            </div>
                                                                        </a>

                                                                        <div class="categorylist">
                                                                            <div class="cate-heading">
                                                                                <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=6&amp;controller=category&amp;id_lang=1">Accessories</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </div>
                                                        <div class="owl-item swiper-slide">
                                                            <li>
                                                                <div class="categoryblock2 categoryblock item">
                                                                    <div class="block_content">
                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=9&amp;controller=category&amp;id_lang=1">
                                                                            <div class="categoryimage_bg">
                                                                                <div class="categoryimage">
                                                                                    <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/modules/tm_categorylist/views/img/9-tm_categorylist.jpg" alt="" class="img-responsive" />
                                                                                </div>
                                                                            </div>
                                                                        </a>

                                                                        <div class="categorylist">
                                                                            <div class="cate-heading">
                                                                                <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=9&amp;controller=category&amp;id_lang=1">Sports Shoes</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </div>
                                                        <div class="owl-item swiper-slide">
                                                            <li>
                                                                <div class="categoryblock3 categoryblock item">
                                                                    <div class="block_content">
                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=7&amp;controller=category&amp;id_lang=1">
                                                                            <div class="categoryimage_bg">
                                                                                <div class="categoryimage">
                                                                                    <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/modules/tm_categorylist/views/img/7-tm_categorylist.jpg" alt="" class="img-responsive" />
                                                                                </div>
                                                                            </div>
                                                                        </a>

                                                                        <div class="categorylist">
                                                                            <div class="cate-heading">
                                                                                <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=7&amp;controller=category&amp;id_lang=1">Eyewear</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </div>
                                                        <div class="owl-item swiper-slide">
                                                            <li>
                                                                <div class="categoryblock4 categoryblock item">
                                                                    <div class="block_content">
                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=8&amp;controller=category&amp;id_lang=1">
                                                                            <div class="categoryimage_bg">
                                                                                <div class="categoryimage">
                                                                                    <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/modules/tm_categorylist/views/img/8-tm_categorylist.jpg" alt="" class="img-responsive" />
                                                                                </div>
                                                                            </div>
                                                                        </a>

                                                                        <div class="categorylist">
                                                                            <div class="cate-heading">
                                                                                <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=8&amp;controller=category&amp;id_lang=1">Footwear</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </div>
                                                        <div class="owl-item swiper-slide">
                                                            <li>
                                                                <div class="categoryblock5 categoryblock item">
                                                                    <div class="block_content">
                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=20&amp;controller=category&amp;id_lang=1">
                                                                            <div class="categoryimage_bg">
                                                                                <div class="categoryimage">
                                                                                    <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/modules/tm_categorylist/views/img/20-tm_categorylist.jpg" alt="" class="img-responsive" />
                                                                                </div>
                                                                            </div>
                                                                        </a>

                                                                        <div class="categorylist">
                                                                            <div class="cate-heading">
                                                                                <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=20&amp;controller=category&amp;id_lang=1">Electronics</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </div>
                                                        <div class="owl-item swiper-slide">
                                                            <li>
                                                                <div class="categoryblock6 categoryblock item">
                                                                    <div class="block_content">
                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=21&amp;controller=category&amp;id_lang=1">
                                                                            <div class="categoryimage_bg">
                                                                                <div class="categoryimage">
                                                                                    <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/modules/tm_categorylist/views/img/21-tm_categorylist.jpg" alt="" class="img-responsive" />
                                                                                </div>
                                                                            </div>
                                                                        </a>

                                                                        <div class="categorylist">
                                                                            <div class="cate-heading">
                                                                                <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=21&amp;controller=category&amp;id_lang=1">Smartphones</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </div>
                                                        <div class="owl-item swiper-slide">
                                                            <li>
                                                                <div class="categoryblock7 categoryblock item">
                                                                    <div class="block_content">
                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=22&amp;controller=category&amp;id_lang=1">
                                                                            <div class="categoryimage_bg">
                                                                                <div class="categoryimage">
                                                                                    <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/modules/tm_categorylist/views/img/22-tm_categorylist.jpg" alt="" class="img-responsive" />
                                                                                </div>
                                                                            </div>
                                                                        </a>

                                                                        <div class="categorylist">
                                                                            <div class="cate-heading">
                                                                                <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=22&amp;controller=category&amp;id_lang=1">Televison</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </div>
                                                        <div class="owl-item swiper-slide">
                                                            <li>
                                                                <div class="categoryblock8 categoryblock item">
                                                                    <div class="block_content">
                                                                        <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=23&amp;controller=category&amp;id_lang=1">
                                                                            <div class="categoryimage_bg">
                                                                                <div class="categoryimage">
                                                                                    <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/modules/tm_categorylist/views/img/23-tm_categorylist.jpg" alt="" class="img-responsive" />
                                                                                </div>
                                                                            </div>
                                                                        </a>

                                                                        <div class="categorylist">
                                                                            <div class="cate-heading">
                                                                                <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=23&amp;controller=category&amp;id_lang=1">digital camera</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--  section 5 --}}
                            <div id="tmcmsblock">
                                <div id="tmcmsbanner">
                                    <div class="first-content main-content">
                                        <div class="cms_content">
                                            <div class="cms_img">
                                                <a href="">
                                                    <img src="{{asset('img/Sub-banner-04.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="cms-block">
                                                <div class="cms_offer">Latest Rest Chair</div>
                                                <div class="cms_offer1">Now in all Color Varient Available..</div>
                                                <div class="subbutton">
                                                    <a class="btn " href="#">shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="second-content main-content">
                                        <div class="cms_content">
                                            <div class="cms_img">
                                                <a href="#"> <img alt="Cms-Banner2.jpg" src="{{asset('img/Sub-banner-05.jpg')}}" /></a>
                                            </div>
                                            <div class="cms-block">
                                                <div class="cms_offer">New Drover Table</div>
                                                <div class="cms_offer1">Now in all Color Varient Available..</div>
                                                <div class="subbutton"><a class="btn " href="#">shop now</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--  section 6 --}}
                            <div id="tmcategorytabs" class="tabs products_block container clearfix">
                                <div class="tab-main-title">
                                    <h2 class="products-section-title">new arrival item</h2>
                                    <ul id="tmcategory-tabs" class="nav nav-tabs clearfix tmcategory-tabs-carousel mobiletab d-block">
                                        <li class="nav-item">
                                            <a href="#tab_3" data-toggle="tab" class="nav-link active">furniture </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab_6" data-toggle="tab" class="nav-link">Accessories</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab_9" data-toggle="tab" class="nav-link">Sports Shoes</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="hb-animate-element left-to-right" id="list_product2">
                                    <div id="spe_res">
                                        <div class="tab-content">
                                            <div id="tab_3" class="tab-pane active">
                                                <div class="products">
                                                    <ul id="tmcategory3-carousel" class="tm-carousel product_list owl-carousel owl-theme swiper-container">
                                                        <div class="swiper-wrapper">
                                                            <div class="owl-item swiper-slide">
                                                                <li class="item">
                                                                    <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope="" itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=1&amp;id_product_attribute=1&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white" class="thumbnail product-thumbnail">
                                                                                <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/7/27-home_default.jpg" alt="Curabitur Dolor NuncPellentesque augue" data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/7/27-large_default.jpg"/>
                                                                                <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/2/32-home_default.jpg" data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/2/32-large_default.jpg" alt="" />

                                                                                <!-- end modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
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
                                                                            <!-- begin module:productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                            <!-- begin /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                            <!-- end module:productcomments/views/templates/front/productcomments_reviews.tpl -->

                                                                            <span class="h3 product-title" itemprop="name">
                                                <a
                                                        href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=1&amp;id_product_attribute=1&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white"
                                                >
                                                    Curabitur Dolor NuncPellentesque augue
                                                </a>
                                            </span>

                                                                            <div class="product-price-and-shipping">
                                                                                <span class="sr-only">Price</span>
                                                                                <span itemprop="price" class="price">$19.12</span>

                                                                                <span class="sr-only">Regular price</span>
                                                                                <span class="regular-price">$23.90</span>
                                                                                <!--                                 <span class="discount-percentage discount-product">-20%</span>
                                        -->
                                                                            </div>

                                                                            <div class="product-actions-main">
                                                                                <form action="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                    <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />
                                                                                    <input type="hidden" name="id_product" value="1" class="product_page_product_id" />
                                                                                    <input type="hidden" name="id_customization" value="0" class="product_customization_id" />
                                                                                    <button class="btn  add-to-cart" data-button-action="add-to-cart" type="submit">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Add to cart
                                                                                    </button>
                                                                                </form>

                                                                                <a class="quick-view" href="#" data-link-action="quickview">
                                                                                    <!--   <i class="material-icons search"></i> -->
                                                                                    <!-- Quick view -->
                                                                                </a>
                                                                            </div>

                                                                            <div class="highlighted-informations hidden-sm-down">
                                                                                <div class="variant-links">
                                                                                    <a
                                                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=1&amp;id_product_attribute=1&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white"
                                                                                            class="color"
                                                                                            title="White"
                                                                                            style="background-color: #ffffff;"
                                                                                    >
                                                                                        <span class="sr-only">White</span>
                                                                                    </a>
                                                                                    <a
                                                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=1&amp;id_product_attribute=2&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
                                                                                            class="color"
                                                                                            title="Black"
                                                                                            style="background-color: #434a54;"
                                                                                    >
                                                                                        <span class="sr-only">Black</span>
                                                                                    </a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </article>
                                                                </li>
                                                            </div>
                                                            <div class="owl-item swiper-slide">
                                                                <li class="item">
                                                                    <article class="product-miniature js-product-miniature" data-id-product="2" data-id-product-attribute="48" itemscope="" itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <a
                                                                                    href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=2&amp;id_product_attribute=48&amp;rewrite=brown-bear-printed-sweater&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white/20-dimension-60x90cm"
                                                                                    class="thumbnail product-thumbnail"
                                                                            >
                                                                                <img
                                                                                        src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/8/28-home_default.jpg"
                                                                                        alt="Suspendisse Massa Nullaqm vulputate dictum"
                                                                                        data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/8/28-large_default.jpg"
                                                                                />

                                                                                <!-- begin modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                <img
                                                                                        class="replace-2x img_1 img-responsive"
                                                                                        src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/7/37-home_default.jpg"
                                                                                        data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/7/37-large_default.jpg"
                                                                                        alt=""
                                                                                />

                                                                                <!-- end modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                            </a>

                                                                            <ul class="product-flags">
                                                                                <li class="online-only">Online only</li>
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="new">New</li>

                                                                                <li class="discount_type_flag">
                                                                                    <span class="discount-percentage">-20%</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>

                                                                        <div class="product-description">
                                                                            <!-- begin module:productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                            <!-- begin /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    <div class="star"><i class="fa fa-star"></i></div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                            <!-- end module:productcomments/views/templates/front/productcomments_reviews.tpl -->

                                                                            <span class="h3 product-title" itemprop="name">
                                                <a
                                                        href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=2&amp;id_product_attribute=48&amp;rewrite=brown-bear-printed-sweater&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white/20-dimension-60x90cm"
                                                >
                                                    Suspendisse Massa Nullaqm vulputate dictum
                                                </a>
                                            </span>

                                                                            <div class="product-price-and-shipping">
                                                                                <span class="sr-only">Price</span>
                                                                                <span itemprop="price" class="price">$28.72</span>

                                                                                <span class="sr-only">Regular price</span>
                                                                                <span class="regular-price">$35.90</span>
                                                                                <!--                                 <span class="discount-percentage discount-product">-20%</span>
                                        -->
                                                                            </div>

                                                                            <div class="product-actions-main">
                                                                                <form action="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                    <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />
                                                                                    <input type="hidden" name="id_product" value="2" class="product_page_product_id" />
                                                                                    <input type="hidden" name="id_customization" value="0" class="product_customization_id" />
                                                                                    <button class="btn  add-to-cart" data-button-action="add-to-cart" type="submit">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Add to cart
                                                                                    </button>
                                                                                </form>

                                                                                <a class="quick-view" href="#" data-link-action="quickview">
                                                                                    <!--   <i class="material-icons search"></i> -->
                                                                                    <!-- Quick view -->
                                                                                </a>
                                                                            </div>

                                                                            <div class="highlighted-informations hidden-sm-down">
                                                                                <div class="variant-links">
                                                                                    <a
                                                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=2&amp;id_product_attribute=43&amp;rewrite=brown-bear-printed-sweater&amp;controller=product&amp;id_lang=1#/2-size-m/6-color-taupe/20-dimension-60x90cm"
                                                                                            class="color"
                                                                                            title="Taupe"
                                                                                            style="background-color: #cfc4a6;"
                                                                                    >
                                                                                        <span class="sr-only">Taupe</span>
                                                                                    </a>
                                                                                    <a
                                                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=2&amp;id_product_attribute=40&amp;rewrite=brown-bear-printed-sweater&amp;controller=product&amp;id_lang=1#/2-size-m/8-color-white/20-dimension-60x90cm"
                                                                                            class="color"
                                                                                            title="White"
                                                                                            style="background-color: #ffffff;"
                                                                                    >
                                                                                        <span class="sr-only">White</span>
                                                                                    </a>
                                                                                    <a
                                                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=2&amp;id_product_attribute=42&amp;rewrite=brown-bear-printed-sweater&amp;controller=product&amp;id_lang=1#/2-size-m/9-color-off_white/20-dimension-60x90cm"
                                                                                            class="color"
                                                                                            title="Off White"
                                                                                            style="background-color: #faebd7;"
                                                                                    >
                                                                                        <span class="sr-only">Off White</span>
                                                                                    </a>
                                                                                    <a
                                                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=2&amp;id_product_attribute=41&amp;rewrite=brown-bear-printed-sweater&amp;controller=product&amp;id_lang=1#/2-size-m/10-color-red/20-dimension-60x90cm"
                                                                                            class="color"
                                                                                            title="Red"
                                                                                            style="background-color: #e84c3d;"
                                                                                    >
                                                                                        <span class="sr-only">Red</span>
                                                                                    </a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </article>
                                                                </li>
                                                            </div>
                                                            <div class="owl-item swiper-slide">
                                                                <li class="item">
                                                                    <article class="product-miniature js-product-miniature" data-id-product="10" data-id-product-attribute="157" itemscope="" itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <a
                                                                                    href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=10&amp;id_product_attribute=157&amp;rewrite=brown-bear-cushion&amp;controller=product&amp;id_lang=1#/2-size-m/6-color-taupe/19-dimension-40x60cm"
                                                                                    class="thumbnail product-thumbnail"
                                                                            >
                                                                                <img
                                                                                        src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/6/1/61-home_default.jpg"
                                                                                        alt="Nascetur ridiculus muscursus dictum risusrte"
                                                                                        data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/6/1/61-large_default.jpg"
                                                                                />

                                                                                <!-- begin modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                <img
                                                                                        class="replace-2x img_1 img-responsive"
                                                                                        src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/8/3/83-home_default.jpg"
                                                                                        data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/8/3/83-large_default.jpg"
                                                                                        alt=""
                                                                                />

                                                                                <!-- end modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                            </a>

                                                                            <ul class="product-flags">
                                                                                <li class="online-only">Online only</li>
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="new">New</li>

                                                                                <li class="discount_type_flag">
                                                                                    <span class="discount-percentage">-12%</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>

                                                                        <div class="product-description">
                                                                            <!-- begin module:productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                            <!-- begin /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                            <!-- end module:productcomments/views/templates/front/productcomments_reviews.tpl -->

                                                                            <span class="h3 product-title" itemprop="name">
                                                <a
                                                        href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=10&amp;id_product_attribute=157&amp;rewrite=brown-bear-cushion&amp;controller=product&amp;id_lang=1#/2-size-m/6-color-taupe/19-dimension-40x60cm"
                                                >
                                                    Nascetur ridiculus muscursus dictum risusrte
                                                </a>
                                            </span>

                                                                            <div class="product-price-and-shipping">
                                                                                <span class="sr-only">Price</span>
                                                                                <span itemprop="price" class="price">$56.19</span>

                                                                                <span class="sr-only">Regular price</span>
                                                                                <span class="regular-price">$63.85</span>
                                                                                <!--                                 <span class="discount-percentage discount-product">-12%</span>
                                        -->
                                                                            </div>

                                                                            <div class="product-actions-main">
                                                                                <form action="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                    <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />
                                                                                    <input type="hidden" name="id_product" value="10" class="product_page_product_id" />
                                                                                    <input type="hidden" name="id_customization" value="0" class="product_customization_id" />
                                                                                    <button class="btn  add-to-cart" data-button-action="add-to-cart" type="submit">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Add to cart
                                                                                    </button>
                                                                                </form>

                                                                                <a class="quick-view" href="#" data-link-action="quickview">
                                                                                    <!--   <i class="material-icons search"></i> -->
                                                                                    <!-- Quick view -->
                                                                                </a>
                                                                            </div>

                                                                            <div class="highlighted-informations hidden-sm-down">
                                                                                <div class="variant-links">
                                                                                    <a
                                                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=10&amp;id_product_attribute=157&amp;rewrite=brown-bear-cushion&amp;controller=product&amp;id_lang=1#/2-size-m/6-color-taupe/19-dimension-40x60cm"
                                                                                            class="color"
                                                                                            title="Taupe"
                                                                                            style="background-color: #cfc4a6;"
                                                                                    >
                                                                                        <span class="sr-only">Taupe</span>
                                                                                    </a>
                                                                                    <a
                                                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=10&amp;id_product_attribute=161&amp;rewrite=brown-bear-cushion&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue/19-dimension-40x60cm"
                                                                                            class="color"
                                                                                            title="Blue"
                                                                                            style="background-color: #5d9cec;"
                                                                                    >
                                                                                        <span class="sr-only">Blue</span>
                                                                                    </a>
                                                                                    <a
                                                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=10&amp;id_product_attribute=159&amp;rewrite=brown-bear-cushion&amp;controller=product&amp;id_lang=1#/2-size-m/15-color-green/19-dimension-40x60cm"
                                                                                            class="color"
                                                                                            title="Green"
                                                                                            style="background-color: #a0d468;"
                                                                                    >
                                                                                        <span class="sr-only">Green</span>
                                                                                    </a>
                                                                                    <a
                                                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=10&amp;id_product_attribute=163&amp;rewrite=brown-bear-cushion&amp;controller=product&amp;id_lang=1#/2-size-m/16-color-yellow/19-dimension-40x60cm"
                                                                                            class="color"
                                                                                            title="Yellow"
                                                                                            style="background-color: #f1c40f;"
                                                                                    >
                                                                                        <span class="sr-only">Yellow</span>
                                                                                    </a>
                                                                                    <a
                                                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=10&amp;id_product_attribute=165&amp;rewrite=brown-bear-cushion&amp;controller=product&amp;id_lang=1#/2-size-m/17-color-brown/19-dimension-40x60cm"
                                                                                            class="color"
                                                                                            title="Brown"
                                                                                            style="background-color: #964b00;"
                                                                                    >
                                                                                        <span class="sr-only">Brown</span>
                                                                                    </a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </article>
                                                                </li>
                                                            </div>
                                                            <div class="owl-item swiper-slide">
                                                                <li class="item">
                                                                    <article class="product-miniature js-product-miniature" data-id-product="3" data-id-product-attribute="72" itemscope="" itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <a
                                                                                    href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=3&amp;id_product_attribute=72&amp;rewrite=the-best-is-yet-to-come-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/16-color-yellow"
                                                                                    class="thumbnail product-thumbnail"
                                                                            >
                                                                                <img
                                                                                        src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/9/29-home_default.jpg"
                                                                                        alt="Justo Neque Commodo Pellentesque augue justo"
                                                                                        data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/9/29-large_default.jpg"
                                                                                />

                                                                                <!-- begin modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                <img
                                                                                        class="replace-2x img_1 img-responsive"
                                                                                        src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/4/2/42-home_default.jpg"
                                                                                        data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/4/2/42-large_default.jpg"
                                                                                        alt=""
                                                                                />

                                                                                <!-- end modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                            </a>

                                                                            <ul class="product-flags">
                                                                                <li class="online-only">Online only</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>

                                                                        <div class="product-description">
                                                                            <!-- begin module:productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                            <!-- begin /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    <div class="star"><i class="fa fa-star"></i></div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                            <!-- end module:productcomments/views/templates/front/productcomments_reviews.tpl -->

                                                                            <span class="h3 product-title" itemprop="name">
                                                <a
                                                        href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=3&amp;id_product_attribute=72&amp;rewrite=the-best-is-yet-to-come-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/16-color-yellow"
                                                >
                                                    Justo Neque Commodo Pellentesque augue justo
                                                </a>
                                            </span>

                                                                            <div class="product-price-and-shipping">
                                                                                <span class="sr-only">Price</span>
                                                                                <span itemprop="price" class="price">$29.00</span>
                                                                            </div>

                                                                            <div class="product-actions-main">
                                                                                <form action="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                    <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />
                                                                                    <input type="hidden" name="id_product" value="3" class="product_page_product_id" />
                                                                                    <input type="hidden" name="id_customization" value="0" class="product_customization_id" />
                                                                                    <button class="btn  add-to-cart" data-button-action="add-to-cart" type="submit">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Add to cart
                                                                                    </button>
                                                                                </form>

                                                                                <a class="quick-view" href="#" data-link-action="quickview">
                                                                                    <!--   <i class="material-icons search"></i> -->
                                                                                    <!-- Quick view -->
                                                                                </a>
                                                                            </div>

                                                                            <div class="highlighted-informations hidden-sm-down">
                                                                                <div class="variant-links">
                                                                                    <a
                                                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=3&amp;id_product_attribute=67&amp;rewrite=the-best-is-yet-to-come-framed-poster&amp;controller=product&amp;id_lang=1#/2-size-m/13-color-orange"
                                                                                            class="color"
                                                                                            title="Orange"
                                                                                            style="background-color: #f39c11;"
                                                                                    >
                                                                                        <span class="sr-only">Orange</span>
                                                                                    </a>
                                                                                    <a
                                                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=3&amp;id_product_attribute=66&amp;rewrite=the-best-is-yet-to-come-framed-poster&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue"
                                                                                            class="color"
                                                                                            title="Blue"
                                                                                            style="background-color: #5d9cec;"
                                                                                    >
                                                                                        <span class="sr-only">Blue</span>
                                                                                    </a>
                                                                                    <a
                                                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=3&amp;id_product_attribute=65&amp;rewrite=the-best-is-yet-to-come-framed-poster&amp;controller=product&amp;id_lang=1#/2-size-m/15-color-green"
                                                                                            class="color"
                                                                                            title="Green"
                                                                                            style="background-color: #a0d468;"
                                                                                    >
                                                                                        <span class="sr-only">Green</span>
                                                                                    </a>
                                                                                    <a
                                                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=3&amp;id_product_attribute=64&amp;rewrite=the-best-is-yet-to-come-framed-poster&amp;controller=product&amp;id_lang=1#/2-size-m/16-color-yellow"
                                                                                            class="color"
                                                                                            title="Yellow"
                                                                                            style="background-color: #f1c40f;"
                                                                                    >
                                                                                        <span class="sr-only">Yellow</span>
                                                                                    </a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </article>
                                                                </li>
                                                            </div>
                                                            <div class="owl-item swiper-slide">
                                                                <li class="item">
                                                                    <article class="product-miniature js-product-miniature" data-id-product="4" data-id-product-attribute="76" itemscope="" itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <a
                                                                                    href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=4&amp;id_product_attribute=76&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige"
                                                                                    class="thumbnail product-thumbnail"
                                                                            >
                                                                                <img
                                                                                        src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/0/30-home_default.jpg"
                                                                                        alt="Suspendisse PotentiSed atant Mauris eleifend"
                                                                                        data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/0/30-large_default.jpg"
                                                                                />

                                                                                <!-- begin modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                <img
                                                                                        class="replace-2x img_1 img-responsive"
                                                                                        src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/4/7/47-home_default.jpg"
                                                                                        data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/4/7/47-large_default.jpg"
                                                                                        alt=""
                                                                                />

                                                                                <!-- end modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                            </a>

                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>

                                                                        <div class="product-description">
                                                                            <!-- begin module:productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                            <!-- begin /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    <div class="star"><i class="fa fa-star"></i></div>
                                                                                    <div class="star"><i class="fa fa-star"></i></div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                            <!-- end module:productcomments/views/templates/front/productcomments_reviews.tpl -->

                                                                            <span class="h3 product-title" itemprop="name">
                                                <a
                                                        href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=4&amp;id_product_attribute=76&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige"
                                                >
                                                    Suspendisse PotentiSed atant Mauris eleifend
                                                </a>
                                            </span>

                                                                            <div class="product-price-and-shipping">
                                                                                <span class="sr-only">Price</span>
                                                                                <span itemprop="price" class="price">$29.00</span>
                                                                            </div>

                                                                            <div class="product-actions-main">
                                                                                <form action="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                    <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />
                                                                                    <input type="hidden" name="id_product" value="4" class="product_page_product_id" />
                                                                                    <input type="hidden" name="id_customization" value="0" class="product_customization_id" />
                                                                                    <button class="btn  add-to-cart" data-button-action="add-to-cart" type="submit">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Add to cart
                                                                                    </button>
                                                                                </form>

                                                                                <a class="quick-view" href="#" data-link-action="quickview">
                                                                                    <!--   <i class="material-icons search"></i> -->
                                                                                    <!-- Quick view -->
                                                                                </a>
                                                                            </div>

                                                                            <div class="highlighted-informations hidden-sm-down">
                                                                                <div class="variant-links">
                                                                                    <a
                                                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=4&amp;id_product_attribute=76&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige"
                                                                                            class="color"
                                                                                            title="Beige"
                                                                                            style="background-color: #f5f5dc;"
                                                                                    >
                                                                                        <span class="sr-only">Beige</span>
                                                                                    </a>
                                                                                    <a
                                                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=4&amp;id_product_attribute=79&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/9-color-off_white"
                                                                                            class="color"
                                                                                            title="Off White"
                                                                                            style="background-color: #faebd7;"
                                                                                    >
                                                                                        <span class="sr-only">Off White</span>
                                                                                    </a>
                                                                                    <a
                                                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=4&amp;id_product_attribute=82&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
                                                                                            class="color"
                                                                                            title="Black"
                                                                                            style="background-color: #434a54;"
                                                                                    >
                                                                                        <span class="sr-only">Black</span>
                                                                                    </a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </article>
                                                                </li>
                                                            </div>
                                                            <div class="owl-item swiper-slide">
                                                                <li class="item">
                                                                    <article class="product-miniature js-product-miniature" data-id-product="4" data-id-product-attribute="76" itemscope="" itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <a
                                                                                    href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=4&amp;id_product_attribute=76&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige"
                                                                                    class="thumbnail product-thumbnail"
                                                                            >
                                                                                <img
                                                                                        src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/0/30-home_default.jpg"
                                                                                        alt="Suspendisse PotentiSed atant Mauris eleifend"
                                                                                        data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/0/30-large_default.jpg"
                                                                                />

                                                                                <!-- begin modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                <img
                                                                                        class="replace-2x img_1 img-responsive"
                                                                                        src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/4/7/47-home_default.jpg"
                                                                                        data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/4/7/47-large_default.jpg"
                                                                                        alt=""
                                                                                />

                                                                                <!-- end modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                            </a>

                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>

                                                                        <div class="product-description">
                                                                            <!-- begin module:productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                            <!-- begin /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    <div class="star"><i class="fa fa-star"></i></div>
                                                                                    <div class="star"><i class="fa fa-star"></i></div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                            <!-- end module:productcomments/views/templates/front/productcomments_reviews.tpl -->

                                                                            <span class="h3 product-title" itemprop="name">
                                                <a
                                                        href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=4&amp;id_product_attribute=76&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige"
                                                >
                                                    Suspendisse PotentiSed atant Mauris eleifend
                                                </a>
                                            </span>

                                                                            <div class="product-price-and-shipping">
                                                                                <span class="sr-only">Price</span>
                                                                                <span itemprop="price" class="price">$29.00</span>
                                                                            </div>

                                                                            <div class="product-actions-main">
                                                                                <form action="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                    <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />
                                                                                    <input type="hidden" name="id_product" value="4" class="product_page_product_id" />
                                                                                    <input type="hidden" name="id_customization" value="0" class="product_customization_id" />
                                                                                    <button class="btn  add-to-cart" data-button-action="add-to-cart" type="submit">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Add to cart
                                                                                    </button>
                                                                                </form>

                                                                                <a class="quick-view" href="#" data-link-action="quickview">
                                                                                    <!--   <i class="material-icons search"></i> -->
                                                                                    <!-- Quick view -->
                                                                                </a>
                                                                            </div>

                                                                            <div class="highlighted-informations hidden-sm-down">
                                                                                <div class="variant-links">
                                                                                    <a
                                                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=4&amp;id_product_attribute=76&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige"
                                                                                            class="color"
                                                                                            title="Beige"
                                                                                            style="background-color: #f5f5dc;"
                                                                                    >
                                                                                        <span class="sr-only">Beige</span>
                                                                                    </a>
                                                                                    <a
                                                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=4&amp;id_product_attribute=79&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/9-color-off_white"
                                                                                            class="color"
                                                                                            title="Off White"
                                                                                            style="background-color: #faebd7;"
                                                                                    >
                                                                                        <span class="sr-only">Off White</span>
                                                                                    </a>
                                                                                    <a
                                                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=4&amp;id_product_attribute=82&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
                                                                                            class="color"
                                                                                            title="Black"
                                                                                            style="background-color: #434a54;"
                                                                                    >
                                                                                        <span class="sr-only">Black</span>
                                                                                    </a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </article>
                                                                </li>
                                                            </div>
                                                            <div class="owl-item swiper-slide">
                                                                <li class="item">
                                                                    <article class="product-miniature js-product-miniature" data-id-product="4" data-id-product-attribute="76" itemscope="" itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <a
                                                                                    href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=4&amp;id_product_attribute=76&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige"
                                                                                    class="thumbnail product-thumbnail"
                                                                            >
                                                                                <img
                                                                                        src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/0/30-home_default.jpg"
                                                                                        alt="Suspendisse PotentiSed atant Mauris eleifend"
                                                                                        data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/0/30-large_default.jpg"
                                                                                />

                                                                                <!-- begin modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                <img
                                                                                        class="replace-2x img_1 img-responsive"
                                                                                        src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/4/7/47-home_default.jpg"
                                                                                        data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/4/7/47-large_default.jpg"
                                                                                        alt=""
                                                                                />

                                                                                <!-- end modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                            </a>

                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>

                                                                        <div class="product-description">
                                                                            <!-- begin module:productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                            <!-- begin /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    <div class="star"><i class="fa fa-star"></i></div>
                                                                                    <div class="star"><i class="fa fa-star"></i></div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                            <!-- end module:productcomments/views/templates/front/productcomments_reviews.tpl -->

                                                                            <span class="h3 product-title" itemprop="name">
                                                <a
                                                        href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=4&amp;id_product_attribute=76&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige"
                                                >
                                                    Suspendisse PotentiSed atant Mauris eleifend
                                                </a>
                                            </span>

                                                                            <div class="product-price-and-shipping">
                                                                                <span class="sr-only">Price</span>
                                                                                <span itemprop="price" class="price">$29.00</span>
                                                                            </div>

                                                                            <div class="product-actions-main">
                                                                                <form action="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                    <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />
                                                                                    <input type="hidden" name="id_product" value="4" class="product_page_product_id" />
                                                                                    <input type="hidden" name="id_customization" value="0" class="product_customization_id" />
                                                                                    <button class="btn  add-to-cart" data-button-action="add-to-cart" type="submit">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Add to cart
                                                                                    </button>
                                                                                </form>

                                                                                <a class="quick-view" href="#" data-link-action="quickview">
                                                                                    <!--   <i class="material-icons search"></i> -->
                                                                                    <!-- Quick view -->
                                                                                </a>
                                                                            </div>

                                                                            <div class="highlighted-informations hidden-sm-down">
                                                                                <div class="variant-links">
                                                                                    <a
                                                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=4&amp;id_product_attribute=76&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige"
                                                                                            class="color"
                                                                                            title="Beige"
                                                                                            style="background-color: #f5f5dc;"
                                                                                    >
                                                                                        <span class="sr-only">Beige</span>
                                                                                    </a>
                                                                                    <a
                                                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=4&amp;id_product_attribute=79&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/9-color-off_white"
                                                                                            class="color"
                                                                                            title="Off White"
                                                                                            style="background-color: #faebd7;"
                                                                                    >
                                                                                        <span class="sr-only">Off White</span>
                                                                                    </a>
                                                                                    <a
                                                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=4&amp;id_product_attribute=82&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
                                                                                            class="color"
                                                                                            title="Black"
                                                                                            style="background-color: #434a54;"
                                                                                    >
                                                                                        <span class="sr-only">Black</span>
                                                                                    </a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </article>
                                                                </li>
                                                            </div>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div id="tab_6" class="tab-pane">
                                                <div class="products">
                                                    <div class="customNavigation">
                                                        <a class="btn prev tmcategory_prev">&nbsp;</a>
                                                        <a class="btn next tmcategory_next">&nbsp;</a>
                                                    </div>
                                                    <ul id="tmcategory6-carousel" class="tm-carousel product_list product_slider_grid owl-carousel owl-theme" data-catid="6" style="opacity: 0; display: block;">
                                                        <div class="owl-wrapper-outer">
                                                            <div class="owl-wrapper" style="width: 200px; left: 0px; display: block;">
                                                                <div class="owl-item first" style="width: 20px;">
                                                                    <li class="item">
                                                                        <article class="product-miniature js-product-miniature" data-id-product="7" data-id-product-attribute="111" itemscope="" itemtype="http://schema.org/Product">
                                                                            <div class="thumbnail-container">
                                                                                <a
                                                                                        href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=7&amp;id_product_attribute=111&amp;rewrite=mug-the-adventure-begins&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige/20-dimension-60x90cm"
                                                                                        class="thumbnail product-thumbnail"
                                                                                >
                                                                                    <img
                                                                                            src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/5/8/58-home_default.jpg"
                                                                                            alt="Arcu Vitae Imperdiet Facilisisconsectetur..."
                                                                                            data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/5/8/58-large_default.jpg"
                                                                                    />

                                                                                    <!-- begin modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                    <img
                                                                                            class="replace-2x img_1 img-responsive"
                                                                                            src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/6/8/68-home_default.jpg"
                                                                                            data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/6/8/68-large_default.jpg"
                                                                                            alt=""
                                                                                    />

                                                                                    <!-- end modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                </a>

                                                                                <ul class="product-flags">
                                                                                    <li class="on-sale">On sale!</li>
                                                                                    <li class="new">New</li>

                                                                                    <li class="discount_type_flag">
                                                                                        <span class="discount-percentage">-7%</span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>

                                                                            <div class="product-description">
                                                                                <!-- begin module:productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <!-- begin /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <div class="comments_note">
                                                                                    <div class="star_content clearfix">
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <!-- end module:productcomments/views/templates/front/productcomments_reviews.tpl -->

                                                                                <span class="h3 product-title" itemprop="name">
                                                    <a
                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=7&amp;id_product_attribute=111&amp;rewrite=mug-the-adventure-begins&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige/20-dimension-60x90cm"
                                                    >
                                                        Arcu Vitae Imperdiet Facilisisconsectetur adipiscing
                                                    </a>
                                                </span>

                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="sr-only">Price</span>
                                                                                    <span itemprop="price" class="price">$60.45</span>

                                                                                    <span class="sr-only">Regular price</span>
                                                                                    <span class="regular-price">$65.00</span>
                                                                                    <!--                                 <span class="discount-percentage discount-product">-7%</span>
                                            -->
                                                                                </div>

                                                                                <div class="product-actions-main">
                                                                                    <form action="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                        <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />
                                                                                        <input type="hidden" name="id_product" value="7" class="product_page_product_id" />
                                                                                        <input type="hidden" name="id_customization" value="0" class="product_customization_id" />
                                                                                        <button class="btn  add-to-cart" data-button-action="add-to-cart" type="submit">
                                                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Add to cart
                                                                                        </button>
                                                                                    </form>

                                                                                    <a class="quick-view" href="#" data-link-action="quickview">
                                                                                        <!--   <i class="material-icons search"></i> -->
                                                                                        <!-- Quick view -->
                                                                                    </a>
                                                                                </div>

                                                                                <div class="highlighted-informations hidden-sm-down">
                                                                                    <div class="variant-links">
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=7&amp;id_product_attribute=111&amp;rewrite=mug-the-adventure-begins&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige/20-dimension-60x90cm"
                                                                                                class="color"
                                                                                                title="Beige"
                                                                                                style="background-color: #f5f5dc;"
                                                                                        >
                                                                                            <span class="sr-only">Beige</span>
                                                                                        </a>
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=7&amp;id_product_attribute=114&amp;rewrite=mug-the-adventure-begins&amp;controller=product&amp;id_lang=1#/1-size-s/16-color-yellow/20-dimension-60x90cm"
                                                                                                class="color"
                                                                                                title="Yellow"
                                                                                                style="background-color: #f1c40f;"
                                                                                        >
                                                                                            <span class="sr-only">Yellow</span>
                                                                                        </a>
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=7&amp;id_product_attribute=117&amp;rewrite=mug-the-adventure-begins&amp;controller=product&amp;id_lang=1#/1-size-s/17-color-brown/20-dimension-60x90cm"
                                                                                                class="color"
                                                                                                title="Brown"
                                                                                                style="background-color: #964b00;"
                                                                                        >
                                                                                            <span class="sr-only">Brown</span>
                                                                                        </a>
                                                                                        <span class="js-count count"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </li>
                                                                </div>
                                                                <div class="owl-item" style="width: 20px;">
                                                                    <li class="item">
                                                                        <article class="product-miniature js-product-miniature" data-id-product="6" data-id-product-attribute="103" itemscope="" itemtype="http://schema.org/Product">
                                                                            <div class="thumbnail-container">
                                                                                <a
                                                                                        href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=6&amp;id_product_attribute=103&amp;rewrite=mug-the-best-is-yet-to-come&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black/19-dimension-40x60cm"
                                                                                        class="thumbnail product-thumbnail"
                                                                                >
                                                                                    <img
                                                                                            src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/5/7/57-home_default.jpg"
                                                                                            alt="Varius Neque At Enimquam vulputate dictum"
                                                                                            data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/5/7/57-large_default.jpg"
                                                                                    />

                                                                                    <!-- begin modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                    <img
                                                                                            class="replace-2x img_1 img-responsive"
                                                                                            src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/6/2/62-home_default.jpg"
                                                                                            data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/6/2/62-large_default.jpg"
                                                                                            alt=""
                                                                                    />

                                                                                    <!-- end modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                </a>

                                                                                <ul class="product-flags">
                                                                                    <li class="new">New</li>
                                                                                </ul>
                                                                            </div>

                                                                            <div class="product-description">
                                                                                <!-- begin module:productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <!-- begin /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <div class="comments_note">
                                                                                    <div class="star_content clearfix">
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star"><i class="fa fa-star"></i></div>
                                                                                    </div>
                                                                                    <span>%s Review(s)&nbsp;</span>
                                                                                </div>
                                                                                <!-- end /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <!-- end module:productcomments/views/templates/front/productcomments_reviews.tpl -->

                                                                                <span class="h3 product-title" itemprop="name">
                                                    <a
                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=6&amp;id_product_attribute=103&amp;rewrite=mug-the-best-is-yet-to-come&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black/19-dimension-40x60cm"
                                                    >
                                                        Varius Neque At Enimquam vulputate dictum
                                                    </a>
                                                </span>

                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="sr-only">Price</span>
                                                                                    <span itemprop="price" class="price">$78.90</span>
                                                                                </div>

                                                                                <div class="product-actions-main">
                                                                                    <form action="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                        <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />
                                                                                        <input type="hidden" name="id_product" value="6" class="product_page_product_id" />
                                                                                        <input type="hidden" name="id_customization" value="0" class="product_customization_id" />
                                                                                        <button class="btn  add-to-cart" data-button-action="add-to-cart" type="submit">
                                                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Add to cart
                                                                                        </button>
                                                                                    </form>

                                                                                    <a class="quick-view" href="#" data-link-action="quickview">
                                                                                        <!--   <i class="material-icons search"></i> -->
                                                                                        <!-- Quick view -->
                                                                                    </a>
                                                                                </div>

                                                                                <div class="highlighted-informations hidden-sm-down">
                                                                                    <div class="variant-links">
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=6&amp;id_product_attribute=107&amp;rewrite=mug-the-best-is-yet-to-come&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red/19-dimension-40x60cm"
                                                                                                class="color"
                                                                                                title="Red"
                                                                                                style="background-color: #e84c3d;"
                                                                                        >
                                                                                            <span class="sr-only">Red</span>
                                                                                        </a>
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=6&amp;id_product_attribute=103&amp;rewrite=mug-the-best-is-yet-to-come&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black/19-dimension-40x60cm"
                                                                                                class="color"
                                                                                                title="Black"
                                                                                                style="background-color: #434a54;"
                                                                                        >
                                                                                            <span class="sr-only">Black</span>
                                                                                        </a>
                                                                                        <span class="js-count count"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </li>
                                                                </div>
                                                                <div class="owl-item" style="width: 20px;">
                                                                    <li class="item">
                                                                        <article class="product-miniature js-product-miniature" data-id-product="8" data-id-product-attribute="130" itemscope="" itemtype="http://schema.org/Product">
                                                                            <div class="thumbnail-container">
                                                                                <a
                                                                                        href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=8&amp;id_product_attribute=130&amp;rewrite=mug-today-is-a-good-day&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige"
                                                                                        class="thumbnail product-thumbnail"
                                                                                >
                                                                                    <img
                                                                                            src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/5/9/59-home_default.jpg"
                                                                                            alt="Sem Nec Tristique Tempusaliquam quam vel dolor"
                                                                                            data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/5/9/59-large_default.jpg"
                                                                                    />

                                                                                    <!-- begin modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                    <img
                                                                                            class="replace-2x img_1 img-responsive"
                                                                                            src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/7/3/73-home_default.jpg"
                                                                                            data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/7/3/73-large_default.jpg"
                                                                                            alt=""
                                                                                    />

                                                                                    <!-- end modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                </a>

                                                                                <ul class="product-flags">
                                                                                    <li class="new">New</li>
                                                                                </ul>
                                                                            </div>

                                                                            <div class="product-description">
                                                                                <!-- begin module:productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <!-- begin /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <div class="comments_note">
                                                                                    <div class="star_content clearfix">
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    </div>
                                                                                    <span>%s Review(s)&nbsp;</span>
                                                                                </div>
                                                                                <!-- end /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <!-- end module:productcomments/views/templates/front/productcomments_reviews.tpl -->

                                                                                <span class="h3 product-title" itemprop="name">
                                                    <a
                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=8&amp;id_product_attribute=130&amp;rewrite=mug-today-is-a-good-day&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige"
                                                    >
                                                        Sem Nec Tristique Tempusaliquam quam vel dolor
                                                    </a>
                                                </span>

                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="sr-only">Price</span>
                                                                                    <span itemprop="price" class="price">$89.90</span>
                                                                                </div>

                                                                                <div class="product-actions-main">
                                                                                    <form action="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                        <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />
                                                                                        <input type="hidden" name="id_product" value="8" class="product_page_product_id" />
                                                                                        <input type="hidden" name="id_customization" value="0" class="product_customization_id" />
                                                                                        <button class="btn  add-to-cart" data-button-action="add-to-cart" type="submit">
                                                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Add to cart
                                                                                        </button>
                                                                                    </form>

                                                                                    <a class="quick-view" href="#" data-link-action="quickview">
                                                                                        <!--   <i class="material-icons search"></i> -->
                                                                                        <!-- Quick view -->
                                                                                    </a>
                                                                                </div>

                                                                                <div class="highlighted-informations hidden-sm-down">
                                                                                    <div class="variant-links">
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=8&amp;id_product_attribute=129&amp;rewrite=mug-today-is-a-good-day&amp;controller=product&amp;id_lang=1#/3-size-l/7-color-beige"
                                                                                                class="color"
                                                                                                title="Beige"
                                                                                                style="background-color: #f5f5dc;"
                                                                                        >
                                                                                            <span class="sr-only">Beige</span>
                                                                                        </a>
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=8&amp;id_product_attribute=131&amp;rewrite=mug-today-is-a-good-day&amp;controller=product&amp;id_lang=1#/3-size-l/9-color-off_white"
                                                                                                class="color"
                                                                                                title="Off White"
                                                                                                style="background-color: #faebd7;"
                                                                                        >
                                                                                            <span class="sr-only">Off White</span>
                                                                                        </a>
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=8&amp;id_product_attribute=135&amp;rewrite=mug-today-is-a-good-day&amp;controller=product&amp;id_lang=1#/3-size-l/14-color-blue"
                                                                                                class="color"
                                                                                                title="Blue"
                                                                                                style="background-color: #5d9cec;"
                                                                                        >
                                                                                            <span class="sr-only">Blue</span>
                                                                                        </a>
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=8&amp;id_product_attribute=133&amp;rewrite=mug-today-is-a-good-day&amp;controller=product&amp;id_lang=1#/3-size-l/16-color-yellow"
                                                                                                class="color"
                                                                                                title="Yellow"
                                                                                                style="background-color: #f1c40f;"
                                                                                        >
                                                                                            <span class="sr-only">Yellow</span>
                                                                                        </a>
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=8&amp;id_product_attribute=137&amp;rewrite=mug-today-is-a-good-day&amp;controller=product&amp;id_lang=1#/3-size-l/17-color-brown"
                                                                                                class="color"
                                                                                                title="Brown"
                                                                                                style="background-color: #964b00;"
                                                                                        >
                                                                                            <span class="sr-only">Brown</span>
                                                                                        </a>
                                                                                        <span class="js-count count"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </li>
                                                                </div>
                                                                <div class="owl-item" style="width: 20px;">
                                                                    <li class="item">
                                                                        <article class="product-miniature js-product-miniature" data-id-product="10" data-id-product-attribute="157" itemscope="" itemtype="http://schema.org/Product">
                                                                            <div class="thumbnail-container">
                                                                                <a
                                                                                        href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=10&amp;id_product_attribute=157&amp;rewrite=brown-bear-cushion&amp;controller=product&amp;id_lang=1#/2-size-m/6-color-taupe/19-dimension-40x60cm"
                                                                                        class="thumbnail product-thumbnail"
                                                                                >
                                                                                    <img
                                                                                            src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/6/1/61-home_default.jpg"
                                                                                            alt="Nascetur ridiculus muscursus dictum risusrte"
                                                                                            data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/6/1/61-large_default.jpg"
                                                                                    />

                                                                                    <!-- begin modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                    <img
                                                                                            class="replace-2x img_1 img-responsive"
                                                                                            src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/8/3/83-home_default.jpg"
                                                                                            data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/8/3/83-large_default.jpg"
                                                                                            alt=""
                                                                                    />

                                                                                    <!-- end modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                </a>

                                                                                <ul class="product-flags">
                                                                                    <li class="online-only">Online only</li>
                                                                                    <li class="on-sale">On sale!</li>
                                                                                    <li class="new">New</li>

                                                                                    <li class="discount_type_flag">
                                                                                        <span class="discount-percentage">-12%</span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>

                                                                            <div class="product-description">
                                                                                <!-- begin module:productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <!-- begin /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <div class="comments_note">
                                                                                    <div class="star_content clearfix">
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <!-- end module:productcomments/views/templates/front/productcomments_reviews.tpl -->

                                                                                <span class="h3 product-title" itemprop="name">
                                                    <a
                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=10&amp;id_product_attribute=157&amp;rewrite=brown-bear-cushion&amp;controller=product&amp;id_lang=1#/2-size-m/6-color-taupe/19-dimension-40x60cm"
                                                    >
                                                        Nascetur ridiculus muscursus dictum risusrte
                                                    </a>
                                                </span>

                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="sr-only">Price</span>
                                                                                    <span itemprop="price" class="price">$56.19</span>

                                                                                    <span class="sr-only">Regular price</span>
                                                                                    <span class="regular-price">$63.85</span>
                                                                                    <!--                                 <span class="discount-percentage discount-product">-12%</span>
                                            -->
                                                                                </div>

                                                                                <div class="product-actions-main">
                                                                                    <form action="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                        <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />
                                                                                        <input type="hidden" name="id_product" value="10" class="product_page_product_id" />
                                                                                        <input type="hidden" name="id_customization" value="0" class="product_customization_id" />
                                                                                        <button class="btn  add-to-cart" data-button-action="add-to-cart" type="submit">
                                                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Add to cart
                                                                                        </button>
                                                                                    </form>

                                                                                    <a class="quick-view" href="#" data-link-action="quickview">
                                                                                        <!--   <i class="material-icons search"></i> -->
                                                                                        <!-- Quick view -->
                                                                                    </a>
                                                                                </div>

                                                                                <div class="highlighted-informations hidden-sm-down">
                                                                                    <div class="variant-links">
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=10&amp;id_product_attribute=157&amp;rewrite=brown-bear-cushion&amp;controller=product&amp;id_lang=1#/2-size-m/6-color-taupe/19-dimension-40x60cm"
                                                                                                class="color"
                                                                                                title="Taupe"
                                                                                                style="background-color: #cfc4a6;"
                                                                                        >
                                                                                            <span class="sr-only">Taupe</span>
                                                                                        </a>
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=10&amp;id_product_attribute=161&amp;rewrite=brown-bear-cushion&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue/19-dimension-40x60cm"
                                                                                                class="color"
                                                                                                title="Blue"
                                                                                                style="background-color: #5d9cec;"
                                                                                        >
                                                                                            <span class="sr-only">Blue</span>
                                                                                        </a>
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=10&amp;id_product_attribute=159&amp;rewrite=brown-bear-cushion&amp;controller=product&amp;id_lang=1#/2-size-m/15-color-green/19-dimension-40x60cm"
                                                                                                class="color"
                                                                                                title="Green"
                                                                                                style="background-color: #a0d468;"
                                                                                        >
                                                                                            <span class="sr-only">Green</span>
                                                                                        </a>
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=10&amp;id_product_attribute=163&amp;rewrite=brown-bear-cushion&amp;controller=product&amp;id_lang=1#/2-size-m/16-color-yellow/19-dimension-40x60cm"
                                                                                                class="color"
                                                                                                title="Yellow"
                                                                                                style="background-color: #f1c40f;"
                                                                                        >
                                                                                            <span class="sr-only">Yellow</span>
                                                                                        </a>
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=10&amp;id_product_attribute=165&amp;rewrite=brown-bear-cushion&amp;controller=product&amp;id_lang=1#/2-size-m/17-color-brown/19-dimension-40x60cm"
                                                                                                class="color"
                                                                                                title="Brown"
                                                                                                style="background-color: #964b00;"
                                                                                        >
                                                                                            <span class="sr-only">Brown</span>
                                                                                        </a>
                                                                                        <span class="js-count count"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </li>
                                                                </div>
                                                                <div class="owl-item last" style="width: 20px;">
                                                                    <li class="item">
                                                                        <article class="product-miniature js-product-miniature" data-id-product="9" data-id-product-attribute="145" itemscope="" itemtype="http://schema.org/Product">
                                                                            <div class="thumbnail-container">
                                                                                <a
                                                                                        href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=9&amp;id_product_attribute=145&amp;rewrite=mountain-fox-cushion&amp;controller=product&amp;id_lang=1#/1-size-s/16-color-yellow/20-dimension-60x90cm"
                                                                                        class="thumbnail product-thumbnail"
                                                                                >
                                                                                    <img
                                                                                            src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/6/0/60-home_default.jpg"
                                                                                            alt="Nascetur ridiculus musfringilla mi in ligula"
                                                                                            data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/6/0/60-large_default.jpg"
                                                                                    />

                                                                                    <!-- begin modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                    <img
                                                                                            class="replace-2x img_1 img-responsive"
                                                                                            src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/7/8/78-home_default.jpg"
                                                                                            data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/7/8/78-large_default.jpg"
                                                                                            alt=""
                                                                                    />

                                                                                    <!-- end modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                </a>

                                                                                <ul class="product-flags">
                                                                                    <li class="new">New</li>
                                                                                </ul>
                                                                            </div>

                                                                            <div class="product-description">
                                                                                <!-- begin module:productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <!-- begin /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <div class="comments_note">
                                                                                    <div class="star_content clearfix">
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star"><i class="fa fa-star"></i></div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <!-- end module:productcomments/views/templates/front/productcomments_reviews.tpl -->

                                                                                <span class="h3 product-title" itemprop="name">
                                                    <a
                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=9&amp;id_product_attribute=145&amp;rewrite=mountain-fox-cushion&amp;controller=product&amp;id_lang=1#/1-size-s/16-color-yellow/20-dimension-60x90cm"
                                                    >
                                                        Nascetur ridiculus musfringilla mi in ligula
                                                    </a>
                                                </span>

                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="sr-only">Price</span>
                                                                                    <span itemprop="price" class="price">$77.00</span>
                                                                                </div>

                                                                                <div class="product-actions-main">
                                                                                    <form action="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                        <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />
                                                                                        <input type="hidden" name="id_product" value="9" class="product_page_product_id" />
                                                                                        <input type="hidden" name="id_customization" value="0" class="product_customization_id" />
                                                                                        <button class="btn  add-to-cart" data-button-action="add-to-cart" type="submit">
                                                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Add to cart
                                                                                        </button>
                                                                                    </form>

                                                                                    <a class="quick-view" href="#" data-link-action="quickview">
                                                                                        <!--   <i class="material-icons search"></i> -->
                                                                                        <!-- Quick view -->
                                                                                    </a>
                                                                                </div>

                                                                                <div class="highlighted-informations hidden-sm-down">
                                                                                    <div class="variant-links">
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=9&amp;id_product_attribute=139&amp;rewrite=mountain-fox-cushion&amp;controller=product&amp;id_lang=1#/2-size-m/16-color-yellow/20-dimension-60x90cm"
                                                                                                class="color"
                                                                                                title="Yellow"
                                                                                                style="background-color: #f1c40f;"
                                                                                        >
                                                                                            <span class="sr-only">Yellow</span>
                                                                                        </a>
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=9&amp;id_product_attribute=140&amp;rewrite=mountain-fox-cushion&amp;controller=product&amp;id_lang=1#/2-size-m/17-color-brown/20-dimension-60x90cm"
                                                                                                class="color"
                                                                                                title="Brown"
                                                                                                style="background-color: #964b00;"
                                                                                        >
                                                                                            <span class="sr-only">Brown</span>
                                                                                        </a>
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=9&amp;id_product_attribute=141&amp;rewrite=mountain-fox-cushion&amp;controller=product&amp;id_lang=1#/2-size-m/18-color-pink/20-dimension-60x90cm"
                                                                                                class="color"
                                                                                                title="Pink"
                                                                                                style="background-color: #fccacd;"
                                                                                        >
                                                                                            <span class="sr-only">Pink</span>
                                                                                        </a>
                                                                                        <span class="js-count count"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </li>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="owl-controls clickable" style="display: none;">
                                                            <div class="owl-pagination">
                                                                <div class="owl-page active"><span class=""></span></div>
                                                            </div>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div id="tab_9" class="tab-pane">
                                                <div class="products">
                                                    <div class="customNavigation">
                                                        <a class="btn prev tmcategory_prev">&nbsp;</a>
                                                        <a class="btn next tmcategory_next">&nbsp;</a>
                                                    </div>
                                                    <ul id="tmcategory9-carousel" class="tm-carousel product_list product_slider_grid owl-carousel owl-theme" data-catid="9" style="opacity: 0; display: block;">
                                                        <div class="owl-wrapper-outer">
                                                            <div class="owl-wrapper" style="width: 200px; left: 0px; display: block;">
                                                                <div class="owl-item first" style="width: 20px;">
                                                                    <li class="item">
                                                                        <article class="product-miniature js-product-miniature" data-id-product="3" data-id-product-attribute="72" itemscope="" itemtype="http://schema.org/Product">
                                                                            <div class="thumbnail-container">
                                                                                <a
                                                                                        href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=3&amp;id_product_attribute=72&amp;rewrite=the-best-is-yet-to-come-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/16-color-yellow"
                                                                                        class="thumbnail product-thumbnail"
                                                                                >
                                                                                    <img
                                                                                            src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/9/29-home_default.jpg"
                                                                                            alt="Justo Neque Commodo Pellentesque augue justo"
                                                                                            data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/9/29-large_default.jpg"
                                                                                    />

                                                                                    <!-- begin modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                    <img
                                                                                            class="replace-2x img_1 img-responsive"
                                                                                            src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/4/2/42-home_default.jpg"
                                                                                            data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/4/2/42-large_default.jpg"
                                                                                            alt=""
                                                                                    />

                                                                                    <!-- end modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                </a>

                                                                                <ul class="product-flags">
                                                                                    <li class="online-only">Online only</li>
                                                                                    <li class="new">New</li>
                                                                                </ul>
                                                                            </div>

                                                                            <div class="product-description">
                                                                                <!-- begin module:productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <!-- begin /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <div class="comments_note">
                                                                                    <div class="star_content clearfix">
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star star_on"><i class="fa fa-star"></i></div>
                                                                                        <div class="star"><i class="fa fa-star"></i></div>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="h3 product-title" itemprop="name">
                                                    <a
                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=3&amp;id_product_attribute=72&amp;rewrite=the-best-is-yet-to-come-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/16-color-yellow"
                                                    >
                                                        Justo Neque Commodo Pellentesque augue justo
                                                    </a>
                                                </span>

                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="sr-only">Price</span>
                                                                                    <span itemprop="price" class="price">$29.00</span>
                                                                                </div>

                                                                                <div class="product-actions-main">
                                                                                    <form action="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                        <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />
                                                                                        <input type="hidden" name="id_product" value="3" class="product_page_product_id" />
                                                                                        <input type="hidden" name="id_customization" value="0" class="product_customization_id" />
                                                                                        <button class="btn  add-to-cart" data-button-action="add-to-cart" type="submit">
                                                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Add to cart
                                                                                        </button>
                                                                                    </form>

                                                                                    <a class="quick-view" href="#" data-link-action="quickview">
                                                                                        <!--   <i class="material-icons search"></i> -->
                                                                                        <!-- Quick view -->
                                                                                    </a>
                                                                                </div>

                                                                                <div class="highlighted-informations hidden-sm-down">
                                                                                    <div class="variant-links">
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=3&amp;id_product_attribute=67&amp;rewrite=the-best-is-yet-to-come-framed-poster&amp;controller=product&amp;id_lang=1#/2-size-m/13-color-orange"
                                                                                                class="color"
                                                                                                title="Orange"
                                                                                                style="background-color: #f39c11;"
                                                                                        >
                                                                                            <span class="sr-only">Orange</span>
                                                                                        </a>
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=3&amp;id_product_attribute=66&amp;rewrite=the-best-is-yet-to-come-framed-poster&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue"
                                                                                                class="color"
                                                                                                title="Blue"
                                                                                                style="background-color: #5d9cec;"
                                                                                        >
                                                                                            <span class="sr-only">Blue</span>
                                                                                        </a>
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=3&amp;id_product_attribute=65&amp;rewrite=the-best-is-yet-to-come-framed-poster&amp;controller=product&amp;id_lang=1#/2-size-m/15-color-green"
                                                                                                class="color"
                                                                                                title="Green"
                                                                                                style="background-color: #a0d468;"
                                                                                        >
                                                                                            <span class="sr-only">Green</span>
                                                                                        </a>
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=3&amp;id_product_attribute=64&amp;rewrite=the-best-is-yet-to-come-framed-poster&amp;controller=product&amp;id_lang=1#/2-size-m/16-color-yellow"
                                                                                                class="color"
                                                                                                title="Yellow"
                                                                                                style="background-color: #f1c40f;"
                                                                                        >
                                                                                            <span class="sr-only">Yellow</span>
                                                                                        </a>
                                                                                        <span class="js-count count"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </li>
                                                                </div>
                                                                <div class="owl-item" style="width: 20px;">
                                                                    <li class="item">
                                                                        <article class="product-miniature js-product-miniature" data-id-product="4" data-id-product-attribute="76" itemscope="" itemtype="http://schema.org/Product">
                                                                            <div class="thumbnail-container">
                                                                                <a
                                                                                        href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=4&amp;id_product_attribute=76&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige"
                                                                                        class="thumbnail product-thumbnail"
                                                                                >
                                                                                    <img
                                                                                            src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/0/30-home_default.jpg"
                                                                                            alt="Suspendisse PotentiSed atant Mauris eleifend"
                                                                                            data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/0/30-large_default.jpg"
                                                                                    />

                                                                                    <!-- begin modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                    <img
                                                                                            class="replace-2x img_1 img-responsive"
                                                                                            src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/4/7/47-home_default.jpg"
                                                                                            data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/4/7/47-large_default.jpg"
                                                                                            alt=""
                                                                                    />

                                                                                    <!-- end modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                </a>

                                                                                <ul class="product-flags">
                                                                                    <li class="new">New</li>
                                                                                </ul>
                                                                            </div>

                                                                            <div class="product-description">
                                                                                <!-- begin module:productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <!-- begin /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <div class="comments_note">
                                                                                    <div class="star_content clearfix">
                                                                                        <div class="star star_on"></div>
                                                                                        <div class="star star_on"></div>
                                                                                        <div class="star star_on"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                    </div>
                                                                                    <span>%s Review(s)&nbsp;</span>
                                                                                </div>
                                                                                <!-- end /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <!-- end module:productcomments/views/templates/front/productcomments_reviews.tpl -->

                                                                                <span class="h3 product-title" itemprop="name">
                                                    <a
                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=4&amp;id_product_attribute=76&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige"
                                                    >
                                                        Suspendisse PotentiSed atant Mauris eleifend
                                                    </a>
                                                </span>

                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="sr-only">Price</span>
                                                                                    <span itemprop="price" class="price">$29.00</span>
                                                                                </div>

                                                                                <div class="product-actions-main">
                                                                                    <form action="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                        <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />
                                                                                        <input type="hidden" name="id_product" value="4" class="product_page_product_id" />
                                                                                        <input type="hidden" name="id_customization" value="0" class="product_customization_id" />
                                                                                        <button class="btn add-to-cart" type="submit"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Add to cart</button>
                                                                                    </form>

                                                                                    <a class="quick-view" href="#" data-link-action="quickview">
                                                                                        <!--   <i class="material-icons search"></i> -->
                                                                                        <!-- Quick view -->
                                                                                    </a>
                                                                                </div>

                                                                                <div class="highlighted-informations hidden-sm-down">
                                                                                    <div class="variant-links">
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=4&amp;id_product_attribute=76&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige"
                                                                                                class="color"
                                                                                                title="Beige"
                                                                                                style="background-color: #f5f5dc;"
                                                                                        >
                                                                                            <span class="sr-only">Beige</span>
                                                                                        </a>
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=4&amp;id_product_attribute=79&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/9-color-off_white"
                                                                                                class="color"
                                                                                                title="Off White"
                                                                                                style="background-color: #faebd7;"
                                                                                        >
                                                                                            <span class="sr-only">Off White</span>
                                                                                        </a>
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=4&amp;id_product_attribute=82&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
                                                                                                class="color"
                                                                                                title="Black"
                                                                                                style="background-color: #434a54;"
                                                                                        >
                                                                                            <span class="sr-only">Black</span>
                                                                                        </a>
                                                                                        <span class="js-count count"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </li>
                                                                </div>
                                                                <div class="owl-item" style="width: 20px;">
                                                                    <li class="item">
                                                                        <article class="product-miniature js-product-miniature" data-id-product="5" data-id-product-attribute="87" itemscope="" itemtype="http://schema.org/Product">
                                                                            <div class="thumbnail-container">
                                                                                <a
                                                                                        href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=5&amp;id_product_attribute=87&amp;rewrite=today-is-a-good-day-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige/20-dimension-60x90cm"
                                                                                        class="thumbnail product-thumbnail"
                                                                                >
                                                                                    <img
                                                                                            src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/1/31-home_default.jpg"
                                                                                            alt="Tellus Eu Volutpat VariusCurabitur sit amet era"
                                                                                            data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/1/31-large_default.jpg"
                                                                                    />

                                                                                    <!-- begin modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                    <img
                                                                                            class="replace-2x img_1 img-responsive"
                                                                                            src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/5/2/52-home_default.jpg"
                                                                                            data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/5/2/52-large_default.jpg"
                                                                                            alt=""
                                                                                    />

                                                                                    <!-- end modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                </a>

                                                                                <ul class="product-flags">
                                                                                    <li class="new">New</li>
                                                                                </ul>
                                                                            </div>

                                                                            <div class="product-description">
                                                                                <!-- begin module:productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <!-- begin /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <div class="comments_note">
                                                                                    <div class="star_content clearfix">
                                                                                        <div class="star star_on"></div>
                                                                                        <div class="star star_on"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                    </div>
                                                                                    <span>%s Review(s)&nbsp;</span>
                                                                                </div>
                                                                                <!-- end /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <!-- end module:productcomments/views/templates/front/productcomments_reviews.tpl -->

                                                                                <span class="h3 product-title" itemprop="name">
                                                    <a
                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=5&amp;id_product_attribute=87&amp;rewrite=today-is-a-good-day-framed-poster&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige/20-dimension-60x90cm"
                                                    >
                                                        Tellus Eu Volutpat VariusCurabitur sit amet era
                                                    </a>
                                                </span>

                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="sr-only">Price</span>
                                                                                    <span itemprop="price" class="price">$29.00</span>
                                                                                </div>

                                                                                <div class="product-actions-main">
                                                                                    <form action="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                        <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />
                                                                                        <input type="hidden" name="id_product" value="5" class="product_page_product_id" />
                                                                                        <input type="hidden" name="id_customization" value="0" class="product_customization_id" />
                                                                                        <button class="btn add-to-cart" data-button-action="add-to-cart" type="submit">
                                                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Add to cart
                                                                                        </button>
                                                                                    </form>

                                                                                    <a class="quick-view" href="#" data-link-action="quickview">
                                                                                        <!--   <i class="material-icons search"></i> -->
                                                                                        <!-- Quick view -->
                                                                                    </a>
                                                                                </div>

                                                                                <div class="highlighted-informations hidden-sm-down">
                                                                                    <div class="variant-links">
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=5&amp;id_product_attribute=85&amp;rewrite=today-is-a-good-day-framed-poster&amp;controller=product&amp;id_lang=1#/2-size-m/7-color-beige/20-dimension-60x90cm"
                                                                                                class="color"
                                                                                                title="Beige"
                                                                                                style="background-color: #f5f5dc;"
                                                                                        >
                                                                                            <span class="sr-only">Beige</span>
                                                                                        </a>
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=5&amp;id_product_attribute=91&amp;rewrite=today-is-a-good-day-framed-poster&amp;controller=product&amp;id_lang=1#/2-size-m/10-color-red/20-dimension-60x90cm"
                                                                                                class="color"
                                                                                                title="Red"
                                                                                                style="background-color: #e84c3d;"
                                                                                        >
                                                                                            <span class="sr-only">Red</span>
                                                                                        </a>
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=5&amp;id_product_attribute=97&amp;rewrite=today-is-a-good-day-framed-poster&amp;controller=product&amp;id_lang=1#/2-size-m/16-color-yellow/20-dimension-60x90cm"
                                                                                                class="color"
                                                                                                title="Yellow"
                                                                                                style="background-color: #f1c40f;"
                                                                                        >
                                                                                            <span class="sr-only">Yellow</span>
                                                                                        </a>
                                                                                        <span class="js-count count"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </li>
                                                                </div>
                                                                <div class="owl-item" style="width: 20px;">
                                                                    <li class="item">
                                                                        <article class="product-miniature js-product-miniature" data-id-product="12" data-id-product-attribute="213" itemscope="" itemtype="http://schema.org/Product">
                                                                            <div class="thumbnail-container">
                                                                                <a
                                                                                        href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=12&amp;id_product_attribute=213&amp;rewrite=mountain-fox-vector-graphics&amp;controller=product&amp;id_lang=1#/1-size-s/17-color-brown/19-dimension-40x60cm"
                                                                                        class="thumbnail product-thumbnail"
                                                                                >
                                                                                    <img
                                                                                            src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/8/9/89-home_default.jpg"
                                                                                            alt="Mauris Blandit Vehiculamassa quam dapibus"
                                                                                            data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/8/9/89-large_default.jpg"
                                                                                    />

                                                                                    <!-- begin modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                    <img
                                                                                            class="replace-2x img_1 img-responsive"
                                                                                            src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/9/8/98-home_default.jpg"
                                                                                            data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/9/8/98-large_default.jpg"
                                                                                            alt=""
                                                                                    />

                                                                                    <!-- end modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                </a>

                                                                                <ul class="product-flags">
                                                                                    <li class="online-only">Online only</li>
                                                                                    <li class="new">New</li>
                                                                                </ul>
                                                                            </div>

                                                                            <div class="product-description">
                                                                                <!-- begin module:productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <!-- begin /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <div class="comments_note">
                                                                                    <div class="star_content clearfix">
                                                                                        <div class="star star_on"></div>
                                                                                        <div class="star star_on"></div>
                                                                                        <div class="star star_on"></div>
                                                                                        <div class="star star_on"></div>
                                                                                        <div class="star star_on"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="h3 product-title" itemprop="name">
                                                    <a
                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=12&amp;id_product_attribute=213&amp;rewrite=mountain-fox-vector-graphics&amp;controller=product&amp;id_lang=1#/1-size-s/17-color-brown/19-dimension-40x60cm"
                                                    >
                                                        Mauris Blandit Vehiculamassa quam dapibus
                                                    </a>
                                                </span>

                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="sr-only">Price</span>
                                                                                    <span itemprop="price" class="price">$79.00</span>
                                                                                </div>

                                                                                <div class="product-actions-main">
                                                                                    <form action="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                        <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />
                                                                                        <input type="hidden" name="id_product" value="12" class="product_page_product_id" />
                                                                                        <input type="hidden" name="id_customization" value="0" class="product_customization_id" />
                                                                                        <button class="btn add-to-cart" data-button-action="add-to-cart" type="submit">
                                                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Add to cart
                                                                                        </button>
                                                                                    </form>

                                                                                    <a class="quick-view" href="#" data-link-action="quickview">
                                                                                        <!--   <i class="material-icons search"></i> -->
                                                                                        <!-- Quick view -->
                                                                                    </a>
                                                                                </div>

                                                                                <div class="highlighted-informations hidden-sm-down">
                                                                                    <div class="variant-links">
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=12&amp;id_product_attribute=217&amp;rewrite=mountain-fox-vector-graphics&amp;controller=product&amp;id_lang=1#/1-size-s/13-color-orange/19-dimension-40x60cm"
                                                                                                class="color"
                                                                                                title="Orange"
                                                                                                style="background-color: #f39c11;"
                                                                                        >
                                                                                            <span class="sr-only">Orange</span>
                                                                                        </a>
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=12&amp;id_product_attribute=215&amp;rewrite=mountain-fox-vector-graphics&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue/19-dimension-40x60cm"
                                                                                                class="color"
                                                                                                title="Blue"
                                                                                                style="background-color: #5d9cec;"
                                                                                        >
                                                                                            <span class="sr-only">Blue</span>
                                                                                        </a>
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=12&amp;id_product_attribute=213&amp;rewrite=mountain-fox-vector-graphics&amp;controller=product&amp;id_lang=1#/1-size-s/17-color-brown/19-dimension-40x60cm"
                                                                                                class="color"
                                                                                                title="Brown"
                                                                                                style="background-color: #964b00;"
                                                                                        >
                                                                                            <span class="sr-only">Brown</span>
                                                                                        </a>
                                                                                        <span class="js-count count"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </li>
                                                                </div>
                                                                <div class="owl-item last" style="width: 20px;">
                                                                    <li class="item">
                                                                        <article class="product-miniature js-product-miniature" data-id-product="13" data-id-product-attribute="225" itemscope="" itemtype="http://schema.org/Product">
                                                                            <div class="thumbnail-container">
                                                                                <a
                                                                                        href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=13&amp;id_product_attribute=225&amp;rewrite=brown-bear-vector-graphics&amp;controller=product&amp;id_lang=1#/1-size-s/16-color-yellow/19-dimension-40x60cm"
                                                                                        class="thumbnail product-thumbnail"
                                                                                >
                                                                                    <img
                                                                                            src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/9/0/90-home_default.jpg"
                                                                                            alt="Bhumitationa Centyraonquam dapibus leoerts"
                                                                                            data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/9/0/90-large_default.jpg"
                                                                                    />

                                                                                    <!-- begin modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                    <img
                                                                                            class="replace-2x img_1 img-responsive"
                                                                                            src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/1/0/3/103-home_default.jpg"
                                                                                            data-full-size-image-url="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/1/0/3/103-large_default.jpg"
                                                                                            alt=""
                                                                                    />

                                                                                    <!-- end modules/tm_imagehover/views/templates/hook/tm_imagehover.tpl -->
                                                                                </a>

                                                                                <ul class="product-flags">
                                                                                    <li class="new">New</li>
                                                                                </ul>
                                                                            </div>

                                                                            <div class="product-description">
                                                                                <!-- begin module:productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <!-- begin /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <div class="comments_note">
                                                                                    <div class="star_content clearfix">
                                                                                        <div class="star"><i class="fa fa-star"></i></div>
                                                                                        <div class="star"><i class="fa fa-star"></i></div>
                                                                                        <div class="star"><i class="fa fa-star"></i></div>
                                                                                        <div class="star"><i class="fa fa-star"></i></div>
                                                                                        <div class="star"><i class="fa fa-star"></i></div>
                                                                                    </div>
                                                                                    <span>%s Review(s)&nbsp;</span>
                                                                                </div>
                                                                                <!-- end /var/www/html/PRSADD11/PRS273/modules/productcomments/views/templates/front/productcomments_reviews.tpl -->
                                                                                <!-- end module:productcomments/views/templates/front/productcomments_reviews.tpl -->

                                                                                <span class="h3 product-title" itemprop="name">
                                                    <a
                                                            href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=13&amp;id_product_attribute=225&amp;rewrite=brown-bear-vector-graphics&amp;controller=product&amp;id_lang=1#/1-size-s/16-color-yellow/19-dimension-40x60cm"
                                                    >
                                                        Bhumitationa Centyraonquam dapibus leoerts
                                                    </a>
                                                </span>

                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="sr-only">Price</span>
                                                                                    <span itemprop="price" class="price">$35.00</span>
                                                                                </div>

                                                                                <div class="product-actions-main">
                                                                                    <form action="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                        <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />
                                                                                        <input type="hidden" name="id_product" value="13" class="product_page_product_id" />
                                                                                        <input type="hidden" name="id_customization" value="0" class="product_customization_id" />
                                                                                        <button class="btn add-to-cart" data-button-action="add-to-cart" type="submit">
                                                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Add to cart
                                                                                        </button>
                                                                                    </form>

                                                                                    <a class="quick-view" href="#" data-link-action="quickview">
                                                                                        <!--   <i class="material-icons search"></i> -->
                                                                                        <!-- Quick view -->
                                                                                    </a>
                                                                                </div>

                                                                                <div class="highlighted-informations hidden-sm-down">
                                                                                    <div class="variant-links">
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=13&amp;id_product_attribute=228&amp;rewrite=brown-bear-vector-graphics&amp;controller=product&amp;id_lang=1#/1-size-s/15-color-green/19-dimension-40x60cm"
                                                                                                class="color"
                                                                                                title="Green"
                                                                                                style="background-color: #a0d468;"
                                                                                        >
                                                                                            <span class="sr-only">Green</span>
                                                                                        </a>
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=13&amp;id_product_attribute=225&amp;rewrite=brown-bear-vector-graphics&amp;controller=product&amp;id_lang=1#/1-size-s/16-color-yellow/19-dimension-40x60cm"
                                                                                                class="color"
                                                                                                title="Yellow"
                                                                                                style="background-color: #f1c40f;"
                                                                                        >
                                                                                            <span class="sr-only">Yellow</span>
                                                                                        </a>
                                                                                        <a
                                                                                                href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_product=13&amp;id_product_attribute=231&amp;rewrite=brown-bear-vector-graphics&amp;controller=product&amp;id_lang=1#/1-size-s/17-color-brown/19-dimension-40x60cm"
                                                                                                class="color"
                                                                                                title="Brown"
                                                                                                style="background-color: #964b00;"
                                                                                        >
                                                                                            <span class="sr-only">Brown</span>
                                                                                        </a>
                                                                                        <span class="js-count count"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </li>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="owl-controls clickable" style="display: none;">
                                                            <div class="owl-pagination">
                                                                <div class="owl-page active"><span class=""></span></div>
                                                            </div>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="customNavigation">
                                        <a class="btn prev brand_prev carousel-control-prev">&nbsp;<i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                                        <a class="btn next brand_next carousel-control-next">&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>

                            {{--  section 7 --}}
                            <div class="lastest_block block tmblog-latest container" id="blog_home">
                                <div class="blog_title">
                                    <h2 class="products-section-title text-uppercase">from the Blog</h2>
                                    <div class="customNavigation">
                                        <a class="carousel-control-prev">&nbsp;<i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                                        <a class="carousel-control-next">&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div id="spe_res">
                                    <div class="homeblog-inner">
                                        <ul id="blog-carousel" class="product_list owl-carousel owl-theme swiper-container" style="margin-bottom: 50px;">
                                            <div class="swiper-wrapper">
                                                <div class="owl-item swiper-slide">
                                                    <li class="blog-post item">
                                                        <div class="blog-item">
                                                            <div class="blog-image text-xs-center">
                                                                <a href="#" title="" class="link">
                                                                    <img src="{{asset('img/lg-b-5.jpg')}}" class="img-fluid" />
                                                                </a>
                                                            </div>
                                                            <div class="blog-content-wrap">
                                                                <h4 class="title">
                                                                    <a href="#">Urna pretium elit mauris cursus Curabitur at elit Vestibulum</a>
                                                                </h4>
                                                                <div class="blog-shortinfo">
                                                                    Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum...
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </div>
                                                <div class="owl-item swiper-slide">
                                                    <li class="blog-post item">
                                                        <div class="blog-item">
                                                            <div class="blog-image text-xs-center">
                                                                <a href="#" title="" class="link">
                                                                    <img src="{{asset('img/lg-b-5.jpg')}}" class="img-fluid" />
                                                                </a>
                                                            </div>
                                                            <div class="blog-content-wrap">
                                                                <h4 class="title">
                                                                    <a href="#">Urna pretium elit mauris cursus Curabitur at elit Vestibulum</a>
                                                                </h4>
                                                                <div class="blog-shortinfo">
                                                                    Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum...
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </div>
                                                <div class="owl-item swiper-slide">
                                                    <li class="blog-post item">
                                                        <div class="blog-item">
                                                            <div class="blog-image text-xs-center">
                                                                <a href="#" title="" class="link">
                                                                    <img src="{{asset('img/lg-b-5.jpg')}}" class="img-fluid" />
                                                                </a>
                                                            </div>
                                                            <div class="blog-content-wrap">
                                                                <h4 class="title">
                                                                    <a href="#">Urna pretium elit mauris cursus Curabitur at elit Vestibulum</a>
                                                                </h4>
                                                                <div class="blog-shortinfo">
                                                                    Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum...
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </div>
                                                <div class="owl-item swiper-slide">
                                                    <li class="blog-post item">
                                                        <div class="blog-item">
                                                            <div class="blog-image text-xs-center">
                                                                <a href="#" title="" class="link">
                                                                    <img src="{{asset('img/lg-b-5.jpg')}}" class="img-fluid" />
                                                                </a>
                                                            </div>
                                                            <div class="blog-content-wrap">
                                                                <h4 class="title">
                                                                    <a href="#">Urna pretium elit mauris cursus Curabitur at elit Vestibulum</a>
                                                                </h4>
                                                                <div class="blog-shortinfo">
                                                                    Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum...
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </div>
                                                <div class="owl-item swiper-slide">
                                                    <li class="blog-post item">
                                                        <div class="blog-item">
                                                            <div class="blog-image text-xs-center">
                                                                <a href="#" title="" class="link">
                                                                    <img src="{{asset('img/lg-b-5.jpg')}}" class="img-fluid" />
                                                                </a>
                                                            </div>
                                                            <div class="blog-content-wrap">
                                                                <h4 class="title">
                                                                    <a href="#">Urna pretium elit mauris cursus Curabitur at elit Vestibulum</a>
                                                                </h4>
                                                                <div class="blog-shortinfo">
                                                                    Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum...
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                        {{--  section 8 --}}
                        <section class="brands container" id="section_supplier">
                            <div id="spe_res">
                                <div class="products">
                                    <div class="customNavigation">
                                        <a class="btn prev brand_prev carousel-control-prev">&nbsp;<i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                                        <a class="btn next brand_next carousel-control-next">&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                    </div>
                                    <div id="brand_carousel_last" class="tm-carousel product_list swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{asset('img/donors1.jpg')}}" class="img-fluid mx-auto d-block">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{asset('img/donors2.jpg')}}" class="img-fluid mx-auto d-block">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{asset('img/donors3.jpg')}}" class="img-fluid mx-auto d-block">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{asset('img/donors4.jpg')}}" class="img-fluid mx-auto d-block">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{asset('img/donors5.jpg')}}" class="img-fluid mx-auto d-block">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{asset('img/donors1.jpg')}}" class="img-fluid mx-auto d-block">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{asset('img/donors2.jpg')}}" class="img-fluid mx-auto d-block">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{asset('img/donors3.jpg')}}" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                    </div>
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
    <script src="{{asset('js/contentHome.js')}}"></script>
@stop
