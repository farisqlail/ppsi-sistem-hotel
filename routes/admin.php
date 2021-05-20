<?php

use Illuminate\Support\Facades\Route;

Route::name('frontend.')->group(function () {
    Route::group(
        [
            'namespace' => 'Admin'
        ],
        function () {
            Route::get('/', function () {
                return view('admin.layouts');
            });

            // Route::get('/', [HomeController::class, index]);
        }
    );
});
