<?php

\Route::group(['middleware' => ['user.values']], function () {

    \Route::get('/', 'User\HomeController@index')->name('home');
    \Route::get('/admin', 'User\HomeController@navigate');

    \Route::get('dang-nhap', 'User\Auth\LoginController@showLoginForm')->name('getSignIn');
    \Route::post('login', 'User\Auth\LoginController@loginLDAP');
    \Route::get('logout', 'User\Auth\LoginController@logoutLDAP');

    // \Route::get('/gen_member', 'User\WebController@gen_member');
    \Route::get('/update_slug', 'User\WebController@update_slug');

    \Route::post('vote', 'User\WebController@voteMember');

    \Route::get('/vong-thi/{slug}.html', 'User\WebController@roundsMember');
    \Route::get('/{parent}/{slug}.html', 'User\WebController@processPage');
    \Route::get('/{parent}/{slug}/{member}.html', 'User\WebController@processPageMember');


    // \Route::post('dang-nhap', 'User\Auth\LoginController@login');
    // \Route::get('dang-xuat', 'User\Auth\LoginController@logout')->name('getLogout');
    // \Route::get('tao-tai-khoan', 'User\Auth\RegisterController@showRegistrationForm')->name('getSignUp');
    // \Route::post('tao-tai-khoan', 'User\Auth\RegisterController@register');

    // \Route::post('account/ajax_signin', 'User\AuthController@ajaxSignIn')->name('ajax-signin');
    // \Route::post('account/ajax_signup', 'User\AuthController@ajaxSignUp')->name('ajax-signup');

    // \Route::group(['middleware' => ['user.auth']], function () {

    // });

});

