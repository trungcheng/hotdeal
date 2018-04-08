(function(){
    var route = $.app.vars.currentRoute;
    $('.sidebar-menu li a[data-route="'+route+'"]').closest().addClass('active');
})();