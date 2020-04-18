<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Media;
use App\User_Contact;


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
        return User::findOrFail($id);
        
    }

    public function profilePicture(Request $request, $id)
    {
              $user = User::findOrFail($id);
              $path = $request->file('image')->store('user-images');
              $complete_path = "http://192.168.1.100/file-storage/storage/app/".$path;
              $input = $request->all();
              $user->clearMediaCollection('user-images');
              $user->addMedia($input['image'])->toMediaCollection('user-images');
              return response()->json(['success' => true], 200);
    }

    public function getimage($id)
    {
        $user = User::findOrFail($id);
        $image = $user->getMedia('user-images');
        $url = $image[0]->getUrl();
        return $url;
    }

    public function createUserAddress(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $input = $request->all();
        $input['user_id'] = $id;
    
        $user_contact = User_Contact::updateOrCreate($input);
        return view('account-info');
        
    }



}
