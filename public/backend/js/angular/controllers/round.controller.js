(function($, app) {
    'use strict';

    angular
        .module('VincomCMS')
        .controller('RoundController', RoundController);

    function RoundController($rootScope, $scope, $http, $window, $timeout, PagerService) {

    	$scope.selectedMembers = [];
        $scope.totalItems = [];
        $scope.pager = {};
        $scope.enableSubmit = false;
        $scope.cateId = 'all-cate';

        $scope.pullDownLists = {
            availableOption: [
              { value: 2, name: '2' },
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

            $http.get(app.vars.baseUrl + '/rounds/getAllRounds?name=' + name, {cache: false})
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
            $scope.getResultsPage('all-round', 10, 1);
        }

        $scope.loadInitCreate = function () {
            $http.get(app.vars.baseUrl + '/categories/getAllParentCates').success(function (res) {
                $scope.parentCates = res.data;
            });
        }

        $scope.searchRoundName = function() {
            if ($scope.searchText.length >= 1) {
                $scope.getResultsPage($scope.searchText, $scope.perPage, $scope.pageNumber);
            } else {
                $scope.getResultsPage('all-round', $scope.perPage, $scope.pageNumber);
            }
        }

        $scope.process = function (type) {    
            var title = (type == 'add') ? 'thêm' : 'cập nhật';
            var formData = new FormData($('#formProcess')[0]);
            
            swal({
                title: "Bạn chắc chắn muốn "+ title +" vòng thi này ?",
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
                    url: app.vars.baseUrl + '/rounds/' + type,
                    data: formData,
                    headers: { 'Content-Type': undefined },
                    transformRequest: angular.identity
                }).success(function (response) {
                    swal({ title: '', text: response.message, type: response.type }, function (isConfirm) {
                        if (isConfirm) {
                            if (response.status) {
                                // toastr.success(response.message, 'SUCCESS');
                                window.location.href = app.vars.baseUrl + '/rounds';
                            } else {
                                // toastr.error(response.message, 'ERROR');
                            }
                        }
                    })
                });
            });
        }

        $scope.delete = function (round, index) {
            swal({
                title: "Bạn chắc chắn muốn xóa vòng thi này ? Toàn bộ kết quả thuộc vòng này sẽ xóa hết !",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: 'Xóa ngay',
                cancelButtonText: "Quay lại",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            }, function () {
                $http({
                    url: app.vars.baseUrl + '/rounds/delete',
                    method: 'POST',
                    data: {
                        roundId: round.id
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





        /////////////////////  VIEW LIST USER VOTE /////////////////////





        $scope.getResultsViewPage = function (roundId, name, cate, perPage, pageNumber) {
            $scope.loading = true;
            $scope.loaded = false;

            $http.get(app.vars.baseUrl + '/rounds/getAllUserRounds?roundId=' + roundId + '&name=' + name + '&cate=' + cate, {cache: false})
                .success(function(response) {

                    $scope.loading = false;
                    $scope.loaded = true;

                    $scope.roundId = roundId;
                    $scope.name = name;
                    $scope.cate = cate;
                    $scope.pullDownLists.selectedOption = { value: perPage, name: perPage };
                    $scope.perPage = perPage;
                    $scope.pageNumber = pageNumber;
                    $scope.totalItems = response.data;
                    $scope.setPage(perPage, pageNumber);

                });
        }

        $scope.loadInitView = function (roundId) {
        	$scope.getResultsViewPage(roundId, 'all-member', 'all-cate', 2, 1);
        }

        $scope.searchUserRoundName = function() {
            if ($scope.searchText.length >= 1) {
                $scope.getResultsViewPage($scope.roundId, $scope.searchText, $scope.cate, $scope.perPage, $scope.pageNumber);
            } else {
                $scope.getResultsViewPage($scope.roundId, 'all-member', $scope.cate, $scope.perPage, $scope.pageNumber);
            }
        }

        $scope.handleChosenMember = function (mem) {
        	if (mem.isChecked) {
        		mem.is_selected = true;
		        $scope.selectedMembers.push(mem.id);
		    } else {
		        var toDel = $scope.selectedMembers.indexOf(mem);
		        $scope.selectedMembers.splice(toDel);
		        mem.is_selected = false;
		    }
        }

        $scope.handleChosenAllMember = function () {
            $scope.selectedMembers = [];
        	if ($scope.isAllChecked) {
                angular.forEach($scope.totalItems, function (v, k) {
                    v.is_selected = true;
                    $scope.selectedMembers.push(v.id);
                });
            } else {
                angular.forEach($scope.totalItems, function (v, k) {
                    v.is_selected = false;
                });
            }
            $scope.setPage($scope.perPage, $scope.pageNumber);
        }

    }
})($, $.app);