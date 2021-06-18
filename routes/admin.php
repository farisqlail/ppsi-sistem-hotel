<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController\Admin;
use App\Http\Controllers\LaundryController;

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

            Route::get('history', '\App\Http\Controllers\Admin\HistoryController@index')->name('admin.history');

            //Routes Customer
            Route::get('/customer/{customer}/delete', '\App\Http\Controllers\Admin\CustomerController@destroy')->name('customer.delete');
            Route::resource('customer', '\App\Http\Controllers\Admin\CustomerController');

            //CekIn
            Route::get('/cekIn/{cekIn}/delete', '\App\Http\Controllers\Admin\CekInController@destroy')->name('cekIn.delete');
            Route::get('/inHouse', '\App\Http\Controllers\Admin\CekInController@inHouse')->name('inHouse.iHouse');
            Route::resource('cekIn', '\App\Http\Controllers\Admin\CekInController');


            //Route Laundry
            Route::get('/laundry/{laundry}/delete', '\App\Http\Controllers\Admin\LaundryController@destroy')->name('laundry.delete');
            Route::resource('laundry', '\App\Http\Controllers\Admin\LaundryController');

            //Route Makanan
            Route::get('/makanan/{makanan}/delete', '\App\Http\Controllers\Admin\MakananController@destroy')->name('makanan.delete');
            Route::resource('makanan', '\App\Http\Controllers\Admin\MakananController');

            //Route Kamar
            Route::get('/kamar/{kamar}/delete', '\App\Http\Controllers\Admin\KamarController@destroy')->name('kamar.delete');
            Route::resource('kamar', '\App\Http\Controllers\Admin\KamarController');

            //Route TypeKamar
            Route::get('/typeKamar/{typeKamar}/delete', '\App\Http\Controllers\Admin\TypeKamarController@destroy')->name('typeKamar.delete');
            Route::resource('typeKamar', '\App\Http\Controllers\Admin\TypeKamarController');

            //Route JenisMakanan
            Route::get('/JenisMakanan/{JenisMakanan}/delete', '\App\Http\Controllers\Admin\JenisMakananController@destroy')->name('JenisMakanan.delete');
            Route::resource('JenisMakanan', '\App\Http\Controllers\Admin\JenisMakananController');

            //Route PesanMakanan
            Route::get('/pesanMakanan/{pesanMakanan}/delete', '\App\Http\Controllers\Admin\pesanMakananController@destroy')->name('pesanMakanan.delete');
            Route::resource('pesanMakanan', '\App\Http\Controllers\Admin\pesanMakananController');
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


Route::name('admin.')->group(function () {
    Route::group(
        [
            'namespace' => 'Admin',
            'middleware' => ['auth', 'role:karyawan']
            // 'middleware' => ['auth', 'CheckRole:user']
        ],
        function () {
            Route::get('/karyawan', function () {
                return view('karyawan.dashboard');
            })->name('karyawan.dashboard');

            Route::get('DashboardKaryawan', '\App\Http\Controllers\Admin\HomeController@karyawan')->name('karyawan.dash');

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
