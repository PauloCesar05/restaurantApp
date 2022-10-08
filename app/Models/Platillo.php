<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use App\Models\Ingrediente;

class Platillo extends Model
{
    use HasFactory;

    protected $tabla = 'platillos';

    protected $fillable = ['nombre', 'precio', 'categoria_id'];

    public function categoria(){
        return $this->belongsTo(categoria::class);
    }

    public function ingredientes(){
        return $this->belongsToMany(Ingrediente::class);
    }
}
