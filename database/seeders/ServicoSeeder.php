<?php

namespace Database\Seeders;

use App\Models\Servico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicos = Servico::all();

        if ($servicos->isEmpty()){
            
            $infos = json_decode(file_get_contents(public_path('servicos.json')));
        
            $infos = collect($infos);

            $infos = $infos->sortBy('id');

            foreach($infos as $info){
                Servico::create([
                    "title" => $info->title,
                    "title_modal" => $info->title_modal,
                    "icon_path" => $info->icon_path,
                    "description" => $info->description,
                ]);
            }
        }


    }
}
