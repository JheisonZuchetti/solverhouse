<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>

   <section class="post-trabajos">
   	   <div class="caja-post">
         <?php foreach ($rowpost as $datopost): ?>
           <a href="trabajo-vista.php?id=<?php echo $datopost['id_post'];  ?>"  class="post-t">
          <h1><?php echo $datopost['Nombre']; ?></h1>
          <p><?php echo $datopost['Descripcion']; ?></p>
          <h4 style="padding: 15px 0" >Presupuesto estimado</h4>
          <span><?php echo $datopost['Presupuesto']; ?></span>
         </a>
         <?php endforeach ?>
   	   	 
   	   </div>
   </section>
</body>
</html>