<?php

// \Route::group(['namespace' => 'admin'], function() {

    \Route::group(['prefix' => 'admin/access', 'middleware' => ['admin.values']], function () {

        // \Route::group(['middleware' => ['admin.guest']], function () {
            //Authentication Routes
            $this->get('login', 'Admin\Auth\LoginController@showLoginForm')->name('login');
            $this->post('login', 'Admin\Auth\LoginController@login');
            $this->post('logout', 'Admin\Auth\LoginController@logout')->name('logout');

        // });

        // \Route::group(['middleware' => ['admin.auth']], function () {
            Route::group(['middleware' => 'admin.role:Superadmin,Admin'], function () {

                // dashboard
                $this->get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');

                // profile
                $this->get('/profile', 'Admin\ProfileController@index')->name('profile');
                $this->post('/profile', 'Admin\ProfileController@updateProfile')->name('profile');
                $this->post('/changePass', 'Admin\ProfileController@changePass')->name('change-pass');
                
                // category
                $this->get('categories', 'Admin\CategoryController@index')->name('categories');
                $this->get('categories/getAllCategories', 'Admin\CategoryController@getAllCategories');
                $this->get('categories/getAllParentCates', 'Admin\CategoryController@getAllParentCates');
                $this->get('categories/create', 'Admin\CategoryController@create')->name('category-create');
                $this->get('categories/edit/{id}', 'Admin\CategoryController@edit')->name('category-edit');
                $this->post('categories/add', 'Admin\CategoryController@add');
                $this->post('categories/update', 'Admin\CategoryController@update');
                $this->post('categories/delete', 'Admin\CategoryController@delete')->middleware('admin.role:Superadmin');

                // article
                $this->get('articles', 'Admin\ArticleController@index')->name('articles');
                $this->get('articles/getAllArticles', 'Admin\ArticleController@getAllArticles');
                $this->get('articles/create', 'Admin\ArticleController@create')->name('article-create');
                $this->get('articles/edit/{id}', 'Admin\ArticleController@edit')->name('article-edit');
                $this->post('articles/add', 'Admin\ArticleController@add');
                $this->post('articles/update', 'Admin\ArticleController@update');
                $this->post('articles/delete', 'Admin\ArticleController@delete');

                // media photos
                $this->get('media/photos', 'Admin\MediaController@photos')->name('media-photos');
                $this->get('media/photos/getAllPhotos', 'Admin\MediaController@getAllPhotos');
                $this->get('media/photos/create', 'Admin\MediaController@createPhoto')->name('media-photo-create');
                $this->get('media/photos/edit/{id}', 'Admin\MediaController@editPhoto')->name('media-photo-edit');
                $this->post('media/photos/add', 'Admin\MediaController@addPhoto');
                $this->post('media/photos/update', 'Admin\MediaController@updatePhoto');
                $this->post('media/photos/delete', 'Admin\MediaController@deletePhoto');

                // media videos
                $this->get('media/videos', 'Admin\MediaController@videos')->name('media-videos');
                $this->get('media/videos/getAllVideos', 'Admin\MediaController@getAllVideos');
                $this->get('media/videos/create', 'Admin\MediaController@createVideo')->name('media-video-create');
                $this->get('media/videos/edit/{id}', 'Admin\MediaController@editVideo')->name('media-video-edit');
                $this->post('media/videos/add', 'Admin\MediaController@addVideo');
                $this->post('media/videos/update', 'Admin\MediaController@updateVideo');
                $this->post('media/videos/delete', 'Admin\MediaController@deleteVideo');

                // media slides
                $this->get('media/slides', 'Admin\MediaController@slides')->name('media-slides');
                $this->get('media/slides/getAllSlides', 'Admin\MediaController@getAllSlides');
                $this->get('media/slides/create', 'Admin\MediaController@createSlide')->name('media-slide-create');
                $this->get('media/slides/edit/{id}', 'Admin\MediaController@editSlide')->name('media-slide-edit');
                $this->post('media/slides/add', 'Admin\MediaController@addSlide');
                $this->post('media/slides/update', 'Admin\MediaController@updateSlide');
                $this->post('media/slides/delete', 'Admin\MediaController@deleteSlide');

                // media partner logos
                $this->get('media/partner-logos', 'Admin\SettingController@partnerLogos')->name('media-partner-logos');
                $this->post('media/partner-logos/update', 'Admin\SettingController@updatePartnerLogos');

                // user
                Route::group(['middleware' => 'admin.role:Superadmin'], function () {
                    $this->get('users', 'Admin\UserController@index')->name('users');
                    $this->get('users/getAllUsers', 'Admin\UserController@getAllUsers');
                    $this->get('users/create', 'Admin\UserController@create')->name('user-create');
                    $this->get('users/edit/{id}', 'Admin\UserController@edit')->name('user-edit');
                    $this->post('users/add', 'Admin\UserController@add');
                    $this->post('users/update', 'Admin\UserController@update');
                    $this->post('users/delete', 'Admin\UserController@delete');
                });

                //setting
                $this->get('setting', 'Admin\SettingController@index');
                $this->post('setting/update', 'Admin\SettingController@update');

            });
        // });

    });

// });