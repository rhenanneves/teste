<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;


class Empresa extends Authenticatable
{
    use Notifiable, HasFactory;
    protected $fillable = [
        'nome','nomeEmpresa', 'email', 'password', 'descricaoEmpresa'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function vagas (){
        return $this->hasMany(Vaga::class);
    }
}
