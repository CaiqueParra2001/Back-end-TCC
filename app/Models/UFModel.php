<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UFModel extends Model
{
    use HasFactory;
    protected $table ='uf';
    public $timestamps = false;
    protected $primaryKey = 'Cod_UF';

    protected $fillable = ['Nome_UF','Sigla_UF'];
}
