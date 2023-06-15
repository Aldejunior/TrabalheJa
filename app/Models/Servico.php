<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $table = "servicos";


    protected $fillable = [
        'titulo',
        'descricao',
    ];

    public function prestadores()
    {
        return $this->belongsToMany(Prestador::class, 'prestador_servico', 'servico_id', 'prestador_id')
        ->withPivot('valor', 'cidade', 'estado', 'cep')
        ->withTimestamps();
    }
}
