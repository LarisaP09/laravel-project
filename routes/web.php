<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserDataController;

Route::get('/', function () {return view('pages.home');})->name('home');
Route::get('/about', function () {return view('pages.about');})->name('about');
Route::get('/products', function () {return view('pages.products');})->name('products');
Route::get('/contact', function () {return view('pages.contact');})->name('contact');
Route::get('/user_data', function () {return view('pages.user_data');})->name('account');
//Route::get('/user_data', function () {return view('pages.user_data');})->name('account')->middleware('auth');
//Route::get('/contact', function () {return view('pages.contact');})->name('contact')->middleware('auth');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
//Route::get('/pages.user_data', [UserDataController::class, '__invoke']);

Route::post('/weather', [WeatherController::class, 'submitForm'])->name('weather');

//Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
//Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
//Route::delete('/profile/delete', [ProfileController::class, 'delete'])->name('profile.delete');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
