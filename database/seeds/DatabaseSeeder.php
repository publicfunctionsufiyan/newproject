<?php

use App\Assigned;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use \Spatie\Permission\Traits\HasRoles;
use App\Hotel;
use App\Room;
use App\Block;
use App\Booking;


class DatabaseSeeder extends Seeder
{
    use HasRoles;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        
    
        // create roles
        $role = Role::updateOrCreate(['name' => 'admin']);

        $role = Role::updateOrCreate(['name' => 'user']);

        $role = Role::updateOrCreate(['name' => 'owner']);   


        $hotel = Hotel::updateOrCreate(['name' => 'Marriot', 'address' => 'Karachi, Pakistan', 'blocks' => '2', 'let' => '24.5689', 'long' => '40.6895']);  
        
        $room = Room::updateOrCreate(['hotel_id' => '1', 'block_id' => '1', 'type' => 'Family', 'description' => 'Description here...',
        'size' => '425', 'beds' => '2 Double', 'floor' => '3', 'price' => '100', 'availablity' => '1']); 

        $block = Block::updateOrCreate(['hotel_id' => '1', 'name' => 'A', 'floors' => '10']);

        $booking = Booking::updateOrCreate(['hotel_id' => '1', 'user_id' => '1', 
        'from' => '2020/01/01', 'to' => '2020/02/20', 'capacity' => '4', 'rooms' => '1']);   




    }
}
