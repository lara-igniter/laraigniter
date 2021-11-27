<?php

use Elegant\Support\Facades\Route;

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::set('404_override', function () {
    show_404();
});

Route::set('translate_uri_dashes', false);

Route::get('/home', 'HomeController@index', ['middleware' => ['AuthMiddleware']])->name('home');

Route::group('', ['namespace' => 'auth'], function() {
    Route::post('/logout', 'LogoutController@logout')->name('logout');
    Route::get('/login', 'AuthController@index')->name('login');
    Route::post('/login', 'AuthController@login');

//    Route::group('password', ['namespace' => 'password'], function() {
//        Route::get('/reset', 'PasswordController@forgot')->name('admin.auth.password.forgot');
//        Route::post('/reset', 'PasswordController@reset')->name('admin.auth.password.reset');
//    });
});

Route::group('phpdebugbar', ['namespace' => 'vendor/maximebf', 'middleware' => ['AuthMiddleware','RouteAjaxMiddleware']], function(){
	Route::get('/open_handler', 'PHPDebugBar@open_handler')->name('phpdebugbar.open_handler');
});
