<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Editorial;

use Illuminate\Http\Request;

class CarroController extends Controller
{
    
    public function index(){
        return view("carro.index");
    }

    public function finaliza(Request $request){
        
            return view("carro.finalizaCompra", compact($request));
        
        
    }
    
    public function ajax(Request $request){
        $datos = json_decode($request->input('datos'));

        sort($datos);



        $unico = array();
        foreach($datos as $key1=>$valor){
            if(isset($unico[$valor])){
                $unico[$valor] +=1;
            }else{
                $unico[$valor] =1;
            }
        }
        $respuesta = "";
        foreach($unico as $key=>$value){
            $titulo = Producto::where('ID',$key)->first();
            $respuesta .= '<tr class="border-bottom" id="'.$titulo->ID.'"><td class="row"><div class="col-2">';

            if(file_exists('catalogo/'.$titulo->SLUG.'.jpg')){ 
                $respuesta .= '  <img src="'.asset('catalogo/'.$titulo->SLUG.'.jpg').'"  width="100%" height="auto"  alt="'.$titulo->TITULO.'">';
            }else{
                $respuesta .= ' <img src="'.asset('catalogo/no_disponible.jpg').'"  width="100%" height="auto"  alt="'.$titulo->TITULO.'">';
            }
            $respuesta .= '</div><div class="col ps-0 d-flex  align-items-center"><div><h4 class="carro_titulo ">'.$titulo->TITULO.'</h4>';
            $respuesta .= '<span class="carro_editorial">'.$titulo->getEditorial->nombreEditorial.'</span></div></div>';
            $respuesta .= '</td><td style="vertical-align:middle;"><p>$'. number_format($titulo->PRECIO, 0, ',', '.') .'</p></td>';
            $respuesta .= '<td class="d-flex  align-items-center" ><input name="a" class="elemento_cantidad"  type="number" id="'.$titulo->PRECIO.'"  step="1" value="'.$value.'" max="'.$titulo->CANTIDAD.'" min="1"></td>';
            $respuesta .= '<td style="vertical-align:middle;">';
            $respuesta .= '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  class="bi bi-trash-fill eliminar"  data-id="'.$titulo->ID.'" viewBox="0 0 16 16">
            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
          </svg>';
            $respuesta .= '</td></tr>';

                
                
        }




        
        return $respuesta;

    }
}