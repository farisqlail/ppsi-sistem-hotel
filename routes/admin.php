<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController\Admin;

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
            Route::get('/customer/{customer}/delete', '\App\Http\Controllers\Admin\CustomerController@destroy')->name('customer.delete');
            Route::resource('customer', '\App\Http\Controllers\Admin\CustomerController');

            //CekIn
            Route::resource('cek-in', '\App\Http\Controllers\Admin\CekInController');

            //Route Laundry
            Route::resource('laundry', '\App\Http\Controllers\Admin\LaundryController');

            //Route Makanan
            Route::get('/makanan/{makanan}/delete', '\App\Http\Controllers\Admin\MakananController@destroy')->name('makanan.delete');
            Route::resource('makanan', '\App\Http\Controllers\Admin\MakananController');

            //Route Kamar
            Route::get('/kamar/{kamar}/delete', '\App\Http\Controllers\Admin\KamarController@destroy')->name('kamar.delete');
            Route::resource('kamar', '\App\Http\Controllers\Admin\KamarController');
        }
    );
});
