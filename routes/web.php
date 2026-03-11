<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('layouts.home');
    // return view('layouts.main');
});

Auth::routes();
Route::get('/animated-login', [HomeController::class, 'animated_login'])->name('animated.login');




Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('service', [HomeController::class, 'service'])->name('service');
Route::get('plan', [HomeController::class, 'plan'])->name('plan');


















