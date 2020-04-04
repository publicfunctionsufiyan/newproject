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
})->name('welcome');

Route::get('welcome-admin', function () {
    return view('admin');
})->middleware('role:user');

Route::get('add-hotel', 'HotelController@form')->name('newhotel');
Route::post('add-hotel', 'HotelController@create');





Route::get('home', function () {
    return view('home');
})->name('home');

Route::get('signin','AuthController@loginForm')->name('login');
Route::post('signin', 'AuthController@login');

Route::get('getlogout','AuthController@logout')->name('logout');

Route::get('joinus', 'AuthController@registrationForm')->name('register');
Route::post('joinus', 'AuthController@register');
