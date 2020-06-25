<?php

\Route::group(['middleware' => ['user.values', 'cors']], function () {

    \Route::group(['middleware' => 'user.language'], function () {
        \Route::get('/admin', 'User\WebController@navigate');

        \Route::get('/', 'User\WebController@index')->name('home');

        \Route::get('/search.html', 'User\WebController@search')->name('search');

        \Route::get('/contact-us.html', 'User\WebController@contact')->name('contact');

        \Route::get('/news-events.html', 'User\WebController@newsEvents')->name('news-events');

        \Route::get('/news-events/news.html', 'User\WebController@news')->name('news');

        \Route::get('/news-events/newsletter.html', 'User\WebController@newsletter')->name('newsletter');

        \Route::get('/news-events/coming-events.html', 'User\WebController@comingEvents')->name('coming-events');

        \Route::get('/news-events/past-events.html', 'User\WebController@pastEvents')->name('past-events');

        \Route::get('/projects.html', 'User\WebController@projects')->name('projects');

        \Route::get('/partners.html', 'User\WebController@partners')->name('partners');

        \Route::get('/media-press.html', 'User\WebController@mediaPress')->name('media-press');

        \Route::get('/term-policy.html', 'User\WebController@termsPolicies')->name('term-policy');

        \Route::get('/faqs.html', 'User\WebController@faqs')->name('faqs');

        \Route::get('/post/{slug}.html', 'User\WebController@detailPost')->name('detail');

        \Route::get('/lang/{locale}', 'User\WebController@changeLocale')->name('locale');
    });

});

