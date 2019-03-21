$(document).ready(function(){
    // -------------------------
    // back to top
    // -------------------------

    var $bactotop = $('#back-to-top');
    if ($bactotop.length) {
        var scrollTrigger = 200, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $bactotop.addClass('backtotop-show');
                } else {
                    $bactotop.removeClass('backtotop-show');
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $bactotop.on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 700);
        });
    }


    // -------------------------
    // header
    // -------------------------

    var $header_search = $('#header-search'),
        $header_search_input = $header_search.find('.form-control'),
        $header_search_btn_send = $header_search.find('.header-search-btn-send'),
        $header_search_btn_close = $header_search.find('.header-search-btn-close');
    $header_search_btn_send.on('click', function () {
        $header_search.removeClass('deactive');
        $header_search_input.focus();
    });

    $header_search_btn_close.on('click', function () {
        $header_search.addClass('deactive');
    });

    var $product_detail_btn_more = $('#product-detail-btn-more');
    $product_detail_btn_more.on('click', function (e) {
        e.preventDefault();
        $(this).parents('.product-detail').toggleClass('active');
    });
});

function get_query(url) {
    // var url = location.search;
    var qs = url.substring(url.indexOf('?') + 1).split('&');
    for(var i = 0, result = {}; i < qs.length; i++){
        qs[i] = qs[i].split('=');
        result[qs[i][0]] = decodeURIComponent(qs[i][1]);
    }
    return result;
}