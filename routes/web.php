<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TechnicienController;
use App\Http\Controllers\UserServicesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// USER DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'user'])->name('dashboard');

// ADMIN DASHBOARD
Route::get('/admin_dashboard', function () {
    return view('admin_dashboard');
})->middleware(['auth', 'admin'])->name('admin_dashboard');

// TECHNICIEN DASHBOARD
Route::get('/technicien_dashboard', function () {
    return view('technicien_dashboard');
})->middleware(['auth', 'technicien'])->name('technicien_dashboard');


// Route::resource('gestperso', AdminController::class);

//Route::resource('/techprofil', App\Http\Controllers\TechnicienController::class);

// admin protected routes
Route::group([ 'middleware' => ['auth', 'admin'] ], function () {
 // Route::get('/gestperso', 'App\Http\Controllers\AdminController@index');
    Route::resource('gestperso', AdminController::class);
 // Route::get('/users', 'AdminUserController@list')->name('admin_users');
});

// technicien protected routes
Route::group([ 'middleware' => ['auth', 'technicien'] ], function () {
    Route::resource('techprofil', TechnicienController::class);
 // Route::get('/users', 'AdminUserController@list')->name('admin_users');
});

// user protected routes
Route::group([ 'middleware' => ['auth', 'user'] ], function () {
    Route::resource('userservice', UserServicesController::class);
});


require __DIR__.'/auth.php';




