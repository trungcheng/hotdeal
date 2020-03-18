(function($, app) {
    'use strict';

    angular
        .module('LindoCMS')
        .controller('WebDesignController', WebDesignController);

    function WebDesignController($rootScope, $scope, $http, $window, $timeout, PagerService) {

        $scope.totalItems = [];
        $scope.pager = {};
        $scope.enableSubmit = false;

        $scope.pullDownLists = {
            availableOption: [
              { value: 10, name: '10' },
              { value: 50, name: '50' },
              { value: 100, name: '100' },
              { value: 200, name: '200' }
            ],
            selectedOption: {value: 50, name: '50'}
        };

        $scope.getResultsPage = function (name, perPage, pageNumber) {
            $scope.loading = true;
            $scope.loaded = false;

            $http.get(app.vars.baseUrl + '/services/web-design/getAllServices?name=' + name, {cache: false})
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
            if (currentPage < 1 || currentPage > $scope.pager.totalPages) return;
            $scope.pager = PagerService.GetPager($scope.totalItems.length, currentPage, pageSize);
            $scope.items = $scope.totalItems.slice($scope.pager.startIndex, $scope.pager.endIndex + 1);
            $scope.from = $scope.pager.startIndex + 1;
            $scope.to = $scope.pager.endIndex + 1;
            $scope.total = $scope.pager.totalItems;
        }

        $scope.loadInit = function () {
            $scope.getResultsPage('all-service', 50, 1);
        }

        $scope.searchServiceName = function() {
            if ($scope.searchText.length >= 1) {
                $scope.getResultsPage($scope.searchText, $scope.perPage, $scope.pageNumber);
            } else {
                $scope.getResultsPage('all-service', $scope.perPage, $scope.pageNumber);
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

        $scope.process = function (type) {
            
            var title = (type == 'add') ? 'thêm' : 'cập nhật';
            var formData = new FormData($('#formProcess')[0]);
            
            swal({
                title: "Bạn chắc chắn muốn "+ title +" dịch vụ này ?",
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
                    url: app.vars.baseUrl + '/services/web-design/' + type,
                    data: formData,
                    headers: { 'Content-Type': undefined },
                    transformRequest: angular.identity
                }).success(function (response) {
                    swal({ title: '', text: response.message, type: response.type }, function (isConfirm) {
                        if (isConfirm) {
                            if (response.status) {
                                // toastr.success(response.message, 'SUCCESS');
                                window.location.href = app.vars.baseUrl + '/services/web-design';
                            } else {
                                // toastr.error(response.message, 'ERROR');
                            }
                        }
                    })
                });
            });
        }

        $scope.delete = function (service, index) {
            swal({
                title: "Bạn chắc chắn muốn xóa dịch vụ này ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: 'Xóa ngay',
                cancelButtonText: "Quay lại",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            }, function () {
                $http({
                    url: app.vars.baseUrl + '/services/web-design/delete',
                    method: 'POST',
                    data: {
                        serviceId: service.id
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