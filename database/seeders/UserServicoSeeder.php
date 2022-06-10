<?php

namespace Database\Seeders;

use App\Models\UserServico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_servicos = UserServico::all();

        if ($user_servicos->isEmpty()){

            $infos = json_decode(file_get_contents(public_path('user-servicos.json')));

            foreach($infos as $info){
                UserServico::create([
                    "usuario_id" => $info->usuario_id,
                    "servico_id" => $info->servico_id,
                ]);
            }
        }
    }
}
