<?php

use App\Assigned;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use \Spatie\Permission\Traits\HasRoles;

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

        $user = User::Create(['user_type' => '0', 'name' => 'admin', 'email' => 'admin@gmail.com', 'password' => '12345678']);
        
        
       
        
       
    }
}
