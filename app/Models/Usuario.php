<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable, HasFactory;
    protected $fillable = [
        'nome', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function inscricoes(){
        return $this->hasMany(Inscricao::class);
    }
}
