<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Platillo_Ingrediente;

class PlatilloIngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Platillo_Ingrediente::create(['platillo_id' => 1, 'ingrediente_id' => 1]);
        Platillo_Ingrediente::create(['platillo_id' => 2, 'ingrediente_id' => 2]);
        Platillo_Ingrediente::create(['platillo_id' => 2, 'ingrediente_id' => 5]);
        Platillo_Ingrediente::create(['platillo_id' => 2, 'ingrediente_id' => 7]);
        Platillo_Ingrediente::create(['platillo_id' => 2, 'ingrediente_id' => 10]);
        Platillo_Ingrediente::create(['platillo_id' => 3, 'ingrediente_id' => 4]);
        Platillo_Ingrediente::create(['platillo_id' => 3, 'ingrediente_id' => 7]);
        Platillo_Ingrediente::create(['platillo_id' => 4, 'ingrediente_id' => 5]);
        Platillo_Ingrediente::create(['platillo_id' => 5, 'ingrediente_id' => 3]);
        Platillo_Ingrediente::create(['platillo_id' => 6, 'ingrediente_id' => 3]);
    }
}
