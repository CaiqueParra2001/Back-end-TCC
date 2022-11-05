<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UFModel extends Model
{
    use HasFactory;
    protected $table ='uf';

    protected $fillable = ['Nome_UF','Sigla_UF'];
}
