<?php

// \Route::group(['namespace' => 'admin'], function() {

    \Route::group(['prefix' => 'vcr19dtbcdscms=rotartsinimda/access', 'middleware' => ['admin.values']], function () {

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

                // round
                $this->get('rounds', 'Admin\RoundController@index')->name('rounds');
                $this->get('rounds/getAllRounds', 'Admin\RoundController@getAllRounds');
                $this->get('rounds/getAllUserRounds', 'Admin\RoundController@getAllUserRounds');
                $this->get('rounds/create', 'Admin\RoundController@create')->name('round-create');
                $this->get('rounds/edit/{id}', 'Admin\RoundController@edit')->name('round-edit');
                $this->get('rounds/view/{id}', 'Admin\RoundController@view')->name('round-view');
                $this->post('rounds/add', 'Admin\RoundController@add');
                $this->post('rounds/update', 'Admin\RoundController@update');
                $this->post('rounds/delete', 'Admin\RoundController@delete')->middleware('admin.role:Superadmin');
                $this->post('rounds/user-round/delete', 'Admin\RoundController@deleteUserRound')->middleware('admin.role:Superadmin');
                $this->post('rounds/user-round/submitSelectMode', 'Admin\RoundController@submitSelectMode');

                // member
                $this->get('members', 'Admin\MemberController@index')->name('members');
                $this->get('members/getAllMembers', 'Admin\MemberController@getAllMembers');
                $this->get('members/create', 'Admin\MemberController@create')->name('member-create');
                $this->get('members/edit/{id}', 'Admin\MemberController@edit')->name('member-edit');
                $this->post('members/add', 'Admin\MemberController@add');
                $this->post('members/update', 'Admin\MemberController@update');
                $this->post('members/delete', 'Admin\MemberController@delete')->middleware('admin.role:Superadmin');

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

                //history
                $this->get('history', 'Admin\HistoryController@index')->name('history');
                $this->get('history/getAllHistories', 'Admin\HistoryController@getAllHistories');
                $this->get('history/getAllDetailHistories', 'Admin\HistoryController@getAllDetailHistories');
                $this->get('history/view/{roundId}/{memId}', 'Admin\HistoryController@viewDetail');

                //statistical
                $this->get('statistical', 'Admin\StatisticalController@index')->name('statistical');
                $this->get('statistical/loadDataChart', 'Admin\StatisticalController@loadDataChart')->name('loadDataChart');

                //setting
                $this->get('setting', 'Admin\SettingController@index');
                $this->post('setting/update', 'Admin\SettingController@update');

            });
        // });

    });

// });