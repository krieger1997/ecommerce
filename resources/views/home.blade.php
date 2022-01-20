
@extends('layouts.plantilla')


@section('title', 'Hirai Comics')

@section('content')


      {{-- CARRUSEL- SLIDER --}}
      <div id="carouselInicio" class="carousel slide carousel1" data-bs-ride="carousel" >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('slider/slider_0.gif')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('slider/slider_1.gif')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('slider/slider_2.gif')}}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselInicio" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselInicio" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      {{-- cards novedades comics --}}

      <div class="novedades mt-3  pt-2 pb-2  ">
        <div class="d-flex justify-content-center">
          <h1>NOVEDADES COMICS</h1>          
        </div>
        <hr class="mb-3">
        <div class="carousel_comics ">
            @php
              use App\Models\Producto;
              // use App\Models\Editorial;
              //use Illuminate\Support\Facades\DB;
              $comics = Producto::where('TIPO',1)->orderBy('FECHA_LLEGADA', 'desc')->limit(12)->get();
              // $comics = DB::table('productos')->where('TIPO',1)->orderBy('FECHA_LLEGADA', 'desc')->limit(12)->get();
              $mangas = Producto::where('TIPO',2)->orderBy('FECHA_LLEGADA', 'desc')->limit(12)->get();
              // $mangas = DB::table('productos')->where('TIPO',2)->orderBy('FECHA_LLEGADA', 'desc')->limit(12)->get();
              
            @endphp 
            @foreach ($comics as $titulo)
            @php
                // $editorial = Editorial::where('ID',$titulo->EDITORIAL)->get();
                // echo $titulo->EDITORIAL;
            @endphp
            <div class="card  bg-transparent  mb-2 " id="{{$titulo->ID}}" >
              <a href="{{route('productos.show', $titulo)}}">
                {{-- <img src="{{asset('catalogo/'.@$titulo->SLUG.'.jpg')}}" class="img_card"  alt="{{$titulo->TITULO}}"> --}}
                  @if(file_exists('catalogo/'.@$titulo->SLUG.'.jpg')) 
                  <img src="{{asset('catalogo/'.@$titulo->SLUG.'.jpg')}}" class="img_card"  alt="{{$titulo->TITULO}}">
              @else
                  <img src="{{asset('catalogo/no_disponible.jpg')}}" class="img_card"  alt="{{$titulo->TITULO}}">
              @endif
              </a>
              <div class="card-body">
                <h6 class="card-subtitle mb-2 muted text-center" >{{$titulo->getEditorial->nombreEditorial}}</h6>
                {{-- <h6 class="card-subtitle mb-2 muted text-center" >{{$titulo->EDITORIAL}}</h6> --}}
                <div  class="text-center titulo1">
                  <a href="{{route('productos.show', $titulo)}}">
                    <strong><span class="card-title titulo " id="{{$titulo->ID}}">{{$titulo->TITULO}}</span></strong>
                  </a>
                </div>
                {{-- <h6 class="card-subtitle mb-2 muted text-center" >{{$titulo->EDITORIAL}}</h6> --}}
                <div class="row">
                  <div class="col-8 d-flex align-items-center ">
                    <h4 class="precio ms-3" >$ {{number_format($titulo->PRECIO, 0, ',', '.')}}</h4>
                  </div>
                  <div class="col-4">
                    <button type="button" class="btn p-0 agrega-carro"  data-id="{{$titulo->ID}}" data-titulo="{{$titulo->TITULO}}" >
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path d="M12 19.5c0-3.59 2.91-6.5 6.5-6.5l.5.025v-7.025h-5v-2c0-2.209-1.791-4-4-4s-4 1.791-4 4v2h-5v18h12.816c-1.123-1.168-1.816-2.752-1.816-4.5zm-5-15.5c0-1.654 1.346-3 3-3s3 1.346 3 3v2h-6v-2zm-4 4h3v1.5c0 .276.224.5.5.5s.5-.224.5-.5v-1.5h6v1.5c0 .276.224.5.5.5s.5-.224.5-.5v-1.5h3v4h-14v-4zm15.5 7c-2.484 0-4.5 2.015-4.5 4.5s2.016 4.5 4.5 4.5c2.482 0 4.5-2.015 4.5-4.5s-2.018-4.5-4.5-4.5zm2.5 5h-2v2h-1v-2h-2v-1h2v-2h1v2h2v1z"/></svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      {{-- FIN NOVEDADES COMICS --}}

      {{-- NOVEDADES MANGA --}}
      <div class="novedades mt-3  pt-2 mb-3">
        <div class="d-flex justify-content-center">
          <h1 >NOVEDADES MANGAS</h1>
          
        </div>
        <hr class="mb-3">
        <div class="carousel_mangas ">

            @foreach ($mangas as $titulo)
            <div class="card r bg-transparent mb-2 " id="{{$titulo->ID}}" >
              <a href="{{route('productos.show', $titulo)}}">
                {{-- <img src="{{asset('catalogo/'.@$titulo->SLUG.'.jpg')}}" class="img_card "  alt="{{$titulo->TITULO}}"> --}}
                @if(file_exists('catalogo/'.@$titulo->SLUG.'.jpg')) 
                <img src="{{asset('catalogo/'.@$titulo->SLUG.'.jpg')}}" class="img_card"  alt="{{$titulo->TITULO}}">
            @else
                <img src="{{asset('catalogo/no_disponible.jpg')}}" class="img_card"  alt="{{$titulo->TITULO}}">
            @endif
              </a>
              <div class="card-body">
                <h6 class="card-subtitle mb-2 muted text-center" >{{$titulo->getEditorial->nombreEditorial}}</h6>
                <div class="text-center titulo1">
                  <a href="{{route('productos.show', $titulo)}}">
                    <strong><span class="card-title titulo " id="{{$titulo->ID}}">{{$titulo->TITULO}}</span></strong>
                  </a>
                </div>
                {{-- <h6 class="card-subtitle mb-2 muted text-center" >{{$titulo->EDITORIAL}}</h6> --}}
                <div class="row">
                  <div class="col-8 d-flex align-items-center ">
                    <h4 class="precio ms-3">$ {{number_format($titulo->PRECIO, 0, ',', '.')}}</h4>
                  </div>
                  <div class="col-4">
                    <button type="button" class="btn p-0 agrega-carro" data-id="{{$titulo->ID}}" data-titulo="{{$titulo->TITULO}}">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path d="M12 19.5c0-3.59 2.91-6.5 6.5-6.5l.5.025v-7.025h-5v-2c0-2.209-1.791-4-4-4s-4 1.791-4 4v2h-5v18h12.816c-1.123-1.168-1.816-2.752-1.816-4.5zm-5-15.5c0-1.654 1.346-3 3-3s3 1.346 3 3v2h-6v-2zm-4 4h3v1.5c0 .276.224.5.5.5s.5-.224.5-.5v-1.5h6v1.5c0 .276.224.5.5.5s.5-.224.5-.5v-1.5h3v4h-14v-4zm15.5 7c-2.484 0-4.5 2.015-4.5 4.5s2.016 4.5 4.5 4.5c2.482 0 4.5-2.015 4.5-4.5s-2.018-4.5-4.5-4.5zm2.5 5h-2v2h-1v-2h-2v-1h2v-2h1v2h2v1z"/></svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
        </div>
      </div>
      {{-- fin NOVEDADES MANGA --}}



      <div class="editoriales mb-3">
        <div class="d-flex justify-content-center">
          <h1 >EDITORIALES</h1>
        </div>
        <hr class="mb-3">
        <div class="row">
          <div class="editorial col d-flex align-items-center"> <img src="{{asset('img/ecc.png')}}" alt="ecc logo" class="editorial_logo" > </div>
          <div class="editorial col d-flex align-items-center"> <img src="{{asset('img/ivreaesp.png')}}" alt="ivrea esp logo" class="editorial_logo" > </div>
          <div class="editorial col d-flex align-items-center"> <img src="{{asset('img/milkyway.png')}}" alt="milky way logo" class="editorial_logo" > </div>
          <div class="editorial col d-flex align-items-center"> <img src="{{asset('img/norma.png')}}" alt="norma logo" class="editorial_logo" > </div>
          <div class="editorial col d-flex align-items-center"> <img src="{{asset('img/panini.png')}}" alt="panini comics logo" class="editorial_logo" > </div>
        </div>
      </div>


      @php
        // function ra()
        //   {
        //     // $timestamp = mt_rand(strtotime("1 January 2000"), time());
        //     $timestamp = mt_rand(strtotime("1 May 2021"), time());
        //     $randomDate = date("Y-m-d", $timestamp);
        //     return $randomDate;
        //   }    

        //   $af = DB::table('productos')->where('FECHA_LLEGADA', NULL)->get();
        //   foreach($af as $a){
        //     $affected = DB::table('productos')
        //       ->where('ID', $a->ID)
        //       ->update(['FECHA_LLEGADA' => ra()]);
        //   }

          // slugger

          // $af = DB::table('productos')->get();
          // foreach($af as $a){
          //   $affected = DB::table('productos')
          //     ->where('ID', $a->ID)
          //     ->update(['SLUG' => Str::slug($a->TITULO)]);
          // }
      @endphp
      

@endsection
