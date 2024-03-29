<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Business extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['name',
    'cpf_cnpj',
    'logo',
    'phone',
    'address',
    'user_id'];
}
