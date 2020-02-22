<?php

  require 'menu/menu_user.php';
  require 'conexion.php';

 $consultapost=$conexion->query("SELECT id_post, profesion.Profesion as profe , Nombre ,Distrito,Descripcion,Foto,Presupuesto  FROM cliente_post  inner join profesion on cliente_post.Profesion = profesion.id_profesion   where Estado='on' order by id_post desc limit 4 ");
   $rowpost=$consultapost->fetchAll(PDO::FETCH_ASSOC);


   $conpro=$conexion->query("SELECT*FROM profesion");
   $rowpro=$conpro->fetchAll(PDO::FETCH_ASSOC);

   require 'pagina/index.v.php';
   require 'menu/footer.php';
 ?>