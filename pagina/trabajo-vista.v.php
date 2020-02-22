<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="css/lightbox.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/lightbox.js"></script>
	<link rel="stylesheet" type="text/css" href="css/index.css">

</head>
<body >
  <div class="capullo">
    
  <div class="todo-vista-tbr">
      <section class="vista-t">
      <h1><?php echo $nombre; ?></h1>
      <div class="pres-t">
        <p>Presupuesto estimado</p>
        <span><?php echo $presupuesto; ?></span>
      </div>
      <h2>Descripción tel trabajo</h2>
      <p> <?php echo nl2br($descripcion) ; ?></p>
      <div class="cj-img">
        <div >
          <?php echo $img1;
         ?>
        </div>
        <div >
          <?php echo $img2;
         ?>
        </div>
        <div >
          <?php echo $img3;
         ?>
        </div>
         
      </div>
      <h2>Sobre el empleador</h2>
      <p>Ubicación:<?php echo $distrito; ?></p>
      <p>Publicado por: <?php echo $nombre_c; ?></p>

  </section>

  <section class="obtener">
    <form id="postular" action="ajax/postular.php" method="post">
        <span><?php echo $credito; ?><p>CREDITOS</p></span>
      <div class="caja-mensaje">
         <p>Datos de contacto:</p>
         <p id="Exito" class="rgdisplay">Hola gracias por escribirme , estos son mis datos de contacto , espero su llamada , muchas gracias</p>
         <div><p id="Error" class="rgdisplay"></p></div>
      </div>
       <div></div>
        <input id="id_cli" type="text" name="id_post" value="<?php echo $post_c; ?>">
        <input title="Obten los datos de manera inmediata" id="credi" type="text" name="creditos" value="<?php echo $credito; ?>" > 

       <input type="submit"  name="" value="OBTENER DATOS">
       <p>Recuerda que al presionar el boton "Obtener datos" se le descontaran los creditos de manera automatica (* En caso haya postulado anteriormente, los creditos no seran descontados) </p> 
    </form>
     
  </section>
  
  </div>
  <section class="otros">
    <h1>Trabajos relacionados</h1>
     <section class="post-trabajos" id="post-t" >
       <div class="caja-post" id="caja-post">
         <?php foreach ($rowpost as $datopost): ?>
           <a href="trabajo-vista.php?id=<?php echo $datopost['id_post'];  ?>"  class="post-t">
          <h1><?php echo $datopost['Nombre']; ?></h1>
          <p><?php  $cadena= $datopost['Descripcion'];
                     $caracteres=200;
                     echo substr($cadena, 0, $caracteres).'...'; ?></p>
          <div class="location">
            <p><img src="img/<?php echo $datopost['Foto']; ?>"><span><?php echo $datopost['profe']; ?></span></p>
            <p><img src="img/location.png"><span><?php echo $datopost['Distrito']; ?></span></p>
            <p><img src="img/user.png"><span><?php echo $datopost['postulado']." Postulados"; ?></span></p>
          </div>
          <h4 style="padding: 15px 0" >Presupuesto estimado</h4>
          <span><?php echo $datopost['Presupuesto']; ?></span>
         </a>
         <?php endforeach ?>
         
       </div>
   </section>
  </section>
</div>
<script type="text/javascript" src="postular.js"></script>
</body>
</html>