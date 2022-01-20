<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    public function index(){
        return view("productos.index");
        
    }
    // public function show($id){
    //     if (DB::table('productos')->where('ID',$id)->exists()) {
    //         return view('productos.show', ['id'=>$id]);
    //     }else{
    //         return abort(404);
    //     }


        
    // }
    public function show(Producto $producto){
        // if (DB::table('productos')->where('ID',$id)->exists()) {
                    return view('productos.show', compact('producto'));
                    // return view('productos.show', ['id'=>$producto]);
            //     }else{
            //         return abort(404);
            //     }
    }


    
}
