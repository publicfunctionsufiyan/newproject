<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use App\Amenity;
use App\Block;
use App\Hotel_Amenities;
use App\Media;
use App\Cities;

class HotelController extends Controller
{   
    
    // HOTEL FUNCTIONS
    public function create(Request $request)
    {
        $input = $request->all();
        $hotel = Hotel::create($input);
        // return response()->json(['success' => true], 200);
        return redirect('admin-hotels');
    }

    public function updateHoteldetails(Request $request, $id)
    {
        $hotel = Hotel::findOrFail($id);
        $input = $request->all();
        $hotel->update($request->all());
        return 'Hotel updated successfully';
    }

    public function addimage(Request $request, $id)
    {   
        $hotel = Hotel::findOrFail($id);

        $path = $request->file('image')->store('hotel-images');
        $complete_path = "http://192.168.1.100/file-storage/storage/app/".$path;
        $input = $request->all();        
        $hotel->addMedia($input['image'])->toMediaCollection('hotel-images');
        return 'Add image successfully';
    }

    public function deleteAllHotelImages($id)
    {
        $hotel = Hotel::findOrFail($id);
        $hotel->clearMediaCollection('hotel-images');
        return 'Images deleted successfully';
    }

    
    public function deleteHotel($id)
    {
        $hotel = Hotel::findOrFail($id);
        $hotel->delete();
        $hotel->clearMediaCollection('hotel-images');
        return 'Hotel deleted successfully';
    }

    public function showAllHotels()
    {
        return Hotel::all();
    }

    public function showHotelById($id)
    {
        $hotel = Hotel::findOrFail($id);
        return $hotel;
    }


    //AMENITY FUNCTION
    public function createAmenity(Request $request)
    {
        $input = $request->all();
        $amenity = Amenity::create($input);
        // return response()->json(['success' => true], 200);
        return redirect('admin-amenities');


    }

    public function updateAmenity(Request $request, $id)
    {
        $amenity = Amenity::findOrFail($id);
        $input = $request->all();
        $amenity->update($request->all());
        return 'Amenity updated successfully';
    }

    public function deleteAmenity($id)
    {
        $amenity = Amenity::findOrFail($id);
        $amenity->delete();
        return 'Amenity deleted successfully';
    }

    public function showAllAmenitys()
    {
        return Amenity::all();
    }

    public function showAmenityById($id)
    {
        $amenity = Amenity::findOrFail($id);
        return $amenity;
    }


    // BLOCK FUNCTIONS
    public function createBlock(Request $request)
    {
        $input = $request->all();
        $block = Block::create($input);
        // return response()->json(['success' => true], 200);
        return redirect('admin-blocks');

    }

    public function updateBlock(Request $request, $id)
    {
        $block = Block::findOrFail($id);
        $input = $request->all();
        $block->update($request->all());
        return 'Block updated successfully';
    }

    public function deleteBlock($id)
    {
        $block = Block::findOrFail($id);
        $block->delete();
        return 'Block deleted successfully';
    }

    public function showAllBlocks()
    {
        return Block::all();
    }

    public function showBlockById($id)
    {
        $block = Block::findOrFail($id);
        return $block;
    }

    public function showBlockByHotel($id)
    {
        $hotel = Hotel::find($id);
        $blocks = $hotel->blocks;
        return response()->json(['Signed URLs' => $blocks], 200);
    }




    // HOTEL_AMENITIES FUNCTIONS
    public function createHotelAmenities(Request $request)
    {
        $input = $request->all();
        $hotel_amenities = Hotel_Amenities::create($input);
        return response()->json(['success' => true], 200);
    }

    public function deleteHotelAmenities($id)
    {
        $hotel_amenities = Hotel_Amenities::findOrFail($id);
        $hotel_amenities->delete();
        return 'Hotel_Amenities deleted successfully';
    }
    
    public function showAllHotelAmenities()
    {
        return Hotel_Amenities::all();
    }

}
