$(document).ready(function ($) {
    awe_backtotop();
    awe_category();
    awe_menumobile();
    awe_tab();
    awe_owl();
    if (navigator.userAgent.indexOf("Speed Insights") == -1) {
        awe_lazyloadImage();
    }
    $('.aside-filter .fiter-title').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.parents('.aside-filter').find('.aside-hidden-mobile').stop().slideToggle();
        $(this).toggleClass('active')
        return false;
    });
    $('.btn--view-more').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.parents('#home').find('.product-well').toggleClass('expanded');
        return false;
    });
    $('.header-search .search-i').click(function (e) {
        e.stopPropagation();
        $(".search-header").toggle("slow", function () {
        });
    });
    $(".section_tab_product-owl").owlCarousel({
        nav: true,
        slideSpeed: 600,
        paginationSpeed: 400,
        singleItem: true,
        pagination: false,
        dots: true,
        autoplay: false,
        lazyLoad: true,
        margin: 0,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        autoHeight: false,
        loop: false,
        responsive: {
            0: {
                items: 2
            },
            543: {
                items: 3
            },
            768: {
                items: 4
            },
            991: {
                items: 4
            },
            992: {
                items: 4
            },
            1024: {
                items: 4
            },
            1200: {
                items: 5
            },
            1590: {
                items: 5
            }
        }
    });
    $(".section_blogs_owl").owlCarousel({
        nav: true,
        slideSpeed: 600,
        paginationSpeed: 400,
        singleItem: true,
        pagination: false,
        dots: true,
        autoplay: false,
        margin: 0,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        autoHeight: false,
        loop: false,
        lazyLoad: true,
        responsive: {
            0: {
                items: 1
            },
            543: {
                items: 2
            },
            768: {
                items: 3
            },
            991: {
                items: 3
            },
            992: {
                items: 3
            },
            1024: {
                items: 4
            },
            1200: {
                items: 4
            },
            1590: {
                items: 4
            }
        }
    });
    $(".section-feature-product-slider").owlCarousel({
        nav: true,
        slideSpeed: 600,
        paginationSpeed: 400,
        singleItem: true,
        pagination: false,
        dots: false,
        autoplay: true,
        margin: 20,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        autoHeight: false,
        loop: false,
        responsive: {
            0: {
                items: 2
            },
            543: {
                items: 3
            },
            768: {
                items: 3
            },
            991: {
                items: 3
            },
            992: {
                items: 4
            },
            1300: {
                items: 4
            },
            1590: {
                items: 4
            }
        }
    });
    $(".section-group-product-slider").owlCarousel({
        nav: true,
        slideSpeed: 600,
        paginationSpeed: 400,
        singleItem: true,
        pagination: false,
        dots: false,
        autoplay: true,
        margin: 5,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        autoHeight: false,
        loop: false,
        responsive: {
            0: {
                items: 2
            },
            543: {
                items: 3
            },
            768: {
                items: 3
            },
            991: {
                items: 4
            },
            992: {
                items: 5
            },
            1300: {
                items: 5
            },
            1590: {
                items: 5
            }
        }
    });
    $(".owl-policy-mobile").owlCarousel({
        nav: false,
        slideSpeed: 600,
        paginationSpeed: 400,
        singleItem: false,
        pagination: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4500,
        autoplayHoverPause: false,
        autoHeight: false,
        loop: false,
        responsive: {
            0: {
                items: 2
            },
            543: {
                items: 2
            },
            768: {
                items: 3
            },
            991: {
                items: 3
            },
            992: {
                items: 4
            },
            1300: {
                items: 4,
            },
            1590: {
                items: 4,
            }
        }
    });
    $('#collection-owl').owlCarousel({
        loop: true,
        margin: 0,
        responsiveClass: true,
        dots: true,
        nav: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    $('[data-toggle="tooltip"]').tooltip();
    $('.index-cart a, .mobile-cart a').click(function () {
        $("#cart-sidebars").addClass('active');
        $(".backdrop__body-backdrop___1rvky").addClass('active');
    });
    $('#cart-sidebars .cart_btn-close').click(function () {
        $("#cart-sidebars").removeClass('active');
        $(".backdrop__body-backdrop___1rvky").removeClass('active');
    });
    $('.backdrop__body-backdrop___1rvky').click(function () {
        $("#cart-sidebars").removeClass('active');
        $(".backdrop__body-backdrop___1rvky").removeClass('active');
    });
    if ($('.cart_body>div').length == '0') {
        $('.cart-footer').hide();
        jQuery('<div class="cart-empty">'
            + '<span class="empty-icon"><i class="ico ico-cart"></i></span>'
            + '<div class="btn-cart-empty">'
            + '<a class="btn btn-default" href="/" title="Tiếp tục mua sắm">Tiếp tục mua sắm</a>'
            + '</div>'
            + '</div>').appendTo('.cart_body');
    }
    $('a.btn-support').click(function (e) {
        e.stopPropagation();
        $('.support-content').slideToggle();
    });
    $('.support-content').click(function (e) {
        e.stopPropagation();
    });
    $(document).click(function () {
        $('.support-content').slideUp();
    });
});
var Ant = {
    clone_item_view: function (product) {
        var src = Bizweb.resizeImage(product.featured_image, 'small');
        if (src == null) {
            src = "//bizweb.dktcdn.net/thumb/medium/assets/themes_support/noimage.gif";
        }
        jQuery('<div class="item recently-item-pro clearfix">'
            + '<div class="wrp">'
            + '<div class="box-image">'
            + '<a class="image url-product" href="' + product.url + '" title="' + product.name + '">'
            + '<img class="image-review" src="' + src + '" alt="' + product.name + '" />'
            + '</a>'
            + '</div>'
            + '<div class="info">'
            + '<h3>'
            + '<a href="' + product.url + '" title="' + product.name + '" class="url-product"><span class="title-review">' + product.name + '</span></a>'
            + '</h3>'
            + '</div>'
            + '</div>'
            + '</div>').appendTo('#owl-demo-daxem > .product-item');
    },
    setCookiePopup: function (cvalue, exdays, nameCookie) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        $.cookie(nameCookie, cvalue, { expires: d, path: '/' });
    },
    getCookiePopup: function (nameCookie) {
        return $.cookie(nameCookie);
    }
};
function awe_lazyloadImage() {
    var i = $("[data-lazyload]");
    i.length > 0 && i.each(function () {
        var i = $(this), e = i.attr("data-lazyload");
        i.appear(function () {
            i.removeAttr("height").attr("src", e);
        }, {
            accX: 0,
            accY: 120
        }, "easeInCubic");
    });
    var e = $("[data-lazyload2]");
    e.length > 0 && e.each(function () {
        var i = $(this), e = i.attr("data-lazyload2");
        i.appear(function () {
            i.css("background-image", "url(" + e + ")");
        }, {
            accX: 0,
            accY: 120
        }, "easeInCubic");
    });
} window.awe_lazyloadImage = awe_lazyloadImage;
if ($(window).width() < 767) {

    $('.section_group_product_1 .menu-button-edit').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.parents('.section_group_product_1 .box-shock').find('ul').stop().slideToggle();
        $(this).toggleClass('active')
        return false;
    });

    $('.section_group_product_2 .menu-button-edit').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.parents('.section_group_product_2 .box-shock').find('ul').stop().slideToggle();
        $(this).toggleClass('active')
        return false;
    });

    $('.section_group_product_3 .menu-button-edit').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.parents('.section_group_product_3 .box-shock').find('ul').stop().slideToggle();
        $(this).toggleClass('active')
        return false;
    });

    $('.section_group_product_4 .menu-button-edit').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.parents('.section_group_product_4 .box-shock').find('ul').stop().slideToggle();
        $(this).toggleClass('active')
        return false;
    });

    $('.section_group_product_5 .menu-button-edit').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.parents('.section_group_product_5 .box-shock').find('ul').stop().slideToggle();
        $(this).toggleClass('active')
        return false;
    });

    $('.section_group_product_6 .menu-button-edit').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.parents('.section_group_product_6 .box-shock').find('ul').stop().slideToggle();
        $(this).toggleClass('active')
        return false;
    });

    $('.section_group_product_7 .menu-button-edit').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.parents('.section_group_product_7 .box-shock').find('ul').stop().slideToggle();
        $(this).toggleClass('active')
        return false;
    });

    $('.section_group_product_8 .menu-button-edit').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.parents('.section_group_product_8 .box-shock').find('ul').stop().slideToggle();
        $(this).toggleClass('active')
        return false;
    });

    $('.section_group_product_9 .menu-button-edit').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.parents('.section_group_product_9 .box-shock').find('ul').stop().slideToggle();
        $(this).toggleClass('active')
        return false;
    });

    $('.section_group_product_10 .menu-button-edit').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.parents('.section_group_product_10 .box-shock').find('ul').stop().slideToggle();
        $(this).toggleClass('active')
        return false;
    });

    $('.section_group_product_11 .menu-button-edit').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.parents('.section_group_product_11 .box-shock').find('ul').stop().slideToggle();
        $(this).toggleClass('active')
        return false;
    });

};
$(window).on("load resize", function (e) {
    setTimeout(function () {
        awe_resizeimage();
    }, 200);
    setTimeout(function () {
        awe_resizeimage();
    }, 1000);
});
$(document).on('click', '.overlay, .close-popup, .btn-continue, .fancybox-close', function () {
    hidePopup('.awe-popup');
    setTimeout(function () {
        $('.loading').removeClass('loaded-content');
    }, 500);
    return false;
})
function awe_showNoitice(selector) {
    $(selector).animate({ right: '0' }, 500);
    setTimeout(function () {
        $(selector).animate({ right: '-300px' }, 500);
    }, 3500);
} window.awe_showNoitice = awe_showNoitice;
function awe_showLoading(selector) {
    var loading = $('.loader').html();
    $(selector).addClass("loading").append(loading);
} window.awe_showLoading = awe_showLoading;
function awe_hideLoading(selector) {
    $(selector).removeClass("loading");
    $(selector + ' .loading-icon').remove();
} window.awe_hideLoading = awe_hideLoading;
function awe_showPopup(selector) {
    $(selector).addClass('active');
} window.awe_showPopup = awe_showPopup;
function awe_hidePopup(selector) {
    $(selector).removeClass('active');
} window.awe_hidePopup = awe_hidePopup;
function awe_convertVietnamese(str) {
    str = str.toLowerCase();
    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
    str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
    str = str.replace(/đ/g, "d");
    str = str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g, "-");
    str = str.replace(/-+-/g, "-");
    str = str.replace(/^\-+|\-+$/g, "");
    return str;
} window.awe_convertVietnamese = awe_convertVietnamese;
function awe_resizeimage() {
    $('.product-box .product-thumbnail a img').each(function () {
        var t1 = (this.naturalHeight / this.naturalWidth);
        var t2 = ($(this).parent().height() / $(this).parent().width());
        if (t1 <= t2) {
            $(this).addClass('bethua');
        }
        var m1 = $(this).height();
        var m2 = $(this).parent().height();
        if (m1 <= m2) {
            $(this).css('padding-top', (m2 - m1) / 2 + 'px');
        }
    })
} window.awe_resizeimage = awe_resizeimage;
function awe_category() {
    $('.nav-category .fa-angle-down').click(function (e) {
        $(this).parent().toggleClass('active');
    });
} window.awe_category = awe_category;
function awe_menumobile() {
    $('.menu-bar').click(function (e) {
        e.preventDefault();
        $('#nav').toggleClass('open');
    });
    $('#nav .fa').click(function (e) {
        e.preventDefault();
        $(this).parent().parent().toggleClass('open');
    });
} window.awe_menumobile = awe_menumobile;
function awe_accordion() {
    $('.accordion .nav-link').click(function (e) {
        e.preventDefault;
        $(this).parent().toggleClass('active');
    })
} window.awe_accordion = awe_accordion;
function awe_owl() {
    $('.owl-carousel:not(.not-dqowl)').each(function () {
        var xs_item = $(this).attr('data-xs-items');
        var md_item = $(this).attr('data-md-items');
        var sm_item = $(this).attr('data-sm-items');
        var margin = $(this).attr('data-margin');
        var dot = $(this).attr('data-dot');
        if (typeof margin !== typeof undefined && margin !== false) {
        } else {
            margin = 30;
        }
        if (typeof xs_item !== typeof undefined && xs_item !== false) {
        } else {
            xs_item = 1;
        }
        if (typeof sm_item !== typeof undefined && sm_item !== false) {

        } else {
            sm_item = 3;
        }
        if (typeof md_item !== typeof undefined && md_item !== false) {
        } else {
            md_item = 3;
        }
        if (typeof dot !== typeof undefined && dot !== true) {
            dot = true;
        } else {
            dot = false;
        }
        $(this).owlCarousel({
            loop: false,
            margin: Number(margin),
            responsiveClass: true,
            dots: dot,
            nav: true,
            responsive: {
                0: {
                    items: Number(xs_item)
                },
                600: {
                    items: Number(sm_item)
                },
                1000: {
                    items: Number(md_item)
                }
            }
        })
    })
} window.awe_owl = awe_owl;
function awe_backtotop() {
    if ($('.back-to-top').length) {
        var scrollTrigger = 100,
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('.back-to-top').addClass('show');
                } else {
                    $('.back-to-top').removeClass('show');
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('.back-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }
} window.awe_backtotop = awe_backtotop;
function awe_tab() {
    $(".e-tabs").each(function () {
        $(this).find('.tabs-title li:first-child').addClass('current');
        $(this).find('.tab-content').first().addClass('current');

        $(this).find('.tabs-title li').click(function () {
            var tab_id = $(this).attr('data-tab');
            var url = $(this).attr('data-url');
            $(this).closest('.e-tabs').find('.tab-viewall').attr('href', url);
            $(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
            $(this).closest('.e-tabs').find('.tab-content').removeClass('current');
            $(this).addClass('current');
            $(this).closest('.e-tabs').find("#" + tab_id).addClass('current');
        });
    });
} window.awe_tab = awe_tab;
$('.dropdown-toggle').click(function () {
    $(this).parent().toggleClass('open');
});
$('.btn-close').click(function () {
    $(this).parents('.dropdown').toggleClass('open');
});
$('body').click(function (event) {
    if (!$(event.target).closest('.dropdown').length) {
        $('.dropdown').removeClass('open');
    };
});
(function ($) {
    "use strict";
    $(document).on(
        "show.bs.tab",
        '.nav-tabs-responsive [data-toggle="tab"]',
        function (e) {
            var $target = $(e.target);
            var $tabs = $target.closest(".nav-tabs-responsive");
            var $current = $target.closest("li");
            var $parent = $current.closest("li.dropdown");
            $current = $parent.length > 0 ? $parent : $current;
            var $next = $current.next();
            var $prev = $current.prev();
            var updateDropdownMenu = function ($el, position) {
                $el
                    .find(".dropdown-menu")
                    .removeClass("pull-xs-left pull-xs-center pull-xs-right")
                    .addClass("pull-xs-" + position);
            };
            $tabs.find(">li").removeClass("next prev");
            $prev.addClass("prev");
            $next.addClass("next");
            updateDropdownMenu($prev, "left");
            updateDropdownMenu($current, "center");
            updateDropdownMenu($next, "right");
        }
    );
})(jQuery);
$(document).on("click", "#trigger-mobile", function () {
    if ($('body').hasClass('responsive') == false) {
        $('body').addClass('responsive helper-overflow-hidden');
        $('html').addClass('helper-overflow-hidden');
        $(window).scrollTop(0);
        $('body').removeClass('hideresponsive');
        $("#box-wrapper").bind('click', function () {
            $("body").removeClass("responsive helper-overflow-hidden");
            $('html').removeClass('helper-overflow-hidden');
            $('body').addClass('hideresponsive');
            $("#box-wrapper").unbind('click');
        });
    }
    else {
        $("body").removeClass("responsive helper-overflow-hidden");
        $('html').removeClass('helper-overflow-hidden');
        $('body').addClass('hideresponsive');
    }
});
$('#menu-mobile .menu-mobile .submenu-level1-children-a i').on('click', function (e) {
    e.preventDefault();
    var $this = $(this);
    $this.parents('#menu-mobile .menu-mobile li').find('.submenu-level1-children').stop().slideToggle();
    $(this).toggleClass('active')
    return false;
});
$('#menu-mobile .menu-mobile .submenu-level1-children .submenu-level2-children-a i').on('click', function (e) {
    e.preventDefault();
    var $this = $(this);
    $this.parents('#menu-mobile .menu-mobile .submenu-level1-children li').find('.submenu-level2-children').stop().slideToggle();
    $(this).toggleClass('active')
    return false;
});
$(document).on('keydown', '#qty, #quantity-detail, .number-sidebar', function (e) { -1 !== $.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) || /65|67|86|88/.test(e.keyCode) && (!0 === e.ctrlKey || !0 === e.metaKey) || 35 <= e.keyCode && 40 >= e.keyCode || (e.shiftKey || 48 > e.keyCode || 57 < e.keyCode) && (96 > e.keyCode || 105 < e.keyCode) && e.preventDefault() });