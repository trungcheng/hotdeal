// JavaScript Document
$(document).ready(function () {

    var baseUrl = window.location.pathname;
    $('.nav-menu li').removeClass('active');
    $('.nav-menu li a[data-route="' + baseUrl + '"]').parent().addClass('active');

    var owl = $("#owl-demo");

    owl.owlCarousel({
        navigation: true,
        singleItem: true,
        autoPlay: true,
        transitionStyle: "fade"
    });

    var owl_news = $("#owl-news-home");

    owl_news.owlCarousel({
        navigation: false,
        singleItem: true,
        autoPlay: true,
        transitionStyle: "fade"
    });

    //Select Transtion Type
    $("#transitionType").change(function () {
        var newValue = $(this).val();

        //TransitionTypes is owlCarousel inner method.
        owl.data("owlCarousel").transitionTypes(newValue);

        //After change type go to next slide
        owl.trigger("owl.next");
    });


});

$(".dropdown-menu li a").click(function () {
    $(this).parents(".dropdown").find('.btn').html('<img src="img/lorem.png" alt="lorem">' + $(this).text() + ' <span class="caret"></span>');
    $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');

});

$(document).ready(function () {

    $(".tab_content").hide();
    $(".tab_content:first").show();

    $("ul.tabs-pro li").click(function () {
        $("ul.tabs-pro li").removeClass("active");
        $(this).addClass("active");
        $(".tab_content").hide();
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).fadeIn();
    });
});

$(window).load(function () {
    setTimeout(function () {
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 90,
            itemMargin: 5,
            asNavFor: '#slider'
        });

        $('#slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel"
        });
    }, 500);
});

function ShowAdDiv() {
    var objAdDivRight = document.getElementById("divAdvRight");
    var objAdDivLeft = document.getElementById("divAdvLeft");

    if (document.body.clientWidth < 1200) {
        objAdDivRight.style.display = "none";
        objAdDivLeft.style.display = "none";
    }
    else {
        objAdDivRight.style.display = "block";
        objAdDivLeft.style.display = "block";
        FloatTopDiv();
    }
}

function FloatTopDiv() {
    startLX = ((document.body.clientWidth - MainContentW) / 2) - LeftBannerW - LeftAdjust, startLY = TopAdjust + 80;
    startRX = ((document.body.clientWidth - MainContentW) / 2) + MainContentW + RightAdjust, startRY = TopAdjust + 80;
    var d = document;
    function ml(id) {
        var el = d.getElementById ? d.getElementById(id) : d.all ? d.all[id] : d.layers[id];
        el.sP = function (x, y) { this.style.left = x + 'px'; this.style.top = y + 'px'; };
        el.x = startRX;
        el.y = startRY;
        return el;
    }
    function m2(id) {
        var e2 = d.getElementById ? d.getElementById(id) : d.all ? d.all[id] : d.layers[id];
        e2.sP = function (x, y) { this.style.left = x + 'px'; this.style.top = y + 'px'; };
        e2.x = startLX;
        e2.y = startLY;
        return e2;
    }
    window.stayTopLeft = function () {
        if (document.documentElement && document.documentElement.scrollTop)
            var pY = document.documentElement.scrollTop;
        else if (document.body)
            var pY = document.body.scrollTop;
        if (document.body.scrollTop > 30) { startLY = 3; startRY = 3; } else { startLY = TopAdjust; startRY = TopAdjust; };
        ftlObj.y += (pY + startRY - ftlObj.y) / 16;
        ftlObj.sP(ftlObj.x, ftlObj.y);
        ftlObj2.y += (pY + startLY - ftlObj2.y) / 16;
        ftlObj2.sP(ftlObj2.x, ftlObj2.y);
        setTimeout("stayTopLeft()", 1);
    }
    ftlObj = ml("divAdvRight");
    ftlObj2 = m2("divAdvLeft");
    stayTopLeft();
}

function toggle_bb() {
    $(".bb_open").css("display") == "none" ? ($(".bb_open").show(), $(".bb_close").hide(), $(".BottomLayer").toggle()) : $(".bb_close").css("display") == "none" && ($(".bb_open").hide(), $(".bb_close").show(), $(".BottomLayer").toggle())
}

function get_query(url) {
    // var url = location.search;
    var qs = url.substring(url.indexOf('?') + 1).split('&');
    for (var i = 0, result = {}; i < qs.length; i++) {
        qs[i] = qs[i].split('=');
        result[qs[i][0]] = decodeURIComponent(qs[i][1]);
    }
    return result;
}

function trimText(str, wordCount) {
    var strArray = str.split(' ');
    var subArray = strArray.slice(0, wordCount);
    var result = subArray.join(" ");
    if (strArray.length < wordCount) {
        return result;
    } else {
        return result + '...';
    }
}