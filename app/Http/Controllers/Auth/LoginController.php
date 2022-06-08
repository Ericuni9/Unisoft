<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $rules = [
            'email' => 'required|string|email|exists:usuarios',
            'password' => 'required|string'
        ];

        $messages = [
            'email.required' => "Digite um email",
            'email.exists' => "Email não está cadastrado!",
            'password.required' => "Digite sua senha",
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->route('index')->withErrors($validator, 'login');
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)){
            return redirect()->route('perfil')->with(['message' => 'Login realizado com sucesso']);
        }

        return redirect()->route('index')->with(['errorLogin' => 'Credenciais inválidas!']);
      
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('index');
    }
}
