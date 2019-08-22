(function($, app) {
    'use strict';

    angular
        .module('VincomCMS')
        .controller('StatisticalController', StatisticalController);

    function StatisticalController($rootScope, $scope, $http, $window, $timeout, PagerService) {

        $scope.data = [];

        $scope.getResultPages = function (date) {
            $scope.loading = true;

            $http.get(app.vars.baseUrl + '/statistical/loadDataChart?date=' + date, {cache: false})
                .success(function(response) {

                    $scope.loading = false;
                    var data = response.map(function (item) {
                        return {
                            name: (item.parentCate !== null) ? item.name + ' ('+item.parentCate+')' : item.name,
                            y: parseInt(item.totalVote)
                        }
                    });
                    console.log(data);
                    $scope.data = [
                        { name: 'Chrome', y: 61.41 },
                        { name: 'Internet Explorer', y: 11.84 },
                        { name: 'Firefox', y: 10.85 },
                        { name: 'Edge', y: 4.67 },
                        { name: 'Safari', y: 4.18 },
                        { name: 'Other', y: 7.05 }
                    ];
                    
                    $scope.loadChart($scope.data);

                });
        };

        $scope.loadInit = function () {
            $scope.getResultPages('2019-09-02 00:00:00,2019-10-31 23:59:59');
        }

        $('#daterange').on('apply.daterangepicker', function (ev, picker) {
            var start_time = $(this).data('daterangepicker').startDate.format('YYYY-MM-DD');
            var end_time = $(this).data('daterangepicker').endDate.format('YYYY-MM-DD');
            var date = start_time + ' 00:00:00' + ',' + end_time + ' 23:59:59';
            $scope.getResultPages(date);
        });

        $('#daterange').on('cancel.daterangepicker', function (ev, picker) {
            $('#daterange').val('2019/09/02 - 2019/10/31');
            $scope.getResultPages(date);
        });

        $scope.loadChart = function (data) {
            Highcharts.setOptions({
                colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
                    return {
                        radialGradient: {
                            cx: 0.5,
                            cy: 0.3,
                            r: 0.7
                        },
                        stops: [
                            [0, color],
                            [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
                        ]
                    };
                })
            });
            Highcharts.chart('chart-container', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Thống kê số lượt bình chọn theo khối (phòng/ban)'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            },
                            connectorColor: 'silver'
                        }
                    }
                },
                series: [{
                    name: 'Tỉ lệ bình chọn',
                    data: data
                }]
            });
        };

    }
})($, $.app);