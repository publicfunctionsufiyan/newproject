<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\User;
use App\Cities;




class BookingController extends Controller
{

    public function createCity(Request $request)
    {
        
        $input = $request->all();
        $cities = Cities::create($input);
        return response()->json(['success' => true], 200);
    }

    public function create(Request $request)
    {
        
        $input = $request->all();
        $booking = Booking::create($input);
        // return response()->json(['success' => true], 200);
        return redirect('admin-bookings');

    }

    public function updateBooking(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);
        $input = $request->all();
        $booking->update($request->all());
        return 'Booking updated successfully';
    }

    public function deleteBooking($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return 'Booking deleted successfully';
    }

    public function showAllBookings()
    {
        return Booking::all();
    }

    public function showBookingById($id)
    {
        $booking = Booking::findOrFail($id);
        return $booking;
    }

    public function showBookingByUser($id)
    {
        $user = User::find($id);
        $booking = $user->bookings;
        return $booking;
    }
}
