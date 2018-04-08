(function(){
    // var route = $.app.vars.currentRoute;
    var baseUrl = window.location.pathname;
    $('.sidebar-menu li a[data-route="'+baseUrl+'"]').parent().addClass('active');
})();