<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use App\Models\TestTable;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TesteController extends Controller
{
    public function getTeste()
    {
        return TestTable::all();
    }

    public function hash()
    {
        $hash = Hash::make("1234");

        return $hash;
    }

    public function getUsuarios()
    {
        $user = User::find(1);

        return $user;

        $user->empresa = "Empresa 1";
        $user->telefone = "11552452556";
        $user->created_at = new DateTime();

        $user->save();

    }
}
