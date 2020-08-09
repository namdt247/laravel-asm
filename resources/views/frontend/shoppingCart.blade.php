<?php
?>
@extends('frontend.layout_master')

@section('link-header')
    <link rel="stylesheet" href="{{asset('css/frontend/detail.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/plugins/fancybox/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/plugins/swiper/swiper.min.css')}}">
@stop
@section('main-content')

@endsection
@section('main-script')
    <script src="{{asset('Admin/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('Admin/plugins/swiper/swiper.min.js')}}"></script>
    <script src="{{asset('js/detail.js')}}"></script>

@stop
