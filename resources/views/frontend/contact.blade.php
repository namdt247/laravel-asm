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
        <div class="container">
            <div id="columns_inner">
                <nav data-depth="1" class="breadcrumb hidden-sm-down" style="width: 100%">
                    <div class="container">
                        <h1 class="title">
                            Liên hệ với chúng tôi
                        </h1>
                    </div>
                </nav>
                <div id="content-wrapp  er" class="left-column">
                    <section id="main">
                        <header class="page-header">
                        </header>
                        <div id="content" class="page-content card card-block">
                            <section>
                                <form id="contact-form"
                                      action="#"
                                      method="post">
                                    <section>
                                        <input type="hidden" name="back" value="my-account">
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
                                        <div class="form-group row ">
                                            <label class="col-md-3 form-control-label required">
                                                Họ Tên
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-group js-parent-focus">
                                                    <input class="form-control js-child-focus js-visible-password"
                                                           name="name" type="text" value="" pattern=".{5,}" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="col-md-3 form-control-label required">
                                                Số điện thoại
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-group js-parent-focus">
                                                    <input class="form-control js-child-focus js-visible-password"
                                                           name="telephone" type="tel" value="" pattern=".{5,}"
                                                           required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="col-md-3 form-control-label required">
                                                Tin nhắn
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-group js-parent-focus">
                                                    <textarea class="form-control" name="message"
                                                              placeholder="Chúng tôi có thể giúp gì cho bạn?"
                                                              rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <footer class="form-footer text-xs-center clearfix">
                                        <input type="hidden" name="submitLogin" value="1">
                                        <button id="submit-" class="btn btn-primary" data-link-action="sign-in"
                                                type="submit" value="send">
                                            Gửi tin nhắn
                                        </button>
                                    </footer>
                                </form>
                                <div class="hot-line">
                                    <div class="title">Hotline</div>
                                    <div class="content">
                                        <div class="info-line">
                                            <div class="value">024 7300 8855<br></div>
                                            <div class="value">Email: webshop@baya.vn<br></div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <footer class="page-footer">
                        </footer>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
