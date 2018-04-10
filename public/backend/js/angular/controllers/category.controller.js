(function($, app) {
    'use strict';

    angular
        .module('HotdealCMS')
        .controller('CategoryController', CategoryController);

    function CategoryController($rootScope, $scope, $http, $window, $timeout) {

    	$scope.categories = [];
    	$scope.totalPages = 0;
        $scope.currentPage = 1;
        $scope.range = [];
        $scope.enableSubmit = false;

        $scope.pullDownLists = {
            availableOption: [
              { value: 10, name: '10' },
              { value: 25, name: '25' },
              { value: 50, name: '50' },
              { value: 100, name: '100' }
            ],
            selectedOption: {value: 10, name: '10'}
        };

        $scope.getResultsPage = function (name, perPage, pageNumber) {
            $scope.loading = true;
            $scope.loaded = false;

            $http.get(app.vars.baseUrl + '/categories/getAllCategories?name=' + name + '&perPage=' + perPage + '&page=' + pageNumber, {cache: false})
                .success(function(response) {

                    $scope.loading = false;
                    $scope.loaded = true;

                    $scope.name = name;
                    $scope.pullDownLists.selectedOption = { value: perPage, name: perPage };
                    $scope.perPage = perPage;
                    $scope.pageNumber = pageNumber;
                    $scope.totalPages = response.data.last_page;
                    $scope.currentPage = response.data.current_page;
                    $scope.from = response.data.from;
                    $scope.to = response.data.to;
                    $scope.total = response.data.total;
                    var pages = [];
                    for (var i = 1; i <= response.data.last_page; i++) {          
                        pages.push(i);
                    }
                    $scope.range = pages;
                    if ($scope.totalPages == 0) {
                        $scope.currentPage = 0;
                    }
                    $scope.categories = response.data.data;
                    $scope.totalItems = response.data.total;

                });
        }

        $scope.loadInit = function () {
            $scope.getResultsPage('all-category', 10, 1);
        }

        $scope.searchCategoryName = function() {
            if ($scope.searchText.length >= 1) {
                $scope.getResultsPage($scope.searchText, $scope.perPage, $scope.pageNumber);
            } else {
                $scope.getResultsPage('all-category', $scope.perPage, $scope.pageNumber);
            }
        }

        $scope.previousPage = function () {
            $scope.pageNumber -= 1;
            $scope.getResultsPage($scope.searchText, $scope.perPage, $scope.pageNumber);
        }

        $scope.nextPage = function () {
            $scope.pageNumber += 1;
            $scope.getResultsPage($scope.searchText, $scope.perPage, $scope.pageNumber);
        }

        var ui = {
            objectItem:
            '<div class="col-md-6">'+
            '<div class="list-checkbox-item">'+
            '<label class="custom-control custom-checkbox custom-checkbox-style-1">'+
            '<input name="obj[]" type-attr="{type}" text-attr="{text}" value="{id}" type="checkbox" class="custom-control-input" {checked}>'+
            '<span class="custom-control-indicator"></span>'+
            '<span style="color: {color}" class="custom-control-description">{text}</span>'+
            '</label>'+
            '</div>'+
            '</div>'
        }

    }
})($, $.app);