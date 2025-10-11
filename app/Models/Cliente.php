<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
     protected $fillable = [
          'status',
          'nome',
          'cpf',
          'cnpj',
          'rg',
          'celular',
          'telefone',
          'email',
          'cep',
          'endereco',
          'cidade',
          'complemento',
          'uf',
          'data_nascimento',
          'criado',
          'modificado',
     ];
}
