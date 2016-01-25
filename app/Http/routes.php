<?php

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@home');

    Route::get('art', ['as' => 'art.index', 'uses' => 'PagesController@art']);

    Route::get('blog', ['as' => 'blog.index', 'uses' => 'PagesController@blog']);

    Route::get('contact', ['as' => 'contact.index', 'uses' => 'PagesController@contact']);
    Route::post('contact', ['as' => 'contact.send', 'uses' => 'PagesController@sendEmail']);

    Route::get('about', ['as' => 'about.index', 'uses' => 'PagesController@about']);
    Route::get('about/resume', ['as' => 'about.resume', 'uses' => 'PagesController@resume']);

    Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index']);
});
