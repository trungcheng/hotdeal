(function ($, app) {
    'use strict';

    angular
        .module('AutwatchCMS')
        .controller('TransactionController', TransactionController);

    function TransactionController($rootScope, $scope, $http, $window, $timeout, $location) {

        $scope.transactions = [];
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

        $scope.coinTypeList = {
            availableOption: [
                { value: 'all', name: 'all' },
                { value: 'btc', name: 'btc' },
                { value: 'eth', name: 'eth' },
                { value: 'cap', name: 'cap' },
                { value: 'usdt', name: 'usdt' }
            ],
            selectedOption: { value: 'all', name: 'all' }
        };

        $scope.transTypeList = {
            availableOption: [
                { value: 'all', name: 'all' },
                { value: 10, name: 'Nạp' },
                { value: 11, name: "Nhận lãi hàng ngày" },
                { value: 12, name: 'Nhận hoa hồng trực tiếp' },
                { value: 13, name: 'Nhận hoa hồng cân nhánh' },
                { value: 14, name: 'Nhận hoa hồng thu nhập trên thu nhập' },
                { value: 15, name: 'Refund' },
                { value: 16, name: 'Giao dịch tăng số dư của admin (từ việc mua gói,...)' },
                { value: 20, name: 'Rút' },
                { value: 21, name: 'Mua gói' },
                { value: 22, name: 'Trừ số dư CAP user khi sell CAP' },
                { value: 23, name: 'Cộng số dư CAP admin khi user sell CAP' },
                { value: 24, name: 'Cộng số dư BTC/ETH/USDT của user khi sell CAP' },
                { value: 25, name: 'Trừ số dư BTC/ETH/USDT của admin khi user sell CAP' }

            ],
            selectedOption: { value: 'all', name: 'all' }
        };


        $scope.transStatusList = {
            availableOption: [
                { value: 'all', name: 'all' },
                { value: 4, name: 'Giao dịch Fail do Egate từ chối' },
                { value: 3, name: "Giao dịch Fail do Admin từ chối" },
                { value: 2, name: 'Giao dịch Fail Do user không thực hiện conﬁrm email' },
                { value: 1, name: 'Thành công' },
                { value: 0, name: 'Pending' },
                { value: -1, name: 'Chờ admin approve' },
                { value: -2, name: 'Chờ confirm email' }

            ],
            selectedOption: { value: 'all', name: 'all' }
        };

        $scope.getResultsPage = function (name, perPage, pageNumber, coinType, transType, transStatus) {
            console.log(111111111111);
            $scope.loading = true;
            $scope.loaded = false;

            if (!coinType)
                coinType = $scope.coinType;
            if (!transType)
                transType = $scope.transType;
            if (!transStatus)
                transStatus = $scope.transStatus;

            let coin_typeStr = '';
            let trans_typeStr = '';
            let trans_statusStr = '';

            if (coinType != 'all')
                coin_typeStr = '&coinType=' + coinType;

            if (transType != 'all')
                trans_typeStr = '&transType=' + transType;

            if (transStatus != 'all')
                trans_statusStr = '&transStatus=' + transStatus;

            $http.get(app.vars.baseUrl + '/transaction/getAllTransactions?name=' + name + coin_typeStr + trans_typeStr + trans_statusStr
                + '&perPage=' + perPage + '&page=' + pageNumber, { cache: false })
                .success(function (response) {

                    $scope.loading = false;
                    $scope.loaded = true;

                    $scope.name = name;
                    $scope.pullDownLists.selectedOption = { value: perPage, name: perPage };
                    $scope.coinTypeList.selectedOption = { value: coinType, name: coinType };
                    $scope.transTypeList.selectedOption = { value: transType, name: transType };
                    $scope.transStatusList.selectedOption = { value: transStatus, name: transStatus };


                    $scope.perPage = perPage;
                    $scope.coinType = coinType;
                    $scope.transType = transType;
                    $scope.transStatus = transStatus;

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
                    $scope.transactions = response.data.data;
                    $scope.totalItems = response.data.total;

                });
        }

        $scope.loadInit = function () {
            $scope.getResultsPage('all-transaction', 10, 1,'all','all','all');
            
        }

        $scope.search = function () {
            if ($scope.searchText.length >= 1) {
                $scope.getResultsPage($scope.searchText, $scope.perPage, $scope.pageNumber, $scope.coinType, $scope.transType, $scope.transStatus);
            } else {
                $scope.getResultsPage('all-transaction', $scope.perPage, $scope.pageNumber, $scope.coinType, $scope.transType, $scope.transStatus);
            }
        }

        $scope.previousPage = function () {
            console.log("previousPage");
            console.log($scope.coinType);
            console.log($scope.transType);
            console.log($scope.transStatus);
            $scope.pageNumber -= 1;
            $scope.getResultsPage($scope.searchText, $scope.perPage, $scope.pageNumber, $scope.coinType, $scope.transType, $scope.transStatus);
        }

        $scope.nextPage = function () {
            console.log("nextPage");
            console.log($scope.coinType);
            console.log($scope.transType);
            console.log($scope.transStatus);
            $scope.pageNumber += 1;
            $scope.getResultsPage($scope.searchText, $scope.perPage, $scope.pageNumber, $scope.coinType, $scope.transType, $scope.transStatus);
        }

        $scope.range = function (min, max, step) {
            step = step || 1;
            var input = [];
            for (var i = min; i <= max; i += step) input.push(i);
            return input;
        };

        $scope.changeStatus = function(trans_id, status){
            console.log(status);
            console.log(trans_id);

            swal({
                title: "Bạn chắc chắn thao tác này ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-success",
                confirmButtonText: "Đồng ý",
                cancelButtonText: "Quay lại",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            }, function () {
                console.log("OK");
                $http({
                    method: 'GET',
                    url: app.vars.baseUrl + '/transaction/' + trans_id + '/changeStatus?status=' + status,
                    headers: { 'Content-Type': undefined },
                    transformRequest: angular.identity
                }).success(function (response) {
                    swal({ title: '', text: response.message, type: response.type }, function (isConfirm) {
                        if (isConfirm) {
                            if (response.status) {
                                // $window.location.reload();
                            } else {
                            }
                        }
                    })
                });
            });

        }

    }
})($, $.app);