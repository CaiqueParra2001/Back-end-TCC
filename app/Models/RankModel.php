<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RankModel extends Model
{
    use HasFactory;
    protected $table ='rank';

    protected $fillable = ['Classifica_Rank','Cod_Avaliacao_FK','Nota_Avaliacao','Cod_Comercio_FK','Cod_Usuario_FK'];
}
