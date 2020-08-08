jQuery(document).ready(function() {
    $('#products_included').carousel({
        interval: false,
        wrap: true,
        keyboard: true,
        pause: true
    });
    $('#products_included').on('slide.bs.carousel', function (e) {
        var $e = $(e.relatedTarget);
        var idx = $e.index();
        var itemsPerSlide = 5;
        var totalItems = $('#products_included .carousel-item').length;

        if (idx >= totalItems-(itemsPerSlide-1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i=0; i<it; i++) {
                // append slides to end
                if (e.direction=="left") {
                    $('#products_included .carousel-item').eq(i).appendTo('#products_included .carousel-inner');
                }
                else {
                    $('#products_included .carousel-item').eq(0).appendTo('#products_included .carousel-inner');
                }
            }
        }
    });
    $('#similar_product').carousel({
        interval: false,
        wrap: true,
        keyboard: true,
        pause: true
    });
    $('#similar_product').on('slide.bs.carousel', function (e) {
        var $e = $(e.relatedTarget);
        var idx = $e.index();
        var itemsPerSlide = 5;
        var totalItems = $('#similar_product .carousel-item').length;

        if (idx >= totalItems-(itemsPerSlide-1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i=0; i<it; i++) {
                // append slides to end
                if (e.direction=="left") {
                    $('#similar_product .carousel-item').eq(i).appendTo('#similar_product .carousel-inner');
                }
                else {
                    $('#similar_product .carousel-item').eq(0).appendTo('#similar_product .carousel-inner');
                }
            }
        }
    });
    $('#favorite_product').carousel({
        interval: false,
        wrap: true,
        keyboard: true,
        pause: true
    });
    $('#favorite_product').on('slide.bs.carousel', function (e) {
        var $e = $(e.relatedTarget);
        var idx = $e.index();
        var itemsPerSlide = 5;
        var totalItems = $('#favorite_product .carousel-item').length;

        if (idx >= totalItems-(itemsPerSlide-1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i=0; i<it; i++) {
                // append slides to end
                if (e.direction=="left") {
                    $('#favorite_product .carousel-item').eq(i).appendTo('#favorite_product .carousel-inner');
                }
                else {
                    $('#favorite_product .carousel-item').eq(0).appendTo('#favorite_product .carousel-inner');
                }
            }
        }
    });
    $('[data-fancybox="images"]').fancybox({
        thumbs : {
            autoStart : true
        },
        slideShow: {
            autoStart: false,
            speed: 3000
        },
    })
});
