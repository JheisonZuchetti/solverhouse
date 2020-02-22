<?php session_start();

   require 'conexion.php';
 if (isset($_SESSION['usuario'])) {
	
  
	
} else{
	header('Location:entrar.php');
}

    $consultaprofe=$conexion->query("SELECT*FROM profesion_trabajador where id_trabajador= '{$_SESSION['usuario']}'");
    $rowprofe=$consultaprofe->fetchALL(PDO::FETCH_ASSOC);

    if($rowprofe !=false){

        header('Location:trabajos.php');

    } else{

      header('Location:seleccionprofesion.php');

    }

 ?>