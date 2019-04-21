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
    // magnific popup
    // ---------------------------------------------------------------------------

    $('[data-plugin="mfp-popup"]').each(function () {
        var config = {};
        config.type = $(this).data('type') !== undefined ? $(this).data('type') : 'inline';
        config.midClick = $(this).data('midclick') !== undefined ? $(this).data('midclick') : false;
        config.mainClass = $(this).data('mainclass') !== undefined ? $(this).data('mainclass') : '';
        config.preloader = $(this).data('preloader') !== undefined ? $(this).data('preloader') : true;
        config.focus = $(this).data('focus') !== undefined ? $(this).data('focus') : '';
        config.closeOnContentClick = $(this).data('closeoncontentclick') !== undefined ? $(this).data('closeoncontentclick') : false;
        config.closeOnBgClick = $(this).data('closeonbgclick') !== undefined ? $(this).data('closeonbgclick') : true;
        config.closeBtnInside = $(this).data('closebtninside') !== undefined ? $(this).data('closebtninside') : false;
        config.showCloseBtn = $(this).data('showclosebtn') !== undefined ? $(this).data('showclosebtn') : true;
        config.enableEscapeKey = $(this).data('enableescapekey') !== undefined ? $(this).data('enableescapekey') : true;
        config.modal = $(this).data('modal') !== undefined ? $(this).data('modal') : false;
        config.alignTop = $(this).data('aligntop') !== undefined ? $(this).data('aligntop') : false;
        config.index = $(this).data('index') !== undefined ? $(this).data('index') : null;
        config.fixedContentPos = $(this).data('fixedcontentpos') !== undefined ? $(this).data('fixedcontentpos') : 'auto';
        config.fixedBgPos = $(this).data('fixedbgpos') !== undefined ? $(this).data('fixedbgpos') : 'auto';
        config.overflowY = $(this).data('overflowy') !== undefined ? $(this).data('overflowy') : 'auto';
        config.autoFocusLast = $(this).data('autofocuslast') !== undefined ? $(this).data('autofocuslast') : true;

        if ($(this).data('type') === 'image') {
            config.image = {
                verticalFit: $(this).data('verticalfit') !== undefined ? $(this).data('verticalfit') : true,
                cursor: $(this).data('cursor') !== undefined ? $(this).data('cursor') : 'mfp-zoom-out-cur',
            }
        }

        if ($(this).data('gallery') === true) {
            config.delegate = $(this).data('delegate') !== undefined ? $(this).data('delegate') : 'a';
            config.gallery = {
                enabled: true,
                navigateByImgClick: $(this).data('navigatebyimgclick') !== undefined ? $(this).data('navigatebyimgclick') : true
            };
        }

        if ($(this).data('effect')) {
            config.removalDelay = $(this).data('removaldelay') !== undefined ? $(this).data('removaldelay') : 500;
            config.mainClass = $(this).data('effect');
            config.callbacks = {
                beforeOpen: function() {
                    this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                }
            };
        }

        if ($(this).data('zoom') === true) {
            config.removalDelay = $(this).data('removaldelay') !== undefined ? $(this).data('removaldelay') : 500;
            config.mainClass = $(this).data('mainclass') !== undefined ? $(this).data('mainclass') : 'mfp-with-zoom mfp-img-mobile';
            config.zoom = {
                enabled: true,
                duration: 300, // duration of the effect, in milliseconds
                easing: 'ease-in-out',
                opener: function(element) {
                    return element.find('img');
                }
            };
        }

        $(this).magnificPopup(config);
    });

    // mfp-dismiss
    $(document).on('click', '.mfp-dismiss', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
    });


    // ---------------------------------------------------------------------------
    // swiper
    // ---------------------------------------------------------------------------

    // var swipers = [];
    $('[data-plugin="swiper"]').each(function (index) {
        var config = {
            autoplay: {
                delay: 5000
            }
        };
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
        thumbs: {
            swiper: $swiper_gallery_row_thumbs
        }
    });
    

});