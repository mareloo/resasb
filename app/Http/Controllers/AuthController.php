<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request  $request) {
        $request->validate([
            'name'=> 'required|string',
            'email'=> 'required|string',
            'numero'=> 'required|string',
            'nivelacesso'=>'',
            'password' => 'required|string|confirmed'

        ]);
        $user = User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'numero'=> $request->numero,
            'nivelacesso'=> $request->nivelacesso,
            'password' => bcrypt($request->password)
        ]);

        $token = $user->createToken('toke')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user || !($request->password != $user->password)) {
            return response([
                'message' => 'Credenciais Invalidas'
            ], 401);
        }

        $token = $user->createToken('toke')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    /**
     * Logout do usuario
     */
    public function logout() {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logout efetuado com sucesso e exclusao dos tokens.'
        ];
    }
}
