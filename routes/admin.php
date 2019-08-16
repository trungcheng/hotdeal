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
                
                // category
                $this->get('categories', 'Admin\CategoryController@index')->name('categories');
                $this->get('categories/getAllCategories', 'Admin\CategoryController@getAllCategories');
                $this->get('categories/getAllParentCates', 'Admin\CategoryController@getAllParentCates');
                $this->get('categories/create', 'Admin\CategoryController@create')->name('category-create');
                $this->get('categories/edit/{id}', 'Admin\CategoryController@edit')->name('category-edit');
                $this->post('categories/add', 'Admin\CategoryController@add');
                $this->post('categories/update', 'Admin\CategoryController@update');
                $this->post('categories/delete', 'Admin\CategoryController@delete');

                // round
                $this->get('rounds', 'Admin\RoundController@index')->name('rounds');
                $this->get('rounds/getAllRounds', 'Admin\RoundController@getAllRounds');
                $this->get('rounds/create', 'Admin\RoundController@create')->name('round-create');
                $this->get('rounds/edit/{id}', 'Admin\RoundController@edit')->name('round-edit');
                $this->post('rounds/add', 'Admin\RoundController@add');
                $this->post('rounds/update', 'Admin\RoundController@update');
                $this->post('rounds/delete', 'Admin\RoundController@delete');

                // member
                $this->get('members', 'Admin\MemberController@index')->name('members');
                $this->get('members/getAllMembers', 'Admin\MemberController@getAllMembers');
                $this->get('members/create', 'Admin\MemberController@create')->name('member-create');
                $this->get('members/edit/{id}', 'Admin\MemberController@edit')->name('member-edit');
                $this->post('members/add', 'Admin\MemberController@add');
                $this->post('members/update', 'Admin\MemberController@update');
                $this->post('members/delete', 'Admin\MemberController@delete');

                //setting
                $this->get('setting', 'Admin\SettingController@index');
                $this->post('setting/update', 'Admin\SettingController@update');

            });
        // });

    });

// });