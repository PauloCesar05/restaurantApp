<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Platillo;

class PlatilloController extends Controller
{
    public function ejemplo(){

        $nombre = 'Paulo Cesar';
        $numeros = [25,54,95,5,19];
        $peliculas = ['cars1,cars2,cars3,toystory1,toystory2,toystory3'];

        return view('ejemplo', compact('nombre','peliculas','numeros'));
    }

    public function consultarPlatillos(){
        //Consultar los Platillos
        $platillos = Platillo::all();

        return view('menu', compact('platillos'));
    }
}
