<?php
/**
 * Created by PhpStorm.
 * User: namdt
 * Date: 8/3/20
 */
?>

@extends('frontend.layout_master')

@section('main-content')
    <section id="wrapper">
        <div class="container" style="max-width: 900px">
            <div id="columns_inner" style="margin-top: 50px">
                <nav data-depth="1" class="breadcrumb hidden-sm-down" style="width: 100%">
                    <div class="container"><h1 class="h1">
                            Log in to your account
                        </h1>
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
                                        <div class="forgot-password" style="text-align: center; padding: 15px">
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
                            <div class="no-account" style="text-align: center; padding: 15px">
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
@endsection

