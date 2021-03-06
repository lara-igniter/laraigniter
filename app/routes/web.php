<?php

use Elegant\Support\Facades\Route;

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::set('404_override', function () {
    show_404();
});

Route::set('translate_uri_dashes', false);

Route::get('/home', 'HomeController@index', ['middleware' => ['auth']])->name('home');

Route::group('', ['namespace' => 'auth'], function() {
    Route::post('/logout', 'LogoutController@logout')->name('logout');
    Route::get('/login', 'AuthController@index')->name('login');
    Route::post('/login', 'AuthController@login');
});

Route::group('phpdebugbar', ['namespace' => 'vendor/maximebf', 'middleware' => ['auth']], function () {
    Route::get('/open_handler', 'PHPDebugBar@open_handler')->name('phpdebugbar.open_handler');
});
