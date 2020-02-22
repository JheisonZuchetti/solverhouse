<?php 
 require '../conexion.php';


 $consulta=$conexion->query("SELECT*FROM trabajador where Estado='off' ");
 $rowt=$consulta->fetchAll(PDO::FETCH_ASSOC);


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="../css/admin.css">
 </head>
 <body>
  <section class="traba-alta">
  	    <?php foreach ($rowt as $rowtd): ?>
  	    	<div class="cajita-activador">
  	    		<h2><?php echo $rowtd['Nombre']." ".$rowtd['Apellido'] ?></h2>
  	    		<a href="perfil.php?filtro=<?php echo $rowtd['id_trabajador'];  ?>">Ver Perfil
  	    		
  	    	</a>
  	    	<a href="perfil.php?filtro=<?php echo $rowtd['id_trabajador'];  ?>">Activar
  	    		
  	    	</a>
  	    	</div>
  	    	
  	    <?php endforeach ?>
  </section>
 </body>
 </html>