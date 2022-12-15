<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elogio extends Model
{
    use HasFactory;
    protected $table = 'elogios';

    protected $fillable = [
        'nome_elogio',
	    'descricao',
	    'referencia',
	    'sector',
    ];

}
