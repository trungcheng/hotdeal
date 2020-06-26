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

                // media partner logos
                $this->get('media/partner-logos', 'Admin\SettingController@partnerLogos')->name('media-partner-logos');
                $this->post('media/partner-logos/update', 'Admin\SettingController@updatePartnerLogos');

                // media contact questions
                $this->get('media/contact-questions', 'Admin\SettingController@contactQuestions')->name('media-contact-questions');
                $this->post('media/contact-questions/update', 'Admin\SettingController@updateContactQuestions');

                // page
                $this->get('page/{page}', 'Admin\PageController@getPage');
                $this->post('page/update', 'Admin\PageController@update');

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