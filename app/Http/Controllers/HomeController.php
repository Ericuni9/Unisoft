<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Servico;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $allProducts = Produto::orderBy('id')->get();

        $count = $allProducts->count();

        $take = $count / 2;
        
        $produtos1 = $allProducts->slice(0, $take);
        $produtos2 = $allProducts->slice($take, $take);

        $servicos = Servico::all();

        return view('index', [
            'allProducts' => $allProducts,
            'produtos1' => $produtos1, 
            'produtos2' => $produtos2,
            'servicos' => $servicos
        ]);
    }

    public function perfil()
    {
        if(Auth::user()){

            //$user = User::with('produtos', 'servicos')->find(Auth::user()->id);

            return view('perfil', ['user' => Auth::user()]);

        } else {
            return redirect()->route('index');
        }

        
    }

    public function politica(){
        return view('politica');
    }

    public function termos(){
        return view('termos');
    }
}
