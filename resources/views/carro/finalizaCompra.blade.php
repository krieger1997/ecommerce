@extends('layouts.plantilla')

@section('title', 'Finalizar compra')

@section('content')
<div class="d-flex justify-content-center">
    <h1>Finalizar compra</h1>          
  </div>
  <hr>
<div class="row my-4">
    <div class="col-lg-8 muestra_carro me-4">
        <table class="table table-borderless table-responsive-sm">
            <thead >
                <tr class="border-bottom">
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="carro_contenido">
                
                

            </tbody>
        </table>
        
        
    </div>

    <div class="col-lg-3 muestra_carro2 p-3 d-flex align-content-between flex-wrap">
        <div class="w-100">
            <div class="row mb-3">
                <div class="col">
                    <h3 class="mt-1">Subtotal</h3>
                </div>
                <div class="col">
                    <p class="carro_total totales">   </p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <h3 class="mt-1">Despacho</h3>
                </div>
                <div class="col">
                    <p class="despacho  totales">   </p>
                </div>

            </div>


            <div class="form-check">
                <input class="form-check-input" type="radio" name="despacho" id="delivery" value="delivery">
                <label class="form-check-label" for="delivery">
                Delivery Concepción/Chiguayante
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="despacho" id="envio_regiones" value="envio_regiones" >
                <label class="form-check-label" for="envio_regiones">
                Envío a regiones <span class="muted">(por pagar)</span>
                </label>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <h3 class="mt-1">Total</h3>
                </div>
                <div class="col">
                    <p class="total  totales">  </p>
                </div>
            </div>
        </div>
       <div class="w-100 d-flex justify-content-center mb-3">
            <button type="button" class="btn continuar">Continuar compra</button>   
        </div> 
    </div>
</div>



@endsection