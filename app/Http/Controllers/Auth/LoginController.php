<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json([
                'status' => false,
                "message"  => "Credentials Doesnt Match Our Records"
            ]);
        }else{
            $users = User::where('email', $request->email)->first();

            $token = $users->createToken('apitoken')->plainTextToken;

            return response()->json([
                'status' => true,
                'token' => $token,
                'message' => "Berhasil Login"
            ]);
        }
    }
}
