<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => ['guest.admin']], function () {
        Route::view('login', 'admin.login')->name('admin.login');
        Route::post('login', [App\Http\Controllers\AdminController::class, 'login'])->name('admin.auth');
    });
    Route::group(['middleware' => ['admin.auth']], function () {
        Route::view('/', 'admin.home')->name('admin.index');
        Route::post('logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');
    });
});

Route::group(['prefix' => 'merchant'], function () {
    Route::group(['middleware' => ['guest.merchant']], function () {
        Route::view('register', 'merchant.register')->name('merchant.register');
        Route::view('login', 'merchant.login')->name('merchant.login');
        Route::post('login', [App\Http\Controllers\MerchantController::class, 'login'])->name('merchant.auth');
    });
    Route::group(['middleware' => ['merchant.auth']], function () {
        Route::view('/', 'merchant.home')->name('merchant.index');
        Route::post('logout', [App\Http\Controllers\MerchantController::class, 'logout'])->name('merchant.logout');
    });
});

Route::group(['prefix' => 'reseller'], function () {
    Route::group(['middleware' => ['guest.reseller']], function () {
        Route::view('register', 'reseller.register')->name('reseller.register');
        Route::view('login', 'reseller.login')->name('reseller.login');
        Route::post('login', [App\Http\Controllers\ResellerController::class, 'login'])->name('reseller.auth');
    });
    Route::group(['middleware' => ['reseller.auth']], function () {
        Route::view('/', 'reseller.home')->name('reseller.index');
        Route::post('logout', [App\Http\Controllers\ResellerController::class, 'logout'])->name('reseller.logout');
    });
});
