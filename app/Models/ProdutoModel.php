<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoModel extends Model
{
    use HasFactory;
    protected $table ='produto';

    protected $fillable = ['Nome_Produto','Valor_Produto','Imagem_Produto','Cod_Marca_fk','Cod_Tipo_fk'];
}
