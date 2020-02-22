<?php session_start();
require 'menu_cliente.v.php';
   require 'conexion.php';
   $consultatr=$conexion->query("SELECT*FROM cliente where id_cliente = '{$_SESSION['usuario']}' ");
   while ($rowtr=$consultatr->fetch(PDO::FETCH_ASSOC)) {
    
         $nombre=$rowtr['Nombre'];



   }

 ?>

