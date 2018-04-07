(function(){
    var route = $.app.vars.currentRoute;
    $('.sidebar-menu li a[data-route="'+route+'"]').addClass('active');

    $(".select2").select2();

    setTimeout(function () {
        $("#loader").fadeOut(300, function () {
            $(this).remove();
        });
    }, 100);

    $('#sidenav-toggle').on('click', function () {
        $(this).toggleClass('is-active');
        $('#sidenav').toggleClass('open');
    });

    // var swiper = new Swiper('.header-swiper', {
    //  direction: 'vertical',
    //  loop: true,
    //  autoplay: {
    //      delay: 2500,
    //      disableOnInteraction: false,
    //  },
    //  navigation: {
    //      nextEl: '.header-swiper-button-next',
    //      prevEl: '.header-swiper-button-prev',
    //  },
    // });
    var animation_end = "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend"; // for animated.css

    //==
    // Loading
    //

    setTimeout(function () {
        $("#loader").fadeOut(300, function () {
            $(this).remove();
        });
        // $('body').removeClass('inactive');
        // $('html,body').scrollTop(0);
    }, 100);


    //==
    // Sidenav Mobile
    //

    $('#sidenav-toggle').on('click', function () {
        $(this).toggleClass('is-active');
        $('#sidenav').toggleClass('open');

        // var sidebar_backdrop = $('#sidebar-backdrop');
        if (!$('#sidebar-backdrop').length) {
            $('body').append($('<div id="sidebar-backdrop" style="display: none;"></div>'));
        }

        if ($(this).hasClass('is-active')) {
            $('#sidebar-backdrop').fadeIn(400);
        } else {
            $('#sidebar-backdrop').fadeOut(400);
        }

        // sidenav close

        $('#sidebar-backdrop').on('click', function () {
            $('#sidenav-toggle').removeClass('is-active');
            $('#sidenav').removeClass('open');
            $(this).fadeOut(400);
        });
    });


    // list-checkbox-active

    $('.list-checkbox-active').find('.list-checkbox-item').on('click', function (e) {
        if (e.target !== this) {
            return;
        }

        $(this).toggleClass('active');
    });


    //==
    // button uploadfile - support cursor for chrome
    //

    $(".btn-file").mousemove(function(e) {
        var offL, offT, width_input;
        offL = $(this).offset().left;
        offT = $(this).offset().top;
        width_input = $(this).find("input").width();
        $(this).find("input").css({
            left:e.pageX - offL - (width_input - 30),
            top:e.pageY - offT - 10
        })
    });


    //==
    // custom bootstrap dropdown
    //

    // handling the click on the link to open/close the dropdown
    var $dropdown_custom = $('.dropdown-custom');
    $dropdown_custom.children('a, .btn, [data-toggle="dropdown-custom"]').on('click', function (event) {
        event.preventDefault();
        $dropdown_custom.not($(this).parent()).removeClass('show');
        $(this).parent().toggleClass('show');
    });

    // listening the clicks outside of the dropdown to close it
    $('body').on('click', function (e) {
        if (!$dropdown_custom.is(e.target)
            && $dropdown_custom.has(e.target).length === 0
            // && $('.show').has(e.target).length === 0
            ) {
            $dropdown_custom.removeClass('show');
    }
});


    // dropdown dismiss

    $('.dropdown-dismiss').on('click', function () {
        if ($(this).data('target') === undefined) {
            $(this).closest('.show').removeClass('show');
        } else {
            $('#' + $(this).data('target')).removeClass('show');
        }
    });


    // widget show

    var $widget_container = $('#widget-container'),
    $dropdown_widget = $('.dropdown-widget');



    // listening the clicks outside of the widget to close it
    $('body').on('click', function (e) {
        if (!$dropdown_widget.is(e.target) &&
            $dropdown_widget.has(e.target).length === 0 &&
            !$('.widget').is(e.target) &&
            $('.widget').has(e.target).length === 0 &&
            !$('body').hasClass('state-widget-show') &&
            !$(e.target).is('.angucomplete-title') &&
            !$(e.target).is('.list-tag') &&
            !$(e.target).is('.zmdi')
        ) {
            close_widget();
    }
});

    // widget close

    $('.widget-close, .widget-dismiss').on('click', function (e) {
        e.preventDefault();
        close_widget();
    });

    $(document).on('click', '.popup-modal-dismiss', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
    });
    
    $(document).keyup(function(e) {
        if (e.keyCode === 27 && $('.widget-show').length) {
            close_widget();
        }
    });

    function close_widget() {
        // $dropdown_widget.removeClass('show');
        $('.widget-show').removeClass('widget-show');
        $('#widget-overlay').fadeOut(300, function () {
            $(this).remove();
        });

        $('body').removeClass('state-widget-show state-widget-normal');
        $('#widget-container').addClass('hide');
        // itembase_draggable_disable();
    }

    $('.upload-list, .itembase-toggle').on('click', function () {
        $(this).toggleClass('active');
    });

    // widget-nav-toggle

    $('#widget-nav-toggle').on('click', function (e) {
        e.preventDefault();
        $('#widget-nav').toggleClass('open');
    });

})();