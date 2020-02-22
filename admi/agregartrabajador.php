<?php 
require '../conexion.php';
   $id = isset($_GET['id']) ? (String)$_GET['id'] : false;

   if ($id!='') {
   
      $activar=$conexion->query("UPDATE trabajador  set Estado = 'on' where id_trabajador='$id' ");

      if ($activar) {
      	header('Location:trabajadores.php');
      }



   }


 ?>