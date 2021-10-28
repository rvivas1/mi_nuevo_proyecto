<?php

namespace App\Http\Controllers;
use App\Models\Categoria;

use Illuminate\Http\Request;


class CategoriaController extends Controller
{
    //
    public function index(){
        $categoria=Categoria::all();
        return ['categoria'=>$categoria];

    }


    public function store(Request $request){
        $categoria= new Categoria();
        $categoria-> nombre=$request->nombre;
        $categoria-> estado=$request->edo;

        $categoria->save();
        
    }
}
