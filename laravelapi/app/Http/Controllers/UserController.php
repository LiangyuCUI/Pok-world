<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return User::all();
    }

    // public function store(Request $request)
    // {
    //     return [];
    // }

    public function create(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->birthdate = $request->birthdate;
        $user->save();
 
        return response()->json([
            'message' => 'New User created'
        ]);
    }

    // public function login(Request $request)
    // {
    //     $request -> validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required']
    //     ]);
    //     if(Auth::attempt($request->only('email', 'password'))){
    //         return response()->json(Auth::user(), 200);      
    // }
    //     throw ValidationException::withMessages([
    //         'email' => ['This account does not exist.']
    //     ]);
    // }

    
}