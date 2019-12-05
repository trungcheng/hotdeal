<?php

\Route::group(['middleware' => ['user.values', 'cors']], function () {

    \Route::get('/', 'User\WebController@index')->name('home');
    
    \Route::get('/admin', 'User\WebController@navigate');

    \Route::get('/lien-he.html', 'User\WebController@contact')->name('contact');

    \Route::get('/{slug}.html', 'User\WebController@processPageLevelOne')->name('detail');

    \Route::get('/{parent}/{slug}.html', 'User\WebController@processPageLevelTwo')->name('detail-article');

    \Route::group(['middleware' => 'user.language'], function () {
        \Route::get('/lang/{locale}', 'User\WebController@changeLocale')->name('locale');
    });

});

