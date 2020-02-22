<!DOCTYPE html>
<html>
<head>
	<title></title>
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
   <script type="text/javascript" src="actualiza.js"></script>
</head>
<body>
<div class="l-todo" id="contenido">
	<div name="timediv" id="timediv" class="l-derecho">
   	   <h2>Trabajadores</h2>
   	   <table>
   	   	  <tr>
   	   	  	
   	   	  	 <td class="titu">Nombres</td>
   	   	  	 <td class="titu">Correo</td>
   	   	  	 <td class="titu">Celular</td>
   	   	  	 <td class="titu">Dirección</td>
   	   	  	  <td class="titu">Crédito</td>

   	   	  </tr>
   	   	  <?php foreach ($rowtra as $rowtra ): ?>
   	   	  	 <tr>
   	   	  	 
   	   	  	 <td class="celda"><?php echo $rowtra['Apellido']." ".$rowtra['Nombre']; ?></td>
   	   	  	 <td class="celda"><?php echo $rowtra['Correo']; ?></td>
   	   	  	 <td class="celda"><?php echo $rowtra['Celular']; ?></td>
   	   	  	 <td class="celda"><?php echo $rowtra['Distrito']; ?></td>
   	   	  	 <td class="celda"><?php echo $rowtra['credito']; ?></td>
   	   	  	 <td><a href="perfil.php?id=<?php echo $rowtra['id'];  ?>">Agregar Crédito</a></td>
   	   	  	 <td><a href="suspendertrabajador.php?id=<?php echo $rowtra['id'];  ?>">Suspender</a></td>
   	   	  </tr>
   	   	  <?php endforeach ?>
   	   </table>
   </div>

   <div name="timediv" id="timediv" class="l-izquierdo">
   	  <h2>Solicitudes</h2>
   	  <table>
   	   	  <tr>
   	   	  	 <td class="titu">ID</td>
   	   	  	 <td class="titu">Nombres</td>
   	   	  	 <td class="titu">Correo</td>
   	   	  	 <td class="titu">Celular</td>
   	   	  	 <td class="titu">Dirección</td>
   	   	  	 <td class="titu">Profesión</td>
   	   	  	  <td class="titu"></td>
   	   	  	   <td class="titu"></td>

   	   	  </tr>
   	   	  <?php foreach ($rowtra1 as $rowtra1 ): ?>
   	   	  	 <tr>
   	   	  	 <td class="celda"><?php echo $rowtra1['id']; ?></td>
   	   	  	 <td class="celda"><?php echo $rowtra1['Apellido']." ".$rowtra1['Nombre']; ?></td>
   	   	  	 <td class="celda"><?php echo $rowtra1['Correo']; ?></td>
   	   	  	 <td class="celda"><?php echo $rowtra1['Celular']; ?></td>
   	   	  	 <td class="celda"><?php echo $rowtra1['Distrito']; ?></td>
             <td class="celda"><?php echo $rowtra1['profe']; ?></td>
   	   	  	 <td><a href="perfil.php?id=<?php echo $rowtra1['id'];  ?>">Ver</a></td>
   	   	  	 <td><a href="#">Eliminar</a></td>
   	   	  </tr>
   	   	  <?php endforeach ?>
   	   </table>
   </div>
   
</div>
   
</body>
</html>