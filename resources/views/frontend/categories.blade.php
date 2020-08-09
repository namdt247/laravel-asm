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
        <div class="page-main"
             style="box-sizing: border-box; margin-left: auto; margin-right: auto; width: 1072px; padding-left: 20px; padding-right: 20px;">
            <div class="columns" style="display: block; padding-top: 20px; position: relative;">
                <div class="columns main" style="float: right; text-align: center; width: 73%">
                    <div class="products wrapper grid products-grid">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img
                                    src="https://res.cloudinary.com/bigbignoobbb/image/upload/v1596073392/ga8jhn0ffv1ji8tspwar.jpg"
                                    alt="product" class="img-fluid">
                                <p>Bàn ăn</p>
                                <a href="#">PRINCETON</a>
                                <p>6.990.000</p>
                            </div>
                            <div class="col-4 text-center">
                                <img
                                    src="https://res.cloudinary.com/bigbignoobbb/image/upload/v1596075712/rujgmrwg4jnhhypmv10f.jpg"
                                    alt="product" class="img-fluid">
                                <p>Bàn ăn</p>
                                <a href="#">QATAR</a>
                                <p>2.990.000</p>
                            </div>
                            <div class="col-4 text-center">
                                <img
                                    src="https://res.cloudinary.com/bigbignoobbb/image/upload/v1596075903/tda5opepgkdrrzxwaupv.jpg"
                                    alt="product" class="img-fluid">
                                <p>Bàn ăn</p>
                                <a href="#">VERONA</a>
                                <p>1.790.000</p>
                            </div>
                            <div class="col-4 text-center">
                                <img
                                    src="https://res.cloudinary.com/bigbignoobbb/image/upload/v1596076637/kqunzglwkz3eqh4b5tvy.jpg"
                                    alt="product" class="img-fluid">
                                <p>Bàn ăn</p>
                                <a href="#">COBRA</a>
                                <p>6.490.000</p>
                            </div>
                            <div class="col-4 text-center">
                                <img
                                    src="https://res.cloudinary.com/bigbignoobbb/image/upload/v1596077312/tlnpruygvm1atpvvfivx.jpg"
                                    alt="product" class="img-fluid">
                                <p>Bàn ăn</p>
                                <a href="#">PALL-MALL</a>
                                <p>1.990.000</p>
                            </div>
                            <div class="col-4 text-center">
                                <img
                                    src="https://res.cloudinary.com/bigbignoobbb/image/upload/v1596077480/csm9wrzxmcxzpsbyamhg.jpg"
                                    alt="product" class="img-fluid">
                                <p>Bàn cafe</p>
                                <a href="#">TREVOR</a>
                                <p>2.990.000</p>
                            </div>
                            <div class="col-4 text-center">
                                <img
                                    src="https://res.cloudinary.com/bigbignoobbb/image/upload/v1596077791/lpeqhcr9dnanp818i5lx.jpg"
                                    alt="product" class="img-fluid">
                                <p>Bàn cafe</p>
                                <a href="#">MANILOW</a>
                                <p>2.990.000</p>
                            </div>
                            <div class="col-4 text-center">
                                <img
                                    src="https://res.cloudinary.com/bigbignoobbb/image/upload/v1596078559/u85gm3uh2nocqcbpogsq.jpg"
                                    alt="product" class="img-fluid">
                                <p>Bàn cafe</p>
                                <a href="#">SUECIA</a>
                                <p>6.990.000</p>
                            </div>
                            <div class="col-4 text-center">
                                <img
                                    src="https://res.cloudinary.com/bigbignoobbb/image/upload/v1596078715/insdneo5j5qeezxkuh2p.jpg"
                                    alt="product" class="img-fluid">
                                <p>Bàn ăn</p>
                                <a href="#">MISSION</a>
                                <p>1.490.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar sidebar-main"
                     style="width: 23.3%; padding-right: 0; font-family: 'Futura','Helvetica Neue',Helvetica,Arial,sans-serif; font-style: normal; font-weight: 400; line-height: 1.42857143; letter-spacing: .5px; ">
                    <div class="sidebar sidebar-main">
                        <div class="block filter">
                            <div class="block-content filter-content">
                                <dl class="filter-options" id="narrow-by-list">
                                    <dt role="heading" aria-level="3" class="filter-options-title category-filter-title"
                                        style=" font-size: 13px; letter-spacing: 1.6px; line-height: 17px; text-transform: uppercase; font-weight: 600; margin: 0 0 20px; padding-bottom: 12px;">
                                        Danh mục sản phẩm
                                    </dt>
                                    <hr width="100%" align="center" color="#ccfff1"/>
                                    <dd class="filter-options-content">
                                        <ul class="list-categories">
                                            <li class="item">
                                                <span class="open-sub-categories opened"></span>
                                                <ul class="list-sub-categories" style="color: black">
                                                    <li class="active"><a href="#" style="color: black">Bàn</a></li>
                                                    <li><a href="#" style="color: black">Ghế</a>
                                                    </li>
                                                    <li><a href="#" style="color: black">Giường</a></li>
                                                    <li><a href="#" style="color: black">Kệ</a></li>
                                                    <li><a href="#" style="color: black">Gương</a></li>
                                                    <li><a href="#" style="color: black">Tủ</a></li>
                                                    <li><a href="#" style="color: black">Giá</a></li>
                                                    <li><a href="#" style="color: black">Bộ bàn ăn</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

