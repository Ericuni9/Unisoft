<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produtos = Produto::all();

        if ($produtos->isEmpty()){

            $infos = json_decode(file_get_contents(public_path('produtos.json')));
        
            $infos = collect($infos);

            $infos = $infos->sortBy('id');

            foreach($infos as $info){
                Produto::create([
                "title" => $info->title,
                "icon_path" => $info->icon_path,
                "description" => $info->description,
                "description_long" => $info->description_long
                ]);
            }
        }


    }
}
