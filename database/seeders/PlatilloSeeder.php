<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Platillo;

class PlatilloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Platillo::create(['nombre' => 'Sushi', 'precio' => 120.20, 'categoria_id' => 1]);
        Platillo::create(['nombre' => 'Hamburguesa', 'precio' => 220.20, 'categoria_id' => 2]);
        Platillo::create(['nombre' => 'Pizza', 'precio' => 180.20, 'categoria_id' => 2]);
        Platillo::create(['nombre' => 'Tostada de Ceviche', 'precio' => 80.00, 'categoria_id' => 2]);
        Platillo::create(['nombre' => 'Nuggets', 'precio' => 70.00, 'categoria_id' => 3]);
        Platillo::create(['nombre' => 'Sopita con Pollo', 'precio' => 55.00, 'categoria_id' => 3]);
    }
}
