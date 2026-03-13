<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('frontend.home');
    // return view('layouts.main');
});

Auth::routes();
Route::get('/animated-login', [HomeController::class, 'animated_login'])->name('animated.login');




Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('plan', [HomeController::class, 'plan'])->name('plan');
Route::get('portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('contact_us', [HomeController::class, 'contact_us'])->name('contact_us');

Route::get('service', [HomeController::class, 'service'])->name('service');
Route::get('service-details/{id}', [HomeController::class, 'service_details'])->name('service.details');

Route::get('project', [HomeController::class, 'project'])->name('project');
Route::get('project-details/{id}', [HomeController::class, 'project_details'])->name('project.details');


















