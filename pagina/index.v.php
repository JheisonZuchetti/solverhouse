<!DOCTYPE html>
<html>
<head>
	<title></title>
  
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">
	
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/slider.css">
	<link rel="stylesheet" href="css/animate.css">
  <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
</head>
<body >
 
 <div class="slider_copia">
    <div class="swiper-container">
       <div class="swiper-wrapper">
      
        <div class="swiper-slide">
           <div class="slide-inner">
               <img src="img/slider1.png">
                
                     
                    </div>
                  </div>
  <div class="swiper-slide">
    <div class="slide-inner">
        <img src="img/slider2.jpg">
      
    </div>
  </div>
  <div class="swiper-slide">
      <div class="slide-inner">
        <img src="img/slider3.jpg">
              
    </div>
  </div>
  
                </div>
      
              </div>

  <div class="content wow fadeInLeft" data-wow-duration = "2s">
        <form method="get" action="trabajador.php">
        <h1>Publica tu proyecto </h1>
        <p>Nuestra comunidad de profesionales independientes le brinda el poder 
de encontrar a la persona adecuada para cualquier proyecto.</p>
        
          
             <a href="publicarproyecto.php">Publicar Proyecto</a>
        
        
      </form>
        
      </div>
  </div>
 
 
  <section class="servicios wow fadeInLeft" data-wow-duration = "2s" >
      <h1>Encuentra un profesional para tu hogar</h1>
      <div>
        <?php foreach ($rowpro as $datopro): ?>
          <a href="trabajador.php?filtro=<?php echo $datopro['Profesion'];  ?>" class="caja-srv">
          <img src="img/<?php echo $datopro['Foto'] ?>">
          <h1><?php echo $datopro['Profesion']; ?></h1>
        </a>
          
        <?php endforeach ?>
         
        
      </div>
        
   </section>
   <section class="funcion wow fadeInLeft" data-wow-duration = "2s">
   	<h1>Haz que tu problema se solucione hoy</h1>
   	<div class="cap-f">
   		<div class="a1">
   	   	<img src="img/problema.png">
   	   	  <h1>Publica un proyecto</h1>
   	   	  <p> Utilice nuestro formulario rápido y fácil para describir el proyecto que tiene en mente. Cuantos más detalles puedas dar, más trabajadores se comunicaran con usted.  </p>
   	   </div>
   	   <div class="a2">
   	   	<img src="img/cot.png">
   	   	  <h1>Recibe propuestas</h1>
   	   	  <p> Recibe hasta 4 propuestas en cuestión de minutos.</p>
   	   </div>
   	   <div>
   	   	<img src="img/mejor.png">
   	   	  <h1>Contrata al mejor</h1>
   	   	  <p> Busque en nuestros listado profesionales independientes y  calificados.</p>
   	   </div>
   	</div>
   	   <div class="botones">
          <a href="publicarproyecto">Publicar un Trabajo</a>
          <a class="b" href="registro-trabajador.php">Unirse como trabajador</a>
       </div>
   </section>
   
   <section class="anuncios wow fadeInUp" data-wow-duration = "2s">
       <h1>Anuncios Recientes</h1>
       <div>
         <div class="caja-posta">
         <?php foreach ($rowpost as $datopost): ?>
           <a href="trabajo-vista.php?id=<?php echo $datopost['id_post'];  ?>"  class="post-t">
          <h1><?php echo $datopost['Nombre']; ?></h1>
          <p><?php  $cadena= $datopost['Descripcion'];
                     $caracteres=200;
                     echo substr($cadena, 0, $caracteres).'...'; ?></p>
          <div class="location">
            <p><img src="img/<?php echo $datopost['Foto']; ?>"><span><?php echo $datopost['profe']; ?></span></p>
            <p><img src="img/location.png"><span><?php echo $datopost['Distrito']; ?></span></p>
          </div>
          <span><?php echo $datopost['Presupuesto']; ?></span>
         </a>
         <?php endforeach ?>
         
       </div>
       </div>
   </section>
   <section class="publica wow fadeInLeft" data-wow-duration = "2s">
      <h1>Encuentra un experto para tu proyecto</h1>
      <p>Trabaja con los mejores expertos del área solicitada, cotiza de manera gratuita y segura.  </p>
      <a href="publicarproyecto">Publica Gratis</a>
   </section>
   <section class="p-preguntas wow fadeInRight" data-wow-duration = "2s">
     <h1>Preguntas frecuentes</h1>
     <div class="caja-pregunta">
        <div class="preguntas">
          <h1>¿Cómo consigo trabajo?</h1>
          <p>En solver house contamos diariamente con muchas propuestas de trabajo para el hogar, tú eliges el trabajo que deseas realizar</p>
        </div>
        <div class="preguntas">
          <h1>¿Cómo me registro?</h1>
          <p>Si eres prestador el registro lo puedes hacer desde el siguiente <a href="registro-trabajador">enlace</a> </p>
        </div>
        <div class="preguntas">
          <h1>¿Es necesario llenar mi perfil con toda la información?</h1>
          <p>Es muy importante que tengas tu perfil bien actualizado, recuerda que los clientes antes de contratarte revisaran tu propuesta y asi mismo verificaran tu perfil, un perfil completo y con toda la información genera más confianza y es punto decisivo para la contratación del servicio.</p>
        </div>
        <div class="preguntas">
          <h1>¿Por qué si ya le brindé mi propuesta, el cliente no se comunica conmigo?</h1>
          <p>Recuerda que el cliente recibirá propuestas de 4 profesionales como tú y elegirá el que mayor se ajuste a sus necesidades y le genere mayor confianza.</p>
        </div>
     </div>
     <a href="preguntas-frecuentes">Ver Todo</a>
   </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>
           
  <script>
           var interleaveOffset = 0;

          var swiperOptions = {
          effect:'fade',
          loop: true,
          speed: 1500,
          grabCursor: true,
          autoplay: true,
          watchSlidesProgress: true,
          mousewheelControl: true,
          keyboardControl: true,
          navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
                  },
           on: {
          progress: function() {
           var swiper = this;
         for (var i = 0; i < swiper.slides.length; i++) {
        var slideProgress = swiper.slides[i].progress;
        var innerOffset = swiper.width * interleaveOffset;
       var innerTranslate = slideProgress * innerOffset;
          swiper.slides[i].querySelector(".slide-inner").style.transform =
           "translate3d(" + innerTranslate + "px, 0, 0)";
                      }      
                  },
    touchStart: function() {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
                swiper.slides[i].style.transition = "";
                      }
                    },
           setTransition: function(speed) {
             var swiper = this;
           for (var i = 0; i < swiper.slides.length; i++) {
           swiper.slides[i].style.transition = speed + "ms";
              swiper.slides[i].querySelector(".slide-inner").style.transition =
              speed + "ms";
                      }
                    }
                  }
                };
                
                var swiper = new Swiper(".swiper-container", swiperOptions);

           </script>
</body>
</html>