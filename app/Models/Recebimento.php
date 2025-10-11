<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recebimento extends Model
{
    protected $fillable = [
        'valor',
        'forma_pagamento',
        'data',
        'criado',
        'modificado',
    ];
}
