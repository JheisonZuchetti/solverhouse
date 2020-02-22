<?php 


  require 'menu/menu.php';

  require '../conexion.php';

  $trabajador=$conexion->query("SELECT *FROM cliente_post inner join profesion on cliente_post.profesion=profesion.id_profesion where Estado='on' ");
  $rowtra=$trabajador->fetchAll(PDO::FETCH_ASSOC);

  
 $trabajador1=$conexion->query("SELECT *FROM cliente_post inner join profesion on cliente_post.profesion=profesion.id_profesion where Estado='off' order by id_post desc");
  $rowtra1=$trabajador1->fetchAll(PDO::FETCH_ASSOC);

 
  

  require 'vista/proyectos.v.php';
 ?>