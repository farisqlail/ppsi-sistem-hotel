<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController\Admin;

Route::name('admin.')->group(function () {
    Route::group(
        [
            'namespace' => 'Admin',
            'middleware' => ['auth', 'role:admin']
            // 'middleware' => ['auth', 'CheckRole:user']
        ],
        function () {
            // Route::get('/', function () {
            //     return view('admin.dashboard');
            // })->name('admin.dashboard');

            Route::get('DashboardAdmin', '\App\Http\Controllers\Admin\HomeController@index')->name('admin.dash');

            //Routes Customer
            Route::get('/customer/{customer}/delete', '\App\Http\Controllers\Admin\CustomerController@destroy')->name('customer.delete');
            Route::resource('customer', '\App\Http\Controllers\Admin\CustomerController');

            //CekIn
            Route::get('/cekIn/{cekIn}/delete', '\App\Http\Controllers\Admin\CekInController@destroy')->name('cekIn.delete');
            // Route::get('/cekIn/{cek_in}/edit', '\App\Http\Controllers\Admin\CekInController@edit')->name('cekIn.edit');
            // Route::patch('/cekIn/{cek_in}', '\App\Http\Controllers\Admin\CekInController@update')->name('cekIn.update');
            Route::resource('cekIn', '\App\Http\Controllers\Admin\CekInController');

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

Route::name('admin.')->group(function () {
    Route::group(
        [
            'namespace' => 'Admin',
            'middleware' => ['auth', 'role:hrd']
            // 'middleware' => ['auth', 'CheckRole:user']
        ],
        function () {
            Route::get('/hrd', function () {
                return view('hrd.dashboard');
            })->name('hrd.dashboard');

            Route::get('DashboardHrd', '\App\Http\Controllers\Admin\HomeController@hrd')->name('hrd.dash');

            // //Routes Customer
            // Route::get('/customer/{customer}/delete', '\App\Http\Controllers\Admin\CustomerController@destroy')->name('customer.delete');
            // Route::resource('customer', '\App\Http\Controllers\Admin\CustomerController');

            // //CekIn
            // Route::resource('cekIn', '\App\Http\Controllers\Admin\CekInController');

            // //Route Laundry
            // Route::resource('laundry', '\App\Http\Controllers\Admin\LaundryController');

            // //Route Makanan
            // Route::get('/makanan/{makanan}/delete', '\App\Http\Controllers\Admin\MakananController@destroy')->name('makanan.delete');
            // Route::resource('makanan', '\App\Http\Controllers\Admin\MakananController');

            // //Route Kamar
            // Route::get('/kamar/{kamar}/delete', '\App\Http\Controllers\Admin\KamarController@destroy')->name('kamar.delete');
            // Route::resource('kamar', '\App\Http\Controllers\Admin\KamarController');
        }
    );
});
