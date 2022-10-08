<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class platillo_ingrediente extends Model
{
    use HasFactory;

    protected $tabla = 'platillo_ingredientes';

    protected $fillable = ['ingrediente_id', 'platillo_id'];
}
