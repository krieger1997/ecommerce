@extends('layouts.plantilla')
@php
              
// use Illuminate\Support\Facades\DB;
// $producto = DB::table('productos')->where('ID',$producto->ID)->first();


@endphp

@section('title',@$producto->TITULO)
@section('content')
<div class="producto mb-3">
    <div class="row">
        <div class="col-sm-6 producto_img py-2">
            <img src="https://picsum.photos/350/450?random={{$producto->ID}}"  width="100%" height="auto" class="img_fluid" alt="{{$producto->TITULO}}">
            
        </div>
        <div class="col-sm-6 producto_info py-2">
            <div class="titulo"><h1> {{$producto->TITULO}}</h1></div>
            <div class="precio mt-2" ><h3> ${{number_format($producto->PRECIO, 0, ',', '.')}}</h3></div>
            <div class="descripcion mt-5"><h4>{{$producto->DESCRIPCION}}</h4></div>
            <div class="isbn mt-5"><h5>ISBN: {{$producto->ISBN}}</h5></div>
            
        </div>
    </div>

</div>

@endsection