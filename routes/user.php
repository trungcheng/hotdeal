<?php

\Route::group(['middleware' => ['user.values', 'cors']], function () {

    \Route::get('/', 'User\HomeController@index')->name('home');
    
    \Route::get('/admin', 'User\HomeController@navigate');

});

