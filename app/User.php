<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function endereco()
    {
        return $this->morphToMany('\App\Endereco', 'enderecavel');
    }

    public function telefone()
    {
        return $this->morphToMany('\App\Telefone', 'telefonavel');
    }
    
    public function loja()
    {
        return $this->hasMany('\App\Loja');
    }

    public function pedido()
    {
        return $this->hasMany('\App\Pedido');
    }
}
