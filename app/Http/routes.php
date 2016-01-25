<?php

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('art', ['as' => 'art.index', 'uses' => 'PagesController@art']);

    Route::get('blog', ['as' => 'blog.index', 'uses' => 'PagesController@blog']);

    Route::get('dashboard', ['as' => 'user.dashboard', 'uses' => 'UserController@dashboard']);

    Route::get('contact/message', ['as' => 'contact.message', 'uses' => 'ContactController@message']);
    Route::post('contact/message', ['as' => 'contact.message', 'uses' => 'ContactController@sendMessage']);

    Route::get('contact/project', ['as' => 'contact.project', 'uses' => 'ContactController@project']);
    Route::post('contact/project', ['as' => 'contact.project', 'uses' => 'ContactController@sendProject']);

    Route::get('about', ['as' => 'about.index', 'uses' => 'PagesController@about']);
    Route::get('about/resume', ['as' => 'about.resume', 'uses' => 'PagesController@resume']);
    
    Route::post('newsletter/signup', ['as' => 'newsletter.signup', 'uses' => 'NewsletterController@signup']);

    Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index']);
});
