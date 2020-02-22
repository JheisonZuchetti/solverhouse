<?php 


  
  require 'menu/menu.php';
  require '../conexion.php';
  
 $trabajador1=$conexion->query("SELECT trabajador.id_trabajador as id, profesion.Profesion as profe,Nombre,Apellido,Correo,Celular,Distrito FROM trabajador inner join profesion_trabajador on trabajador.id_trabajador=profesion_trabajador.id_trabajador inner join profesion on profesion_trabajador.Profesion=profesion.id_profesion where Estado='off' order by id desc");
  $rowtra1=$trabajador1->fetchAll(PDO::FETCH_ASSOC);

  $trabajador=$conexion->query("SELECT trabajador.id_trabajador as id, Nombre,Apellido,Correo,Celular,Distrito,credito FROM trabajador inner join credito on trabajador.id_trabajador=credito.id_trabajador where Estado='on' ");
  $rowtra=$trabajador->fetchAll(PDO::FETCH_ASSOC);

  


  require 'vista/trabajadores.v.php';
 ?>