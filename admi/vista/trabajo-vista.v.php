
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="../css/lightbox.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="../js/lightbox.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/index.css">

</head>
<body>
  <div class="todo-vista-tbr">
      <section class="vista-t">
      <h1><?php echo $nombre; ?></h1>
      <div class="pres-t">
        <p>Presupuesto estimado</p>
        <span><?php echo $presupuesto; ?></span>
      </div>
      <h2>Descripción tel trabajo</h2>
      <p> <?php echo $descripcion; ?></p>
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
      <p>Celular: <?php echo $celular; ?></p>
      <p>Solicitud: <?php echo $solicitud; ?></p>
      <p>Pedido: <?php echo $pedido; ?></p>

  </section>

  <section class="obtener">
     <form  id="credito-ag"  class="credito-ag" action="trabajo-vista.php">
      <input type="hidden" name="id" value="<?php echo $post_c; ?>">
      <h1>Agregar Créditos</h1>
         <input type="text" name="credito" required="" placeholder="Valor del post">
         <div>
           <p id="Exito" class="rgdisplay" >creditos agregados</p>
         </div>
         <button>Agregar</button>
      <a href="aprobarpost.php?id=<?php echo $post_c ;?> " >Activar Post </a>
      <a href="eliminarpost.php?id=<?php echo $post_c ; ?>" >Eliminar Post</a>
     </form>

  </section>

  </div>
<script type="text/javascript" src="credito.js"></script>
</body>
</html>