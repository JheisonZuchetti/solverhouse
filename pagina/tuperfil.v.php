<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/lightbox.js"></script>

	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
  <section class="port-p">
  	 <img src="trabajador/Portada/slider2.jpg">
  </section>
  <form action="tuperfil.php" class="formulario_f" id="formulario_f" method="post"  enctype="multipart/form-data" >
  <div class="perfil-t">
  	  <div class="t-foto">
  	  	  <div class="img-fot" >
  	  	  	<img src="trabajador/Perfil/<?php echo $perfil; ?>">
  	  	  </div>
          <div class="img-perfil">
          
          <label  for="files"  >Subir foto</label>
        <input type="file" name="foto" id="files"  >
         <output id="list"></output>
        
         </div>
  	  	  <div class="info-p">
  	  	  	<div>
  	  	  	 	<img src="img/<?php echo $foto; ?>">
  	  	  	 	<p><?php echo $profe; ?></p>
             </p>
  	  	  	 </div>
             <div>
              <?php echo $finalf; ?>
              <p><?php echo $profe1; ?></p>
             </p>
             </div>
  	  	  	 <div>
  	  	  	 	<img src="img/location.png">
  	  	  	 	<p><?php echo $distrito ?></p>
  	  	  	 </div>
  	  	  </div>
  	  </div>
  	  <div class="t-des">
  	  	  <h1><?php echo $nombre." ". $apellido; ?></h1>
  	  	  <textarea name="descripcion"><?php echo $descripcion; ?></textarea>
  	  	  <input type="hidden" name="id" value="<?php echo $id; ?>">

  	  	  <h2>Especialidades</h2>

  	  	  <?php foreach ($rowct as $datoct ): ?>
            <li><?php echo $datoct['categoria']; ?></li>
          <?php endforeach ?>
          <br>
          <h2>Otras especialidades</h2>
        <?php foreach ($rowct1 as $datoct1 ): ?>
            <li><?php echo $datoct1['categoria']; ?></li>
          <?php endforeach ?>
          <input type="submit" name="" value="Guardar">
  	  </div>

  </div>

  </form>
  <!--
  <section class="portafolio">
  	<h1>Últimos trabajos</h1>
  	 <div class="cap-porta">
  	 	<a href='img/slider1.jpg' data-lightbox='Foto' data-title='foto' >
            <img src='img/slider1.jpg'>	
        </a>
        <a href='img/slider1.jpg' data-lightbox='Foto' data-title='foto' >
            <img src='img/slider1.jpg'>	
        </a>
        <a href='img/slider1.jpg' data-lightbox='Foto' data-title='foto' >
            <img src='img/slider1.jpg'>	
        </a>
        <a href='img/slider1.jpg' data-lightbox='Foto' data-title='foto' >
            <img src='img/slider1.jpg'>	
        </a>
        <a href='img/slider1.jpg' data-lightbox='Foto' data-title='foto' >
            <img src='img/slider1.jpg'>	
        </a>
        <a href='img/slider1.jpg' data-lightbox='Foto' data-title='foto' >
            <img src='img/slider1.jpg'>	
        </a>
  	 </div>
  	   
  </section>
  <section class="comentarios">
  	<h1>Comentarios </h1>
  	  <div class="caja-coment">
        <div class="cajita-c">
         	 <h1>Jose carlos gutierres</h1>
  	  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  	  	tempor incididunt ut labore et dolore magna aliqua. </p>
  	  	<div>
  	  		<img src="img/location.png">
  	  		<p>Cercado de Lima</p>
  	  	</div>
         </div>
         <div class="cajita-c">
         	 <h1>Jose carlos gutierres</h1>
  	  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  	  	tempor incididunt ut labore et dolore magna aliqua. </p>
  	  	<div>
  	  		<img src="img/location.png">
  	  		<p>Cercado de Lima</p>
  	  	</div>
         </div>
         <div class="cajita-c">
         	 <h1>Jose carlos gutierres</h1>
  	  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  	  	tempor incididunt ut labore et dolore magna aliqua. </p>
  	  	<div>
  	  		<img src="img/location.png">
  	  		<p>Cercado de Lima</p>
  	  	</div>
         </div>
  	  	
  	  </div>

  </section> -->
  <script type="text/javascript" src="js/subir.js"></script>
</body>
</html>