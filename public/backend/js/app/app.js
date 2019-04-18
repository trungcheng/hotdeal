(function(app){
    // var route = $.app.vars.currentRoute;
    var baseUrl = window.location.pathname;
    $('.sidebar-menu li a[data-route="'+baseUrl+'"]').parent().addClass('active');
    $('.sidebar-menu li a[data-route="'+baseUrl+'"]').parents('.treeview').addClass('active menu-open');

    function capitalizeFirstLetter(string) {
	    return string.charAt(0).toUpperCase() + string.slice(1);
	}
})();