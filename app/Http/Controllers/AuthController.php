<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        if( Auth::attempt( ['email' => $request->email, 'password' => $request->password ]))
        {
            $user = Auth::user();

            $token = $user->createToken('Client Access Token')->accessToken;

            return response()->json([
                'status' => 200,
                'token'  => $token,
            ]);

        }
        else{

            return response()->json([
                'status' => 422,
                'message' => 'Incurrect password or email',
            ]);
        }


    }
}
