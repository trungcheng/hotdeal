(function($, app) {
    'use strict';

    angular
        .module('HotongCMS')
        .controller('UsersController', UsersController);

    function UsersController($rootScope, $scope, $http, $window, $timeout, $uibModal) {

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
            selectedOption: {value: 10, name: '10'}
        };

        $scope.getResultsPage = function (name, perPage, pageNumber) {
            $scope.loading = true;
            $scope.loaded = false;

            $http.get(app.vars.baseUrl + '/users/getAllUser?name=' + name + '&perPage=' + perPage + '&page=' + pageNumber, {cache: false})
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
                    $scope.users = response.data.data;
                    $scope.totalItems = response.data.total;
                });
        }

        $scope.loadInit = function () {
            $scope.getResultsPage('all-users', 10, 1);
        }

        $scope.searchusergoryName = function() {
            if ($scope.searchText.length >= 1) {
                $scope.getResultsPage($scope.searchText, $scope.perPage, $scope.pageNumber);
            } else {
                $scope.getResultsPage('all-users', $scope.perPage, $scope.pageNumber);
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

        $scope.openModalAdd = function () {
            var uibModalInstance = $uibModal.open({
                animation: true,
                templateUrl: 'popup-add.html',
                scope: $scope,
                controller: ModalInstanceAddCtrl
            });
        }

        var ModalInstanceAddCtrl = function ($scope, $uibModalInstance) {

            $scope.modalAdd = {};
            
            $http.get(app.vars.baseUrl + '/users/getAllRole').success(function (res) {
                $scope.modalAdd.allRole = res.data;
            });

            $scope.modalAdd.selectedOptionStatus = 'Hoạt động';

            $scope.close = function () {
                $uibModalInstance.dismiss('cancel');
            };

            $scope.add = function () {
                swal({
                    title: "Bạn chắc chắn muốn thêm user này ?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-info",
                    confirmButtonText: 'Thêm ngay',
                    cancelButtonText: "Quay lại",
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true
                }, function () {
                    $http({
                        method: 'POST',
                        url: app.vars.baseUrl + '/users/add',
                        data: $scope.modalAdd
                    }).success(function (response) {
                        swal({ title: '', text: response.message, type: response.type }, function (isConfirm) {
                            if (isConfirm) {
                                if (response.status) {
                                    $scope.close();
                                    toastr.success(response.message, 'SUCCESS');
                                    $scope.loadInit();
                                } else {
                                    toastr.error(response.message, 'ERROR');
                                }
                            }
                        })
                    });
                });
            }
        }

        $scope.openModalEdit = function (user) {
            var uibModalInstance = $uibModal.open({
                animation: true,
                templateUrl: 'popup-edit.html',
                scope: $scope,
                controller: ModalInstanceEditCtrl,
                resolve: {
                    user: function () {
                        return user;
                    }
                }
            });
        }

        var ModalInstanceEditCtrl = function ($scope, $uibModalInstance, user) {
            $scope.modalEdit = user;

            $http.get(app.vars.baseUrl + '/users/getAllRole').success(function (res) {
                $scope.modalEdit.allRole = res.data;
            });

            $scope.modalEdit.selectedOptionStatus = (user.status) ? 'Hoạt động' : 'Khóa';

            $scope.close = function () {
                $uibModalInstance.dismiss('cancel');
            };

            $scope.update = function () {
                $http({
                    method: 'POST',
                    url: app.vars.baseUrl + '/users/update',
                    data: {
                        userId: $('#userId').val(),
                        username: $scope.modalEdit.username,
                        fullname: $scope.modalEdit.fullname,
                        password: $scope.modalEdit.password,
                        email: $scope.modalEdit.email,
                        mobile: $scope.modalEdit.mobile,
                        selectedOptionStatus: $scope.modalEdit.selectedOptionStatus,
                        permission: $('#permission option:selected').val()
                    }
                }).success(function (response) {
                    if (response.status) {
                        $scope.close();
                        toastr.success(response.message, 'SUCCESS');
                        $scope.loadInit();
                    } else {
                        toastr.error(response.message, 'ERROR');
                    }
                });
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
                                toastr.success(response.message, 'SUCCESS');
                                $scope.loadInit();
                            } else {
                                toastr.error(response.message, 'ERROR');
                            }
                        }
                    })
                });
            });
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