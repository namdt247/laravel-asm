<?php
?>
@extends('frontend.layout_master')

@section('link-header')
    <link rel="stylesheet" href="/css/frontend/detail.css">
    <link rel="stylesheet" href="/Admin/plugins/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/Admin/plugins/swiper/swiper.min.css">
@stop
@section('main-content')
    <section id="wrapper">
        <div class="container">
            <div id="columns_inner">
                <div id="content-wrapper">
                    <section id="main">
                        <!-- 1 -->
                        <div class="row">
                            <div class="col-md-4 product_main_img">
                                <section class="page-content" id="content">
                                    <div id="" class="product-leftside">
                                        <ul class="product-flags">
                                            <li class="product-flag online-only">Online only</li>
                                            <li class="product-flag on-sale">On sale!</li>
                                            <li class="product-flag new">New</li>
                                        </ul>
                                        <div class="images-container">
                                            <div class="product-cover">
                                                <a href="#" data-fancybox="images">
                                                    <img class="js-qv-product-cover"
                                                         src="{{$prd->large_photo}}" style="width: 100%;" width="100"/>
                                                </a>
                                            </div>
                                            <div id="images-container" class="products swiper-container">
                                                <ul id="additional-carousel" class="carousel slide tm-carousel product_list swiper-wrapper">
                                                    <div class="owl-item swiper-slide">
                                                        <li class="thumb-container item">
                                                            <a href="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/8/28-home_default.jpg" data-fancybox="images">
                                                                <img class="thumb js-thumb" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/8/28-home_default.jpg"  width="100"/>
                                                            </a>
                                                        </li>
                                                    </div>

                                                    @foreach($prd->large_photos as $p)
                                                        <div class="owl-item swiper-slide">
                                                            <li class="thumb-container item">
                                                                <a href="#" data-fancybox="images">
                                                                    <img class="thumb js-thumb"
                                                                         src="{{$p}}"  width="100"/>
                                                                </a>
                                                            </li>
                                                        </div>
                                                    @endforeach
                                                </ul>
                                                <div class="customNavigation">
                                                    <a class="btn prev brand_prev carousel-control-prev" >&nbsp;<i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                                                    <a class="btn next brand_next carousel-control-next">&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-6 product_middle">
                                <h1 class="productpage_title" itemprop="name">{{$prd->name}}</h1>
                                <div class="hook-reviews">
                                    <div class="comments_note">
                                        <div class="star_content clearfix">
                                            <div class="star star_on"><i class="fa fa-star"></i></div>
                                            <div class="star star_on"><i class="fa fa-star"></i></div>
                                            <div class="star star_on"><i class="fa fa-star"></i></div>
                                            <div class="star star_on"><i class="fa fa-star"></i></div>
                                            <div class="star"><i class="fa fa-star"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-information">
                                    <div class="product-prices">
                                        <div class="product-price h5 has-discount">
                                            <div class="current-price">
                                                <span>{{number_format($prd->price)}} VND</span>
                                                <span class="discount discount-percentage">Sale off 20%</span>
                                            </div>
                                        </div>
                                        <div class="product-discount">
                                            <span class="regular-price">{{number_format($prd->price * 0.2 + $prd->price)}} vnđ</span>
                                        </div>
                                    </div>
                                    <div id="product-description-short-2" itemprop="description">
                                        <p>{{$prd->description}}</p>
                                    </div>
                                    <div class="product-actions">
                                        <form action="" method="post" id="add-to-cart-or-refresh">
                                            <div class="product-variants">
                                                <div class="clearfix product-variants-item">
                                                    <span class="control-label">Size</span>
                                                    <select class="form-control form-control-select" id="group_1">
                                                        <option value="1" title="S" selected="selected">S</option>
                                                        <option value="2" title="M">M</option>
                                                        <option value="3" title="L">L</option>
                                                    </select>
                                                </div>
                                                <div class="clearfix product-variants-item">
                                                    <span class="control-label">Color</span>
                                                    <ul id="group_2">
                                                        <li class="pull-xs-left input-container">
                                                            <label>
                                                                <input class="input-color" type="radio" data-product-attribute="2" name="group[2]" value="6" />
                                                                <span class="color" style="background-color: #cfc4a6;"><span class="sr-only">Taupe</span></span>
                                                            </label>
                                                        </li>
                                                        <li class="pull-xs-left input-container">
                                                            <label>
                                                                <input class="input-color" type="radio" data-product-attribute="2" name="group[2]" value="8" checked="checked" />
                                                                <span class="color" style="background-color: #ffffff;"><span class="sr-only">White</span></span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix product-variants-item">
                                                    <span class="control-label">Dimension</span>
                                                    <select class="form-control form-control-select" id="group_3" data-product-attribute="3" name="group[3]">
                                                        <option value="19" title="40x60cm">40x60cm</option>
                                                        <option value="20" title="60x90cm" selected="selected">60x90cm</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="product-add-to-cart clearfix">
                                                <span class="control-label">Quantity</span>

                                                <div class="product-quantity">
                                                    <div class="qty">
                                                        <div class="input-group bootstrap-touchspin">
                                                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                                            <input type="number" name="qty" id="quantity_wanted" min="0" value="1" class="input-group form-control" min="1" aria-label="Quantity" style="display: block;" />
                                                        </div>
                                                    </div>

                                                    <div class="add">
                                                        <button class="btn btn-sm add-to-cart" type="submit">
                                                            <i class="fa fa-shopping-cart"></i>Add to cart
                                                        </button>

                                                        <span id="product-availability"> </span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>

                                                <p class="product-minimal-quantity"></p>
                                            </div>

                                            <div class="product-additional-info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="right_cms col-md-2">
                                <div id="tmrightbanner">
                                    <ul class="hidden-md-down">
                                        <li class="slide tmrightbanner-container">
                                            <a href="#" title="RightBanner 1">
                                                <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/modules/tm_rightbanner/views/img/right-banner-1.jpg" alt="RightBanner 1" title="RightBanner 1" />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div id="tmrightbanner1">
                                    <ul class="hidden-md-down">
                                        <li class="slide tmrightbanner1-container">
                                            <a href="#" title="RightBanner1 1">
                                                <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/modules/tm_rightbanner1/views/img/right-banner-1.jpg" alt="RightBanner1 1" title="RightBanner1 1" />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- 2 -->
                        <section class="product-tabcontent">
                            <div class="tabs">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#description">Mô tả</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#product-details">Chi tiết sản phẩm</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#rating">Đánh giá</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="tab-content">
                                    <!-- mô tả -->
                                    <div class="tab-pane active" id="description">
                                        <div class="product-description">
                                            <p>
                                                {{$prd->description}}
                                            </p>
                                        </div>
                                    </div>

                                    <!-- chi tiết sản phẩm -->
                                    <div class="tab-pane fade clearfix" id="product-details" role="tabpanel">
                                        <div class="product-manufacturer" style="float: left;padding-right: 30px;">
                                            <a href="#">
                                                <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/m/1.jpg" class="img img-thumbnail manufacturer-logo"/>
                                            </a>
                                        </div>
                                        <div class="detail_content" style="float: left;">
                                            <div class="product-reference">
                                                <label class="label">Sản phẩm: </label>
                                                <span itemprop="sku">{{$prd->name}}</span>
                                            </div>
                                            <div class="product-reference">
                                                <label class="label">Kích cỡ: </label>
                                                <span itemprop="sku">L45xW39xH60</span>
                                            </div>
                                            <div class="product-reference">
                                                <label class="label">Màu sắc: </label>
                                                <span itemprop="sku">Nhiều màu</span>
                                            </div>
                                            <div class="product-reference">
                                                <label class="label">Chất liệu: </label>
                                                <span itemprop="sku">Sồi veneer / Gỗ cao su / MDF</span>
                                            </div>
                                            <div class="product-reference">
                                                <label class="label">Xuất xứ: </label>
                                                <span itemprop="sku">Việt Nam</span>
                                            </div>
                                            <div class="product-reference">
                                                <label class="label">Đơn vị	: </label>
                                                <span itemprop="sku">PCS</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- đánh giá -->
                                    <div class="tab-pane fade in" id="rating">
                                        <div id="productCommentsBlock">
                                            <div class="tabs">
                                                <div id="product_comments_block_tab">
                                                    <div class="comment clearfix" itemprop="review" itemscope="" itemtype="https://schema.org/Review">
                                                        <div class="comment_author">
                                                            <span>Grade&nbsp;</span>
                                                            <div class="star_content clearfix" itemprop="reviewRating" itemscope="" itemtype="https://schema.org/Rating">
                                                                <div class="star star_on"></div>
                                                                <div class="star star_on"></div>
                                                                <div class="star star_on"></div>
                                                                <div class="star star_on"></div>
                                                                <div class="star"></div>
                                                                <meta itemprop="worstRating" content="0" />
                                                                <meta itemprop="ratingValue" content="4" />
                                                                <meta itemprop="bestRating" content="5" />
                                                            </div>
                                                            <div class="comment_author_infos">
                                                                <strong itemprop="author">Ipsum</strong><br />
                                                                <em>07/17/2019</em>
                                                                <meta itemprop="datePublished" content="07/17/2019" />
                                                            </div>
                                                        </div>
                                                        <div class="comment_details">
                                                            <h4 class="title_block" itemprop="name">best qulity</h4>
                                                            <p itemprop="reviewBody">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula.
                                                            </p>
                                                            <ul></ul>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix pull-left">
                                                        <a class="open-comment-form btn btn-sm" href="#new_comment_form">Write your review</a>
                                                    </div>
                                                    <div id="new_comment_form_ok" class="alert alert-success" style="display: none; padding: 15px 25px;"></div>
                                                </div>
                                            </div>

                                            <!-- Fancybox -->
                                            <div style="display: none;">
                                                <div id="new_comment_form">
                                                    <form id="id_new_comment_form" action="#">
                                                        <h2 class="title">Write your review</h2>
                                                        <div class="product clearfix">
                                                            <div class="product_desc">
                                                                <p class="product_name"><strong>Suspendisse Massa Nullaqm vulputate dictum</strong></p>
                                                                <p>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in
                                                                    ligula.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="new_comment_form_content">
                                                            <h2>Write your review</h2>
                                                            <div id="new_comment_form_error" class="error" style="display: none; padding: 15px 25px;">
                                                                <ul></ul>
                                                            </div>
                                                            <ul id="criterions_list">
                                                                <li>
                                                                    <label>Quality</label>
                                                                    <div class="star_content">
                                                                        <input type="hidden" name="criterion[1]" value="5" />
                                                                        <div class="cancel"><a title="Cancel Rating"></a></div>
                                                                        <div class="star star_on"><a title="1">1</a></div>
                                                                        <div class="star star_on"><a title="2">2</a></div>
                                                                        <div class="star star_on"><a title="3">3</a></div>
                                                                        <div class="star star_on"><a title="4">4</a></div>
                                                                        <div class="star star_on"><a title="5">5</a></div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </li>
                                                            </ul>
                                                            <label for="comment_title">Title for your review<sup class="required">*</sup></label>
                                                            <input id="comment_title" name="title" type="text" value="" />

                                                            <label for="content">Your review<sup class="required">*</sup></label>
                                                            <textarea id="content" name="content"></textarea>

                                                            <label>Your name<sup class="required">*</sup></label>
                                                            <input id="commentCustomerName" name="customer_name" type="text" value="" />

                                                            <div id="new_comment_form_footer">
                                                                <input id="id_product_comment_send" name="id_product" type="hidden" value="2" />
                                                                <p class="row required"><sup>*</sup> Required fields</p>
                                                                <p class="fr">
                                                                    <input
                                                                        onchange="if($(this).is(':checked')){$('#submitNewMessage').removeClass('gdpr_disabled'); $('#submitNewMessage').removeAttr('disabled'); rebindClickButton();}else{$('#submitNewMessage').addClass('gdpr_disabled'); $('#submitNewMessage').off('click'); $('#submitNewMessage').attr('disabled', 1); }"
                                                                        id="gdpr_checkbox"
                                                                        type="checkbox"
                                                                    />

                                                                    I accept <a target="_blank" href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_cms=1&amp;controller=cms&amp;id_lang=1">privacy policy</a> rules

                                                                    <button disabled="" class="btn btn-primary gdpr_disabled" id="submitNewMessage" name="submitMessage" type="submit">Send</button>&nbsp; or&nbsp;<a href="#" onclick="$.fancybox.close();">Cancel</a>
                                                                </p>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- có thể bạn cũng thích -->
                        <section id="products_youLike" class="product-accessories clearfix featured-products">
                            <div class="tab-main-title">
                                <h2 class="products-section-title text-uppercase">Có thể bạn cũng thích</h2>
                            </div>
                            <div id="spe_res">
                                <div id="youLike" class="products swiper-container">
                                    <ul id="favorite_product" class="carousel slide tm-carousel product_list swiper-wrapper">
                                        @foreach($list_product as $prd)
                                        <div class="owl-item swiper-slide">
                                            <li class="item">
                                                <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">
                                                        <a href="{{ route('frontend.detailProduct', $prd->id) }}" class="thumbnail product-thumbnail">
                                                            <img src="{{ $prd->large_photo }}" alt="product"/>
                                                            <img class="replace-2x img_1 img-responsive"
                                                                 src="{{ $prd->large_photo2 }}"/>
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
										                <a href="{{ route('frontend.detailProduct', $prd->id) }}" > {{$prd->name}} </a>
										            </span>
                                                        <div class="product-price-and-shipping">
                                                            <span class="sr-only">Price</span>
                                                            <span itemprop="price" class="price">{{number_format($prd->price)}} VNĐ</span>
                                                            <span class="sr-only">Regular price</span>
                                                            <span class="regular-price">{{number_format($prd->price * 0.2 + $prd->price)}} vnđ</span>
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
                                        </div>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="customNavigation">
                                <a class="btn prev brand_prev carousel-control-prev" href="#favorite_product" role="button" data-slide="prev">&nbsp;<i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                                <a class="btn next brand_next carousel-control-next" href="#favorite_product" role="button" data-slide="next">&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </section>
                        <!-- Sản phẩm đi kèm -->
{{--                        <section id="products_included" class="product-accessories clearfix featured-products">--}}
{{--                            <div class="tab-main-title">--}}
{{--                                <h2 class="products-section-title text-uppercase">Sản phẩm đi kèm</h2>--}}
{{--                            </div>--}}
{{--                            <div id="spe_res">--}}
{{--                                <div id="productIncluded" class="products swiper-container">--}}
{{--                                    <ul id="products_included" class="carousel slide tm-carousel product_list swiper-wrapper">--}}
{{--                                        <div class="owl-item swiper-slide">--}}
{{--                                            <li class="item">--}}
{{--                                                <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope="" itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="thumbnail-container">--}}
{{--                                                        <a href="#" class="thumbnail product-thumbnail">--}}
{{--                                                            <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/7/27-home_default.jpg" alt=""/>--}}
{{--                                                            <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/2/32-home_default.jpg"/>--}}
{{--                                                        </a>--}}
{{--                                                        <ul class="product-flags">--}}
{{--                                                            <li class="on-sale">On sale!</li>--}}
{{--                                                            <li class="new">New</li>--}}
{{--                                                            <li class="discount_type_flag">--}}
{{--                                                                <span class="discount-percentage">-20%</span>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product-description">--}}
{{--                                                        <div class="comments_note">--}}
{{--                                                            <div class="star_content clearfix">--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <span class="h3 product-title" itemprop="name">--}}
{{--										                <a href="#" > Curabitur Dolor NuncPellentesque augue </a>--}}
{{--										            </span>--}}
{{--                                                        <div class="product-price-and-shipping">--}}
{{--                                                            <span class="sr-only">Price</span>--}}
{{--                                                            <span itemprop="price" class="price">$19.12</span>--}}
{{--                                                            <span class="sr-only">Regular price</span>--}}
{{--                                                            <span class="regular-price">$23.90</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-actions-main">--}}
{{--                                                            <form action="" method="post" class="add-to-cart-or-refresh">--}}
{{--                                                                <button class="btn btn-sm add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i> Add to cart</button>--}}
{{--                                                            </form>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </article>--}}
{{--                                            </li>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item swiper-slide">--}}
{{--                                            <li class="item">--}}
{{--                                                <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope="" itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="thumbnail-container">--}}
{{--                                                        <a href="#" class="thumbnail product-thumbnail">--}}
{{--                                                            <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/7/27-home_default.jpg" alt=""/>--}}
{{--                                                            <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/2/32-home_default.jpg"/>--}}
{{--                                                        </a>--}}
{{--                                                        <ul class="product-flags">--}}
{{--                                                            <li class="on-sale">On sale!</li>--}}
{{--                                                            <li class="new">New</li>--}}
{{--                                                            <li class="discount_type_flag">--}}
{{--                                                                <span class="discount-percentage">-20%</span>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product-description">--}}
{{--                                                        <div class="comments_note">--}}
{{--                                                            <div class="star_content clearfix">--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <span class="h3 product-title" itemprop="name">--}}
{{--										                <a href="#" > Curabitur Dolor NuncPellentesque augue </a>--}}
{{--										            </span>--}}
{{--                                                        <div class="product-price-and-shipping">--}}
{{--                                                            <span class="sr-only">Price</span>--}}
{{--                                                            <span itemprop="price" class="price">$19.12</span>--}}
{{--                                                            <span class="sr-only">Regular price</span>--}}
{{--                                                            <span class="regular-price">$23.90</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-actions-main">--}}
{{--                                                            <form action="" method="post" class="add-to-cart-or-refresh">--}}
{{--                                                                <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />--}}
{{--                                                                <input type="hidden" name="id_product" value="1" class="product_page_product_id" />--}}
{{--                                                                <input type="hidden" name="id_customization" value="0" class="product_customization_id" />--}}
{{--                                                                <button class="btn btn-sm add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i> Add to cart</button>--}}
{{--                                                            </form>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </article>--}}
{{--                                            </li>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item swiper-slide">--}}
{{--                                            <li class="item">--}}
{{--                                                <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope="" itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="thumbnail-container">--}}
{{--                                                        <a href="#" class="thumbnail product-thumbnail">--}}
{{--                                                            <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/7/27-home_default.jpg" alt=""/>--}}
{{--                                                            <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/2/32-home_default.jpg"/>--}}
{{--                                                        </a>--}}
{{--                                                        <ul class="product-flags">--}}
{{--                                                            <li class="on-sale">On sale!</li>--}}
{{--                                                            <li class="new">New</li>--}}
{{--                                                            <li class="discount_type_flag">--}}
{{--                                                                <span class="discount-percentage">-20%</span>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product-description">--}}
{{--                                                        <div class="comments_note">--}}
{{--                                                            <div class="star_content clearfix">--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <span class="h3 product-title" itemprop="name">--}}
{{--										                <a href="#" > Curabitur Dolor NuncPellentesque augue </a>--}}
{{--										            </span>--}}
{{--                                                        <div class="product-price-and-shipping">--}}
{{--                                                            <span class="sr-only">Price</span>--}}
{{--                                                            <span itemprop="price" class="price">$19.12</span>--}}
{{--                                                            <span class="sr-only">Regular price</span>--}}
{{--                                                            <span class="regular-price">$23.90</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-actions-main">--}}
{{--                                                            <form action="" method="post" class="add-to-cart-or-refresh">--}}
{{--                                                                <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />--}}
{{--                                                                <input type="hidden" name="id_product" value="1" class="product_page_product_id" />--}}
{{--                                                                <input type="hidden" name="id_customization" value="0" class="product_customization_id" />--}}
{{--                                                                <button class="btn btn-sm add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i> Add to cart</button>--}}
{{--                                                            </form>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </article>--}}
{{--                                            </li>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item swiper-slide">--}}
{{--                                            <li class="item">--}}
{{--                                                <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope="" itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="thumbnail-container">--}}
{{--                                                        <a href="#" class="thumbnail product-thumbnail">--}}
{{--                                                            <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/7/27-home_default.jpg" alt=""/>--}}
{{--                                                            <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/2/32-home_default.jpg"/>--}}
{{--                                                        </a>--}}
{{--                                                        <ul class="product-flags">--}}
{{--                                                            <li class="on-sale">On sale!</li>--}}
{{--                                                            <li class="new">New</li>--}}
{{--                                                            <li class="discount_type_flag">--}}
{{--                                                                <span class="discount-percentage">-20%</span>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product-description">--}}
{{--                                                        <div class="comments_note">--}}
{{--                                                            <div class="star_content clearfix">--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <span class="h3 product-title" itemprop="name">--}}
{{--										                <a href="#" > Curabitur Dolor NuncPellentesque augue </a>--}}
{{--										            </span>--}}
{{--                                                        <div class="product-price-and-shipping">--}}
{{--                                                            <span class="sr-only">Price</span>--}}
{{--                                                            <span itemprop="price" class="price">$19.12</span>--}}
{{--                                                            <span class="sr-only">Regular price</span>--}}
{{--                                                            <span class="regular-price">$23.90</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-actions-main">--}}
{{--                                                            <form action="" method="post" class="add-to-cart-or-refresh">--}}
{{--                                                                <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />--}}
{{--                                                                <input type="hidden" name="id_product" value="1" class="product_page_product_id" />--}}
{{--                                                                <input type="hidden" name="id_customization" value="0" class="product_customization_id" />--}}
{{--                                                                <button class="btn btn-sm add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i> Add to cart</button>--}}
{{--                                                            </form>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </article>--}}
{{--                                            </li>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item swiper-slide">--}}
{{--                                            <li class="item">--}}
{{--                                                <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope="" itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="thumbnail-container">--}}
{{--                                                        <a href="#" class="thumbnail product-thumbnail">--}}
{{--                                                            <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/7/27-home_default.jpg" alt=""/>--}}
{{--                                                            <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/2/32-home_default.jpg"/>--}}
{{--                                                        </a>--}}
{{--                                                        <ul class="product-flags">--}}
{{--                                                            <li class="on-sale">On sale!</li>--}}
{{--                                                            <li class="new">New</li>--}}
{{--                                                            <li class="discount_type_flag">--}}
{{--                                                                <span class="discount-percentage">-20%</span>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product-description">--}}
{{--                                                        <div class="comments_note">--}}
{{--                                                            <div class="star_content clearfix">--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <span class="h3 product-title" itemprop="name">--}}
{{--										                <a href="#" > Curabitur Dolor NuncPellentesque augue </a>--}}
{{--										            </span>--}}
{{--                                                        <div class="product-price-and-shipping">--}}
{{--                                                            <span class="sr-only">Price</span>--}}
{{--                                                            <span itemprop="price" class="price">$19.12</span>--}}
{{--                                                            <span class="sr-only">Regular price</span>--}}
{{--                                                            <span class="regular-price">$23.90</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-actions-main">--}}
{{--                                                            <form action="" method="post" class="add-to-cart-or-refresh">--}}
{{--                                                                <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />--}}
{{--                                                                <input type="hidden" name="id_product" value="1" class="product_page_product_id" />--}}
{{--                                                                <input type="hidden" name="id_customization" value="0" class="product_customization_id" />--}}
{{--                                                                <button class="btn btn-sm add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i> Add to cart</button>--}}
{{--                                                            </form>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </article>--}}
{{--                                            </li>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item swiper-slide">--}}
{{--                                            <li class="item">--}}
{{--                                                <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope="" itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="thumbnail-container">--}}
{{--                                                        <a href="#" class="thumbnail product-thumbnail">--}}
{{--                                                            <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/7/27-home_default.jpg" alt=""/>--}}
{{--                                                            <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/2/32-home_default.jpg"/>--}}
{{--                                                        </a>--}}
{{--                                                        <ul class="product-flags">--}}
{{--                                                            <li class="on-sale">On sale!</li>--}}
{{--                                                            <li class="new">New</li>--}}
{{--                                                            <li class="discount_type_flag">--}}
{{--                                                                <span class="discount-percentage">-20%</span>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product-description">--}}
{{--                                                        <div class="comments_note">--}}
{{--                                                            <div class="star_content clearfix">--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <span class="h3 product-title" itemprop="name">--}}
{{--										                <a href="#" > Curabitur Dolor NuncPellentesque augue </a>--}}
{{--										            </span>--}}
{{--                                                        <div class="product-price-and-shipping">--}}
{{--                                                            <span class="sr-only">Price</span>--}}
{{--                                                            <span itemprop="price" class="price">$19.12</span>--}}
{{--                                                            <span class="sr-only">Regular price</span>--}}
{{--                                                            <span class="regular-price">$23.90</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-actions-main">--}}
{{--                                                            <form action="" method="post" class="add-to-cart-or-refresh">--}}
{{--                                                                <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />--}}
{{--                                                                <input type="hidden" name="id_product" value="1" class="product_page_product_id" />--}}
{{--                                                                <input type="hidden" name="id_customization" value="0" class="product_customization_id" />--}}
{{--                                                                <button class="btn btn-sm add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i> Add to cart</button>--}}
{{--                                                            </form>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </article>--}}
{{--                                            </li>--}}
{{--                                        </div>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="customNavigation">--}}
{{--                                <a class="btn prev brand_prev carousel-control-prev" href="#products_included" role="button" data-slide="prev">&nbsp;<i class="fa fa-chevron-left" aria-hidden="true"></i></a>--}}
{{--                                <a class="btn next brand_next carousel-control-next" href="#products_included" role="button" data-slide="next">&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></a>--}}
{{--                            </div>--}}
{{--                        </section>--}}
{{--                        <!-- Sản phẩm tương tự -->--}}
{{--                        <section id="products_similar" class="product-accessories clearfix featured-products">--}}
{{--                            <div class="tab-main-title">--}}
{{--                                <h2 class="products-section-title text-uppercase">Sản phẩm tương tự</h2>--}}
{{--                            </div>--}}
{{--                            <div id="spe_res">--}}
{{--                                <div id="similar" class="products swiper-container">--}}
{{--                                    <ul id="similar_product" class="carousel slide tm-carousel product_list swiper-wrapper ">--}}
{{--                                        <div class="owl-item swiper-slide">--}}
{{--                                            <li class="item">--}}
{{--                                                <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope="" itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="thumbnail-container">--}}
{{--                                                        <a href="#" class="thumbnail product-thumbnail">--}}
{{--                                                            <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/7/27-home_default.jpg" alt=""/>--}}
{{--                                                            <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/2/32-home_default.jpg"/>--}}
{{--                                                        </a>--}}
{{--                                                        <ul class="product-flags">--}}
{{--                                                            <li class="on-sale">On sale!</li>--}}
{{--                                                            <li class="new">New</li>--}}
{{--                                                            <li class="discount_type_flag">--}}
{{--                                                                <span class="discount-percentage">-20%</span>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product-description">--}}
{{--                                                        <div class="comments_note">--}}
{{--                                                            <div class="star_content clearfix">--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <span class="h3 product-title" itemprop="name">--}}
{{--										                <a href="#" > Curabitur Dolor NuncPellentesque augue </a>--}}
{{--										            </span>--}}
{{--                                                        <div class="product-price-and-shipping">--}}
{{--                                                            <span class="sr-only">Price</span>--}}
{{--                                                            <span itemprop="price" class="price">$19.12</span>--}}
{{--                                                            <span class="sr-only">Regular price</span>--}}
{{--                                                            <span class="regular-price">$23.90</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-actions-main">--}}
{{--                                                            <form action="" method="post" class="add-to-cart-or-refresh">--}}

{{--                                                                <button class="btn btn-sm add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i> Add to cart</button>--}}
{{--                                                            </form>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </article>--}}
{{--                                            </li>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item swiper-slide">--}}
{{--                                            <li class="item">--}}
{{--                                                <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope="" itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="thumbnail-container">--}}
{{--                                                        <a href="#" class="thumbnail product-thumbnail">--}}
{{--                                                            <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/7/27-home_default.jpg" alt=""/>--}}
{{--                                                            <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/2/32-home_default.jpg"/>--}}
{{--                                                        </a>--}}
{{--                                                        <ul class="product-flags">--}}
{{--                                                            <li class="on-sale">On sale!</li>--}}
{{--                                                            <li class="new">New</li>--}}
{{--                                                            <li class="discount_type_flag">--}}
{{--                                                                <span class="discount-percentage">-20%</span>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product-description">--}}
{{--                                                        <div class="comments_note">--}}
{{--                                                            <div class="star_content clearfix">--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <span class="h3 product-title" itemprop="name">--}}
{{--										                <a href="#" > Curabitur Dolor NuncPellentesque augue </a>--}}
{{--										            </span>--}}
{{--                                                        <div class="product-price-and-shipping">--}}
{{--                                                            <span class="sr-only">Price</span>--}}
{{--                                                            <span itemprop="price" class="price">$19.12</span>--}}
{{--                                                            <span class="sr-only">Regular price</span>--}}
{{--                                                            <span class="regular-price">$23.90</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-actions-main">--}}
{{--                                                            <form action="" method="post" class="add-to-cart-or-refresh">--}}
{{--                                                                <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />--}}
{{--                                                                <input type="hidden" name="id_product" value="1" class="product_page_product_id" />--}}
{{--                                                                <input type="hidden" name="id_customization" value="0" class="product_customization_id" />--}}
{{--                                                                <button class="btn btn-sm add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i> Add to cart</button>--}}
{{--                                                            </form>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </article>--}}
{{--                                            </li>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item swiper-slide">--}}
{{--                                            <li class="item">--}}
{{--                                                <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope="" itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="thumbnail-container">--}}
{{--                                                        <a href="#" class="thumbnail product-thumbnail">--}}
{{--                                                            <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/7/27-home_default.jpg" alt=""/>--}}
{{--                                                            <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/2/32-home_default.jpg"/>--}}
{{--                                                        </a>--}}
{{--                                                        <ul class="product-flags">--}}
{{--                                                            <li class="on-sale">On sale!</li>--}}
{{--                                                            <li class="new">New</li>--}}
{{--                                                            <li class="discount_type_flag">--}}
{{--                                                                <span class="discount-percentage">-20%</span>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product-description">--}}
{{--                                                        <div class="comments_note">--}}
{{--                                                            <div class="star_content clearfix">--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <span class="h3 product-title" itemprop="name">--}}
{{--										                <a href="#" > Curabitur Dolor NuncPellentesque augue </a>--}}
{{--										            </span>--}}
{{--                                                        <div class="product-price-and-shipping">--}}
{{--                                                            <span class="sr-only">Price</span>--}}
{{--                                                            <span itemprop="price" class="price">$19.12</span>--}}
{{--                                                            <span class="sr-only">Regular price</span>--}}
{{--                                                            <span class="regular-price">$23.90</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-actions-main">--}}
{{--                                                            <form action="" method="post" class="add-to-cart-or-refresh">--}}
{{--                                                                <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />--}}
{{--                                                                <input type="hidden" name="id_product" value="1" class="product_page_product_id" />--}}
{{--                                                                <input type="hidden" name="id_customization" value="0" class="product_customization_id" />--}}
{{--                                                                <button class="btn btn-sm add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i> Add to cart</button>--}}
{{--                                                            </form>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </article>--}}
{{--                                            </li>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item swiper-slide">--}}
{{--                                            <li class="item">--}}
{{--                                                <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope="" itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="thumbnail-container">--}}
{{--                                                        <a href="#" class="thumbnail product-thumbnail">--}}
{{--                                                            <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/7/27-home_default.jpg" alt=""/>--}}
{{--                                                            <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/2/32-home_default.jpg"/>--}}
{{--                                                        </a>--}}
{{--                                                        <ul class="product-flags">--}}
{{--                                                            <li class="on-sale">On sale!</li>--}}
{{--                                                            <li class="new">New</li>--}}
{{--                                                            <li class="discount_type_flag">--}}
{{--                                                                <span class="discount-percentage">-20%</span>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product-description">--}}
{{--                                                        <div class="comments_note">--}}
{{--                                                            <div class="star_content clearfix">--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <span class="h3 product-title" itemprop="name">--}}
{{--										                <a href="#" > Curabitur Dolor NuncPellentesque augue </a>--}}
{{--										            </span>--}}
{{--                                                        <div class="product-price-and-shipping">--}}
{{--                                                            <span class="sr-only">Price</span>--}}
{{--                                                            <span itemprop="price" class="price">$19.12</span>--}}
{{--                                                            <span class="sr-only">Regular price</span>--}}
{{--                                                            <span class="regular-price">$23.90</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-actions-main">--}}
{{--                                                            <form action="" method="post" class="add-to-cart-or-refresh">--}}
{{--                                                                <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />--}}
{{--                                                                <input type="hidden" name="id_product" value="1" class="product_page_product_id" />--}}
{{--                                                                <input type="hidden" name="id_customization" value="0" class="product_customization_id" />--}}
{{--                                                                <button class="btn btn-sm add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i> Add to cart</button>--}}
{{--                                                            </form>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </article>--}}
{{--                                            </li>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item swiper-slide">--}}
{{--                                            <li class="item">--}}
{{--                                                <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope="" itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="thumbnail-container">--}}
{{--                                                        <a href="#" class="thumbnail product-thumbnail">--}}
{{--                                                            <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/7/27-home_default.jpg" alt=""/>--}}
{{--                                                            <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/2/32-home_default.jpg"/>--}}
{{--                                                        </a>--}}
{{--                                                        <ul class="product-flags">--}}
{{--                                                            <li class="on-sale">On sale!</li>--}}
{{--                                                            <li class="new">New</li>--}}
{{--                                                            <li class="discount_type_flag">--}}
{{--                                                                <span class="discount-percentage">-20%</span>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product-description">--}}
{{--                                                        <div class="comments_note">--}}
{{--                                                            <div class="star_content clearfix">--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <span class="h3 product-title" itemprop="name">--}}
{{--										                <a href="#" > Curabitur Dolor NuncPellentesque augue </a>--}}
{{--										            </span>--}}
{{--                                                        <div class="product-price-and-shipping">--}}
{{--                                                            <span class="sr-only">Price</span>--}}
{{--                                                            <span itemprop="price" class="price">$19.12</span>--}}
{{--                                                            <span class="sr-only">Regular price</span>--}}
{{--                                                            <span class="regular-price">$23.90</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-actions-main">--}}
{{--                                                            <form action="" method="post" class="add-to-cart-or-refresh">--}}
{{--                                                                <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />--}}
{{--                                                                <input type="hidden" name="id_product" value="1" class="product_page_product_id" />--}}
{{--                                                                <input type="hidden" name="id_customization" value="0" class="product_customization_id" />--}}
{{--                                                                <button class="btn btn-sm add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i> Add to cart</button>--}}
{{--                                                            </form>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </article>--}}
{{--                                            </li>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item swiper-slide">--}}
{{--                                            <li class="item">--}}
{{--                                                <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope="" itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="thumbnail-container">--}}
{{--                                                        <a href="#" class="thumbnail product-thumbnail">--}}
{{--                                                            <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/2/7/27-home_default.jpg" alt=""/>--}}
{{--                                                            <img class="replace-2x img_1 img-responsive" src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/p/3/2/32-home_default.jpg"/>--}}
{{--                                                        </a>--}}
{{--                                                        <ul class="product-flags">--}}
{{--                                                            <li class="on-sale">On sale!</li>--}}
{{--                                                            <li class="new">New</li>--}}
{{--                                                            <li class="discount_type_flag">--}}
{{--                                                                <span class="discount-percentage">-20%</span>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product-description">--}}
{{--                                                        <div class="comments_note">--}}
{{--                                                            <div class="star_content clearfix">--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                                <div class="star star_on"><i class="fa fa-star"></i></div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <span class="h3 product-title" itemprop="name">--}}
{{--										                <a href="#" > Curabitur Dolor NuncPellentesque augue </a>--}}
{{--										            </span>--}}
{{--                                                        <div class="product-price-and-shipping">--}}
{{--                                                            <span class="sr-only">Price</span>--}}
{{--                                                            <span itemprop="price" class="price">$19.12</span>--}}
{{--                                                            <span class="sr-only">Regular price</span>--}}
{{--                                                            <span class="regular-price">$23.90</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-actions-main">--}}
{{--                                                            <form action="" method="post" class="add-to-cart-or-refresh">--}}
{{--                                                                <input type="hidden" name="token" value="75d588bed716bb5ab0bb3241a08ab68c" />--}}
{{--                                                                <input type="hidden" name="id_product" value="1" class="product_page_product_id" />--}}
{{--                                                                <input type="hidden" name="id_customization" value="0" class="product_customization_id" />--}}
{{--                                                                <button class="btn btn-sm add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i> Add to cart</button>--}}
{{--                                                            </form>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </article>--}}
{{--                                            </li>--}}
{{--                                        </div>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="customNavigation">--}}
{{--                                <a class="btn prev brand_prev carousel-control-prev">&nbsp;<i class="fa fa-chevron-left" aria-hidden="true"></i></a>--}}
{{--                                <a class="btn next brand_next carousel-control-next">&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></a>--}}
{{--                            </div>--}}
{{--                        </section>--}}
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
