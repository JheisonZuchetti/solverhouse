<?php 
require '../conexion.php';
   $id = isset($_GET['id']) ? (String)$_GET['id'] : false;

   if ($id!='') {
   
      $activar=$conexion->query("DELETE FROM cliente_post where id_post='$id' ");

      if ($activar) {
      	header('Location:proyecto.php');
      }



   }


 ?>