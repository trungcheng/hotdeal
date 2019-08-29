(function($, app) {
    'use strict';

    angular
        .module('VincomCMS')
        .controller('StatisticalController', StatisticalController);

    function StatisticalController($rootScope, $scope, $http, $window, $timeout, PagerService) {

        $scope.parents = [];

        $scope.getResultPages = function (roundId, categories, date) {
            $scope.loading = true;

            $http.get(app.vars.baseUrl + '/statistical/loadDataChart?roundId=' + roundId + '&categories=' + categories + '&date=' + date, {cache: false})
                .success(function(response) {

                    $scope.loading = false;

                    $scope.parents = response.data;

                    $timeout(function() {
                        if ($scope.parents.length > 0) {
                            angular.forEach($scope.parents, function (child, idx) {
                                angular.forEach(child.childrens, function (item, k) {
                                    if (item.users.length > 0) {
                                        $scope.loadChart(item.slug, item);
                                        $('#' + item.slug).prepend('<p class="text-center category-title">'+item.name+'</p>');
                                    } else {
                                        $('#' + item.slug).html('<p class="text-center category-title">'+item.name+'</p><p class="text-center no-data">Không có dữ liệu</p>');
                                    }
                                });
                            });
                        }
                    }, 0);

                });
        };

        $scope.loadInit = function (roundId, categories) {
            var date = '2019-09-02,2019-10-31';
            $scope.getResultPages(roundId, categories, date);
        }

        $scope.filter = function () {
            var roundId = $('#round-filter').val();
            var categories = $('#category-filter').select2('data');
            categories = categories.map(function (cate) {
                return cate.id;
            });
            var date = $('#daterange').val();
            date = date.replace(/ /g, '');
            var dates = date.split('-');
            dates = dates.map(function (item) {
                item = item.replace(new RegExp('/', 'g'), '-');
                return item;
            });
            date = dates.join(',');
            $scope.getResultPages(roundId, categories, date);
        }

        $('#daterange').on('apply.daterangepicker', function (ev, picker) {
            // var start_time = $(this).data('daterangepicker').startDate.format('YYYY-MM-DD');
            // var end_time = $(this).data('daterangepicker').endDate.format('YYYY-MM-DD');
            // var date = start_time + ' 00:00:00' + ',' + end_time + ' 23:59:59';
            // $scope.getResultPages(date);
        });

        $('#daterange').on('cancel.daterangepicker', function (ev, picker) {
            $('#daterange').val('2019/09/02 - 2019/10/31');
            // $scope.loadInit();
        });

        $scope.loadChart = function (DOM, data) {
            Highcharts.chart(DOM, {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    // text: (data.name !== '') ? data.name : ''
                    text: ''
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.y} - ({point.percentage:.1f}%)</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '{point.name}: <b>{point.y} - ({point.percentage:.1f}%)</b>',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            },
                            connectorColor: 'silver'
                        }
                    }
                },
                series: [{
                    name: 'Lượt bình chọn',
                    data: data.users
                }]
            });
        };

    }
})($, $.app);