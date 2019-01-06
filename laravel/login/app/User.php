<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected  $table = 'usuario';
    protected $dates= ['created_at', 'updated_at'];

    public function getAuthPassword(){
        return $this->senha;
    }

    protected $fillable = [
        'nome', 'senha',
    ];

    protected $hidden = [
        'senha', 'remember_token',
    ];
}
