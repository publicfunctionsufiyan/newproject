<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Media;


class UserController extends Controller
{
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $input = $request->all();        
        $user->update($request->all());
        if($request->hasFile('image'))
        {
          $user->clearMediaCollection('user-images');
          $user->addMedia($input['image'])->toMediaCollection('user-images');
        }
        return 'User updated successfully';
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        $user->clearMediaCollection('user-images');
        return 'User deleted successfully';
    }

    public function showAllUsers()
    {
        return User::all();
    }
    
    public function showUserById($id)
    {
        $user = User::findOrFail($id);
        $user->getMedia('user-images');

        return $user;
    }

    public function profilePicture(Request $request, $id)
    {
        
              $user = User::findOrFail($id);
              $input = $request->all();
              $user->addMedia($input['image'])->toMediaCollection('user-images');
              return response()->json(['success' => true], 200);
    }

}
