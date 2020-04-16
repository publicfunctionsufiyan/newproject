<?php

use Illuminate\Support\Facades\Route;
use App\Hotel;
use App\Amenity;
use App\Block;
use App\Room;
use App\Room_Type;
use App\User;
use App\Booking;




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

Route::get('view-map', function() {
    $hotels = Hotel::all();
    return view('view-map', compact('hotels'))->with('hotels',$hotels);
})->name('view-map');



Route::get('hotels', function() {
    $hotel = Hotel::all();
    return view('hotels')->with('hotels',$hotel);
})->name('hotels');

Route::get('rooms/{id}', 'RoomController@showRoomByHotel')->name('rooms');

Route::get('my-bookings', function() {
    return view('mybookings');
})->name('my-bookings');


Route::get('login','LoginController@loginForm')->name('login');
Route::post('login', 'LoginController@login');

Route::post('logout','LoginController@logout')->name('logout');

Route::get('register', 'RegisterController@registrationForm')->name('register');
Route::post('register', 'RegisterController@create');




//ADMIN
Route::get('welcome-admin', function () {
    $user = User::all()->count();
    $booking = Booking::all()->count();
    $hotel = Hotel::all()->count();
    $room = Room::all()->count();

    return view('admin')->with('user',$user)->with('booking', $booking)->with('hotel', $hotel)->with('room', $room);
})->name('welcome-admin')->middleware('role:admin');

Route::get('admin-setting', function () {
    return view('admin.setting');
})->name('admin-setting');



Route::get('admin-hotels', function () {
    $hotel = Hotel::all();
    return view('admin.hotel.hotels')->with('hotels',$hotel);
})->name('admin-hotels');

Route::get('admin-add-hotels', function () {
    return view('admin.hotel.create-hotel');
})->name('admin-add-hotels');



Route::get('admin-users', function () {
    $user = User::all();
    return view('admin.user.users')->with('user',$user);
})->name('admin-users');

Route::get('admin-add-users', function () {
    return view('admin.user.create-user');
})->name('admin-add-users');



Route::get('admin-bookings', function () {
    $booking = Booking::all();
    return view('admin.booking.bookings')->with('booking',$booking);
})->name('admin-bookings');

Route::get('admin-add-bookings', function () {
    $hotel = Hotel::all();
    return view('admin.booking.create-bookings')->with('hotel', $hotel);
})->name('admin-add-bookings');



Route::get('admin-blocks', function () {
    $block = Block::all();
    return view('admin.block.blocks')->with('block', $block);
})->name('admin-blocks');

Route::get('admin-add-blocks', function () {
    $hotel = Hotel::all();
    return view('admin.block.create-block')->with('hotels',$hotel);
})->name('admin-add-blocks');



Route::get('admin-rooms', function () {
    $room = Room::all();
    return view('admin.room.rooms')->with('room', $room);
})->name('admin-rooms');

Route::get('admin-add-rooms', function () {
    $hotel = Hotel::all();
    $block = Block::all();
    
    return view('admin.room.create-room')->with('hotel',$hotel)->with('block',$block);
})->name('admin-add-rooms');



Route::get('admin-amenities', function () {
    $amenity = Amenity::all();
    return view('admin.hotel.amenities')->with('amenity',$amenity);;
})->name('admin-amenities');

Route::get('admin-add-amenities', function () {
    return view('admin.hotel.create-amenities');
})->name('admin-add-amenities');


