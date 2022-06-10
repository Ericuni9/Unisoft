<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $all_users = User::all();

        if($all_users->isEmpty()){

            $users = json_decode(file_get_contents(public_path('users.json')));
        
            foreach($users as $user){
                User::create([
                    "id" => $user->id,
                    "nome_completo" => $user->nome_completo,
                    "email" => $user->email,
                    "password" => $user->password,
                    "empresa" => $user->empresa,
                    "telefone" => $user->telefone,
                ]);
        }
        }



    }
}
