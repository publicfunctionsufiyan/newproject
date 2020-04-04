<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    public function registrationForm()
    {
        return view('register');
    }

    public function loginForm()
    {
        return view('login');
    }
    
    
    // REGISTER
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), ['name' => 'required', 'email' => 'required|email', 'password' => 'required|confirmed']);
        
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        if ($user->user_type == 0) $user->assignRole('admin');
        if ($user->user_type == 1) $user->assignRole('user');
        if ($user->user_type == 2) $user->assignRole('owner');

        $success['token'] = $user->createToken('Laravel Password Grant Client')->accessToken;
        $success['user'] = $user;
        
        return response()->json(['success' => $success], 200);
    }

    //LOGIN
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            $user = Auth::user();
            $success['token'] = $user->createToken('Laravel Password Grant Client')->accessToken;
            unset($user->password);
            $success['user'] = $user;
            return response()->json(['success' => $success], 200);
        }
        else {
        return response()->json(['error' => 'Unauthorised'], 401);
        }
    }
}
