<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamacao extends Model
{
    use HasFactory;
    protected $table = 'reclamacoes';

    protected $fillable = [
            "caso",
            "mensagem" ,
            "referencia",
            "contacto" ,
            "bairro",
            "file",
            "senha",
            "rua",
            "posto"
    ];

}
