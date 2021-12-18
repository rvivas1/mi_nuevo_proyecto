<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Modelo;
use inertia\inertia;


class ModeloController extends Controller
{
    //
    public function getModelo(Request $request){
        $idMarca = $request->idMarca;
        $modelos=Modelo::select("id","nombre")
        ->where("id_marca",$idMarca)
        ->get();
        return["modelo"=>$modelos];
    }
}
