<?php

// \Route::group(['namespace' => 'admin'], function() {

    \Route::group(['prefix' => 'admin', 'middleware' => ['admin.values']], function () {

        \Route::group(['middleware' => ['admin.guest']], function () {
            //Authentication Routes
            $this->get('login', 'Admin\Auth\LoginController@showLogin')->name('login');
            $this->post('login', 'Admin\Auth\LoginController@login');
            $this->post('logout', 'Admin\Auth\LoginController@logoutAdmin')->name('logout');

            // // Register Routes...
            // $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
            // $this->post('register', 'Auth\RegisterController@register');

            // // Password Reset Routes...
            // $this->get('password/email', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
            // $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
            // $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
            // $this->post('password/reset', 'Auth\ResetPasswordController@reset');
        });

        \Route::group(['middleware' => ['admin.auth']], function () {
            Route::group(['middleware' => 'admin.role:Superadmin,Admin'], function () {

                // dashboard
                $this->get('', 'Admin\DashboardController@index');
                
                // category
                $this->get('categories', 'Admin\CategoryController@index')->name('categories');
                $this->get('categories/getAllCategories', 'Admin\CategoryController@getAllCategories');
                $this->get('categories/getAllParentCates', 'Admin\CategoryController@getAllParentCates');
                $this->post('categories/add', 'Admin\CategoryController@add');
                $this->post('categories/update', 'Admin\CategoryController@update');
                $this->post('categories/delete', 'Admin\CategoryController@delete');

                // product
                $this->get('products', 'Admin\ProductController@index')->name('products');
                $this->get('products/getAllProducts', 'Admin\ProductController@getAllProducts');
                $this->get('products/create', 'Admin\ProductController@create')->name('product-create');
                $this->get('products/edit/{id}', 'Admin\ProductController@edit')->name('product-edit');
                $this->post('products/add', 'Admin\ProductController@add');
                $this->post('products/update', 'Admin\ProductController@update');
                $this->post('products/delete', 'Admin\ProductController@delete');

            });
        });

    });

// });