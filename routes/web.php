<?php

use Illuminate\Support\Facades\Route;
use App\Hotel;

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


//ADMIN
Route::get('welcome-admin', function () {
    return view('admin');
})->name('welcome-admin');

Route::get('admin-hotels', function () {
    $hotel = Hotel::all();
    return view('admin.hotel.hotels')->with('hotels',$hotel);
})->name('admin-hotels');
Route::get('admin-add-hotels', function () {
    return view('admin.hotel.create-hotel');
})->name('admin-add-hotels');


Route::get('admin-users', function () {
    return view('admin.user.users');
})->name('admin-users');
Route::get('admin-add-users', function () {
    return view('admin.user.create-user');
})->name('admin-add-users');


Route::get('admin-bookings', function () {
    return view('admin.booking.bookings');
})->name('admin-bookings');
Route::get('admin-add-bookings', function () {
    return view('admin.booking.create-bookings');
})->name('admin-add-bookings');


Route::get('admin-blocks', function () {
    return view('admin.block.blocks');
})->name('admin-blocks');
Route::get('admin-add-blocks', function () {
    return view('admin.block.create-block');
})->name('admin-add-blocks');


Route::get('admin-rooms', function () {
    return view('admin.room.rooms');
})->name('admin-rooms');
Route::get('admin-add-rooms', function () {
    return view('admin.room.create-room');
})->name('admin-add-rooms');


Route::get('admin-room-types', function () {
    return view('admin.room.room-types');
})->name('admin-room-types');
Route::get('admin-add-room-types', function () {
    return view('admin.room.create-room-type');
})->name('admin-add-room-types');


Route::get('admin-amenities', function () {
    return view('admin.hotel.amenities');
})->name('admin-amenities');

Route::get('admin-add-amenities', function () {
    return view('admin.hotel.create-amenities');
})->name('admin-add-amenities');
