@extends('layouts.plantilla')

@section('title', 'CARRO')

@section('content')
<div class="d-flex justify-content-center">
    <h1>CARRO</h1>          
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
                <form action="{{route('carro.finaliza')}}">
                

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
        </form>
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
            <a href="{{route('carro.finaliza')}}" class="w-100 d-flex justify-content-center text-decoration-none ">
                <button type="button" class="btn continuar">Continuar compra</button>
            </a>  
        </div> 
    </div>
</div>

<script>
    
function carro(datosJson){
    
    $.ajax({
        url: '{{route("carro.ajax")}}',
        // data: {'_token':'{{ csrf_token() }}','dato':'esto es el dato'},
        data: {'datos': datosJson},
        type: 'post',
        // dataType:'json',
        headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
        success: function(respuesta){
            $("tbody.carro_contenido").append(respuesta);
            
        },
        error: function(error, status, respuesta){
            console.log('AJAX error:'+error + '---'+ status + '>>>>>'+respuesta);
            console.error(JSON.stringify(error));
        },
        complete: function(){
            // var totalcarro = 0;
            var precio_delivery = 800;
            function cambia_valores(){
                var totalcarro = 0;
                $( ".elemento_cantidad" ).each(function() {
                    totalcarro = totalcarro + parseInt($(this).val()) * parseInt($(this).attr('id'));
                });
                $('.carro_total').text('$'+ new Intl.NumberFormat("de-DE").format(totalcarro));

                var checked = $('input[type=radio][name=despacho]:checked').val();
                if (checked == 'delivery') {
                    $('.despacho').text('$'+precio_delivery);
                    $('.total').text('$'+new Intl.NumberFormat("de-DE").format(parseInt(totalcarro+precio_delivery)));
                }
                else if (checked == 'envio_regiones') {
                    $('.despacho').text('$0');
                    $('.total').text('$'+new Intl.NumberFormat("de-DE").format(totalcarro));
                }
            }


            $('.elemento_cantidad').change(function(){
                cambia_valores();
            });
            $('input[type=radio][name=despacho]').change(function(){
                cambia_valores();
            });

            $('input[type=radio][name=despacho][value=envio_regiones]').prop('checked', true).change();

            $('.eliminar').click(function(){
                var id = $(this).attr('data-id');
                console.log(localStorage.getItem('carro'));
                elimina_id(id);
                console.log(localStorage.getItem('carro'));
                $('#'+id).remove();
                cambia_valores();
                
            });

            function elimina_id(id){
                carroArray = JSON.parse(localStorage.getItem('carro'));
                carroArray = carroArray.filter(ids => ids != id);
                localStorage.setItem('carro', JSON.stringify(carroArray));
            }

        }
    });
}

</script>

@endsection