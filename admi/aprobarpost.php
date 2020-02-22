<?php 
require '../conexion.php';
   $id = isset($_GET['id']) ? (String)$_GET['id'] : false;

   if ($id!='') {
   
      $activar=$conexion->query("UPDATE cliente_post set Estado = 'on' where id_post='$id' ");

      if ($activar) {
      	header('Location:proyecto.php');
      }



   }


 ?>