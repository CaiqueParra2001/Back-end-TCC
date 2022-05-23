<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table ='produto';

    protected $fillable = ['Nome_Produto','Valor_Produto','Imagem_Produto','Cod_Marca_FK','Cod_Tipo_FK'];
}

