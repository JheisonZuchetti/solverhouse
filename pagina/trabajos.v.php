<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
  <script type="text/javascript" src="js/index.js"></script>
</head>
<body>

   <section class="post-trabajos">
    <div onclick="categoria()" id="ct-movil" class="ct-movil"><p>Categoria</p><img src="img/filtro.png"></div>
   	   <div id="caja-categoria" class="caja-categoria">
   	   	  <h1>Filtrar por profesión</h1>
          <a href="trabajos.php?filtro=">Todos</a>
          <?php foreach ($rowfiltro as $datofiltro ): ?>
            <a href="trabajos.php?filtro=<?php echo $datofiltro['Profesion'];  ?>"><img src="img/<?php echo $datofiltro['Foto']; ?>"><?php echo $datofiltro['Profesion']; ?></a>
          <?php endforeach ?>
   	   </div>
   	   <div class="caja-post">
         <?php foreach ($rowpost as $datopost): ?>
           <a href="trabajo-vista.php?id=<?php echo $datopost['id_post'];  ?>"  class="post-t">
          <h1><?php echo $datopost['Nombre']; ?></h1>
          <p><?php  $cadena= $datopost['Descripcion'];
                     $caracteres=200;
                     echo substr($cadena, 0, $caracteres).'...'; ?></p>
          <div class="location">
            <p><img src="img/<?php echo $datopost['Foto']; ?>"><span><?php echo $datopost['profe']; ?></span></p>
            <p><img src="img/location.png"><span><?php echo $datopost['Distrito']; ?></span></p>
            <p><img src="img/user.png"><span><?php echo $datopost['postulado']." Postulados "; ?></span></p>
          </div>
          <h4 style="padding: 15px 0" >Presupuesto estimado</h4>
          <span><?php echo $datopost['Presupuesto']; ?></span>
         </a>
         <?php endforeach ?>
   	   	 <p class="resul"><?php echo $resultado; ?></p>
   	   </div>
   </section>
</body>
</html>