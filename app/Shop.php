<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
	'razao',
	'nome',
	'cnpj_cpf',
	'fundacao',
	'endereco',
	'telefone',
	'total'
	];
}
