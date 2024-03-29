<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Avaliation extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['note',
'comment',
'business_id',
'user_id'];
}
