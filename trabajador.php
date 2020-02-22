<?php 
   require 'menu/menu_user.php';
   require 'conexion.php';
   $resultado='';
   $filtro = isset($_GET['filtro']) ? (String)$_GET['filtro'] : false;
  if($filtro==''){

   $consultatr=$conexion->query("SELECT profesion.Profesion as profes , trabajador.id_trabajador as id_traba , Nombre,Apellido ,Descripcion ,Foto , Estado , Distrito , Perfil   FROM trabajador inner join profesion_trabajador on trabajador.id_trabajador=profesion_trabajador.id_trabajador INNER JOIN profesion ON profesion.id_profesion = profesion_trabajador.Profesion where Estado='on'");
 $rowtr=$consultatr->fetchAll(PDO::FETCH_ASSOC);

  }else{

  	$consultatr=$conexion->query("SELECT profesion.Profesion as profes , trabajador.id_trabajador as id_traba , Nombre,Apellido, Descripcion ,Foto , Estado , Distrito , Perfil   FROM trabajador inner join profesion_trabajador on trabajador.id_trabajador=profesion_trabajador.id_trabajador INNER JOIN profesion ON profesion.id_profesion = profesion_trabajador.Profesion WHERE profesion.Profesion='$filtro' and Estado='on'  ");

 $rowtr=$consultatr->fetchAll(PDO::FETCH_ASSOC);

    if ($rowtr==false) {
      $resultado="No se econtraron datos";
    }

  }


  $consultafiltro=$conexion->query("SELECT*FROM profesion");
 $rowfiltro=$consultafiltro->fetchAll(PDO::FETCH_ASSOC);


   require 'pagina/trabajador.v.php';
   require 'menu/footer.php';
 ?>