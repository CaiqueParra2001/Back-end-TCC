<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComercioModel extends Model
{
    use HasFactory;
protected $table ='comercio';

    protected $fillable = ['Nome_Comercio','Email_Comercio','Senha_Comercio','Confirma_Senha','Cep_Comercio','CNPJ_Comercio','Cod_Cidade_FK'];
    
}
