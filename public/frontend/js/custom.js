$(function () {
    var baseUrl = window.location.origin + window.location.pathname;
    $('.nav-item').removeClass('active');
    $('.nav-link').each(function (v, k) {
        if ($(k).attr('href') == baseUrl) {
            $(k).parents('.nav-item').addClass('active');
        }
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

function trimText(str ,wordCount) {
    var strArray = str.split(' ');
    var subArray = strArray.slice(0, wordCount);
    var result = subArray.join(" ");
    if (strArray.length < wordCount) {
        return result;
    } else {
        return result + '...';
    }
}