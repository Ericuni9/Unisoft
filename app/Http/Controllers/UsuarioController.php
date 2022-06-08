<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UsuarioController extends Controller
{

    public function editUser(Request $request)
    {
        if(Auth::user()){
            return view('editPerfil', ['user' => Auth::user()]);
        } else {
            return redirect()->route('index');
        }
    }

    public function updateUser(Request $request)
    {
        $user = User::find($request->id);

        $rules = [
                'email' => ['required', Rule::unique('usuarios')->ignore($user->id), 'email'],
                'nome_completo' => 'required|string',
                'telefone' => 'nullable|string',
                'empresa' => 'nullable|string'
        ];

        $messages = [
            'email.required' => 'Email é obrigatório!',
            'email.email' => 'Digite um email válido!',
            'email.unique' => 'Este email já foi cadastrado',
            'nome_completo.required' => 'O nome não pode ser vazio!'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->route('edit-perfil')->withErrors($validator);
        } 

        $user->email = $request->email;
        $user->nome_completo = $request->nome_completo;
        $user->telefone = $request->telefone;
        $user->empresa = $request->empresa;

        $user->save();

        return redirect()->route('perfil')->with(['message' => 'Alterações realizadas com sucesso']);

    }

    public function getUser(Request $request)
    {
        $user = User::find($request->id);

        return $user;
    }

    public function allUsers()
    {
        $user = User::find(1);

        return $user->servicos;
    }
}
