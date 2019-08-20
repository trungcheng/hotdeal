(function($, app) {
    'use strict';

    angular
        .module('VincomCMS')
        .controller('UserController', UserController);

    function UserController($rootScope, $scope, $http, $window, $timeout, PagerService) {

        $scope.totalItems = [];
        $scope.pager = {};
        $scope.enableSubmit = false;

        $scope.pullDownLists = {
            availableOption: [
              { value: 10, name: '10' },
              { value: 25, name: '25' },
              { value: 50, name: '50' },
              { value: 100, name: '100' },
              { value: 200, name: '200' }
            ],
            selectedOption: {value: 10, name: '10'}
        };

        $scope.getResultsPage = function (name, perPage, pageNumber) {
            $scope.loading = true;
            $scope.loaded = false;

            $http.get(app.vars.baseUrl + '/users/getAllUsers?name=' + name, {cache: false})
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
            $scope.getResultsPage('all-user', 10, 1);
        }

        $scope.searchUserName = function() {
            if ($scope.searchText.length >= 1) {
                $scope.getResultsPage($scope.searchText, $scope.perPage, $scope.pageNumber);
            } else {
                $scope.getResultsPage('all-user', $scope.perPage, $scope.pageNumber);
            }
        }

        $scope.delete = function (user, index) {
            swal({
                title: "Bạn chắc chắn muốn xóa user này ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: 'Xóa ngay',
                cancelButtonText: "Quay lại",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            }, function () {
                $http({
                    url: app.vars.baseUrl + '/users/delete',
                    method: 'POST',
                    data: {
                        userId: user.id
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