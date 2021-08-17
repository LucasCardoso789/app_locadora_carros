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
        auth('api')->logout();
        return response()->json(['msg' => 'Logout efetuado com sucesso']);

    }

    public function refresh() {
        $token = auth('api')->refresh();
        return response()->json(['token' => $token]);
    }

    public function me() {
        return response()->json(auth()->user());
    }
}
