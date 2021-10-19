<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialShareController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LogoutController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('signout', [LogoutController::class, 'signOut'])->name('signout');

});

Route::middleware(['guest'])->group(function () { 
    Route::get('/forgot-password',[ForgotPasswordController::class, 'showForgetPasswordForm'])->name('password.request');
    Route::post('/forgot-password',[ForgotPasswordController::class, 'submitResetPassword'])->name('password.email');
    Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('password.reset');
    Route::post('/reset-password',[ForgotPasswordController::class,'submitResetPasswordForm'])->name('password.update');
    });

//Home Controller => show cities
Route::resource('/', "App\Http\Controllers\HomeController");

Route::resource('city', "App\Http\Controllers\City\CityController");

Route::resource('blogs', "App\Http\Controllers\Blog\BlogController");

Route::resource('category', "App\Http\Controllers\Admin\CategoryController");

Route::get('social-share', [SocialShareController::class, 'index']);



