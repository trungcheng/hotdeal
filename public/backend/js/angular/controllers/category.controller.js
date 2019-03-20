(function($, app) {
    'use strict';

    angular
        .module('HotdealCMS')
        .controller('CategoryController', CategoryController);

    function CategoryController($rootScope, $scope, $http, $window, $timeout, $uibModal) {

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

        $scope.types = [{type:1,name:'Sản phẩm'},{type:2,name:'Bài viết'}];

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
         
            $http.get(app.vars.baseUrl + '/categories/getAllParentCates').success(function (res) {
                $scope.modalAdd.parentCates = res.data;
            });

            $scope.modalAdd.selectedOptionStatus = 'Hiển thị';
            $scope.modalAdd.cateType = $scope.types[0].type;

            $scope.close = function () {
                $uibModalInstance.dismiss('cancel');
            };

            $scope.add = function () {
                swal({
                    title: "Bạn chắc chắn muốn thêm danh mục này ?",
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
                        url: app.vars.baseUrl + '/categories/add',
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

        $scope.openModalEdit = function (cate) {
            var uibModalInstance = $uibModal.open({
                animation: true,
                templateUrl: 'popup-edit.html',
                scope: $scope,
                controller: ModalInstanceEditCtrl,
                resolve: {
                    cate: function () {
                        return cate;
                    }
                }
            });
        }

        var ModalInstanceEditCtrl = function ($scope, $uibModalInstance, cate) {
            
            $scope.modalEdit = cate;

            $http.get(app.vars.baseUrl + '/categories/getAllParentCates').success(function (res) {
                $scope.modalEdit.parentCates = res.data;
            });

            $scope.modalEdit.selectedOptionStatus = (cate.status) ? 'Hiển thị' : 'Ẩn';
            $scope.modalEdit.cateType = cate.type;

            $scope.close = function () {
                $uibModalInstance.dismiss('cancel');
            };

            $scope.update = function () {
                swal({
                    title: "Bạn chắc chắn muốn cập nhật danh mục này ?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-info",
                    confirmButtonText: 'Cập nhật ngay',
                    cancelButtonText: "Quay lại",
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true
                }, function () {
                    $http({
                        method: 'POST',
                        url: app.vars.baseUrl + '/categories/update',
                        data: {
                            cateId: $('#cateId').val(),
                            cateName: $scope.modalEdit.name,
                            cateParent: $('#parentCate option:selected').val(),
                            selectedOptionStatus: $scope.modalEdit.selectedOptionStatus,
                            cateType: $scope.modalEdit.cateType
                        }
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

        $scope.delete = function (cate, index) {
            swal({
                title: "Bạn chắc chắn muốn xóa danh mục này ?",
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
})($, $.app);