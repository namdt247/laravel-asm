<?php
/**
 * Created by PhpStorm.
 * User: namdt
 * Date: 8/3/20
 */
?>

@extends('frontend.layout_master')

@section('main-content')
    <div class="clearfix">
        <div style="text-align: center; margin: 20px 0 20px;">
            <div class="page-title-wrapper">
                <h1 class="page-title" id="page-title-heading" aria-labelledby="page-title-heading toolbar-amount">
                    <span class="base" data-ui-id="page-title-wrapper">Bàn</span></h1>
            </div>
        </div>
        <div class="page-main">
            <div class="columns_inner" style="display: block; padding-top: 20px; position: relative;">
                <div class="columns main" style="float: right; text-align: center; width: 73%">
                    <nav data-depth="2" class="breadcrumb hidden-sm-down">
                        <div class="container"><h1 class="h1">furniture </h1>
                            <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                    <a itemprop="item"
                                       href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php">
                                        <span itemprop="name">Home</span>
                                    </a>
                                    <meta itemprop="position" content="1">
                                </li>
                                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                    <a itemprop="item"
                                       href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=3&amp;controller=category&amp;id_lang=1">
                                        <span itemprop="name">furniture </span>
                                    </a>
                                    <meta itemprop="position" content="2">
                                </li>
                            </ol>
                        </div>
                    </nav>
                    <div class="block-category">
                        <div class="category-cover">
                            <img src="https://prestashop.templatemela.com/PRSADD11/PRS273/img/c/3-category_default.jpg" alt="">
                        </div>
                    </div>
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
                                        <a rel="nofollow" href="https://prestashop.templatemela.com/PRSADD11/PRS273/index.php?id_category=3&amp;controller=category&amp;id_lang=1&amp;order=product.position.asc" class="select-list current js-search-link">
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
                    <div class="products wrapper grid products-grid">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img
                                    src="https://baya.vn/media/catalog/product/cache/118c277d36880e995352bb5114dbca5e/v/e/verona_dining_table_oak_mdf_oak_veneer_uma_1071795_corner.jpg"
                                    alt="product" class="img-fluid">
                                <p>Bàn ăn</p>
                                <a href="#">PRINCETON</a>
                                <p>6.990.000</p>
                            </div>
                            <div class="col-4 text-center">
                                <img
                                    src="https://baya.vn/media/catalog/product/cache/118c277d36880e995352bb5114dbca5e/v/e/verona_dining_table_oak_mdf_oak_veneer_uma_1071795_corner.jpg"
                                    alt="product" class="img-fluid">
                                <p>Bàn ăn</p>
                                <a href="#">QATAR</a>
                                <p>2.990.000</p>
                            </div>
                            <div class="col-4 text-center">
                                <img
                                    src="https://baya.vn/media/catalog/product/cache/118c277d36880e995352bb5114dbca5e/v/e/verona_dining_table_oak_mdf_oak_veneer_uma_1071795_corner.jpg"
                                    alt="product" class="img-fluid">
                                <p>Bàn ăn</p>
                                <a href="#">VERONA</a>
                                <p>1.790.000</p>
                            </div>
                            <div class="col-4 text-center">
                                <img
                                    src="https://baya.vn/media/catalog/product/cache/118c277d36880e995352bb5114dbca5e/v/e/verona_dining_table_oak_mdf_oak_veneer_uma_1071795_corner.jpg"
                                    alt="product" class="img-fluid">
                                <p>Bàn ăn</p>
                                <a href="#">COBRA</a>
                                <p>6.490.000</p>
                            </div>
                            <div class="col-4 text-center">
                                <img
                                    src="https://baya.vn/media/catalog/product/cache/118c277d36880e995352bb5114dbca5e/v/e/verona_dining_table_oak_mdf_oak_veneer_uma_1071795_corner.jpg"
                                    alt="product" class="img-fluid">
                                <p>Bàn ăn</p>
                                <a href="#">PALL-MALL</a>
                                <p>1.990.000</p>
                            </div>
                            <div class="col-4 text-center">
                                <img
                                    src="https://baya.vn/media/catalog/product/cache/118c277d36880e995352bb5114dbca5e/v/e/verona_dining_table_oak_mdf_oak_veneer_uma_1071795_corner.jpg"
                                    alt="product" class="img-fluid">
                                <p>Bàn cafe</p>
                                <a href="#">TREVOR</a>
                                <p>2.990.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="left-column" class="col-xs-12 col-sm-4 col-md-3 hb-animate-element top-to-bottom">
                    <div class="block-categories block">
                        <h4 class="block_title hidden-md-down">
                            Danh mục sản phẩm
                        </h4>
                    </div>
                    <div id>
                        <ul class="category-sub-menu" style="list-style: none">
                            <li>
                                <a href="">Bàn</a>
                            </li>
                            <li>
                                <a href="">Ghế</a>
                            </li>
                            <li>
                                <a href="">Giường</a>
                            </li>
                            <li>
                                <a href="">Kệ</a>
                            </li>
                            <li>
                                <a href="">Gương</a>
                            </li>
                            <li>
                                <a href="">Tủ</a>
                            </li>
                            <li>
                                <a href="">Giá</a>
                            </li>
                            <li>
                                <a href="">Bộ bàn ăn</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

