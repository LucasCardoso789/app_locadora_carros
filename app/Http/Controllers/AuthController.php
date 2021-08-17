<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
<<<<<<< HEAD
    public function login() {
        return 'login';
    }
    public function logout() {
        return 'logout';
    }
    public function refresh() {
        return 'refresh';
    }
    public function me() {
        return 'me';
    }

=======
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
        return 'logout';
    }

    public function refresh() {
        return 'refresh';
    }

    public function me() {
        return 'me';
    }
>>>>>>> e97eea7b6e9069eda1f95b190508cfd1ae1eda66
}
