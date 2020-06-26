(function($, app) {
    'use strict';

    angular
        .module('VisciCMS')
        .controller('MediaController', MediaController);

    function MediaController($rootScope, $scope, $http, $window, $timeout, PagerService) {

        $scope.totalItems = [];
        $scope.pager = {};
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

        $scope.setPage = function(pageSize, currentPage) {
            if (currentPage < 1 || currentPage > $scope.pager.totalPages) return;
            $scope.pager = PagerService.GetPager($scope.totalItems.length, currentPage, pageSize);
            $scope.items = $scope.totalItems.slice($scope.pager.startIndex, $scope.pager.endIndex + 1);
            $scope.from = $scope.pager.startIndex + 1;
            $scope.to = $scope.pager.endIndex + 1;
            $scope.total = $scope.pager.totalItems;
            $scope.pullDownLists.selectedOption = { value: pageSize, name: pageSize };
        }

        // ******************************** PARTNER LOGOS ********************************* //

        $scope.updatePartnerLogo = function() {

            var formData = new FormData($('#formProcess')[0]);

            swal({
                title: "Bạn chắc chắn muốn cập nhật ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-success",
                confirmButtonText: 'Cập nhật ngay',
                cancelButtonText: "Quay lại",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            }, function() {
                $http({
                    method: 'POST',
                    url: app.vars.baseUrl + '/media/partner-logos/update',
                    data: formData,
                    headers: { 'Content-Type': undefined },
                    transformRequest: angular.identity
                }).success(function(response) {
                    swal({ title: '', text: response.message, type: response.type }, function(isConfirm) {
                        if (isConfirm) {
                            if (response.status) {
                                // toastr.success(response.message, 'SUCCESS');
                                window.location.href = app.vars.baseUrl + '/media/partner-logos';
                            } else {
                                // toastr.error(response.message, 'ERROR');
                            }
                        }
                    })
                });
            });
        }

        // ******************************** CONTACT QUESTIONS ********************************* //

        $scope.updateContactQuestions = function() {

            var formData = new FormData($('#formProcess')[0]);

            swal({
                title: "Bạn chắc chắn muốn cập nhật ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-success",
                confirmButtonText: 'Cập nhật ngay',
                cancelButtonText: "Quay lại",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            }, function() {
                $http({
                    method: 'POST',
                    url: app.vars.baseUrl + '/media/contact-questions/update',
                    data: formData,
                    headers: { 'Content-Type': undefined },
                    transformRequest: angular.identity
                }).success(function(response) {
                    swal({ title: '', text: response.message, type: response.type }, function(isConfirm) {
                        if (isConfirm) {
                            if (response.status) {
                                // toastr.success(response.message, 'SUCCESS');
                                window.location.href = app.vars.baseUrl + '/media/contact-questions';
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