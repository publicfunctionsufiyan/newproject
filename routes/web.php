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


Route::get('home', 'HomeController@index')->name('home');


Route::get('login','LoginController@loginForm')->name('login');
Route::post('login', 'LoginController@login');

Route::post('logout','LoginController@logout')->name('logout');

Route::get('register', 'RegisterController@registrationForm')->name('register');
Route::post('register', 'RegisterController@create');
