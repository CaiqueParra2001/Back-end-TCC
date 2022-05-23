<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensTelefoneUsuarioModel extends Model
{
    use HasFactory;
    protected $table ='itens_telefone_usuario';

    protected $fillable = ['Cod_Usuario_Fk'];
}
