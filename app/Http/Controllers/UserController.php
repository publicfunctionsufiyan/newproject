<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $input = $request->all();
        $user->update($request->all());
        return 'User updated successfully';
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return 'User deleted successfully';
    }

    public function showAllUsers()
    {
        return User::all();
    }
    
    public function showUserById($id)
    {
        $user = User::findOrFail($id);
        return $user;
    }

}
