<?php

namespace App\Http\Controllers;
use App\Models\Producto;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function index(){
        $producto= Producto::all();
        return ['producto'=> $producto];
    }

    public function store(request $request){
        $producto = new Producto();
        $producto-> cod_prod = $request-> codProd;
        $producto-> nombre = $request-> nombre;
        $producto-> precio = $request-> precio;
        $producto-> cantidad = $request-> cantidad;
        $producto-> fec_ven = $request-> fecVen;
        $producto-> estado = $request-> edo;

        $producto->id_marca = $request->idMarca;
        $producto->id_categ = $request->idCateg;

        $producto->save();
    }
    public function update(Request $request){
        $producto= Producto::findOrFail($request->id);
        $producto-> cod_prod = $request-> cod_prod;
        $producto-> nombre = $request-> nombre;
        $producto-> precio = $request-> precio;
        $producto-> cantidad = $request-> cantidad;
        $producto-> fec_ven = $request-> fec_ven;
        $producto-> estado = $request-> estado;

        $producto-> id_marca = $request-> id_marca;
        $producto-> id_categ = $request-> id_categ;

        $producto->save();
    }

    public function destroy(Request $request){
        $producto= Producto:: findOrFail($request->id);
        $producto->delete();
    }
}
