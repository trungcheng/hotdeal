(function($, app) {
    'use strict';

    angular
        .module('TasecoCMS')
        .controller('CategoryController', CategoryController);

    function CategoryController($rootScope, $scope, $http, $window, $timeout, PagerService) {

        $scope.totalItems = [];
        $scope.pager = {};
        $scope.enableSubmit = false;

        $scope.pullDownLists = {
            availableOption: [
              { value: 30, name: '30' },
              { value: 50, name: '50' },
              { value: 100, name: '100' },
              { value: 150, name: '150' }
            ],
            selectedOption: {value: 30, name: '30'}
        };

        $scope.getResultsPage = function (name, perPage, pageNumber) {
            $scope.loading = true;
            $scope.loaded = false;

            $http.get(app.vars.baseUrl + '/categories/getAllCategories?name=' + name, {cache: false})
                .success(function(response) {

                    $scope.loading = false;
                    $scope.loaded = true;

                    $scope.name = name;
                    $scope.pullDownLists.selectedOption = { value: perPage, name: perPage };
                    $scope.perPage = perPage;
                    $scope.pageNumber = pageNumber;
                    $scope.totalItems = response.data;
                    $scope.setPage(perPage, pageNumber);

                });
        }

        $scope.setPage = function (pageSize, currentPage) {
            // if (currentPage < 1 || currentPage > $scope.pager.totalPages) return;
            $scope.pager = PagerService.GetPager($scope.totalItems.length, currentPage, pageSize);
            $scope.items = $scope.totalItems.slice($scope.pager.startIndex, $scope.pager.endIndex + 1);
            $scope.from = $scope.pager.startIndex + 1;
            $scope.to = $scope.pager.endIndex + 1;
            $scope.total = $scope.pager.totalItems;
            $scope.pullDownLists.selectedOption = { value: pageSize, name: pageSize };
        }

        $scope.loadInit = function () {
            $scope.getResultsPage('all-category', 30, 1);
        }

        $scope.loadInitCreate = function () {
            $http.get(app.vars.baseUrl + '/categories/getAllParentCates').success(function (res) {
                $scope.parentCates = res.data;
            });
        }

        $scope.searchCategoryName = function() {
            if ($scope.searchText.length >= 1) {
                $scope.getResultsPage($scope.searchText, $scope.perPage, $scope.pageNumber);
            } else {
                $scope.getResultsPage('all-category', $scope.perPage, $scope.pageNumber);
            }
        }

        $scope.process = function (type) {
            
            var title = (type == 'add') ? 'thêm' : 'cập nhật';
            var formData = new FormData($('#formProcess')[0]);
            
            swal({
                title: "Bạn chắc chắn muốn "+ title +" khối này ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-success",
                confirmButtonText: (type == 'add') ? 'Thêm' : 'Cập nhật' + ' ngay',
                cancelButtonText: "Quay lại",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            }, function () {
                $http({
                    method: 'POST',
                    url: app.vars.baseUrl + '/categories/' + type,
                    data: formData,
                    headers: { 'Content-Type': undefined },
                    transformRequest: angular.identity
                }).success(function (response) {
                    swal({ title: '', text: response.message, type: response.type }, function (isConfirm) {
                        if (isConfirm) {
                            if (response.status) {
                                // toastr.success(response.message, 'SUCCESS');
                                window.location.href = app.vars.baseUrl + '/categories';
                            } else {
                                // toastr.error(response.message, 'ERROR');
                            }
                        }
                    })
                });
            });
        }

        $scope.delete = function (cate, index) {
            swal({
                title: "Bạn chắc chắn muốn xóa khối này?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: 'Xóa ngay',
                cancelButtonText: "Quay lại",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            }, function () {
                $http({
                    url: app.vars.baseUrl + '/categories/delete',
                    method: 'POST',
                    data: {
                        cateId: cate.id
                    }
                }).success(function (response) {
                    swal({ title: '', text: response.message, type: response.type }, function (isConfirm) {
                        if (isConfirm) {
                            if (response.status) {
                                // toastr.success(response.message, 'SUCCESS');
                                $scope.loadInit();
                            } else {
                                // toastr.error(response.message, 'ERROR');
                            }
                        }
                    })
                });
            });
        }

    }
})($, $.app);