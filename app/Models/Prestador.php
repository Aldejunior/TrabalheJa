<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestador extends Model
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
}
