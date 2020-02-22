<?php session_start();
 
 
require 'conexion.php';

// validar menu 
 require 'menu/menu_s.php';

$filtro = isset($_GET['filtro']) ? (String)$_GET['filtro'] : false;
  if($filtro==''){
	$consultapost=$conexion->query("select*from postulado INNER JOIN cliente_post on postulado.id_post = cliente_post.id_post where id_trabajador='{$_SESSION['usuario']}'");
   $rowpost=$consultapost->fetchAll(PDO::FETCH_ASSOC);
  }else{
  	$consultapost=$conexion->query("SELECT*FROM cliente_post INNER JOIN cliente ON cliente.id_cliente=cliente_post.id_cliente WHERE cliente_post.Profesion = '$filtro' ");
   $rowpost=$consultapost->fetchAll(PDO::FETCH_ASSOC);
  }


   require 'trabajador/postulacion.v.php';
   require 'menu/footer.php';

 ?>