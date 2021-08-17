<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request) {
        $credenciais = $request->all();

        $token = auth('api')->attempt($credenciais);
        
        if($token) {
            return response()->json(['token' => $token]);
        } else {
            return response()->json(['erro' => 'Usuário não encontrado'], 403);
        }

        return 'login';
    }

    public function logout() {
        return 'logout 2';

    }

    public function refresh() {
        return 'refresh';
    }

    public function me() {
        return 'me';
    }
}
