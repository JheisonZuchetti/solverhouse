<?php session_start();

if (isset($_SESSION['usuario']) && isset($_SESSION['Tipo']) ) {


   if ($_SESSION['Tipo']=='administrador') {

     require 'menu/menu.php';
   require 'vista/admin.v.php';
   	}
   	else{
   		header('location:../index.php');
   	}
   }
 ?>