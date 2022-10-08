<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ingrediente;

class IngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ingrediente::create(['nombre' => 'Arroz']);
        Ingrediente::create(['nombre' => 'Carne']);
        Ingrediente::create(['nombre' => 'Pollo']);
        Ingrediente::create(['nombre' => 'Queso Parmesano']);
        Ingrediente::create(['nombre' => 'Cebolla']);
        Ingrediente::create(['nombre' => 'Frijol']);
        Ingrediente::create(['nombre' => 'Harina']);
        Ingrediente::create(['nombre' => 'Piña']);
        Ingrediente::create(['nombre' => 'Huevos']);
        Ingrediente::create(['nombre' => 'Tomate']);
        Ingrediente::create(['nombre' => 'Lechuga']);
        Ingrediente::create(['nombre' => 'Brócoli']);
    }
}
