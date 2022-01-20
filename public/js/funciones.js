
var mediaQuery = window.matchMedia("(max-width: 768px)");
 var carro = ' <div class="carro_media ">'+
          '<a href="/carro">'+
            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16 6v-2c0-2.209-1.791-4-4-4s-4 1.791-4 4v2h-5v18h18v-18h-5zm-7-2c0-1.654 1.346-3 3-3s3 1.346 3 3v2h-6v-2zm10 8h-14v-4h3v1.5c0 .276.224.5.5.5s.5-.224.5-.5v-1.5h6v1.5c0 .276.224.5.5.5s.5-.224.5-.5v-1.5h3v4z"/></svg>'+  
            '<span class="translate-middle badge rounded-pill cantidad_carro">'+
              '<span class="visually-hidden">elementos en carro</span>'+
            '</span>'+
          '</a>'+
        '</div>';


function media(x){
  if(x.matches){
    $('.carro').hide('slow');
    $('.carro_media').show();
   // $('body').append(carro);
  }else{
    $('.carro').show('slow');
    // if($('body').hasClass('carro_media')){
    //   $('body').remove(carro);
    // }
    $('.carro_media').hide();
  }
}

$(window).scroll(function () {
    var barra_top = $('.barra_top').height();
    

    if ($(window).scrollTop() >= barra_top) {
      $('.navbar').addClass('scrolled ');
      //media(mediaQuery);

    }else {
      $('.navbar').removeClass('scrolled');
      //media(mediaQuery);
    }
});



$( document ).ready(function() {
  media(mediaQuery);
  
  // CARRO
 
  let carroArray;
  if (localStorage.getItem('carro') && localStorage.getItem('carro') != '') {
    carroArray = JSON.parse(localStorage.getItem('carro'));
    //carroArray = localStorage.getItem('carro');
  } else {
    carroArray = [];
  }

  var carroFinal = JSON.parse(localStorage.getItem('carro'));
  $('.cantidad_carro').text(cantidad_carro());

  
  $('.agrega-carro').click(function(){
    var id = $(this).attr('data-id');
    var titulo  = $(this).attr('data-titulo');
    carroArray.push(id);
    localStorage.setItem('carro', JSON.stringify(carroArray));
    toastr.success('Agregado al carrito.', titulo);
     $('.cantidad_carro').text(cantidad_carro());
    //console.log(cantidad_carro());
  });

  

  var carroFinal = JSON.parse(localStorage.getItem('carro'));
  // $('.carro').click(function(){
  //   //abrir ruta a vista carrito
  //   var carroFinal = JSON.parse(localStorage.getItem('carro'))
  //   //console.log(carroFinal.length);
  // });

  function cantidad_carro(){
    if(carroFinal != null){
      carroFinal = JSON.parse(localStorage.getItem('carro'));
      return carroFinal.length;
    }else{
      return 0;
    }
  }
  function elimina_id(id){
    carroArray = JSON.parse(localStorage.getItem('carro'));
    carroArray = carroArray.filter(ids => ids != id);
    localStorage.setItem('carro', JSON.stringify(carroArray));
  }
  

  if(window.location.pathname == '/carro'){
    // console.log(JSON.stringify(carroFinal));
    carro(JSON.stringify(carroFinal));
    $('.carro').hide();
    $('.carro_media').hide();

    
    

    // console.log(localStorage.getItem('carro'));
//     $.ajax({
//       url: '{{route("carro.ajax")}}',
//       data: {'_token':'{{ csrf_token() }}','dato':'esto es el dato'},
//       type: 'post',
//       dataType:'json',
//       headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
      
//       success: function(respuesta){
//         console.log('AJAX RESPUESTA CORRECTA!');
//         console.log(respuesta);
//       },
//       error: function(error, status, respuesta){
//         console.log('AJAX error:'+error + '---'+ status + '>>>>>'+respuesta);
//         console.error(JSON.stringify(error));
//       }
//     });
}



  $('.card_link').click(function(){
    window.location.href = $(this).data('href');
  });


    $('.carousel_comics, .carousel_mangas').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        // autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: false
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              arrows: false
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 2,
              slidesToScroll:  1,
              arrows: false
            }
          }
        ]
      });



   $('.ig').click(function(){
    window.open('https://www.instagram.com/hiraicomics', '_blank');
   });

  //  $( ".titulo" ).each(function() {
  //       fitty(this,{
  //           multiLine: true,
  //           maxSize: 20,
  //           minSize: 12
  //       });
  //   });

});


// class Carrito {
//   constructor(clave) {
//       this.clave = clave || "productos";
//       this.productos = this.obtener();
//   }

//   agregar(producto) {
//       if (!this.existe(producto.id)) {
//           this.productos.push(producto);
//           this.guardar();
//       }
//   }

//   quitar(id) {
//       const indice = this.productos.findIndex(p => p.id === id);
//       if (indice != -1) {
//           this.productos.splice(indice, 1);
//           this.guardar();
//       }
//   }

//   guardar() {
//       localStorage.setItem(this.clave, JSON.stringify(this.productos));
//   }

//   obtener() {
//       const productosCodificados = localStorage.getItem(this.clave);
//       return JSON.parse(productosCodificados) || [];
//   }

//   existe(id) {
//       return this.productos.find(producto => producto.id === id);
//   }

//   obtenerConteo() {
//       return this.productos.length;
//   }


// }
