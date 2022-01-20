<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')
      @if(Route::currentRouteName() != 'home' )
          | Hirai Comics
      @endif
    </title>
    <meta name="description" content="Tienda de comics, mangas y otros articulos relacionados en la región del Bio Bio, Concepción. "/>
    <meta name="keywords" content="tienda de mangas, tienda de comics, mangas en concepción, comics y mangas concepción, coleccionables, geek, otaku, conce, comics en concepción, DC, shonen, marvel, grapas en concepción,"/>
    <meta name="robots" content="index,follow" />
    <meta name="googlebot" content="index,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- no cache -->
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" integrity="sha512-6S2HWzVFxruDlZxI3sXOZZ4/eJ8AcxkQH1+JjSe/ONCEqR9L4Ysq5JdT5ipqtzU7WHalNwzwBv+iE51gNHJNqQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    


    <link rel="icon" type="image/svg" href="{{asset('logos/hc.svg')}}">
    <link rel="StyleSheet" href="{{asset('css/estilo.css')}}">
    <script  src="{{asset('js/funciones.js')}}"> </script>
    <script  src="{{asset('js/fitty.min.js')}}"> </script>

    <script  src="{{asset('js/slick/slick.min.js')}}"> </script>
    {{-- <script  src="{{asset('js/parallax/jquery.paroller.min.js')}}"> </script> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('js/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('js/slick/slick-theme.css')}}"/>
    
    

</head>
<body>
<div class="container-fluid p-0">
  
    <div class="barra_top d-flex ">
        <div class="ig me-auto ms-3">
          <svg class="rrss mx-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15.233 5.488c-.843-.038-1.097-.046-3.233-.046s-2.389.008-3.232.046c-2.17.099-3.181 1.127-3.279 3.279-.039.844-.048 1.097-.048 3.233s.009 2.389.047 3.233c.099 2.148 1.106 3.18 3.279 3.279.843.038 1.097.047 3.233.047 2.137 0 2.39-.008 3.233-.046 2.17-.099 3.18-1.129 3.279-3.279.038-.844.046-1.097.046-3.233s-.008-2.389-.046-3.232c-.099-2.153-1.111-3.182-3.279-3.281zm-3.233 10.62c-2.269 0-4.108-1.839-4.108-4.108 0-2.269 1.84-4.108 4.108-4.108s4.108 1.839 4.108 4.108c0 2.269-1.839 4.108-4.108 4.108zm4.271-7.418c-.53 0-.96-.43-.96-.96s.43-.96.96-.96.96.43.96.96-.43.96-.96.96zm-1.604 3.31c0 1.473-1.194 2.667-2.667 2.667s-2.667-1.194-2.667-2.667c0-1.473 1.194-2.667 2.667-2.667s2.667 1.194 2.667 2.667zm4.333-12h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm.952 15.298c-.132 2.909-1.751 4.521-4.653 4.654-.854.039-1.126.048-3.299.048s-2.444-.009-3.298-.048c-2.908-.133-4.52-1.748-4.654-4.654-.039-.853-.048-1.125-.048-3.298 0-2.172.009-2.445.048-3.298.134-2.908 1.748-4.521 4.654-4.653.854-.04 1.125-.049 3.298-.049s2.445.009 3.299.048c2.908.133 4.523 1.751 4.653 4.653.039.854.048 1.127.048 3.299 0 2.173-.009 2.445-.048 3.298z"/></svg>
         <span class="d-none d-md-inline">
            Síguenos en Instagram
          </span>
        </div>

        {{-- carro --}}{{-- https://iconmonstr.com/shopping-bag-1-svg/ --}}
        {{-- <div class="carro mx-5 position-relative">
          <a href="{{route('carro.index')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16 6v-2c0-2.209-1.791-4-4-4s-4 1.791-4 4v2h-5v18h18v-18h-5zm-7-2c0-1.654 1.346-3 3-3s3 1.346 3 3v2h-6v-2zm10 8h-14v-4h3v1.5c0 .276.224.5.5.5s.5-.224.5-.5v-1.5h6v1.5c0 .276.224.5.5.5s.5-.224.5-.5v-1.5h3v4z"/></svg>  
            <span class="translate-middle badge rounded-pill cantidad_carro">

              <span class="visually-hidden">elementos en carro</span>
            </span>
          </a>
        </div>  --}}

        <div class="cuenta me-4" style="display: none;">
          <a class="cuenta" href="login">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20.822 18.096c-3.439-.794-6.64-1.49-5.09-4.418 4.72-8.912 1.251-13.678-3.732-13.678-5.082 0-8.464 4.949-3.732 13.678 1.597 2.945-1.725 3.641-5.09 4.418-3.073.71-3.188 2.236-3.178 4.904l.004 1h23.99l.004-.969c.012-2.688-.092-4.222-3.176-4.935z"/></svg>
          <span class="d-none d-md-inline ">
          {{-- ¿Tienes cuenta? --}}
          {{-- <span class="cuenta "> --}}
            Acceder/Crear cuenta
          {{-- </span> --}}
        </span></a>
        </div>
    </div>

    <nav class="navbar navbar-expand-md navbar-dark   sticky-top ">
        <div class="container ">
          <a class="navbar-brand" href="/">
            {{-- <img class="logo_img" src="{{asset('logos/HIRAI_LOGO.svg')}}" alt="LOGO HIRAI COMICS" width="150" height="80"> --}}
            <img class="logo_img" src="{{asset('logos/logov2.png')}}" alt="LOGO HIRAI COMICS" width="150" height="40">
            {{-- <img class="logo_img" src="{{asset('logos/HIRAI_LOGO.svg')}}" alt="LOGO HIRAI COMICS" width="94" height="50"> --}}
          </a>
          <div class="carro_media position-relative" style="display: none;">
            <a  href="{{route('carro.index')}}">
              {{-- https://iconmonstr.com/shopping-bag-1-svg/ --}}
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16 6v-2c0-2.209-1.791-4-4-4s-4 1.791-4 4v2h-5v18h18v-18h-5zm-7-2c0-1.654 1.346-3 3-3s3 1.346 3 3v2h-6v-2zm10 8h-14v-4h3v1.5c0 .276.224.5.5.5s.5-.224.5-.5v-1.5h6v1.5c0 .276.224.5.5.5s.5-.224.5-.5v-1.5h3v4z"/></svg>  
              <span class="position-absolute top-0  translate-middle badge rounded-pill cantidad_carro">
  
                <span class="visually-hidden">elementos en carro</span>
              </span>
            </a>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <li class="nav-item mx-2">
                <a class="nav-link active" aria-current="page" href="/">INICIO</a>
                {{-- https://stackoverflow.com/questions/17591181/how-to-get-the-current-url-inside-if-statement-blade-in-laravel-4 --}}
              </li>

              <li class="nav-item mx-2">
                <a class="nav-link" href="{{route('comics.index')}}">COMICS</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="{{route('mangas.index')}}">MANGAS</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  EDITORIALES
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  @php
                    use App\Models\Editorial;
                    use Illuminate\Support\Facades\DB;
                    $editoriales = Editorial::orderBy('nombreEditorial', 'asc')->get();
                  @endphp
                  @foreach ($editoriales as $editorial)
                    <li><a class="dropdown-item" href="{{route('editorial.index', $editorial)}}">{{$editorial->nombreEditorial}}</a></li>
                  @endforeach
                </ul>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li> --}}
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn btn-outline-light btn_buscar" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"  class="bi bi-search " viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg>
              </button>
            </form>
            
            <div class="carro mx-5 position-relative">
              <a href="{{route('carro.index')}}">
                {{-- https://iconmonstr.com/shopping-bag-1-svg/ --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16 6v-2c0-2.209-1.791-4-4-4s-4 1.791-4 4v2h-5v18h18v-18h-5zm-7-2c0-1.654 1.346-3 3-3s3 1.346 3 3v2h-6v-2zm10 8h-14v-4h3v1.5c0 .276.224.5.5.5s.5-.224.5-.5v-1.5h6v1.5c0 .276.224.5.5.5s.5-.224.5-.5v-1.5h3v4z"/></svg>  
                <span class="position-absolute top-0  translate-middle  badge rounded-pill cantidad_carro">
    
                  <span class="visually-hidden">elementos en carro</span>
                </span>
              </a>
            </div> 



          </div>
        </div>
      </nav>
   
    <div class="container pt-3 ">
      @yield('content')  
    </div>


    <div class="container-fluid footer">
      <div class="container">
        {{-- <div class="row justify-content-md-center mt-3"> --}}
          <div class="row justify-content-md-center ">
          
            <div class=" col-sm-3 d-flex align-items-center my-2">
              <a href="/"><img class="logo_img img-fluid" src="{{asset('logos/logov2.png')}}" alt="LOGO HIRAI COMICS" width="300" height="80"></a>
              
            </div>
            <div class=" col-sm-3 my-2">
              <h2>Ayuda</h2>
              <hr>
              <h6>Informacion envios</h6>
              <h6>Politica de cambios y devoluciones</h6>
              <h6>Preguntas frecuentes</h6>
              <h6>Servicio al cliente</h6>
            </div>
            <div class=" col-sm-3 my-2">
              <H2>Contacto</H2>
              <hr>
              <H6>contacto@hiraicomics.cl</H6>
            </div>
            <div class=" col-sm-3 my-2">
              <H2>Síguenos en</H2>
              <hr>
              <svg class="rrss mx-2 ig" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15.233 5.488c-.843-.038-1.097-.046-3.233-.046s-2.389.008-3.232.046c-2.17.099-3.181 1.127-3.279 3.279-.039.844-.048 1.097-.048 3.233s.009 2.389.047 3.233c.099 2.148 1.106 3.18 3.279 3.279.843.038 1.097.047 3.233.047 2.137 0 2.39-.008 3.233-.046 2.17-.099 3.18-1.129 3.279-3.279.038-.844.046-1.097.046-3.233s-.008-2.389-.046-3.232c-.099-2.153-1.111-3.182-3.279-3.281zm-3.233 10.62c-2.269 0-4.108-1.839-4.108-4.108 0-2.269 1.84-4.108 4.108-4.108s4.108 1.839 4.108 4.108c0 2.269-1.839 4.108-4.108 4.108zm4.271-7.418c-.53 0-.96-.43-.96-.96s.43-.96.96-.96.96.43.96.96-.43.96-.96.96zm-1.604 3.31c0 1.473-1.194 2.667-2.667 2.667s-2.667-1.194-2.667-2.667c0-1.473 1.194-2.667 2.667-2.667s2.667 1.194 2.667 2.667zm4.333-12h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm.952 15.298c-.132 2.909-1.751 4.521-4.653 4.654-.854.039-1.126.048-3.299.048s-2.444-.009-3.298-.048c-2.908-.133-4.52-1.748-4.654-4.654-.039-.853-.048-1.125-.048-3.298 0-2.172.009-2.445.048-3.298.134-2.908 1.748-4.521 4.654-4.653.854-.04 1.125-.049 3.298-.049s2.445.009 3.299.048c2.908.133 4.523 1.751 4.653 4.653.039.854.048 1.127.048 3.299 0 2.173-.009 2.445-.048 3.298z"/></svg>
                <hr>
              <img class="" src="{{asset('img/Webpay_FN_300px.png')}}" alt="LOGO WEBPAY" width="200">
            </div>
          </div>
        
          
          

   
         
        </div>
        
      </div>
    </div> 
    <div class="container-fluid footer2 d-flex justify-content-center">
      <span class="my-2">Creado por Claudio Cabrera</span>
    </div> 
    
</div>   


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
