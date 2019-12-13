(function ($, app) {
    'use strict';

    angular
        .module('AutwatchCMS')
        .controller('UserController', UserController);

    function UserController($rootScope, $scope, $http, $window, $timeout,$location) {

        $scope.users = [];
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
            selectedOption: { value: 10, name: '10' }
        };

        $scope.getResultsPage = function (name, perPage, pageNumber) {

            // var searchObject = $location.search();

            var admin = window.location.href.toString().split('=')[1];
            $scope.loading = true;
            $scope.loaded = false;

            $http.get(app.vars.baseUrl + '/user/getAllUsers?name=' + name + '&perPage=' + perPage + '&page=' + pageNumber + '&admin=' + admin, { cache: false })
                .success(function (response) {

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
                    $scope.users = response.data.data;
                    $scope.totalItems = response.data.total;

                });
        }

        $scope.loadInit = function () {
            $scope.getResultsPage('all-user', 10, 1);
        }

        $scope.searchUserName = function () {
            if ($scope.searchText.length >= 1) {
                $scope.getResultsPage($scope.searchText, $scope.perPage, $scope.pageNumber);
            } else {
                $scope.getResultsPage('all-user', $scope.perPage, $scope.pageNumber);
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

        $scope.range = function (min, max, step) {
            step = step || 1;
            var input = [];
            for (var i = min; i <= max; i += step) input.push(i);
            return input;
        };

        $scope.lockUser = function (status,id) {
            swal({
                title: "Bạn chắc chắn muốn khoá tài khoản này ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-success",
                confirmButtonText: "Đồng ý",
                cancelButtonText: "Quay lại",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            }, function () {
                $http({
                    method: 'GET',
                    url: app.vars.baseUrl + '/user/edit/' + id + '/lock?lock=' + status,
                    headers: { 'Content-Type': undefined },
                    transformRequest: angular.identity
                }).success(function (response) {
                    swal({ title: '', text: response.message, type: response.type }, function (isConfirm) {
                        if (isConfirm) {
                            if (response.status) {
                                $window.location.reload();
                            } else {
                            }
                        }
                    })
                });
            });
        }

        $scope.setAdmin = function (status,id) {
            swal({
                title: "Bạn chắc chắn set tài khoản này thành admin ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-success",
                confirmButtonText: "Đồng ý",
                cancelButtonText: "Quay lại",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            }, function () {
                $http({
                    method: 'GET',
                    url: app.vars.baseUrl + '/user/edit/' + id + '/admin?admin=' + status,
                    headers: { 'Content-Type': undefined },
                    transformRequest: angular.identity
                }).success(function (response) {
                    swal({ title: '', text: response.message, type: response.type }, function (isConfirm) {
                        if (isConfirm) {
                            if (response.status) {
                                $window.location.reload();
                            } else {
                            }
                        }
                    })
                });
            });
        }
    }
})($, $.app);