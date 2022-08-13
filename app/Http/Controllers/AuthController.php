<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request) {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'phone' => 'required|string|unique:users,phone',
            'password' => 'required|string|confirmed',
            'address' => 'required|string',
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'phone' => $fields['phone'],
            'password' => bcrypt($fields['password']),
            'address' => $fields['address']
        ]);

//        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'message' => 'Successfully registered',
            'user' => $user,
//            'token' => $token
        ];

        return response($response, 201);
    }

    public function login (Request $request) {
        $fields = $request->validate([
           'email' => 'required|string|',
            'password' => 'required|string|confirmed'
        ]);

        // CHECK FOR THE EMAIL FROM THE REQUEST

        $user = User::where('email', $fields['email'])->first();

        // CHECK FOR THE PASSWORD

        if(!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Bad Credentials',
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'message' => 'Login successful',
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout() {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Token destroyed, Logout Successful'
        ];
    }
}
