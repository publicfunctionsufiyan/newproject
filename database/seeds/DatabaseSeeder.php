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


        $hotel = Hotel::updateOrCreate(['name' => 'Marriot', 'description' => 'The iconic Hilton Istanbul Bosphorus with its landmark central location, stunning views and beautifully landscaped gardens is an oasis of serenity amidst the bustle of one of the world’s most vibrant cities. As the ambassador of Turkish hospitality, this legendary hotel serves its great heritage and service quality since 1955. Located in the heart of Istanbul next to the Congress Valley, this hotel is at walking distance to famous Taksim Square and responds every travelling purpose. Hilton Istanbul Bosphorus offers 500 spacious guest rooms, all with a balcony and with breathtaking Bosphorus or beautiful garden view. Hotel has various restaurants which offer different sceneries and exclusive dining opportunities. Extensive health club & spa services are designed for a fit body and soul. Open 24 hours, 7 days a week.', 'class' => '3', 'blocks' => '2', 'let' => '24.5689', 'long' => '40.6895']);  
        
        $room = Room::updateOrCreate(['hotel_id' => '1', 'block_id' => '1', 'type' => 'Family', 'view' => 'seav view', 'detail' => 'detail here...',
        'size' => '425', 'bed' => '1 king', 'person_sleeps' => '3', 'floor' => '3', 'price' => '100', 'availablity' => '1']); 

        $block = Block::updateOrCreate(['hotel_id' => '1', 'name' => 'A', 'floors' => '10']);

        $booking = Booking::updateOrCreate(['hotel_id' => '1', 'user_id' => '1', 
        'from' => '2020/01/01', 'to' => '2020/02/20', 'capacity' => '4', 'rooms' => '1']);   




    }
}
