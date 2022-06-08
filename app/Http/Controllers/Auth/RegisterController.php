<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function create(Request $request)
    {
        $rules = [
            'email' => 'required|email|unique:usuarios',
            'nome_completo' => 'required|string',
            'password' => 'required|string|min:6'
        ];

        $messages = [
            'email.required' => 'Email é obrigatório!',
            'email.email' => 'Digite um email válido!',
            'email.unique' => 'Este e-mail já está cadastrado',
            'nome_completo.required' => 'O nome não pode ser vazio!', 
            'password.required' => 'Senha não pode ser vazio',
            'password.min' => 'A senha deve ter pelo menos 6 caracteres'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->route('index')->withErrors($validator, 'cadastro');
        } 

        $usuario = new User();

        $usuario->email = $request->email;
        $usuario->nome_completo = $request->nome_completo;
        $usuario->password = Hash::make($request->password);
        $usuario->empresa = $request->empresa;
        $usuario->telefone = $request->telefone;
        $usuario->created_at = new DateTime();

        $usuario->save();

        if (Auth::loginUsingId($usuario->id)){
            return redirect()->route('perfil')->with(['message' => 'Cadastro realizado com sucesso']);
        }

        return redirect()->route('index');

    }
}
