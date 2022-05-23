<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model
{
    use HasFactory;
    protected $table ='usuario';

    protected $fillable = ['Nome_Usuario','Email_Usuario','Senha_Usuario'];
}
