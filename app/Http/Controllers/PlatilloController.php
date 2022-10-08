<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Platillo;
use App\Models\Categoria;

class PlatilloController extends Controller
{
    public function ejemplo(){
        $platillo=Platillo::find(1)->with('categoria');
        dd($platillo);
    }

    public function consultarPlatillos(){
        //Consultar los Platillos
        $platillos = Platillo::all();

        return view('menu', compact('platillos'));
    }
}
