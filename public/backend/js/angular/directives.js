app.directive('validFile', ['$parse', function($parse) {
    return {
        require: 'ngModel',
        link: function (scope, el, attrs, ngModel) {
            var validFormats = ['PNG','GIF','JPEG','JPG','jpg','jpeg','png','gif'];
            el.bind('change', function (e) {
                var fileinput = e.target.files[0];
                var reader = new FileReader();
                reader.onload = function(loadEvent) {
                    scope.$apply(function () {
                        ngModel.$setViewValue(el.val());
                        ngModel.$render();
                        var file = el[0].files;
                        for( var i =0; i < file.length; i++ ) {
                            var ext = file[i].name.substr((file[i].name.lastIndexOf('.') +1));
                            if(validFormats.indexOf(ext) == -1) {
                                $(el).addClass('ng-invalid-extension');
                                ngModel.$setValidity("extension", false);
                                scope.disabledButton = true;
                                $('.validateMessage').removeClass('ng-hide');
                            } else {
                                $(el).remove('ng-invalid-extension');
                                ngModel.$setValidity("extension", true);
                                scope.disabledButton = false;
                            }
                            if (file[i].size > 2097152) {
                                $(el).addClass('ng-invalid-length');
                                ngModel.$setValidity("length", false);
                                scope.disabledButton = true;
                                $('.validateMessage').removeClass('ng-hide');
                            } else {
                                $(el).remove('ng-invalid-length');
                                ngModel.$setValidity("length", true);
                                scope.disabledButton = false;
                            }
                        }
                    })
                }
                reader.readAsDataURL(fileinput);
            })
        }
    }
}]);

app.directive('ngFormCommit', ['$parse', function($parse) {
    return {
        require:"form",
        link: function($scope, $el, $attr, $form) {
            $form.commit = function() {
                $el[0].submit();
            };
        }
    };
}]);

app.directive('itemsPagination', function () {
    return {
        restrict: 'E',
        template: '<ul ng-if="pager.pages.length" class="pagination">'+
            '<li ng-show="pager.currentPage != 1"><a href="javascript:void(0)" ng-click="setPage(perPage, 1)">Đầu</a></li>'+
            '<li ng-show="pager.currentPage != 1"><a href="javascript:void(0)" ng-click="setPage(perPage, pager.currentPage-1)">Trước</a></li>'+
            '<li ng-repeat="page in pager.pages track by $index" ng-class="{active : pager.currentPage == page}">'+
                '<a href="javascript:void(0)" ng-click="setPage(perPage, page)">{{page}}</a>'+
            '</li>'+
            '<li ng-show="pager.currentPage != pager.totalPages"><a href="javascript:void(0)" ng-click="setPage(perPage, pager.currentPage+1)">Tiếp</a></li>'+
            '<li ng-show="pager.currentPage != pager.totalPages"><a href="javascript:void(0)" ng-click="setPage(perPage, pager.totalPages)">Cuối</a></li>'+
        '</ul>'
    };
});

app.directive('convertToNumber', function() {
    return {
        require: 'ngModel',
        link: function(scope, element, attrs, ngModel) {
            ngModel.$parsers.push(function(val) {
                return parseInt(val, 10);
            });
            ngModel.$formatters.push(function(val) {
                return '' + val;
            });
        }
    };
});

app.directive('ngModel', function() {
    return {
        require: 'ngModel',
        link: function(scope, elem, attr, ngModel) {
            elem.on('blur', function() {
                ngModel.$dirty = true;
                scope.$apply();
            });

            ngModel.$viewChangeListeners.push(function() {
                ngModel.$dirty = false;
            });

            scope.$on('$destroy', function() {
                elem.off('blur');
            });
        }
    }
});

app.directive('onFinishRender', function ($timeout) {
    return {
        restrict: 'A',
        link: function (scope, element, attr) {
            if (scope.$last === true) {
                $timeout(function () {
                    scope.$emit('ngRepeatFinished');
                });
            }
        }
    }
});

app.directive('myEnter', function () {
    return function (scope, element, attrs) {
        element.bind("keydown keypress", function (event) {
            if(event.which === 13) {
                scope.$apply(function (){
                    scope.$eval(attrs.myEnter);
                });

                event.preventDefault();
            }
        });
    };
});
