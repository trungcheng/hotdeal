(function($, app) {
    'use strict';

    angular
        .module('UticoCMS')
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
            selectedOption: {value: 10, name: '10'}
        };

        $scope.setPage = function (pageSize, currentPage) {
            if (currentPage < 1 || currentPage > $scope.pager.totalPages) return;
            $scope.pager = PagerService.GetPager($scope.totalItems.length, currentPage, pageSize);
            $scope.items = $scope.totalItems.slice($scope.pager.startIndex, $scope.pager.endIndex + 1);
            $scope.from = $scope.pager.startIndex + 1;
            $scope.to = $scope.pager.endIndex + 1;
            $scope.total = $scope.pager.totalItems;
            $scope.pullDownLists.selectedOption = { value: pageSize, name: pageSize };
        }

        // ******************************** PHOTO ********************************* //

        $scope.getPhotoResults = function (name, perPage, pageNumber) {
            $scope.loading = true;
            $scope.loaded = false;

            $http.get(app.vars.baseUrl + '/media/photos/getAllPhotos?name=' + name, {cache: false})
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

        $scope.loadPhotoInit = function () {
            $scope.getPhotoResults('all-photo', 10, 1);
        }

        $scope.loadInitCatePhoto = function () {
            $http.get(app.vars.baseUrl + '/categories/getAllParentCates?ids=19').success(function (res) {
                $scope.parentCates = res.data;
            });
        }

        $scope.searchAlbumName = function() {
            if ($scope.searchText.length >= 1) {
                $scope.getPhotoResults($scope.searchText, $scope.perPage, $scope.pageNumber);
            } else {
                $scope.getPhotoResults('all-photo', $scope.perPage, $scope.pageNumber);
            }
        }

        $scope.processPhoto = function (type) {
            
            var title = (type == 'add') ? 'thêm' : 'cập nhật';
            var formData = new FormData($('#formProcess')[0]);
            
            swal({
                title: "Bạn chắc chắn muốn "+ title +" album này ?",
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
                    url: app.vars.baseUrl + '/media/photos/' + type,
                    data: formData,
                    headers: { 'Content-Type': undefined },
                    transformRequest: angular.identity
                }).success(function (response) {
                    swal({ title: '', text: response.message, type: response.type }, function (isConfirm) {
                        if (isConfirm) {
                            if (response.status) {
                                // toastr.success(response.message, 'SUCCESS');
                                window.location.href = app.vars.baseUrl + '/media/photos';
                            } else {
                                // toastr.error(response.message, 'ERROR');
                            }
                        }
                    })
                });
            });
        }

        $scope.deletePhoto = function (album, index) {
            swal({
                title: "Bạn chắc chắn muốn xóa album này ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: 'Xóa ngay',
                cancelButtonText: "Quay lại",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            }, function () {
                $http({
                    url: app.vars.baseUrl + '/media/photos/delete',
                    method: 'POST',
                    data: {
                        articleId: album.id
                    }
                }).success(function (response) {
                    swal({ title: '', text: response.message, type: response.type }, function (isConfirm) {
                        if (isConfirm) {
                            if (response.status) {
                                // toastr.success(response.message, 'SUCCESS');
                                $scope.loadPhotoInit();
                            } else {
                                // toastr.error(response.message, 'ERROR');
                            }
                        }
                    })
                });
            });
        }




        // ******************************** VIDEO ********************************* //

        $scope.getVideoResults = function (name, perPage, pageNumber) {
            $scope.loading = true;
            $scope.loaded = false;

            $http.get(app.vars.baseUrl + '/media/videos/getAllVideos?name=' + name, {cache: false})
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

        $scope.loadVideoInit = function () {
            $scope.getVideoResults('all-video', 10, 1);
        }

        $scope.loadInitCateVideo = function () {
            $http.get(app.vars.baseUrl + '/categories/getAllParentCates?ids=20').success(function (res) {
                $scope.parentCates = res.data;
            });
        }

        $scope.searchVideoName = function() {
            if ($scope.searchText.length >= 1) {
                $scope.getVideoResults($scope.searchText, $scope.perPage, $scope.pageNumber);
            } else {
                $scope.getVideoResults('all-video', $scope.perPage, $scope.pageNumber);
            }
        }

        $scope.processVideo = function (type) {
            
            var title = (type == 'add') ? 'thêm' : 'cập nhật';
            var formData = new FormData($('#formProcess')[0]);
            
            swal({
                title: "Bạn chắc chắn muốn "+ title +" video này ?",
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
                    url: app.vars.baseUrl + '/media/videos/' + type,
                    data: formData,
                    headers: { 'Content-Type': undefined },
                    transformRequest: angular.identity
                }).success(function (response) {
                    swal({ title: '', text: response.message, type: response.type }, function (isConfirm) {
                        if (isConfirm) {
                            if (response.status) {
                                // toastr.success(response.message, 'SUCCESS');
                                window.location.href = app.vars.baseUrl + '/media/videos';
                            } else {
                                // toastr.error(response.message, 'ERROR');
                            }
                        }
                    })
                });
            });
        }

        $scope.deleteVideo = function (video, index) {
            swal({
                title: "Bạn chắc chắn muốn xóa video này ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: 'Xóa ngay',
                cancelButtonText: "Quay lại",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            }, function () {
                $http({
                    url: app.vars.baseUrl + '/media/videos/delete',
                    method: 'POST',
                    data: {
                        articleId: video.id
                    }
                }).success(function (response) {
                    swal({ title: '', text: response.message, type: response.type }, function (isConfirm) {
                        if (isConfirm) {
                            if (response.status) {
                                // toastr.success(response.message, 'SUCCESS');
                                $scope.loadVideoInit();
                            } else {
                                // toastr.error(response.message, 'ERROR');
                            }
                        }
                    })
                });
            });
        }






        // ******************************** PARTNER LOGOS ********************************* //

        $scope.updatePartnerLogo = function () {
            
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
            }, function () {
                $http({
                    method: 'POST',
                    url: app.vars.baseUrl + '/media/partner-logos/update',
                    data: formData,
                    headers: { 'Content-Type': undefined },
                    transformRequest: angular.identity
                }).success(function (response) {
                    swal({ title: '', text: response.message, type: response.type }, function (isConfirm) {
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






        // ******************************** SLIDES ********************************* //

        $scope.getSlideResults = function (name, perPage, pageNumber) {
            $scope.loading = true;
            $scope.loaded = false;

            $http.get(app.vars.baseUrl + '/media/slides/getAllSlides?name=' + name, {cache: false})
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

        $scope.loadSlideInit = function () {
            $scope.getSlideResults('all-slide', 10, 1);
        }

        $scope.searchSlideName = function() {
            if ($scope.searchText.length >= 1) {
                $scope.getSlideResults($scope.searchText, $scope.perPage, $scope.pageNumber);
            } else {
                $scope.getSlideResults('all-slide', $scope.perPage, $scope.pageNumber);
            }
        }

        $scope.processSlide = function (type) {
            
            var title = (type == 'add') ? 'thêm' : 'cập nhật';
            var formData = new FormData($('#formProcess')[0]);
            
            swal({
                title: "Bạn chắc chắn muốn "+ title +" slide này ?",
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
                    url: app.vars.baseUrl + '/media/slides/' + type,
                    data: formData,
                    headers: { 'Content-Type': undefined },
                    transformRequest: angular.identity
                }).success(function (response) {
                    swal({ title: '', text: response.message, type: response.type }, function (isConfirm) {
                        if (isConfirm) {
                            if (response.status) {
                                // toastr.success(response.message, 'SUCCESS');
                                window.location.href = app.vars.baseUrl + '/media/slides';
                            } else {
                                // toastr.error(response.message, 'ERROR');
                            }
                        }
                    })
                });
            });
        }

        $scope.deleteSlide = function (slide, index) {
            swal({
                title: "Bạn chắc chắn muốn xóa slide này ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: 'Xóa ngay',
                cancelButtonText: "Quay lại",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            }, function () {
                $http({
                    url: app.vars.baseUrl + '/media/slides/delete',
                    method: 'POST',
                    data: {
                        articleId: slide.id
                    }
                }).success(function (response) {
                    swal({ title: '', text: response.message, type: response.type }, function (isConfirm) {
                        if (isConfirm) {
                            if (response.status) {
                                // toastr.success(response.message, 'SUCCESS');
                                $scope.loadSlideInit();
                            } else {
                                // toastr.error(response.message, 'ERROR');
                            }
                        }
                    })
                });
            });
        }






        // ******************************** SLOGAN SLIDES ********************************* //

        $scope.getSloganSlideResults = function (name, perPage, pageNumber) {
            $scope.loading = true;
            $scope.loaded = false;

            $http.get(app.vars.baseUrl + '/media/slogan-slides/getAllSloganSlides?name=' + name, {cache: false})
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

        $scope.loadSloganSlideInit = function () {
            $scope.getSloganSlideResults('all-slogan-slide', 10, 1);
        }

        $scope.searchSloganSlideName = function() {
            if ($scope.searchText.length >= 1) {
                $scope.getSloganSlideResults($scope.searchText, $scope.perPage, $scope.pageNumber);
            } else {
                $scope.getSloganSlideResults('all-slogan-slide', $scope.perPage, $scope.pageNumber);
            }
        }

        $scope.processSloganSlide = function (type) {
            
            var title = (type == 'add') ? 'thêm' : 'cập nhật';
            var formData = new FormData($('#formProcess')[0]);

            formData.append('intro', CKEDITOR.instances.content.document.getBody().getHtml());
            formData.append('en_intro', CKEDITOR.instances.en_content.document.getBody().getHtml());
            formData.append('ko_intro', CKEDITOR.instances.ko_content.document.getBody().getHtml());
            
            swal({
                title: "Bạn chắc chắn muốn "+ title +" slide này ?",
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
                    url: app.vars.baseUrl + '/media/slogan-slides/' + type,
                    data: formData,
                    headers: { 'Content-Type': undefined },
                    transformRequest: angular.identity
                }).success(function (response) {
                    swal({ title: '', text: response.message, type: response.type }, function (isConfirm) {
                        if (isConfirm) {
                            if (response.status) {
                                // toastr.success(response.message, 'SUCCESS');
                                window.location.href = app.vars.baseUrl + '/media/slogan-slides';
                            } else {
                                // toastr.error(response.message, 'ERROR');
                            }
                        }
                    })
                });
            });
        }

        $scope.deleteSloganSlide = function (slide, index) {
            swal({
                title: "Bạn chắc chắn muốn xóa slide này ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: 'Xóa ngay',
                cancelButtonText: "Quay lại",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            }, function () {
                $http({
                    url: app.vars.baseUrl + '/media/slogan-slides/delete',
                    method: 'POST',
                    data: {
                        articleId: slide.id
                    }
                }).success(function (response) {
                    swal({ title: '', text: response.message, type: response.type }, function (isConfirm) {
                        if (isConfirm) {
                            if (response.status) {
                                // toastr.success(response.message, 'SUCCESS');
                                $scope.loadSloganSlideInit();
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