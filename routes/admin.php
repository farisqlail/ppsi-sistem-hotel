<?php

use Illuminate\Support\Facades\Route;

Route::name('admin.')->group(function () {
    Route::group(
        [
            'namespace' => 'Admin'
        ],
        function () {
            Route::get('/', function () {
                return view('admin.layouts');
            });

            //Routes Customer
            Route::resource('customer', '\App\Http\Controllers\Admin\CustomerController');
            //CekIn
            Route::resource('cek-in', '\App\Http\Controllers\Admin\CekInController');
            //Route Laundry
            Route::resource('laundry', '\App\Http\Controllers\Admin\LaundryController');
        }
    );
});
