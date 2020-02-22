<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <script type="text/javascript" src="js/index.js"></script>
</head>
<body>
  <section class="busqueda-tr">
  	  <form action="trabajador.php" method="get">
  	  	 <input type="text" name="filtro">
  	  	 <input type="submit" value="Buscar">
  	  </form>
  </section>
  <section class="trabajadores-t">
    <div onclick="categoria()" class="ct-movil" id="ct-movil">
       <p>Categoria</p><img src="img/filtro.png">
    </div>
  	   <div class="tbr-f" id="caja-categoria">
  	   	   <h1>Filtrar por</h1>
           <a style="margin-top: 10px;" href="trabajador.php?filtro=">Todas las categorías</a>
  	   	   <?php foreach ($rowfiltro as $datofiltro ): ?>
            <a href="trabajador.php?filtro=<?php echo $datofiltro['Profesion'];  ?>"><img src="img/<?php echo $datofiltro['Foto']; ?>"><?php echo $datofiltro['Profesion']; ?></a>
          <?php endforeach ?>
  	   </div>
  	   <div class="tbr-p">
  	   	<?php foreach ($rowtr as $datotr): ?>
  	   		<a href="perfil.php?filtro=<?php echo $datotr['id_traba'];  ?>">
  	   	   	  <div class="foto">
  	   	   	  	<img src="trabajador/Perfil/<?php echo $datotr['Perfil']; ?>">
  	   	   	  </div>
  	   	   	  <div class="contenido-p">
  	   	   	  	<h1><?php echo $datotr['Nombre']." ".$datotr['Apellido']; ?></h1>
  	   	   	  	<p><?php  $cadena= $datotr['Descripcion'];
                     $caracteres=120;
                     echo substr($cadena, 0, $caracteres).'...'; ?></p>
  	   	   	  	<span><img src="img/<?php echo $datotr['Foto']; ?>"><p><?php echo $datotr['profes']; ?></p></span>
  	   	   	  	<span><img src="img/location.png"><p><?php echo $datotr['Distrito']; ?></p></span>
  	   	   	  </div>


  	   	   </a>
  	   	<?php endforeach ?>
  	   	  <p style="text-align: center;"><?php echo $resultado ;?></p> 
  	   </div>
  </section>
</body>
</html>