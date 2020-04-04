<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');

// User Routes
Route::post('update-user/{id}', 'UserController@update');
Route::delete('delete-user/{id}', 'UserController@deleteUser');
Route::get('show-all-users', 'UserController@showAllUsers');
Route::get('show-user-by-id/{id}', 'UserController@showUserById');

//Hotel Routes
Route::post('create-hotel', 'HotelController@create');
Route::post('update-hotel/{id}', 'HotelController@updateHotel');
Route::delete('delete-hotel/{id}', 'HotelController@deleteHotel');
Route::get('show-all-hotels', 'HotelController@showAllHotels');
Route::get('show-hotel-by-id/{id}', 'HotelController@showHotelById');

//Amenity Routes
Route::post('create-amenity','HotelController@createAmenity');
Route::post('update-amenity/{id}','HotelController@updateAmenity');
Route::delete('delete-amenity/{id}','HotelController@deleteAmenity');
Route::get('show-all-amenities','HotelController@showAllAmenitys');
Route::get('show-amenity-by-id/{id}','HotelController@showAmenityById');

//Block Routes
Route::post('create-block','HotelController@createBlock');
Route::post('update-block/{id}','HotelController@updateBlock');
Route::delete('delete-block/{id}','HotelController@deleteBlock');
Route::get('show-all-blocks','HotelController@showAllBlocks');
Route::get('show-block-by-id/{id}','HotelController@showBlockById');
Route::get('show-block-by-hotel/{id}','HotelController@showBlockByHotel');

//Room Routes
Route::post('create-room','RoomController@create');
Route::post('update-room/{id}','RoomController@updateRoom');
Route::delete('delete-room/{id}','RoomController@deleteRoom');
Route::get('show-all-rooms','RoomController@showAllRooms');
Route::get('show-room-by-id/{id}','RoomController@showRoomById');
Route::get('show-room-by-hotel/{id}','RoomController@showRoomByHotel');

//Room Type Routes
Route::post('create-room-type','RoomController@createRoomType');
Route::post('update-room-type/{id}','RoomController@updateRoomType');
Route::delete('delete-room-type/{id}','RoomController@deleteRoomType');
Route::get('show-all-room-types','RoomController@showAllRoomTypes');
Route::get('show-room-type-by-id/{id}','RoomController@showRoomTypeById');

//Booking Routes
Route::post('create-booking','BookingController@create');
Route::post('update-booking/{id}','BookingController@updateBooking');
Route::delete('delete-booking/{id}','BookingController@deleteBooking');
Route::get('show-all-bookings','BookingController@showAllBookings');
Route::get('show-booking-by-id/{id}','BookingController@showBookingById');

//Hotel Amenities Routes
Route::post('create-hotel-amenities','HotelController@createHotelAmenities');
Route::delete('delete-hotel-amenities/{id}','HotelController@deleteHotelAmenities');
Route::get('show-all-hotel-amenities','HotelController@showAllHotelAmenities');