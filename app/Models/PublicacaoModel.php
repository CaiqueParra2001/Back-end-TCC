<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicacaoModel extends Model
{
    use HasFactory;
    protected $table ='puvlicação';

    protected $fillable = ['Data_Publicacao','Cod_Comercio_FK','Validade_Publicacao'];
}
