// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

$(document).ready(function(){
    var breakpoint_mobile = 992;

    // ---------------------------------------------------------------------------
    // navbar-main-toggle
    // ---------------------------------------------------------------------------

    $('#navbar-main-toggle').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('is-active');
    });


    // ---------------------------------------------------------------------------
    // mCustomScrollbar
    // ---------------------------------------------------------------------------

    var $mcs = $('.mcs');

    $mcs.mCustomScrollbar({
        autoExpandScrollbar: true,
        mouseWheel: {
            preventDefault: true
        }
    });

    if ($(window).width() >= breakpoint_mobile) {

    } else {
        // mCustomScrollbar destroy
        $mcs.mCustomScrollbar("destroy");
    }


    // ---------------------------------------------------------------------------
    // swiper
    // ---------------------------------------------------------------------------

    // var swipers = [];
    $('[data-plugin="swiper"]').each(function (index) {
        var config = {};
        config.navigation = {
            nextEl: $(this).find('.swiper-button-next'),
            prevEl: $(this).find('.swiper-button-prev')
        };
        config.pagination = {
            el: $(this).find('.swiper-pagination'),
            dynamicBullets: $(this).data('dynamicbullets') !== undefined ? $(this).data('dynamicbullets') : false,
            clickable: $(this).data('clickable') !== undefined ? $(this).data('clickable') : true,
        };
        if ($(this).data('autoplay')) {
            config.autoplay = $(this).data('autoplay');
        }
        if ($(this).data('delay')) {
            config.autoplay = {
                delay: $(this).data('delay')
            }
        }
        if ($(this).data('thumbs')) {
            console.log($(this).data('thumbs'));
            config.thumbs = {
                swiper: {
                    el: $(this).data('thumbs'),
                    slidesPerView: 5,
                }
            }
        }
        config.slidesPerView = $(this).data('slidesperview') !== undefined ? $(this).data('slidesperview') : 1;
        config.slidesPerGroup = $(this).data('slidespergroup') !== undefined ? $(this).data('slidespergroup') : 1;
        config.spaceBetween = $(this).data('spacebetween') !== undefined ? $(this).data('spacebetween') : 0;
        config.centeredSlides = $(this).data('centeredslides') !== undefined ? $(this).data('centeredslides') : false;
        config.loop= $(this).data('loop') !== undefined ? $(this).data('loop') : false;
        config.speed= $(this).data('speed') !== undefined ? $(this).data('speed') : 300;
        config.autoHeight= $(this).data('autoheight') !== undefined ? $(this).data('autoheight') : false;
        config.effect= $(this).data('effect') !== undefined ? $(this).data('effect') : 'slide';

        if (config.slidesPerView > 1) {
            config.breakpoints = {
                1200: {
                    slidesPerView: $(this).data('breakpoints-lg') !== undefined ? $(this).data('breakpoints-lg') : config.slidesPerView
                },
                991: {
                    slidesPerView: $(this).data('breakpoints-md') !== undefined ? $(this).data('breakpoints-md') : config.slidesPerView - 1 > 1 ? config.slidesPerView - 1 : 1
                },
                767: {
                    slidesPerView: $(this).data('breakpoints-sm') !== undefined ? $(this).data('breakpoints-sm') : config.slidesPerView - 2 > 1 ? config.slidesPerView - 2 : 1
                },
                575: {
                    slidesPerView: $(this).data('breakpoints-xs') !== undefined ? $(this).data('breakpoints-xs') : 1
                }
            }
        }

        var swiper = new Swiper($(this), config);
    });


    // thumbs gallery row
    var $swiper_gallery_row_thumbs = new Swiper('[data-plugin="swiper-gallery-row-thumbs"]', {
        spaceBetween: 16,
        slidesPerView: 6,
        // freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        direction: 'vertical',
        observer: true,
        observeParents: true,
        breakpoints: {
            991: {
                direction: 'horizontal',
            }
        }
    });

    var $swiper_gallery_row = new Swiper('[data-plugin="swiper-gallery-row"]', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: $swiper_gallery_row_thumbs
        }
    });
    

});