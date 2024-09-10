<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('index');
});

Route::controller(LoginRegisterController::class)->group(function () {

    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/home', 'home')->name('home');
    Route::post('/logout', 'logout')->name('logout');
});

//
Route::resource('/kamar', KamarController::class)->middleware(['auth']);
Route::resource('/user', UserController::class)->middleware(['auth']);
Route::resource('/booking', BookingController::class)->middleware(['auth']);
Route::get('/booking/finish/{id}', [BookingController::class, 'finish'])->name('booking.finish')->middleware('auth');


///route fronted

Route::get('/tentang', [PageController::class, 'tentang'])->name('tentang');
Route::get('/berita', [PageController::class, 'berita'])->name('berita');
Route::get('/galeri', [PageController::class, 'galeri'])->name('galeri');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
Route::post('/login', [PageController::class, 'login'])->name('login');
