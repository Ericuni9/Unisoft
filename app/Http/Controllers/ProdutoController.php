<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use DateTime;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function getAllProducts()
    {
        $produtos = Produto::all();

        return $produtos;
    }

    public function cleanPaths()
    {
        $produtos = Produto::all();

        foreach ($produtos as $produto) {

            //$produto->created_at = new DateTime();

            if (preg_match("/\">/", $produto->icon_path)){
                $produto->icon_path = preg_replace("/\">/", "", $produto->icon_path);
            }

            $produto->save();
        }
    }

}
