<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnderecoModel extends Model
{
    use HasFactory;
    protected $table ='endereco';

    protected $fillable = ['Rua_Endereco','Numero_Endereco','Bairro_Endereco','Cod_Cidade_FK'];
}
