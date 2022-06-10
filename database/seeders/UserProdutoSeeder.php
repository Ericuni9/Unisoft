<?php

namespace Database\Seeders;

use App\Models\UserProduto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_produtos = UserProduto::all();

        if ($user_produtos->isEmpty()){

           $infos = json_decode(file_get_contents(public_path('user-produtos.json')));
           
            foreach($infos as $info){
                UserProduto::create([
                    "usuario_id" => $info->usuario_id,
                    "produto_id" => $info->produto_id,
                ]);
            }
        }


    }
}
