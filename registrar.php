<?php session_start();

if (isset($_SESSION['usuario']) && isset($_SESSION['Tipo']) ) {


 header('Location:index.php');

}
require 'menu/menu_s.php';
     require 'pagina/registrar.v.php';

 ?>