<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('Admin/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/plugins/fontawesome-free/css/v4-shims.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/refresh_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/content_home.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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
            $('#carousel-example').on('slide.bs.carousel', function (e) {
                var $e = $(e.relatedTarget);
                var idx = $e.index();
                var itemsPerSlide = 5;
                var totalItems = $('.carousel-item').length;

                if (idx >= totalItems-(itemsPerSlide-1)) {
                    var it = itemsPerSlide - (totalItems - idx);
                    for (var i=0; i<it; i++) {
                        // append slides to end
                        if (e.direction=="left") {
                            $('.carousel-item').eq(i).appendTo('.carousel-inner');
                        }
                        else {
                            $('.carousel-item').eq(0).appendTo('.carousel-inner');
                        }
                    }
                }
            });
        });
    </script>
    <script src="{{asset('Admin/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('Admin/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    @yield('main-script')
</body>
</html>
