<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table ='usuarios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome_completo',
        'email',
        'password',
        'empresa',
        'telefone',
        'created_at'
    ];

    protected $with = ['produtos', 'servicos'];

    protected $appends = [
        'first_name'
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function produtos()
    {
        return $this->belongsToMany(Produto::class, 'user_produto', 'usuario_id', 'produto_id');
    }

    public function servicos()
    {
        return $this->belongsToMany(Servico::class, 'user_servico', 'usuario_id', 'servico_id');
    }

    public function getFirstNameAttribute(){
        if (strpos($this->nome_completo, " ")){
            return substr($this->nome_completo, 0, strpos($this->nome_completo, " "));
        }

        return $this->nome_completo;
       
    }
}
