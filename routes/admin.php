<?php

// \Route::group(['namespace' => 'admin'], function() {

    \Route::group(['prefix' => 'access', 'middleware' => ['admin.values']], function () {

        // \Route::group(['middleware' => ['admin.guest']], function () {
            //Authentication Routes
            $this->get('login', 'Admin\Auth\LoginController@showLoginForm')->name('login');
            $this->post('login', 'Admin\Auth\LoginController@login');
            $this->post('logout', 'Admin\Auth\LoginController@logout')->name('logout');

            // // Register Routes...
            // $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
            // $this->post('register', 'Auth\RegisterController@register');

            // // Password Reset Routes...
            // $this->get('password/email', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
            // $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
            // $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
            // $this->post('password/reset', 'Auth\ResetPasswordController@reset');
        // });

        // \Route::group(['middleware' => ['admin.auth']], function () {
            Route::group(['middleware' => 'admin.role:Superadmin,Admin'], function () {

                // dashboard
                $this->get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');

                // profile
                $this->get('/profile', 'Admin\ProfileController@index')->name('profile');
                $this->post('/profile', 'Admin\ProfileController@updateProfile')->name('profile');
                $this->post('/changePass', 'Admin\ProfileController@changePass')->name('change-pass');

                // customer
                $this->get('customers', 'Admin\CustomerController@index')->name('customers');
                $this->get('customers/getAllCustomers', 'Admin\CustomerController@getAllCustomers');
                $this->get('customers/create', 'Admin\CustomerController@create')->name('customer-create');
                $this->get('customers/edit/{id}', 'Admin\CustomerController@edit')->name('customer-edit');
                $this->post('customers/add', 'Admin\CustomerController@add');
                $this->post('customers/update', 'Admin\CustomerController@update');
                $this->post('customers/delete', 'Admin\CustomerController@delete');

                //setting
                $this->get('setting', 'Admin\SettingController@index');
                $this->post('setting/update', 'Admin\SettingController@update');

            });
        // });

    });

// });