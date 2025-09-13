<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Hash;
use Illuminate\Support\Facades\Validator;   
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;

class AuthController extends Controller
{
    public function register(Request $request){
       try {
         $validator = Validator::make($request->all(),[
            'name'=>'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:users',
            'password'=>'required|string|min:6|confirmed',
            "password_confirmation"
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'=>false,
                'message'=>'validation Error',
                'error'=>$validator->errors()
            ],status:422);
        }

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'role_id'  => 3, // 👈 Student by default
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'status'=>true,
            'message'=>'User register successfully',
            'body'=>new UserResource($user),
            'token'=>$token
        ],status:201);
       } catch (Exception $error) {
        return response()->json(
            [
                'status'=>false,
                'message'=>'user not register',
                'body'=> $error
            ],500
            );
       }

    }
}
