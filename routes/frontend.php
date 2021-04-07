<?php

use Illuminate\Support\Facades\Route;

Route::name('frontend.')->group(function () {
    Route::group(
        [
            'namespace' => 'Frontend'
        ],
        function () {
            Route::get('/', function () {
                return view('welcome');
            });
        }
    );
});
