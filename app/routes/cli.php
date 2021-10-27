<?php

/**
 * CLI Routes
 *
 * This routes only will be available under a CLI environment
 */

// To enable Luthier-CI built-in cli commands
// uncomment the followings lines:

Luthier\Cli::maker();
Luthier\Cli::migrations();


Route::group('', ['namespace' => 'vendor/luthier'], function() {
    Route::group('make', function() {
        Route::cli('migration/{name}/{((sequential|timestamp)):type?}', 'MyCliController@makeMigration');
    });

    Route::cli('migrate/{version?}/{seed?}', 'MyCliController@migrate');
    Route::cli('permission/{type?}/{name?}', 'MyCliController@permission');
});

Route::group('database', function() {
    Route::cli('seed/{name?}',  function($filename = '') {
        if(getenv('APP_ENV') != "production" && in_array(getenv('APP_DEBUG'), array("true", "TRUE"))) {
            if(!empty($filename)) {
                ci()->seeder->call($filename);
            } else {
                ci()->seeder->call('DatabaseSeeder');
            }
        }
    });
});
