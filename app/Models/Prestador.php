<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Prestador extends Authenticatable
{
    use HasFactory;

    protected $table = "prestadores";

    protected $fillable = [
        'nome',
        'email',
        'senha',
        'cpf_cnpj',
        'telefone'
    ];

    public function servicos()
    {
        return $this->belongsToMany(Servico::class, 'prestador_servico', 'prestador_id', 'servico_id')
            ->withPivot('valor', 'cidade', 'estado', 'cep')
            ->withTimestamps();
    }

    public function getAuthPassword()
    {
        return $this->senha;
    }
}
