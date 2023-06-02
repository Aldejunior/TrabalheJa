<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Administrador extends Authenticatable
{
    use HasFactory;

    protected $table = "administrador";

    protected $fillable = [

        'nome',
        'email',
        'senha'
    ];

    public function getAuthPassword()
    {
        return $this->senha;
    }
}

