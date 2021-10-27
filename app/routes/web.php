<?php

/**
 * Welcome to Luthier-CI!
 *
 * This is your main route file. Put all your HTTP-Based routes here using the static
 * Route class methods
 *
 * Examples:
 *
 *    Route::get('foo', 'bar@baz');
 *      -> $route['foo']['GET'] = 'bar/baz';
 *
 *    Route::post('bar', 'baz@fobie', [ 'namespace' => 'cats' ]);
 *      -> $route['bar']['POST'] = 'cats/baz/foobie';
 *
 *    Route::get('blog/{slug}', 'blog@post');
 *      -> $route['blog/(:any)'] = 'blog/post/$1'
 */

Route::get('/', function () {
    ci()->blade->view('welcome');
});

Route::set('404_override', function () {
    trigger_404();
});

Route::set('translate_uri_dashes', false);

Route::get('/home', 'HomeController@index')->name('home');

Route::group('', ['namespace' => 'auth'], function() {
    Route::post('/logout', 'LogoutController@logout')->name('logout');
    Route::get('/login', 'AuthController@index')->name('login');
    Route::post('/login', 'AuthController@login')->name('auth.login');

//    Route::group('password', ['namespace' => 'password'], function() {
//        Route::get('/reset', 'PasswordController@forgot')->name('admin.auth.password.forgot');
//        Route::post('/reset', 'PasswordController@reset')->name('admin.auth.password.reset');
//    });
});

Route::group('phpdebugbar', ['namespace' => 'vendor/maximebf', 'middleware' => ['AuthMiddleware','RouteAjaxMiddleware']], function(){
	Route::get('/open_handler', 'PHPDebugBar@open_handler')->name('phpdebugbar.open_handler');
});
