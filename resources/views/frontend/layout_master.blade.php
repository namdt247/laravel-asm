<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/Admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/Admin/plugins/fontawesome-free/css/v4-shims.css">
    <link rel="stylesheet" href="/css/frontend/style.css">
    <link rel="stylesheet" href="/css/frontend/refresh_style.css">
    <link rel="stylesheet" href="/css/frontend/carousel_home.css">
    <link rel="stylesheet" href="/css/frontend/content_home.css">
    <link rel="stylesheet" href="/Admin/plugins/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @yield('link-header')
</head>
<body>
    <div id="header">
        @include('frontend.include.header')
    </div>
    <div id="main-content">
        @yield('main-content')
    </div>
    <div id="footer">
        @include('frontend.include.footer')
    </div>

    <script>
        jQuery(document).ready(function() {
            if ($('.top_button').length) {
                var scrollTrigger = 100,
                    backToTop = function () {
                        var scrollTop = $(window).scrollTop();
                        if (scrollTop > scrollTrigger) {
                            $('.top_button').addClass('show');
                        } else {
                            $('.top_button').removeClass('show');
                        }
                    };
                backToTop();
                $(window).on('scroll', function () {
                    backToTop();
                });
                $('.top_button').on('click', function (e) {
                    e.preventDefault();
                    $('html,body').animate({
                        scrollTop: 0
                    }, 700);
                });
            }
        });
    </script>
    <script src="/Admin/plugins/jquery/jquery.min.js"></script>
    <script src="/Admin/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/carousel_home.js"></script>
    @yield('main-script')
</body>
</html>
