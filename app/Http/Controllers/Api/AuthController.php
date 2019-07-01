<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\RegisterAuthRequest;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    //
    public function register(RegisterAuthRequest $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return response([
            'status' => 'success',
            'data' => $user
        ], 200);
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        
        try {
            if(! $token = JWTAuth::attempt($credentials)) {
                return response([
                    'status' => 'error',
                    'message' => 'Invalid credentials.'
                ], 400);
            }
        } catch (JWTException $e) {
            return response([
                'status' => 'error',
                'message' => 'Failed to Login, Please try again.'
            ], 500);
        }

        return response([
            'status' => 'success',
            'token' => $token
        ], 200);
    }

    public function user() {
        $user = User::find(JWTAuth::user()->id);
        return response([
            'status' => 'success',
            'data' => $user 
        ], 200);
    }

    public function logout() {
        JWTAuth::invalidate();
        return response([
            'status' => 'success',
            'message' => 'Logged out successfully.'
        ], 200);
    }
}
