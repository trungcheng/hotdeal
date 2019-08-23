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
            $scope.getResultsPage('all-round', 30, 1);
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
        	$scope.getResultsViewPage(roundId, 'all-member', 'all-cate', 30, 1);
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
		        $scope.selectedMembers.push(mem.user_id);
		    } else {
		        var toDel = $scope.selectedMembers.indexOf(mem);
		        $scope.selectedMembers.splice(toDel);
		    }
        }

        $scope.handleChosenAllMember = function () {
            $scope.selectedMembers = [];
        	if ($scope.isAllChecked) {
                angular.forEach($scope.totalItems, function (v, k) {
                	v.isChecked = true;
                    $scope.selectedMembers.push(v.user_id);
                });
            } else {
                angular.forEach($scope.totalItems, function (v, k) {
                    v.isChecked = false;
                });
            }
            $scope.setPage($scope.perPage, $scope.pageNumber);
        }

        $scope.submitSelectModeMember = function (currentRoundId, runningRoundId, mode) {
        	swal({
                title: "Bạn chắc chắn muốn xác nhận hành động này?",
                type: "info",
                showCancelButton: true,
                confirmButtonClass: "btn-info",
                confirmButtonText: 'Xác nhận ngay',
                cancelButtonText: "Quay lại",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            }, function () {
                $http({
                    url: app.vars.baseUrl + '/rounds/user-round/submitSelectMode',
                    method: 'POST',
                    data: {
                        currentRoundId: currentRoundId,
                        runningRoundId: runningRoundId,
                        selectedMembers: $scope.selectedMembers,
                        mode: mode
                    }
                }).success(function (response) {
                    swal({ title: '', text: response.message, type: response.type }, function (isConfirm) {
                        if (isConfirm) {
                            if (response.status) {
                                // toastr.success(response.message, 'SUCCESS');
                                $scope.loadInitView(currentRoundId);
                                $scope.isAllChecked = false;
                            } else {
                                // toastr.error(response.message, 'ERROR');
                            }
                        }
                    })
                });
            });
        }

        $scope.removeSelectedMember = function (roundId) {
        	swal({
                title: "Bạn chắc chắn muốn xóa những nhân vật đã lựa chọn khỏi vòng này?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: 'Xóa ngay',
                cancelButtonText: "Quay lại",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            }, function () {
                $http({
                    url: app.vars.baseUrl + '/rounds/user-round/delete',
                    method: 'POST',
                    data: {
                        roundId: roundId,
                        members: $scope.selectedMembers
                    }
                }).success(function (response) {
                    swal({ title: '', text: response.message, type: response.type }, function (isConfirm) {
                        if (isConfirm) {
                            if (response.status) {
                                // toastr.success(response.message, 'SUCCESS');
                                $scope.loadInitView(roundId);
                                $scope.isAllChecked = false;
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