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
                        if ($(el).hasClass('thumb-file-avatar')) {
                            scope.previewAvatar = loadEvent.target.result;
                            scope.fileAvatarSelected = true;
                            $('#pathImageAvatar').val('');
                        }
                        if ($(el).hasClass('thumb-file-cover')) {
                            scope.previewCover = loadEvent.target.result;
                            scope.fileCoverSelected = true;
                            scope.uploadBtn = true;
                            $('#pathImageCover').val('');
                        }
                        if ($(el).hasClass('ng-invalid')) {
                            $('.validateMessage').removeClass('ng-hide');
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
        template: '<ul class="pagination">'+
            '<li ng-show="currentPage != 1"><a href="javascript:void(0)" ng-click="getResultsPage(name, perPage, 1)">Đầu</a></li>'+
            '<li ng-show="currentPage != 1"><a href="javascript:void(0)" ng-click="getResultsPage(name, perPage, currentPage-1)">Trước</a></li>'+
            '<li ng-repeat="i in range track by $index" ng-class="{active : currentPage == i}">'+
                '<a href="javascript:void(0)" ng-click="getResultsPage(name, perPage, i)">{{i}}</a>'+
            '</li>'+
            '<li ng-show="currentPage != totalPages"><a href="javascript:void(0)" ng-click="getResultsPage(name, perPage, currentPage+1)">Tiếp</a></li>'+
            '<li ng-show="currentPage != totalPages"><a href="javascript:void(0)" ng-click="getResultsPage(name, perPage, totalPages)">Cuối</a></li>'+
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
