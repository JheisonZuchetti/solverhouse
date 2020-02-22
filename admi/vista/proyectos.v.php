<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
<div class="l-todo">
	<div class="l-derecho">
   	   <h2>Posteos activos</h2>
   	   <table>
              <tr>
               
                <td class="titu">Nombres</td>
               
                <td class="titu">Presupuesto</td>
                <td class="titu">Celular</td>
                
                 <td class="titu">Profesión</td>
                  
                   <td class="titu"></td>

              </tr>
              <?php foreach ($rowtra as $rowtra ): ?>
                <tr>
                
                <td class="celda"><?php echo $rowtra['Nombre']; ?></td>
                
                <td class="celda"><?php echo $rowtra['Presupuesto']; ?></td>
                <td class="celda"><?php echo $rowtra['celular']; ?></td>
             <td class="celda"><?php echo $rowtra['Profesion']; ?></td>
            
                <td><a href="trabajo-vista.php?id=<?php echo $rowtra['id_post'];  ?>">Ver</a></td>
              </tr>
              <?php endforeach ?>
         </table>
   </div>

   <div class="l-izquierdo">
   	  <h2>Solicitudes</h2>
   	  <table>
   	   	  <tr>
   	   	  	 <td class="titu">Nombres</td>
             <td class="titu">Celular</td>
   	   	  	 <td class="titu">Presupuesto</td>
   	   	  	 <td class="titu">Solicitud</td>
   	   	  	
   	   	  	   <td class="titu"></td>
                   <td class="titu"></td>

   	   	  </tr>
   	   	  <?php foreach ($rowtra1 as $rowtra1 ): ?>
   	   	  	 <tr>
   	   	  	 
   	   	  	 <td class="celda"><?php echo $rowtra1['Nombre']; ?></td>
   	   	  	 <td class="celda"><?php echo $rowtra1['celular']; ?></td>
   	   	  	 <td class="celda"><?php echo $rowtra1['Presupuesto']; ?></td>
   	   	  	 <td class="celda"><?php echo $rowtra1['Tipo']; ?></td>
   	   	  	 <td><a href="trabajo-vista.php?id=<?php echo $rowtra1['id_post'];  ?>">Ver</a></td>
   	   	  	 <td><a href="eliminarpost.php?id=<?php echo $rowtra1['id_post'];  ?>">Eliminar</a></td>
   	   	  </tr>
   	   	  <?php endforeach ?>
   	   </table>
   </div>

</div>
   
</body>
</html>