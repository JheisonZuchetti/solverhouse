<?php 
 
 
require 'conexion.php';

// validar menu 
 require 'menu/menu_user.php';
  $resultado='';
$filtro = isset($_GET['filtro']) ? (String)$_GET['filtro'] : false;
  if($filtro==''){
	$consultapost=$conexion->query("SELECT id_post, profesion.Profesion as profe , Nombre ,Distrito,Foto,Descripcion,Presupuesto ,postulado FROM cliente_post  inner join profesion on cliente_post.Profesion = profesion.id_profesion   where Estado='on' order by id_post desc ");
   $rowpost=$consultapost->fetchAll(PDO::FETCH_ASSOC);
  }else{
  	$consultapost=$conexion->query("SELECT id_post, profesion.Profesion as profe , Nombre ,Distrito,Descripcion,Foto,Presupuesto ,postulado FROM cliente_post  inner join profesion on cliente_post.Profesion = profesion.id_profesion   where Estado='on'  and   profesion.Profesion = '$filtro' order by id_post desc");
   $rowpost=$consultapost->fetchAll(PDO::FETCH_ASSOC);

    if ($rowpost==false) {
    	$resultado="No se econtraron publicaciones";
    }
  }

 



 
 $consultafiltro=$conexion->query("SELECT*FROM profesion");
 $rowfiltro=$consultafiltro->fetchAll(PDO::FETCH_ASSOC);

   require 'pagina/trabajos.v.php';
   require 'menu/footer.php';

 ?>