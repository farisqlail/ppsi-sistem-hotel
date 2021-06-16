<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('admin.dashboard');
// })->name('admin.dashboard');

Route::get('/', function () {
    return redirect(route('login'));
});
Auth::routes();

require('admin.php');

