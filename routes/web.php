<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialShareController;

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

//Home Controller => show cities
Route::resource('/', "App\Http\Controllers\HomeController");

Route::resource('city', "App\Http\Controllers\City\CityController");

Route::resource('blogs', "App\Http\Controllers\Blog\BlogController");

Route::resource('category', "App\Http\Controllers\Admin\CategoryController");

Route::get('social-share', [SocialShareController::class, 'index']);



