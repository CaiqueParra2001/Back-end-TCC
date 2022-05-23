<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvaliacaoModel extends Model
{
    use HasFactory;
    protected $table ='avaliacao';

    protected $fillable = ['Nota_Avaliacao',"Cod_Usuario_FK"];
}
