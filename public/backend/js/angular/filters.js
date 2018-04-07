app.filter('trusted', ['$sce', function ($sce) {
    return function(url) {
        return $sce.trustAsResourceUrl(url);
    };
}]);

app.filter('trustAsHtml', function($sce) {
  	return function(html) {
    	return $sce.trustAsHtml(html);
  	};
});

app.filter('pagination', function() {
    return function(input, start) {
        if (!input || !input.length) { return; }
        start = +start; //parse to int
        return input.slice(start);
    };
});

app.filter('number', [function() {
    return function(input) {
        return parseInt(input, 10);
    };
}]);