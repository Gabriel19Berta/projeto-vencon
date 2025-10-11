<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'idMarca',
        'idTipoProduto',
        'status',
        'nome',
        'preco_venda',
        'preco_custo',
        'peso',
        'observacoes',
        'criado',
        'modificado',
    ];
}
