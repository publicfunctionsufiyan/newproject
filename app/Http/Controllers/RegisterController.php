<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;



class RegisterController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function registrationForm()
    {
        return view('register');
    }
    

    
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), ['name' => 'required', 'email' => 'required|email', 'password' => 'required|confirmed|min:8']);
        
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        if ($user->user_type == 1) $user->assignRole('user');
        
        $registered['token'] = $user->createToken('Laravel Password Grant Client')->accessToken;
        $registered['user'] = $user;
        
        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $user = Auth::user();
        $success['token'] = $user->createToken('Laravel Password Grant Client')->accessToken;
        unset($user->password);
        $success['user'] = $user;
        return redirect('/');
        
    }

    public function addUser(Request $request)
    {
        $validator = Validator::make($request->all(), ['name' => 'required', 'email' => 'required|email', 'password' => 'required|confirmed|min:8']);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        if ($user->user_type == 0) $user->assignRole('admin');
        if ($user->user_type == 1) $user->assignRole('user');
        if ($user->user_type == 2) $user->assignRole('owner');

        return redirect('admin-users');

    }

}
