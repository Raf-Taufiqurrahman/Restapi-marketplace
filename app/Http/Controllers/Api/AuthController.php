<?php

namespace App\Http\Controllers\Api;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Auth\RegisterRequest;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $customer = Customer::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password)
        ]);

        $token = JWTAuth::fromUser($customer);

        if($customer) {
            return response()->json([
                'success' => true,
                'user'    => $customer,
                'token'   => $token
            ], 201);
        }

        return response()->json([
            'success' => false,
        ], 409);
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if(!$token = auth()->guard('api')->attempt($credentials)) {
            return response()->json([
                'success' => false,
                'message' => 'Email or Password is incorrect'
            ], 401);
        }
        return response()->json([
            'success' => true,
            'user'    => auth()->guard('api')->user(),
            'token'   => $token
        ], 201);
    }

    public function getUser()
    {
        return response()->json([
            'success' => true,
            'user'    => auth()->guard('api')->user()
        ], 200);
    }
}
