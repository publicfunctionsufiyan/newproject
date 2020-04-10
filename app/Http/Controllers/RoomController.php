<?php

namespace App\Http\Controllers;
use App\Room;
use App\Room_Type;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    //ROOM FUNCTIONS
    public function create(Request $request)
    {
        $input = $request->all();
        $room = Room::create($input);
        return response()->json(['success' => true], 200);
        // return redirect('admin-rooms');
    }

    public function updateRoom(Request $request, $id)
    {
        $room = Room::findOrFail($id);
        $input = $request->all();
        $room->update($request->all());
        return 'Room updated successfully';
    }

    public function deleteRoom($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();
        return 'Room deleted successfully';
    }

    public function showAllRooms()
    {
        return Room::all();
    }

    public function showRoomById($id)
    {
        return Room::findOrFail($id);
    }

    public function showRoomByHotel($id)
    {
        $hotel = Hotel::find($id);
        $room = $hotel->$room;
        return $room;
    }



    public function addimage(Request $request, $id)
    {   
        $room = Room::findOrFail($id);

        $path = $request->file('image')->store('room-images');
        $complete_path = "http://192.168.1.100/file-storage/storage/app/".$path;
        $input = $request->all();        
        $hotel->addMedia($input['image'])->toMediaCollection('room-images');
        return 'Add image successfully';
    }
    



    //ROOM_TYPE FUNCTIONS
    public function createRoomType(Request $request)
    {
        $input = $request->all();
        $room_type = Room_Type::create($input);
        return response()->json(['success' => true], 200);
    }

    public function updateRoomType(Request $request, $id)
    {
        $room_type = Room_Type::findOrFail($id);
        $input = $request->all();
        $room_type->update($request->all());
        return 'Room Type updated successfully';
    }

    public function deleteRoomType($id)
    {
        $room_type = Room_Type::findOrFail($id);
        $room_type->delete();
        return 'Room Type deleted successfully';
    }

    public function showAllRoomTypes()
    {
        return Room_Type::all();
    }

    public function showRoomTypeById($id)
    {
        $room_type = Room_Type::findOrFail($id);
        return $room_type;
    }

}
